<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +98 558 547 589</li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">education@email.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a href="{{ asset('login')}}">Login</a></li>
                            <li><a href="{{ asset('register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img width="150px" height="90px"alt="" src="{{ asset('images/logosmall.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('welcome.home')}}"> HOME </a> </li>
                                    <li><a href="{{ route('welcome.about')}}"> ABOUT  </a></li>
                                    <li><a href="{{ route('welcome.event')}}"> EVENT</a></li>

                                    <li><a href="#"> DOWNLOADS  <i class="fa fa-angle-down"></i>  </a>
                                        <ul class="submenu">
                                            <li><a href="{{ asset('downloads/manifesto.pdf')}}">MANIFESTO</a></li>
                                            <li><a href="{{ asset('downloads/manifesto.pdf')}}">CONSTITUTION</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('welcome.contact')}}"> CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{ route('welcome.home')}}">HOME</a></li>
                            <li><a href="{{ route('welcome.about')}}">About</a></li>
                            <li><a href="{{ route('welcome.event')}}">Event</a></li>
                            <li><a href="#"> DOWNLOADS  <i class="fa fa-angle-down"></i>  </a>
                                        <ul class="submenu">
                                            <li><a href="#">Manifesto</a></li>
                                            <li><a href="#">Constitution</a></li>
                                        </ul>
                                    </li>
                             <li><a href="{{ route('welcome.contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
