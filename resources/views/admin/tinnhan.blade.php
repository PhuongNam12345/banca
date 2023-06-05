@extends('admin_layout')
@section('admin_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Tin nhắn
        </div>
   
        @php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
     
        @endphp

    
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>     <th >STT</th>     
                        <th style="width:200px;">Tên khách hàng</th>
                        <th style="width:70px;">Email</th>
                        <th style="width:300px;" >Chủ đề</th>
                        <th>Tin nhắn</th>
                        <th>Ngày gửi</th>
                        <th style="width:50px;"></th>
                    </tr>
                </thead> @php $i = 1 @endphp
                <tbody>
                    @foreach($lietke as $key => $item)                                   
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->Ten_kh }}</td>
                        
                            <td><span class="text-ellipsis">{{ $item->Email_kh }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->chu_de }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->noi_dung }}</span></td>
                            <td><span class="text-ellipsis">{{ $item->ngay_gui }}</span></td>
                            <td>                             
                                <a href="{{ URL::to('/xoatinnhan/'.$item->id_tn) }}" onclick="return confirm('bạn chắc chắn xóa?');"  class="active" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr> @php $i++ @endphp 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div> {{ $lietke->appends(REQUEST()->all())->links() }}</div>
    </div>
@endsection
