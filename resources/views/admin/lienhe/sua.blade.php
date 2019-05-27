@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Liên hệ
                    <small>Sửa</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/lienhe/sua/{{$lienhe->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" id="TenLoai"  name="DiaChi" value="{{$lienhe->DiaChi}}" />
                    </div>
                   
                   <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" id="TenLoai"  name="SoDienThoai" value="{{$lienhe->SoDienThoai}}" type="number" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" id="TenLoai"  name="Email" value="{{$lienhe->Email}}" type="email" />
                    </div>
                    <div class="form-group">
                        <label>Thông tin</label>
                        <input class="form-control" id="TenLoai"  name="ThongTin" value="{{$lienhe->ThongTin}}" />
                    </div>
                    <button type="submit" id="btn-sua" class="btn btn-default">Thay đổi</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
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
            $("#btn-sua").click(function(event){
                var TenLoai=$("#TenLoai").val();
                if(TenLoai.length<3)
                {
                    event.preventDefault();
                    alert("Tên loại tin phải có ít nhất 3 ký tự");
                }
            });
        });
    </script>
@endsection