{{-- @include('layouts.header');
@yield('main-content');
@include('layouts.footer'); --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cetakno - Printing Provider</title>
    <link href="{{ asset('libs/slick-carousel/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/nouislider/dist/nouislider.min.css') }}" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta content="Codescandy" name="author">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon/logoTitleCetakno.ico') }}">


    <!-- Libs CSS -->
    <link href="{{ asset('/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">


</head>

<body>
    <header class="header">
        @include('layouts.header')
    </header>
    @yield('main-content')

    @include('layouts.footer')

    <style>
        .header {
            position: sticky;
            top: 0;
            background-color: #ffffff;
            z-index: 100;
        }
    </style>

</body>

</html>
