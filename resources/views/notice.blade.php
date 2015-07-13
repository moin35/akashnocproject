@extends('layouts.master')
@section('title')
    Notice 
@stop
@section('body')
   
    @if(Session::get('saved'))
        <h2>Send Message successful !!</h2>
        @endif
     
<h2 class="text-center">Notice Board</h2>
<a href="{{URL::to('/')}}" class="btn btn-primary">Dashboard</a>

    {!! Form::open() !!}
    
    Notice Title: {!!Form::text('title','',['class'=>'form-control'])!!}<br/>
    Message : {!!Form::textarea('msg_field','',['class'=>'form-control'])!!}<br/>
    Email: {!!Form::text('email','',['class'=>'form-control'])!!}<br/>
    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}

    {!!Form::close()!!}<br/><br/>

@stop