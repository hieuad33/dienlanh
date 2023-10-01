<x-main-layout>
  @section('page')
{{$post->title}} @endsection    

 @section('meta')
<meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
 @endsection  

 
@section('share')
<meta property="og:type" content="website" />
  <meta property="og:title" content="{{$post->name}} || Điện Lạnh Đình Quốc ">
  <meta property="og:image" content="{{asset('$post->feture')}}">
  <meta property="og:description" content="{{$post->description}}">
  <meta property="og:locale" content="vi" />
    <meta property="og:url" content="{{url("/posts/{$post->slug}")}}">
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
              <h2 style="font-size: 28px" class="h5 text-uppercase">Bài viết</h2>
              <p>{{$category->name}}/{{$post->title}}</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Bài viết</a></li>
            <li>{{$post->category->name}}</li>
            <li>{{$post->title}}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-3">
             <h4>Bài viết liên Quan </h4>
              <div>

                @foreach($category->posts->take(4) as $po)
                  <div class="services-list " style="    box-shadow: 0 3px 20px -2px rgb(0 0 0 / 23%);">
                    <a href="{{url("/posts/{$po->slug}")}}">
                      <h5 class="twoline">{{$po->title}}</h5>
                      <div style=" display: flex;align-items: center;">
                      <img  style="max-height: 70px; width: 70px"  src="{{asset("$po->feture")}}">
                      
                        <p class="threeline">"{{$po->description}}"</p>
          
                      
                    </div>
                    </a>
                    
                    
                  </div>
             
              @endforeach
            
         
              </div>
             
                  
             
            
           

           
          
            <p>Bạn đang cần dịch vụ điện lạnh liên hệ ngay với Điện lạnh Đình Quốc</p>
            <a href="{{route('contact')}}"><img style="width:200px;" src="https://manhquanauto.vn/media/7915/lienhe-1-1.gif?width=466&height=151">  </a> 
          </div>

          <div class="col-lg-9 ">
               <div class="row col-lg-12 p-4 mb-4"  style="    box-shadow: 0 3px 20px -2px rgb(0 0 0 / 13%); padding: 10px; font-family: Roboto,Helvetica,Arial,sans-serif;">
                <p>By Điện lạnh Đình Quốc || Last updated {{$post->updated_at}} !!  <button class="btn btn-primary"> <i class="fa fa-eye"></i> {{$post->view}} </button></p>
                <div class="d-flex flex-wrap ">
                  
                <p class="ps-1"> Danh mục: {{$category->name}}</p>

                </div>
                
                

             
              
            
                        
                        <h1 class="title">{{$post->title}} </h1>

                         <p>{{$post->description}}</p>
                           <img class=" img-fluid services-img p-5 " style=" width:100%; max-height: "src="{{asset("$post->feture")}}" alt="{{$post->slug}}-da-nang" >

                        <div class="pl-3 edit">
                           {!!$post->content!!}
                        </div>
                        <div>
                 <p>Từ khóa :</p>
              <div class="d-flex flex-wrap tag">
               @foreach($post->tags as $tag)
                  
                <p><a href="{{url("/posts/tags/{$tag->slug}")}}">{{$tag->slug}} ({{$tag->posts()->count()}})</a></p>
                @endforeach
              
              </div>

                   
               </div>
                              </div>
           

          

              <h4 class="d-flex justify-content-center">LIÊN HỆ NGAY VỚI CHÚNG TÔI</h4>
              <h5 class="d-flex justify-content-center mb-5">Điện Lạnh Đình Quốc</h5>
              <div class="col-lg-12" style="    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;">

            <div class="info-item d-flex  align-items-start ">
              <i class="btn me-2 btn-primary bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Địa chỉ:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex  align-items-start">
              <i class="me-2 btn  btn-primary bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Di động:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          
            <div class="info-item d-flex  align-items-start">
              <i class=" btn me-2 btn-primary bi bi-facebook flex-shrink-0"></i>
              <div>
                <h4>Facebook:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex  align-items-start">
              <i class=" btn me-2 btn-primary bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Zalo:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->


          </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->
 </x-main-layout> 