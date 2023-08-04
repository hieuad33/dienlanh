<x-main-layout>
  @section('page')
Liên hệ @endsection  


 @section('meta')
<meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
 @endsection
    
@section('share')
  <meta property="og:type" content="article">
  <meta property="og:title" content="Điện Lạnh Đình Quốc | Điện lạnh tại đà nẵng ">
  <meta property="og:image" content="{{asset('upload/home/share.png')}}">
  <meta property="og:description" content="CChúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn">
  <meta property="og:url" content="liên kết khi bấm vào">
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Liên hệ</h2>
  
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

       

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">
            <h4 class="pb-1">Thông tin liên hệ:</h4>
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
                <h4>Zalo:</h4>
  
                 <a href="https://zalo.me/{{$zalo}}" target="_blank">{{$zalo}}  </a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-facebook flex-shrink-0"></i>
              <div class="fb-page" 
data-href="https://www.facebook.com/facebook"
data-width="300" 
data-hide-cover="false"
data-show-facepile="false"></div>
            </div><!-- End Info Item -->
          </div>

          <div class="col-lg-8">
            <h4 class="pb-1">Gửi phản hồi</h4>
             @if(session('flash_success'))
                <div class="alert alert-success">
                    <strong>Thành Công! </strong>{{ session('flash_success') }}
                </div>
                @endif
            <form action="{{route('sendcontact')}}" method="post" role="form" class="php-email-form">
              <div class="row">
                 @csrf
                 
                  @if(!!isset($type))
                  
                    <input type="text"  name="type" class="form-control d-none" value="{{$type}}" >
                  @else
                  <input type="text"  name="type" class="form-control d-none" value="{{old('type')}}" >
                  @endif
              
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" value="{{ old('name')}}" id="name" placeholder="Tên của bạn*" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="phone" class="form-control" name="phone" id="phone" value="{{ old('phone')}}" placeholder="số điện thoại*" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}" placeholder="Email" >
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" value="{{ old('message')}}" placeholder="Message*" required></textarea>
              </div>
              <div class="my-3">
                 @if(count($errors)>0)
             <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{ $err }}<br>
                @endforeach
            </div>
            @endif
            
            @if(session('errfile'))
                <div class="alert alert-danger">
                    <strong>{{session('errfile')}}</strong>
                </div>
            @endif
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>
         <div class="mt-5">
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2889572128834!2d108.17040137479826!3d16.050488284626326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219a603f1e5ef%3A0x84e8cc003a94f987!2zU-G7rEEgQ0jhu65BIMSQSeG7hk4gTOG6oE5IIMSQw4AgTuG6tE5HLSDEkMOMTkggUVXhu5BD!5e0!3m2!1svi!2s!4v1688783349735!5m2!1svi!2s"style="border:0; width: 100%; height: 340px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 </x-main-layout> 