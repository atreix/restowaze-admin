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
        @include('errors/messages')
        <div class="row">
            <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update user <strong> {{ title_case($user->name) }} </strong></h3>
            </div>
            <form class="form-horizontal form-label-left" method="post" action="{{ route('save-update-user-info', $user->id) }}" novalidate="">
                {!! csrf_field() !!}
                <div class="box-body">
                    <section>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="first-name">
                                Name <span class="required">*</span>
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="first-name" name="firstname" value="{{ $user->firstname }}" disabled>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="last-name" name="lastname" placeholder="Last Name" value="{{ $user->lastname }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="user-name">Username <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="user-name" name="username" placeholder="Username" value="{{ $user->name }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="gender">Gender</label>
                            <div class="col-sm-10">
                                <div id="gender" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        {{ Form::radio('gender', 1) }} &nbsp; Male &nbsp;
                                        <!-- <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp; -->

                                    </label>
                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        {{ Form::radio('gender', 0, true) }} Female 
                                        <!-- <input type="radio" name="gender" value="female"> Female -->

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="birthday">
                                Date of Birth <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right" name="submit" id="send" value="1" >Save</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection
