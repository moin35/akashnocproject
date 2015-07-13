@extends('layouts.email')
@section('title')
   mail

@stop

@section('body')
   
 
        <h2>NOC Complain Message</h2>
       


 			<h4>Massage sender name: {{$sname}}.</h4>

            <h4>Vahicle No: {{$svahicle_no}}.</h4>
           
            <h4>Complain Type: {{$scomplain_type}}.</h4>
            <h4>Customer Complain: {{$scomplain}}.</h4>
            <h4>Problem Solved or Not: {{$sis_solved}}.</h4>
            <h4>Cmoplain Status: {{$scomplain_status}}.</h4><hr>
           

@stop