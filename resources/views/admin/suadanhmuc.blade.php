@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Cap nhat danh muc san pham
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            @foreach($suadanhmuc as $key=>$edit) 
            <form role="form" action="{{ URL::to('/sua-danhmuc/'.$edit->Ma_loai_sp) }}" method="post">
                @csrf
              
                <div class="form-group">
                    <label for="exampleInputEmail1">Ma danh muc</label>
                    <input name="madanhmuc" class="form-control" id="exampleInputEmail1" value="{{ $edit->Ma_loai_sp}}" >
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten danh muc</label>
                <input name="tendanhmuc" value="{{ $edit->Ten_loai_sp}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="f   orm-group">
                <label for="exampleInputEmail1">Mo ta</label>
                <textarea style="resize: none"  class="form-control" rows="5" name="mota"  >{{ $edit->Mo_ta}}"</textarea>
            </div>
            
            <button type="submit" name="suadanhmuc" class="btn btn-info">cap nhat danh muc</button>
        </form>
        @endforeach
        </div>

    </div>
</section>
@endsection