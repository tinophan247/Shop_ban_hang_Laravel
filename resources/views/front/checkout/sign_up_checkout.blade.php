@extends('front.layout.master')

@section('tittle','Sign up')
@section('body')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="#">Trang chủ</a>
                    <span><i class="fa fa-caret-right	"></i></span>
                    <span>Đăng ký tài khoản</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="page-title">Tạo tài khoản</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- PERSONAL-INFOMATION START -->
                <div class="personal-infomation">
                    <form class="primari-box personal-info-box" id="personalinfo" method="POST" action="/add_customer">
                        @csrf
                        <div class="personal-info-content">
                            <div class="form-group primary-form-group p-info-group">
                                <label for="lastname">Họ và tên <sup>*</sup></label>
                                <input type="text" value="" name="customer_name" id="lastname" class="form-control input-feild">
                            </div>
                            <div class="form-group primary-form-group p-info-group">
                                <label for="email">Email<sup>*</sup></label>
                                <input type="email" value="" name="customer_email" id="email_account" class="form-control input-feild">
                            </div>
                            <div class="form-group primary-form-group p-info-group">
                                <label for="password">Password <sup>*</sup></label>
                                <input type="password" value="" name="customer_password" id="password" class="form-control input-feild">
                                <span class="min-pass">(Tối thiểu 6 ký tự)</span>
                            </div>
                            <div class="form-group primary-form-group p-info-group">
                                <label for="phone">Số điện thoại <sup>*</sup></label>
                                <input type="text" value="" name="customer_phone" id="phone" class="form-control input-feild">
                            </div>
                            <div class="submit-button p-info-submit-button">
                                <button type="submit" class="btn btn-default" >Đăng ký</button>
                            </div>
                        </div>
                    </form>
                    <ul class="text-alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
{{--                    <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>--}}
{{--                    <br/>--}}
{{--                    @if($errors->has('g-recaptcha-response'))--}}
{{--                        <span class="invalid-feedback" style="display:block">--}}
{{--	                    <strong>{{$errors->first('g-recaptcha-response')}}</strong>--}}
{{--                        </span>--}}
{{--                    @endif--}}

{{--                </div>--}}
                <!-- PERSONAL-INFOMATION END -->
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@endsection
