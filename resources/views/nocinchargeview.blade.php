@extends('layouts/master')
@section('title')
Incharge to employee Message
@stop
@section('body')


   
            <h2 class="text-center">Incharge Message</h2>
           

                 
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                <th>Sl. No</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Message Time</th>
                    <th>See Full Message</th>
                     
                </tr>
                </thead>
                <tbody>
                @foreach($im as $d)
                <tr>
                <td>{{$d->id}}</td>
                    <td>{{$d->from_name}}</td>
                    <td>{{$d->to_name}}</td>
                    <td>{{$d->time}}</td>
                    
                    <td><a href="{{URL::to('/')}}/inchargetoemployeeview/{{$d->id}}" class="btn btn-primary">View More</a></td>
             
                </tr>
                @endforeach
                </tbody>
                </table>
   
           

   
@stop