@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Thêm khách hàng
    </header>
  
    <div class="panel-body">
        <div class="position-center">
     
            <form role="form" action="{{ URL::to('them-khachhang') }}" method="post">
                @csrf
                
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khách hàng</label>
                <input name="tenkh" class="form-control" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giới tính</label>
                <input name="gioitinh" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SDT</label>
                <input type='number' name="sdt" class="form-control" id="exampleInputEmail1" >
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input name="diachi" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tài khoản</label>
                <input name="taikhoan" class="form-control" id="exampleInputEmail1">
            </div>
            <button type="themncc" class="btn btn-info">Thêm khách hàng</button>
        </form>

        </div>

    </div>
</section>
@endsection