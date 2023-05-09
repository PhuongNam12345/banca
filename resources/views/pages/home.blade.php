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
      <div class="col-lg-3 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-75" src="{{ URL::to('public/uploads/sanpham/' . $sp->Hinh) }}" alt="" />
            <div class="p_icon w-75">
              <a href="{{ URL::to('chitiet/'.$sp->id_sp) }}">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
              <a href="{{ URL::to('/giohang') }}" class="icons">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4></h4>
              
            </a>
            <div class="mt-3">
              <h4 class="mr-4">{{$sp->Ten_sp }}</h4>
              <p class="mr-4">{{ number_format($sp->Don_gia) . ' ' . 'VND' }}</p>
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
          <h2><span>Thức ăn cho cá mới nhất  </span></h2>
          <p>Loại thức ăn được đánh giá cao trên thị trường và được tin dùng</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($sanphamthucan as $key=>$sp)
      <div class="col-lg-3 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-75" src="{{ URL::to('public/uploads/sanpham/' . $sp->Hinh) }}" alt="" />
            <div class="p_icon w-75">
              <a href="{{ URL::to('chitiet/'.$sp->id_sp) }}">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
             
                <a href="{{ URL::to('/giohang') }}" class="icons">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4></h4>
              
            </a>
            <div class="mt-3">
              <h4 class="mr-4">{{$sp->Ten_sp }}</h4>
              <p class="mr-4">{{ number_format($sp->Don_gia) . ' ' . 'VND' }}</p>
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
          <h2><span>Dụng cụ cho cá mới nhất </span></h2>
          <p>Dụng cụ chăm sóc bảo vệ cá phát triển tốt</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($sanphamdungcu as $key=>$sp)
      <div class="col-lg-3 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-75" src="{{ URL::to('public/uploads/sanpham/' . $sp->Hinh) }}" alt="" />
            <div class="p_icon w-75">
              <a href="{{ URL::to('chitiet/'.$sp->id_sp) }}">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
             
                <a href="{{ URL::to('/giohang') }}" class="icons">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4></h4>
              
            </a>
            <div class="mt-3">
              <h4 class="mr-4">{{$sp->Ten_sp }}</h4>
              <p class="mr-4">{{ number_format($sp->Don_gia) . ' ' . 'VND' }}</p>
            </div>
          </div>  
        </div>
      </div>    
   
      @endforeach
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
                <h2><span>Bài viết liên quan</span></h2>
                <p>Tìm hiểu những kiến thức phong phú về loài cá</p>
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="thumb">
                  <img class="img-fluid"  src="{{('public/frontend/img/banner/ca2.jpg')}}" alt="">
                </div>
                <div class="short_details">
             
                  <a class="d-block" href="{{ URL::to('blog2/') }}">
                    <h4>Cá vàng lớn nhất nước Anh có giá đắt như vàng</h4>
                  </a>
                  <div class="text-wrap">
                    <p>
                      Chú cá vàng đầu lân Rocky được bán với giá lên đến gần 5.600 USD do kích thước lớn và mức độ quý hiếm.
                    </p>
                  </div>
                  <a href="#" class="blog_btn">Đọc thêm <span class="ml-2 ti-arrow-right"></span></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="thumb">
                  <img class="img-fluid"  src="{{('public/frontend/img/banner/ca1.jpg')}}" alt="">
                </div>
                <div class="short_details">
                
                  <a class="d-block" href="{{ URL::to('blog1/') }}">
                    <h4>Ngắm cá cảnh có lợi cho sức khỏe</h4>
                  </a>
                  <div class="text-wrap">
                    <p>
                      Theo nghiên cứu của các nhà khoa học Anh, ngắm cá cảnh có tác dụng hạ huyết áp và nhịp tim, đồng thời cải thiện tâm trạng của con người.
                    </p>
                  </div>
                  <a href="#" class="blog_btn">Đọc thêm <span class="ml-2 ti-arrow-right"></span></a>
                </div>
              </div>
            </div>
    
            <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="thumb">
                  <img class="img-fluid"  src="{{('public/frontend/img/banner/ca.jpg')}}" alt="">
                </div>
                <div class="short_details">
                  <div class="meta-top d-flex">
                   
                  </div>
                  <a class="d-block" href="{{ URL::to('blog/') }}">
                    <h4>Vua cá cảnh Singapore</h4>
                  </a>
                  <div class="text-wrap">
                    <p>
                      Nổi tiếng với biệt danh "Kenny the Fish", Kenny Yap hiện nuôi tới hơn 1.000 giống cá cảnh, vừa phục vụ trong nước, vừa xuất khẩu sang hơn 80 quốc gia.  
                    </p>
                  </div>
                  <a href="#" class="blog_btn">Đọc thêm<span class="ml-2 ti-arrow-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection