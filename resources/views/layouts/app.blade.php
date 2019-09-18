<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Personal</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>)
    <body>
        <!-- start header Area -->
        @include('layouts.header')
        <!-- End header Area -->

        <!-- start content Area -->
        @yield('content')
        <!-- End content Area -->

        <!-- start footer Area -->
        @include('layouts.footer')
        <!-- End footer Area -->

        <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/hoverIntent.js') }}"></script>
        <script src="{{ asset('js/superfish.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.tabs.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/simple-skillbar.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
