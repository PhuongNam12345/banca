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
                <h1 style="text-align:center; color:red "> Đơn Hàng Bị Hủy</h1>
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
                        <tr> <td colspan="4" class="hidden-xs"></td> 
                            <span class="text text-succes" style="color: red;font-size:20px;text-align:center;">Đã Hủy<span>
                        </tr>
                    </table>
                    <p> Cảm ơn bạn {{ $donhang->Ten_kh }}</p>
                </div>
            </div>
</body>
</html>
