@extends('layouts/master')
@section('title')
    Change Password
@stop
@section('body')
            
                <h2 class="text-center">Update Password for {{$pass->name}}</h2>
  @if(Session::get('Saved'))
        <h2>Password Changed successful !!</h2>
        @endif
                {!!Form::open()!!}
                Give Your New Password:{!!Form::text('newp','',['class'=>'form-control'])!!}
                <br/>
                Retype Your New Password:{!!Form::text('newp1','',['class'=>'form-control'])!!}<br>
                {!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
          
@stop