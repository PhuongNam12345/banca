@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Thêm nhà cung cấp
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            @foreach($suancc as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-ncc/'.$edit->id) }}" method="post">
                @csrf
                
            <div class="form-group">
                <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                <input name="tenncc" class="form-control" id="exampleInputEmail1" value="{{ $edit->Ten_ncc}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input name="diachi" class="form-control" id="exampleInputEmail1"value="{{ $edit->Diachi}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ $edit->Email_ncc}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SDT</label>
                <input type='number' name="sdt" class="form-control" id="exampleInputEmail1" value="{{ $edit->Sdt}}">
            </div>   
            <button type="themncc" class="btn btn-info">Cập nhật</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection