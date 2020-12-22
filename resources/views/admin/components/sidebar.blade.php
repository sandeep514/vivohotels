<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon">
                        <i class="feather icon-home"></i>
                    </span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-building"></i></span>
                    <span class="pcoded-mtext">Property</span>
                    {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ route('admin.list.property') }}">
                        <span class="pcoded-mtext">List Property</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ route('admin.add.new.partner') }}" target="_blank">
                        <span class="pcoded-mtext">Add New Property</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-bars"></i></span>
                    <span class="pcoded-mtext">Property Type</span>
                    {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-bottom.html">
                        <span class="pcoded-mtext">List Property Type</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="box-layout.html" target="_blank">
                        <span class="pcoded-mtext">Add New Property Type</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-bars"></i></span>
                    <span class="pcoded-mtext">Property Category</span>
                    {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-bottom.html">
                        <span class="pcoded-mtext">List Property Category</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="box-layout.html" target="_blank">
                        <span class="pcoded-mtext">Add New Property Category</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-handshake-o"></i></span>
                    <span class="pcoded-mtext">Orders</span>
                    {{--  <span class="pcoded-badge label label-warning">NEW</span>  --}}
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-bottom.html">
                        <span class="pcoded-mtext">List Orders</span>
                        </a>
                    </li>
                    {{--  <li class=" ">
                        <a href="box-layout.html" target="_blank">
                        <span class="pcoded-mtext">Add New </span>
                        </a>
                    </li>  --}}
                </ul>
            </li>
            <li class="">
                <a href="{{ route('admin.create.faq') }}">
                    <span class="pcoded-micon"><i class="fa fa-handshake-o"></i></span>
                    <span class="pcoded-mtext">FAQ's</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.create.amenities') }}">
                    <span class="pcoded-micon"><i class="fa fa-handshake-o"></i></span>
                    <span class="pcoded-mtext">Amenities</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.contactus') }}">
                    <span class="pcoded-micon"><i class="fa fa-handshake-o"></i></span>
                    <span class="pcoded-mtext">Contact Query</span>
                </a>
            </li>
        </ul>
    </div>
</nav>