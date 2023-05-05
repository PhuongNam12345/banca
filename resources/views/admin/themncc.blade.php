@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        Them danh muc nha cung cap
    </header>
  
    <div class="panel-body">
        <div class="position-center">
            <form role="form" action="{{ URL::to('them-ncc') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Ma nha cung cap</label>
                    <input name="mancc" class="form-control" id="exampleInputEmail1" placeholder="Ma nha cung cap">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten danh muc</label>
                <input name="tenncc" class="form-control" id="exampleInputEmail1" placeholder="Ten nha cung cap">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dia chi</label>
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
            <button type="themncc" class="btn btn-info">Them nha cung cap</button>
        </form>
        </div>

    </div>
</section>
@endsection