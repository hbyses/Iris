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
        <div class="container">
            @yield('content')
        </div>

    <script src="{{asset('js/app-auth.js')}}"></script>
    <script>$(window).on('load', function(){this.$ = jQuery;});</script>
    </body>
    
</html>