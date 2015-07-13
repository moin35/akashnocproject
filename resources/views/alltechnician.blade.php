@extends('layouts.master')
@section('title')
    All Technician Detail
@stop
@section('body')  

   
         <h2 class="text-center">All Technician Detail</h2>  
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>Technician Name</th>
                    <th>Designation</th>
                    <th>View More</th>
                   <!--<th>Delete</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach($tc as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->designation}}</td>
                    <td><a href="{{URL::to('/')}}/techniciandailyreport/{{$d->eid}}" class="btn btn-primary">View More</a></td>
                    <!--<td><a href="{{URL::to('/')}}/delete/{{$d->eid}}" class="btn btn-primary">Delete</a></td>-->
                </tr>
                @endforeach
                </tbody>
                </table>
        
           
           

@stop