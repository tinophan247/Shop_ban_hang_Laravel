@extends('admin_layout')
@section('tittle','All Brand Product')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê thương hiệu sản phẩm
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
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên thương hiệu</th>
                        {{--                        <th>Thuộc thương hiệu</th>--}}
                        {{--                        <th>Slug</th>--}}
                        {{--                        <th>Thứ tự thương hiệu</th>--}}
                        <th>Hiển thị</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <style type="text/css">
                        #brand_order .ui-state-highlight
                        {
                            padding:24px;
                            background-color:#ffffcc;
                            border:1px dotted #ccc;
                            cursor:move;
                            margin-top:12px;
                        }
                    </style>

                    <tbody id="brand_order">

                    @foreach($all_brand_product as $key => $brand_pro)
                        {{--                        <tr id="{{$brand_pro->id}}">--}}
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $brand_pro->brand_name }}</td>

                            <td>
                                <a href="{{URL::to('/edit-brand-product/'.$brand_pro->id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa thương hiệu này ko?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-----import data---->
                {{--                <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">--}}
                {{--                    @csrf--}}

                {{--                    <input type="file" name="file" accept=".xlsx"><br>--}}

                {{--                    <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">--}}
                {{--                </form>--}}

                {{--                <!-----export data---->--}}
                {{--                <form action="{{url('export-csv')}}" method="POST">--}}
                {{--                    @csrf--}}
                {{--                    <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">--}}
                {{--                </form>--}}


            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            {{--                            {!!$all_brand_product->links()!!}--}}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
