@extends('layouts/master')
@section('title')
From Incharge 
@stop
@section('body')
<h2 class="text-center">Message</h2>
             @foreach($inv as $d)
            <h4>From: {{$d->from_name}}.</h4>
            <h4>To: {{$d->to_name}}.</h4>
            <h4>Message: {{$d->msg}}.</h4>
             <hr/>
            @foreach($in as $d)
            <h4>Massage sender name: {{$d->from_name}}</h4>
            <h4>Replaying Massage: {{$d->msg}}.</h4><hr>
            @endforeach

<a href="{{URL::to('/')}}/employee/updatestatus/{{$d->id}}" class="btn btn-primary">Complete</a>
            @endforeach            
	
           
</div>
@stop