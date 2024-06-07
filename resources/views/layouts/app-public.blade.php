<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Come and view the world">
    <meta name="keywords" content="Ecommerce,book">
    <meta name="author" content="{{ env('APP_NAME') }}">

    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/linearicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/animation.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: CSS Assets-->
</head>
<body class="box-home">
    <div class="page-box">
        @include('components.header')
        <div id="main-wrapper">
            @yield('content')
            @include('components.footer')
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/axios.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fullpage.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/image-loaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/YTplayer.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.instagramfeed.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax.mail.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('pages/js/app.js') }}"></script>
    @yield('additional_script')
    <!-- END: JS Assets-->
</body>
</html>
