
<header class="fixed">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @foreach ($settings as $image)
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="../../../images/{{ $image->logo }}" height="32" alt="Logo">
            </a>
            @endforeach

        </div>

        <nav id="main_menu" class="mobile_menu navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="mobile_menu_title" style="display:none;">MENU</li>
                <li class="simple_menu @yield('active')">
                <a href="{{ route('homepage') }}">TRANG CHỦ</a>
                </li>
                <li class="simple_menu @yield('active_room')">
                    <a href="{{ route('room_list') }}">PHÒNG</a>
                </li>

                <li class="simple_menu @yield('active_blog')">
                    <a href="{{ route('blog') }}">BÀI VIẾT</a>
                </li>

                <li class="simple_menu @yield('active_about')">
                    <a href="{{ route('about') }}">GIỚI THIỆU</a>
                </li>

                <li class="simple_menu @yield('active_contact')">
                    <a href="{{ route('contact') }}">LIÊN HỆ</a>
                </li>

                <li class="menu_button ">
                    <a href="{{ route('booking') }}" class="button btn_yellow "><i class="fa fa-calendar "></i>ĐẶT PHÒNG</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
