@extends('admin_layout')
@section('admin_content')
<div class="container text-center">
<span style="font-size: 35px; color:rgb(17, 8, 63)"> <b>Thống Kê Cửa Hàng</b></span>

<div class="market-updates ">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3 " >
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
             <div class="col-md-8 market-update-left">
             <h4>Khách Hàng</h4>
            <h3>{{ $khachhang }}</h3>

          </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-book" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Sản phẩm</h4>
                <h3>{{ $sanpham }}</h3>
             
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <div class="col-md-4 market-update-right">
                
                <i class="fa fa-tasks"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Loại sản phẩm</h4>
                <h3>{{ $loaisp }}</h3>
 
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-user-secret"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Nhà cung cấp</h4>
                <h3>{{ $ncc }}</h3>
 
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn hàng</h4>
                <h3>{{ $donhang }}</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class='fa fa-bell'></i>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn chờ duyệt</h4>
                <h3>{{ $duyet }}</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
            <div class="col-md-4 market-update-right">
                <i class='fa fa-window-close'></i>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn hủy</h4>
                <h3>{{ $donhuy }}</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
   <div class="clearfix"> </div>
</div>	</div>
@endsection