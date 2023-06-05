@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách khách hàng
        </div>
      
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
               
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" name="tukhoa" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
                        </span>
                    </div>
                    </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th>Địa chỉ</th>
                        <th>Tài khoản</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody> @php $i = 1 @endphp
                    @foreach($lietkekhachhang as $key => $item)                                   
                        <tr>       <td>{{ $i }}</td>
                            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                            <td>{{ $item->Ten_kh }}</td>
                            <td> @php
                                if( $item->Gioitinh == 1){
                                   echo "Nam";
                                     }else {
                                         echo "Nữ";
                                     }
                                 @endphp</p></td>
                            <td>{{ $item->Email_kh }}</td>
                            <td>{{ $item->Sdt }}</td>
                            <td>{{ $item->Diachi }}</td>
                            <td>{{ $item->Tentaikhoan }}</td>
                            <td>
                                <a href="{{ URL::to('/suakhachhang/'.$item->id) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/xoakhachhang/'.$item->id) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr> @php $i++ @endphp 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div> {{ $lietkekhachhang->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
