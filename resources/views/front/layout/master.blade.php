<!doctype html>
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <base href="{{ asset('/') }}">

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tino | @yield('tittle')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="front/img/favicon.png">

		<!-- FONTS
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/animate.css">

		<!-- FANCYBOX CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/jquery.fancybox.css">

		<!-- BXSLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/jquery.bxslider.css">

		<!-- MEANMENU CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/meanmenu.min.css">

		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/jquery-ui-slider.css">

		<!-- NIVO SLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/nivo-slider.css">

		<!-- OWL CAROUSEL CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/owl.carousel.css">

		<!-- OWL CAROUSEL THEME CSS
		============================================ -->
         <link rel="stylesheet" href="front/css/owl.theme.css">

		<!-- BOOTSTRAP CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/bootstrap.min.css">

		<!-- FONT AWESOME CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/font-awesome.min.css">

		<!-- NORMALIZE CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/normalize.css">

		<!-- MAIN CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/main.css">

		<!-- STYLE CSS
		============================================ -->
        <link rel="stylesheet" href="front/style.css">

		<!-- RESPONSIVE CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/responsive.css">

		<!-- IE CSS
		============================================ -->
        <link rel="stylesheet" href="front/css/ie.css">

        <link rel="stylesheet" href="front/css/tailwind.min.css" >


		<!-- MODERNIZR JS
		============================================ -->
        <script src="front/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <!-- Add your site or application content here -->

		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Tiền tệ : </span><strong>VND</strong>
									</div>
									<ul class="currency-list currency-toogle">
										<li>
											<a title="Dollar (USD)" href="#">VND </a>
										</li>
										<li>
										<a title="Euro (EUR)" href="#">USD </a>
										</li>
									</ul>
								</form>
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Ngôn ngữ : </span><strong>Tiếng Việt</strong>
								</div>
								<ul class="languages-choose language-toogle">
									<li>
										<a href="#" title="English">
											<span>Tiếng Việt</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>English</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
                                    <li><a href="wishlist.html">Yêu thích</a></li>
                                    <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){
                                    ?>
									<li><a href="./checkout">Thanh toán</a></li>
                                    <?php
                                    }else{
                                    ?>
									<li><a href="./login_checkout">Thanh toán</a></li>
                                    <?php
                                    }
                                    ?>
									<li><a href="./cart">Giỏ hàng</a></li>
                                    <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id != NUll){
                                    ?>
                                    <li><a href="./logout_checkout">Đăng xuất</a></li>
                                    <?php
                                    }else{
                                    ?>
                                    <li><a href="./login_checkout">Đăng nhập</a></li>
                                    <?php
                                    }
                                    ?>
								</ul>
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.html"><img src="front/img/logo3.png" alt="tinoshop logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>call us free</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="shop" method="get" class="search-form-cat">
								<div class="search-product form-group">
                                        <select name="catsearch" class="cat-search">
                                            <option value="">Danh mục</option>
                                            <option value="2">Thời trang nam</option>
                                            <option value="3">Thời trang nữ</option>
                                            <option value="4">Áo khoác</option>
                                            <option value="5">Giày</option>
                                            <option value="6">Phụ kiện</option>
                                            <option value="7">Secondhand</option>
                                        </select>
                                        <input name="search" type="text" class="form-control search-form" name="s" value="{{request('search')}}" placeholder="Nhập tên sản phẩm ... " />
                                        <button class="search-button" value="Search" name="s" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>

								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
								<a class="shop-link" href="./cart" title="Xem giỏ hàng">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>Giỏ hàng của tôi</b>
									<span class="ajax-cart-quantity">{{Cart::count()}}</span>
								</a>
								<div class="shipping-cart-overly">
                                    <table>
                                        <tbody>
                                        @foreach(Cart::content() as $cart)
                                        <tr>
                                            <td class="shipping-item">
                                                <span class="cross-icon">
                                                    <a href="./cart/delete/{{$cart->rowId}}" class="cart_quantity_delete" title="Xóa">
                                                    <i class="fa fa-times-circle"></i>
                                                    </a>
                                                </span>
                                                <div class="shipping-item-image">
                                                    <a href="#"><img style="height: 70px" src="front/img/product/products/{{$cart->options->images[0]->path}}" alt="shopping image" /></a>
                                                </div>

                                            </td>
                                            <td class="shipping-item-text">
                                                <span>{{$cart->qty}} <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">{{$cart->name}}</a></span>
                                                <p>{{number_format($cart->price,0)}}đ x {{$cart->qty}}</p>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="shipping-total-bill">
                                        <div class="cart-prices">
                                            <span class="shipping-cost">Free</span>
                                            <span>Phí ship</span>
                                        </div>
                                        <div class="total-shipping-prices">
                                            <span class="shipping-total">{{Cart::total()}}đ</span>
                                            <span>Tổng cộng</span>
                                        </div>
                                    </div>
                                    <div class="shipping-checkout-btn">
                                        <a href="./cart">Xem giỏ hàng <i class="fa fa-chevron-right"></i></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
                                    <li class="{{(request()->segment(1) == '') ? 'active' : ''}}"><a href="./">Trang chủ</a>
                                    </li>
                                    <li class="{{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop">Shop</a>
                                    </li>
                                    <li class="{{(request()->segment(1) == 'blog') ? 'active' : ''}}"><a href="./blog_index">Blog</a>
                                    <li class="{{(request()->segment(1) == 'contact') ? 'active' : ''}}"><a href="./about_us">Hướng dẫn</a>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
                                    <li class="{{(request()->segment(1) == '') ? 'active' : ''}}"><a href="./">Trang chủ</a>
									</li>
                                    <li class="{{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop">Shop</a>
									</li>
                                    <li class="{{(request()->segment(1) == 'blog') ? 'active' : ''}}"><a href="./blog_index">Blog</a>
                                    <li class="{{(request()->segment(1) == 'contact') ? 'active' : ''}}"><a href="./about_us">Hướng dẫn</a>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->

        @yield('body')

        <!-- FOOTER-TOP-AREA START -->
		<section class="footer-top-area">
			<div class="container">
				<div class="footer-top-container">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<!-- FOOTER-TOP-RIGHT-1 START -->
							<div class="footer-top-right-1">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
										<!-- STATICBLOCK START -->
										<div class="staticblock">
											<h2>  Liên hệ</h2>
                                            <p>Cửa hàng online hoạt động 24/24 giúp mọi người thuận tiện trong việc mua sắm giữa đại dịch Covid-19 đang căng thẳng, mọi thắc mắc vui lòng liên hệ với chúng tôi. Tino Fashion Shop cảm ơn sự ủng hộ của bạn</p>
										</div>
                                        <div class="fllow-us-area">
                                            <ul class="flow-us-link">
                                                <li><a href="https://www.facebook.com/Tino-Fashion-Shop-105234508598377"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
										<!-- STATICBLOCK END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<!-- STORE-INFORMATION START -->
										<div class="Store-Information">
											<h2>Thông tin Shop</h2>
											<ul>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-map-marker"></i>
													</div>
													<div class="info-text">
														<p>70 Tô Ký, Phường Tân Chánh Hiệp, Quận 12, TPHCM </p>
													</div>
												</li>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-phone"></i>
													</div>
													<div class="info-text call-lh">
														<p>Hotline : 0123-456-789</p>
													</div>
												</li>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-envelope-o"></i>
													</div>
													<div class="info-text">
														<p>Email : <a href="mailto:tinofashionshop@gmail.com"> tinofashionshop@gmail.com</a></p>
													</div>
												</li>
											</ul>
										</div>
										<!-- STORE-INFORMATION END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<!-- GOOGLE-MAP-AREA START -->
										<div class="google-map-area">
											<div class="google-map">
												<div id="googleMap" style="width:200%;height:300px;"></div>
											</div>
										</div>
										<!-- GOOGLE-MAP-AREA END -->
									</div>
								</div>
							</div>
							<!-- FOOTER-TOP-RIGHT-1 END -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FOOTER-TOP-AREA END -->
		<!-- COPYRIGHT-AREA START -->
		<footer class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="copy-right">
							<address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
						</div>
						<div class="scroll-to-top">
							<a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- COPYRIGHT-AREA END -->
		<!-- JS
		===============================================-->
		<!-- jquery js -->
		<script src="front/js/vendor/jquery-1.11.3.min.js"></script>

		<!-- fancybox js -->
        <script src="front/js/jquery.fancybox.js"></script>

		<!-- bxslider js -->
        <script src="front/js/jquery.bxslider.min.js"></script>

		<!-- meanmenu js -->
        <script src="front/js/jquery.meanmenu.js"></script>

		<!-- owl carousel js -->
        <script src="front/js/owl.carousel.min.js"></script>

		<!-- nivo slider js -->
        <script src="front/js/jquery.nivo.slider.js"></script>

		<!-- jqueryui js -->
        <script src="front/js/jqueryui.js"></script>

		<!-- bootstrap js -->
        <script src="front/js/bootstrap.min.js"></script>

        <!-- owl carousel-filter js -->
        <script src="front/js/owlcarousel2-filter.js"></script>

		<!-- wow js -->
        <script src="front/js/wow.js"></script>
{{--        <script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}
		<script>
			new WOW().init();
		</script>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 17,
				scrollwheel: false,
				center: new google.maps.LatLng(10.865668, 106.618799)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<!-- main js -->
        <script src="front/js/main.js"></script>

        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "105234508598377");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v12.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

    </body>

</html>
