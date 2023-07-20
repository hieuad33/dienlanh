<!DOCTYPE html>
<html lang="VN">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Điện Lạnh Đình Quốc - @yield('page')</title>
  <!--<meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
-->
   @yield('meta')
<!-- share-->
  @yield('share')
  
  @yield('css')

 <?php
    $phone='0123434343';
    $zalo='0941757025';
    $facebook='abc';
    $mess='abc';
    $address='11 Nhơn Hòa 3 - Hoà An, Cẩm Lệ - Đà Nẵng ';
    $email='hieuad88@gmail.com';
  ?>


  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/logo.png')}}" alt="Điện lạnh Đình Quốc - Điện Lạnh Đà Nẵng">
        <h1>Đình Quốc</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}" >Trang chủ</a></li>
          <li><a href="{{route('about')}}">Thông tin</a></li>
          <li><a href="{{route('service')}}">Dịch Vụ</a></li>
          <li><a href="{{route('posts')}}">Bài Viết</a></li>
          <li><a href="{{route('contact')}}">Liên hệ</a></li>
         <!-- <li><a class="get-a-quote" href="get-a-quote.html">Call Now</a></li> -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

 
 
  {{ $slot }}

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Điện lạnh Đình Quốc</span>
          </a>
          <p>Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng</p>
          <div class="social-links d-flex mt-4">
         
            <a href="{{$facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Liên kết</h4>
          <ul>
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li><a href="{{route('about')}}">Thông tin</a></li>
            <li><a href="{{route('service')}}">Dịch vụ</a></li>
            <li><a href="{{route('posts')}}">Bài viết</a></li>
            <li><a href="{{route('contact')}}">liên hệ</a></li>
          </ul>
        </div>

        

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Liên hệ</h4>
          <p>
            
            <strong>Điện thoại:</strong> {{$phone}}<br>
            <strong>zalo:</strong> {{$phone}}<br>
            <strong>Email:</strong> {{$email}}<br>
          </p>

        </div>

      </div>
    </div>

   


    <div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"> <a href="tel:{{$phone}}" class="pps-btn-img"> <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
    </div>
    <div class="hotline-bar">
        <a href="tel:123"> <span class="text-hotline">{{$phone}}</span> </a>
    </div>

</div>
<div class="float-icon-hotline">      
    <ul class ="left-icon hotline">
      <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://zalo.me/{{$zalo}}"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
      <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="{{$mess}}"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
    </ul>   
</div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <div id="preloader"></div>

    @yield('js')

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>