@extends('admin_layout')
@section('admin_content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách đơn hàng
        </div>
      
     
        <div class="row w3-res-tb">
            <div class="col-sm-3">
                <form method="GET" action="" class="input-group rounded col-md-8 w-auto align-items-center">
                <div class="form-outline">
                    <select name="search" class="form-select rounded">
                      <option value="">Chọn trạng thái</option>
                      @foreach($tinhtrang as $key => $item)
                        <option value="{{ $item->id }}">
                          {{ $item->Tinh_trang }}
                        </option>
                      @endforeach
                    </select>
                    <button type="submit" type="button" class="btn btn-dark">
                        <i class="fas fa-search"></i>
                  </div>
                </form>
            </div>
            <div class="col-sm-9 m-b-xs">
                {{-- <select class="input-sm form-control w-sm inline v-middle">
                  <option value="0">Bulk action</option>
                  <option value="1">Delete selected</option>
                  <option value="2">Bulk edit</option>
                  <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>                 --}}
                @php
                $message = Session::get('message');
                if ($message) {
                  echo '<span class="text text-succes" style="color: red;font-size:20px;text-align:center;">'.$message.'<span>';
                    Session::put('message', null);
                }
             
                @endphp
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
                        {{-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> --}}
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Tình trạng</th>                       
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donhang as $key => $item)  
                    @php 
                    $out='';
                    switch( $item->tinhtrang_id){
                          case 1:
                         $out.='<span class="btn btn-warning">Chờ duyệt</span>';
                   
                          break;
                          case 2: 
                          $out.='<span class="btn btn-success">Đặt thành công</span>';
                         
                              break;
                              case 3: 
                              $out.='<span class="btn btn-danger"> Hủy đơn hàng </span>';
                                  break;
              
                                
                      }
                      @endphp                                 
                        <tr>
                            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                            <td>{{ $item->id_hd }}</td>
                            <td><span class="text-ellipsis">{{ $item->Ten_kh }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Ngay_hd }}</span></td>
                            <td>@php echo $out @endphp</td>
                            <td>
                                <a href="{{ URL::to('/suadonhang/'.$item->id_hd) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/huydonhang/'.$item->id_hd) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <div> {{ $donhang->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
