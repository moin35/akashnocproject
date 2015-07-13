@extends('layouts.master')
@section('title')
    Complain

@stop

@section('body')
   <h2 class="text-center">Your All Message</h2>
            

                  
            
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Message sender name</th>
                    <th>Vahicle No</th>
                    <th>Massage Time</th>
                    <th>View More</th>
                </tr>
                </thead>
                <tbody>
                @foreach($v as $d)
                <tr>
                <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->vahicle_no}}</td>
                    <td>{{$d->time}}</td>
                    <td><a href="{{URL::to('/')}}/employeeviewmore/{{$d->id}}" class="btn btn-primary">View More</a></td>
                </tr>
                @endforeach
                </tbody>
                </table>
       
      
@stop