<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - Łowisko Grodzisko</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    @stack('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/media.css') }}" rel="stylesheet" type="text/css" >



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light" style="height: 90px">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img class='logo' src="{{asset('img/logo.svg')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item {{ setActive('/') }}">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item {{ setActive('restauracja') }}">
                        <a class="nav-link" href="{{route('restaurant')}}">Restauracja</a>
                    </li>
                    <li class="nav-item {{ setActive('lowisko') }}">
                        <a class="nav-link" href="{{route('lowisko')}}">Łowisko</a>
                    </li>
                    <li class="nav-item {{ setActive('o-nas') }}">
                        <a class="nav-link" href="#">O nas</a>
                    </li>
                    <li class="nav-item {{ setActive('galeria') }}">
                        <a class="nav-link" href="#">Galeria</a>
                    </li>
                    <li class="nav-item {{ setActive('kontakt') }}">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

            <div class="content">
                @yield('content')
            </div>

        <footer>
            copryright © 2019
        </footer>
    </div>
        <script   src="{{asset('js/app.js')}}"></script>

        <script  src="{{asset('js/script.js')}}"></script>
        @stack('script')

</body>
</html>
