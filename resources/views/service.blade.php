<x-main-layout>
@section('page')
Dich vụ @endsection

 @section('meta')
  <meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
 @endsection  

     
@section('share')
  <meta property="og:type" content="article">
  <meta property="og:title" content="Điện Lạnh Đình Quốc | Dịch vụ | Điện lạnh đà nẵng ">
  <meta property="og:image" content="{{asset('upload/im/dienlanh5.jpg')}}">
  <meta property="og:description" content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn. Điện lạnh tại đà nẵng, lắp đặt điều hòa đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh, sửa máy giặt">
  <meta property="og:url" content="{{route('service')}}">
@endsection 
@section('css')

@endsection 
@section('js')

@endsection  
  <main id="main">
      <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <h1>Dịch vụ của chúng tôi</h1>
    </div>
  </section><!-- End Hero Section -->
  <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>DỊCH VỤ</span>
          <h2>DỊCH VỤ</h2>
          <p>Dịch vụ Cơ điện lạnh Đình Quốc cung cấp</p>

        </div>
        <div class="row mb-5 justify-content-center" >
          <div  class="col-lg-3 ">
            <form class="input-group " method="get" action ="{{route('fservice')}}">
                           @if(!!isset($keysearch))
                      <input name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" required value=" {{$keysearch}}" />

                   @else
                     <input name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" required />
                  @endif
            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-search"></i></button>
            <a class="ms-2 btn btn-outline-info " href="{{route('service')}}">Tất cả</a>
          </form>
          </div>
          
        </div>
        <div class="row gy-4">

          @if($services->count()==0)
         
          <h2>
             @if(!!isset($keysearch))
           Từ khóa {{$keysearch}}
           @endif
          Không có dịch vụ</h2>
          @endif
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
              <p class="threeline">{{$service->description}}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach
          

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
 </x-main-layout> 