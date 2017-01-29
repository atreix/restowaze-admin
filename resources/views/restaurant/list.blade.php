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
                                        <div class="box-tools">
                                            <div class="form-inline pull-right">
                                                <form>
                                                    <fieldset>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-addon"><strong>ID</strong></span>
                                                            <input type="text" class="form-control" placeholder="ID" name="id" value="">
                                                        </div>
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-btn">
                                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
                                                            </div>
                                                            <div class="input-group-btn">
                                                                <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-undo"></i></a>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="btn-group pull-right" style="margin-right: 10px">
                                                <a href="{{ route('add-basic-info') }}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-save"></i>&nbsp;&nbsp;New
                                                </a>
                                            </div>
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
                                                <?php if (!empty($restaurants)) : ?>
                                                    <?php foreach($restaurants as $restaurant) : ?>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">{{ title_case($restaurant->name) }}</td>
                                                        <td>{{ $restaurant->address }}</td>
                                                        <td>
                                                            @if (!empty($restaurant->category))
                                                            <span class="label label-primary">
                                                                {{ $restaurant->category }}
                                                            </span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('edit-basic-info', $restaurant->id) }}" ><i class="fa fa-pencil"></i>  Edit </a>
                                                            |
                                                            <a href="{{ route('edit-basic-info', $restaurant->id) }}" ><i class="fa fa-trash"></i>  Delete </a>
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
