@extends('admin.master')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Nội dung</th>
                                <th>Nội dung vắn tắt</th>
                                <th>Nổi bật</th>
                                <th>Giá</th>
                                <th>Mới</th>
                                <th>Số lượt xem</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td>
                                    <div class="pull-left">
                                        <img width="100px" src="upload/sanpham/{{$sp->Hinh}}">
                                    </div>
                                    {{$sp->Ten}}
                                    
                                </td>
                                <td>{!!$sp->NoiDung!!}</td>
                                <td>{!!$sp->NoiDungVanTat!!}</td>
                                <td>
                                    @if($sp->NoiBat==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                <td>{{$sp->Gia}}</td>
                                <td>
                                    @if($sp->Moi==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                <td>{{$sp->SoLuotXem}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
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