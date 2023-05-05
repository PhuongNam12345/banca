@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Them tai khoan
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            <form role="form" action="{{ URL::to('them-taikhoan') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Ma tai khoan</label>
                    <input name="matk" class="form-control" id="exampleInputEmail1" placeholder="Ma nha cung cap">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten tai khoan</label>
                <input name="tentk" class="form-control" id="exampleInputEmail1" placeholder="Ten nha cung cap">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mat khau</label>
                <input name="matkhau" class="form-control" id="exampleInputEmail1" placeholder="Dia chi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quyen</label>
                <input name="quyen"      class="form-control" id="exampleInputEmail1" placeholder="TEmail">
            </div>

            <button type="themtk" class="btn btn-info">Them tai khoan </button>
        </form>
        </div>

    </div>
</section>
@endsection