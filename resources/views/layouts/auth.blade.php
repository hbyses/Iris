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