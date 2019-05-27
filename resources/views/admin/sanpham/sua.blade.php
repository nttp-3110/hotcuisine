@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm:{{$sanpham->Ten}}
                    <small>Sửa</small>
                
                </h1>
            </div>
        <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select name="idLoaiSP" id="LoaiSP" class="form-control">
                            @foreach($loaisp as $sp)
                                <option value="{{$sp->id}}"
                                @if($sanpham->loaisp->idLoaiSP == $sp->id)
                                    {{"selected"}}
                                @endif

                                >{{$sp->Ten}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    
                    <div class="form-group">
                        <label>Tên</label>
                        <input id="Ten" class="form-control" name="Ten" placeholder="Nhập tên sản phẩm" required value="{{$sanpham->Ten}}" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung vắn tắt</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDungVanTat"  id="demo" >{{$sanpham->NoiDungVanTat}}</textarea>
                    </div>
                   
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  class="form-control ckeditor" rows="3" name="NoiDung"  id="demo" >{{$sanpham->NoiDung}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input  class="form-control" name="Gia" value="{{$sanpham->Gia}}"/>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="upload/sanpham/{{$sanpham->Hinh}}">
                        <input type="file" name="Hinh" />
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        
                        <label class="radio-inline">
                            <input 
                                @if($sanpham->NoiBat==1)
                                    {{"checked"}}
                                @endif
                            name="NoiBat" value="1" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($sanpham->NoiBat==0)
                                    {{"checked"}}
                                @endif
                            name="NoiBat" value="0"  type="radio">Không
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Mới</label>
                        
                        <label class="radio-inline">
                            <input 
                                @if($sanpham->Moi==1)
                                    {{"checked"}}
                                @endif
                            name="Moi" value="1" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if($sanpham->Moi==0)
                                    {{"checked"}}
                                @endif
                            name="Moi" value="0"  type="radio">Không
                        </label>
                    </div>

                    
                    <button type="submit" class="btn btn-default">Sửa sản phẩm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
                    <div class="col-lg-12">Bình luận
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                        {{session('thongbao')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Người dùng</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($sanpham->binhluan as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bl->id}}</td>
                                <td>{{$bl->user->name}}</td>
                                <td>{!!$bl->NoiDung!!}</td>
                                <td>{{$bl->created_at}}</td>
                                <td class="center"><a href="admin/binhluan/xoa/{{$bl->id}}/{{$sanpham->id}}"> <i class="fa fa-trash-o  fa-fw"></i></a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
    </div>
            <!-- /.container-fluid -->
</div>

@endsection

