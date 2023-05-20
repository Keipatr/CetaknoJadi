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
    <link href="libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
    <link href="libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="libs/nouislider/dist/nouislider.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/logoTitleCetakno.ico">


    <!-- Libs CSS -->
    <link href="libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">


</head>

<body>
    @include('layouts.header')

    @yield('main-content')

    @include('layouts.footer')

    <!-- Other scripts and closing tags -->

</body>

</html>
