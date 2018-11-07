<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IRIS | {{$title}}</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Header JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- End Header JS -->

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/4.2.2/css/default.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.min.css">
        @yield('css-extra')
        <link rel="stylesheet" href="{{asset('css/meteor.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- End CSS -->
    </head>
    <body class="compact-menu page-sidebar-fixed page-header-fixed">
    <div class="overlay"></div>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search" type="button"><i class="fa fa-close"></i></button>
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
                    <a href="javascript:void(0);" class="show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>	
                                <a href="javascript:void(0);" class="show-search"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="user-name">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="/profile"><i class="fa fa-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="/calendar"><i class="fa fa-calendar"></i>Calendar</a></li>
                                    <li role="presentation"><a href="/tasks"><i class="fa fa-tasks"></i>My Tasks</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-key m-r-xs"></i>Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form>
                                    </li>
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
                            <li><a href="/location">Locations</a></li>
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
                            <li><a href="/">Home</a></li>
                            @if (count($parentBreadcrumbs) > 0)
                                @foreach($parentBreadcrumbs as $breadcrumbItem)
                                    <li><a href="{{$breadcrumbItem['url']}}">{{$breadcrumbItem['name']}}</a></li>
                                @endforeach
                            @else
                            @endif
                            <li class="active">{{$title}}</li>
                        </ol>
                    </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        @include('helpers.messages')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/4.2.2/js/jquery.uniform.standalone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    @yield('extjs-extra')
    <script src="{{asset('js/meteor.js')}}"></script>

      <script> 
        $(document).ready(function () { 
            // Override the default menu scroll height of 250px from slimscroll.js 
            $('body > main > div.page-sidebar.sidebar > div').css('height', 'auto');
            // Set active and open classes on sidebar menu items
            $('a[href="' + this.location.pathname + '"]').parents('li,ul').addClass('active open');
            $('body > main > div.page-sidebar.sidebar > div > div.page-sidebar-inner.slimscroll > ul > li.droplink.active.open > ul').css("display", "");
            @yield('inlinejs-extra')
        }); 
    </script> 
    </body>
</html>