<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} |</title>

    <link href="{{ asset("assets/fonts/font-awesome.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/fonts/elegant-fonts.css") }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("assets/css/jquery.nouislider.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" type="text/css">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center text-center">
                    <h1 class="error-number">404</h1>
                    <h2>Sorry but we couldn't find this page</h2>
                    <p>This page you are looking for does not exist <a href="#">Report this?</a>
                    </p>
                    <div class="mid_center">
                        <h3>Search</h3>
                        <form>
                            <div class="col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery-2.2.1.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery-migrate-1.2.1.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/bootstrap-select.min.js") }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
    <script type="text/javascript" src="{{ asset("assets/js/richmarker-compiled.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery.validate.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/maps.js") }}"></script>

</body>
</html>
