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
use App\Inmessage;
use App\Inmessagereplay;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class InmessageController extends Controller
{
    public function inchargemessageget(){
        if(Auth::check()){
            $mes=Inmessage::all();
            return view('incharge_message')->with('ms',$mes);
        } else{return 'not logged in !';}
    }
public function inchargemessagepost(){
    if(Auth::check()){
        $from_name=Input::get('from_name');
        $email=Input::get('email');
        $eid=Employee::where('email','=',$email)->pluck('eid');
        $to_name=Employee::where('email','=',$email)->pluck('name');
        $msg=Input::get('msg');
        $date=date('dmyhs');
        $ms=new Inmessage;
        $ms->from_name=Auth::user()->name;
        $ms->email=$email;
        $ms->msg=$msg;
        $ms->eid=$eid;
        $ms->to_name=$to_name;
        $ms->time=$date;
        $ms->save();
        Mail::send('mail/imsgmail',array('from'=>$from_name,'msg'=>$msg),function($message){
                $message->to(Input::get('email'))->subject('Welcome to Akash Technology !');
        });
        Session::flash('Saved',1);
        return Redirect::to('imessage');
    } else{return 'not logged in !';}
}
public function inchargeviewget($id){
    if(Auth::check()){

        $msv=Inmessage::where('id','=',$id)->get();
        $inr=Inmessagereplay::where('inmessage_id','=',$id)->get();
        return view('inchargeview')->with('inv',$msv)->with('in',$inr);
    } else{return 'not logged in !';}
}
public function inchargeincomeinget(){
    if(Auth::check()){
        $in=Inmessage::orderBy('id','DESC')->where('status','=',0)->get();

        return view('intoin_view')->with('im',$in);
    } else{return 'not logged in!';}
}
public function inchargeviewreplaypost($id){
    
    if(Auth::check()){
        $msg=Input::get('msg');
       
        $irp=new Inmessagereplay;
        $irp->msg=$msg;
        $irp->inmessage_id=$id;

        $irp->from_name=Auth::user()->name;
        $irp->save();
        
        Session::flash('saved',1);
        return Redirect::to('inchargeview/'.$id);
    } else{return 'not logged in!';}
}

public function inchargeemployeeview($id){
    if(Auth::check()){
         $msv=Inmessage::where('eid','=',$id)->where('status','=',0)->get();
        $inr=Inmessagereplay::where('inmessage_id','=',$id)->get();
        return view('employeeview')->with('inv',$msv)->with('in',$inr);
    } else {return 'not logged in!';}
}
public function employeeupdatestatus($id){
   
    if(Auth::check()){
        $up = Inmessage::where('id','=',$id)->update(['status'=>1]);
        Session::flash('saved',1);
        return Redirect::to('employeeview/'.$id);}else{return 'not logged in!';}
}
public function inchargeupdatestatus($id){
                if(Auth::check()){
                $p = Inmessage::where('id','=',$id)->update(['status'=>1]);
            Session::flash('saved',1);
            return Redirect::to('inchargeincomeing');} else{return 'not logged in!';}
           
}


public function nocinchargeviewget($id){
   if(Auth::check()){
        $in=Inmessage::orderBy('id','DESC')->where('status','=',0)->get();

        return view('nocinchargeview')->with('im',$in);
    } else{return 'not logged in!';}
}

public function inchargetoemployeeviewget($id){
   if(Auth::check()){

        $msv=Inmessage::where('id','=',$id)->get();
        $inr=Inmessagereplay::where('inmessage_id','=',$id)->get();
        return view('inchargetoemployeeview')->with('inv',$msv)->with('in',$inr);
    } else{return 'not logged in !';}
}

public function inchargetoemployeeviewpost($id){
    
    if(Auth::check()){

        $msg=Input::get('msg');
       
        $irp=new Inmessagereplay;
        $irp->msg=$msg;
        $irp->inmessage_id=$id;

        $irp->from_name=Auth::user()->name;
        $irp->save();
        
        Session::flash('saved',1);
        return Redirect::to('inchargetoemployeeview/'.$id);
    } else{return 'not logged in!';}
}



}
