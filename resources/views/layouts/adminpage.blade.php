@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">


                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
                        </li>

                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>

                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Men</span> </a>

                                    <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#submenu3">

                                        <li>
                                            <a href="/admin/product/men/jacket" class="nav-link px-0"> <span class="d-none d-sm-inline">Jackets</span></a>
                                        </li>

                                        <li>
                                            <a href="/admin/product/men/tshirt" class="nav-link px-0"> <span class="d-none d-sm-inline">T-shirt</span></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="w-100">
                                    <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Women</span> </a>

                                    <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#submenu3">

                                        <li>
                                            <a href="/womenjacket" class="nav-link px-0"> <span class="d-none d-sm-inline">Jackets</span></a>
                                        </li>

                                        <li>
                                            <a href="/womenlehenga" class="nav-link px-0"> <span class="d-none d-sm-inline">Lehenga</span></a>
                                        </li>

                                        <li>
                                            <a href="/womentshirt" class="nav-link px-0"> <span class="d-none d-sm-inline">T-shirt</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/admin/customer" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col py-3">
                @yield('admincontent')
            </div>
        </div>
    </div>
@endsection
