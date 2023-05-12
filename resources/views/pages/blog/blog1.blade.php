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
                               <h2>Ngắm cá cảnh có lợi cho sức khỏe</h2>
                               <ul class="blog-info-link mt-3 mb-4">
                                   <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                                   <li><a href="#"><i class="ti-comments"></i> 0 Comments</a></li>
                               </ul>
                               <span class="excert">
                                Theo nghiên cứu của các nhà khoa học Anh, ngắm cá cảnh có tác dụng hạ huyết áp và nhịp tim, đồng thời cải thiện tâm trạng của con người.
                                Ngắm cá cảnh là giải pháp giảm căng thẳng, mệt mỏi của không ít người, nhất là những người làm việc trong môi trường văn phòng, thường xuyên tiếp xúc với máy tính, giấy tờ… Trên thực tế, nghiên cứu của không ít chuyên gia cũng khẳng định rằng: Ngắm cá cảnh giảm bớt căng thẳng và xả stress. 
                                Bởi chúng có tác động trực tiếp tới tâm lý, huyết áp và nhịp tim của mọi người.

                               </span>
                               <img class="img-fluid w-75" src="{{('public/frontend/img/banner/ca1.jpg')}}" alt="" />
                             
                               <div class="quote-wrapper">
                                   <div class="quotes">
                                    <span>
                                        Cá và các loài sinh vật biển là chủ đề không bao giờ nhàm chán đối với khoa học. Trang Lifehack đưa tin, các nhà nghiên cứu người Anh đã phát hiện ngắm cá cảnh mang đến nhiều lợi ích cho sức khỏe.
                                    
                                    Nhóm tác giả đã mời các tình nguyện viên ngắm bể cả trong một khoảng thời gian rồi xem xét sự thay đổi nhịp tim và huyết áp của họ. Kết quả, nhịp tim và huyết áp những người này đều hạ xuống. Thêm vào đó, càng ngắm nhiều cá, họ càng trở nên bình tĩnh và tươi tỉnh hơn trước. Một số chuyên gia còn cho rằng trang trí bể cá ở phòng phẫu thuật hay phòng khám nha khoa có tác dụng trấn an người bệnh.
                                </span>   
                                </div>
                               </div>


                               <span>
                                Các nhà khoa học cho biết, kết quả trên sẽ có ích cho những người vì nhiều lý do không được tiếp xúc với thiên nhiên. Tiến sĩ Sabine Pahl tại Đại học Plymounth nhận định: "Trong thời đại làm việc căng thẳng và cuộc sống đô thị đông đúc, bể cá sẽ trở thành những ốc đảo yên tĩnh giúp con người thư giãn".
                               </span>
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
           </div>
       </section>
   @endsection
