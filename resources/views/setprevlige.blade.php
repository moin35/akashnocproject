@extends('layouts/master')
@section('title')
    Set Prevlige 
@stop
@section('body')
            @if(Session::get('saved'))
        <h2>Prevlige set successful !!</h2>
        @endif
                <h2 class="text-center">Set Prevlige for {{$pr->name}}</h2>
               <p style="color:red"> * Write 1 Set for Super Admin power</p><br>
               <p style="color:red"> * Write 2 Set for Incharge Power</p><br>
                <p style="color:red">* Write 3 Set For Employee Power</p><br>
               <p style="color:red"> * Write 4 Set For Technician  </p><br>
  
                {!!Form::open()!!}
                Set Prevlige:{!!Form::text('privilege',$pr->privilege,['class'=>'form-control'])!!}
                <br/>
                

                {!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
          
@stop