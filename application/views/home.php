<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/home/gambar/') ?>Logo 2.png" rel="icon">
  <link href="<?= base_url('assets/home/gambar/') ?>Logo 2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baumans&family=Coda&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/home/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="<?= base_url(); ?>">LECO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="active"><a href="#hero">Beranda</a></li>
          <li><a href="#mahasiswa">Mahasiswa</a></li>
          <li><a href="#dosen">Dosen</a></li>


        </ul>

      </nav><!-- .nav-menu -->

      <!-- <a href="index.html" class="get-started-btn">Get Started</a> -->
      <a href="<?= base_url('auth') ?>" class="login-btn ml-auto">Login</a>

    </div>
  </header><!-- End Header -->

  <section id="hero" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column  justify-content-center text mt-5" data-aos="fade-up">
          <h4>Platform Kuliah Online</h4>
          <h2>Learning College</h2>
          <h3>"Kuliah jadi lebih mudah dengan berbagai fitur yang tersedia dapat memudahkan mahasiswa berkuliah dan
            dosen
            mengajar"</h3>

          <div class="btn-wrap icon-center mt-3">
            <a href="<?= base_url('auth/daftar') ?>" class="btn daftar-btn ">Daftar</a>
            <!-- <a href="" class="btn daftar-btn ">Tentang</a> -->
          </div>


        </div>
        <div class=" col-lg-6 order-1 order-lg-2 hero-img justify-content-center text-center icon-center" data-aos="fade-left">
          <img src="<?= base_url('assets/home/gambar/') ?>Asset 2@72x-8.png" alt="" class="img-new" width="90%">
        </div>
      </div>
    </div>


  </section><!-- End Hero -->



  <main id="main">




    <!-- ======= mahasiswa Section ======= -->
    <section id="mahasiswa" class="mahasiswa">
      <div class="container">

        <div class="section-title">
          <h2>Mahasiswa</h2>
          <p>Platform Kuliah untuk Mahasiswa</p>
        </div>

        <div class="row">
          <div class="col-lg-5 order-1 order-lg-2 hero-img  text-center">
            <img src="<?= base_url('assets/home/gambar/') ?>mhs.png" alt="" srcset="" width="90%" style="margin-top: -5%;">
          </div>
          <div class="col-lg-7 pt-5 pt-lg-0 order-3 order-lg-2 d-flex flex-column text-justify">
            <p>Kuliah online begitu mudah dengan akses cepat dengan berbagai kemudahan fitur. Dapat bertatap muka dengan
              dosen menggunakan video call. Melakukan diskusi dengan teman maupun dosen dengan fourum diskusi yang
              tersedia. Fitur Peminjaman alat praktikum yang dapat membantu mahasiswa melakukan praktikum online di
              rumah. Serta bimbingan konseling yang dapat dilakukan dengan chat kepada dosen. Sistem kuliah kampus
              merdeka dengan dapat melakukan lintas matakuliah.</p>
          </div>

        </div>

      </div>
    </section><!-- End mahasiswa Section -->
    <!-- ======= mahasiswa Section ======= -->
    <section id="dosen" class="mahasiswa">
      <div class="container">

        <div class="section-title">
          <h2>Dosen</h2>
          <p>Platform Mengajar untuk Dosen</p>
        </div>

        <div class="row tex-justify">
          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column   text-justify">
            <p>Mengajar online menjadi mudah bersama para mahasiswa dengan fitur video call. Sistem tambah tugas yang
              memudahkan dosen untuk membuat tugas baru yang akan diberikan kepada para mahasiswa. Dapat membuat forum
              diskusi dan berdiskusi dengan bersama para mahasiswa. Mengupload podcast materi maupun umum yang dapat
              berkaitan dengan materi materi kuliah. menerima konseling dari mahasiswa yang melakukan chat terhadap
              dosen. Serta meminjam alat praktikum untuk kebutuhan perkuliahan. Lintas matakuliah dengan mudah dapat
              ditambahkan sesuai dengan kampus merdeka.</p>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img justify-content-center text-center icon-center">
            <img src="<?= base_url('assets/home/gambar/') ?>dosen.png" alt="" srcset="" width="90%" style="margin-top: -5%;">
          </div>
        </div>

      </div>
    </section><!-- End mahasiswa Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sailor</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div> -->

          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>LECO</span></strong> All Rights Reserved
            </div>
            <div class="credits">
            </div>
          </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/home/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/home/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/home/assets/js/main.js"></script>

</body>

</html>