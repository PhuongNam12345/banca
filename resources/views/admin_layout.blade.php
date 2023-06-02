<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css"/>
<link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css"/>
<!-- calendar -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" href="{{ asset('public/backend/css/monthly.css') }}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{ asset('public/backend/js/jquery2.0.3.min.js') }}"></script>
<script src="{{ asset('public/backend/js/raphael-min.js') }}"></script>
<script src="{{ asset('public/backend/js/morris.js') }}"></script>
</head>
<body>
   
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<div class="brand">
    <a href="index.html" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
     
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle"href=""> 
                <img alt="" src="images/2.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                {{-- <li><a href="#"><i class=" fa fa-suitcase"></i>Ca nhan</a></li> --}}
                <li><a href="{{ URL::to('/logout') }}"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="{{URL::to('/lietkedanhmuc')}}">
                        <i class="fa fa-tasks"></i>
                        <span>Loại Sản Phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/themdanhmuc')}}"> Thêm loại sản phẩm</a></li>
						<li><a href="{{URL::to('/lietkedanhmuc')}}">Danh sách loại sản phẩm</a></li>
                        
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="{{URL::to('/lietkencc')}}">
                        <i class="fa fa-user-secret"></i>
                        <span>Nhà Cung Cấp</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/themncc')}}">Thêm nhà cung cấp</a></li>
						<li><a href="{{URL::to('/lietkencc')}}">Danh sách nhà cung cấp</a></li>
                        
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="{{URL::to('/lietkesanpham')}}">
                        <i class="fa fa-book"></i>
                        <span>Sản Phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/themsanpham')}}">Thêm sản phẩm</a></li>
						<li><a href="{{URL::to('/lietkesanpham')}}">Danh sách sản phẩm</a></li>
                      
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="{{URL::to('/lietkekhachhang')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                          </svg>
                        <span>Khách hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/themkhachhang')}}">Thêm khách hàng</a></li>
						<li><a href="{{URL::to('/lietkekhachhang')}}">Danh sách khách hàng</a></li>
                      
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="{{URL::to('/lietketaikhoan')}}">
                        <i class="fa fa-user"></i>
                        <span>Tài khoản</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/themtaikhoan')}}">Thêm tài khoản</a></li>
						<li><a href="{{URL::to('/lietketaikhoan')}}">Danh sách tài khoản</a></li>
                        
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="{{URL::to('/lietketaikhoan')}}">
                        <i class="  fa fa-shopping-cart"></i>
                        <span>Giò hàng</span>
                    </a>
                    <ul class="sub">
						{{-- <li><a href="{{URL::to('/themtaikhoan')}}"></a></li> --}}
						<li><a href="{{URL::to('/donhang')}}">Danh sách đơn hàng</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('/tinnhan')}}">
                        <i class="  fa fa-envelope"></i>
                       
                        <span>Tin nhắn</span>
                    </a>
                  
                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('/binhluan')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                          </svg>
                        <span>Bình Luận</span>
                    </a>
                  
                </li>
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		@yield('admin_content')
						
</section>
 <!-- footer -->
		  {{-- <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div> --}}
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('public/backend/js/scripts.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="{{ asset('public/backend/js/monthly.js') }}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
