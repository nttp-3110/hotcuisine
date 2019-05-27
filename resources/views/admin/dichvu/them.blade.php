@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dịch vụ
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
                <form action="admin/dichvu/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                     
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input id="TenLoai" class="form-control" name="TieuDe" placeholder="Nhập tên tiêu đề" required/>
                    </div>
                    <div class="form-group">
                        <label>Nội dung vắn tắt</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDungVanTat"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDung"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình</label>
                        <label class="radio-inline">
                            
                        </label>
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0" checked="" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1" type="radio">Không
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Mới</label>
                        <label class="radio-inline">
                            <input name="Moi" value="0" checked="" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input name="Moi" value="1" type="radio">Không
                        </label>
                    </div>
                   
                    <button type="submit" id="btn-them" class="btn btn-default">Thêm dịch vụ</button>
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