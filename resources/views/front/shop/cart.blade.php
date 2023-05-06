@extends('front.layout.master')

@section('tittle','Cart')
@section('body')
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="./">Trang chủ</a>
							<span><i class="fa fa-caret-right	"></i></span>
							<span>Giỏ hàng của bạn</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPPING-CART SUMMARY START -->
						<h2 class="page-title">Thông tin đơn hàng <span class="shop-pro-item">Giỏ hàng của bạn có: {{Cart::count()}} sản phẩm</span></h2>
						<!-- SHOPPING-CART SUMMARY END -->
					</div>
                    @if(Cart::count()>0)
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<!-- CART TABLE_BLOCK START -->
						<div class="table-responsive">
							<!-- TABLE START -->
							<table class="table table-bordered" id="cart-summary">
								<!-- TABLE HEADER START -->
								<thead>
									<tr>
										<th class="cart-product">Sản phẩm</th>
										<th class="cart-description">Tên sản phẩm</th>
										<th class="cart-unit text-right">Giá</th>
										<th class="cart_quantity text-center">Số lượng</th>
										<th class="cart-delete">&nbsp;</th>
										<th class="cart-total text-right">Tổng cộng</th>
									</tr>
								</thead>
								<!-- TABLE HEADER END -->
								<!-- TABLE BODY START -->
								<tbody>
                                @foreach($carts as $cart)
									<!-- SINGLE CART_ITEM START -->
									<tr>
										<td class="cart-product">
											<a href="#"><img alt="image" src="front/img/product/products/{{$cart->options->images[0]->path}}"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="#">{{$cart->name}}</a></p>
										</td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price">{{number_format($cart->price , 0)}}đ</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="cart-plus-minus-button">
												<input class="cart-plus-minus" type="text" name="qtybutton" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}">
											</div>
										</td>
										<td class="cart-delete text-center">
											<span>
												<a href="./cart/delete/{{$cart->rowId}}" class="cart_quantity_delete" title="Xóa"><i class="fa fa-trash-o"></i></a>
											</span>
										</td>
										<td class="cart-total">
											<span class="price">{{number_format($cart->price * $cart->qty,0)}}đ</span>
										</td>
									</tr>
									<!-- SINGLE CART_ITEM END -->
                                @endforeach
								</tbody>
								<!-- TABLE BODY END -->
								<!-- TABLE FOOTER START -->
								<tfoot>
									<tr class="cart-total-price">
										<td class="cart_voucher" colspan="3" rowspan="4"></td>
										<td class="text-right" colspan="3">Tổng cộng</td>
										<td id="total_product" class="price" colspan="1">{{$subtotal}}đ</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Phí ship</td>
										<td id="total_shipping" class="price" colspan="1">Free</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Voucher giảm giá</td>
										<td class="price" colspan="1">0đ</td>
									</tr>
									<tr>
										<td class="total-price-container text-right" colspan="3">
											<span>Tổng cộng</span>
										</td>
										<td id="total-price-container" class="price" colspan="1">
											<span id="total-price">{{$total}}đ</span>
										</td>
									</tr>
								</tfoot>
								<!-- TABLE FOOTER END -->
							</table>
							<!-- TABLE END -->

						</div>
						<!-- CART TABLE_BLOCK END -->
					</div>
                    @else
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>Giỏ hàng của bạn trống</h2>
                        </div>
                    @endif
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- RETURNE-CONTINUE-SHOP START -->
						<div class="returne-continue-shop">
							<a href="./" class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua sắm</a>
                            <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id!=NULL){
                            ?>
                            <a href="./checkout" class="procedtocheckout">Tiếp tục thanh toán<i class="fa fa-chevron-right"></i></a>

                        <?php
                            }else{
                            ?>
                            <a href="./login_checkout" class="procedtocheckout">Tiếp tục thanh toán<i class="fa fa-chevron-right"></i></a>

                        <?php
                            }
                            ?>
						</div>
						<!-- RETURNE-CONTINUE-SHOP END -->
					</div>
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
@endsection
