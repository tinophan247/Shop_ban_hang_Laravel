@extends('admin_layout')
@section('tittle','Add User')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm người dùng
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
                        <form role="form" action="{{URL::to('/save-user')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên khách hàng</label>
                                <input type="text"  class="form-control"  name="customer_name"  id="slug" placeholder="Tên khách hàng" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email khách hàng</label>
                                <input type="email"  class="form-control"  name="customer_email"  id="slug" placeholder="Email khách hàng" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text"  class="form-control"  name="customer_phone"  id="slug" placeholder="Tên khách hàng" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu khách hàng</label>
                                <input type="password"  class="form-control"  name="customer_password"  id="slug" placeholder="Tên khách hàng" >
                            </div>

                            <button type="submit" name="add_user" class="btn btn-info">Thêm Tài khoản</button>
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
