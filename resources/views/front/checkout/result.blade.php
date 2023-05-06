@extends('front.layout.master')

@section('tittle','Result')
@section('body')
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="./">Trang chủ</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Kết quả</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Thanh toán thành công. Vui lòng kiểm tra email</h2>
                <a href="./" class="primary-btn mt-5">Tiếp tục mua sắm</a>
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
@endsection
