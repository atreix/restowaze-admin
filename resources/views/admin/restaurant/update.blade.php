@extends('layouts.blank')

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Update <small>Restaurant Information </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <!-- step content -->
                                <div id="step-1" class="content" style="display: block;">
                                    <form class="form-horizontal form-label-left" id="form-add-basic-info" method="POST" action="{{ route('edit-basic-info', $restoInfo->id) }}" novalidate>
                                        {!! csrf_field() !!}
                                        <h4> Basic Information</h4>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text"
                                                value="{{ title_case($restoInfo->name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="url" id="website" name="website" placeholder="http://www.restowaze.com" required="required" class="form-control col-md-7 col-xs-12"
                                                value="{{ $restoInfo->website }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="owner-name">Name of Owner <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="owner-name" name="owner_name" required="required" class="form-control col-md-7 col-xs-12"
                                                value="{{ title_case($restoInfo->owner) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-established">Date Established <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input id="date-established" name="date_established" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"
                                                    value="{{ $restoInfo->date_established }}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4> Contact Information</h4>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone"> Phone #
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="phone" name="phone" class="form-control col-md-7 col-xs-12" value="{{ $restoInfo->phone_number }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile"> Mobile #
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="mobile" name="mobile" required="required" class="form-control col-md-7 col-xs-12" value="{{ $restoInfo->mobile_number }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website"> Address <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                                    <textarea id="address" required="required" class="form-control" name="address">{{ $restoInfo->address }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="send" type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End SmartWizard Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
