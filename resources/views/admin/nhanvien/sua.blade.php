@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$nhanvien->Ten}}
                    <small>Sửa</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/nhanvien/sua/{{$nhanvien->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                    </div>
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input class="form-control" id="TenLoai"  name="Ten" value="{{$nhanvien->Ten}}" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="upload/nhanvien/{{$nhanvien->Hinh}}">
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <input class="form-control" id="TenLoai"  name="GioiThieu" value="{{$nhanvien->GioiThieu}}" />
                    </div>
                    <div class="form-group">
                        <label>Link Facebook</label>
                        <input class="form-control" id="TenLoai"  name="LinkFB" value="{{$nhanvien->LinkFB}}" />
                    </div>
                    <div class="form-group">
                        <label>Link Twiter</label>
                        <input class="form-control" id="TenLoai"  name="LinkTwiter" value="{{$nhanvien->LinkTwiter}}" />
                    </div>
                    <div class="form-group">
                        <label>Link Google</label>
                        <input class="form-control" id="TenLoai"  name="LinkGoogle" value="{{$nhanvien->LinkGoogle}}" />
                    </div>
                   
                    <button type="submit" id="btn-sua" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Reset</button>
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