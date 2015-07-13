@extends('layouts.email')
@section('title')
 Message From Incharge
@stop
@section('body')  

<h2>Message From Akash technology</h2>
  
            <h4>Massage sender name: {{$from}}.</h4>
            <h4>Message : {{$msg}}.</h4>
      
            <hr>

@stop