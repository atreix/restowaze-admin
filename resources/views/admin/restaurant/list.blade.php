@extends('admin.layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

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
                <div class="box-header">
                    <h3 class="box-title"></h3>
                    <div class="box-tools">
                        <form name="search-restaurant" method="get" action="{{ url('/admin/resto/search') }}">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search (name, category, municipality)">
                                <div class="input-group-btn">
                                    <button type="submit" name="search" value="1" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        <?php if ($restaurants->isEmpty()) : ?>
                            <tr role="row" class="">
                                <td colspan="5" align="center"> <small> No result(s) found. </small></td>
                            </tr>
                        <?php else : ?>
                            <?php foreach($restaurants as $restaurant) : ?>
                            <tr role="row" class="">
                                <td>{{ $restaurant->id }}</td>
                                <td>{{ title_case($restaurant->name) }}</td>
                                <td>{{ $restaurant->address }}</td>
                                <td>
                                    @if (!empty($restaurant->category))
                                    <span class="label label-primary">
                                        {{ $restaurant->category }}
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit-basic-info', $restaurant->id) }}" ><i class="fa fa-pencil"></i> </a>
                                    | <a href="{{ route('delete-basic-info', $restaurant->id) }}" ><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="box-footer clearfix ">
                    <div class="pull-right">
                        {{ $restaurants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
