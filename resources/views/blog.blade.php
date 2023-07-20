<x-main-layout>
  @section('page')
Bài viết @endsection   

 @section('meta')
<meta content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn tại khu vực đà nẵng">
  <meta content="Điện lạnh tại đà nẵng, sửa điều hòa tại đà nẵng, điện lạnh đình Quốc, sửa máy làm kem, vệ sinh điều hòa, sửa tủ lạnh" name="keywords">
 @endsection  

  
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
              <h2>Bài viết</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Trang chủ</a></li>
            <li>Bài viết  </li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="blog" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row m-4  justify-content-end" >
          <div  class="col-lg-4 ">
            <div class="input-group ">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="pricing-item featured">
              <h3>Danh mục bài viết</h3>
              <ul>
                @foreach($categories as $cate)
                  @if($cate->parent_id)
               
                  @else
                   <li><i class="bi bi-check"></i><a href="">{{$cate->name}}</a></li>
                  @endif
                @endforeach              
              </ul>

            </div>
            <div class="pricing-item featured">
              <h3>Tag</h3>
              <ul>
               @foreach($tags as $tag)
                  
                <li><i class="bi bi-check"></i><a href="">{{$tag->slug}}</a></li>
                @endforeach
              
              </ul>

            </div>


            
          </div>
          <div class="col-lg-9">
            @foreach($posts as $post)
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

            @endforeach

            

            
          </div>

          
        </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 </x-main-layout> 