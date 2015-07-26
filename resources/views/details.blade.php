@extends('layouts/master')
@section('title')
Details of {{$d->name}}
@stop
@section('body')
@if(Session::get('u'))
                    <h2 class="text-center">Record Successfully updated!</h2>
                @endif

<div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Update Your Profile</h2>

                    <div class="box-icon"> 
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">

                <img src="{{URL::to('/')}}/employeeimage/{{$d->img}}"  class="center-block img-circle img-responsive" width="100" height ="100">
                             <h4>Name: {{$d->name}}</h4>
            <h4>Email: {{$d->email}}</h4>
			<h4>Departmant name: {{$d->dep_name}}</h4>
			<h4>Designation: {{$d->designation}}</h4>
			<h4>Responsblity: {{$d->responsblity}}</h4>
			<h4>Phone no: {{$d->phone_no}}</h4>
			<a href="{{URL::to('update/'.Auth::user()->eid)}}" class="btn btn-primary">Edit Record</a>
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->
           
           	
			
@stop