@extends('layouts.master')
@section('title')
    Change Header & Logo
  
@stop

@section('body')

    @if(Session::get('saved'))
        <h2>Changed Logo & Company Name successful !!</h2>
        @endif
<div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Change Header & logo</h2>

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
                
                {!! Form::open(['files'=>'true']) !!}
    Company Name: {!!Form::text('company_name','',['class'=>'form-control'])!!}<br/>
    <strong>Choose Logo</strong><span style="font-size:10px; color:red;">(Supported Formate- jpg,jpeg,bmp)</span>: {!!Form::file('image','',['class'=>'form-control'])!!}<br/>
<strong>Choose Fevicon</strong><span style="font-size:10px; color:red;">(Supported Formate-  ico)</span>: {!!Form::file('fev','',['class'=>'form-control'])!!}<br/>
    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}

    {!!Form::close()!!}<br/><br/>
          

  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->


    
@stop