@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Them san pham
    </header> 
    <div class="panel-body">
        <div class="position-center">
            @foreach($suasanpham as $key=>$edit) 
            <form role="form" action="{{ URL::to('sua-sanpham') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                    <input type="text" name="masanpham" class="form-control" id="exampleInputEmail1" value="{{ $edit->Ma_sp}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Loại sản phẩm</label>
                    <select name="tendanhmuc" class="form-control" id="exampleInputEmail1" value="{{ $edit->Ma_loai_sp}}">
                        @foreach($loai as $key=>$editloai)
                        @if($editloai->Ma_loai_sp==$edit->Ma_loai_sp)
                        <option selected value="{{ $editloai->Ma_loai_sp }}" >{{ $editloai->Ten_loai_sp }}</option>
                        @else
                        <option value="{{ $editloai->Ma_loai_sp }}" >{{ $editloai->Ten_loai_sp }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input name="tensanpham" class="form-control" id="exampleInputEmail1"value="{{ $edit->Ten_sp}} ">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
    
                <textarea style="resize: none" class="form-control" rows="5" name="mota"  >{{ $edit->Mota}}</textarea>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Màu sắc</label>
                <input name="tendanhmuc" class="form-control" id="exampleInputEmail1" value="{{ $edit->Mau_sac}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đơn giá</label>
                <input name="dongia" class="form-control" id="exampleInputEmail1" value="{{ $edit->Don_gia}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh</label>
                <input name="hinhanh" class="form-control"  type="file" id="exampleInputEmail1" value="{{ $edit->Hinh}}">
                <img src="{{ url::to("public/uploads/sanpham/".$edit->Hinh) }}"  height="100" width="100">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nhà cung cấp</label>
                <select name="tendanhmuc" class="form-control" id="exampleInputEmail1" value="{{ $edit->Ma_ncc}}">
                    @foreach($ncc as $key=>$editncc)
                    @if($editncc->Ma_ncc==$edit->Ma_ncc)
                    <option selected value="{{ $editncc->Ma_ncc }}" >{{ $editncc->Ten_ncc }}</option>
                    @else
                    <option value="{{ $editncc->Ma_ncc }}" >{{ $editncc->Ten_ncc }}</option>
                    @endif
                        @endforeach
                </select>
            </div>
                  
            <button type="capnhatsanpham" class="btn btn-info">Cập nhật sản phẩm</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection