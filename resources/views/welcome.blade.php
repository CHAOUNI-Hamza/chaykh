<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $information->name_generale }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('visitor/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('visitor/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('visitor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('visitor/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('visitor/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('visitor/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('visitor/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('visitor/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('visitor/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily - v4.7.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <nav id="navbar" class="navbar">
        <ul dir="rtl">
          <li><a href="/">الرئيسية</a></li>
          <li><a href="/contact">للتواصل</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
      <h1 class="logo"><a href="/">{{ $information->name_generale }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      

    </div>
  </header><!-- End Header -->

 @yield('content')

 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="container">
      <h3>{{ $information->name_generale }}</h3>
    <p style="font-size: 30px;">{{ $information->title_generale }}
  </p>
      <div class="social-links">
        <a href="{{ $information->fb_url }}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $information->insta_url }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ $information->skype_url }}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="{{ $information->wt_url }}" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>LOGO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
       <!-- Designed by <a href="#"></a>-->
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('visitor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('visitor/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('visitor/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('visitor/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('visitor/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('visitor/assets/js/main.js') }}"></script>

</body>

</html>