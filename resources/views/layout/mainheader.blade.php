<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>Z</b>IO</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <b>ZIO</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/img/avatar5.png" class="user-image" alt="User Image">
                        <span class="hidden-xs">Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/img/avatar5.png" class="img-circle" alt="User Image">
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route( 'admin.user.edit',[ 'id'=>1])}}" class="btn btn-default btn-flat">Cá Nhân</a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="#" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                   Đăng Xuất
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
