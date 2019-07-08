<header>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <nav class="mobile-menu" id="mobile-menu">
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn mobile-menu-btn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">All pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Home <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="home-style-one.html">Home style one</a> </li>
                                    <li><a href="home-style-two.html">Home style two</a></li>
                                    <li><a href="home-style-three.html">Home style three</a></li>
                                    <li><a href="home-style-four.html">Home style four</a></li>
                                    <li><a href="home-style-five.html">Home style five</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Categories <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="category-style-one.html">Category style one</a> </li>
                                    <li><a href="category-style-two.html">Category style two</a></li>
                                    <li><a href="category-style-three.html">Category style three</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Archive <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="archive-one.html">Archive style one</a> </li>
                                    <li><a href="archive-two.html">Archive style two</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">News <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="details-style-one.html">News post one</a> </li>
                                    <li><a href="details-style-two.html">News post two</a></li>
                                    <li><a href="details-style-three.html">News post three</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Contact <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="contact-style-one.html">Contact style one</a> </li>
                                    <li><a href="contact-style-two.html">Contact style two</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li><a href="login%26registration.html">Login & Registration</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li>
                        <a href="#">Contact<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contact-style-one.html">Contact style one</a> </li>
                            <li><a href="contact-style-two.html">Contact style two</a></li>
                        </ul>
                    </li>
                    <!-- social icon -->
                    <li>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="top_header_icon">
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                </span>
            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
    <!-- top header -->
    <div class="top_header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <div class="top_header_menu_wrap">
                        <ul class="top-header-menu ">


                            @if(auth()->check())
                            <li><a href="Log-Out" style="text-transform: uppercase;">{{auth()->user()->Email}}</a></li>
                            @else
                            <li><a href="Dang-Ky">REGISTER</a></li>
                            <li> <a href="Dang-Nhap">LOGIN</a></li>
                            @endif


                            <li><a href="Lien-He">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <!--breaking news-->
                <div class="col-sm-8 col-md-5">

                </div>
                <div class="col-sm-12 col-md-2">
                    <div class="top_header_icon">
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_banner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="header-logo">
                        <!-- logo -->
                        <a href="/">
                            <img class="td-retina-data img-responsive" src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        <a href="#"><img class="td-retina img-responsive" src="images/top-bannner.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navber -->
    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/" class="category02">HOME</a></li>
                    @foreach($vs_theloai as $tl)
                    <li class="dropdown-submenu category02">
                        <a href="{{$tl->TenTL_KhongDau}}">{{$tl->TenTL}}</span></a>
                        <ul class="dropdown-menu zoomIn">
                            @foreach($tl->loaitin as $lt)
                            <li><a href="{{$tl->TenTL_KhongDau}}/{{$lt->Ten_KhongDau}}">{{$lt->Ten}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- <li><a href="{{$tl->TenTL_KhongDau}}">{{$tl->TenTL}}</a></li> -->
                    @endforeach
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>