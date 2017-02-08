@extends('admin.layouts.blank')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $module_name }}
        <small>{{ $module_page }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> {{ $module_name }} </a></li>
        <li class="active">{{ $module_page }}</li>
      </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>
            <form class="form-horizontal form-label-left" method="POST" action="{{ route('add-basic-info') }}" novalidate>
                {!! csrf_field() !!}
                <div class="box-body">
                    <section>
                        <h3 class="box-title"> Basic Info </h3>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="name">
                                Name <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Chowking" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="website">
                                Website <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" id="website" name="website" placeholder="www.restowaze.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="owner-name">
                                Name of Owner  <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" id="owner-name" name="owner_name" placeholder="John Doe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="date-established">
                                Date Established <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="date-established" name="date_established">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3 class="box-title"> Contact Info </h3>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="phone">
                                Phone # <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" id="phone" name="phone_number" data-inputmask=""mask": "(999) 999-9999"" data-mask placeholder="Phone number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="mobile">
                                Mobile # <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <input type="text" class="form-control" id="mobile" name="mobile_number" data-inputmask=""mask": "(999) 999-9999"" data-mask placeholder="Mobile number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="address">
                                Address <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3 class="box-title">Gallery</h3>
                        <form class="dropzone dz-clickable">
                            <div class="dz-default dz-message">
                                <span>Click or drag images here</span>
                            </div>
                        </form>
                    </section>
                    <section>
                        <h3 class="box-title">Menu <small class="note">(optional)</small></h3>
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="panel-title">
                                    <i class="fa fa-cutlery"></i>
                                    Add restaurant menu
                                </h4>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                The body of the box
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3 class="box-title">Opening Hours <small>(optional)</small></h3>
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="panel-title">
                                    <i class="fa fa-clock-o"></i>
                                    Add opening hours
                                </h4>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                The body of the box
                            </div>
                        </div>
                    </section>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right" id="send">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection
