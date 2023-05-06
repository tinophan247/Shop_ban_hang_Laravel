
<form action="{{request()->segment(2) == 'product' ? 'shop' : ''}}">
    <div class="product-single-sidebar">
        <h3><span class="sidebar-title">Thương hiệu</span></h3>
        @foreach($brands as $brand)
            <div class="bc-item">
                <label for="bc-{{$brand->id}}">
                    <input type="checkbox"
                           {{(request("brand")[$brand->id] ?? '') ==  'on' ? 'checked' :''}}
                           id="bc-{{$brand->id}}"
                           name="brand[{{$brand->id}}]"
                           onchange="this.form.submit()"
                    >
                    {{$brand->brand_name}}
                    <span class="checkmark"></span>
                </label>
            </div>
        @endforeach
    </div>
    <!-- SINGLE SIDEBAR ENABLED FILTERS END -->
    <!-- SINGLE SIDEBAR CATEGORIES START -->
    <div class="product-single-sidebar">
        <span class="sidebar-title">Danh mục</span>
        <ul>
            @foreach($categories as $category)
                <li><a href="shop/{{$category->category_name}}">{{$category->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- SINGLE SIDEBAR CATEGORIES END -->
    <div class="slider-right zoom-img m-top">
        <a href="#"><img class="img-responsive" src="front/img/product/cms11.jpg" alt="sidebar left" /></a>
    </div>
</form>
