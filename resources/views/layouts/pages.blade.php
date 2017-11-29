<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-flash.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/4.2.2/css/default.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" href="{{asset('css/menu_cornerbox.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js" />
        <link rel="stylesheet" href="{{asset('css/meteor.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- END STYLESHEETS -->

        <!-- Old CSS Local Refs
            <link rel="stylesheet" href="{{asset('css/pace.css')}}">
            <link rel="stylesheet" href="{{asset('css/uniform.css')}}">
            <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
            <link rel="stylesheet" href="{{asset('css/line-icons.css')}}">
            cornerbox-placeholder
            <link rel="stylesheet" href="{{asset('css/waves.css')}}">
            <link rel="stylesheet" href="{{asset('css/switchery.css')}}">
            weather-icons-palceholder
            toastr-placeholder
        End old sheets -->

        <script src="{{asset('js/3d-canvas/modernizr.js')}}"></script>

    </head>
    <body>
    <body class="compact-menu page-sidebar-fixed page-header-fixed">
    <div class="overlay"></div>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="/" class="logo-text"><span>IRIS</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>	
                                <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 3 outstanding tasks</p></li>
                                    <li class="dropdown-menu-list slimscroll tasks">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                    <p class="task-details">Monthly Reconciliation</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">Check Height Kit</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">Service HBY37</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="user-name">user<i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="#"><i class="icon-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="#"><i class="icon-calendar"></i>Calendar</a></li>
                                    <li role="presentation"><a href="#"><i class="icon-calendar"></i>My Tasks</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="#"><i class="icon-lock"></i>Lock screen</a></li>
                                    <li role="presentation"><a href="#"><i class="icon-key m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <ul class="menu accordion-menu">
                    <li><a href="/" class="waves-effect waves-button"><i class="fa fa-home fa-padding" aria-hidden="true"></i><p>Home</p></a></li>
                    <li><a href="/tasks" class="waves-effect waves-button"><i class="fa fa-tasks fa-padding" aria-hidden="true"></i></span><p>Tasks</p></a></li>
                    <li><a href="/dashboards" class="waves-effect waves-button"><i class="fa fa-tachometer fa-padding" aria-hidden="true"></i></span><p>Dashboards</p></a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fa fa-th fa-padding" aria-hidden="true"></i></span><p>Equipment</p>&nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/equipment">Equipment List</a></li>
                            <li><a href="/equipment/groups">Groups</a></li>
                            <li><a href="/equipment/locations">Locations</a></li>
                            <li><a href="/equipment/suppliers">Suppliers</a></li>
                            <li><a href="/reports/equipment">Reports</a></li>
                            <li><a href="/dashboards/equipment">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fa fa-truck fa-padding" aria-hidden="true"></i></span><p>Fleet</p>&nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a></a>
                        <ul class="sub-menu">
                            <li><a href="/vehicles">Vehicles</a></li>
                            <li><a href="/vehicles/vel">Equipment Lists</a></li>
                            <li><a href="/vehicles/bookings">Bookings</a></li>
                            <li><a href="/calendar/fleet">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fa fa-calendar fa-padding" aria-hidden="true"></i></span><p>Calendar</p>&nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a></a>
                        <ul class="sub-menu">
                            <li><a href="/calendar">Calendar</a></li>
                            <li><a href="/calendar/events">Event List</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fa fa-cog fa-padding" aria-hidden="true"></i></span><p>Admin</p>&nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a></a>
                        <ul class="sub-menu">
                            <li><a href="/admin/users">Users</a></li>
                            <li><a href="/admin/settings">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <!-- Breadcrumbs -->
        <div class="page-inner">
            <div class="page-title">
                <h3 class="breadcrumb-header">{{$title}}</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Datatables</li>
                        </ol>
                    </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">IRIS - NSWSES Hornsby</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <div class="cd-overlay"></div>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/4.2.2/js/jquery.uniform.standalone.js"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.js"></script>
    <script src="{{asset('js/3d-canvas/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.symbol.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot.tooltip/0.9.0/jquery.flot.tooltip.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot.curvedlines@1.1.1/curvedLines.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('js/meteor.js')}}"></script>
    <!--<script src="{{asset('js/resources.js')}}"></script>-->
    <script src="{{asset('js/datatable-defs.js')}}"></script>
      <script> 
        $(document).ready(function () { 
            // Override the default menu scroll height of 250px from slimscroll.js 
            $('body > main > div.page-sidebar.sidebar > div').css('height', 'auto');
            // Set active and open classes on sidebar menu items
            $('a[href="' + this.location.pathname + '"]').parents('li,ul').addClass('active open');
            $('body > main > div.page-sidebar.sidebar > div > div.page-sidebar-inner.slimscroll > ul > li.droplink.active.open > ul').css("display", "");
        }); 
    </script> 
    <script>$(window).on('load', function(){this.$ = jQuery;});</script>
    </body>
</html>