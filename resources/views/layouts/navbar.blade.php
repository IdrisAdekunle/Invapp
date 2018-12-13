<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="{{route('welcome')}}">INFORMATION TECHNOLOGY INVENTORY FORM </a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-cog"></i> Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Settings</a></li>
                            <li><a href="javascript:;">Help</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-user"></i> Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Profile</a></li>
                            <li><a href="javascript:;">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">

                @if(Route::CurrentRouteName() == 'welcome')

                    <li class="active"><a href="{{route('welcome')}}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
                @elseif(Route::CurrentRouteName() == '/')

                    <li class="active"><a href="{{route('welcome')}}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>

                    @else

                    <li class=""><a href="{{route('welcome')}}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>

                @endif
                @if(Route::CurrentRouteName() == 'item.create')
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Item</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('item.create')}}">Create item</a></li>
                        <li><a href="{{route('item.index')}}">Item Categories</a></li>

                    </ul>
                </li>
                @elseif(Route::CurrentRouteName() == 'item.index')


                    <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Item</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('item.create')}}">Create item</a></li>
                            <li><a href="{{route('item.index')}}">Item Categories</a></li>

                        </ul>
                    </li>


                    @else

                    <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Item</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('item.create')}}">Create item</a></li>
                            <li><a href="{{route('item.index')}}">Item Categories</a></li>

                        </ul>
                    </li>

                    @endif

                    @if(Route::CurrentRouteName() == 'department.create')
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-group"></i><span>Department</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('department.create')}}">Create department</a></li>
                        <li><a href="{{route('department.index')}}">Departments</a></li>

                    </ul>
                </li>

                    @elseif(Route::CurrentRouteName() == 'department.index')

                        <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-group"></i><span>Department</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('department.create')}}">Create department</a></li>
                                <li><a href="{{route('department.index')}}">Departments</a></li>

                            </ul>
                        </li>

                        @else

                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-group"></i><span>Department</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('department.create')}}">Create department</a></li>
                                <li><a href="{{route('department.index')}}">Departments</a></li>

                            </ul>
                        </li>

                        @endif
                    @if(Route::CurrentRouteName() == 'asset.create')
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-hdd"></i><span>Asset</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('asset.create')}}">Upload assets</a></li>
                        <li><a href="{{route('asset.index')}}">Assets</a></li>

                    </ul>
                </li>

            @elseif(Route::CurrentRouteName() == 'asset.index')

                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-hdd"></i><span>Asset</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('asset.create')}}">Upload assets</a></li>
                        <li><a href="{{route('asset.index')}}">Assets</a></li>

                    </ul>
                </li>




            @elseif(Route::CurrentRouteName() == 'asset.edit')
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-hdd"></i><span>Asset</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('asset.create')}}">Upload assets</a></li>
                        <li><a href="{{route('asset.index')}}">Assets</a></li>

                    </ul>
                </li>



            @else

                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-hdd"></i><span>Asset</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('asset.create')}}">Upload assets</a></li>
                        <li><a href="{{route('asset.index')}}">Assets</a></li>

                    </ul>
                </li>

                    @endif

                        @if(Route::CurrentRouteName() == 'scrapped')

                        <li class="active"><a href="{{url('/scrapped_assets')}}"><i class="icon-trash"></i><span>Scrapped Assets</span> </a> </li>

                    @else

                        <li class=""><a href="{{url('/scrapped_assets')}}"><i class="icon-trash"></i><span>Scrapped Assets</span> </a> </li>

                    @endif

                    @if(Route::CurrentRouteName() == 'transfer.index')

                        <li class="active"><a href="{{url('/transfer')}}"><i class="icon-copy"></i><span>Transfers</span> </a> </li>

                    @else

                        <li class=""><a href="{{url('/transfer')}}"><i class="icon-copy"></i><span>Transfers</span> </a> </li>

                    @endif
                </ul>





        </div>
        <!-- /container -->
    </div>
    <!-- /subnavbar-inner -->
</div>