@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách đơn hàng
        </div>
      
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp
               @foreach($donhang as $key => $item)     
        <div class="row w3-res-tb " style="margin:15px;border: 1px solid;width:50%;" >
            <h3  class="row-sm-5 m-b-30"> Thông Tin Khách Hàng </h3>
            <div class="row-sm-5 m-b-xs">
              <p> Tên người đặt:    &emsp;   &emsp; &nbsp;    {{ $item->Ten_kh }}</p>
            </div>
            <div class="row-sm-4 m-b-xs">
                <p> Địa chỉ giao hàng: &emsp;  {{ $item->Diachi }} </p>
            </div>
            <div class="row-sm-3 m-b-xs">
               <p>Số điện thoại: &emsp; &emsp;  &nbsp; {{ $item->Sdt }}</p>
            </div>
            <div class="row-sm-3 m-b-xs">
                <p>Email:  &emsp; &emsp;   &emsp;   &emsp;   &emsp;  {{ $item->Email_kh }}</p>
               
            </div>
        </div>@endforeach
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        {{-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> --}}
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>                       
                        <th style="width:30px;"></th>
                    </tr>
                  
                </thead>
                <tbody>   @php $i = 1 @endphp
                    @foreach($chitiet as $key => $items)                     
                        <tr>
                         
                                         
                                                 
                                                
                                                        {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                                                                                
                                                        
                                                         
                            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                          
                       
                                                          
                                  <td>{{ $i }}</td>
                             
                          
                            <td>  <div class="">
                                <span class="nomargin">{{ $items->Ten_sp }}</span>
                                {{-- <p>{{ $item->Mota }}</p> --}}
                            </div>
                                <img class="img-fluid m-w-25" width="100px" 
                                        src="{{ URL::to('public/uploads/sanpham/' . $items->Hinh) }}">
                              
                              
                           </td>
                            
                            <td><span class="text-ellipsis">{{ $items->So_luong }}</span></td>
                            <td><span class="text-ellipsis">{{ $items->Don_gia }}</span></td>
                            @php
                            $gia = $items->Don_gia;
                            $soluong = $items->So_luong;
                            $tong = $gia * $soluong;        @endphp
                            <td><span class="text-ellipsis">{{  $tong }}</span></td>
                            
                
                            <td>
                                {{-- <a href="{{ URL::to('/suadonhang/'.$item->id_hd) }}" class="active" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>      
                                <a href="{{ URL::to('/xoadonhang/'.$item->id_hd) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a> --}}
                            </td>
                        </tr>

                     
                        @php $i++ @endphp 
                    @endforeach
                    <tr>
                        
                     
                     
                        <td colspan="3" class="hidden-xs"></td>
                        <td colspan="1" class="hidden-xs">  <a href="{{ URL::to('/sua-donhang/'.$item->id_hd) }}" type="submit" name="duyetdon" class="btn btn-info">Duyệt đơn</button></a>
                        <td colspan="1" class="hidden-xs">  <a href="{{ URL::to('/huydonhang/'.$item->id_hd) }}" type="submit" name="duyetdon" class="btn btn-info">Hủy đơn</button></a>
                      
                    </tr>
                </tbody> 
                
       
            </table>
        </div> 
        {{-- <div> {{ $donhang->appends(REQUEST()->all())->links() }}</div> --}}
    </div>
@endsection
