@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Cap nhat tai khoan
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            @foreach($suataikhoan as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-taikhoan/'.$edit->Ma_tk) }}" method="post">
                @csrf
                
            <div class="form-group">
                <label for="exampleInputEmail1">Ten tai khoan</label>
                <input name="tentk" class="form-control" id="exampleInputEmail1" value="{{ $edit->Tentaikhoan}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mat khau</label>
                <input name="matkhau" class="form-control" id="exampleInputEmail1"value="{{ $edit->Matkhau}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quyen</label>
                <input name="quyen"  class="form-control" id="exampleInputEmail1" value="{{ $edit->Quyen}}">
            </div>
        
            <button type="themncc" class="btn btn-info">Cap nhan nha cung cap</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection