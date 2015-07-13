<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- The styles -->
    <link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="../css/charisma-app.css" rel="stylesheet">
    <link href='../bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../css/jquery.noty.css' rel='stylesheet'>
    <link href='../css/noty_theme_default.css' rel='stylesheet'>
    <link href='../css/elfinder.min.css' rel='stylesheet'>
    <link href='../css/elfinder.theme.css' rel='stylesheet'>
    <link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../css/uploadify.css' rel='stylesheet'>
    <link href='../css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="../bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
                 <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
           
            <a class="col-lg-7 col-md-12" href=""> <img alt="" src="../img/logo20.png" class="hidden-xs"/>
                <span style="font-size:20px; color:black;">Akash Technology</span></a>

    

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span
                        class="hidden-sm hidden-xs"> Hello {{Auth::user()->name}}!</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('details/'.Auth::user()->eid)}}">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="{{URL::to('updatepass/'.Auth::user()->eid)}}">Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="{{URL::to('logout')}}">Logout</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
             
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
       
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
                @if(Auth::check())    
        @if(Auth::user()->privilege==1)
            <!-- left menu starts -->

        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                  <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{URL::to('/')}}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('inchargemsg')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Complain Message</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('inchargetask')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Troubleshooting Message</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('all/technician')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Technician Completed Detail</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('aemployee')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Employee Completed Detail</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('imessage')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Send Message to NOC</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('installation')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Send Message to Technician</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('inchargeincomeing')}}"><i class="glyphicon glyphicon-eye-open"></i><span> NOC Replay Msg</span></a>
                        </li>
                         <li><a class="ajax-link" href="{{URL::to('notice')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Notice</span></a>
                        </li>
                         <li><a class="ajax-link" href="{{URL::to('reg')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Registration</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('userlist/'.Auth::user()->eid)}}"><i class="glyphicon glyphicon-eye-open"></i><span> Manage Incharge & Technician</span></a>
                        </li>
                                    </ul>

                    </div>
            </div>
        </div>
        <!--/span-->
         
         @elseif(Auth::user()->privilege==2)
         
        <!-- left menu ends -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    


                          <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{URL::to('/')}}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('inchargemsg')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Complain Message</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('inchargetask')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Troubleshooting Message</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('all/technician')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Technician Completed Detail</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('allemployee')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Employee Completed Detail</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('imessage')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Send Message to NOC</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('installation')}}"><i class="glyphicon glyphicon-eye-open"></i><span> Send Message to Technician</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('inchargeincomeing')}}"><i class="glyphicon glyphicon-eye-open"></i><span> NOC Replay Msg</span></a>
                        </li>
                                    </ul>          
                    </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        
        @elseif(Auth::user()->privilege==3)
        

        <!-- left menu ends -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{URL::to('/')}}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('complain/'.Auth::user()->eid)}}"><i class="glyphicon glyphicon-eye-open"></i><span> Complain Message Box</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('viewmsg/'.Auth::user()->eid)}}"><i class="glyphicon glyphicon-eye-open"></i><span> Message</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('nocinchargeview/'.Auth::user()->eid)}}"><i class="glyphicon glyphicon-eye-open"></i><span> Message From Incharge</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('technicianview/'.Auth::user()->id)}}"><i class="glyphicon glyphicon-eye-open"></i><span> Troubleshooting Incomeing</span></a>
                        </li>
                                    </ul>
                    </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        @elseif(Auth::user()->privilege==4)

        <!-- left menu ends -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{URL::to('/')}}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{URL::to('technicianview/'.Auth::user()->id)}}"><i class="glyphicon glyphicon-eye-open"></i><span> Troubleshooting Incomeing</span></a>
                        </li>
                        
                        
                                    </ul>
                    </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
@endif

@endif
        
        <!-- left menu ends -->
<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
@yield('body')
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->


    <hr>

   
    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="" target="_blank">Akash Technology</a> 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="">Akash Soft</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="../bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
