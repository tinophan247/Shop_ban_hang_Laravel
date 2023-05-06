@extends('admin_layout')
@section('tittle','Add Category Product')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phẩm
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
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="category_product_name"  id="slug" placeholder="danh mục" required="" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                            </div>

                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                        <ul class="alert text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </section>

        </div>
@endsection
