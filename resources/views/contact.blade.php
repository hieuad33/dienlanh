<x-main-layout>
  @section('page')
Liên hệ @endsection    
@section('share')
  <meta property="og:type" content="article">
  <meta property="og:title" content="Điện Lạnh Đình Quốc | Điện lạnh tại đà nẵng ">
  <meta property="og:image" content="ảnh khi share">
  <meta property="og:description" content="CChúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn">
  <meta property="og:url" content="liên kết khi bấm vào">
@endsection 
@section('css')

@endsection 
@section('js')

@endsection  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Liên hệ</h2>
              <p>Bạn đang gặp vấn đề với thiết bị điện lạnh trong nhà bạn! đừng lo lắng, Hãy liên hệ ngay với chúng tôi, Điện lạnh Đình Quốc cam kết mang lại chất lượng phục vụ tốt nhất.
              sửa chữa, bảo hành, bảo trì các thiết bị điện lạnh. lựa chọn tốt nhất dành cho bạn.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Trang chủ</a></li>
            <li>Liên hệ</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2889572128834!2d108.17040137479826!3d16.050488284626326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219a603f1e5ef%3A0x84e8cc003a94f987!2zU-G7rEEgQ0jhu65BIMSQSeG7hk4gTOG6oE5IIMSQw4AgTuG6tE5HLSDEkMOMTkggUVXhu5BD!5e0!3m2!1svi!2s!4v1688783349735!5m2!1svi!2s"style="border:0; width: 100%; height: 340px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Địa chỉ:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Di động:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Facebook:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Zalo:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->


          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn*" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="phone" class="form-control" name="phone" id="phone" placeholder="số điện thoại*" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message*" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 </x-main-layout> 