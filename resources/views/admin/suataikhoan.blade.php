@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Cập nhật tài khoản
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            @foreach($suataikhoan as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-taikhoan/'.$edit->id) }}" method="post">
                @csrf
                
            <div class="form-group">
                <label for="exampleInputEmail1">Tên tài khoản</label>
                <input name="tentk" class="form-control" id="exampleInputEmail1" value="{{ $edit->Tentaikhoan}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input name="matkhau" class="form-control" id="exampleInputEmail1"value="{{ $edit->Matkhau}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quyền</label>
                <input name="quyen"  class="form-control" id="exampleInputEmail1" value="{{ $edit->Quyen}}">
            </div>
        
            <button type="themncc" class="btn btn-info">Cập nhật tài khoản</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection