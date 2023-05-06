@extends('admin_layout')
@section('tittle','Edit User')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thông tin người dùng
                </header>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                    @foreach($edit_user as $user)
                        <div class="position-center">
                            <form role="form" action="{{URL::to('/update-user/'.$user->customer_id)}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách hàng</label>
                                    <input type="text" value="{{$user->customer_name}}"  class="form-control"  name="customer_name"  id="slug" placeholder="Tên khách hàng" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email khách hàng</label>
                                    <input type="email" value="{{$user->customer_email}}"  class="form-control"  name="customer_email"  id="slug" placeholder="Email khách hàng" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" value="{{$user->customer_phone}}" class="form-control"  name="customer_phone"  id="slug" placeholder="Tên khách hàng" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu khách hàng</label>
                                    <input type="password" value="{{$user->customer_password}}" class="form-control"  name="customer_password"  id="slug" placeholder="Tên khách hàng" >
                                </div>

                                <button type="submit" name="update_user" class="btn btn-info">Cập nhật User</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
@endsection
