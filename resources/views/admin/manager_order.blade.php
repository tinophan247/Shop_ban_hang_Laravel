@extends('admin_layout')
@section('tittle','Manager Order')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê đơn hàng
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
                        <th>Tên danh mục</th>
                        <th>Tình trạng</th>
                        <th>Hiển thị</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <style type="text/css">
                        #category_order .ui-state-highlight
                        {
                            padding:24px;
                            background-color:#ffffcc;
                            border:1px dotted #ccc;
                            cursor:move;
                            margin-top:12px;
                        }
                    </style>

                    <tbody id="category_order">

                    @foreach($all_order as $order)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>
                                <a href="{{URL::to('/view_order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            {{--                            {!!$all_category_product->links()!!}--}}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
