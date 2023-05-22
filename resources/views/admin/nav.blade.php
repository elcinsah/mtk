<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ ucwords(Auth::user()->name) }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if(Auth::user()->role)
                    <li class="nav-item ">
                        <a href="{{route('admin.index')}}"
                           class="nav-link">

                            <p>Home page</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('all.mtk')}}"
                           class="nav-link @if(Request::segment(2)=="mtk" ) active @endif">

                            <p>Mtks</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('all.plaza')}}"
                           class="nav-link @if(Request::segment(2)=="plaza" ) active @endif">

                            <p>Plazas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('all.flat')}}"
                           class="nav-link @if(Request::segment(2)=="flat" ) active @endif">

                            <p>Flats</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('all.user')}}"
                           class="nav-link @if(Request::segment(2)=="user" ) active @endif">

                            <p>Users</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('user.view') }}"
                           class="nav-link @if(Request::segment(2)=="page" ) active @endif">
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

