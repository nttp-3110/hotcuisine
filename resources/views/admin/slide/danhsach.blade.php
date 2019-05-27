@extends('admin.master')

@section('content')


<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loai Sản Phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                
                                <th>STT</th>
                                <th>Ẩn hiện</th>
                                <th>Ngày thêm</th>

                                
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slide as $sl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sl->id}}</td>
                                <td>
                                    <div class="pull-left">
                                        <img width="100px" src="upload/slide/{{$sl->Hinh}}">
                                    </div>
                                    {{$sl->TieuDe}}
                                    
                                </td>
                                
                                <td>{{$sl->NoiDung}}</td>

                                <td><a href="#">{{$sl->STT}}</a></td>
                                <td>
                                    @if($sl->AnHien==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                <td>{{$sl->created_at}}</td>
                                
                               
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/sua/{{$sl->id}}">Sửa</a></td>
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