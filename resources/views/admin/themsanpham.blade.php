@extends('admin_layout')
@section('admin_content')
    <section class="panel">
        <header class="panel-heading">
          Thêm sản phẩm
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{ URL::to('them-sanpham') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input name="tensanpham" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Loại sản phẩm</label>
                        <select name="loaisp" class="form-control" id="exampleInputEmail1">
                            @foreach ($loai as $key => $item)
                                <option value="{{ $item->id }}">{{ $item->Ten_loai_sp }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <textarea style="resize: none" class="form-control" rows="5" name="mota"  placeholder="Mô tả" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Màu sắc</label>
                        <input name="mausac" class="form-control" id="exampleInputEmail1" placeholder="Màu sắc">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Đơn giá</label>
                        <input name="dongia" class="form-control" id="exampleInputEmail1" placeholder="Đơn giá ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số lượng</label>
                        <input name="soluong" class="form-control" id="exampleInputEmail1" placeholder="Số lượng ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input name="hinhanh" class="form-control" type="file" id="exampleInputEmail1"
                            placeholder="Ten danh muc">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhà cung cấp</label>
                        <select name="ncc" class="form-control" id="exampleInputEmail1">
                            @foreach ($ncc as $key => $item)
                                <option value="{{ $item->id }}">{{ $item->Ten_ncc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="themsanpham" class="btn btn-info">Xác nhận</button>
                </form>
            </div>

        </div>
    </section>
@endsection
