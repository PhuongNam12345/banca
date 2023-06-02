@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Cập nhật thông tin khách hàng
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            @foreach($suakhachhang as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-khachhang/'.$edit->id) }}" method="post">
                @csrf
                
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khách hàng</label>
                <input name="tenkh" class="form-control" id="exampleInputEmail1" value="{{ $edit->Ten_kh}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giới tính </label>
                <div class="gioitinh" style="color: rgb(111 104 104);" >
                    Nam <input type="radio"  name="gioitinh" value="1"  {{ ( $edit->Gioitinh== 1) ? 'checked' : '' }}> &emsp;	
                    Nữ <input type="radio" name="gioitinh" value="2" {{ ( $edit->Gioitinh == 2) ? 'checked' : '' }}>
                    </div> 
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ $edit->Email_kh}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SDT</label>
                <input type='number' name="sdt" class="form-control" id="exampleInputEmail1" value="{{ $edit->Sdt}}">
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input name="diachi" class="form-control" id="exampleInputEmail1"value="{{ $edit->Diachi}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tài khoản</label>
                <input name="taikhoan" class="form-control" id="exampleInputEmail1"value="{{ $edit->Tentaikhoan}}" disabled>
            </div>
            <button type="themncc" class="btn btn-info">Cập nhật</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection