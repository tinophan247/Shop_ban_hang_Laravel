@extends('admin_layout')
@section('tittle','Add Product')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
                </header>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input required="" type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="name" class="form-control " id="slug" placeholder="Tên danh mục" onkeyup="ChangeToSlug();">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SL sản phẩm</label>
                                <input required="" type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng" name="qty" class="form-control" id="exampleInputEmail1" placeholder="Điền số lượng">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá bán</label>
                                <input required=""  type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" name="discount" class="form-control price_format" id="" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá gốc</label>
                                <input required=""  type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" name="price" class="form-control price_format" id="" placeholder="Tên danh mục">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                <input required=""  type="file" name="path" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea required=""  style="resize: none"  rows="8" class="form-control" name="description" id="ckeditor1" placeholder="Mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                <textarea required=""  style="resize: none" rows="8" class="form-control" name="pcontent"  id="my-editor" placeholder="Nội dung sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                <select required=""  name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $cate)
                                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tags sản phẩm</label>

                                <input required=""  type="text" data-role="tagsinput" name="tag" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thương hiệu</label>
                                <select required=""  name="brand" class="form-control input-sm m-bot15">
                                    @foreach($brand_product as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
@endsection
