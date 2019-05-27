@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>Thêm</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/about/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                   
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" id="TieuDe"  name="TieuDe" placeholder="Nhập tiêu đề" />
                    </div>
                   
                   <div class="form-group">
                        <label>Thông tin nổi bật</label>
                        <textarea  class="form-control ckeditor" rows="3" name="ThongTinNoiBat"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDung"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Mới</label>
                        <label class="radio-inline">
                            <input name="Moi" value="0" checked="" type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="Moi" value="1" type="radio">Có
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0" checked="" type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1" type="radio">Có
                        </label>
                    </div>
                    <button type="submit" id="btn-sua" class="btn btn-default">Thêm</button>
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