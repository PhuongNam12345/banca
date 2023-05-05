@extends('welcome')
@section('content')
    <!--================Header Menu Area =================-->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Sản phẩm tại cửa hàng</h2>
                        <p>Hãy tìm kiếm sản phẩm bạn yêu thích</p>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="category.html">Shop</a>
                        <a href="category.html">Women Fashion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">

                    <div class="latest_product_inner">
                        <div class="row">
                            @foreach ($sp_loai as $key => $sp)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <div class="product-img">
                                          <img class="img-fluid w-100" src="{{ URL::to('public/uploads/sanpham/' . $sp->Hinh) }}">
                                            <div class="p_icon">
                                                <a href="#">
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
                                                <h4>{{$sp->Ten_sp }}</h4>
                                            </a>
                                            <div class="mt-3">
                                                <span class="mr-4">{{ number_format($sp->Don_gia) . ' ' . 'VND' }}</span>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                              <h3>Loại sản phẩm </h3>
                            </div>
                            <div class="widgets_inner">
                              <ul class="list">
                                <li><a href="{{ URL::to('/danhmuc') }}">Tất cả</a>
                                </li>
                                  @foreach ($loaisp as $key => $item) 
                                      <li>
                                          <a href="{{ URL::to('/danh-muc/'. $item->Ma_loai_sp) }}">{{ $item->Ten_loai_sp }}</a>
                                      </li>
                                  @endforeach
                              </ul>
                          </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Category Product Area =================-->
    
@endsection
