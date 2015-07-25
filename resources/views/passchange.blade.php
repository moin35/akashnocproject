@extends('layouts/master')
@section('title')
    Change Password
@stop
@section('body')
            
              
  @if(Session::get('Saved'))
        <h2>Password Changed successful !!</h2>
        @endif
                
      <div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Update Password for {{$pass->name}}</h2>

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
                Give Your New Password:{!!Form::password('newp',['class'=>'form-control'])!!}
                <br/>
                Retype Your New Password:{!!Form::password('newp1',['class'=>'form-control'])!!}<br>
                {!!Form::submit('Update',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
          
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->     
@stop