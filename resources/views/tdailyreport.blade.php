@extends('layouts/master')
@section('title')
@stop

@section('body')

            <h2 class="text-center">Technician Daily Report</h2><br/> 
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th class="text-center">Task Date</th>
                    <th class="text-center">Message sender name</th>
                    <th class="text-center">Vahicle No</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Client phone No</th>
                    <th class="text-center">Task Type</th>
                    <th class="text-center">Install Time</th>
                    <th class="text-center">Assign to</th>
                    <th class="text-center">Incharge Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ts as $d)
                <tr>
                    <td>{{$d->date}}</td>
                    <td>{{$d->assign_by}}</td>
                    <td>{{$d->vahicle_no}}</td>
                    <td>{{$d->address}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->type}}</td>
                    <td>{{$d->install_time}}</td>
                    <td>{{$d->assign_to}}</td>
                        @if($tstatus==1)
                        <td>Successfull</td>
                    @else
                    <td>Incomplete</td>

                    @endif
                </tr>
                @endforeach
                </tbody>
                </table>

@stop