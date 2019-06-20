<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80710173-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-80710173-1');
    </script>
    <!-- Hotjar Tracking Code for www.lowiskogrodzisko.pl -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1368946,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - Łowisko Grodzisko</title>
    <meta name="description" content="@yield('description')">
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
        <div class="wrapper-menu">
        <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-light" style="height: 90px">

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
                        <a class="nav-link" href="{{route('about')}}">O nas</a>
                    </li>
                    <li class="nav-item {{ setActive('galeria') }}">
                        <a class="nav-link" href="{{route('gallery')}}">Galeria</a>
                    </li>
                    <li class="nav-item {{ setActive('kontakt') }}">
                        <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>

        </div>
        </div>

            <div class="content">
                @yield('content')
            </div>

        <footer>
            copyright © 2019
        </footer>
    </div>
        <script   src="{{asset('js/app.js')}}"></script>

        <script  src="{{asset('js/script.js')}}"></script>
        @stack('script')

</body>
</html>
