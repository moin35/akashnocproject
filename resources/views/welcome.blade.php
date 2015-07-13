@extends('layouts.master')
@section('title')
    Home
@stop
@section('body')

<h2>Hello {{Auth::user()->name}}!</h2>
<h4><a href="{{URL::to('details/'.Auth::user()->eid)}}">Profile</a><br/></h4>
<h4><a href="{{URL::to('complain')}}">Complain Message Box</a><br/></h4>
<h4><a href="{{URL::to('view_msg')}}">Message</a><br/></h4>

<!--<a href="{{URL::to('add')}}">Create Record Page</a><br/>
<a href="{{URL::to('rud')}}">Read, Update and Delete Record Page</a>
<a href="{{URL::to('reg')}}">Reg page</a><br/>-->

<a href="{{URL::to('logout')}}">Logout</a></h2>
           


@stop

