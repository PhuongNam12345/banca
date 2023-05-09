@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Cập nhật loại sản phẩm
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            @foreach($suadanhmuc as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-danhmuc/'.$edit->id) }}" method="post">
                @csrf
              
              
            <div class="form-group">
                <label for="exampleInputEmail1">Tên loại sản phẩm</label>
                <input name="tendanhmuc" value="{{ $edit->Ten_loai_sp}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="f   orm-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea style="resize: none"  class="form-control" rows="5" name="mota"  >{{ $edit->Mo_ta}}"</textarea>
            </div>
            
            <button type="submit" name="suadanhmuc" class="btn btn-info">Cập nhật</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection