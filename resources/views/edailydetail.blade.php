@extends('layouts/master')
@section('title')
@stop
@section('body')

            <h2 class="text-center">Daily Report</h2><br/>        
            

                  
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th class="text-center">Complain Date</th>
                    <th class="text-center">Message sender name</th>
                    <th class="text-center">Vahicle No</th>
                    <th class="text-center">Vahicle Sim No</th>
                    <th class="text-center">Client phone No</th>
                    <th class="text-center">Complain Type</th>
                    <th class="text-center">Customer Complain</th>
                    <th class="text-center">Problem Solved or Not</th>
                    <th class="text-center">Cmoplain Status</th>
                    <th class="text-center">Incharge Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($v as $d)
                <tr>
                    <td>{{$d->time}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->vahicle_no}}</td>
                    <td>{{$d->vahicle_sim_no}}</td>
                    <td>{{$d->client_phone}}</td>
                    <td>{{$d->complain_type}}</td>
                    <td>{{$d->complain}}</td>
                    <td>{{$d->is_solved}}</td>
                    <td>{{$d->complain_status}}</td>
                    @if($status==1)
                        <td>Successfully</td>
                    @else
                    <td>Incomplete</td>
                    
                    @endif
                </tr>
                @endforeach
                </tbody>
                </table>
 
            
           

           

			

@stop