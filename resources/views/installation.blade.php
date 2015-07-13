@extends('layouts.master')
@section('title')
    Complain
@stop
@section('body')
   
    @if(Session::get('saved'))
        <h2>Send Message successful !!</h2>
        @endif
     
<h2 class="text-center">Installation Form</h2>

    {!! Form::open() !!}
    Installation Type:{!!Form::select('type', array('New Device Installation' => 'New Device Installation','Troubleshooting' => 'Troubleshooting'),null,['class'=>'form-control'])!!}<br/>
    Vahicle No: {!!Form::text('vahicle_no','',['class'=>'form-control'])!!}<br/>
    Client Phone No: {!!Form::text('phone','',['class'=>'form-control'])!!}<br/>
    Client Address: {!!Form::textarea('address','',['class'=>'form-control'])!!}<br/>
    
    Installation Time: {!!Form::text('install_time','',['class'=>'form-control','data-format'=>'dd/MM/yyyy hh:mm:ss'])!!}<br/>
   
    
    Assign To : {!!Form::select('assign_to', array('Amin' => 'Amin', 'Arif' => 'Arif',),null,['class'=>'form-control'])!!}<br/>
    Email: {!!Form::text('email','',['class'=>'form-control'])!!}<br/>
    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}

    {!!Form::close()!!}<br/><br/>

@stop