@extends('admin.master')

@section('content')


<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dịch vụ
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung vắn tắt</th>
                                <th>Nội dung</th>
                                
                                <th>Nổi bật</th>
                                <th>Mới</th>
                                <th>Ngày thêm</th>

                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dichvu as $dv)
                            <tr class="odd gradeX" align="center">
                                <td>{{$dv->id}}</td>
                                <td>
                                    <div class="pull-left">
                                        <img width="100px" src="upload/dichvu/{{$dv->Hinh}}">
                                    </div>
                                    {{$dv->TieuDe}}
                                    
                                </td>

                                <td>{!!$dv->NoiDungVanTat!!}</td>
                                <td>{!!$dv->NoiDung!!}</td>
                                <td>
                                    @if($dv->NoiBat==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                <td>
                                    @if($dv->Moi==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                
                                
                                

                                <td>{{$dv->created_at}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/dichvu/xoa/{{$dv->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/dichvu/sua/{{$dv->id}}">Edit</a></td>
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