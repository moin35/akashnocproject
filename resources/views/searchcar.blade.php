@extends('layouts.master')
@section('title')
    Complain

@stop

@section('body')
   
    @if(Session::get('saved'))
        <h2>Send Message successful !!</h2>
        @endif


<h2 class="text-center">Search Car</h2>
<a href="{{URL::to('/')}}" class="btn btn-primary">Dashboard</a>
<br/> <br/>
    {!! Form::open() !!}
    Vahicle No: {!!Form::text('vahicle_no','',['class'=>'form-control'])!!}<br/>
    <!--{!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}-->
    <a href="{{URL::to('/')}}/complain/{{Auth::user()->eid}}" class="btn btn-primary form-control">Submit</a>
    {!!Form::close()!!}<br/><br/>
     
@stop