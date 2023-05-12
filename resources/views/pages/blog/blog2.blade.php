   <!--================Blog Area =================-->
   @extends('welcome')
   @section('content')
       <section class="blog_area single-post-area section_gap_blog">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 posts-list">
                       <div class="single-post">
                           <div class="feature-img">
                               <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpg" alt="">
                           </div>
                           <div class="blog_details">
                               <h2>Cá vàng lớn nhất nước Anh có giá đắt như vàng</h2>
                               <ul class="blog-info-link mt-3 mb-4">
                                   <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                                   <li><a href="#"><i class="ti-comments"></i> 0 Comments</a></li>
                               </ul>
                               <span class="excert">
                                Chú cá vàng màu đỏ cam Rocky dài 15 cm, có bề rộng 10 cm và nặng gần 1,2 kg. Con cá ba năm tuổi vô cùng quý hiếm do kích thước lớn và thuộc giống cá vàng đầu lân, là loài bản xứ ở Nhật Bản và Trung Quốc, với đặc trưng là khối u gồ lên trước trán.
                               </span>
                               <img class="img-fluid w-75" src="{{('public/frontend/img/banner/ca2.jpg')}}" alt="" />
                               
                               <div class="quote-wrapper">
                                   <div class="quotes">
                                    <span>
                                        Dù khối u này rất nổi bật, nó lại có thể gây ra vấn đề sức khỏe cho cá vàng đầu lân, bởi tầm nhìn của con cá có thể giảm sút nếu khối u phát triển che hết mắt. Dù có vẻ không năng động dưới nước, cá vàng đầu lân rất khỏe và là loài bơi lội cừ khôi.                               </span>
                                    Andy Green, chủ của Rocky, người sở hữu một cửa hàng cá cảnh ở Sutton, London cho biết cá có giá 5.579 USD. "Đây là con cá vàng lớn nhất ở Anh. So với một con cá vàng bình thường, Rocky đích thực là một gã khổng lồ", Green nói.                                   </div>
                               </div>


                               <span>
                                Green cho hay có nhiều nhà sưu tầm sinh vật cảnh rất muốn sở hữu chú cá vàng to lớn độc đáo có giá trị "đắt như vàng" này.                               </span>
                           </div>
                       </div>
                       <div class="navigation-top">
                           <div class="d-sm-flex justify-content-between text-center">
                               <p class="like-info"><span class="align-middle"><i class="ti-heart"></i></span> Lily and 4
                                   people like this</p>
                               <div class="col-sm-4 text-center my-2 my-sm-0">
                                   <p class="comment-count"><span class="align-middle"><i class="ti-comment"></i></span> 06
                                       Comments</p>
                               </div>
                               <ul class="social-icons">
                                   <li><a href="#"><i class="ti-facebook"></i></a></li>
                                   <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                   <li><a href="#"><i class="ti-dribbble"></i></a></li>
                                   <li><a href="#"><i class="ti-wordpress"></i></a></li>
                               </ul>
                           </div>

                       </div>

                   </div>
                   {{-- <aside class="single_sidebar_widget popular_post_widget">
                       <h3 class="widget_title">Các bài viết </h3>
                       <div class="media post_item">
                           <img src="img/blog/popular-post/post1.jpg" alt="post">
                           <div class="media-body">
                               <a href="single-blog.html">
                                   <h3>From life was you fish...</h3>
                               </a>
                               <p>January 12, 2019</p>
                           </div>
                       </div>
                       <div class="media post_item">
                           <img src="img/blog/popular-post/post2.jpg" alt="post">
                           <div class="media-body">
                               <a href="single-blog.html">
                                   <h3>The Amazing Hubble</h3>
                               </a>
                               <p>02 Hours ago</p>
                           </div>
                       </div>
                       <div class="media post_item">
                           <img src="img/blog/popular-post/post3.jpg" alt="post">
                           <div class="media-body">
                               <a href="single-blog.html">
                                   <h3>Astronomy Or Astrology</h3>
                               </a>
                               <p>03 Hours ago</p>
                           </div>
                       </div>
                       <div class="media post_item">
                           <img src="img/blog/popular-post/post4.jpg" alt="post">
                           <div class="media-body">
                               <a href="single-blog.html">
                                   <h3>Asteroids telescope</h3>
                               </a>
                               <p>01 Hours ago</p>
                           </div>
                       </div>
                   </aside> --}}
         
           </div>
           </div>
           </div>
       </section>
   @endsection
