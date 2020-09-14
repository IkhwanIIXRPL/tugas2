<html>

<head>
    @include('layout.head')
</head>

<body>
    <div class="container">

        <header class="row">
            @include('layout.header')
        </header>

        <div id="main" class="row">

            <section class="about section-margin pb-xl-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
                            <div class="img-styleBox">
                                <div class="styleBox-border">
                                    <img class="styleBox-img1 img-fluid" src="img/home/about-img1.png" alt="">
                                </div>
                                <img class="styleBox-img2 img-fluid" src="img/home/about-img2.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
                            <div class="section-intro mb-lg-4">
                                <h4 class="intro-title">About Us</h4>
                                <h2>Makanan Khas</h2>
                            </div>
                            <p>Ada banyak Makanan khas yang bisa kita jumpai di sepanjang perjalanan dan mempunyai ciri khas tersendiri di berbagai makanan yang ada di Pasuruan</p>
                            <a class="button button-shadow mt-2 mt-lg-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--================About Section start =================-->
            <section class="about section-margin pb-xl-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
                            <div class="img-styleBox">
                                <div class="styleBox-border">
                                    <img class="styleBox-img1 img-fluid" src="img/home/about-img1.png" alt="">
                                </div>
                                <img class="styleBox-img2 img-fluid" src="img/home/about-img2.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
                            <div class="section-intro mb-lg-4">
                                <h4 class="intro-title">About Us</h4>
                                <h2>Wisata Dan Penginapan</h2>
                            </div>
                            <p>Di Pasuruan anda di sajikan dengan pemandangan alam yang indah dan susah anda jumpai di tempat lain sehingga anda wajib mengunjungi wisata alamnya jika anda berada di Pasuruan</p>
                            <a class="button button-shadow mt-2 mt-lg-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--================About Section End =================-->


            <!--================Featured Section Start =================-->
            <section class="section-margin mb-lg-100">
                <div class="container">
                    <div class="section-intro mb-75px">
                        <h4 class="intro-title">Makanan </h4>
                        <h2>Hits dan Khas Yang ada Di Pasuruan </h2>
                    </div>


                    <div class="owl-carousel owl-theme featured-carousel">
                        <div class="featured-item">
                            <img class="card-img rounded-0" src="img/home/kepiting.jpeg" alt="">
                            <div class="item-body">
                                <a href="#">
                                    <h3>Kepiting Cak Gundul 1992</h3>
                                </a>
                                <p>Nikmatnya menyantap hidangan kepiting tidak hanya terletak pada cita rasanya semata, tapi juga saat membuka cangkang dan menyeruput dagingnya.</p>
                                <div class="d-flex justify-content-between">
                                    <ul class="rating-star">
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                    <h3 class="price-tag">Rp.30.000/ons</h3>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item">
                            <img class="card-img rounded-0" src="img/home/rawon.jpg" alt="">
                            <div class="item-body">
                                <a href="#">
                                    <h3>Rawon</h3>
                                </a>
                                <p>Mempunyai kuah yang hitam pekat dan aroma khas rempah-rempah dari Jawa Timur </p>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <ul class="rating-star">
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                    <h3 class="price-tag">Rp.25.000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item">
                            <img class="card-img rounded-0" src="img/home/sholeh.jpg" alt="">
                            <div class="item-body">
                                <a href="#">
                                    <h3>Warung Lesehan Pak Sholeh</h3>
                                </a>
                                <p>Ayam dan Ikan yang mempunyai rempah khas</p>
                                <div class="d-flex justify-content-between">
                                    <ul class="rating-star">
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                    <h3 class="price-tag">Rp.50.000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item">
                            <img class="card-img rounded-0" src="img/home/np.jpg" alt="">
                            <div class="item-body">
                                <a href="#">
                                    <h3>Nasi Punel</h3>
                                </a>
                                <p>Makanan Khas yang mempunyai perpaduan rasa yang guri dan banyak macam lauk yang bisa anda pilih</p>
                                <div class="d-flex justify-content-between">
                                    <ul class="rating-star">
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                    <h3 class="price-tag">Rp.25.000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================Featured Section End =================-->

            <!--================Food menu section start =================-->
            <section class="section-margin">
                <div class="container">
                    <div class="section-intro mb-75px">
                        <h4 class="intro-title">Menu Makanan</h4>
                        <h2>Makanan Khas</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Rawon</h4>
                                        <h3 class="price-tag">Rp.25.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Kupang Kraton</h4>
                                        <h3 class="price-tag">Rp.15.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Nasi Punel</h4>
                                        <h3 class="price-tag">Rp.25.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Botok Tempe</h4>
                                        <h3 class="price-tag">Rp.5.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Kepiting Cak Gundul</h4>
                                        <h3 class="price-tag">Rp.30.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Soto Gondrong</h4>
                                        <h3 class="price-tag">Rp.20.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Cenil Pasuruan</h4>
                                        <h3 class="price-tag">Rp.5.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>Klepon Pasuruan</h4>
                                        <h3 class="price-tag">Rp.10.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================Food menu section end =================-->


        </div>

        <footer class="row">
            @include('layout.footer')
        </footer>

    </div>
</body>

</html>