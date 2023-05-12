@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Thêm tài khoản
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            <form role="form" action="{{ URL::to('them-taikhoan') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên tài khoản</label>
                <input name="tentk" class="form-control" id="exampleInputEmail1" placeholder="Ten nha cung cap">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input name="matkhau" class="form-control" id="exampleInputEmail1" placeholder="Dia chi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quyền</label>
                <input name="quyen"      class="form-control" id="exampleInputEmail1" placeholder="TEmail">
            </div>

            <button type="themtk" class="btn btn-info">Thêm tài khoản </button>
        </form>
        </div>

    </div>
</section>
@endsection