@extends('layouts.master')
@section('title')
    All User List
@stop
@section('body')  

    
         <h2 class="text-center">All User List</h2>

           
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>Employee Name</th>
                  
                    
                   <th>View More</th>
                   <!--<th>Delete</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach($em as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    
                    <td><a href="{{URL::to('/')}}/setpre/{{$d->eid}}" class="btn btn-primary">View More</a></td>
                    <!--<td><a href="{{URL::to('/')}}/delete/{{$d->eid}}" class="btn btn-primary">Delete</a></td>-->
                </tr>
                @endforeach
                </tbody>
                </table>
      
            

@stop