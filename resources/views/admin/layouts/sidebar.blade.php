<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset(auth::user()->img)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth::user()->name}}</a>
            </div>
        </div>
<?php $user = Auth::user();?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if($user->role ==1)
                <li class="nav-item menu-open">
                    <a href="{{route('admin.edit')}}" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile Update
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('user.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New User</p>
                                </a>
                            </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Library
                            <i class="fas fa-angle-left right"></i>
                            {{--                            <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subcategory.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Sub-Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('child-category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Child-Category</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Guitar
                            <i class="fas fa-angle-left right"></i>
                            {{--                            <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categoryy.one')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subcategoryy.one')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Sub-Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('child-categoryy.index.one')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Child-Category</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Piano
                            <i class="fas fa-angle-left right"></i>
                            {{--                            <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categoryy.two')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subcategoryy.two')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Sub-Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('child-categoryy.index.two')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Child-Category</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="{{route('about.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>About
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('contact.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Contact
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('donate.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Donate
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('privacy.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Privacy Policy
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-copy"></i>--}}
{{--                        <p>--}}
{{--                            SubCategory--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            --}}{{--                            <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('subcategory.index')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>SubCategory</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        @if($user->role==1)--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('request.subcategory')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Request SubCategory</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-copy"></i>--}}
{{--                        <p>--}}
{{--                            Product--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            --}}{{--                            <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('product.index')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Product</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('discount.product')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Discount Product</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt" ></i>
                        <p>
                            Logout
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
