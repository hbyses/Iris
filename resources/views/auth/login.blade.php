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
                                            <a href="index.html" style="text-transform: uppercase;" class="logo-name text-lg text-center m-t-xs"><img width="130px" src="{{ asset('img/logo.png') }}" /></a>
                                            <p class="text-center m-t-md">Please login into your account.</p>
                                            <form class="m-t-md" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block">Login</button>
                                                <a href="/forgotten" class="btn btn-default btn-block m-t-md">Reset Password</a>
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