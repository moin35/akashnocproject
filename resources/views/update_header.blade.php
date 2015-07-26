@extends('layouts/master')
@section('title')
    Update Header 
    @stop
@section('body')
            <div class="row">

        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Update Header</h2>

                    <div class="box-icon"> 
                    @if(Session::get('u'))
        <h2 style="color:green;">Update successful !!</h2>
        @endif
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
              {!!Form::open(['files'=>'true'])!!}
              Change Company Name: {!!Form::text('company_name',$p->company_name,['class'=>'form-control'])!!}<br/>
              <img src="{{URL::to('/')}}/employeeimage/{{$p->logo}}"  class="center-block img-circle img-responsive" width="100" height ="100">
                <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4"> Change Logo:</label>
                  {!!Form::file('image','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
<img src="{{URL::to('/')}}/employeeimage/{{$p->fev}}"  class="center-block img-circle img-responsive" width="100" height ="100">
                <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4"> Change Fevicon:</label>
                  {!!Form::file('fev','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
               
               {!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
          
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->
           
        
  
                
@stop