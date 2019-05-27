@extends('admin.master')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/nguoidung/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input class="form-control" name="name" placeholder="Please Enter Họ tên" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="Email" class="form-control" name="email" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="passwordAgain" placeholder="Please Enter Nhập lại mật khẩu" />
                    </div>
                    
                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="level" value="0" checked="" type="radio">Thành viên
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="1"  type="radio">Admin
                        </label>
                        
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">LÀm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection