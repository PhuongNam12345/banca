@extends('pages.danhmuc')
@section('content_s')

@endsection

{{-- <div class="row flex">

  <div class="col">    

    <div class="latest_product_inner">
      <div class="row">
          
          @foreach($sp_loai as $key =>$item)
        <div class="col-lg-4 col-md-6">
          <div class="single-product"> <img class="img-fluid w-75" src="{{ URL::to('public/uploads/sanpham/' . $sp->Hinh) }}" alt="" />
            <div class="product-img">
              <img
                class="card-img"                 
                src="{{asset('public/frontend/img/product/inspired-product/i1.jpg')}}" 
                alt=""
              />
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
                <h4>{{ $item->Ten_sp }}</h4>
               
              </a>
              <div class="mt-3">
                <span class="mr-4">{{ $item->Don_gia }}   </span>
           
                <span class="mr-4">{{ $item->id }}</span>             
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div> --}}