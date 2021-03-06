<?php
$segment= Request::segment(3);
$segment1= Request::segment(4);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('/')}}admintheme/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin::dashboard')}}" class="nav-link @if($segment=='dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{--<span class="right badge badge-danger">New</span>--}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin::manageCategory')}}" class="nav-link @if($segment=='manage-category' || $segment=='manage-sub-category') active @endif">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Manage Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin::manageDoctor')}}" class="nav-link @if($segment=='manage-doctor') active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Manage Doctors
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin::manageDiagnostic')}}" class="nav-link @if($segment=='manage-diagnostic') active @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Manage Diagnostics
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin::manageHospital')}}" class="nav-link @if($segment=='manage-hospital') active @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Manage Hospitals
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($segment=='manage-content') menu-open @endif">
                    <a href="#" class="nav-link @if($segment=='manage-content') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Manage Contents
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin::manageContent','home')}}" class="nav-link @if($segment1=='home') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>