<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fab fa-laravel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pusat Studi</div>
    </a>

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
            <i class="fas fa-fw fa-table"></i>
            <span>Create User & Admin</span></a>
    </li>
    @endcan

    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}/admin/post">
            <i class="fas fa-fw fa-water"></i>
            <span>Post</span></a>
    </li>
    @endcan
    {{-- @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-gopuram"></i>
            <span>Batuan</span></a>
    </li>
    @endcan
    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Geopark</span></a>
    </li>
    @endcan --}}

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Meta Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('usermetadata') }}">
            <i class="fas fa-fw fa-water"></i>
            <span>Meta Data</span></a>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('buttons') }}">Buttons</a>
                <a class="collapse-item" href="{{ route('cards') }}">Cards</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('blank-page') }}">Blank Page</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
