@extends('welcome')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
@section('content')
<div class="container text-center  mt-4">
    <div class="panel panel-default">
        <h1 style="color: brown" >
           Lịch Sử Đơn Hàng
        </h1>
      
     
        <div class="row w3-res-tb ">
            <div class="col-sm-6">
                <form method="GET" action="" class="input-group rounded col-md-8 w-auto align-items-center">
                <div class="form-outline mb-0">
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
            <div class="col-sm-6 m-b-xs">
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
        <div>
           
        </div>
        <div class="table-responsive table-dark">
            <table class="table table-striped b-t b-light border border-primary">
                <thead>
                    <tr>
                        {{-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> --}}
                        <th>STT</th>
                        <th>Địa chỉ nhận hàng</th>
                        <th>Email</th>
                        <th>Ngày đặt</th>
                        <th>Tình trạng</th>                       
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody> 
                     @php $i = 1 @endphp
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
                            <td>{{ $i }}</td>
                            <td><span class="text-ellipsis">{{ $item->Diachi }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Email_kh }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->Ngay_hd }}</span></td>
                            <td>@php echo $out @endphp</td>
                            <td>
                                
                            </td>
                        </tr>
                        @php $i++ @endphp 
                    @endforeach
                </tbody>
            </table>
      
        </div>
        <div> {{ $donhang->appends(REQUEST()->all())->links() }}</div>
    </div>
</div>
@endsection
