<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <div class="container" style="text-align:center">
        <h1 style="text-align:center; color:red "> CỬA HÀNG CÁ CẢNH XÁC NHẬN ĐƠN HÀNG<h1>
                <h1 style="text-align:center; color:rgb(6, 248, 119) "> Đơn Hàng Đặt Thành Công</h1>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light" style="margin: auto">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody> @php
                            $thanhtien = 0;
                        @endphp @php $i = 1 @endphp
                            @foreach ($chitiet as $key => $items)
                                <tr>
                                    <td style="text-align:center;">{{ $i }}</td>
                                <td>
                                        <div class="">
                                            <span class="nomargin">{{ $items->Ten_sp }}</span>
        
                                        </div>
                                    </td>
                                    <td><span class="text-ellipsis">{{ $items->So_luong }}</span></td>
                                    <td><span class="text-ellipsis">{{ $items->Don_gia }}</span></td>
                                    @php
                                        $gia = $items->Don_gia;
                                        $soluong = $items->So_luong;
                                        $tong = $gia * $soluong;
                                    $thanhtien += $tong; @endphp
                                    <td><span class="text-ellipsis">{{ $tong }}</span></td>
                                    <td>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                            <tr>
                                <td> Tổng tiền </td>
                                <td colspan="3" class="hidden-xs"></td>
                                <td class="hidden-xs text-center" name="tongtien">
                                    <strong>{{ number_format($thanhtien, 0, '', '.') }}</strong>
                            </tr>
                        </tbody>
                        <tr> <td colspan="5" class="hidden-xs"></td> 
                            
                        </tr>
                    </table>
                   
                    <div class="row w3-res-tb " style="margin:auto;border: 1px solid;width:50%;" >
                        <h3  class="row-sm-5 m-b-30"> Thông Tin Khách Hàng </h3>
                        <div class="row-sm-5 m-b-xs">
                          <p> Tên người đặt:    &emsp;   &emsp; &nbsp;    {{ $donhang->Ten_kh }}</p>
                        </div>
                        <div class="row-sm-4 m-b-xs">
                            <p> Địa chỉ giao hàng: &emsp;  {{ $donhang->Diachi }}</p>
                        </div>
                        <div class="row-sm-3 m-b-xs">
                           <p>Số điện thoại: &emsp; &emsp;  &nbsp; {{ $donhang->Sdt }}</p>
                        </div>
                        <div class="row-sm-3 m-b-xs">
                            <p>Email:  &emsp; &emsp;   &emsp;  {{ $donhang->Email_kh }}</p>
                           
                        </div>
                    </div>
                    <p> Cảm ơn bạn {{ $donhang->Ten_kh }}</p>
                </div>
            </div>
</body>
</html>
