@extends('welcome')
@section('content')
    <!--================Header Menu Area =================-->
    <!--================Home Banner Area =================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <section class="banner_area">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active h-50">
                    <img class="d-block w-100 " src="{{ asset('public/frontend/img/banner/aa1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="{{ asset('public/frontend/img/banner/cabanner.jpg') }}"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="{{ asset('public/frontend/img/banner/aa2..jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 ">

                    <form method="GET" action="" class="input-group rounded col-md-8 w-auto align-items-center">
                        <div class="form-outline">
                            <select name="search" class="form-select rounded">
                                <option value="">Loại sản phẩm</option>
                                @foreach ($loaisp as $key => $sp)
                                    <option value="{{ $sp->id }}" >
                                        {{ $sp->Ten_loai_sp }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" type="button" class="btn btn-dark">
                                <i class="fas fa-search"></i>
                        </div>
                    </form>

                </div>
                <div class="col-sm-3 ml-auto ">
                    {{-- {{ URL::to('timkiem/')}}      @csrf --}}
                    <form action="">

                        <div class="input-group">
                            <input type="text" class="input-sm form-control" name="tukhoa" placeholder="Tìm kiếm">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Tìm kiếm</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <h2>Sản Phẩm </h2>
                    <div class="latest_product_inner">
                        <div class="row">

                            @foreach ($sp_loai as $key => $sp)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <img class="img-fluid w-75"
                                                src="{{ URL::to('public/uploads/sanpham/' . $sp->Hinh) }}">
                                            <div class="p_icon w-75">
                                                <a href="{{ URL::to('chitiet/' . $sp->id_sp) }}">
                                                    <i class="ti-eye"></i>
                                                </a>
                                                {{-- <a href="#">
                                                    <i class="ti-heart"></i>
                                                </a>

                                                <a href="#" data-url="" class="icons">
                                                    <i class="ti-shopping-cart"></i>
                                                </a> --}}
                                            </div>
                                        </div>
                                        <div class="product-btm">
                                            <a href="#" class="d-block">
                                                <h3>{{ $sp->Ten_sp }}</h3>
                                            </a>
                                            <div class="mt-3">
                                                <span class="mr-4">{{ number_format($sp->Don_gia) . ' ' . 'VND' }}</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                       
                    </div>

                </div>
                <div class="col-lg-12 ">
                {{ $sp_loai->appends(REQUEST()->all())->links() }}</div>

            </div>
    </section>


    <!--================Category Product Area =================-->
@endsection
