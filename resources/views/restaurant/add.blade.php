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
                            <h2>Create New Restaurant </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps anchor">
                                    <li>
                                        <a href="#step-1" class="selected" rel="1">
                                            <label class="step_no">1</label>
                                            <span class="step_descr">
                                                Step 1<br />
                                                <small>Basic Info</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2" class="disabled" rel="2">
                                            <label class="step_no">2</label>
                                            <span class="step_descr">
                                                Step 2<br />
                                                <small>Address</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3" class="disabled" ="3">
                                            <label class="step_no">3</label>
                                            <span class="step_descr">
                                                Step 3<br />
                                                <small>Description</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4" class="disabled" ="4">
                                            <label class="step_no">4</label>
                                            <span class="step_descr">
                                                Step 4<br />
                                                <small>Complete</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- step content -->
                                @include('restaurant/add/step_1')
                                @include('restaurant/add/step_2')
                                @include('restaurant/add/step_3')
                                @include('restaurant/add/step_4')
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
