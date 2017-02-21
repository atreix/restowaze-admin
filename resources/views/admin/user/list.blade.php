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
        @include('errors/messages')
        <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools">
                <form name="search-user" method="get" action="{{ url('/admin/user/search') }}">
                  <div class="input-group input-group-sm" style="width: 250px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search (name, email)">
                      <div class="input-group-btn">
                          <button type="submit" name="search" value="1" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Birthday</th>
                  <th>Create date</th>
                  <th>Action</th>
                </tr>
                <?php if ($users->isEmpty()) : ?>
                    <tr role="row" class="">
                        <td colspan="5" align="center"> <small> No result(s) found. </small></td>
                    </tr>
                <?php else : ?>
                    <?php foreach($users as $user) : ?>
                    <tr role="row" class="">
                        <td>{{ $user->id }}</td>
                        <td>{{ title_case($user->name) }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="{{ route('edit-user-info', $user->id) }}" ><i class="fa fa-pencil"></i> </a>
                            | <a href="{{ route('delete-user-info', $user->id) }}" ><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
              </table>
            </div>
            <div class="box-footer clearfix ">
                <div class="pull-right">
                    {{ $users->links() }}
                </div>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection
