<x-main-layout>
  @section('page')
Trang chủ @endsection   

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
<?php
    $phone='0973711196';
    $zalo='0906344254';
    $facebook='https://www.facebook.com/Trungtamdienlanhdanangdinhquoc/';
    $mess='https://www.facebook.com/messages/t/629206380552075';
    $address='11 Nhơn Hòa 3 - Hoà An, Cẩm Lệ - Đà Nẵng ';
    $email='';
  ?> 
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

           <a  href="tel:{{$phone}}"> <img style="max-height:100px" src="{{asset('upload/call.gif')}}" alt="goi ngay"></a>

         
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper" style="max-height: 300px;">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img  style="object-fit: cover; width: 100%; height: 100%;" src="{{asset('storage/photos/1/banner/1.png')}}"  alt="điện lạnh đà nẵng">
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img  style="object-fit: cover; width: 100%; height: 100%;" src="{{asset('storage/photos/1/banner/2.png')}}"   alt="điện lạnh Đình Quốc">
              </div>
            </div><!-- End testimonial item -->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <img style="object-fit: cover; width: 100%; height: 100%;" src="{{asset('storage/photos/1/banner/3.png')}}"   alt="Sửa điều hòa đà nẵng">
              </div>
            </div><!-- End testimonial item -->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <img style="object-fit: cover; width: 100%; height: 100%;" src="{{asset('storage/photos/1/banner/4.png')}}"   alt="sửa điện lạnh cho doanh nghiệp tại đà nẵng">
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

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-toolbox"></i></div>
            <div>
              <h4 class="title">Chuyên nghiệp</h4>
              <p class="description">Chúng tôi sở hữu những người thợ chuyên nghiệp và có kỹ năng về chuyên môn với nhiều năm kinh nghiệm.</p>
              
            </div>
          </div>
          <!-- End Service Item -->
          <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">An toàn</h4>
              <p class="description">Giải quyết các vấn đề, sự cố hư hỏng đúng kỹ thuật. Đem lại sự yên tâm tuyệt đối cho khách hàng khi sử dung dịch vụ của Điện Lạnh Đình Quốc</p>
             
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-sharp fa-solid fa-truck-fast"></i></div>
            <div>
              <h4 class="title">Nhanh chóng & Tiện lợi</h4>
              <p class="description">Bạn không cần phải tới trung tâm của Điện Lạnh chỉ cần nhấc máy lên và gọi nhân viên của chúng tôi sẽ đến tận nhà sửa thiết bị của bạn.</p>
            
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-piggy-bank"></i></div>
            <div>
              <h4 class="title">Giải pháp tối ưu</h4>
              <p class="description">Chúng tôi cam kết mang lại dịch vụ tốt nhất cho khách hàng với giá cả hợp lý nhât</p>
             
            </div>
          </div><!-- End Service Item -->
           

        </div>

      </div>
    </section><!-- End Featured Services Section -->
      <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0 mb-3">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>DỊCH VỤ</span>
          <h2>DỊCH VỤ</h2>

        </div>
        <div class="row gy-4">
          @foreach($services as $service)
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{$loop->iteration*50}}">
            <div class="card">
              <div class="card-img">
                <div  class="img-fluid" >
                @if($service->image)             
                  <img src="{{$service->image}}" alt="$service->slug" class="imgsize">          
                @else
                  <img src="assets/img/storage-service.jpg" alt="" class="imgsize">
                @endif
                </div>
              </div>
              <h3><a href="services/{{$service->slug}}" class="stretched-link">{{$service->name}}</a></h3>
              <p class="twoline">{{$service->description}}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach
          

            <div class="row d-flex justify-content-center mt-3">
              <a class="btn btn-primary col-lg-2 "  data-aos-delay="300" href="{{route('service')}}">Xem tất cả dịch vụ </a>
            </div>

        </div>
          <hr>
      </div>
    </section><!-- End Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
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
          <div class="contact mt-5 ">
            <div class="row pt-3 pb-3 px-5" style="box-shadow: 0 3px 20px -2px rgba(108, 117, 125, 0.15);">
              <div class="col-lg-5">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Địa chỉ:</h4>
                 <a href="https://www.google.com/maps?ll=16.050488,108.172976&z=16&t=m&hl=vi&gl=US&mapclient=embed&cid=9577128908958267783" target="_blank">{{$address}}  </a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Di động:</h4>
                <a href="tel:{{$phone}}" target="_blank">{{$phone}}  </a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Facebook:</h4>
                
                 <a href="{{$facebook}}" target="_blank"> ĐIỆN LẠNH ĐÌNH QUỐC </a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Zalo:</h4>
                <a href="https://zalo.me/{{$zalo}}" target="_blank">{{$zalo}}  </a>
              </div>
            </div><!-- End Info Item -->


          </div>
              <div class="col-lg-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2889572128834!2d108.17040137479826!3d16.050488284626326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219a603f1e5ef%3A0x84e8cc003a94f987!2zU-G7rEEgQ0jhu65BIMSQSeG7hk4gTOG6oE5IIMSQw4AgTuG6tE5HLSDEkMOMTkggUVXhu5BD!5e0!3m2!1svi!2s!4v1688783349735!5m2!1svi!2s"style="border:0; width: 100%; height: 340px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
              </div>
            </div>
          </div>

      </div>
    </section><!-- End About Us Section -->

    


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>BÀI VIẾT</span>
          <h2>BÀI VIẾT</h2>

        </div>

        <div class="row gy-4">
           @foreach($posts as $post)
           <div class="col-lg-6 p-3">
             <div class="pricing-item ">
              <div class="row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
                <div class="col-md-5">
                  <img src="{{asset($post->feture)}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                  <h3>{{$post->title}}</h3>
                  <p class="fst-italic">
                    {{$post->description}}
                  </p>
                  <a class="" href="{{url('posts/')}}/{{$post->slug}}">Xem chi tiết </a>
                  
                </div>
              </div>
                  </div>
           </div>
            

            @endforeach
   

        </div>
         <div class="row d-flex justify-content-center mt-3">
              <a class="btn btn-primary col-lg-2  "  data-aos-delay="300" href="{{route('posts')}}">Xem thêm </a>
            </div>

      </div>
    </section><!-- End Pricing Section -->

  

 
  </main><!-- End #main -->

 


 
 </x-main-layout> 

