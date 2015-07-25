@extends('layouts.master')
@section('title')
    Complain
  
@stop

@section('body')

    @if(Session::get('saved'))
        <h2>Send Message successful !!</h2>
        @endif
<div class="row">
        <div class="box col-md-11">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Complain Message Box</h2>

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
    Vahicle No: {!!Form::text('vahicle_no','',['class'=>'form-control'])!!}<br/>
    <!--Vahicle Sim No: {!!Form::text('vahicle_sim_no','',['class'=>'form-control'])!!}<br/>
    Client Phone No: {!!Form::text('client_phone','',['class'=>'form-control'])!!}<br/>-->
 
     Complain Type:{!!Form::select('complain_type', array('Power Off' => 'Power Off','SMS Problem' => 'SMS Problem', 'Engine On/Off' => 'Engine On/Off','Locate Fail'=>'Locate Fail','Billing Problem'=>'Billing Problem','Millage' => 'Millage','Flexi Load' => 'Flexi Load','Camera' => 'Camera','GPS' => 'GPS','New/Old install-Device/Number plate/Remark change/add' => 'New/Old install-Device/Number plate/Remark change/add'),null,['class'=>'form-control'])!!}<br/>
    
    Clients Complain: {!!Form::textarea('complain','',['class'=>'form-control'])!!}<br/>
   Select Problem Solved or not :<br/>
   <input type="radio" id=""  name="solv" value="Yes" /> YES<br/>
   <input type="radio" id="" name="solv"  value="No" /> NO<br/><br/>
     <!--{!!Form::select('is_solved', array('Yes' => 'Yes', 'No' => 'No',),null,['class'=>'form-control'])!!}<br/>
  Complain Status:{!!Form::textarea('complain_status','',['class'=>'form-control','id'=>'hname'])!!}<br/> 
 -->
 Complain Status:{!!Form::select('complain_status', array('Problem Solved'=> 'Problem Solved','Need Troubleshooting'=> 'Need Troubleshooting','Need Programmer Help'=> 'Need Programmer Help'),null,['class'=>'form-control'])!!}<br/>
   
    {!!Form::hidden('eid',$c->eid,['class'=>'form-control'])!!}<br/>
    {!!Form::hidden('name',$c->name,['class'=>'form-control'])!!}<br/>
    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}

    {!!Form::close()!!}<br/><br/>
          
<script type="text/javascript">
 $(document).ready(function(){
 $("#msex").click(function(){

 $("#fname").attr("disabled",true);
  $("#hname").removeAttr("disabled");
 });
 $("#fsex").click(function(){

 $("#fname").removeAttr("disabled");
  $("#hname").attr("disabled",true);
 });
 });
 </script>
                
  
                </div>

            </div>

        </div>
        <!--/span-->
       
        <!--/span-->
    </div><!--/row-->


    
@stop