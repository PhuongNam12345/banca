@extends('welcome')
@section('content_ss')
<section class="feature_product_area section_gap_bottom_custom_new">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
         

          <div class="main_title">
            {{-- @foreach ($loaisp as $key => $item)
            <h2><span> {{ $item->Ten_loai_sp }} </span></h2>
            @endforeach --}}
            <h2> {{$name}}</h2>
            <p>Các sản phẩm hot trên thị trường</p>
     
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($loaisp as $key=>$sp)
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
@endsection