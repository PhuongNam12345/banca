@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Loại sản phẩm
        </div>
      
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp
        <div class="row w3-res-tb">
            <div class="col-sm-3 m-b-xs">
               
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" name="tukhoa" placeholder="Search">
                    
                            <button class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
                    
                    </div>
                    </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên loại sản phẩm</th>
                        <th>Mô tả</th>
                       
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody> @php $i = 1 @endphp
                    @foreach($lietkedanhmuc as $key => $item)                                   
                        <tr>
                            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                            <td>{{ $i }}</td> <td>{{ $item->Ten_loai_sp }}</td>
                            <td><span class="text-ellipsis">{{ $item->Mo_ta }}</span></td>
                            <td>
                                <a href="{{ URL::to('/suadanhmuc/'.$item->id) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/xoadanhmuc/'.$item->id) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr> @php $i++ @endphp 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div> {{ $lietkedanhmuc->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
