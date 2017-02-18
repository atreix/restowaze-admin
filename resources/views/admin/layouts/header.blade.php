<body class="hold-transition fixed skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="{{ env('restowaze_path') }}" class="logo">
      <span class="logo-mini"><b>RW</b>A</span>
      <span class="logo-lg"><b>Restowaze</b>Admin</span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ Gravatar::src(Auth::user()->email) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ title_case(Auth::user()->name) }}</span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                    <img src="{{ Gravatar::src(Auth::user()->email) }}" class="img-circle" alt="User Image">
                    <p>
                        {{ title_case(Auth::user()->name) }}
                        <small>Member since {{ date('M Y', strtotime(Auth::user()->created_at)) }}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <!--<div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>-->
                    <div class="pull-right">
                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Log out</a>
                    </div>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>
