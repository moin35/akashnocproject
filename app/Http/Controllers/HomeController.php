<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\Auth;
use App\T1;
use App\User;
use App\Notice;
use App\Employee;
use App\Complain;
use App\Task;
use App\Inmessage;
use App\Header;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
function priv(){
  return  Auth::user()->privilege;
}
class HomeController extends Controller
{
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    public function getlogin(){
    if(Auth::check()){
        return Redirect::to('dashboard');
    }
    else {
        return view('login');
    }    }

    public function postlogin(){
        if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('pass')])){
            if(Auth::check()){

                return Redirect::to('dashboard');

            }
        }
        else
        {
             Session::flash('saved',1);
            return view('login');
             
        }
    }

    public function index(){
        if(Auth::check()){
        if(priv() == 1){
         
                 $dm=Complain::where('incharge_status','=',0)->get();
                $status=Complain::where('incharge_status','=',0)->pluck('incharge_status');
                $tv=Task::orderBy('id','DESC')->where('incharge_status','=',0)->get();
                $tstatus=Task::where('incharge_status','=',0)->pluck('incharge_status');
                $in=Inmessage::orderBy('id','DESC')->where('status','=',0)->get();
                $instatus=Inmessage::where('status','=',0)->pluck('status');
                $nb=Notice::orderBy('id','DESC')->first();
                $countmember=Employee::all()->count();
                
                  return view('dashboard.superadmin')->with('k',$dm)->with('status',$status)->
                  with('j',$tv)->
                  with('tstatus',$tstatus)->
                  with('s',$in)->
                  with('instatus',$instatus)->
                  with('notice',$nb)->
                  with('countmember',$countmember);
             }
            if(priv() == 2){
               
                 $dm=Complain::where('incharge_status','=',0)->get();
                $status=Complain::where('incharge_status','=',0)->pluck('incharge_status');
                $tv=Task::orderBy('id','DESC')->where('incharge_status','=',0)->get();
                $tstatus=Task::where('incharge_status','=',0)->pluck('incharge_status');
                $in=Inmessage::orderBy('id','DESC')->where('status','=',0)->get();
                $instatus=Inmessage::where('status','=',0)->pluck('status');
                $nb=Notice::orderBy('id','DESC')->first();
                $mecounnoc=Complain::where('incharge_status','=',0)->count();
                  
                  return view('dashboard.incharge')->
                  with('k',$dm)->with('status',$status)->
                  with('j',$tv)->with('tstatus',$tstatus)->
                  with('s',$in)->with('instatus',$instatus)->
                  with('notice',$nb)->
                  with('mecounnoc',$mecounnoc);
            }
            if(priv() == 3){
                $mecoun=Inmessage::where('to_name','=',Auth::user()->name)->where('status','=',0)->count();
                $mecountask=Task::where('incharge_status','=',0)->count();
                
                $nb=Notice::orderBy('id','DESC')->first();
                return view('dashboard.employee')->
                with('notice',$nb)->
                with('mcount',$mecoun)->
                with('mecountask',$mecountask);
            }
            if(priv() == 4){
                $nb=Notice::orderBy('id','DESC')->first();
                return view('dashboard.welcome')->with('v',$nb)->with('notice',$nb);
            }
        }
         else
            {
                return 'not logged in!';
            }
       
    }
    public function viewrecord($id){
        if(Auth::check()){ 
            $vq =Employee::where('eid','=',$id)->first();
            
            return view('details')->with('d',$vq);} 
            else{return 'not logged in!';}
    }

    public function updaterecordg($eid){
        if(Auth::check()){

        $vq =Employee::where('eid','=',$eid)->first();
        
        return view('update')->with('r',$vq);}else{return 'not logged in!';}
    }
    public function updaterecordp($eid){
        if(Auth::check())
            { 
                if(Input::hasFile('image')){
          $extension = Input::file('image')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'employeeimage/';
                        Input::file('image')->move($destinationPath,$fname);
                       $final=$fname;
                   }   

        }
        else{

            $final='';
        }


/*if( $request->hasFile('pic') ){
    $path = 'images/';
    $file = Image::make(input::file('pic'));
    $fileName = Input::file('pic')->getClientOriginalName();
    $file->save($path."original/".$fileName);
    $students->original = $path."original/".$fileName;
    //get the desire image size
    $file->fit(120,90);
    $file->save($path."fit/".$fileName);
    $students->image = $path."fit/".$fileName; 
    }*/



                $up = Employee::where('eid','=',$eid)->
                update(['name'=>Input::get('name'),'email'=>Input::get('email'),
                    'dep_name'=>Input::get('dep_name'),
                    'designation'=>Input::get('designation'),
                    'responsblity'=>Input::get('responsblity'),
                    'img'=>$final]);
                $up = User::where('eid','=',$eid)->update(['name'=>Input::get('name')]);
        Session::flash('u',1);
        return Redirect::to('details/'.$eid);}else{return 'not logged in!';}
    }





