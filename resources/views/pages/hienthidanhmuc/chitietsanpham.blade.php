@extends('welcome')
@section('content_s')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Product Details</h2>
                        <p>Very us move be blessed multiply night</p>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="single-product.html">Product Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            @foreach ($chitiet as $key => $item)
                <div class="row s_product_inner">
                    <div class="col-lg-6">
                        <div class="s_product_img">
                            <img class="img-fluid w-75" src="{{ URL::to('public/uploads/sanpham/' . $item->Hinh) }}">
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="s_product_text">
                            <h3> {{ $item->Ten_sp }}</h3>
                            <h2 class="mr-4">{{ number_format($item->Don_gia) . ' ' . 'VND' }}</h2>
                            <ul class="list">
                                <li>
                                    <a class="active" href="#">
                                        <span>Loại :</span> {{ $item->Ten_loai_sp }}</a>
                                </li>
                                <li>
                                    <a href="#"> <span>Số lượng</span> </a>
                                </li>
                            </ul>
                            <p>
                                {{ $item->Mota }}
                            </p>

                            <form action="{{ URL::to('/save-cart') }}" method="post">
                                @csrf
                            <div class="product_count">
                                <label for="qty">Quantity:</label>
                                <input type="number" name="soluong" id="sst" maxlength="12"  id="sst"  value="1"
                                    title="Quantity:" class="input-text qty" />
                                    <input type="hidden" name="sp_id" value="{{ $item->id_sp }}"
                                 class="input-text qty" />
                                <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                    class="increase items-count" type="button">
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                                <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                    class="reduced items-count" type="button">
                                    <i class="lnr lnr-chevron-down"></i>
                                </button>
                            </div>

                            <div class="card_area">
                                <button class="main_btn" type="submit" class="icons">Thêm vào giỏ hàng</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>
                        Beryl Cook is one of Britain’s most talented and amusing artists
                        
                    </p>
                </div>
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="review_list">
                                @foreach ($cmt as $key => $sitem)
                                    
                               
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-3.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        {{ $sitem->Binh_luan }}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Add a Review</h4>

                                <form class="row contact_form" action="contact_process.php" method="post"
                                    id="contactForm" novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="binhluan" id="message" rows="1" placeholder="Review"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn submit_btn">
                                            Submit Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
