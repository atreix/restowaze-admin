<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} |</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("admin/css/gentelella.min.css") }}" rel="stylesheet">

        <link href="{{ asset("admin/css/smart_wizard.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("admin/css/dropzone.min.css") }}" rel="stylesheet" type="text/css">

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("admin/js/gentelella.min.js") }}"></script>

        <script type="text/javascript" src="{{ asset("admin/js/jquery.smartWizard.js") }}"></script>
        <script type="text/javascript" src="{{ asset("admin/js/dropzone.min.js") }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#wizard').smartWizard();

                $('.buttonNext').addClass('btn btn-success');
                $('.buttonPrevious').addClass('btn btn-primary');
                $('.buttonFinish').addClass('btn btn-default');
            });
        </script>

        @stack('scripts')

    </body>
</html>
