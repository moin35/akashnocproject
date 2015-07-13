<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('logout','HomeController@logout');
Route::get('/', 'HomeController@getlogin');
Route::post('/', 'HomeController@postlogin');
Route::get('dashboard','HomeController@index');
Route::get('superadmin','HomeController@superadmin');
Route::get('incharge','HomeController@incharge');//incharge dashboard
Route::get('employee','HomeController@employee');//employee dashbboard

Route::get('add','HomeController@getadd');
Route::post('add','HomeController@postadd');
Route::get('rud','HomeController@getrud');

Route::get('inchargemsg','ComplainController@inchargemsg');
Route::get('updatestatus/{id}','ComplainController@updatestatuspost');// Update inchaarge Status for employee
Route::get('taskupdate/{id}','TaskController@taskupdatepost');// Update incharge Status for Technician
Route::get('technicianupdate/{id}','TaskController@tpost');
Route::get('complain/{eid}','ComplainController@complainadd');
Route::post('complain/{eid}','ComplainController@complainpost');
Route::get('search/{eid}','ComplainController@carsearch');

Route::get('viewmore/{id}','ComplainController@viewmore');//view massage
Route::post('viewmore/{id}','ComplainController@replaymsg');

Route::get('employeeviewmore/{id}','ComplainController@employeeviewmore');
Route::post('employeeviewmore/{id}','ComplainController@employeeviewmorep');

Route::get('details/{eid}','HomeController@viewrecord');//view profile record

Route::get('viewmsg/{eid}','ComplainController@viewmsg');//view complain massage
Route::get('update/{eid}','HomeController@updaterecordg');//update profile
Route::post('update/{eid}','HomeController@updaterecordp');

Route::get('updatepass/{eid}','HomeController@updatepassg');
Route::post('updatepass/{eid}','HomeController@updatepassp');



Route::get('installation','TaskController@taskget');
Route::post('installation','TaskController@taskpost');

Route::get('taskdetail/{email}','TaskController@taskview');
Route::get('detailview/{id}','TaskController@taskdetailview');
Route::post('detailview/{id}','TaskController@treplay');

Route::get('taskdetailview/{id}','TaskController@techniciandetailview');

Route::get('allemployee','TaskController@allemployeeview');
Route::get('aemployee','TaskController@allemployeadmineview');
Route::get('inchargetask','TaskController@inchargetaskview');

Route::get('technicianview/{id}','TaskController@technicianview');


Route::get('reg','HomeController@getreg');
Route::post('reg','HomeController@postreg');

Route::get('dailyreport/{id}','TaskController@employeereport');//Employee Success job List 
Route::get('incomplete/dailyreport','TaskController@employeeincompletereport');
Route::get('delete/{id}','TaskController@deleteemployee');

Route::get('all/technician','TaskController@alltechnician');//View all Technician
Route::get('tdailyreport','TaskController@techniciandetail');//view detail Technician

Route::get('techniciandailyreport/{id}','TaskController@fulldetailtechnician');
Route::post('notice','TaskController@noticeboardpost');
Route::get('notice','TaskController@noticeboardget');

Route::get('imessage','InmessageController@inchargemessageget');
Route::post('imessage','InmessageController@inchargemessagepost');

Route::get('inchargeview/{id}','InmessageController@inchargeviewget');//get incharge message
Route::post('inchargeview/{id}','InmessageController@inchargeviewreplaypost');//replay incharge message

Route::get('inchargeincomeing','InmessageController@inchargeincomeinget');
Route::get('employeeview/{id}','InmessageController@inchargeemployeeview');


Route::get('nocinchargeview/{id}','InmessageController@nocinchargeviewget');
Route::post('nocinchargeview/{id}','InmessageController@nocinchargeviewpost');

Route::get('inchargetoemployeeview/{id}','InmessageController@inchargetoemployeeviewget');
Route::post('inchargetoemployeeview/{id}','InmessageController@inchargetoemployeeviewpost');


Route::get('employee/updatestatus/{id}','InmessageController@employeeupdatestatus');
Route::get('incharge/updatestatus/{id}','InmessageController@inchargeupdatestatus');

Route::get('userlist/{eid}','HomeController@userlist');


Route::get('setpre/{eid}','HomeController@setpreviligeget');
Route::post('setpre/{eid}','HomeController@setpreviligepost');












