@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(isset($errors))
                    @foreach($errors->all() as $error)
                       <div class="alert alert-danger"> 
                        {{$error}}<br>
                       </div>
                    @endforeach
                @endif
                <form action="admin/nhanvien/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                    
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input class="form-control" id="TenLoai"  name="Ten" placeholder="Nhập tên nhân viên">
                    <div class="form-group">
                        <label>Hình</label>
                        <label class="radio-inline">
                            
                        </label>
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <textarea  class="form-control ckeditor" rows="3" name="GioiThieu"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Link Facebook</label>
                        <input class="form-control" id="TenLoai"  name="LinkFB" placeholder="Nhập link facebook"/>
                    </div>
                    <div class="form-group">
                        <label>Link Twiter</label>
                        <input class="form-control" id="TenLoai"  name="LinkTwiter" placeholder="Nhập link Twiter" />
                    </div>
                    <div class="form-group">
                        <label>Link Google</label>
                        <input class="form-control" id="TenLoai"  name="LinkGoogle" placeholder="Nhập link google" />
                    </div>
                   
                    <button type="submit" id="btn-sua" class="btn btn-default">Thêm</button>
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
            $("#btn-them").click(function(event){
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