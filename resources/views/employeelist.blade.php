@extends('layouts.master')
@section('title')
    All Employee Detail
@stop
@section('body')  

    
         <h2 class="text-center">All Employee Detail</h2>

           
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Designation</th>
                    
                   <th>View More</th>
                   <!--<th>Delete</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach($em as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->designation}}</td>
                    <td><a href="{{URL::to('/')}}/dailyreport/{{$d->eid}}" class="btn btn-primary">View More</a></td>
                    <!--<td><a href="{{URL::to('/')}}/delete/{{$d->eid}}" class="btn btn-primary">Delete</a></td>-->
                </tr>
                @endforeach
                </tbody>
                </table>
      
            

@stop