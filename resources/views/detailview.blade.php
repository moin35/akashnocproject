@extends('layouts.master')
@section('title')
   Task Full Detail
@stop
@section('body')  

 <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Task Full detail</h2>

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
              <h4>Message sender name: {{$task->assign_by}}.</h4>
            <h4>Vahicle No: {{$task->vahicle_no}}.</h4>
            <h4>Address: {{$task->address}}.</h4>
            <h4>Client No: {{$task->phone}}.</h4>
            <h4>install_time: {{$task->install_time}}.</h4>
            <h4>assign_to: {{$task->assign_to}}.</h4>
            <h4>email: {{$task->email}}.</h4><hr>
                
                
                <div class="box-content" style="text-align:right;">
                 
            @foreach($trmsg as $d)
            <h4>Massage sender name: {{$d->name}}</h4>
            <h4>Replaying Massage: {{$d->msg}}.</h4><hr>
            @endforeach
            <a href="{{URL::to('/')}}/taskupdate/{{$task->id}}" class="btn btn-primary">Solved</a>
                {!!Form::open()!!}
                <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
                {!!Form::hidden('name',$task->name,['class'=>'form-control'])!!}
                <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
                </div>
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->
                  

            
			

@stop