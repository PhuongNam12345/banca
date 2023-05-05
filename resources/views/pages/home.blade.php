@extends('welcome')
@section('content')
<section class="home_banner_area mb-40">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content row">
        <div class="col-lg-12">
          <p class="sub text-uppercase">Thế giới đại dương</p>
          <h3><span>Mang</span> Đại Dương<br /> <span>Về Nhà Bạn </span></h3>
          <h4>Cùng trải nghiệm vẻ đẹp các loài cá</h4>
          <a class="main_btn mt-40" href="{{ URL::to('danhmuc/') }}">Xem bộ sưu tập</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

{{-- <!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-money"></i>
            <h3>Money back gurantee</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-truck"></i>
            <h3>Free Delivery</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-support"></i>
            <h3>Alway support</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-blockchain"></i>
            <h3>Secure payment</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Cá cảnh mới nhất </span></h2>
          <p>Các loại cá đang được ưa chuộng nhất hiện nay</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($sanphamca as $key=>$sp)
      <div class="col-lg-4 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-100" src="{{('public/frontend/img/product/feature-product/f-p-1.jpg')}}" alt="" />
            <div class="p_icon">
              <a href="c">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
              <a href="#">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4></h4>
              
            </a>
            <div class="mt-3">
              <span class="mr-4">Tên sản phẩm</span>
              <span class="mr-4">Giá</span>
            </div>
          </div>  
        </div>
      </div>    
   
      @endforeach
  </div>
</section>
<section class="feature_product_area section_gap_bottom_custom_3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Cá cảnh mới nhất  </span></h2>
          <p>Các loại cá đang được ưa chuộng nhất hiện nay</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($sanphamthucan as $key=>$sp)
      <div class="col-lg-4 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-100" src="{{('public/frontend/img/product/feature-product/f-p-1.jpg')}}" alt="" />
            <div class="p_icon">
              <a href="c">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
              <a href="#">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4></h4>
              
            </a>
            <div class="mt-3">
              <span class="mr-4">Tên sản phẩm </span>
              <span class="mr-4">Giá</span>
            </div>
          </div>  
        </div>
      </div>    
   
      @endforeach
  </div>
</section>
<section class="feature_product_area section_gap_bottom_custom_3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Cá cảnh mới nhất </span></h2>
          <p>Các loại cá đang được ưa chuộng nhất hiện nay</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($sanphamdungcu as $key=>$sp)
      <div class="col-lg-4 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-100" src="{{('public/frontend/img/product/feature-product/f-p-1.jpg')}}" alt="" />
            <div class="p_icon">
              <a href="c">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
              <a href="#">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4></h4>
              
            </a>
            <div class="mt-3">
              <span class="mr-4">Tên sản phẩm</span>
              <span class="mr-4">Giá</span>
            </div>
          </div>  
        </div>
      </div>    
   
      @endforeach
  </div>
</section>


          
</section>

<section class="offer_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="offset-lg-4 col-lg-6 text-center">
        <div class="offer_content">
          <h3 class="text-uppercase mb-40">all men’s collection</h3>
          <h2 class="text-uppercase">50% off</h2>
          <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
          <p>Limited Time Offer</p>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--================ New Product Area =================-->

  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
      <section class="blog-area section-gap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="main_title">
                <h2><span>latest blog</span></h2>
                <p>Bring called seed first of third give itself now ment</p>
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="thumb">
                  <img class="img-fluid" src="img/b1.jpg" alt="">
                </div>
                <div class="short_details">
                  <div class="meta-top d-flex">
                    <a href="#">By Admin</a>
                    <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                  </div>
                  <a class="d-block" href="single-blog.html">
                    <h4>Ford clever bed stops your sleeping
                      partner hogging the whole</h4>
                  </a>
                  <div class="text-wrap">
                    <p>
                      Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                      Forth.
                    </p>
                  </div>
                  <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="thumb">
                  <img class="img-fluid" src="img/b2.jpg" alt="">
                </div>
                <div class="short_details">
                  <div class="meta-top d-flex">
                    <a href="#">By Admin</a>
                    <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                  </div>
                  <a class="d-block" href="single-blog.html">
                    <h4>Ford clever bed stops your sleeping
                      partner hogging the whole</h4>
                  </a>
                  <div class="text-wrap">
                    <p>
                      Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                      Forth.
                    </p>
                  </div>
                  <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                </div>
              </div>
            </div>
    
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="thumb">
                  <img class="img-fluid" src="img/b3.jpg" alt="">
                </div>
                <div class="short_details">
                  <div class="meta-top d-flex">
                    <a href="#">By Admin</a>
                    <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                  </div>
                  <a class="d-block" href="single-blog.html">
                    <h4>Ford clever bed stops your sleeping
                      partner hogging the whole</h4>
                  </a>
                  <div class="text-wrap">
                    <p>
                      Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                      Forth.
                    </p>
                  </div>
                  <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection