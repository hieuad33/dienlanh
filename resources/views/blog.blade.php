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
  <meta property="og:image" content="{{asset('upload/home/share.png')}}">
  <meta property="og:description" content="Chúng tôi là đơn vị cung cấp giải pháp điện lạnh toàn diện cho nhà ở và công ty của bạn">
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
            <form class="input-group " method="get" action ="{{route('fpost')}}">
               @if(!!isset($keysearch))
                      <input name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" required value=" {{$keysearch}}" />

                   @else
                     <input name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" required />
                  @endif
                        <button type="submit" class="btn btn-outline-primary">search</button>
          </form>
          </div>
          
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="pricing-item featured">
              <h3>Danh mục bài viết</h3>
              <ul>
                 <li><i class="bi bi-check"></i><a href="{{url("/posts/")}}">Tất cả</a></li>
                @foreach($categories as $cate)
                  @if($cate->parent_id)
               
                  @else
                   <li><i class="bi bi-check"></i><a href="{{url("/posts/category/{$cate->slug}")}}">{{$cate->name}}({{$cate->posts()->count()}})</a></li>
                  @endif
                @endforeach              
              </ul>

            </div>
            <div class="pricing-item  ">
              <h3>Tag</h3>
              <div class="d-flex flex-wrap tag">
               @foreach($tags as $tag)
                  
                <p><a href="{{url("/posts/tags/{$tag->slug}")}}">{{$tag->slug}} ({{$tag->posts()->count()}})</a></p>
                @endforeach
              
              </div>

            </div>


            
          </div>
          <div class="col-lg-9">
             <div class="ms-2" style=" display: flex;">
                @if(!!isset($tagname))
                  
                    <p >Tag: {{$tagname->name}} </p> 
                  @endif
                   @if(!!isset($keysearch))
                  
                    <p >Từ khóa: {{$keysearch}} </p> 
                  @endif
                   @if(!!isset($categoryname))
                  
                    <p > Danh mục: {{$categoryname->name}}</p> 
                  @endif

              <p class="ms-5">Số bài viết: {{$posts->count()}}</p> 
               
            </div>
            @if($posts->count()==0)
            <h3>Không có bài viết</h3>
            @endif

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
                  <a class="" href="{{url('posts')}}/{{$post->slug}}">Xem chi tiết </a>
                  
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