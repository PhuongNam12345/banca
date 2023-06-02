@extends('welcome')
@section('content')
 <div class="container text-center m-auto">
<h2  class="contact-title text-center">Giỏ hàng</h2>
    <div class="container ">
      <div class="row">
 
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp
        {{-- action="{{ URL::to('capnhatgiohang/') }}" --}}
        <form method="post" >
          
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Tên sản phẩm</th>
                        <th style="width:10%">Giá</th>
                        <th style="width:8%">Số lượng</th>
                        <th style="width:22%" class="text-center">Thành tiền</th>
                        <th style="width:10%"> </th>
                    </tr>
                </thead>
                @php
                    $thanhtien = 0;
                @endphp
                <tbody>
                    @foreach ($products as $key => $item)
                        @php
                            $gia = $item->Don_gia;
                            $soluong = $carts[$item->id_sp];
                            $tong = $gia * $soluong;
                            $thanhtien += $tong;
                            
                        @endphp
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"> <img class="img-fluid w-75"
                                            src="{{ URL::to('public/uploads/sanpham/' . $item->Hinh) }}">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{{ $item->Ten_sp }}</h4>
                                        {{-- <p>{{ $item->Mota }}</p> --}}
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ $item->Don_gia }}</td>
                            <td data-th="Quantity">
                                <input class="form-control input-text qty text-center" maxlength="15" 
                                    name="soluong_sp[{{ $item->id_sp }}]" id="sst" value="{{$carts[$item->id_sp]}}"
                                    type="number"  >
                                   
                              
                        
                           
                            </td>
                            
                            <td data-th="Subtotal" class="text-center">{{ $tong }}</td>
                            <td class="actions" data-th="">
                         
                                <a class="btn btn-danger btn-sm" href="{{ URL::to('/xoa/' . $item->id_sp) }}"
                                    onclick="return confirm('Bạn chắc chắn xóa ?');"><i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>

                </tbody>
                <tr class="visible-xs">
                    <td class="text-center"><strong></strong>
                    </td>
                </tr>
                <tr>
                    @endforeach
                    {{-- onclick="quay_lai_trang_truoc()" --}}
                    <td><a href=" {{ URL::to('/danhmuc') }} "class="btn btn-warning">Tiếp tục mua hàng</a>
                    </td>
                    <td><input type="submit" formaction="{{ URL::to('capnhatgiohang/') }}" class="btn btn-warning" value="Cập nhật giỏ hàng">
                      @csrf </td>
                    <td colspan="1" class="hidden-xs"></td>
                    <td class="hidden-xs text-center" name= "tongtien" ><strong>{{ number_format($thanhtien, 0, '', '.') }}</strong>
                      <input type="hidden"  name="tongtien" value="{{ $thanhtien}}">
                    </td>
                  
                </tr>

            </table>
            <div class="row-sm-6"><h2 class="contact-title text-center">Địa chỉ nhận hàng</h2></div>
            <p style="color: red">Chú ý: Thông tin nhận hàng được lấy từ thông tin trang cá nhân, để cập nhật vui lòng cập nhật ở trang cá nhân</p>
        <div class="row flex">   
         
          @foreach ($lietke as $key => $khach) 
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Tên</p>
                  </div>
                  <div class="col-sm-8">
                    <p class="text-muted mb-0">{{  $khach->Ten_kh }}</p>
                    
                  </div>
                 
                </div>
           
         
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-8">
                    <p class="text-muted mb-0">{{  $khach->Email_kh }}</p>
                  </div>
                  
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">SDT</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{  $khach->Sdt }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Địa chỉ</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{  $khach->Diachi }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                 
                
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="main_btn" >Đặt Hàng</button>
            </div>
           
            {{-- <div class="row">
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                    </p>
                    <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                    <div class="progress rounded mb-2" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                    </p>
                    <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                    <div class="progress rounded" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                    <div class="progress rounded mb-2" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          @endforeach
          {{-- <div class="col-lg-4 mb-4 mb-lg-0">
    
              @csrf
              @foreach ($lietke as $key => $khach) 
              <div class="row ">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="ten" type="text" value="{{$khach->Ten_kh }}" disabled>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="sdt" id="sdt" type="text"  disabled>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="diachi" type="email"  disabled>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <div class="form-group">
                      <textarea class="form-control w-100" name="ghichu" id="message" cols="10" rows="3" disabled></textarea>
                  </div>
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-12">
                <button type="submit" class="main_btn" >Thanh toán</button>
                @csrf
              </div>
         @endforeach
          </div> --}}
       
        </div>
      </div>
    </form>
    </div>
    <script>
        function quay_lai_trang_truoc() {
            history.back();
        }
    </script>
    </div>  
@endsection
