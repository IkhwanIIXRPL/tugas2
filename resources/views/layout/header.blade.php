<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="{{ url ('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url ('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url ('menu') }}">Menu</a>

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url ('blog') }}">Blog Makanan</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Pariwisata</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url ('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
<!--================Hero Banner Section start =================-->
<section class="hero-banner">
    <div class="hero-wrapper">
        <div class="hero-left">
            <h1 class="hero-title">Wisata <br> Dan Makanan di Pasuruan</h1>
            <div class="d-sm-flex flex-wrap">
                <a class="button button-hero button-shadow" href="#">Book Now</a>
                <a class="hero-banner__video" href="https://www.youtube.com/watch?v=WlMx_gUBhqo">Watch Video</a>
            </div>
            <ul class="hero-info d-none d-lg-block">
                <li>
                    <img src="img/banner/fas-service-icon.png" alt="">
                    <h4>Mudah</h4>
                </li>
                <li>
                    <img src="img/banner/fresh-food-icon.png" alt="">
                    <h4>Sehat</h4>
                </li>
                <li>
                    <img src="img/banner/support-icon.png" alt="">
                    <h4>Nyaman</h4>
                </li>
            </ul>
        </div>
        <div class="hero-right">
            <div class="owl-carousel owl-theme hero-carousel">
                <div class="hero-carousel-item">
                    <img class="img-fluid" src="img/banner/hero-banner1.png" alt="">
                </div>
                <div class="hero-carousel-item">
                    <img class="img-fluid" src="img/banner/hero-banner2.png" alt="">
                </div>
                <div class="hero-carousel-item">
                    <img class="img-fluid" src="img/banner/hero-banner1.png" alt="">
                </div>
                <div class="hero-carousel-item">
                    <img class="img-fluid" src="img/banner/hero-banner2.png" alt="">
                </div>
            </div>
        </div>
        <ul class="social-icons d-none d-lg-block">
            <li><a href="#"><i class="ti-facebook"></i></a></li>
            <li><a href="#"><i class="ti-twitter"></i></a></li>
            <li><a href="#"><i class="ti-instagram"></i></a></li>
        </ul>
    </div>
</section>
<!--================Hero Banner Section end =================-->