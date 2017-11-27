<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="{{asset('css/style.css')}}"> Use this if you are using the condenser mix in the webpack.mix file.-->
        <!--Use these below stylesheets if you need to identify where a particular style is coming from-->
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="{{asset('css/pace.css')}}">
        <link rel="stylesheet" href="{{asset('css/uniform.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/menu_cornerbox.css')}}">
        <link rel="stylesheet" href="{{asset('css/waves.css')}}">
        <link rel="stylesheet" href="{{asset('css/switchery.css')}}">
        <link rel="stylesheet" href="{{asset('css/meteor.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- ENDSTYLESHEETS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <body class="compact-menu">
    <div class="overlay"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
        <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
        <div class="slimscroll">
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
        </div>
    </nav>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Duis aute irure dolor?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Ut ullamcorper, ligula.
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Curabitur pretium?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Etiam tempor. Ut tempor! ull amcorper.
                </div>
            </div>
        </div>
        <div class="chat-write">
            <form class="form-horizontal" action="javascript:void(0);">
                <input type="text" class="form-control" placeholder="Say something">
            </form>
        </div>
    </nav>
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
                    <a href="index.html" class="logo-text"><span>METEOR</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>		
                                <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li>
                                <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Header 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-header-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Sidebar 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Horizontal bar 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Toggle Sidebar 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Compact Menu 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Hover Menu 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Boxed Layout 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>	
                                <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-open"></i><span class="badge badge-danger pull-right">6</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 6 new  messages!</p></li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                    <p class="msg-name">Michael Lewis</p>
                                                    <p class="msg-text">Yeah science!</p>
                                                    <p class="msg-time">3 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                    <p class="msg-name">John Doe</p>
                                                    <p class="msg-text">Hi Nick</p>
                                                    <p class="msg-time">8 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                    <p class="msg-name">Emma Green</p>
                                                    <p class="msg-text">Let's meet!</p>
                                                    <p class="msg-time">56 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                    <p class="msg-name">Nick Doe</p>
                                                    <p class="msg-text">Nice to meet you</p>
                                                    <p class="msg-time">2 hours ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                    <p class="msg-name">Michael Lewis</p>
                                                    <p class="msg-text">Yeah science!</p>
                                                    <p class="msg-time">5 hours ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                    <p class="msg-name">John Doe</p>
                                                    <p class="msg-text">Hi Nick</p>
                                                    <p class="msg-time">9 hours ago</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                    <li class="dropdown-menu-list slimscroll tasks">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                    <p class="task-details">New user registered</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">3 Charts refreshed</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">2 Missed calls</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="user-name">Nick<i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                                    <li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                    <li role="presentation"><a href="login.html"><i class="icon-key m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" id="showRight">
                                    <i class="icon-bubbles"></i>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <ul class="menu accordion-menu">
                    <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                    <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Mailbox</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="inbox.html">Inbox</a></li>
                            <li><a href="message-view.html">View Message</a></li>
                            <li><a href="compose.html">Compose</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>UI Kits</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-notifications.html">Notifications</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-panels.html">Panels</a></li>
                            <li><a href="ui-progress.html">Progress Bars</a></li>
                            <li><a href="ui-sliders.html">Sliders</a></li>
                            <li><a href="ui-nestable.html">Nestable</a></li>
                            <li><a href="ui-tree-view.html">Tree View</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Layouts</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="layout-blank.html">Blank Page</a></li>
                            <li><a href="layout-boxed.html">Boxed Page</a></li>
                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a></li>
                            <li><a href="layout-horizontal-menu-boxed.html">Boxed &amp; Horizontal Menu</a></li>
                            <li><a href="layout-horizontal-menu-minimal.html">Horizontal Menu Minimal</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                            <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                            <li><a href="layout-menu-alt.html">Menu Alt</a></li>
                            <li><a href="layout-hover-menu.html">Hover Menu</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Tables</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="table-static.html">Static Tables</a></li>
                            <li><a href="table-responsive.html">Responsive Tables</a></li>
                            <li><a href="table-data.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Forms</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-image-crop.html">Image Crop</a></li>
                            <li><a href="form-image-zoom.html">Image Zoom</a></li>
                            <li><a href="form-select2.html">Select2</a></li>
                            <li><a href="form-x-editable.html">X-editable</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span><p>Charts</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                            <li><a href="charts-morris.html">Morris</a></li>
                            <li><a href="charts-flotchart.html">Flotchart</a></li>
                            <li><a href="charts-chartjs.html">Chart.js</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-power"></span><p>Login</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login Form</a></li>
                            <li><a href="login-alt.html">Login Alt</a></li>
                            <li><a href="register.html">Register Form</a></li>
                            <li><a href="register-alt.html">Register Alt</a></li>
                            <li><a href="forgot.html">Forgot Password</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pointer"></span><p>Maps</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Extra</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="todo.html">Todo</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="search.html">Search Results</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-energy"></span><p>Levels</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Level 3.1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Level 2.2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Level 1.2</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Dashboard</li>
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
                <p class="no-s">Made with <i class="fa fa-heart"></i> by Hornsby SES</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <div class="cd-overlay"></div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>$(window).on('load', function(){this.$ = jQuery;});</script>
    </body>
    
</html>