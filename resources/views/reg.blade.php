<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>

 <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
</head>
<body>
@if(Session::get('saved'))
        <h2>Registration successful !!</h2>
        @endif
        @if(Session::get('em'))
        <h2>you alrady used this email !!</h2>
        @endif

        <div>

    <div class="container">
    <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well text-center" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Registration Form</h2>

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
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">Full Name: </label>
                        {!!Form::text('name','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">Designatiion:</label>
                        {!!Form::text('designation','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">Department: </label>
                         {!!Form::text('dep_name','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4"> Phone no:</label>
                      {!!Form::text('phone_no','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">Your Id Card No: </label>
                         {!!Form::text('eid','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">   Account Type:</label>
                     {!!Form::select('account_type', array('Employee' => 'Employee', 'Technician' => 'Technician',),null,['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">   Responsblity:</label>
                          {!!Form::textarea('responsblity','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">  Email:</label>
                  {!!Form::text('email','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>


<div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">  Upload a Photo:</label>
                  {!!Form::file('image','',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">  Password:</label>
                       {!!Form::password('password',['class'=>'form-control'])!!}<br/>
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
   <br/><br/>
              {!!Form::close()!!}

            </div>
        </div>
    </div>
    
   
    </div>
    
     

    
   
    
    

</body>
</html>
