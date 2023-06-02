@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Bình luận
        </div>
   
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp
 <div class="row w3-res-tb">
    <div class="col-sm-5">
        <form method="GET" action="" class="input-group rounded col-md-8 w-auto align-items-center">
        <div class="form-outline">
            <select name="search" class="form-select rounded">
              <option value="">Chọn sản phẩm</option>
              @foreach($sanpham as $key => $sp)
                <option value="{{ $sp->id_sp }}">
                  {{ $sp->Ten_sp }}
                </option>
              @endforeach
            </select>
            <button type="submit" type="button" class="btn btn-dark">
                <i class="fas fa-search"></i>
          </div>
        </form>
    </div>
    <div class="col-sm-7 m-b-xs">
        {{-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                 --}}
        {{-- <form method="GET" action="" class="input-group rounded col-md-8 w-auto align-items-center">
            <div class="form-outline">
                <select name="searchs" class="form-select rounded">
                  <option value="">Chọn sản phẩm</option>
                  @foreach($danhgia as $key => $sps)
                    <option value="{{ $sps->Danh_gia }}">
                      {{ $sps->Danh_gia }}
                    </option>
                  @endforeach
                </select>
                <button type="submit" type="button" class="btn btn-dark">
                    <i class="fas fa-search"></i>
              </div>
            </form> --}}
      </div>
          
  
  
    {{-- <div class="row d-flex justify-content-md-between mb-3">
        <form method="GET" action="/admin/orders/list" class="input-group rounded col-md-8 w-auto align-items-center">
          <div class="form-outline">
            <select name="search" class="form-select rounded">
              <option value="">Chọn trạng thái</option>
              @foreach($tinhtrang as $key => $item)
                <option value="{{ $item->id }}">
                  {{ $item->Tinh_trang }}
                </option>
              @endforeach
            </select>
          </div>
          <button type="submit" type="button" class="btn btn-dark">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div> --}}
</div>
    
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>       
                        <th >Tên khách hàng</th>
                        <th >Tên tài khoản</th>
                        <th >Tên sản phẩm</th>
                        <th >Bình luận </th>
                        <th>Đánh giá</th>
                        <th style="width:50px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lietke as $key => $item)                                   
                        <tr>
                           
                            <td>{{ $item->Ten_kh }}</td>
                        
                            <td><span class="text-ellipsis">{{ $item->Tentaikhoan }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Ten_sp }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Binh_luan }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Danh_gia }}</span></td>
                            <td>                             
                                <a href="{{ URL::to('/xoabinhluan/'.$item->id_bl) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div> {{ $lietke->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
