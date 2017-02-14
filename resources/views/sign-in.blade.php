@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('restowaze-path') }}">Home</a></li>
        <li class="active">Sign In</li>
    </ol>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
            <section class="page-title">
                <h1>Sign In</h1>
            </section>
            <!--end page-title-->
            <section>
                <form class="form inputs-underline" method="post" action="{{ url('/signin') }}">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!--end form-group-->
                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group center">
                        <button type="submit" class="btn btn-primary width-100">Sign In</button>
                    </div>
                    <!--end form-group-->
                </form>
                <hr>
                <a href="#">I have forgot my password</a>
            </section>
        </div>
    </div>
</div>
@endsection
