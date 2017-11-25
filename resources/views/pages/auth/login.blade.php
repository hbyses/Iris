@extends('layouts.auth')

@section('content')
    <script>document.body.classList.add("page-login");</script>
    <!--<body class="page-login"> Using javascript to set the body class as the <body> sits outside of this blade template-->
            <main class="page-content">
                <div class="page-inner">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-3 center">
                                <div class="panel panel-white" id="js-alerts">
                                    <div class="panel-body">
                                        <div class="login-box">
                                            <a href="index.html" class="logo-name text-lg text-center m-t-xs">{{config('app.name', 'Iris')}}</a>
                                            <p class="text-center m-t-md">Please login into your account.</p>
                                            <form class="m-t-md" action="index.html">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control password" placeholder="Password" required>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block">Login</button>
                                                <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                                <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                                <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                                            </form>
                                            <p class="text-center m-t-xs text-sm">2016 &copy; stacks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->
                </div><!-- Page Inner -->
            </main><!-- Page Content -->
@endsection            