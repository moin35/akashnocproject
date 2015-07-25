@extends('layouts/master')
@section('title')
    Update Record of {{$r->name}}
@stop
@section('body')
            <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Update Records for {{$r->name}}</h2>

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
                Name:{!!Form::text('name',$r->name,['class'=>'form-control'])!!}
                <br/>
                Email:{!!Form::text('email',$r->email,['class'=>'form-control'])!!}
                <br/>
                Department name:{!!Form::text('dep_name',$r->dep_name,['class'=>'form-control'])!!}
                <br/>
                Designation:{!!Form::text('designation',$r->designation,['class'=>'form-control'])!!}
                <br/>
                Responsblity:{!!Form::textarea('responsblity',$r->responsblity,['class'=>'form-control'])!!}
                <br/>
                Phone no:{!!Form::text('phone_no',$r->phone_no,['class'=>'form-control'])!!}
                <br/>
                {!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
          
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->
           
        
  
                
@stop