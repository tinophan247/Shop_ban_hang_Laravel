@extends('front.layout.master')

@section('tittle','Login')
@section('body')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="#">Trang Chủ</a>
                    <span><i class="fa fa-caret-right	"></i></span>
                    <span>Đăng nhập / Đăng ký</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="page-title">Đăng nhập / Đăng ký</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- CREATE-NEW-ACCOUNT START -->
                <div class="create-new-account">
                    <form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
                        <h3 class="box-subheading">Chưa có tài khoản</h3>
                        <div class="form-content">

                            <div class="submit-button">
                                <a href="./sign_up_checkout" id="SubmitCreate" class="btn main-btn">
											<span>
												<i class="fa fa-user submit-icon"></i>
												Tạo tài khoản
											</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- CREATE-NEW-ACCOUNT END -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- REGISTERED-ACCOUNT START -->
                <div class="primari-box registered-account">
                    <form class="new-account-box" id="accountLogin" method="post" action="/login_customer">
                        @csrf
                        <h3 class="box-subheading">Đã có tài khoản?</h3>
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                        <ul class="text-alert">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        <div class="form-content" >
                            <div class="form-group primary-form-group">
                                <label for="loginemail">Email </label>
                                <input type="email"  name="email_account" id="loginemail" class="form-control input-feild" required="">
                            </div>
                            <div class="form-group primary-form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" name="password_account" id="password" class="form-control input-feild" required="">
                            </div>
                            <div class="forget-password">
                                <p><a href="#">Quên mật khẩu?</a></p>
                            </div>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-default" >Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- REGISTERED-ACCOUNT END -->
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@endsection
