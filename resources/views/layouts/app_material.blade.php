<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Youth Lead') }}</title>

    <!-- Favicons -->
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">
    <link href="{{ asset('images/logo2') }}" rel="apple-touch-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        #b1 {background-image: url('{{ url('images/b1.jpg') }}');background-size: cover;}
        #b2 {background-image: url('{{ url('images/b2.jpg') }}');background-size: cover;}
        #b3 {background-image: url('{{ url('images/b3.jpg') }}');background-size: cover;}
        #b4 {background-image: url('{{ url('images/b4.jpg') }}');background-size: cover;}
        #b5 {background-image: url('{{ url('images/b5.jpg') }}');background-size: cover;}
        #b6 {background-image: url('{{ url('images/b6.jpg') }}');background-size: cover;}
        #b7 {background-image: url('{{ url('images/b7.jpg') }}');background-size: cover;}
        #b8 {background-image: url('{{ url('images/b8.jpg') }}');background-size: cover;}
        #b9 {background-image: url('{{ url('images/b9.jpg') }}');background-size: cover;}
        #b10 {background-image: url('{{ url('images/b10.jpg') }}');background-size: cover;}
        #b11 {background-image: url('{{ url('images/b11.jpg') }}');background-size: cover;}
        #b12 {background-image: url('{{ url('images/b12.jpg') }}');background-size: cover;}
        #b13 {background-image: url('{{ url('images/b13.jpg') }}');background-size: cover;}
        #b14 {background-image: url('{{ url('images/b14.jpg') }}');background-size: cover;}
    </style>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assests/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('assests/node-waves/waves.css') }}" rel="stylesheet">

    <!-- Animation Css -->
    <link href="{{ asset('assests/animate-css/animate.css') }}" rel="stylesheet">


<!-- Custom Css -->
    <link href="{{ asset('custom/css/style2.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('custom/css/all-themes.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script>
    document.body.id = "b2";
    function run(interval, frames) {
        var int = 1;

        function func() {
            document.body.id = "b"+int;
            int++;
            if(int === frames) { int = 1; }z
        }
        var swap = window.setInterval(func, interval);
    }

    run(5000, 14); //milliseconds, frames
</script>
</body>
</html>
