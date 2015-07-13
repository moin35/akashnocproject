@extends('layouts.master')
@section('title')
    Home!Superadmin
@stop
@section('body')

<!--<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Members</div>
            <div>507</div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Pro Members</div>
            <div>228</div>
            <span class="notification green">4</span>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages</div>
            <div>25</div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>-->
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Notice Board</h2>

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
            
                    <h1 class="text-center">{{$notice->title}} <br>
                     </h1>
                    <h3>{{$notice->msg_field}}</h3>

                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> NOC Pending JOB List waiting for incharge commend</h2>

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
                    <th class="text-center">Massage sender name</th>
                    <th class="text-center">Vahicle No</th>
                    <!--<th class="text-center">Vahicle Sim No</th>
                    <th class="text-center">Client phone No</th>-->
                    <th class="text-center">Complain Type</th>
                    <th class="text-center">Customer Complain</th>
                    <th class="text-center">Problem Solved or Not</th>
                    <th class="text-center">Cmoplain Status</th>
                    <th class="text-center">Incharge Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($k as $d)
                <tr>
                    <td>{{$d->time}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->vahicle_no}}</td>
                    <!--<td>{{$d->vahicle_sim_no}}</td>
                    <td>{{$d->client_phone}}</td>-->
                    <td>{{$d->complain_type}}</td>
                    <td>{{$d->complain}}</td>
                    <td>{{$d->is_solved}}</td>
                    <td>{{$d->complain_status}}</td>
                    @if($status==0)
                        <td>Incomplete</td>
                    @else
                    <td>Sucsess</td>
                    
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
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Technician Incomplete Report Waiting for incharge Commend</h2>

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
                @foreach($j as $d)
                <tr>
                    <td>{{$d->date}}</td>
                    <td>{{$d->assign_by}}</td>
                    <td>{{$d->vahicle_no}}</td>
                    <td>{{$d->address}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->type}}</td>
                    <td>{{$d->install_time}}</td>
                    <td>{{$d->assign_to}}</td>
                        @if($tstatus==0)
                        <td>Incomplete</td>
                    @else
                    <td>Successfully</td>

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
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Incomplete joblist waiting for complete command</h2>

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
                    <th class="text-center">Job Date</th>
                    <th class="text-center">Message Form</th>
                    <th class="text-center">Message To</th>
                    <th class="text-center">Job Detail</th>
                    <th class="text-center">Status</th>
                 </tr>
                </thead>
                <tbody>
                @foreach($s as $d)
                <tr>
                    <td>{{$d->time}}</td>
                    <td>{{$d->from_name}}</td>
                    <td>{{$d->to_name}}</td>
                    <td>{{$d->msg}}</td>
                    
                    
                        @if($instatus==0)
                        <td>Incomplete</td>
                    @else
                    <td>Successfully</td>

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

