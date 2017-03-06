<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>{{ config('app.name') }} Admin </title>

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
        <link href="{{ asset('admin/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
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
        <script type="text/javascript" src="{{ url('/assets/js/richmarker-compiled.js') }}"></script>
        <script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/dropzone.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/validator.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/jquery.magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/js/maps.js') }}"></script>

        <script type="text/javascript">
            var mapX;

           $(document).ready(function(){
                var _latitude;
                var _longitude;
                var place;
                var element = "map-submit";

                if ( $('#latitude').val().length && $('#longitude').val().length ) {
                    _latitude = $('#latitude').val();
                    _longitude = $('#longitude').val();
                } else {
                    _latitude = 14.6753824;
                    _longitude = 120.5316586;
                }

                if ($('#address-autocomplete').val().length) {
                    place = $('#address-autocomplete').val();
                }

                simpleMap(_latitude,_longitude, element, true, place);

                $(document).on('shown.bs.modal','#get-location', function () {
                    google.maps.event.trigger(mapX, 'resize');
                });

                Dropzone.options.imageUpload = {
                    maxFilesize: 5,
                    acceptedFiles: ".jpeg,.jpg,.png"
                };

                $('#birthday').datepicker({
                    format: 'yyyy/mm/dd',
                    autoclose: true,
                    startDate: '-100y',
                    endDate: 'today',
                    todayHighlight: true
                });

                $('#date-established').datepicker({
                    format: 'yyyy/mm/dd',
                    autoclose: true,
                    startDate: '-200y',
                    endDate: 'today',
                    todayHighlight: true
                });

                $('.select2').select2();

                $(".duplicate").live("click", function(e){
                    e.preventDefault();
                    var duplicateElement = $(this).attr("href");

                    eclone = $(duplicateElement).clone();
                    eclone.find(':input').each(function(){
                    	  //$(this).val('');
                    	  $(this).attr('value', '');
                    });

                    var parentElement = $(duplicateElement)[0].parentElement;
                    $(parentElement).append( eclone[0].outerHTML );
                });

                $('.popup-gallery').magnificPopup({
            		delegate: 'a',
            		type: 'image',
            		tLoading: 'Loading image #%curr%...',
            		mainClass: 'mfp-img-mobile',
            		gallery: {
            			enabled: true,
            			navigateByImgClick: true,
            			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            		},
            		image: {
            			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            			titleSrc: function(item) {
            				return item.el.attr('title');
            			}
            		}
            	});
            });

        </script>

    </body>
</html>
