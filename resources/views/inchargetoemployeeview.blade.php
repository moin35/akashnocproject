@extends('layouts/master')
@section('title')
Incharge incomeing
@stop
@section('body')
@if(Session::get('Saved'))
        <h2>Send Message successful !!</h2>
        @endif
         <h2 class="text-center">Message</h2>
             @foreach($inv as $d)
            <h4 style="color:Green;">From: {{$d->from_name}}.</h4>
            <h4 style="color:Green;">To: {{$d->to_name}}.</h4>
            <h4>Message: {{$d->msg}}.</h4>
             <hr/>
            @foreach($in as $d)
            <h4>Massage sender name: {{$d->from_name}}</h4>
            <h4>Replaying Massage: {{$d->msg}}.</h4><hr>
            @endforeach


            @endforeach
            {!!Form::open()!!}
                
                <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
               
              <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!} 
            

@stop