<x-main-layout>
@section('page')
Dich vụ @endsection    
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

        </div>

        <div class="row gy-4">
          @foreach($services as $service)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{$loop->iteration*50}}">
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
              <h3><a href="/service/{{$service->slug}}" class="stretched-link">{{$service->name}}</a></h3>
              <p>{{$service->description}}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach
          

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
 </x-main-layout> 