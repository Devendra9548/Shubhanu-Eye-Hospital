<nav class="navbar navbar-light bg-white shadow-sm d-md-none">
    <div class="container-fluid">
        <button class="btn btn-primary" data-bs-target="#sidebarMenu">
            <i class="bi bi-list"></i>
        </button>
        <span class="fw-bold">Shubhanu Eye Hospital</span>
    </div>
</nav>
<div class="col-md-3 col-lg-2 p-0 sidebar" id="leftpannel">
    <div class="text-white" id="sidebarMenu">

        <div class="offcanvas-header d-md-none">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body d-block px-3">

            <!-- Profile -->
            <div class="profile-box">
                <img src="/assets/logo-short.png" width="100%">
            </div>

            <ul class="nav flex-column mt-4" id="menu">
                <div class="toppart">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{route('dashboard')}}" wire:navigate><i class="bi bi-speedometer2"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.blogs') ? 'active' : '' }}" href="{{route('admin.blogs')}}" wire:navigate><i
                                class="bi bi-journal-bookmark"></i>
                            Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{route('admin.users')}}"  wire:navigate><i class="bi bi-people"></i> Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.messages') ? 'active' : '' }}" href="{{route('admin.messages')}}" wire:navigate><i class="bi bi-chat-dots"></i> Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}" href="{{route('admin.profile')}}" wire:navigate><i class="bi bi-person"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}" href="{{route('admin.settings')}}" wire:navigate><i class="bi bi-gear"></i> Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="return confirm('Are you sure you want to logout?')" href="{{route('logout')}}"><i class="bi-box-arrow-right"></i> Logout</a>
                    </li>
                </div>
                <div class="endpart">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize p-0" href="#">
                            <div class="mainsetting d-flex">
                                <div class="left">
                                    <p class="mb-0">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1) . substr(strstr(Auth::user()->name, ' '), 1, 1)) }}
                                    </p>
                                </div>
                                <div class="right">
                                    <p class="mb-0 user-name">{{ Auth::user()->name }}</p>
                                    <p class="small-role mb-0">Admin</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </div>

            </ul>

        </div>
    </div>
</div>