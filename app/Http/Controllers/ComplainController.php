<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\Auth;
use App\T1;
use App\Replay;
use App\User;
use App\Employee;
use App\Complain;
use App\Ccomplete;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
class ComplainController extends Controller
{
    public function complainadd($eid){
    //$cm=Complain::where('eid','=',$eid)->first();
        
       $cm = DB::table('employee')
            ->join('users','employee.eid','=','users.eid')
            ->select('employee.name','employee.eid')
            ->where('employee.eid','=',$eid)->first();
    return view('complain')->with('c',$cm);
}
public function complainpost($eid){
        if(Auth::check()){
        $name=Input::get('name');    
        $vahicle_no=Input::get('vahicle_no');
        //$vahicle_sim_no= Input::get('vahicle_sim_no');
        //$client_phone= Input::get('client_phone');
        $complain_type=Input::get('complain_type');
        $complain=Input::get('complain');
        $is_solved=Input::get('solv');
        if($is_solved=='No'){
      $complain_status=Input::get('complain_status');
        }
         if($is_solved=='Yes'){
            $complain_status='No Status';
        }
        $eid=Input::get('eid');
        $date=date('dmyhs');
        $cm = new Complain;
        $cm->name= $name;
        $cm->vahicle_no=$vahicle_no;
        //$cm->vahicle_sim_no=$vahicle_sim_no;
        //$cm->client_phone=$client_phone;
        $cm->complain_type=$complain_type;
        $cm->complain=$complain;
        $cm->is_solved=$is_solved;
        $cm->complain_status=$complain_status;
        $cm->eid=$eid;
        $cm->time= $date;
        $cm->account_type='Employee';
        $cm->save();
        Session::flash('saved',1);
        Mail::send('mail/complainmail',array('sname'=>$name,'svahicle_no'=>$vahicle_no,'scomplain_type'=>$complain_type,'scomplain'=>$complain,'sis_solved'=>$is_solved,'scomplain_status'=>$complain_status,'stime'=>$date),function($message){
            
            $message->to('besuwasmdmoin@gmail.com')->subject('Welcome to Akash Technology !');
        });
        Mail::send('mail/complainmail',array('sname'=>$name,'svahicle_no'=>$vahicle_no,'scomplain_type'=>$complain_type,'scomplain'=>$complain,'sis_solved'=>$is_solved,'scomplain_status'=>$complain_status,'stime'=>$date),function($message){
            
            $message->to('saifcse06@gmail.com','Saif')->subject('Welcome to Akash Technology !');
        });
        return Redirect::to('complain/'.$eid);}else{return 'not logged in!';}
    }
public function carsearch($eid){
     if(Auth::check()){ 
            $vq =Complain::all();
            return view('searchcar')->with('v',$vq);
    }

        else{return 'not logged in!';}
}

public function viewmore($id){
 if(Auth::check()){ 
            $vq =Complain::where('id','=',$id)->get();
            $vr=Replay::where('complain_iD','=',$id)->get();
        return view('view_more')->with('v',$vq)->with('rmsg',$vr);
    }   else{return 'not logged in!';}
}

public function replaymsg($id){
if(Auth::check()){
    
        $msg=Input::get('msg');
        $date=date('dmyhs');
        $nn = new Replay;
        $nn->msg=$msg;
        $nn->complain_id=$id;
        $nn->from_name=Auth::user()->name;
        $nn->time= $date;
        $nn->save();
       
        Session::flash('saved',1);
        return Redirect::to('viewmore/'.$id);}else{return 'not logged in!';}
}

    public function viewmsg($eid){
        if(Auth::check()){ 

            $vq =Complain::orderBy('id','DESC')->where('eid','=',$eid)->where('incharge_status','=',0)->get();

        return view('view_msg')->with('v',$vq);
    }

        else{return 'not logged in!';}
    }
 public function inchargemsg(){
        if(Auth::check()){ 

           /// $vq =Complain::orderBy('id','DESC')->where('account_type','=','Employee')->get();
            $vq=Complain::orderBy('id','DESC')->where('incharge_status','=',0)->where('account_type','=','Employee')->get();
        return view('inchargemsg_view')->with('v',$vq);
    }

        else{return 'not logged in!';}
    }

public function updatestatuspost($id){
    if(Auth::check()){
        $up = Complain::where('id','=',$id)->update(['incharge_status'=>1]);
        Session::flash('saved',1);
        return Redirect::to('inchargemsg');}else{return 'not logged in!';}
}




public function employeeviewmore($id){
    if(Auth::check()){ 
            $vq =Complain::where('id','=',$id)->get();
            $vr=Replay::where('complain_iD','=',$id)->get();
        return view('employee_viewmore')->with('v',$vq)->with('rmsg',$vr);
    }

        else{return 'not logged in!';}
}

public function employeeviewmorep($id){
   if (Auth::check()){
    
        $msg=Input::get('msg');
        $date=date('dmyhs');
        $nn = new Replay;
        $nn->msg=$msg;
        $nn->complain_id=$id;
        $nn->from_name=Auth::user()->name;
        $nn->time= $date;
        $nn->save();
       
        Session::flash('saved',1);
        return Redirect::to('employeeviewmore/'.$id);}else{return 'not logged in!';}
}
}
