<!-- Main Sidebar Container -->
<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/vendor/AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Vlogo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/images/user_image.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#!" class="d-block">{{ session()->get('user')->username }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @foreach($nav as $n)
                    <li class="nav-item">
                        <a href="{{ route($n->route) }}" class="nav-link @if(request()->routeIs($n->route)) active @endif">
                            @if($n->icon) <i class="{{ $n->icon }} nav-icon"></i> @endif
                            <p>{{ $n->name }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="{{ route('home') }}" class="btn btn-link"><i class="fas fa-sign-out-alt"></i></a>
            <input type="submit" class="btn btn-secondary hide-on-collapse pos-right" value="Log out"/>
        </form>
{{--        <a href="{{ route('logout') }}" class="btn btn-secondary hide-on-collapse">Log out</a>--}}
{{--        <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>--}}
    </div>
    <!-- /.sidebar-custom -->
</aside>
