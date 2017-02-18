<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>{{ config('app.name') }} Admin |</title>

        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" type="text/css">
        <link href="{{ asset('assets/fonts/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/fonts/elegant-fonts.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="{{ asset('admin/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/smart_wizard.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/css/dropzone.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">

    </head>
    @include('admin/layouts/header')
        @include('includes/sidebar')
        @yield('content')
    @include('admin/layouts/footer')
        <!-- jQuery -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
        <!-- Custom Theme Scripts -->
        <!-- FastClick -->
        <script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap -->
        <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('admin/js/jquery.smartWizard.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/dropzone.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/validator.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#birthday').datepicker({
                    autoclose: true,
                    startDate: '-100y',
                    endDate: 'today',
                    todayHighlight: true
                });

                $('#date-established').datepicker({
                    autoclose: true,
                    startDate: '-200y',
                    endDate: 'today',
                    todayHighlight: true
                });

                $('.select2').select2();

                $(".duplicate").live("click", function(e){
                    e.preventDefault();
                    var duplicateElement = $(this).attr("href");
                    var parentElement = $(duplicateElement)[0].parentElement;
                    $(parentElement).append( $(duplicateElement)[0].outerHTML );
                });

                if( $("input[type=file].with-preview").length ){
                    $("input.file-upload-input").MultiFile({
                        list: ".file-upload-previews"
                    });
                }
            });
        </script>

    </body>
</html>
