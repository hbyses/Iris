<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
        <link rel="stylesheet" href="{{asset('css/meteor.css')}}">
        <title></title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/meteor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/resources.js')}}"></script>

    </body>
    
</html>