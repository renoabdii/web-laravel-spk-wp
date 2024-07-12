<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SPK WP Laptop Gaming</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
 
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets1/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets1/css/main.css" rel="stylesheet" />

    <!-- Dark Theme CSS -->
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }

        .header {
            background-color: #1f1f1f;
        }

        .header .logo h1,
        .header .navmenu ul li a,
        .header .btn-getstarted {
            color: #e0e0e0;
        }

        .hero {
            background-color: #1c1c1c;
        }

        .hero .btn-get-started,
        .about .btn-learn-more {
            background-color: #bb86fc;
            border: none;
            color: #121212;
        }

        .hero .btn-get-started:hover,
        .about .btn-learn-more:hover {
            background-color: #3700b3;
        }

        .services {
            background-color: #1c1c1c;
        }

        .services .service-box {
            background-color: #292929;
        }

        .services .service-box h3,
        .services .service-box p {
            color: #e0e0e0;
        }

        .scroll-top {
            background-color: #3700b3;
        }

        .scroll-top i {
            color: #e0e0e0;
        }

        /* About Section */
        .about {
            background-color: #1c1c1c;
        }

        .about .content h3,
        .about .content p {
            color: #e0e0e0;
        }

        .about .btn-learn-more {
            background-color: #bb86fc;
            border: none;
            color: #121212;
        }

        .about .btn-learn-more:hover {
            background-color: #3700b3;
        }
    </style>

</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">SPK WP Laptop Gaming</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>SPK WP Laptop Gaming</h1>
                        <p>
                            "Temukan laptop gaming terbaik untuk kebutuhan Anda dengan metode Weighted Product:
                            performa, kualitas, dan harga dalam satu genggaman!"
                        </p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Coba Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets1/img/ss.jpg" class="img-fluid animated" alt="Laptop Gaming" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="assets1/img/about-img.png" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1"
                        data-aos="fade-right">
                        <div class="content">
                            <h3>Tentang SPK WP Laptop Gaming</h3>
                            <p>
                                Kami menyediakan sistem pendukung keputusan (SPK) dengan metode Weighted Product
                                (WP) untuk membantu Anda memilih laptop gaming terbaik berdasarkan berbagai kriteria
                                seperti harga, RAM, penyimpanan, GPU, layar, dan baterai.
                            </p>
                            <a href="#services" class="btn-learn-more">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Layanan Kami</h2>
                    <p>Kami menawarkan berbagai layanan untuk membantu Anda menemukan laptop gaming terbaik.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box blue">
                            <i class="bi bi-laptop"></i>
                            <h3>Analisis Kriteria</h3>
                            <p>Analisis berbagai kriteria penting seperti harga, RAM, penyimpanan, GPU, layar, dan
                                baterai untuk menemukan laptop terbaik.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box orange">
                            <i class="bi bi-graph-up"></i>
                            <h3>Perhitungan Weighted Product</h3>
                            <p>Gunakan metode Weighted Product untuk menghitung skor total dan menentukan peringkat
                                laptop.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box green">
                            <i class="bi bi-trophy"></i>
                            <h3>Rekomendasi Terbaik</h3>
                            <p>Dapatkan rekomendasi laptop gaming terbaik berdasarkan skor perhitungan Weighted
                                Product.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>
    <script src="assets1/vendor/aos/aos.js"></script>
    <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets1/js/main.js"></script>
</body>

</html>
