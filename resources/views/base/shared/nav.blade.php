    <!-- Start Header Area -->
    <header class="header-area header-wide">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top bdr-bottom px-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <p>Welcome to Jewel Jewellery online store</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center justify-content-end">
                                    <li class="curreny-wrap">
                                        $ Currency
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="{{ url('/shop') }}">Rs IND</a></li>
                                            <li><a href="{{ url('/shop') }}">$ USD</a></li>
                                            <li><a href="{{ url('/shop') }}">€ EURO</a></li>
                                        </ul>
                                    </li>
                                    <li class="language">
                                        <img src="{{asset('base\assets\images\icon\en.png')}}" alt="flag"> English
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="{{ url('/shop') }}"><img
                                                        src="{{asset('base\assets\images\icon\en.png')}}" alt="flag">
                                                    english</a></li>
                                            <li><a href="{{ url('/shop') }}"><img
                                                        src="{{asset('base\assets\images\icon\fr.png')}}" alt="flag">
                                                    french</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-main-area sticky px-3">
                <div class="container p-0">
                    <div class="row align-items-center position-relative">

                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{asset('base\assets\images\logo\logo.png')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-6 position-static text-center">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="{{ url('/') }}">Home</</li> <li><a
                                                        href="{{ url('/about') }}">About us</a></li>
                                            <li class="position-static"><a href="#">Gold <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><span>Rings</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Enagagement</a></li>
                                                            <li><a href="{{ url('/shop') }}">Party</a></li>
                                                            <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                            <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Earrings</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Jhumka</a></li>
                                                            <li><a href="{{ url('/shop') }}">Stud</a></li>
                                                            <li><a href="{{ url('/shop') }}">Hoop</a></li>
                                                            <li><a href="{{ url('/shop') }}">Drop</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Coins</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">1 gram</a></li>
                                                            <li><a href="{{ url('/shop') }}">2 gram</a></li>
                                                            <li><a href="{{ url('/shop') }}">5 gram</a></li>
                                                            <li><a href="{{ url('/shop') }}">10 gram</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Other</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Chain</a></li>
                                                            <li><a href="{{ url('/shop') }}">Mangalsutra</a></li>
                                                            <li><a href="{{ url('/shop') }}">Pendant</a></li>
                                                            <li><a href="{{ url('/shop') }}">Bracelets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{ url('/product_details') }}">
                                                            <img src="{{asset('base\assets\images\banner\img1-static-menu.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{ url('/product_details') }}">
                                                            <img src="{{asset('base\assets\images\banner\img2-static-menu.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="position-static"><a href="#">Silver <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><span>Rings</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Enagagement</a></li>
                                                            <li><a href="{{ url('/shop') }}">Party</a></li>
                                                            <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                            <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Earrings</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Jhumka</a></li>
                                                            <li><a href="{{ url('/shop') }}">Stud</a></li>
                                                            <li><a href="{{ url('/shop') }}">Hoop</a></li>
                                                            <li><a href="{{ url('/shop') }}">Drop</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Coins</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">1 gram</a></li>
                                                            <li><a href="{{ url('/shop') }}">2 gram</a></li>
                                                            <li><a href="{{ url('/shop') }}">5 gram</a></li>
                                                            <li><a href="{{ url('/shop') }}">10 gram</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Other</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Chain</a></li>
                                                            <li><a href="{{ url('/shop') }}">Mangalsutra</a></li>
                                                            <li><a href="{{ url('/shop') }}">Pendant</a></li>
                                                            <li><a href="{{ url('/shop') }}">Bracelets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{ url('/product_details') }}">
                                                            <img src="{{asset('base\assets\images\banner\img1-static-menu.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{ url('/product_details') }}">
                                                            <img src="{{asset('base\assets\images\banner\img2-static-menu.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="position-static"><a href="#">Diamond <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><span>Rings</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Enagagement</a></li>
                                                            <li><a href="{{ url('/shop') }}">Party</a></li>
                                                            <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                            <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Earrings</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Jhumka</a></li>
                                                            <li><a href="{{ url('/shop') }}">Stud</a></li>
                                                            <li><a href="{{ url('/shop') }}">Hoop</a></li>
                                                            <li><a href="{{ url('/shop') }}">Drop</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Pendant</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Traditional</a></li>
                                                            <li><a href="{{ url('/shop') }}">Party</a></li>
                                                            <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                            <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><span>Other</span>
                                                        <ul>
                                                            <li><a href="{{ url('/shop') }}">Chain</a></li>
                                                            <li><a href="{{ url('/shop') }}">Mangalsutra</a></li>
                                                            <li><a href="{{ url('/shop') }}">Bangle</a></li>
                                                            <li><a href="{{ url('/shop') }}">Bracelets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{ url('/product_details') }}">
                                                            <img src="{{asset('base\assets\images\banner\img1-static-menu.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li class="megamenu-banners d-none d-lg-block">
                                                        <a href="{{ url('/product_details') }}">
                                                            <img src="{{asset('base\assets\images\banner\img2-static-menu.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/blog_list') }}">Blog</a></li>
                                            <li><a href="{{ url('/contact') }}">Contact us</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-4">
                            <div
                                class="header-right d-flex align-items-center  justify-content-lg-end">
                                <div class="header-search-container">
                                    <button class="search-trigger d-xl-none d-lg-block"><i
                                            class="pe-7s-search"></i></button>
                                    <form class="header-search-box d-lg-none d-xl-block animated jackInTheBox">
                                        <input type="text" placeholder="Search entire store hire"
                                            class="header-search-field">
                                        <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="pe-7s-user"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                <li><a href="{{ url('/login') }}">login</a></li>
                                                <li><a href="{{ url('/login') }}">register</a></li>
                                                <li><a href="{{ url('/my_account') }}">my account</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('/wishlist') }}">
                                                <i class="pe-7s-like"></i>
                                                <div class="notification">0</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="minicart-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <div class="notification">2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{asset('base\assets\images\logo\logo.png')}}" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="#">
                                        <i class="pe-7s-shopbag"></i>
                                        <div class="notification">0</div>
                                    </a>
                                </div>
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="pe-7s-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here...">
                            <button class="search-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About us</a></li>
                                <li class="menu-item-has-children"><a href="#">Gold</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title menu-item-has-children"><a href="#">Ring</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Enagagement</a></li>
                                                <li><a href="{{ url('/shop') }}">Party</a></li>
                                                <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Earrings</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Jhumka</a></li>
                                                <li><a href="{{ url('/shop') }}">Stud</a></li>
                                                <li><a href="{{ url('/shop') }}">Hoop</a></li>
                                                <li><a href="{{ url('/shop') }}">Drop</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Coins</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">1 gram</a></li>
                                                <li><a href="{{ url('/shop') }}">2 gram</a></li>
                                                <li><a href="{{ url('/shop') }}">5 gram</a></li>
                                                <li><a href="{{ url('/shop') }}">10 gram</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Other</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Chain</a></li>
                                                <li><a href="{{ url('/shop') }}">Mangalsutra</a></li>
                                                <li><a href="{{ url('/shop') }}">Pendant</a></li>
                                                <li><a href="{{ url('/shop') }}">Bracelets</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Silver</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title menu-item-has-children"><a href="#">Ring</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Enagagement</a></li>
                                                <li><a href="{{ url('/shop') }}">Party</a></li>
                                                <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Earrings</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Jhumka</a></li>
                                                <li><a href="{{ url('/shop') }}">Stud</a></li>
                                                <li><a href="{{ url('/shop') }}">Hoop</a></li>
                                                <li><a href="{{ url('/shop') }}">Drop</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Coins</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">1 gram</a></li>
                                                <li><a href="{{ url('/shop') }}">2 gram</a></li>
                                                <li><a href="{{ url('/shop') }}">5 gram</a></li>
                                                <li><a href="{{ url('/shop') }}">10 gram</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Other</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Chain</a></li>
                                                <li><a href="{{ url('/shop') }}">Mangalsutra</a></li>
                                                <li><a href="{{ url('/shop') }}">Pendant</a></li>
                                                <li><a href="{{ url('/shop') }}">Bracelets</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Diamond</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title menu-item-has-children"><a href="#">Ring</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Enagagement</a></li>
                                                <li><a href="{{ url('/shop') }}">Party</a></li>
                                                <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Earrings</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Jhumka</a></li>
                                                <li><a href="{{ url('/shop') }}">Stud</a></li>
                                                <li><a href="{{ url('/shop') }}">Hoop</a></li>
                                                <li><a href="{{ url('/shop') }}">Drop</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Pendant</a>
                                            <ul class="dropdown">
                                            <li><a href="{{ url('/shop') }}">Traditional</a></li>
                                                <li><a href="{{ url('/shop') }}">Party</a></li>
                                                <li><a href="{{ url('/shop') }}">Dailywear</a></li>
                                                <li><a href="{{ url('/shop') }}">Workwear</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">Other</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/shop') }}">Chain</a></li>
                                                <li><a href="{{ url('/shop') }}">Mangalsutra</a></li>
                                                <li><a href="{{ url('/shop') }}">Pendant</a></li>
                                                <li><a href="{{ url('/shop') }}">Bracelets</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/blog_list') }}">Blogs</a></li>
                                <li><a href="{{ url('/contact') }}">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <div class="mobile-settings">
                        <ul class="nav">
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="#" class="dropdown-toggle" id="currency" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Currency
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="currency">
                                        <a class="dropdown-item" href="#">$ USD</a>
                                        <a class="dropdown-item" href="#">$ EURO</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="myaccount">
                                        <a class="dropdown-item" href="{{ url('/my_account') }}">my account</a>
                                        <a class="dropdown-item" href="{{ url('/login') }}"> login</a>
                                        <a class="dropdown-item" href="{{ url('/login') }}">register</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li><i class="fa fa-mobile"></i>
                                    <a href="#">0123456789</a>
                                </li>
                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="#">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->
    </header>
    <!-- end Header Area -->