public function updatepassg($eid){
        if(Auth::check()){

        $pass =User::where('eid','=',$eid)->first();
        
        return view('passchange')->
        with('pass',$pass);}else{return 'not logged in!';}
    }
    public function updatepassp($eid){
        if(Auth::check())
            { 
         $pass1 = Input::get('newp');
         $pass2 = Input::get('newp1');
         if($pass1 == $pass2){
         $pass = Hash::make($pass1);
        $u = User::where('eid','=',$eid)->update(array('password'=>$pass));

            Session::flash('passok','Password Changed Successfully!'); //notification for password matched
            return Redirect::to('dashboard');
         }
         else{
            
            Session::flash('passok','Password Didnot Change!'); //notification for password matched
            return Redirect::to('dashboard');
            }
                
                 }
                 else
                 {
                    return 'not logged in!';
                }
    }




    public function getreg(){
        $ry = User::all();
        return view('reg')->with('v',$ry);
    }

    public function postreg(){
        
        $email=Input::get('email');
        $chak=User::where('email','=',$email)->count();
        if($chak>0)
        {
        Session::flash('em',1);
        return Redirect::to('reg');

        }
    else
    {
        $name=Input::get('name');
        $dep_name=Input::get('dep_name');
        $designation=Input::get('designation');
        $responsblity=Input::get('responsblity');
        $eid=Input::get('eid');
        $phone_no=Input::get('phone_no');
        $account_type=Input::get('account_type');
        
        $password = Hash::make(Input::get('password'));

        if(Input::hasFile('image')){
          $extension = Input::file('image')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'employeeimage/';
                        Input::file('image')->move($destinationPath,$fname);
                       $final=$fname;
                   }   

        }
        else{

            $final='';
        }
        
        $nn = new User;
        $nn->name=$name;
        $nn->email=$email;
        $nn->eid=$eid;
        $nn->privilege=3;
        $nn->created_at=date('ymdhms');
        $nn->password=$password;
        $nn->save();

        $em=new Employee;
        $em->name=$name;
        $em->eid=$eid;
        $em->dep_name=$dep_name;
        $em->designation=$designation;
        $em->responsblity=$responsblity;
        $em->phone_no=$phone_no;
        $em->email=$email;
        $em->img=$final;
        $em->account_type=$account_type;
        $em->save();

        Mail::send('mail/regmail',array('name'=>$name,'email'=>$email),function($message){
                $message->to(Input::get('email'))->subject('Welcome to Akash Technology !');
        });
        Session::flash('saved',1);
                
        return Redirect::to('/');
        }    
    }
public function userlist($eid){
    if(Auth::check()){
        $usl=User::all();
        return view('userlist')->with('em',$usl);
    } else{return 'not logged in!';}
}

public function setpreviligeget($eid){
    if(Auth::check()){
        $up = User::where('eid','=',$eid)->first();
        return view('setprevlige')->with('pr',$up);
    } else{return 'not logged in!';}
}

public function setpreviligepost($eid){
    if(Auth::check()){
        $up = User::where('eid','=',$eid)->update(['privilege'=>Input::get('privilege')]);
        Session::flash('saved',1);
        return Redirect::to('setpre/'.$eid);
    } else{return 'not logged in!';}
}

public function headerget($eid){
    if(Auth::check()){
        $hd=Header::orderBy('id','DESC')->first();
        return view('header_logo')->with('p',$hd);
    }else {return 'Not logged in!';}
}

public function headerpost($eid){
    if(Auth::check()){
        $cname=Input::get('company_name');
        if(Input::hasFile('image')){
          $extension = Input::file('image')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'employeeimage/';
                        Input::file('image')->move($destinationPath,$fname);
                       $final=$fname;
                   }   

        }
        else{

            $final='';
        }



if(Input::hasFile('fev')){
          $extension = Input::file('fev')->getClientOriginalExtension();
                   if($extension=='ico'|| $extension=='ICO'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'employeeimage/';
                        Input::file('fev')->move($destinationPath,$fname);
                       $fev=$fname;
                   }   

        }
        else{

            $fev='';
        }



        $header=new Header;
        $header->company_name=$cname;
        $header->logo=$final;
        $header->fev=$fev;
//return $header;
        $header->save();
        Session::flash('saved',1);    
        return Redirect::to('header/'.$eid);


    }else {return 'not logged in!';}
}


public function updateheaderget($eid){
        if(Auth::check()){

        
        $hd=Header::orderBy('id','DESC')->first();
        return view('update_header')->with('p',$hd);}else{return 'not logged in!';}
    }
    public function updateheaderpost($eid){
        if(Auth::check())
            { 
                if(Input::hasFile('image')){
          $extension = Input::file('image')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'employeeimage/';
                        Input::file('image')->move($destinationPath,$fname);
                       $final=$fname;
                   }   

        }
        else{

            $final='';
        }


if(Input::hasFile('fev')){
          $extension = Input::file('fev')->getClientOriginalExtension();
                   if($extension=='ico'|| $extension=='ICO'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'employeeimage/';
                        Input::file('fev')->move($destinationPath,$fname);
                       $fev=$fname;
                   }   

        }
        else{

            $fev='';
        }
           $up = Header::where('eid','=',$eid)->
                update(['company_name'=>Input::get('company_name'),'logo'=>$final,'fev'=>$fev]);
                
        Session::flash('u',1);
        return Redirect::to('updateheader/'.$eid);}else{return 'not logged in!';}
    }

/*public function errorget(){
  return view('error');
}*/




}