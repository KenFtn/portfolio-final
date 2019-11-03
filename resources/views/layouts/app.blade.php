<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:600|Roboto:700&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">
    <nav>
        <!-- Menu pour le responsive -->
        <div class="menu-responsive">
            <div class="anm-menu-button">
                <span class="anm-menu-label"></span>
            </div>
            <div class="anm-menu">
                <div class="anm-container">
                    <a href="#section-me">About</a>
                    <a href="#section-projet">Mes Projets</a>
                    <a href="#section-expertise">Expertises</a>
                    <a href="#section-contact">Contact</a>	
                </div>
            </div>
            <div class="anm-background"></div>
        </div>
    </nav>

@yield('content')

<script>
    AOS.init();
</script>
</body>
</html>
