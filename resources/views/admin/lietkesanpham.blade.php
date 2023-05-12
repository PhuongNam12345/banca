@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách sản phẩm
        </div>
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
            
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <form action="" >
               
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" name="tukhoa" placeholder="Tìm kiếm">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" ><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                    </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Màu sắc</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Hình ảnh</th>
                        <th>Nhà cung cấp</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lietkesanpham as $key => $item)                                   
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $item->Ten_sp }}</td>
                            <td>{{ $item->Ten_loai_sp }}</td>
                            <td><span class="text-ellipsis">{{ $item->Mota }}</span></td>
                            <td>{{ $item->Mau_sac }}</td>
                            <td>{{ $item->Don_gia }}</td>
                            <td>{{ $item->So_luong }}</td>
                            <td><img src="public/uploads/sanpham/{{ $item->Hinh }}" height="100" width="100"></td>
                            <td>{{ $item->Ten_ncc }}</td>
                            <td>
                                <a href="{{ URL::to('/suasanpham/'.$item->id_sp) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/xoasanpham/'.$item->id_sp) }}" onclick="return confirm('are you sure?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
            </table>
          <div> {{ $lietkesanpham->appends(REQUEST()->all())->links() }}</div>
        </div>
    </div>
@endsection
