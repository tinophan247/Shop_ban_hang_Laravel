@extends('front.layout.master')

@section('tittle','Product')

@section('body')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="index.html">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
                    <span> <i class="fa fa-caret-right"> </i> </span>
                    <a href="shop-gird.html"> Thời trang </a>
                    <span> Sản phẩm </span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                        <div class="single-product-view">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="thumbnail_1">
                                    <div class="single-product-image">
                                        <img src="front/img/product/products/{{$product->path}}" alt="single-product-image" />
                                        @if($product->discount !=null)
                                            <div class="new-mark-box">Sale</div>
                                        @endif
                                        <a class="fancybox" href="front/img/product/products/{{$product->path}}" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="select-product">
                            <!-- Nav tabs -->

                            <ul class="nav nav-tabs select-product-tab bxslider">
                                <li class="active">
                                    <a href="#thumbnail_1" data-toggle="tab"><img src="front/img/product/products/{{$product->path}}" alt="pro-thumbnail" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                        <div class="single-product-descirption">
                            <h2>{{$product->name}}</h2>
                            <div class="single-product-review-box">
                                <div class="rating-box">
                                    @for($i=1; $i<=5;$i++)
                                        @if($i <= $avgRating)
                                        <i class="fa fa-star"></i>
                                        @else
                                        <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <div class="single-product-price">
                                @if($product->discount != null)
                                <h2>{{ number_format($product->discount,0,',','.') }}đ<h4><span class="old-price">{{ number_format($product->price,0,',','.') }}d</span></h4></h2>
                                @else
                                <h2>{{ number_format($product->price,0,',','.') }}đ</h2>
                                @endif
                            </div>
                            <div class="single-product-desc">
                                <p>{{$product->description}}</p>
                                <div class="product-in-stock">
                                    <p>Hiện còn: <span>{{$product->qty}}</span> sản phẩm</p>
                                </div>
                            </div>
                            <div class="single-product-quantity">
                                <p class="small-title">Số lượng</p>
                                <div class="cart-quantity">
                                    <div class="cart-plus-minus-button single-qty-btn">
                                        <input class="cart-plus-minus sing-pro-qty" type="text" name="qtybutton" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-add-cart">
                                <a class="add-cart-text" title="Add to cart" href="./cart/add/{{$product->id}}">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-PRODUCT-DESCRIPTION END -->
                <!-- SINGLE-PRODUCT INFO TAB START -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product-more-info-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs more-info-tab">
                                <li class="active"><a href="#moreinfo" data-toggle="tab">Thông tin chi tiết</a></li>
                                <li><a href="#datasheet" data-toggle="tab">Bảng thông tin</a></li>
                                <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="moreinfo">
                                    <div class="tab-description">
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="datasheet">
                                    <div class="deta-sheet">
                                        <table class="table-data-sheet">
                                            <tbody>
                                            <tr>
                                                <td class ="p-category">Đánh giá sao</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        @for($i=1; $i<=5;$i++)
                                                            @if($i <= $avgRating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="fa fa-star-o"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td class ="p-category">Giá sản phẩm</td>
                                                <td>
                                                    <div class="pd-price">
                                                        @if($product->discount != null)
                                                            {{ number_format($product->discount,0,',','.') }}đ
                                                        @else
                                                            {{ number_format($product->price,0,',','.') }}đ
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td class ="p-category">Số lượng kho</td>
                                                <td>
                                                    <div class="p-stock">{{$product->qty}} sản phẩm</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class ="p-category">Phân loại</td>
                                                <td>
                                                    <div class="p-tag">{{$product->tag}} </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="review">
                                    <div class="row tab-review-row">
                                        <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
                                            <div class="tab-rating-box">
                                                <span>Điểm số</span>
                                                <div class="rating-box">
                                                    @for($i=1; $i<=5;$i++)
                                                        @if($i <= $avgRating)
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
                                            <div class="write-your-review">
                                                <p><strong>write A REVIEW</strong></p>
                                                <p>write A REVIEW</p>
                                                <span class="usefull-comment">Was this comment useful to you? <span>Yes</span><span>No</span></span>
                                                <a href="#">Report abuse </a>
                                            </div>
                                        </div>
                                        <a href="#" class="write-review-btn">Viết đánh giá!</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- SINGLE-PRODUCT INFO TAB END -->
                <!-- RELATED-PRODUCTS-AREA START -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="left-title-area">
                            <h2 class="left-title">Sản phẩm liên quan</h2>
                        </div>
                    </div>
                    <div class="related-product-area featured-products-area">
                        <div class="col-sm-12">
                            <div class=" row">
                                <!-- RELATED-CAROUSEL START -->
                                <div class="related-product">
                                    @foreach($relatedProducts as $relatedProduct)
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    <div class="item">
                                        @include('front.components.product-item',['product' => $relatedProduct])

                                    </div>
                                    <!-- SINGLE-PRODUCT-ITEM END -->
                                        @endforeach
                                </div>
                                <!-- RELATED-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RELATED-PRODUCTS-AREA END -->
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
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
                            <h3 class="facality-heading-text">FREE SHIPPING</h3>
                            <span>on order over $100</span>
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
                            <h3 class="facality-heading-text">24/7 SUPPORT</h3>
                            <span>online consultations</span>
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
                            <h3 class="facality-heading-text">DAILY UPDATES</h3>
                            <span>Check out store for latest</span>
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
                            <h3 class="facality-heading-text">30-DAY RETURNS</h3>
                            <span>moneyback guarantee</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
            </div>
        </div>
    </div>
</section>
<!-- COMPANY-FACALITY END -->
<!-- FOOTER-TOP-AREA START -->
@endsection
