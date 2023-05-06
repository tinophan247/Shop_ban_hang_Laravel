
<!-- NEW-PRODUCT-SINGLE-ITEM START -->
<div class="item">
    <div class="new-product">
        <div class="single-product-item">
            <div class="product-image">
                <a href="shop/product/{{$product->id}}"><img src="front/img/product/products/{{$product->path}}" alt="product-image" /></a>

                @if($product->discount !=null)
                    <div class="new-mark-box">Sale</div>
                @endif
                <div class="overlay-content">
                    <ul>
                        <li><a href="shop/product/{{$product->id}}" title="Xem"><i class="fa fa-search"></i></a></li>
                        <li><a href="./cart/add/{{$product->id}}" title="Thêm"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="product-info">
                <a href="single-product.html">{{$product->name}}</a>
                <div class="price-box">
                    @if($product->discount != null)
                        <span class="price">{{ number_format($product->discount,0,',','.') }}đ</span>
                        <span class="old-price">{{ number_format($product->price,0,',','.') }}đ</span>
                    @else
                        <span class="price">{{ number_format($product->price,0,',','.') }}đ</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NEW-PRODUCT-SINGLE-ITEM END -->
