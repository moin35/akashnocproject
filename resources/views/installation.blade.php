@extends('layouts.master')
@section('title')
    Complain
@stop
@section('body')
   
    @if(Session::get('saved'))
        <h2 style="color:green;">Send Message successfully !!</h2>
        @endif
     <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Installation Form</h2>

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
              {!! Form::open() !!}
    Installation Type:{!!Form::select('type', array('New Device Installation' => 'New Device Installation','Troubleshooting' => 'Troubleshooting'),null,['class'=>'form-control'])!!}<br/>
    Vahicle No: {!!Form::text('vahicle_no','',['class'=>'form-control'])!!}<br/>
    Client Phone No: {!!Form::text('phone','',['class'=>'form-control'])!!}<br/>
    Client Address: {!!Form::textarea('address','',['class'=>'form-control'])!!}<br/>
    
    Installation Time: {!!Form::text('install_time','',['class'=>'form-control','data-format'=>'dd/MM/yyyy hh:mm:ss'])!!}<br/>
   
    
    Assign To : {!!Form::select('assign_to', array('Amin' => 'Amin', 'Arif' => 'Arif',),null,['class'=>'form-control'])!!}<br/>
    Email: {!!Form::text('email','',['class'=>'form-control'])!!}<br/>
    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}

    {!!Form::close()!!}<br/><br/>
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->       


    

@stop