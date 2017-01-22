@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">

    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            <a href="{{ env('restowaze_path') }}">Restowaze.com</a>
            ©{{ date('Y') }} All Rights Reserved. Privacy and Terms
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection
