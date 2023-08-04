<x-main-layout>
  @section('page')
Thông tin về doanh nghiệp @endsection   

 @section('meta')
 <meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
 @endsection  

  
@section('share')
 <meta property="og:type" content="article">
<meta property="og:title" content="Điện Lạnh Đình Quốc | Điện lạnh tại đà nẵng">
<meta property="og:image" content="{{asset('upload/home/share.png')}}">
 <meta property="og:description" content="CChúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn">
<meta property="og:url" content="{{route('home')}}">
@endsection 
@section('css')

@endsection 
@section('js')

@endsection  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Điện Lạnh Đình Quốc <br></h2>
          <p data-aos="fade-up" data-aos-delay="100"> Chúng tôi là một đơn vị chuyên cung cấp các dịch vụ điện lạnh như lắp đặt, sửa chữa, bảo trì và bảo dưỡng các thiết bị điện lạnh gia đình như máy giặt, máy lạnh, tủ lạnh, bình nước nóng lạnh, lò vi sóng và các máy lạnh công nghiệp dùng tại các xí nghiệp, công ty. Chúng tôi cam kết mang đến cho khách hàng những sản phẩm và dịch vụ chất lượng nhất để đáp ứng nhu cầu của họ. </p>
         <!--
          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="ZIP code or CitY">
            <button type="submit" class="btn btn-primary">Search</button>
          </form> -->

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

           
         
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('upload/home/1.png')}}" class="img-fluid mb-3 mb-lg-0" alt="điện lạnh đà nẵng">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('upload/home/2.png')}}"   alt="điện lạnh Đình Quốc">
              </div>
            </div><!-- End testimonial item -->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('upload/home/3.png')}}"   alt="Sửa điều hòa đà nẵng">
              </div>
            </div><!-- End testimonial item -->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('upload/home/4.png')}}"   alt="sửa tủ lạnh đà nẵng">
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
          
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0 mt-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/picture/view/ky-su-dien-lanh.png" class="img-fluid" alt="">
           <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Về chúng tôi</h3>
            <p>
             Điện lạnh Đình Quốc là một doanh nghiệp hoạt động trong lĩnh vực điện lạnh dân dụng và công nghiệp trên địa bàn tp Đà nẵng. Chúng tôi có nhiều năm kinh nghiệm trong việc lắp đặt, bảo trì và sửa chữa các hệ thống điện lạnh như: máy lạnh, tủ lạnh, máy làm đá, máy làm kem… Chúng tôi cung cấp các sản phẩm và dịch vụ chất lượng cao, uy tín và giá cả hợp lý cho các khách hàng cá nhân và doanh nghiệp. Chúng tôi luôn nỗ lực để mang lại sự hài lòng cho khách hàng.<br> Liên hệ ngay với chúng tôi để được tư vấn và hỗ trợ tốt nhất.
            </p>
            <ul>
              <li class="justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Chuyên cung cấp dịch vụ điện lạnh trên địa bàn TP.Đà Nẵng</h5>
                  
                </div>
              </li>
              <li class="justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Những người thợ với nhiều năm kinh nghiệm trong nghề</h5>
                
                </div>
              </li>
              <li class="justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Uy tính - Chất lượng - Giá cả phải chăng </h5>
                 
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    


    <!-- ======= Testimonials Section ======= -->

      <div class="container">
        <div class="section-header">

          <h3 class="h2" style="color: white;">HÌNH ẢNH</h2>
            <h2>Hình ảnh</h2>
        </div>

        <div class="container" data-aos="fade-up">
          <div class="d-flex flex-wrap mb-3">
            <div class="col-lg-4 p-2 p-1">
              <img alt="sửa điều hòa tại đà nẵng" style="object-fit: contain; max-height: 350px; max-width: 400px;" src="{{asset('upload/im/dienlanh1.jpg')}}">
            </div>
            <div class="col-lg-4 p-2">
              <img alt="Điều hòa đà nẵng" style="object-fit: contain; max-height: 350px; max-width: 400px;"  src="{{asset('upload/im/dienlanh2.jpg')}}">
            </div>
            <div class="col-lg-4 p-2">
              <img alt="điện lạnh đà nẵng" style="object-fit: contain; max-height: 350px;max-width: 400px;"  src="{{asset('upload/im/dienlanh3.jpg')}}">
            </div>
            <div class="col-lg-4 p-2">
              <img alt="đà nẵng điện lạnh"  style="object-fit: contain; max-height: 350px;max-width: 400px;"  src="{{asset('upload/im/dienlanh4.jpg')}}">
          </div>
            <div class="col-lg-4 p-2">
              <img alt="cơ điện lạnh đình quốc" style="object-fit: contain; max-height: 350px;max-width: 400px;"  src="{{asset('upload/im/dienlanh5.jpg')}}">
          </div>
            <div class="col-lg-4 p-2">
              <img alt="sửa điện lạnh đà nẵng" style="object-fit: contain; max-height: 350px;max-width: 400px;"  src="{{asset('upload/im/dienlanh6.jpg')}}">
          </div>
         
        </div>
      </div>
  
 
  </main><!-- End #main -->

 


 
 </x-main-layout> 

