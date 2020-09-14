<!doctype html>
<html>

<head>

    <head class="row">
        @include('layout.head')
    </head>
</head>

<body>
    <div class="container">

        <header class="row">
            @include('layout.header')
        </header>

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



        <footer class="row">
            @include('layout.footer')
        </footer>

    </div>
</body>

</html>