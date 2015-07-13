@extends('layouts.master')
@section('title')
    All Task
@stop
@section('body')  

         <h2 class="text-center">Task detail</h2>

            
                
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>Message From</th>
                    <th>Message To</th>
                    <th>Vahicle No</th>
                    <th>Message Time</th>
                    
                    
                    <th>View More</th>
                </tr>
                </thead>
                <tbody>
                @foreach($task as $d)
                <tr>
                    <td>{{$d->assign_by}}</td>
                    <td>{{$d->assign_to}}</td>
                    <td>{{$d->vahicle_no}}</td>
                    <td>{{$d->date}}</td>
                    <td><a href="{{URL::to('/')}}/detailview/{{$d->id}}" class="btn btn-primary">View More</a></td>
                </tr>
                @endforeach
                </tbody>
                </table>
       
            
           


@stop