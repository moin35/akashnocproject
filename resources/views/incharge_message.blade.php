@extends('layouts/master')
@section('title')
Incharge message Box
@stop
@section('body')
     @if(Session::get('saved'))
        <h2>Message Sent !!</h2>
        @endif

            <h2 class="text-center">Message</h2>
            {!!Form::open()!!}
              <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
                Email:{!!Form::text('email','',['class'=>'form-control'])!!}
              <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
        
            
			

           

@stop