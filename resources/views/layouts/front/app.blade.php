<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>COPTIGTO.A.C | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta_site')

    <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-png" />
    <meta name="author" content="José Razo Prieto">
    <meta name="Language" content="es_ES" />
    <meta name="copyright"
        content="COLEGIO DE PROFESIONISTAS DE TECNOLOGÍAS DE LA INFORMACIÓN DEL ESTADO DE GUANAJUATO A.C." />
    <meta name="distribution" content="global" />
    <meta name="geo.region" content="MX-GUA" />
    <meta name="geo.placename" content="Guanajuato" />
    <meta name="geo.position" content="20.9877;-101" />
    <meta name="ICBM" content="20.9877, -101" />
    <meta itemprop="latitude" content="20.9877" />
    <meta itemprop="longitude" content="-101" />
    <meta name="revisit" content="4 days" />
    <meta name="revisit-after" content="4 days" />
    <meta name="Robots" content="all" />
    <meta name="robots" content="index, follow, archive" />
    @yield('meta_og')

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/cd-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/presets/preset1.css') }}">
    <!-- toastr notifications Stylesheet -->
    <link href="{{ asset('plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="body-inner">
        @include('layouts.front.header')
        @yield('content')
        @include('layouts.front.footer')

        <!-- 
    Essential Scripts
    =====================================-->
        <script src="{{ asset('/plugins/js/jquery.js') }}"></script>
        <script src="{{ asset('/plugins/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/plugins/js/style-switcher.js') }}"></script>
        <script src="{{ asset('/plugins/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('/plugins/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('/plugins/js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('/plugins/js/cd-hero.js') }}"></script>
        <script src="{{ asset('/plugins/js/isotope.js') }}"></script>
        <script src="{{ asset('/plugins/js/ini.isotope.js') }}"></script>
        <script src="{{ asset('/plugins/js/wow.min.js') }}"></script>
        <script src="{{ asset('/plugins/js/smoothscroll.js') }}"></script>
        <script src="{{ asset('/plugins/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('/plugins/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('/plugins/js/waypoints.min.js') }}"></script>
        <!-- toastr notifications js -->
    <script src="{{ asset('plugins/toastr/js/toastr.min.js') }}"></script>
        <script src="{{ asset('/plugins/js/custom.js') }}"></script>

        @yield('scripts')
    </div><!-- Body inner end -->
</body>

</html>