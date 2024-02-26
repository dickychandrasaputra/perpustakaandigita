<?php
    include "koneksi.php";
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perpustakaan Digital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/logo.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Perpustakaan Digital</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="login.php" class="login"><i class="bx bxl-google"></i></a>
          <a href="logout.php" class="logout"><i class="bi bi-door-closed"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
        <li><a href="?" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Dashboard</span></a></li>
          <?php
            if($_SESSION['user']['level'] !='peminjam'){
          ?>
          <li><a href="?page=kategori" class="nav-link scrollto"><i class="bx bx-receipt"></i> <span>Kategori</span></a></li>
          <li><a href="?page=buku" class="nav-link scrollto"><i class="bx bx-book"></i> <span>Buku</span></a></li>
          <?php
            }else{
          ?>
          <li><a href="?page=buku_daftar" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Buku</span></a></li>
          <?php
            }
          ?>
           <?php
            if($_SESSION['user']['level'] !='petugas'){
          ?>
          <li><a href="?page=ulasan" class="nav-link scrollto"><i class="bx bx-comment"></i> <span>Ulasan</span></a></li>
          <?php
            }
          ?>
          <?php
            if($_SESSION['user']['level'] !='peminjam'){
          ?>
          <li><a href="?page=peminjaman_buku" class="nav-link scrollto"><i class="bx bx-printer"></i> <span>Peminjaman</span></a></li>
          <?php
            }
          ?>
          <?php
            if($_SESSION['user']['level'] =='petugas'){
          ?>
          <li><a href="?page=laporan" class="nav-link scrollto"><i class="bx bx-comment"></i> <span>Laporan</span></a></li>
          <?php
            }
          ?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  
  <main id="main">

    <div class="container">
      <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
          if(file_exists($page . '.php')){
            include $page . '.php';
          }else{
            include '404.php'; 
          }
      ?>
    </div>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    Logged in as: <?php echo $_SESSION['user']['nama'];?>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>