@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Thêm</small>
                </h1>
            </div>
        <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                @if(isset($errors))
                    @foreach($errors->all() as $error)
                       <div class="alert alert-danger"> 
                        {{$error}}<br>
                       </div>
                    @endforeach
                @endif
                <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select name="idLoaiSP" id="LoaiSP" class="form-control">
                            @foreach($loaisp as $sp)
                                <option value="{{$sp->id}}">{{$sp->Ten}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input id="Ten" class="form-control" name="Ten" placeholder="Nhập tiêu đề" required/>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDung"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung vắn tắt</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDungVanTat"  id="demo" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình</label>
                        <label class="radio-inline">
                            
                        </label>
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input id="Gia" class="form-control" name="Gia" placeholder="Nhập giá sản phẩm" type="number" required/>
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

                    <div class="form-group">
                        <label>Mới</label>
                        <label class="radio-inline">
                            <input name="Moi" value="0" checked="" type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="Moi" value="1" type="radio">Có
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
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
            $('#TheLoai').change(function(){
                var idTheLoai=$(this).val();
                /*alert(idTheLoai);*/
                $.get('admin/ajax/loaitin/'+idTheLoai,function(data){
                    $('#LoaiTin').html(data);
                });
            });
        });
    </script>
@endsection