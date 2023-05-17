@extends('welcome')
@section('content')
    <h2  class="contact-title text-center">Giỏ hàng</h2>
    <div class="container">
      <div class="row">
 
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
        <form method="post" action="{{ URL::to('capnhatgiohang/') }}">
            @csrf
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
                                        <p>{{ $item->Mota }}</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ $item->Don_gia }}</td>
                            <td data-th="Quantity">
                                <input class="form-control input-text qty text-center" maxlength="12" 
                                    name="soluong_sp[{{ $item->id_sp }}]" id="sst" value="{{$carts[$item->id_sp]}}"
                                    type="number" >
                                   
                              
                        
                           
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
                    <td><input type="submit" class="btn btn-warning" value="Cập nhật giỏ hàng">
                    </td>
                    <td colspan="1" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>{{ number_format($thanhtien, 0, '', '.') }}</strong>
                    </td>
                  
                </tr>

            </table>
   
        <div class="row flex">   
          <div class="row-sm-3"><h2 class="contact-title text-center">Địa chỉ nhận hàng</h2></div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            {{-- <form class="form-contact contact_form" action="{{ URL::to('/thanhtoan') }}" method="post" id="contactForm" novalidate="novalidate"> --}}
              @csrf
              <div class="row ">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="ten" type="text" placeholder="Tên của bạn">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="sdt" type="text" placeholder="Số điện thoại">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="diachi" type="email" placeholder="Địa Chỉ Giao Hàng">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <div class="form-group">
                      <textarea class="form-control w-100" name="ghichu" id="message" cols="10" rows="3" placeholder="Ghi chú"></textarea>
                  </div>
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-12">
                <button type="submit" class="main_btn">Thanh toán</button>
              </div>
            {{-- </form> --}}     </form>
          </div>
        </div>
      </div>
        
    </div>
    <script>
        function quay_lai_trang_truoc() {
            history.back();
        }
    </script>
@endsection
