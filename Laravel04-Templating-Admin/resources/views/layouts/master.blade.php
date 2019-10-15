<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword"
        content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- end: Favicon -->


</head>

<body>
    <!--======== Header=============== -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse"
                    data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Admin</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> ruman-chowdhury
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>

    </div>
    <!-- end Header -->

    {{--======== main content section ===========--}}
    <div class="container-fluid-full">
        <div class="row-fluid">
            <!-- start: sidebar -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet">
                                    Dashboard</span></a></li>
                        <li><a href="{{URL::to('/addContact')}}"><i class="icon-envelope"></i><span class="hidden-tablet">
                                    Add Contact</span></a></li>
                        <li><a href="{{URL::to('/allContact')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> All
                                    Contact</span></a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- end: sidebar -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: content -->
            <div id="content" class="span10">
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Dashboard</a></li>
                </ul>

                <div class="row-fluid bodyContent">

                    @yield('content')

                </div>


            </div>
            <!-- end: top statusbar -->

        </div>
        <!--/fluid-row-->
    </div>
    <!--/.fluid-container-->




    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <div class="clearfix"></div>



    <!-- start: JavaScript-->

    <script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('admin/js/modernizr.js')}}"></script>

    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.cookie.js')}}"></script>

    <script src='{{asset('admin/js/fullcalendar.min.js')}}'></script>

    <script src='{{asset('admin/js/jquery.dataTables.min.js')}}'></script>

    <script src="{{asset('admin/js/excanvas.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.noty.js')}}"></script>

    <script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>

    <script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>

    <script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>

    <script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>

    <script src="{{asset('admin/js/counter.js')}}"></script>

    <script src="{{asset('admin/js/retina.js')}}"></script>

    <script src="{{asset('admin/js/custom.js')}}"></script>
    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->

</html>