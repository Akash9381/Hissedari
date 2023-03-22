<!-- Main header start -->
<header class="main-header sticky-header header-with-top" id="main-header-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="{{ url('/') }}">
                <img src="{{ asset('frontend/assets/img/logos/black-logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item sp">
                        <a href="{{ url('/about') }}" class="nav-link link-color"> About Us </a>
                    </li>
                    <li class="nav-item sp">
                        <a href="{{ url('/properties') }}" class="nav-link link-color"> Properties</a>
                    </li>
                    <li class="nav-item sp">
                        <a href="{{ url('/how-it-works') }}" class="nav-link link-color"> How it works</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/faq') }}">FAQs</a></li>
                            <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                            <li><a class="dropdown-item" href="{{ url('/contact') }}">Contact Us </a></li>

                        </ul>
                    </li>
                </ul>
                @guest
                    <a href="{{ url('/login') }}" class="btn btn-primary btn-lg active" role="button"
                        aria-pressed="true">Login</a>
                @endguest
                @role('user')
                    <div class="dropdown">
                        <button class="dropbtn"> <img src="{{ asset('frontend/assets/img/Person.ico') }}" width="40px;">
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ url('user/portfolio-summary') }}">Dashboard</a>
                            <a href="{{ url('user/stories') }}"> Post Blog <i class="fa fa-plus"></i></a>
                            <a href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </div>
                @endrole
                @role('super-admin')
                    <div class="dropdown">
                        <button class="dropbtn"> <img src="{{ asset('frontend/assets/img/Person.ico') }}" width="40px;">
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ url('admin/property_add') }}">Dashboard</a>
                            <a href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </div>
                @endrole
            </div>
    </div>
    </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{ asset('frontend/assets/img/logos/black-logo.png') }}" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">

            <ul class="menu-list">
                <li>
                    <a href="{{ url('/about') }}">Abouts</a>
                </li>
                <li>
                    <a href="{{ url('/properties') }}">Properties</a>
                </li>

                <li>
                    <a href="{{ url('/how-it-works') }}">How it works</a>
                </li>

                <li><a href="#">Resources <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="{{ url('/faq') }}">FAQs</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us </a></li>

                    </ul>
                </li>

                @role('user')
                    <li><a href="#"><i class="fa fa-user-circle-o " aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="{{ url('user/portfolio-summary') }}">Dashboard</a></li>
                            <li><a href="{{ url('user/stories') }}">Post Blog <i class="fa fa-plus"></i></a></li>
                            <li><a href="{{ url('/logout') }}">Logout </a></li>

                        </ul>
                    </li>
                @endrole
                @role('super-admin')
                    <li><a href="#"><i class="fa fa-user-circle-o " aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="{{ url('admin/property_add') }}">Dashboard</a></li>
                            <li><a href="{{ url('/logout') }}">Logout </a></li>

                        </ul>
                    </li>
                @endrole

            </ul>
            @guest
                <a href="{{ url('/login') }}" class="btn btn-primary btn-lg active" role="button"
                    aria-pressed="true">Login</a>
            @endguest
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-phone"></i>
                <div class="detalis">
                    <a href="tel:+91 92164 07077">+91 92164 07077</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-mail"></i>
                <div class="detalis">
                    <a href="mailtoinfo@hissedari.com;">info@hissedari.com</a>
                </div>
            </div>
            <!--<div class="get-in-touch-box d-flex  mb-0">
            <i class="flaticon-internet"></i>
            <div class="detalis">
                <a href="#">info@themevessel.com</a>
            </div>
        </div>-->
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->
