@extends('front.layout.master')

@section('tittle','Payment')
@section('body')
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="./">Trang chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>Thanh toán</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title">Thanh toán đơn hàng <span class="shop-pro-item">Giỏ hàng của bạn có: {{Cart::count()}} sản phẩm</span></h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- CART TABLE_BLOCK START -->
                    <section id="cart_items">
                        <div class="container">
                            <form action="/order_place" method="post" class="primari-box personal-info-box" >
                                @csrf
                                <div class="Checkout_info">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <!-- FOUR-PAYMENT-METHOD START -->
                                        <div class="four-payment-method">
                                            <!-- SINGLE-PAYMENT-METHOD START -->
                                            <div class="single-payment-method payment-method-one" >
                                                <input type="radio" id="pc_check" name="payment_type" value="1">
                                                Online<span class="checkmark"> (Thanh toán qua thẻ)</span><i class="fa fa-chevron-right"></i>
                                            </div >
                                            <!-- SINGLE-PAYMENT-METHOD END -->
                                            <!-- SINGLE-PAYMENT-METHOD START -->
                                            <div class="single-payment-method payment-method-one" >
                                                <input type="radio" id="pc_check" name="payment_type" value="2">
                                                COD<span class="checkmark"> (Thanh toán khi nhận hàng)</span><i class="fa fa-chevron-right"></i>
                                            </div >
                                            <!-- SINGLE-PAYMENT-METHOD END -->
                                        </div>
                                        <!-- FOUR-PAYMENT-METHOD END -->
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <!-- RETURNE-CONTINUE-SHOP START -->
                                        <div class="returne-continue-shop">
                                            <a href="./" class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua sắm</a>
                                            <button type="submit" name="send_order" class="btn btn-default">Đặt hàng</button>
                                        </div>
                                        <!-- RETURNE-CONTINUE-SHOP END -->
                                    </div>
                                </div>
                            </form>

                        </div>
                    </section> <!--/#cart_items-->

                    <!-- CART TABLE_BLOCK END -->
                </div>

            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
@endsection
