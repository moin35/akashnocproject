<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\Auth;
use App\Replay;
use App\Task;
use App\User;
use App\Notice;
use App\Employee;
use App\Header;
use App\Taskreplay;
use App\Complain;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
class TaskController extends Controller
{
  public function taskget(){
    $ts=Task::all();

  /*$ts= DB::table('employee')
       ->join('users','employee.eid','=','users.eid')
       ->select('employee.eid')
       ->where('employee.eid','=',$eid)->first('eid');*/
  return view('installation')->with('task',$ts);
   }
public function taskpost(){
if(Auth::check()){
        $type=Input::get('type');
        $vahicle_no=Input::get('vahicle_no');
        $address=Input::get('address');
        $phone=Input::get('phone');
        $install_time=Input::get('install_time');
      
        $assign_by=Auth::user()->name;
        $assign_to=Input::get('assign_to');
        $email=Input::get('email');
        $eid=Employee::where('email','=',$email)->pluck('eid');
        $date=date('dmyhs');

        $ts=new Task;
        $ts->type=$type;
        $ts->vahicle_no=$vahicle_no;
        $ts->address=$address;
        $ts->phone=$phone;
        $ts->install_time=$install_time;
        
        $ts->assign_by=$assign_by;
        $ts->email=$email;
        $ts->assign_to=$assign_to;
        $ts->account_type='Technician';
        $ts->date= $date;
        $ts->eid=$eid;
         $ts->save();
        Session::flash('saved',1);
        Mail::send('mail/taskmail',array('type'=>$type,'vahicle_no'=>$vahicle_no,'address'=>$address,'phone'=>$phone,'install_time'=>$install_time,'assign_by'=>$assign_by,'assign_to'=>$assign_to,'email'=>$email),function($message){
        $message->to(Input::get('email'), Input::get('assign_to'))->subject('Welcome to Akash Technology !');
        });
        return Redirect::to('installation');} else{return 'Not loged in';}
   }
         public function taskview($email){
            $ts=Task::where('email','=',Auth::user()->email)->get();
            return view('taskdetail')->with('task',$ts);
        }

public function taskdetailview($id){
    if(Auth::check()){
            $td =Task::where('id','=',$id)->first();
            $vr=Taskreplay::where('task_id','=',$id)->get();
        return view('detailview')->with('task',$td)->with('trmsg',$vr);
    } else{return 'not logged in!';}
}
public function techniciandetailview($id){
    if(Auth::check()){
            $td =Task::where('id','=',$id)->first();
        
        return view('techniciandetail')->with('task',$td);
    } else{return 'not logged in!';}
}


public function treplay($id){
if(Auth::check()){
        $msg=Input::get('msg');
        $date=date('dmyhs');
        $nn = new Taskreplay;
        $nn->msg=$msg;
        $nn->task_id=$id;
        $nn->name=Auth::user()->name;
        $nn->time= $date;
        $nn->save();
        Session::flash('saved',1);
        return Redirect::to('detailview/'.$id);}else{return 'not logged in!';}
}

public function inchargetaskview(){
    $ts=Task::orderBy('id','DESC')->where('incharge_status','=',0)->where('account_type','=','Technician')->get();
  return view('incharge_taskview')->with('task',$ts);
}
public function technicianview($id){
    $ts=Task::orderBy('id','DESC')->where('incharge_status','=',0)->where('account_type','=','Technician')->get();
  return view('technician_taskview')->with('task',$ts);
}
public function allemployeeview(){
    if(Auth::check()){ 
               $emp =Employee::where('account_type','=','Employee')->get();
        return view('employeelist')->with('em',$emp);
    }
        else{return 'not logged in!';}
}


public function allemployeadmineview(){
    if(Auth::check()){ 
       // return 'OK';
            $emp =Employee::all();
            
        return view('aemployeelist')->with('em',$emp);
    }else{return 'not logged in!';}
}


public function deleteemployee($id){
        if(Auth::check()){
        $dq=User::where('eid','=',$id)->delete();
        $de=Employee::where('eid','=',$id)->delete();
        Session::flash('em',1);
        return Redirect::to('allemployee');}else{return 'not logged in!';}
    }

public function employeereport($id){//Employee Success Report
    if(Auth::check()){
        $dm=Complain::where('eid','=',$id)->where('incharge_status','=',1)->get();
        $status=Complain::where('eid','=',$id)->pluck('incharge_status');
        return view('edailydetail')->with('v',$dm)->with('status',$status);
    } else{return 'not logged in!';}
}

public function noticeboardget(){
    if(Auth::check()){
        $nb=Notice::all();
        return view('notice')->with('v',$nb);
    } else {return 'not logged in !';}

}

public function noticeboardpost(){
    if (Auth::check()){
        $title=Input::get('title');
        $msg=Input::get('msg_field');
        $email=Input::get('email');
        $date=date('dmyhs');
        $nb=new Notice;
        $nb->title=$title;
        $nb->msg_field=$msg;
        $nb->email=$email;
        $nb->created_at=$date;
        $nb->save();
        Session::flash('saved',1);
        return Redirect::to('notice');}else{return 'not logged in!';}
    }
public function alltechnician(){
    if(Auth::check()){
        $tech=Employee::where('account_type','=','Technician')->get();
        return view('alltechnician')->with('tc',$tech);
    } else{return 'not logged in !';}
}
public function techniciandetail(){
    if(Auth::check()){
        $tech=Employee::where('account_type','=','Technician')->get();

        return view('alltechnician')->with('tc',$tech);
    } else{return 'not logged in !';}
}


public function fulldetailtechnician($id){
if(Auth::check()){
    $tv=Task::orderBy('id','DESC')->where('incharge_status','=',1)->where('eid','=',$id)->get();
    $tstatus=Task::where('eid','=',$id)->pluck('incharge_status');
    return view('tdailyreport')->with('ts',$tv)->with('tstatus',$tstatus);
} else{return 'not logged in!';}

}

public function taskupdatepost($id){
if(Auth::check()){
        $up = Task::where('id','=',$id)->update(['incharge_status'=>1]);
        Session::flash('saved',1);
        return Redirect::to('inchargetask');}else{return 'not logged in!';}
}
public function tpost($id){
if(Auth::check()){
        $up = Task::where('id','=',$id)->update(['incharge_status'=>1]);
        Session::flash('saved',1);
        return Redirect::to('technicianview/'.$id);}else{return 'not logged in!';}
}
}
