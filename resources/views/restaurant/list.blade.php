@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Restaurants </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="datatable_length">
                                            <label>Show
                                                <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label>Search:
                                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 145px;">
                                                        Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 238px;">
                                                        Address
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 106px;">
                                                        Category
                                                    </th>
                                                    <th tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 106px;">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($restaurant)) : ?>
                                                    <?php foreach($restaurants as $restaurant) : ?>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">{{ $restaurant->name }}</td>
                                                        <td>{{ $restaurant->address }}</td>
                                                        <td>{{ $restaurant->category }}</td>
                                                        <td> Edit | Delete </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                            <!-- show count -->
                                        </div>
                                        <!-- pagination -->
                                    </div>
                                </div>
                            </div>
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
