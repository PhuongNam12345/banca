@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách nhà cung cấp
        </div>
      
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp
        <div class="row w3-res-tb">
         
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
            <table class="table table-striped b-t b-light "width="50px">
                <thead>
                    <tr>
                    
                        <th>Tên nhà cung cấp</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lietkencc as $key => $item)                                   
                        <tr>
                            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                            <td>{{ $item->Ten_ncc }}</td>
                            <td><span class="text-ellipsis">{{ $item->Diachi }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Email_ncc }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Sdt }}</span></td>
                            <td>
                                <a href="{{ URL::to('/suancc/'.$item->id) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/xoancc/'.$item->id) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div> {{ $lietkencc->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
