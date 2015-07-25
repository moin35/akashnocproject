@extends('layouts/master')
@section('title')
@stop
@section('body')
  
            

               
            
    <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Daily Report</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-md-12">
                    
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
                        <td>Successfull</td>
                    @else
                    <td>Incomplete</td>
                    
                    @endif
                </tr>
                @endforeach
                </tbody>
                </table>
 
                    
                </div>
            </div>
        </div>
    </div>
</div>      

           

			

@stop