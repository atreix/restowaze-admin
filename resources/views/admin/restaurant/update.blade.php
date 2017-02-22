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
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li><a href="#schedulex" data-toggle="tab"><i class="fa fa-calendar-plus-o"></i> Schedule</a></li>
                <li><a href="#galleryx" data-toggle="tab"><i class="fa fa-th"></i> Gallery</a></li>
                <li><a href="#menux" data-toggle="tab"><i class="fa fa-spoon"></i> Menu</a></li>
                <li class="active"><a href="#basic" data-toggle="tab"><i class="fa fa-pencil"></i> Basic Info</a></li>
                <li class="pull-left header"><i class="fa fa-cutlery"></i> <strong class="text-info"> {{ title_case($restoInfo->name) }} </strong> </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    <form class="form-horizontal form-label-left" method="post" action="{{ url('/admin/resto/update', $restoInfo->id) }}" novalidate>
                        {!! csrf_field() !!}
                        <div class="box-body">
                            <section>
                                <h3 class="box-title text-aqua"> Basic Info <small class="text-red">* required </small></h3>
                                <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="name">
                                        Name <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Chowking" required value="{{ $restoInfo->name }}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="description">
                                        Description <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="6" id="description" name="description" placeholder="Enter description...">{{ $restoInfo->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                        		<div class="form-group">
                            		<label class="col-sm-2 control-label" for="category">
                                 		Category <span class="required">*</span>
                            		</label>
                            		<div class="col-sm-10">
                                		<select class="form-control select2 select2-hidden-accessible" name="category" id="category" data-placeholder="Select category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                	    	@foreach ($categories as $category)
                                	    	<option @if ($category == $restoInfo->category)
                                	    				selected
                                	    			@endif >
                                	    			{{ $category }} 
                                	    	</option>
                                	    	@endforeach
                                		</select>
                            		</div>
                        		</div>
                                <div class="form-group has-feedback {{ $errors->has('website') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="website">
                                        Website <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="website" name="website" placeholder="http://www.restowaze.com" value="{{ $restoInfo->website }}">
                                        @if ($errors->has('website'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('website') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('owner_name') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="owner-name">
                                        Name of Owner  <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="owner-name" name="owner_name" placeholder="John Doe" value="{{ $restoInfo->owner }}">
                                        @if ($errors->has('owner_name'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('owner_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                        <div class="form-group has-feedback {{ $errors->has('bus_hours') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label" for="description">
                                Business Hours <span class="required">*</span>
                            </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="6" id="bus_hours" name="bus_hours" placeholder="Enter business hours..." >{{ $restoInfo->bus_hours }}</textarea>
                                @if ($errors->has('bus_hours'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('bus_hours') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                <div class="form-group has-feedback {{ $errors->has('date_established') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="date-established">
                                        Date Established <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" id="date-established" name="date_established" value="{{ $restoInfo->date_established }}">
                                        </div>
                                        @if ($errors->has('date_established'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('date_established') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h3 class="box-title text-aqua"> Contact Info </h3>
                                <div class="form-group has-feedback {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="phone">
                                        Phone # <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" id="phone" name="phone_number" data-inputmask=""mask": "(999) 999-9999"" data-mask placeholder="Phone number" value="{{ $restoInfo->phone_number }}">
                                        </div>
                                        @if ($errors->has('phone_number'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="mobile">
                                        Mobile #
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-mobile"></i>
                                            </div>
                                            <input type="text" class="form-control" id="mobile" name="mobile_number" data-inputmask=""mask": "(999) 999-9999"" data-mask placeholder="Mobile number" value="{{ $restoInfo->mobile_number }}">
                                        </div>
                                        @if ($errors->has('mobile_number'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('mobile_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="email">
                                        Email <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="customer@support.com" value="{{ $restoInfo->email }}">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label" for="address">
                                        Address <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $restoInfo->address }}">
                                        </div>
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                        		<div class="form-group has-feedback {{ $errors->has('municity') ? ' has-error' : '' }}">
                            		<label class="col-sm-2 control-label" for="municity">
                                		City/Municipality <span class="required">*</span>
		                            </label>
        		                    <div class="col-sm-10">
        		                        <div class="input-group date">
        		                            <div class="input-group-addon">
        		                                <i class="fa fa-map"></i>
        		                            </div>
        		                            
        		                            <select class="form-control select2 select2-hidden-accessible" id="municity" name="municity" data-placeholder="Select City/Municipality" style="width: 100%;" tabindex="-1" aria-hidden="true">
        		                            @foreach ($municities as $municity)
        		                            <option @if ($municity == $restoInfo->municity)
        		                            			selected
        		                            		@endif> 
        		                            		{{ $municity }}
        		                            </option>
        		                            @endforeach
        		                        </select>
                                    
        		                        </div>
        		                        @if ($errors->has('municipality'))
        		                            <span class="help-block">
        		                              <strong>{{ $errors->first('municipality') }}</strong>
        		                            </span>
        		                        @endif
        		                    </div>
        		                </div>

                            </section>
                            <!--<section>
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
                            </section>-->
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right submit" name="submit" value="1" id="send">Save</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="menux">
                    @include('admin/restaurant/menu')
                </div>
                <div class="tab-pane" id="galleryx">
                    @include('admin/restaurant/gallery')
                </div>
                <div class="tab-pane" id="schedulex">
                    @include('admin/restaurant/schedule')
                </div>
          </div>
    </section>
</div>
@endsection
