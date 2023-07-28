<x-main-layout>
  @section('page')
Dich vụ @endsection   
  @section('meta')
<meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
 @endsection  
@section('share')
<meta property="og:type" content="website" />
  <meta property="og:title" content="Điện Lạnh Đình Quốc | {{$service->name}} ">
  <meta property="og:image" content="{{asset("$service->image")}}">
  <meta property="og:description" content="{{$service->description}}">
  <meta property="og:locale" content="vi" />
    <meta property="og:url" content="{{url("services/{$service->slug}")}}">

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
            <div class="col-lg-7 text-center">
              <h2 style="font-size: 28px" class="h5 text-uppercase">Dịch vụ {{$service->name}}</h2>
              <p>{{$service->description}}</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="index.html">Dịch vụ</a></li>
            <li>{{$service->name}}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= posts Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3">
            <div class="services-list " style="    box-shadow: 0 3px 20px -2px rgb(0 0 0 / 23%);">
              <h4 class="mb-3 mt-2">Dịch vụ của chúng tôi</h4>
              @foreach($services as $sv)
              <hr>
              <div class="mb-4" style=" display: flex;align-items: center; ">
                <img  style="max-height: 50px; width: 50px"  src="{{asset("$sv->image")}}">
                 <a class="twoline" href="{{url("/services/{$sv->slug}")}}">{{$sv->name}}</a>

              </div>
             
              @endforeach
            </div>
            <p>Bạn đang cần dịch vụ {{$service->name}} liên hệ ngay với Điện lạnh Đình Quốc</p>
            <a href="{{route('contact')}}"><img style="width:200px;" src="https://manhquanauto.vn/media/7915/lienhe-1-1.gif?width=466&height=151">  </a> 

            
           

          </div>

          <div class="col-lg-9 detail-service ">
           
            <h1>{{$service->name}}</h1>
            <p>Điện lạnh Đình Quốc cung cấp dịch vụ {{$service->name}} hàng đầu tại Đà Nẵng </p>
              <img class="img-fluid services-img" style=" max-height: 300px ; "src="{{asset("$service->image")}}" alt="{{$service->slug}}-da-nang" >
            <div class="row col-lg-12 ">
                <div class="edit">
                   {!!$service->detail!!}
                </div>
                   
            </div>
           

              @if($service->price)
                <p style="font-size:25px; text-align:center; ">Dịch vụ {{$service->name}} giá chỉ từ  
                  <span style="font-size:30px; color: red"> {{$service->price}}</span> 
                </p>
              @else
                <p style="font-size:25px; text-align:center; ">
                  Liên hệ với điện lạnh Đình Quốc để biết giá dịch vụ
                </p>
              @endif

              <h4 class="d-flex justify-content-center">LIÊN HỆ NGAY VỚI CHÚNG TÔI</h4>
              <h5 class="d-flex justify-content-center mb-5">Điện Lạnh Đình Quốc</h5>
              <div class="col-lg-12" style="    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;">

            <a href="{{url("contact/{$service->slug}")}}"><img style="width:200px;" src="https://manhquanauto.vn/media/7915/lienhe-1-1.gif?width=466&height=151">  </a> 



          </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->
 </x-main-layout> 