@extends('layouts.master')
@section('title')
   Task Full Detail
@stop
@section('body')  
 <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Message</h2>

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
               <h2 class="text-center" style="color:green;">Task Full detail</h2>
            <h4 style="color:green;">Message sender name: {{$task->assign_by}}.</h4>
            <h4>Vahicle No: {{$task->vahicle_no}}.</h4>
            <h4>Address: {{$task->address}}.</h4>
            <h4>Client No: {{$task->phone}}.</h4>
            <h4>Installation Date & Time: {{$task->install_time}}.</h4>
            <h4>Assign To: {{$task->assign_to}}.</h4>
            <h4>Email: {{$task->email}}.</h4><hr>
                  
            <a href="{{URL::to('/')}}/technicianupdate/{{$task->id}}" class="btn btn-primary">Complete</a>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

           
@stop