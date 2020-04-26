<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!--
    <link rel="icon" type="image/png" href="/images/icon.ico" />
    -->

    <!-- CSS -->
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/all.css') }}">
    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/scrollbar.css') }}">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/bootstrap.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/style.css') }}">
    @yield('css')
</head>

<body>
<!-- START SIDEBAR -->

<!-- Start Wrapper -->
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="shadow">
        <!-- Logo Header -->
        <div class="admin-login border-bottom">
            <div class="admin-login-images p-2 ml-2">
                <img src="{{ URL::asset('Admins/images/author.jpg') }}" alt="admin images" class="rounded-circle border">
                <div class="float-right admin-name">
                    <p class="mb-0 mt-2 mr-5">Hey:{{ Auth::user()->username }}</p>  <!--Auth::user()->username Trong hàm Auth có phương thức là user và chỏ đến trường-->
                    <div class="active-online">
                        <i class="fas fa-circle fa-xs"></i>
                        <span>Online</span>
                    </div>
                </div>

            </div>

        </div>
        <!-- End Logo Header -->


        <!-- Menu List -->
        <ul class="list-unstyled mt-3">
            <!-- Sub Menu Home -->
            <li>
                <a href="{{ route('admin') }}" class="pt-0">
                    <i class="fas fa-home"></i> Trang chủ
                </a>
            </li>
            <!-- End Sub Menu Home -->

            <!-- Sub Menu general settings  -->
            <li>
                <a href="{{ route('setting') }}">
                    <i class="fas fa-cogs"></i> Hiển thị chung
                </a>
            </li>
            <!-- End Sub general settings -->

            <!-- Sub Menu about  -->

            <li>
                <a href="{{ route('abouts') }}">
                    <i class="fas fa-binoculars"></i> Giới thiệu
                </a>
            </li>
            <!-- End Sub about -->

            <li>
                <a href="{{ route('booking_room') }}">
                    <i class="fas fa-chess-rook"></i> Đặt phòng
                </a>
            </li>

            <li>
                <a href="{{ route('contact_client') }}">
                    <i class="fab fa-avianex"></i> Khách hàng
                </a>
            </li>


            <!-- Sub Menu post -->
            <li>
                <a href="#postSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fab fa-elementor"></i> Bài viết
                </a>
                <ul class="collapse list-unstyled" id="postSubmenu">
                    <li>
                        <a href="{{ route('post_add') }}">
                            <i class="fas fa-plus-circle"></i> Thêm bài viết
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('post') }}">
                            <i class="fas fa-tasks"></i> Danh sách bài viết
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Sub post -->

            <!-- Sub Menu slider -->
            <li>
                <a href="#slideSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fab fa-slideshare"></i> Slider
                </a>
                <ul class="collapse list-unstyled" id="slideSubmenu">
                    <li>
                        <a href="{{ route('slider_add') }}">
                            <i class="fas fa-plus-circle"></i> Thêm slider
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('slider') }}">
                            <i class="fas fa-tasks"></i> Danh sách slider
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Sub slider -->



            <!-- Sub Menu admin room_type -->
            <li>
                <a href="#roomTypeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-person-booth"></i> Kiểu phòng
                </a>
                <ul class="collapse list-unstyled" id="roomTypeSubmenu">
                    <li>
                        <a href="{{ route('room_type_add') }}">
                            <i class="fas fa-plus-circle"></i> Thêm kiểu phòng
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('room_type') }}">
                            <i class="fas fa-tasks"></i> Danh sách kiểu phòng
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Sub admin room_type -->

            <!-- Sub Menu admin room_service -->
            <li>
                <a href="#roomServiceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-concierge-bell"></i> Dịch vụ phòng
                </a>
                <ul class="collapse list-unstyled" id="roomServiceSubmenu">
                    <li>
                        <a href="{{ route('room_service_add') }}">
                            <i class="fas fa-plus-circle"></i> Thêm dịch vụ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('room_service') }}">
                            <i class="fas fa-tasks"></i> Danh sách dịch vụ
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Sub admin room_service -->

            <!-- Sub Menu admin service -->
            <li>
                <a href="#ServiceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fab fa-usps"></i> Dịch vụ
                </a>
                <ul class="collapse list-unstyled" id="ServiceSubmenu">
                    <li>
                        <a href="{{ route('service_add') }}">
                            <i class="fas fa-plus-circle"></i> Thêm dịch vụ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('service') }}">
                            <i class="fas fa-tasks"></i> Danh sách dịch vụ
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Sub admin service -->

            <!-- Sub Menu admin user -->
            <li>
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-users-cog"></i> Tài khoản quản trị
                </a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li>
                        <a href="{{ route('user_add') }}">
                            <i class="fas fa-plus-circle"></i> Thêm tài khoản
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user') }}">
                            <i class="fas fa-tasks"></i> Danh sách tài khoản
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Sub admin user -->



            <!-- Start Logout -->
            <li>
                <a href="{{ route('logout') }}" onclick=" return confirm('Bạn có chắc muốn đăng xuất tài khoản không?')">
                    <i class="fas fa-power-off"></i> Đăng xuất
                </a>
            </li>
            <!-- End Logout -->
        </ul>
        <!-- End Menu List -->
    </nav>
    <!-- End Sidebar  -->
    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded">
            <div class="container-fluid pl-0">
                <div class="col-md-10 pl-0">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="col-md-2 p-0 active-page">
                    <a href="/dashboard/home.html">
                        <i class="fas fa-home active-icon"></i>
                    </a>
                    <span> &nbsp; / &nbsp; @yield('name')</span>
                </div>
            </div>
        </nav>
        <!-- End Nav Top -->

        <!-- End Nav Top -->
        <div class="table-content pl-4 pr-4">
            <div class="panel-heading border rounded p-2 bg-light mb-4">
                <p class="m-0">@yield('log')</p>
            </div>
            <div class="form-input bg-light">
            @yield('main')
            </div>
        </div>
        <!-- End Form Input -->
    </div>
    <!-- End Page Content -->
</div>
<!-- End Wrapper -->
<!-- END SIDEBAR -->

<!-- SCRIPT -->
<!-- Jquery JS -->
<script src="{{ URL::asset('Admins/script/jquery-3.4.1.js') }}"></script>
<!-- Font Awesome JS -->
<script src="{{ URL::asset('Admins/script/all.js') }}"></script>
<!-- Scrollbar JS -->
<script src="{{ URL::asset('Admins/script/scrollbar.js') }}"></script>
<!-- Boostrap JS -->
<script src="{{ URL::asset('Admins/script/bootstrap.js') }}"></script>
<!-- popper JS -->
<script src="{{ URL::asset('Admins/script/popper.min.js') }}"></script>
<!-- Validate JS -->
<script src="{{ URL::asset('Admins/script/validate.js') }}"></script>
<!-- Custom JS -->
<script src="{{ URL::asset('Admins/script/scr-db.js') }}"></script>

@yield('js')
</body>

</html>
