@extends('front.layout.master')

@section('tittle','Blog')

@section('body')
<!-- MAINCONTAIN-AREA START-->
<div class="maincontain-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="./">Trang chủ</a>
                    <span><i class="fa fa-caret-right	"></i></span>
                    <span>Bài viết</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <!-- SINGLE-BLOG START-->
            <div class="col-lg-6 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="#"><img src="front/img/latest-news/blog_1.jpg" alt="Blog" /></a>
                    </div>
                    <div class="blog-text-area">
                        <div class="date">
                            <span>07</span>
                            <span class="month">Tháng 12 2021</span>
                        </div>
                        <div class="block-desc">
                            <a href="blog_details.html">
                                <h3>Gonz Vasity, trên cả tuyệt vời...</h3>
                            </a>
                            <p>Chất liệu vải tốt, dày dặn, nét thêu rõ ràng, còn mới 80%,mình đang có nhu cầu bán lại do có áo bị trùng áo, giá bán: 150.000đ</p>
                            <div class="comment-area">
                                <a href="#">
                                    <span class="author"><i class="fa fa-user"></i>Nhung Nguyễn</span>
                                </a>
                                <a href="#">
                                    <span class="comment"><i class="fa fa-comments"></i>0 Bình luận</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SINGLE-BLOG END-->
            <!-- SINGLE-BLOG START-->
            <div class="col-lg-6 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="#"><img src="front/img/latest-news/blog_2.jpg" alt="Blog" /></a>
                    </div>
                    <div class="blog-text-area">
                        <div class="date">
                            <span>07</span>
                            <span class="month">Tháng 12 2021</span>
                        </div>
                        <div class="block-desc">
                            <a href="blog_details.html">
                                <h3>Giày Vans Flame size 9 US</h3>
                            </a>
                            <p>Giày vans flame size 9 us. Hàng real. Không còn box, giá bán: 800.000đ</p>
                            <div class="comment-area">
                                <a href="#">
                                    <span class="author"><i class="fa fa-user"></i>Lê Lương Vũ</span>
                                </a>
                                <a href="#">
                                    <span class="comment"><i class="fa fa-comments"></i>0 Bình luận</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SINGLE-BLOG END-->
            <!-- SINGLE-BLOG START-->
            <div class="col-lg-6 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="#"><img src="front/img/latest-news/blog_4.jpg" alt="Blog" /></a>
                    </div>
                    <div class="blog-text-area">
                        <div class="date">
                            <span>07</span>
                            <span class="month">Tháng 12 2021</span>
                        </div>
                        <div class="block-desc">
                            <a href="blog_details.html">
                                <h3>Quần Baggy Suông Lưng Cao</h3>
                            </a>
                            <p>Baggy Jean Ống Rộng, Lưng Cao Chất jean đẹp, mịn Size 26-30 ,HÀNG LUÔN CÓ SẴN, giá bán: 180.000đ</p>
                            <div class="comment-area">
                                <a href="#">
                                    <span class="author"><i class="fa fa-user"></i>Ny Nguyen</span>
                                </a>
                                <a href="#">
                                    <span class="comment"><i class="fa fa-comments"></i>0 Bình luận</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SINGLE-BLOG END-->
            <div class="col-lg-12 col-md-12">
                <!--PGAINATION AREA START-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active_p">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--PGAINATION AREA END-->
            </div>
        </div>
    </div>
</div>
<!-- MAINCONTAIN-AREA END-->
@endsection
