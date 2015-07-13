@extends('layouts/master')
@section('title')
    Update Record of {{$r->name}}
@stop
@section('body')
            
                <h2 class="text-center">Update Records for {{$r->name}}</h2>
  
                {!!Form::open()!!}
                Name:{!!Form::text('name',$r->name,['class'=>'form-control'])!!}
                <br/>
                Email:{!!Form::text('email',$r->email,['class'=>'form-control'])!!}
                <br/>
                Department name:{!!Form::text('dep_name',$r->dep_name,['class'=>'form-control'])!!}
                <br/>
                Designation:{!!Form::text('designation',$r->designation,['class'=>'form-control'])!!}
                <br/>
                Responsblity:{!!Form::textarea('responsblity',$r->responsblity,['class'=>'form-control'])!!}
                <br/>
                Phone no:{!!Form::text('phone_no',$r->phone_no,['class'=>'form-control'])!!}
                <br/>
                {!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
          
@stop