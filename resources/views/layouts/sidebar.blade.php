<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="">
            <i class="fa fa-circle-notch text-primary"></i>
            <span class="smini-hide">
                            <span class="font-w700 font-size-h5">ne</span> <span class="font-w400">4.1</span>
                        </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Color Variations -->
            <div class="dropdown d-inline-block ml-3">
                <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="si si-drop"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <!-- Color Themes -->
                    <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                        <span>Default</span>
                        <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('assets/css/themes/amethyst.min.css')}}" href="#">
                        <span>Amethyst</span>
                        <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('assets/css/themes/city.min.css')}}" href="#">
                        <span>City</span>
                        <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('assets/css/themes/flat.min.css')}}" href="#">
                        <span>Flat</span>
                        <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('assets/css/themes/modern.min.css')}}" href="#">
                        <span>Modern</span>
                        <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('assets/css/themes/smooth.min.css')}}" href="#">
                        <span>Smooth</span>
                        <i class="fa fa-circle text-smooth"></i>
                    </a>
                    <!-- END Color Themes -->

                    <div class="dropdown-divider"></div>

                    <!-- Sidebar Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                        <span>Sidebar Dark</span>
                    </a>
                    <!-- Sidebar Styles -->

                    <div class="dropdown-divider"></div>

                    <!-- Header Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                        <span>Header Dark</span>
                    </a>
                    <!-- Header Styles -->
                </div>
            </div>
            <!-- END Themes -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link active" href="{{route('home')}}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-heading">User Interface</li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="fa fa-users"></i>
                    <span class="nav-main-link-name"> &nbsp;  User</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('user.create')}}">
                            <span class="nav-main-link-name">Add new user</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('user.index')}}">
                            <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('user.reset.index')}}">
                            <span class="nav-main-link-name">Reset User password</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-main-link-name"> &nbsp; Department</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('department.create')}}">
                            <span class="nav-main-link-name">Add new department</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('department.index')}}">
                            <span class="nav-main-link-name">Departments</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="fa fa-book"></i>
                    <span class="nav-main-link-name">&nbsp; Category</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('item.create')}}">
                            <span class="nav-main-link-name">Add new category</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('item.index')}}">
                            <span class="nav-main-link-name">Categories</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="fa fa-laptop"></i>
                    <span class="nav-main-link-name">&nbsp; Asset</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('asset.create')}}">
                            <span class="nav-main-link-name">Upload Assets</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('asset.index')}}">
                            <span class="nav-main-link-name">Assets</span>
                        </a>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('/scrapped_assets')}}">
                            <span class="nav-main-link-name">Scrapped Assets</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="fa fa-sync-alt"></i>
                    <span class="nav-main-link-name"> &nbsp; Transfer</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('transferAsset')}}">
                            <span class="nav-main-link-name">Transfer Assets</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('transfer/index')}}">
                            <span class="nav-main-link-name">Transfers</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="fa fa-qrcode"></i>
                    <span class="nav-main-link-name">&nbsp; Qrcode</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('qrcode')}}">
                            <span class="nav-main-link-name">Scan Asset Qrcode</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

    </div>
    <!-- END Side Navigation -->
</nav>

