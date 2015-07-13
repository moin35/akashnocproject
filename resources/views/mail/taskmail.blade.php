@extends('layouts.email')
@section('title')
    All Task
@stop
@section('body')  

<h2>Troubleshooting Details</h2>
  
            <h4>Massage sender name: {{$assign_by}}.</h4>
            <h4>Assign to: {{$assign_to}}.</h4>
            <h4>Vahicle No: {{$vahicle_no}}.</h4>
            <h4>Address: {{$address}}.</h4>
            <h4>Client No: {{$phone}}.</h4>
            <h4>Install Time: {{$install_time}}.</h4>
      
            <h4>email: {{$email}}.</h4><hr>

@stop