@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách tài khoản
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
                <form action="" >
               
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" name="tukhoa" placeholder="Tìm kiếm">
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
                        {{-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> --}}   <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Quyền</th>
                       
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody> @php $i = 1 @endphp
                    @foreach($lietketaikhoan as $key => $item)                                   
                        <tr>       <td>{{ $i }}</td>
                            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                            <td>{{ $item->Tentaikhoan }}</td>
                            <td><span class="text-ellipsis">{{ $item->Matkhau }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Quyen }}</span></td>
                
                            <td>
                                <a href="{{ URL::to('/suataikhoan/'.$item->id) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/xoataikhoan/'.$item->id) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr> @php $i++ @endphp 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div> {{ $lietketaikhoan->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
