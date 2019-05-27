@extends('admin.master')

@section('content')


<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giới thiệu</th>
                                <th>Facebook</th>
                                <th>Twiter</th>
                                <th>Google</th>
                                <th>Ngày thêm</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nhanvien as $nv)
                            <tr class="odd gradeX" align="center">
                                <td>{{$nv->id}}</td>
                                <td>{!!$nv->Ten!!}
                                    <img src="upload/nhanvien/{{$nv->Hinh}}"  width="20%" height="20%" />
                                </td>
                                
                                <td>{!!$nv->GioiThieu!!}</td>
                                <td>{!!$nv->LinkFB!!}</td>
                                <td>{!!$nv->LinkTwiter!!}</td>
                                <td>{!!$nv->LinkGoogle!!}</td>
                                <td>{{$nv->created_at}}</td>
                                
                                <td class="center"><a href="admin/nhanvien/xoa/{{$nv->id}}"><i class="fa fa-trash-o  fa-fw"></i> </a></td>
                                <td class="center"><a href="admin/nhanvien/sua/{{$nv->id}}"><i class="fa fa-pencil fa-fw"></i></a></td>
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