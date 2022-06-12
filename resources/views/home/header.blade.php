<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{route("home")}}">
                                    <img src="{{asset("assets")}}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route("home")}}">home</a></li>
                                        <li><a href="#">Browse Job</a></li>
                                        <li><a href="{{route("about")}}">About Us</a></li>
                                        <li><a href="{{route("references")}}">References</a></li>
                                        <li><a href="{{route("contact")}}">Contact</a></li>
                                        <li><a href="{{route("faq")}}">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                @auth
                                <div class="phone_num d-none d-xl-block">
                                    <a href="{{route('userpanel.index')}}"><i class="fa fa-user"></i>{{Auth::user()->name}}</a>
                                </div>

                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn2" href="/logoutuser">Log out</a>
                                </div>
                                @endauth
                                @guest
                                <div class="phone_num d-none d-xl-block">
                                    <a href="/loginuser">Log in</a>
                                </div>
                                <div class="d-none d-sm-block">
                                    <a class="boxed-btn3" href="/registeruser">Register</a>
                                </div>
                                @endguest
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
