<header class="main-header">
  <!-- Logo -->
  <a href="javascript:void(0);" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>LUE</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>ITP </b>Blue</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="javascript:void(0);" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
            @if(Auth::user()->us_img != null)
            <img src="data:image/jpeg;base64,{{ base64_encode(Auth::user()->us_img )}}" class="user-image" alt="User Image">
            @endif
            <span class="hidden-xs">{{Auth::user()->us_name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              @if(Auth::user()->us_img != null)
              <img src="data:image/jpeg;base64,{{ base64_encode(Auth::user()->us_img )}}" class="img-circle" alt="User Image">
              @endif
              <p>
                {{Auth::user()->us_name}}
                <small>{{Auth::user()->created_at}}</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('admin-profile') }}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>