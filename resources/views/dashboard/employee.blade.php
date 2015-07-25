@extends('layouts.master')
@section('title')
    Home!Employee
@stop
@section('body')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
       <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="{!!$mecountask!!} New message " class="well top-block" href="{{URL::to('technicianview/'.Auth::user()->id)}}">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages From Incharge For Technican</div>
            <div>{!!$mecountask!!}</div>
            <span class="notification red">{!!$mecountask!!}</span>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="{!!$mcount!!} New message " class="well top-block" href="{{URL::to('nocinchargeview/'.Auth::user()->eid)}}">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages From Incharge</div>
            <div>{!!$mcount!!}</div>
            <span class="notification red">{!!$mcount!!}</span>
        </a>
    </div>
</div>
         
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Notice Board</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-md-12">
              
                    <h1 class="text-center">{{$notice->title}} <br>
                     </h1>
                    <h3>{{$notice->msg_field}}</h3>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
              <div class="box-content row">
                <div class="col-md-12">
               
                    <h1 style="font-size:100px;" ><p class="text-center">NOC</p></h1>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop

