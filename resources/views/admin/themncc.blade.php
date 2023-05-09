@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Thêm nhà cung cấp
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            <form role="form" action="{{ URL::to('them-ncc') }}" method="post">
                @csrf
              
            <div class="form-group">
                <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                <input name="tenncc" class="form-control" id="exampleInputEmail1" placeholder="Ten nha cung cap">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input name="diachi" class="form-control" id="exampleInputEmail1" placeholder="Dia chi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="TEmail">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SDT</label>
                <input type='number' name="sdt" class="form-control" id="exampleInputEmail1" placeholder="SDT">
            </div>   
            <button type="themncc" class="btn btn-info">Xác nhận</button>
        </form>
        </div>

    </div>
</section>
@endsection