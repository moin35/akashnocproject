@extends('layouts.master')
@section('title')
   Task Full Detail
@stop
@section('body')  


            <h2 class="text-center">Task Full detail</h2>
            

            <h4>Message sender name: {{$task->assign_by}}.</h4>
            <h4>Vahicle No: {{$task->vahicle_no}}.</h4>
            <h4>Address: {{$task->address}}.</h4>
            <h4>Client No: {{$task->phone}}.</h4>
            <h4>install_time: {{$task->install_time}}.</h4>
            <h4>task: {{$task->task}}.</h4>
            <h4>assign_to: {{$task->assign_to}}.</h4>
            <h4>email: {{$task->email}}.</h4><hr>
			@foreach($trmsg as $d)
			<h4>Massage sender name: {{$d->name}}</h4>
            <h4>Replaying Massage: {{$d->msg}}.</h4><hr>
            @endforeach
            <a href="{{URL::to('/')}}/taskupdate/{{$task->id}}" class="btn btn-primary">Solved</a>
				{!!Form::open()!!}
                <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
                {!!Form::hidden('name',$task->name,['class'=>'form-control'])!!}
              	<br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}

@stop