@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('restowaze-path') }}">Home</a></li>
        <li class="active">Register</li>
    </ol>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
            <section class="page-title">
                <h1>Register</h1>
            </section
            <!--end page-title-->
            <section>
                <form class="form inputs-underline" method="post" action="{{ url('/registration') }}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" value="{{ old('first_name') }}">
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group has-feedback{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--enr row-->
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!--end form-group-->
                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!--end form-group-->
                    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"  value="{{ old('password_confirmation') }}">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!--end form-group-->
                    <div class="form-group center">
                        <button type="submit" class="btn btn-primary width-100">Register Now</button>
                    </div>
                    <!--end form-group-->
                </form>
                <!--<hr>
                <p class="center">By clicking on “Register Now” button you are accepting the <a href="terms-conditions.html">Terms & Conditions</a></p>-->
            </section>
        </div>

    </div>
</div>
@endsection
