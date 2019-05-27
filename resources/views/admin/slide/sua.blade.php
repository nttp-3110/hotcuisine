@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$slide->TieuDe}}
                    <small>Sửa</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/slide/sua/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                   
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" id="TenLoai"  name="TieuDe" placeholder="Nhập tiêu đề" value="{{$slide->TieuDe}}" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="upload/slide/{{$slide->Hinh}}">
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input class="form-control" id="TenLoai"  name="NoiDung"  value="{{$slide->Noidung}}" />
                    </div>
                    <div class="form-group">
                        <label>STT</label>
                        <label class="radio-inline">
                            <input 
                                @if($slide->STT==0)
                                    {{"checked"}}
                                @endif
                            name="STT" value="1"  type="radio">1
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($slide->STT==1)
                                    {{"checked"}}
                                @endif
                            name="STT" value="2" type="radio">2
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($slide->STT==3)
                                    {{"checked"}}
                                @endif
                            name="STT" value="3" type="radio">3
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Ẩn hiện</label>
                        <label class="radio-inline">
                            <input 
                                @if($slide->AnHien==0)
                                    {{"checked"}}
                                @endif
                            name="AnHien" value="0"  type="radio">Ẩn
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($slide->AnHien==1)
                                    {{"checked"}}
                                @endif
                            name="AnHien" value="1" type="radio">Hiện
                        </label>
                    </div>

                   
                    <button type="submit" id="btn-sua" class="btn btn-default">Sửa slide</button>
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