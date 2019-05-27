@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User {!!$nguoidung->name!!}
                    <small>Edit</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/nguoidung/sua/{{$nguoidung->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input class="form-control" name="name" placeholder="{!!$nguoidung->name!!}" value="{!!$nguoidung->name!!}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="Email" class="form-control" name="email" placeholder="{!!$nguoidung->email!!}" value="{!!$nguoidung->email!!}" readonly="{!!$nguoidung->email!!}" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="checkPassword" name="checkPassword">
                        <label>Đổi mật khẩu</label>
                        <input type="password" class="form-control inputMatKhau" name="password" placeholder="Please Enter Mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control inputMatKhau" name="passwordAgain" disabled="" placeholder="Please Enter Nhập lại mật khẩu" />
                    </div>
                    
                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="level" value="0"  type="radio"
                            @if($nguoidung->level==0)
                            {{"checked"}}
                            @endif
                       >Thành viên
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="1" type="radio" 
                            @if($nguoidung->level==1)
                            {{"checked"}}
                            @endif
                            >Admin
                        </label>
                        
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">LÀm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
@section('script')

    <script>
        $(document).ready(function(){
            
            $('.checkPassword').change(function(){
                if($(this).is(":checked"))
                {
                    
                    $('.inputMatKhau').removeAttr('disabled');
                }
                else
                {
                    $('.inputMatKhau').attr('disabled','');
                }
            });
        });
    </script>
@endsection