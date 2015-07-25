@extends('layouts/master')
@section('title')
Incharge incomeing
@stop
@section('body')
@if(Session::get('Saved'))
        <h2>Send Message successful !!</h2>
        @endif
<div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Incharge Incomplete Message</h2>

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
               @foreach($inv as $d)
            <h4 style="color:Green;">From: {{$d->from_name}}.</h4>
            <h4 style="color:Green;">To: {{$d->to_name}}.</h4>
            <h4>Message: {{$d->msg}}.</h4>
             <hr/>
                
                
                <div class="box-content" style="text-align:right;">
                 @foreach($in as $d)
            <h4>Massage sender name: {{$d->from_name}}</h4>
            <h4>Replaying Massage: {{$d->msg}}.</h4><hr>
            @endforeach

<a href="{{URL::to('/')}}/incharge/updatestatus/{{$d->id}}" class="btn btn-primary">Complete</a>
            @endforeach
            {!!Form::open()!!}
                
                <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
               
              <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!} 
            
                </div>
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->
@stop