@extends('admin_layout')
@section('tittle','All Product')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <table class="table table-striped b-t b-light" id="myTable">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Giá gốc</th>
                        <th>Hình sản phẩm</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Nội dung sản phẩm</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Tags sản phẩm</th>
                        <th>Thương hiệu</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $pro)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $pro->name }}</td>
                            <td>{{ $pro->qty }}</td>
                            <td>{{ number_format($pro->discount,0,',','.') }}đ</td>
                            <td>{{ number_format($pro->price,0,',','.') }}đ</td>
                            <td><img src="front/img/product/products/{{$pro->path}}" height="100" width="100"></td>
                            <td>{{ $pro->description }}</td>
                            <td>{{ $pro->content }}</td>
                            <td>{{ $pro->product_category_id }}</td>
                            <td>{{ $pro->tag }}</td>
                            <td>{{ $pro->brand_id}}</td>

                            <td>
                                <a href="{{URL::to('/edit-product/'.$pro->id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
