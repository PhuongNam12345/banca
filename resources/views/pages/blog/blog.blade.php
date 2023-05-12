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
                               <h2>Vua cá cảnh Singapore</h2>
                               <ul class="blog-info-link mt-3 mb-4">
                                   <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                                   <li><a href="#"><i class="ti-comments"></i> 0 Comments</a></li>
                               </ul>
                               <span class="excert">
                                Nổi tiếng với biệt danh "Kenny the Fish", Kenny Yap hiện nuôi tới hơn 1.000 giống cá cảnh, vừa phục vụ trong nước, vừa xuất khẩu sang hơn 80 quốc gia.

                                Công ty Qian Hu được lập ra bởi cha và chú của Kenny. Sau hơn 20 năm, hãng từ một công ty sắp phá sản đã trở thành một trong những doanh nghiệp xuất khẩu cá cảnh lớn nhất thế giới. Hiện Qian Hu có trang trại tại Singapore, Malaysia, Thái Lan, Indonesia và Trung Quốc.
                                
                                Năm ngoái, doanh thu của hãng đạt 67 triệu USD. Con cá đắt nhất họ từng bán là một chú cá rồng 50.000 USD.
                                
                                Singapore tuy là nước nhỏ, nhưng đóng góp tới 20% nguồn cung cá cảnh trên thế giới. Trong đó, Qian Hu chiếm 5%. Ông đang lên kế hoạch tăng gấp đôi tỷ lệ này trong 5 năm tới.

                               </span>
                               <img class="img-fluid w-50 center" src="{{('public/frontend/img/banner/ca.jpg')}}" alt="" />
                               <div>
                               <span>
                                Việc này không hề dễ dàng. Cha và chú của Kenny trước đây chỉ nuôi lợn. Nhưng sau khi ngành này bị Chính phủ Singapore liệt vào danh sách gây ô nhiễm môi trường thập niên 80, họ đã phải chuyển hướng kinh doanh.

                                Cả gia đình bắt đầu bằng cá bảy màu, giống cá được nuôi rất phổ biến, do người Anh mang đến đây từ thời kỳ Singapore còn là thuộc địa, nhằm mục đích ăn ấu trùng muỗi. Thế là trang trại cá Yap Brothers ra đời.
                               </span>
                               </div>
                               <div class="quote-wrapper">
                                   <div class="quotes">
                                    Sau đó, họ tham khảo ý kiến của một chuyên gia phong thủy. "Ông ấy khuyên chúng tôi đổi tên công ty thành Qian Hu, có nghĩa là "Nghìn hồ", ông nói.

                                    Cái tên này được coi là điềm lành. Hồ nhiều cá, trong tiếng Trung Quốc, có nghĩa là thịnh vượng. Nhưng vận may của công ty vẫn chưa đến.
                                    
                                    Sau vụ cá vảy màu thất bại, Kenny và anh em của mình theo lời khuyên của bạn bè, quyết định nuôi một giống cá chạch phổ biến ở Tứ Xuyên. Tuy nhiên, loài cá này lại quá nhạy cảm với tiếng ồn. Khi xây thêm các bể cá mới cho trang trại, tiếng động lớn đã làm chết toàn bộ 4.000 con cá mới mua.
                                   </div>
                               </div>


                               <span>
                                Khi ấy, họ gần như sắp phá sản vì thua lỗ, nhưng cũng rút ra bài học về tầm quan trọng của việc đa dạng hóa và nghiên cứu kỹ sản phẩm. Loại cá chạch này sau đó đã được đưa vào logo của Qian Hu để nhắc nhở họ về bài học quý giá này.

                               </span>
                               <span>
                                Nghiên cứu và phát triển (R&D) hiện tại là một phần quan trọng trong việc kinh doanh của Qian Hu. Kenny thuê hẳn một chuyên gia nghiên cứu, vừa tìm cách tăng số cá nuôi, vừa nghĩ biện pháp giải quyết tình trạng chật hẹp ở Singapore.

                                Được gọi là "trang trại cá kiểu mới", sáng tạo là cốt lõi chiến lược tăng trưởng của Kenny. Tại trang trại ở Singapore, các bể cả được thiết kế bởi chính công ty. Chúng được xếp theo cụm và cấp nước sạch mỗi giờ một lần bởi một hệ thống đường ống phức tạp ngay bên trên.
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
