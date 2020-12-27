<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->


    <!--Load the AJAX API-->
    <script type="text/javascript" src="{{ asset('assets/js/google-chart.js') }}"></script>

</head>

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
                        <a class="dropdown-toggle" href="#" role="button" id="profileLinkDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
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
                    {{-- <li>
                        <a href="{{ url('demoIndex') }}"><i class="icofont-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="icofont-code"></i><span> Components</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a href="{{ url('demoUikit') }}">UI Kit</a></li>
                            <li><a href="{{ url('demoTabs') }}">Tabs</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="icofont-list"></i> <span> Forms</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a href="{{ url('demoFormBasicInputs') }}">Basic Inputs</a></li>
                            <li><a href="{{ url('demoFormInputGroups') }}">Input Groups</a></li>
                            <li><a href="{{ url('demoFormHorizontalInputs') }}">Horizontal Form</a></li>
                            <li><a href="{{ url('demoFormVertical') }}">Vertical Form</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="icofont-table"></i> <span> Tables</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a href="{{ url('demoTableBasic') }}">Basic Tables</a></li>
                            <li><a href="{{ url('demoTableDatatables') }}">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="icofont-listing-box"></i> <span>Pages</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a href="{{ url('demoLogin') }}"> Login </a></li>
                            <li><a href="{{ url('demoForgotPassword') }}"> Forgot Password </a></li>
                            <li><a href="{{ url('demoBlankPage') }}"> Blank Page </a></li>
                        </ul>
                    </li> --}}
                    <li class="submenu">
                        <a ><i class="icofont-chart-flow"></i> <span>Permission Tree</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                        @if(count($permissions)>0)
                            @foreach ($permissions as $permission)                                
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a ><span>{{$permission->name}}</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                                    <ul style="display: none;">
                                        @if ($permission->child)
                                            @foreach ($permission->child as $sub)
                                                @include('sub_menus', ['sub' => $sub])
                                            @endforeach
                                        
                                            {{-- <li><a ><span>Level 2</span></a></li>
                                            <li class="submenu">
                                                <a > <span> Level 2</span> <span class="menu-arrow"><i class="icofont-simple-right"></i></span></a>
                                                <ul class="list-unstyled" style="display: none;">
                                                    <li><a >Level 3</a></li>
                                                    <li><a >Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a ><span>Level 2</span></a></li> --}}
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                    <a ><span>Level 1</span></a>
                                </li>
                            </ul>
                            @endforeach
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
