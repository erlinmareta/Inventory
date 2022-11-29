<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyVentory App</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a>My Ventory</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Fitur Aplikasi</a></li>
          <li><a class="nav-link scrollto" href="#tentang">Tentang Kami</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Mau kelola barang dagangan dengan mudah? Kelolain aja di My Ventory!</h1>
            <h2>Solusi pintar untuk para pebisnis!</h2>
            @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-0 py-0 sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="download-btn">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="download-btn"><i class="bx bx-log-in"></i>Masuk</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="download-btn"><i class="bx bx-edit"></i>Daftar</a>
                  @endif
              @endauth
          </div>
      @endif
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Fitur Aplikasi</h2>
          <p>Aplikasi My Ventory adalah aplikasi "inventory management" tentang persediaan barang dimana didalamnya untuk mempermudah admin atau pemilik toko untuk mengorganisir bisnisnya</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-notepad"></i>
                  <h4>Melihat Detail Produk</h4>
                  <p>Informasi lebih dalam tentang identitas produk yang tersimpan
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Melihat Jumlah Produk</h4>
                  <p>Melihat Ketersediaan jumlah produk yang tersimpan didalam gudang</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-search-alt"></i>
                  <h4>Mencari Produk</h4>
                  <p>Melihat daftar produk yang tersimpan didalam gudang</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-archive-in"></i>
                  <h4>Laporan Barang Masuk</h4>
                  <p>Mencatat jumlah, jenis, nama barang yang akan masuk didalam gudang</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-archive-out"></i>
                  <h4>Laporan Barang Keluar</h4>
                  <p>Mencatat jumlah, jenis, nama barang yang akan keluar dari gudang</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

      <!-- ======= App Tentang Kami Section ======= -->
  <section id="tentang" class="tentang">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h2>Tentang Kami</h2>
            <br>
            <p>My Ventory Berdiri pada tanggal 3 Desember 2022. Perusahaan kami bergerak pada bidang management pengelolaan bisnis dengan suatu sistem yang mempermudahkan suatu pengelolaan yakni pengelolaan data barang masuk serta keluar dari suatu gudang.</p>
          </div>
        </div>
    </section><!-- End App Tentang Kami Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>My Ventory</h3>
            <p>
              Jl. Permata Raya Blok. D No.44, Kode Pos. 55395 <br>
              Ngamprah, Bandung Barat<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +6285889756422<br>
              <strong>Email:</strong> MyVentorybussines@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Fitur Aplikasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#tentang">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>My Ventory</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by My Ventory Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>