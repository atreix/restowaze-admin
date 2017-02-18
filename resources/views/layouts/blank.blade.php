<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link href="{{ asset('assets/fonts/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/fonts/elegant-fonts.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('assets/css/zabuto_calendar.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/trackpad-scroll-emulator.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.nouislider.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    </head>
    @include('layouts/header')
        @yield('main_container')
    @include('layouts/footer')

    <script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
    <script type="text/javascript" src="{{ asset('assets/js/richmarker-compiled.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.trackpad-scroll-emulator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/maps.js') }}"></script>

    <script type="text/javascript">
        var optimizedDatabaseLoading = 0;
        var _latitude = 14.6753824;
        var _longitude = 120.5316586;
        var element = "map-homepage";
        var markerTarget = "modal"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
        var sidebarResultTarget = "modal"; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
        var showMarkerLabels = false; // next to every marker will be a bubble with title
        var mapDefaultZoom = 14; // default zoom
        heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels, mapDefaultZoom);

        var element = "map-detail";
        simpleMap(_latitude,_longitude, element);
    </script>
    </body>
</html>
