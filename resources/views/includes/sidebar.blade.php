<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
        </div>
        <div class="pull-left info">
          <p>{{ title_case(Auth::user()->name) }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="active treeview">
            <a href="#">
                <i class="fa fa-user"></i> <span>User</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{ route('getUserList') }}"><i class="fa fa-circle-o"></i> List</a></li>
                <li><a href="{{ route('add-user-info') }}"><i class="fa fa-circle-o"></i> Create New</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cutlery"></i> <span>Restaurant</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{ URL::route('getRestoList') }}"><i class="fa fa-circle-o"></i> List</a></li>
                <li><a href="{{ URL::route('add-basic-info') }}"><i class="fa fa-circle-o"></i> Create New</a></li>
            </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
