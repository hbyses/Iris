@extends('layouts.auth')

@section('content')
    <script>document.body.classList.add("page-register");</script>
    <!--<body class="page-register"> Using javascript to set the body class as the <body> sits outside of this blade template-->
            <main class="page-content">
                <div class="page-inner">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-3 center">
                                <div class="panel panel-white" id="js-alerts">
                                    <div class="panel-body">
                                        <div class="register-box">
                                            <a href="index.html" style="text-transform: uppercase;" class="logo-name text-lg text-center m-t-xs"><img width="130px" src="{{ asset('img/logo.png') }}" /></a>
                                            <p class="text-center m-t-md">Create an account.</p>
                                            <form class="m-t-md" method="POST" action="{{ route('register') }}">
                                            {{ csrf_field() }}
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input type="password" name="password" class="password form-control" placeholder="Password" required>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                                <p class="text-center m-t-xs text-sm">Already have an account?</p>
                                                <a href="/login" class="btn btn-default btn-block m-t-xs">Login</a>
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