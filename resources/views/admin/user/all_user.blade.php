@extends('admin_layout')
@section('tittle','All User')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê người dùng
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
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Mật khẩu</th>

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
                    <tbody id="user_order">

                    @foreach($all_user as $user)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $user->customer_name }}</td>
                            <td>{{ $user->customer_email }}</td>
                            <td>{{ $user->customer_phone }}</td>
                            <td>{{ $user->customer_password }}</td>

                            <td>
                                <a href="{{URL::to('/edit-user/'.$user->customer_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa user này ko?')" href="{{URL::to('/delete-user/'.$user->customer_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
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
                            {{--                            {!!$all_user->links()!!}--}}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
