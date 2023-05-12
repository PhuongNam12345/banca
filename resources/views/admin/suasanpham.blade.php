@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Cập nhật sản phẩm
    </header> 
    <div class="panel-body">
        <div class="position-center">
            @foreach($suasanpham as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-sanpham/'.$edit->id_sp) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input name="tensanpham" class="form-control" id="exampleInputEmail1"value="{{ $edit->Ten_sp}} ">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Loại sản phẩm</label>
                    <select name="tendanhmuc" class="form-control" id="exampleInputEmail1" value="{{ $edit->loaisp_id}}">
                        @foreach($loai as $key=>$editloai)
                        @if($editloai->id==$edit->loaisp_id)
                        <option selected value="{{ $editloai->id }}" >{{ $editloai->Ten_loai_sp }}</option>
                        @else
                        <option value="{{ $editloai->id }}" >{{ $editloai->Ten_loai_sp }}</option>
                        @endif
                        @endforeach
                    </select>
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
                <label for="exampleInputEmail1">Số lượng</label>
                <input name="soluong" class="form-control" id="exampleInputEmail1" value="{{ $edit->So_luong}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh</label>
                <input name="hinhanh" class="form-control"  type="file" id="exampleInputEmail1" value="{{ $edit->Hinh}}">
                <img src="{{ url::to("public/uploads/sanpham/".$edit->Hinh) }}"  height="100" width="100">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nhà cung cấp</label>
                <select name="tendanhmuc" class="form-control" id="exampleInputEmail1" value="{{ $edit->nhacungcap_id}}">
                    @foreach($ncc as $key=>$editncc)
                    @if($editncc->id==$edit->nhacungcap_id)
                    <option selected value="{{ $editncc->id }}" >{{ $editncc->Ten_ncc }}</option>
                    @else
                    <option value="{{ $editncc->id }}" >{{ $editncc->Ten_ncc }}</option>
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