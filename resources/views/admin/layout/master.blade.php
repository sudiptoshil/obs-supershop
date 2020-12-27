<!DOCTYPE html>
<html>
@include('admin.layout.header_script')

<body>
    <div class="main-wrapper slide-nav">
        <div class="header">
            <div class="container-fluid">
                <div class="header-left">
                    <a id="toggle-menu" href="#sidebar" class="logo">
                        <i class="icofont-navigation-menu"></i>
                    </a>
                </div>
                <div class="header-right">
                    <div class="page-title-box pull-left">
                        <h3>Admin</h3>
                    </div>
                    <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <ul class="nav navbar-nav navbar-right user-menu pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="profileLinkDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i class="far fa-user"></i></span> Admin
                            </a>

                            <div class="dropdown-menu" aria-labelledby="profileLinkDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Setting</a>
                                <a class="dropdown-item" href="{{ url('demoLogin') }}">Logout</a>
                            </div>
                        </div>

                    </ul>

                    <div class="dropdown mobile-user-menu pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ url('demoLogin') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar opened" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{ url('demoIndex') }}"><i class="icofont-dashboard"></i> Dashboard</a>
                        </li>
                        {!! sideBar() !!}
                        <!-- {!!  getModules() !!} -->
                    </ul>
                    <ul>

                        <li class="submenu">
                            <a href="#"><i class="icofont-code"></i><span> Type</span> <span class="menu-arrow"><i
                                        class="icofont-simple-right"></i></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ route('manage-type') }}">Manage Types</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="icofont-code"></i><span> Setting</span> <span class="menu-arrow"><i
                                        class="icofont-simple-right"></i></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ route('type', ['idx' => 1]) }}">Purchase type</a></li>
                                <li><a href="{{ route('type', ['idx' => 2]) }}">Purchase return
                                        type</a>
                                </li>
                                <li><a href="{{ route('type', ['idx' => 3]) }}">Sales type</a></li>
                                <li><a href="{{ route('type', ['idx' => 4]) }}">Sales return type</a></li>
                                <li><a href="{{ route('type', ['idx' => 5]) }}">Payment type</a></li>
                                <li><a href="{{ route('type', ['idx' => 6]) }}">Customer type</a></li>
                                <li><a href="{{ route('type', ['idx' => 7]) }}">Receive type</a></li>
                                <li><a href="{{ route('type', ['idx' => 8]) }}">Supplier type</a></li>
                                <li><a href="{{ route('type', ['idx' => 9]) }}">Voucher type</a></li>
                            </ul>
                        </li>


                        {{-- <li class="submenu">
                            <a href="#"><i class="icofont-list"></i> <span> Forms</span> <span class="menu-arrow"><i
                                        class="icofont-simple-right"></i></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('demoFormBasicInputs') }}">Basic Inputs</a></li>
                                <li><a href="{{ url('demoFormInputGroups') }}">Input Groups</a></li>
                                <li><a href="{{ url('demoFormHorizontalInputs') }}">Horizontal Form</a></li>
                                <li><a href="{{ url('demoFormVertical') }}">Vertical Form</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="icofont-table"></i> <span> Tables</span> <span class="menu-arrow"><i
                                        class="icofont-simple-right"></i></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('demoTableBasic') }}">Basic Tables</a></li>
                                <li><a href="{{ url('demoTableDatatables') }}">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="icofont-listing-box"></i> <span>Pages</span> <span
                                    class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('demoLogin') }}"> Login </a></li>
                                <li><a href="{{ url('demoForgotPassword') }}"> Forgot Password </a></li>
                                <li><a href="{{ url('demoBlankPage') }}"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="icofont-chart-flow"></i> <span>Multi Level</span>
                                <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"><i
                                                class="icofont-simple-right"></i></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
        @yield('script')
        @include('admin.layout.footer')
