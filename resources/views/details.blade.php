@extends('layouts/master')
@section('title')
Details of {{$d->name}}
@stop
@section('body')

            <h2 class="text-center">Your Profile</h2>
           	@if(Session::get('u'))
                    <h2 class="text-center">Record Successfully updated!</h2>
                @endif
            <h4>Name: {{$d->name}}.</h4>
            <h4>Email: {{$d->email}}.</h4>
			<h4>Departmant name: {{$d->dep_name}}.</h4>
			<h4>Designation: {{$d->designation}}.</h4>
			<h4>Responsblity: {{$d->responsblity}}.</h4>
			<h4>Phone no: {{$d->phone_no}}.</h4>
			<a href="{{URL::to('update/'.Auth::user()->eid)}}" class="btn btn-primary">Edit Record</a>
			<a href="{{URL::to('/')}}" class="btn btn-primary">Dashboard</a>
@stop