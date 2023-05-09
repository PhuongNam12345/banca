<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Fish</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/vendors/linericon/style.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/endors/owl-carousel/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/vendors/lightbox/simpleLightbox.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/vendors/nice-select/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/vendors/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/vendors/jquery-ui/jquery-ui.css')}} "/>
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header  class="header_area">
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{ URL::to('/') }}">
            <img src="{{asset('public/frontend/img/logo1.png')}}" alt="" />
          </a>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::to('/') }}">Trang chủ</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Cửa hàng</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('danhmuc/') }}">Danh mục </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('chitiet/') }}">Chi tiết sản phẩm</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="checkout.html">Product Checkout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cart.html">Shopping Cart</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Bài viết</a>
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
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ URL::to('/giohang') }}" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ URL::to('/admin') }}" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
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
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Hỗ trợ khách hàng</h4>
          <ul>
            <li><a href="#">Email: namdang@gmail.com</a></li>
            <li><a href="#">Điện thoại: 0792995628</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Về chúng tôi</h4>
          <ul>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Thông tin</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Features</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="{{asset('public/frontend/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/popper.js')}}"></script>
  <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/stellar.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{asset('public/frontend/js/mail-script.js')}}"></script>
  <script src="{{asset('public/frontend/js/theme.js')}}"></script>
</body>

</html>