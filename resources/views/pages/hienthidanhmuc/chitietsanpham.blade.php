@extends('welcome')
@section('content_s')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0  ">
                        <h2>Chi tiết sản phẩm</h2>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    @foreach ($chitiet as $key => $item)
    <div class="product_image_area">
        <div class="container">
 
      
                <div class="row s_product_inner">
                    <div class="col-lg-6">
                        <div class="s_product_img">
                            <img class="img-fluid w-75" src="{{ URL::to('public/uploads/sanpham/' . $item->Hinh) }}">
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="s_product_text">
                          
                            <h3 class="s_product_name" style="text-transform:capitalize;    color: #1d4a2d;" > {{ $item->Ten_sp }}</h3>
                            <h2 class="mr-4">{{ number_format($item->Don_gia) . ' ' . 'VND' }}</h2>
                            <ul class="list">
                                <li>
                                    <a class="active" href="#">
                                        <span>Loại :</span> {{ $item->Ten_loai_sp }}</a>
                                </li>
                                <li>
                                    <a href="#"> <span>Số lượng :</span> {{ $item->So_luong }} </a>
                                </li>
                            </ul>
                            <p>
                                {{ $item->Mota }}
                            </p>

                            <form action="{{ URL::to('/save-cart') }}" method="post">
                                @csrf
                            <div class="product_count">
                                <label for="qty">Quantity:</label>
                                <input type="number" name="soluong" id="sst" maxlength="12"  value="1"
                                    title="Quantity:" class="input-text qty" />
                                    <input type="hidden" name="sp_id" value="{{ $item->id_sp }}"
                                 class="input-text qty" />
                                <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )&amp;&amp; sst < 15 ) result.value++;return false;"
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
   

        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">Bình luận</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>
                        {{-- Beryl Cook is one of Britain’s most talented and amusing artists --}}
                        
                    </p>
                </div>
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <form >
                                @csrf
                                <input type="hidden" class="id_binhluan_sp" name="id_binhluan_sp" value="{{ $item->id_sp }}">
                                <input type="hidden" class="id_binhlsusan_sp" name="ss" value="{{ $item->id_sp }}">
                                <div id="comment_show"></div>
                                <p></p>
                          
                           {{-- <div class="review_list"> 
                               @foreach ($cmt as $key => $sitem)
                                                        <input type="hidden" class="id_binhluan_sp" name="id_binhluan_sp" value="{{ $item->id_sp }}">
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
                                        {{ $item->Binh_luan }}
                                    </p>
                                </div>
              
                            </div> </div> --}}
                        </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4 class="" style="font-weight:700;">Thêm bình luận </h4>
                                @csrf  
                                <div id="comment_show1"></div>
                                <form action="">
                                   
                                    <input type="hidden" class="id_binhluan_sp" name="id_binhluan_sp" value="{{ $item->id_sp }}">
                                   <textarea  class="content_comment"  name="id_binhluan_sp" rows="3" cols="50" placeholder="Bình luận" required=""></textarea>
                                   <div  style="color: rgb(250, 11, 139);" required="">Đánh giá        </div>
                                 {{-- <input type="text" name="danhgia"  class="danhgiane"size="2" maxlength="5">  <i class="fa fa-star"></i>	  --}}
                                 <select name="danhgia" class="danhgiane" >
                           
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected>5</option>

                              
                                </select> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                 {{-- 2  <i class="fa fa-star"></i> <input type="radio" name="danhgia"   class="danhgiane" value="2"> 
                                   3  <i class="fa fa-star"></i> <input type="radio" name="danhgia"  class="danhgiane" value="3"> 
                                   4  <i class="fa fa-star"></i> <input type="radio" name="danhgia"   class="danhgiane" value="4"> 
                                   5  <i class="fa fa-star"></i> <input type="radio" name="danhgia"  class="danhgiane" value="5">  --}}
                             
                                   
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn submit_btn gui_binh_luan">
                                            Gửi
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
    @endforeach
@endsection
