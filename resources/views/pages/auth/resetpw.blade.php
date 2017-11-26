@extends('layouts.auth')

@section('content')
   <script>document.body.classList.add("page-forgot");</script>
   <!--<body class="page-forgot"> Using javascript to set the body class as the <body> sits outside of this blade template-->
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="index.html" class="logo-name text-lg text-center m-t-xs">METEOR</a>
                                        <p class="text-center m-t-md">Enter your email address below to reset your password</p>
                                        <form class="m-t-md">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block m-b-xs">Submit</button>
                                            <a href="login.html" class="btn btn-default btn-block">Back</a>
                                        </form>
                                        <p class="text-center m-t-xs text-sm">IRIS - <a href="https://ses.nsw.gov.au">NSWSES</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
@endsection  