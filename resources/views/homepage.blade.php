<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Manajemen El-Fata Foundation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/home/images/favicon.png">
    {{--
    <link rel="stylesheet" href="assets/home/css/vendor/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Flaticon Icon CSS -->
    <link rel="stylesheet" href="assets/home/css/vendor/flaticon.css">
    <!-- Swiper Slider CSS -->
    <link rel="stylesheet" href="assets/home/css/plugins/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/home/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/home/css/style.css">
    <link rel="apple-touch-icon" href="assets/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/icon-180x180.png">
    <link rel="manifest" href="assets/manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header-area header-area--default">
        <!-- Header Bottom Wrap Start -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-items-center">
                        <div class="header__logo">
                            <div class="logo">
                                <a href="./">
                                    <center><img src="assets/home/images/logo.png" alt="" loading="lazy" loading="lazy">
                                    </center>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="site-wrapper-reveal no-overflow">
        <div class="muslim-hero-color">
            <div class="muslim-hero-wrap">
                <div class="hero-area hero-style-02 muslim-hero-bg bg-overlay-black ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-content text-center">
                                    <div class="ht-btn-area hero-boder-top">
                                        <?php if(auth()->check()): ?>
                                        <a href="dasbor" class="hero-btn mt-5"><i class="fa fa-dashboard"></i>
                                            Dashboard</a>
                                        <?php else: ?>
                                        <a href="login" class="hero-btn mt-5"><i class="fa fa-sign-in"></i> Login</a>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="muslim-salte-time">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="salat-content">
                            <div class="single-salat-time">
                                <div class="img"><img src="assets/home/images/icons/fajr-icon.png" alt=""
                                        loading="lazy"></div>
                                <div class="salat-times__box">
                                    <h4>fajr</h4><span>5:50 AM</span>
                                </div>
                            </div>
                            <div class="single-salat-time">
                                <div class="img"><img src="assets/home/images/icons/dhuhr-icon.png" alt=""
                                        loading="lazy"></div>
                                <div class="salat-times__box">
                                    <h4>Dhuhr</h4><span>01:10 PM</span>
                                </div>
                            </div>
                            <div class="single-salat-time">
                                <div class="img"><img src="assets/home/images/icons/asr-icon.png" alt="" loading="lazy"
                                        loading="lazy">
                                </div>
                                <div class="salat-times__box">
                                    <h4>Asr</h4><span>4:06 pm</span>
                                </div>
                            </div>
                            <div class="single-salat-time">
                                <div class="img"><img src="assets/home/images/icons/maghrib-icon.png" alt=""
                                        loading="lazy"></div>
                                <div class="salat-times__box">
                                    <h4>Maghrib</h4><span>6:06 pm</span>
                                </div>
                            </div>
                            <div class="single-salat-time">
                                <div class="img"><img src="assets/home/images/icons/isha-icon.png" alt=""
                                        loading="lazy"></div>
                                <div class="salat-times__box">
                                    <h4>Isha</h4><span>8:30 pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="muslim-salat-time-bg"></div>
        </div>
        <div class="tai-about-area section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="about-muslim-image text-lg-left">
                            <img src="assets/home/images/banners/elfatakids.png" class="img-fluid muslim-image-1"
                                alt="Tai Images" loading="lazy">
                            <img src="assets/home/images/banners/kaaba-bottom-01.png" class="img-fluid bottom-image-2"
                                alt="Tai Images" loading="lazy">
                            <img src="assets/home/images/banners/kaaba-bottom-02.png" class="img-fluid bottom-image-3"
                                alt="Tai Images" loading="lazy">

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-tai-content small-mt__30 tablet-mt__30">
                            <div class="section-title-muslim text-left">
                                <h3 class="mb-20">El-Fata Foundation</h3>
                            </div>
                            <p>El-Fata Foundation adalah lembaga yang menyediakan kelas tahfidz untuk kamu yang ingin
                                menjadi penghafal Al-Qur'an tanpa harus mengganggu jadwal aktifitas sekolah.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ======== Tai About Area End ========== -->

        <!-- ======== Foundation Area Start ========== -->
        {{-- <div class="foundation-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-muslim text-center">
                            <h3 class="mb-20">Galeri</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="masonry">
                        @foreach ($galeris as $galeri)
                        <div class="mItem">
                            <!-- Foundation Start -->
                            <div class="single-foundation">
                                <div class="foundation-image">
                                    <a href="#"> <img src="{{ $galeri- loading=" lazy">foto }}" </a>
                                </div>
                                <div class="foundation-content">
                                    <div class="location">
                                        <a href="#">
                                            <h5>
                                                <h3>{{ $galeri->judul }}</h3>
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--// Foundation End -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <!--swipper-->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($galeris as $galeri)
            <div class="swiper-slide">
                <img src="{{ asset('storage/' . $galeri->foto) }}" alt="{{ $galeri->judul }}" loading="lazy">

                <h4>{{ $galeri->judul }}</h4>
            </div>
            @endforeach
        </div>

        <!-- Jika Anda ingin navigasi (Opsional) -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <footer class="footer-area bg-footer">
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" text-center">
                            <p class="text-white">Copyright &copy; 2023 El-Fata Foundation ❤</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Skrip untuk menginisialisasi Swiper -->
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            effect: 'slide',
            loop: true,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40
                }
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },

            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },

            mousewheel: {
                invert: false,
            },

            coverflowEffect: {
                rotate: 30,
                slideShadows: true,
            },

            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },

            flipEffect: {
                rotate: 30,
                slideShadows: true,
            },
        });
    </script>


    <script src="assets/home/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/home/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/home/js/vendor/bootstrap.min.js"></script>
    <!-- Swiper Slider JS -->
    <script src="assets/home/js/plugins/swiper.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/home/js/plugins/waypoints.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/home/js/plugins/counterup.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/home/js/plugins/jquery.magnific-popup.min.js"></script>
    <!-- wow JS -->
    <script src="assets/home/js/plugins/wow.min.js"></script>
    <!-- Ajax mail JS -->
    <script src="assets/home/js/main.js"></script>
    <script src="sw.js"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }

        document.querySelectorAll('img').forEach((img) => {
            console.log(img.src + " - Lazy Loading: " + (img.loading === "lazy"));
        });

    </script>
</body>



</html>
