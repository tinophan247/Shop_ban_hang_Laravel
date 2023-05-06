@extends('front.layout.master')

@section('tittle','Home')

@section('body')
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<!-- MAIN-SLIDER-AREA START -->
					<div class="main-slider-area">
						<!-- SLIDER-AREA START -->
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="slider-area">
								<div id="wrapper">
									<div class="slider-wrapper">
										<div id="mainSlider" class="nivoSlider">
											<img src="front/img/slider/2.jpg" alt="main slider" title="#htmlcaption"/>
											<img src="front/img/slider/1.jpg" alt="main slider" title="#htmlcaption2"/>
										</div>
										<div id="htmlcaption" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text1">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown">TINO FASHION SHOP</h2>
													<h1 class="animated bounceInUp">Cửa hàng secondhand số một dành cho bạn..</h1></div>
											</div>
										</div>
										<div id="htmlcaption2" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text2">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown">TINO FASHION SHOP</h2>
													<h1 class="animated bounceInUp">Trả hàng, hoàn tiền trong vòng 3 ngày nhận hàng.</h1></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- SLIDER-AREA END -->
						<!-- SLIDER-RIGHT START -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="slider-right zoom-img m-top">
								<a href="#"><img class="img-responsive" src="front/img/product/cms11.jpg" alt="sidebar left" /></a>
							</div>
						</div>
						<!-- SLIDER-RIGHT END -->
					</div>
					<!-- MAIN-SLIDER-AREA END -->
				</div>
				<!-- TOW-COLUMN-PRODUCT START -->
				<div class="row tow-column-product">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- NEW-PRODUCT-AREA START -->
						<div class="new-product-area">
							<div class="left-title-area">
								<h2 class="left-title">Thời trang Nam</h2>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<!-- NEW-PRO-CAROUSEL START -->
										<div class="new-pro-carousel">

                                            @foreach($menProducts as $menProduct)
                                                @include('front.components.product-item',['product' => $menProduct])
                                                @endforeach
										</div>
										<!-- NEW-PRO-CAROUSEL END -->
									</div>
								</div>
							</div>
						</div>
						<!-- NEW-PRODUCT-AREA END -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- SALE-PRODUCTS START -->
						<div class="Sale-Products">
							<div class="left-title-area">
								<h2 class="left-title">Thời trang nữ</h2>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">

										<!-- SALE-CAROUSEL START -->
										<div class="sale-carousel">
                                        @foreach($womenProducts as $womenProduct)
											<!-- SALE-PRODUCTS-SINGLE-ITEM START -->
											<div class="item">
												<div class="new-product">
                                                    @include('front.components.product-item',['product' => $womenProduct])

                                                </div>
											</div>
											<!-- SALE-PRODUCTS-SINGLE-ITEM END -->
                                            @endforeach
										</div>
										<!-- SALE-CAROUSEL END -->

									</div>
								</div>
							</div>
						</div>
						<!-- SALE-PRODUCTS END -->
					</div>
				</div>
				<!-- TOW-COLUMN-PRODUCT END -->
				<div class="row">
					<!-- ADD-TWO-BY-ONE-COLUMN START -->
					<div class="add-two-by-one-column">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="tow-column-add zoom-img">
								<a href="shop/"><img src="front/img/product/shope-add1.jpg" alt="shope-add" /></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="one-column-add zoom-img">
								<a href="shop/"><img src="front/img/product/shope-add2.jpg" alt="shope-add" /></a>
							</div>
						</div>
					</div>
					<!-- ADD-TWO-BY-ONE-COLUMN END -->
				</div>
				<div class="row">
					<!-- FEATURED-PRODUCTS-AREA START -->
					<div class="featured-products-area">
						<div class="center-title-area">
							<h2 class="center-title">Secondhand Product</h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<!-- FEARTURED-CAROUSEL START -->
								<div class="feartured-carousel">
                                    @foreach($secondhandProducts as $secondhandProduct)
									<!-- SINGLE-PRODUCT-ITEM START -->
									<div class="item">
                                        @include('front.components.product-item',['product' => $secondhandProduct])
                                    </div>
									<!-- SINGLE-PRODUCT-ITEM END -->
                                        @endforeach
								</div>
								<!-- FEARTURED-CAROUSEL END -->
							</div>
						</div>
					</div>
					<!-- FEATURED-PRODUCTS-AREA END -->
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- TAB-BG-PRODUCT-AREA START -->
						<div class="tab-bg-product-area">
							<!-- TAB PANES START -->
							<div class="tab-content bg-tab-content">
								<!-- TABS ONE START-->
								<div role="tabpanel" class="tab-pane active" id="women-tab">
									<div class="bg-tab-content-area tab-carousel-1">
                                        @foreach($jacketProducts as $jacketProduct)
										<!-- TAB-SINGLE-ITEM START -->
										<div class="item">
                                            @include('front.components.product-item',['product' => $jacketProduct])
										</div>
										<!-- TAB-SINGLE-ITEM END -->
                                            @endforeach
									</div>
								</div>
								<!-- TABS ONE END-->
								<!-- TABS TWO START-->
								<div role="tabpanel" class="tab-pane" id="tops-tab">
									<div class="bg-tab-content-area tab-carousel-2">
                                        @foreach($shoesProducts as $shoesProduct)
										<!-- TAB-SINGLE-ITEM START -->
										<div class="item">
                                            @include('front.components.product-item',['product' => $shoesProduct])
										</div>
										<!-- TAB-SINGLE-ITEM END -->
                                            @endforeach

									</div>
								</div>
								<!-- TABS TWO END-->
								<!-- TABS THREE START-->
								<div role="tabpanel" class="tab-pane" id="t-shirts">
									<div class="bg-tab-content-area tab-carousel-3">
                                    @foreach($accessoryProducts as $accessoryProduct)

										<!-- TAB-SINGLE-ITEM START -->
										<div class="item">
                                            @include('front.components.product-item',['product' => $accessoryProduct])
										</div>
										<!-- TAB-SINGLE-ITEM END -->
                                        @endforeach

									</div>
								</div>
								<!-- TABS THREE END-->
							</div>
							<!-- TAB PANES END -->
							<!-- TABS MENU START-->
							<div class="tab-carousel-menu">
								<ul class="nav nav-tabs product-bg-nav">
									<li class="active"><a href="#women-tab" data-toggle="tab">Jacket</a></li>
									<li><a href="#tops-tab" data-toggle="tab">Giày</a></li>
									<li><a href="#t-shirts" data-toggle="tab">Phụ kiện</a></li>
								</ul>
							</div>
							<!-- TABS MENU END-->
						</div>
						<!-- TAB-BG-PRODUCT-AREA END -->
					</div>
				</div>
				<div class="row">
					<!-- IMAGE-ADD-AREA START -->
					<div class="image-add-area">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- ONEHALF-ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="shop/"><img src="front/img/product/one-helf1.jpg" alt="shope-add" /></a>
							</div>
							<!-- ONEHALF-ADD END -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- ONEHALF-ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="shop/"><img src="front/img/product/one-helf2.jpg" alt="shope-add" /></a>
							</div>
							<!-- ONEHALF-ADD END -->
						</div>
					</div>
					<!-- IMAGE-ADD-AREA END -->
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- LATEST-NEWS-AREA START -->
		<section class="latest-news-area">
			<div class="container">
				<div class="row">
					<div class="latest-news-row">
						<div class="center-title-area">
							<h2 class="center-title"><a href="#">Tin tức</a></h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<!-- LATEST-NEWS-CAROUSEL START -->
								<div class="latest-news-carousel">
                                    @foreach($blogs as $blog)
									<!-- LATEST-NEWS-SINGLE-POST START -->
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="front/img/latest-news/{{$blog->image}}" alt="latest-post" /></a>
												<h2><a href="#">{{$blog->title}}</a></h2>
												<p>{{$blog->subtitle}}</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>{{date('M d,Y',strtotime($blog->created_at))}}</span>
												</div>
                                                <div class="latest-post-info">
                                                    <i class="fa fa-comment-o"></i><span>{{count($blog->blogComments)}}</span>
                                                </div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
                                        @endforeach
								</div>
								<!-- LATEST-NEWS-CAROUSEL START -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- LATEST-NEWS-AREA END -->
		<!-- BRAND-CLIENT-AREA START -->
		<section class="brand-client-area">
			<div class="container">
				<div class="row">
					<!-- BRAND-CLIENT-ROW START -->
					<div class="brand-client-row">
						<div class="center-title-area">
							<h2 class="center-title">BRAND & CLIENTS</h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<!-- CLIENT-CAROUSEL START -->
								<div class="client-carousel">
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/1.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/2.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/4.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/5.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/1.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/2.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/4.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/5.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/1.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/4.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="front/img/brand/5.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
								</div>
								<!-- CLIENT-CAROUSEL END -->
							</div>
						</div>
					</div>
					<!-- BRAND-CLIENT-ROW END -->
				</div>
			</div>
		</section>
		<!-- BRAND-CLIENT-AREA END -->
		<!-- COMPANY-FACALITY START -->
		<section class="company-facality">
			<div class="container">
				<div class="row">
					<div class="company-facality-row">
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">Miễn Phí Giao Hàng</h3>
									<span>hóa đơn trên 100.000đ</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">Hỗ trợ 24/7</h3>
									<span>Qua facebook, email, hotline</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">Cập nhật xu hướng</h3>
									<span>Hàng mới về thường xuyên </span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-refresh"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">Trả hàng</h3>
									<span>Trong vòng 3 ngày nhận hàng</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
					</div>
				</div>
			</div>
		</section>
		<!-- COMPANY-FACALITY END -->
@endsection
