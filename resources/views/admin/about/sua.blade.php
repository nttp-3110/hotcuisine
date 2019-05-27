@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>Sửa</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/about/sua/{{$about->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                   
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" id="TieuDe"  name="TieuDe" value="{{$about->TieuDe}}" />
                    </div>
                   
                   <div class="form-group">
                        <label>Thông tin nổi bật</label>
                        <textarea  class="form-control ckeditor" rows="3" name="ThongTinNoiBat"  id="demo" >{{$about->ThongTinNoiBat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDung"  id="demo" >{{$about->NoiDung}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="upload/about/{{$about->Hinh}}">
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Mới</label>
                        
                        <label class="radio-inline">
                            <input 
                                @if($about->Moi==1)
                                    {{"checked"}}
                                @endif
                            name="Moi" value="1" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($about->Moi==0)
                                    {{"checked"}}
                                @endif
                            name="Moi" value="0"  type="radio">Không
                        </label>
                    </div>
                     <div class="form-group">
                        <label>Nổi bật</label>
                        
                        <label class="radio-inline">
                            <input 
                                @if($about->NoiBat==1)
                                    {{"checked"}}
                                @endif
                            name="NoiBat" value="1" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($about->NoiBat==0)
                                    {{"checked"}}
                                @endif
                            name="NoiBat" value="0"  type="radio">Không
                        </label>
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