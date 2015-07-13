@extends('layouts/master')
@section('title')
@stop
@section('body')

            <h2 class="text-center">Message</h2>
             @foreach($v as $d)
            <h4>Message sender name: {{$d->name}}.</h4>

            <h4>Vahicle No: {{$d->vahicle_no}}.</h4>
            <h4>Vahicle Sim No: {{$d->vahicle_sim_no}}.</h4>
            <h4>Client No: {{$d->client_phone}}.</h4>
            <h4>Complain Type: {{$d->complain_type}}.</h4>
            <h4>Customer Complain: {{$d->complain}}.</h4>
            <h4>Problem Solved or Not: {{$d->is_solved}}.</h4>
            <h4>Cmoplain Status: {{$d->complain_status}}.</h4><hr>

			@foreach($rmsg as $r)
			<h4>Message sender name: {{$r->from_name}}</h4>
            <h4>Replaying Message: {{$r->msg}}.</h4><hr>
            @endforeach
            <a href="{{URL::to('/')}}/updatestatus/{{$d->id}}" class="btn btn-primary">Solved</a>
            {!!Form::open()!!}
                
                <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
               
              <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
             @endforeach
            
			

@stop