@extends('admin_layout')
@section('tittle','View order')
@section('admin_content')
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin người mua
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

                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>


                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>{{$order_by_id->customer_name}}</td>
                        <td>{{$order_by_id->customer_phone}}</td>
                        <td>{{$order_by_id->customer_email}}</td>

                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <br>
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin vận chuyển hàng
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

                        <th>Tên người vận chuyển</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ghi chú</th>


                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

                        <td>{{$order_by_id->shipping_name}}</td>
                        <td>{{$order_by_id->shipping_address}}</td>
                        <td>{{$order_by_id->shipping_phone}}</td>
                        <td>{{$order_by_id->shipping_email}}</td>
                        <td>{{$order_by_id->shipping_notes}}</td>


                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <br><br>

    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê chi tiết đơn hàng
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
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Tổng tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>{{$order_by_id->product_name}}</td>
                        <td>{{$order_by_id->product_sales_quantity}}</td>
                        <td>{{$order_by_id->product_price}}</td>
                        <td>{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
