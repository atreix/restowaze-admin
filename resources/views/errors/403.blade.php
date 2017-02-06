@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center error">
                <h1>403</h1>
                <h2>Access denied</h2>
                <p>Full authentication is required to access this resource. <a href="#">Report this?</a>
                </p>
            </section>
            <!--end page-title-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <form class="form inputs-underline">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_keyword" placeholder="Search keyword">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                </span>
                        </div><!-- /input-group -->
                    </form>
                    <!--end form-->
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection
