@extends('admin.layouts.blank')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create New User </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps anchor">
                                    <li>
                                        <a href="#step-1" class="selected" isdone="1" rel="1">
                                            <label class="step_no">1</label>
                                            <span class="step_descr">
                                                Step 1<br />
                                                <small>Basic Info</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2" class="disabled" isdone="0" rel="2">
                                            <label class="step_no">2</label>
                                            <span class="step_descr">
                                                Step 2<br />
                                                <small>Address</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3" class="disabled" isdone="0" rel="3">
                                            <label class="step_no">3</label>
                                            <span class="step_descr">
                                                Step 3<br />
                                                <small>Description</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- step content -->
                                <div class="stepContainer" style="height: 287px;">
                                    <div id="step-1" class="content" style="display: block;">
                                        <form class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/user/add') }}">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                                        </label>
                                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="gender" value="female"> Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="actionBar">
                                    <div class="msgBox">
                                        <div class="content"></div>
                                        <a href="#" class="close">X</a>
                                    </div>
                                    <div class="loader">Loading</div>
                                    <a href="#" class="buttonFinish btn btn-default">Finish</a>
                                    <a href="#" class="buttonNext btn btn-success buttonDisabled">Next</a>
                                    <a href="#" class="buttonPrevious btn btn-primary">Previous</a>
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
@endsection
