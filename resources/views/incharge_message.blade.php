@extends('layouts/master')
@section('title')
Incharge message Box
@stop
@section('body')
                  @if(Session::get('saved'))
        <h2 style="color:green;">Message Sent !!</h2>
        @endif
 <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Send Message to NOC</h2>

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
              {!!Form::open()!!}
              <br/>
                Message:{!!Form::textarea('msg','',['class'=>'form-control'])!!}
                Email:{!!Form::text('email','',['class'=>'form-control'])!!}
              <br/>
                <br/>
                {!!Form::submit('Send',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
                
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->		

           

@stop