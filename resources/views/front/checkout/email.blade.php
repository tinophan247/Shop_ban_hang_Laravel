
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <title>Order Notification | CodeLean eCommerce</title>
</head>

<body
    style="background-color: #e7eff8; font-family: trebuchet,sans-serif; margin-top: 0; box-sizing: border-box; line-height: 1.5;">
<div class="container-fluid">
    <div class="container" style="background-color: #e7eff8; width: 600px; margin: auto;">
        <div class="col-12 mx-auto" style="width: 580px;  margin: 0 auto;">

            <div class="row">
                <div class="container-fluid">
                    <div class="row" style="background-color: #e7eff8; height: 10px;">

                    </div>
                </div>
            </div>

            <div class="row"
                 style="height: 100px; padding: 10px 20px; line-height: 90px; background-color: white; box-sizing: border-box;">

<h1 class="pl-2"
    style="color: orange; line-height: 30px; float: left; padding-left: 20px; font-size: 40px; font-weight: 500;">
    Tino Fashion Shop
</h1>
</div>

<div class="row" style="background-color: #00509d; height: 200px; padding: 35px; color: white;">
    <div class="container-fluid">
        <h3 class="m-0 p-0 mt-4" style="margin-top: 0; font-size: 28px; font-weight: 500;">
            <strong style="font-size: 32px;">Thông báo đơn hàng đặt thành công</strong>
            <br>
            Cảm ơn bạn rất nhiều đã ủng hộ shop
        </h3>
        <div class="row mt-5" style="margin-top: 35px; display: flex;">
            <div class="col-6"
                 style="margin-bottom: 25px; flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                <b>{{ $order->shipping_name }}</b>
                <br>
                <span>
                                <a style="color: white !important;" href="mailto:{{ $order->shipping_email }}" target="_blank">{{ $order->shipping_email }}</a>
                            </span>
                <br>
                <span>{{ $order->shipping_phone }}</span>
            </div>
            <div class="col-6" style="flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                <b>Ngày đặt hàng:</b> {{ date('d/m/yy H:i', strtotime($order->created_at)) }}
                <br>
                <b>Địa chỉ:</b> {{ $order->shipping_address }}
            </div>
        </div>
    </div>
</div>

<div class="row mt-2 p-4" style="background-color: white; margin-top: 15px; padding: 20px;">
    <table>
        <tr>
            <td>
                <img
                    src="https://ci6.googleusercontent.com/proxy/8eUxMUXMkvgUKX8veBCRQM5N7-jXP0Wx8KjQLaGDch2DnV_5HYw9PMgJXsoqgSR_jonTY9jAftWPKNsN5W9cUUneQ9hz7IhxH4rIXNzHMm0ijbsNjHB9m7g6XfJJ=s0-d-e1-ft#https://www.bambooairways.com/reservation/common/hosted-images/tickets.jpg"
                    alt="">
            </td>


                <td class="pl-3" style=" padding-left:15px;">
                                <span class="d-inline"
                                      style="color:#424853; font-family:trebuchet,sans-serif; font-size:16px; font-weight:normal; line-height:22px;">
                                    Bạn nhận hàng , kiểm tra hàng rồi thanh toán cho shipper nhé
                                </span>
                </td>


{{--            @if($order_by_id->payment_type == "1")--}}
{{--                <td class="pl-3" style=" padding-left:15px;">--}}
{{--                                <span class="d-inline"--}}
{{--                                      style="color:#424853; font-family:trebuchet,sans-serif; font-size:16px; font-weight:normal; line-height:22px;">--}}
{{--                                    Bạn đã thanh toán thực tiếp, đơn hàng sẽ giao tới bạn sớm nhất--}}
{{--                                </span>--}}
{{--                </td>--}}
{{--                <td class="pl-3" style=" padding-left:10px;">--}}
{{--                    <img src="https://vnpay.vn/wp-content/uploads/2020/07/Logo-VNPAYQR-update.png"--}}
{{--                         width="130px" style="margin-top: 10px;" alt="">--}}
{{--                </td>--}}
{{--            @endif--}}

        </tr>
    </table>
</div>

<div class="row mt-2" style="margin-top: 15px;">
    <div class="container-fluid">
        <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
            <b>Order details</b>
        </div>
        <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px 10px 20px;">
            <table class="table table-sm table-hover"
                   style="text-align: left;  width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                <thead>
                <tr>
                    <th style="padding: 5px 0;">Sản phẩm</th>
                    <th style="padding: 5px 20px 5px 0; text-align: right;">Tổng cộng</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($order->orderDetails as $orderDetail)
                    <tr>
                        <td style="border-top: 1px solid #dee2e6; padding: 5px 0;">
                            {{ $orderDetail->product_name . ' (x' . $orderDetail->product_sales_quantity . ')'}}
                        </td>
                        <td style="border-top: 1px solid #dee2e6; padding: 5px 20px 5px 0; text-align: right;">
                            {{ $orderDetail->product_price * $orderDetail->product_sales_quantity }} đ
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-2" style="margin-top: 15px;">
    <div class="container-fluid">
        <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
            <b>Details of payment</b>
        </div>
        <div class="row pl-3 py-2"
             style="background-color: #fff; font-size: 18px; padding: 2px 20px 10px 20px;">
            <div class="col-12 p-0">
                <hr style="border-top: 1px solid #0000001a;">
                <table class="mt-2 w-100"
                       style="font-size: 16px; width: 100%; text-align: left;  margin-bottom: 5px;">
                    <tr>
                        <td class="">Phí giao hàng</td>
                        <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">
                            Miễn phí
                        </td>
                    </tr>
                    <tr>
                        <td class="">Thành tiền</td>
                        <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">
                            {{ $subtotal }} đ
                        </td>
                    </tr>
                    <tr style="font-size: 18px;">
                        <td><b>Tổng thành tiền</b></td>
                        <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">
                            <b>{{ $total }} đ</b>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2 mb-4" style="margin-top: 15px; margin-bottom: 25px;">
    <div class="container-fluid">
        <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
            <b style="color: #00509d; font-size: 18px;">Thông tin thêm</b>
        </div>
        <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px;">
            <p>Cảm ơn bạn đã tin tưởng chọn sản phẩm từ Tino Shop, nếu có vấn đề gì liên quan đến đổi trả hàng, vui lòng nhắn tin qua số điện thoại hoặc Zalo: 0989989898</p>

            <b>Tino chân thành cảm ơn.</b>
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid">
        <div class="row" style="background-color: #e7eff8; height: 10px;">

        </div>
    </div>
</div>
</div>
</div>
</div>
</body>

</html>

