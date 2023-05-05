@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Them danh muc san pham
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            <form role="form" action="{{ URL::to('them-danhmuc') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Ma danh muc</label>
                    <input name="madanhmuc" class="form-control" id="exampleInputEmail1" placeholder="Ma danh muc">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten danh muc</label>
                <input name="tendanhmuc" class="form-control" id="exampleInputEmail1" placeholder="Ten danh muc">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mo ta</label>
                <textarea style="resize: none" class="form-control" rows="5" name="mota"  ></textarea>
            </div>
                  
            <button type="themdanhmuc" class="btn btn-info">Them danh muc</button>
        </form>
        </div>

    </div>
</section>
@endsection