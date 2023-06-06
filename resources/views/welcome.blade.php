<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Fish</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/vendors/linericon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/endors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/vendors/lightbox/simpleLightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/vendors/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/vendors/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/vendors/jquery-ui/jquery-ui.css') }} " />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}" />
    

</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ URL::to('/') }}">
                        <img src="{{ asset('public/frontend/img/logo1.png') }}" alt="" />
                    </a>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-8 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" style="font-size: 20px" href="{{ URL::to('/') }}">Trang chủ</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a  href="{{ URL::to('danhmuc/') }}"class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" style="font-size: 20px"aria-expanded="false">Sản phẩm</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('danhmuc/') }}">Tất cả</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('/loaisp/' . 2) }}">Cá cảnh</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('/loaisp/' . 1) }}">Thức ăn </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('/loaisp/' . 3) }}">Dụng cụ </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="{{ URL::to('blog/') }}" class="nav-link dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"style="font-size: 20px">Bài viết</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('blog/') }}">Vua cá cảnh </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('blog1/') }}">Ngắm cá cảnh </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('blog2/') }}">Cá vàng lớn nhất</a>
                                            </li>

                                        </ul>
                                    </li>
                                
                                    <li class="nav-item">
                                        <a class="nav-link" style="font-size: 20px" href="{{ URL::to('lienhe/') }}">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-4 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                    {{-- <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li> --}}

                                    <li class="nav-item">
                                        <a href="{{ URL::to('/giohang') }}" class="icons">
                                            <i class="ti-shopping-cart" data-notify=2></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ URL::to('/muahang') }}" class="icons">
                                            <i class="ti-menu" data-notify=2></i>
                                        </a>
                                    </li>
                                    {{-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                         data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div> --}}
                                    <li class="nav-item">
                                        <a href="{{ URL::to('/canhan') }}" class="icons">
                                            <i class="ti-user" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ URL::to('/logout') }}" class="icons">
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    </section>
    @yield('content')
    @yield('content_s')
    @yield('content_ss')
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 single-footer-widget">
                    <h4>Hỗ trợ khách hàng</h4>
                    <ul>
                        <li><a href="#">Email: namdang@gmail.com</a></li>
                        <li><a href="#">Điện thoại: 0792995628</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 single-footer-widget">
                    <h4>Về chúng tôi</h4>
                    <ul>
                        <li><a href="{{ URL::to('/') }}">Trang chủ</a></li>
                        <li><a href="{{ URL::to('danhmuc/') }}">Sản phẩm</a></li>
                        <li><a href="{{ URL::to('blog/') }}">Bài viết</a></li>
                        <li><a href="{{ URL::to('lienhe/') }}">Liên hệ</a></li>
                    </ul>
                </div>
              
            </div>
        
        </div>
    </footer>
    <!--================ End footer Area  =================-->
    {{-- <script>
  function addTo(event){
    event.preventDefault();
    let urlCart=$(this).data('url');
    $.ajax({
      type:'GET',
      url: urlCart,
      dataType:'json',
      success: function(data){

      },

    })

  }
  </script> --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/esm/popper.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    <script src="{{ asset('public/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/popper.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/stellar.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('public/frontend/js/mail-script.js') }}"></script>
    <script src="{{ asset('public/frontend/js/theme.js') }}"></script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
                    // var product_it=$('.id_binhluan_sp').val();
                    // alert(product_it)
                    binh_luan();

                    function binh_luan() {
                        //   var product_it=$('.id_binhluan_sp').val();
                        // alert(product_it)

                        var product_id = $('.id_binhluan_sp').val();
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: "{{ url('/binh-luan') }}",
                            method: "POST",
                            data: {
                                product_id: product_id,
                                _token: _token
                            },
                            success: function(data) {
                                $('#comment_show').html(data);
                            }
                        });
                    }
                    var product_id = $('.id_binhluan_sp').val();
                  
                    
                  $('.gui_binh_luan').click(function() {
                     
                            var product_id = $('.id_binhluan_sp').val();
                            var content = $('.content_comment').val();
                            var danhgia = $('.danhgiane').val();
                            var _token = $('input[name="_token"]').val();
                            // alert(content)
                            $.ajax({
                                    url: "{{ url('/gui-binh-luan') }}",
                                    method: "POST",
                                    data: {
                                        product_id: product_id,
                                        binh_luan: content,
                                        danhgia: danhgia,
                                        _token: _token
                                    },
                                    success: function(data) {
                                   
                                        $('#comment_show1').html('<span class="text text-succes">Thêms bình luận thành công<span>');
                                            binh_luan();  
                                             $('#comment_show1').fadeOut(10000);
                                             
                                    }});
                            })
                        }
                );
    </script>

</body>

</html>
