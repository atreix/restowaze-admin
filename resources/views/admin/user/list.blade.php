@extends('admin.layouts.blank')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>{{ $module_name }}<small>{{ $module_page }}</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> {{ $module_name }} </a></li>
            <li class="active">{{ $module_page }}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Create date</th>
                  <th>Action</th>
                </tr>
                <?php if (!empty($users)) : ?>
                    <?php foreach($users as $user) : ?>
                    <tr role="row" class="">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="{{ route('edit-user-info', $user->id) }}" ><i class="fa fa-pencil"></i> </a>
                            | <a href="{{ route('edit-user-info', $user->id) }}" ><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
              </table>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection
