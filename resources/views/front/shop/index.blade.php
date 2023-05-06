@extends('front.layout.master')

@section('tittle','Shop')

@section('body')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="index.html">Trang chủ</a>
                    <span><i class="fa fa-caret-right"></i></span>
                    <span>Thời trang</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <!-- PRODUCT-LEFT-SIDEBAR START -->
                <div class="product-left-sidebar">
                    <h2 class="left-title pro-g-page-title">Danh mục tìm kiếm</h2>
                    <!-- SINGLE SIDEBAR ENABLED FILTERS START -->
                    @include('front.shop.components.product-sidebar-filter')
                </div>
                <!-- PRODUCT-LEFT-SIDEBAR END -->
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="right-all-product">
                    <!-- PRODUCT-CATEGORY-HEADER START -->
                    <div class="product-category-header">
                        <div class="category-header-image">
                            <img src="front/img/category-header.jpg" alt="category-header" />
                            <div class="category-header-text">
                                <h2>Tino Fashion Shop </h2>
                                <strong>Sự lựa chọn số một của bạn.</strong>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT-CATEGORY-HEADER END -->
                    <div class="product-category-title">
                        <!-- PRODUCT-CATEGORY-TITLE START -->
                        <h1>
                            <span class="cat-name">Thời trang</span>
                        </h1>
                        <!-- PRODUCT-CATEGORY-TITLE END -->
                    </div>
                    <div class="product-shooting-area">
                        <div class="product-shooting-bar">
                            <form action="">
                                <!-- SHOORT-BY START -->
                                <div class="shoort-by">
                                    <label for="productShort">Lọc theo</label>
                                    <div class="short-select-option">
                                        <select name="sort_by" id="productShort" onchange="this.form.submit();">
                                            <option {{request('sort_by') == 'latest' ? 'selected' : ''}} value="latest">Hàng mới nhất</option>
                                            <option {{request('sort_by') == 'oldest' ? 'selected' : ''}} value="oldest">Hàng cũ nhất</option>
                                            <option {{request('sort_by') == 'price_ascending' ? 'selected' : ''}} value="price_ascending">Giá: từ thấp đến cao</option>
                                            <option {{request('sort_by') == 'price_descending' ? 'selected' : ''}} value="price_descending">Giá: từ cao đến thấp</option>
                                            <option {{request('sort_by') == 'name_ascending' ? 'selected' : ''}} value="name_ascending">Tên sản phẩm: từ A đến Z</option>
                                            <option {{request('sort_by') == 'name_descending' ? 'selected' : ''}} value="name_descending">Tên sản phẩm: từ Z đến A</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- SHOORT-BY END -->
                                <!-- SHOW-PAGE START -->
                                <div class="show-page" >
                                    <label for="perPage">Hiện</label>
                                    <div class="s-page-select-option">
                                        <select name="show" id="perPage" onchange="this.form.submit();">
                                            <option {{request('show') == '12' ? 'selected' : ''}} value="12">12</option>
                                            <option {{request('show') == '16' ? 'selected' : ''}} value="16">16</option>
                                            <option {{request('show') == '20' ? 'selected' : ''}} value="20">20</option>
                                        </select>
                                    </div>
                                    <span>sản phẩm</span>
                                </div>
                                <!-- SHOW-PAGE END -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ALL GATEGORY-PRODUCT START -->
                <div class="all-gategory-product">
                    <div class="row">
                        <ul class="gategory-product">
                            @foreach($products as $product)
                            <!-- SINGLE ITEM START -->
                            <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                @include('front.components.product-item',['product' => $product])
                            </li>
                            <!-- SINGLE ITEM END -->
                                @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ALL GATEGORY-PRODUCT END -->
                <!-- PRODUCT-SHOOTING-RESULT START -->
                <div class="product-shooting-result product-shooting-result-border">
                    <div>{{$products->links()}}</div>
                </div>
                <!-- PRODUCT-SHOOTING-RESULT END -->
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@endsection
