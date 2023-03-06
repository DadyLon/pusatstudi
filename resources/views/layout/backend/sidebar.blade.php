<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <div>
                <img src=" {{ asset('img/instiki.png') }}" alt="" class="img-circle" style="width: 100%; max-width:95px; height:auto;" >

            </div>
            {{-- <i class="fab fa-laravel"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">Pusat Studi</div>
    </a>

    <br>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @endcan

    @can('user')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @elseCan('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User Dashboard</span></a>
    </li>
    @endCan

    <!-- Divider -->

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Kelola Admin
    </div> --}}
    @can('admin')
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kelola Admin
    </div>
    @endcan
    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Create User & Admin</span></a>
    </li>
    @endcan

    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}/admin/post">
            <i class="fas fa-fw fa-upload"></i>
            <span>Post</span></a>
    </li>
    @endcan


    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Meta Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('usermetadata') }}">
            <i class="fas fa-fw fa-file"></i>
            <span>Meta Data</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
