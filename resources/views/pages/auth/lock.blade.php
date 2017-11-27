@extends('layouts.auth')

@section('content')
    <script>document.body.classList.add("page-lock-screen");</script>
    <!--<body class="page-lock-screen"> Using javascript to set the body class as the <body> sits outside of this blade template-->
            <main class="page-content">
                <div class="page-inner">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-3 center">
                                <div class="panel panel-white" id="js-alerts">
                                    <div class="panel-body">
                                <div class="forgotten-box">
                                    <div class="user-box m-t-md row">
                                        <div class="col-md-12 m-b-md">
                                            <img src="assets/images/avatar1.png" class="img-circle m-t-xxs" alt="">
                                        </div>
                                        <div class="col-md-12">
                                            <p class="lead no-m text-center m-b-xxs">Welcome Back, INSERT UERNAME VAR HERE!</p>
                                            <p class="text-sm text-center m-b-md">Enter password to unlock</p>
                                            <form class="form-inline text-center" action="SOME ACTION HERE">
                                                <div class="input-group m-b-lg">
                                                    <input type="password" name="password" class="password form-control" placeholder="Password" required>
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /input-group -->
                                            </form>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->
                </div><!-- Page Inner -->
            </main><!-- Page Content -->
@endsection  