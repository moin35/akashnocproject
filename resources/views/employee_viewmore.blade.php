@extends('layouts/master')
@section('title')
@stop
@section('body')

 <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> NOC Message</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                @foreach($v as $d)
            <h4>Message sender name: {{$d->name}}.</h4>

            <h4>Vahicle No: {{$d->vahicle_no}}.</h4>
            <h4>Vahicle Sim No: {{$d->vahicle_sim_no}}.</h4>
            <h4>Client No: {{$d->client_phone}}.</h4>
            <h4>Complain Type: {{$d->complain_type}}.</h4>
            <h4>Customer Complain: {{$d->complain}}.</h4>
            <h4>Problem Solved or Not: {{$d->is_solved}}.</h4>
            <h4>Cmoplain Status: {{$d->complain_status}}.</h4><hr>
                
                
                <div class="box-content" style="text-align:right;">
                @foreach($rmsg as $r)
            <h4>Message sender name: {{$r->from_name}}</h4>
            <h4>Replaying Message: {{$r->msg}}.</h4><hr>
            @endforeach
            <!--<a href="{{URL::to('/')}}/updatestatus/{{$d->id}}" class="btn btn-primary">Solved</a>-->
            {!!Form::open()!!}
                
                <br/>
                Replay Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
               
              <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
             @endforeach
                </div>
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->
            
		
@stop