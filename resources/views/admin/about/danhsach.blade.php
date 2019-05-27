@extends('admin.master')

@section('content')


<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">About
                            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>ID</th>
                                
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Thông tin nổi bật</th>
                                <th>Mới</th>
                                <th>Nổi bật</th>
                                <th>Thay đổi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($about as $ab)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$ab->id}}</td>
                                <td><img src="upload/about/{{$ab->Hinh}}" width="10%" height="10%" />
                                {{$ab->TieuDe}}</td>
                                <td>{!!$ab->NoiDung!!}</td>
                                <td>{!!$ab->ThongTinNoiBat!!}</td>
                                <td>
                                    @if($ab->Moi==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                <td>
                                    @if($ab->NoiBat==0)
                                        {{"Không"}}
                                    @else
                                        {{"Có"}}
                                    @endif
                                </td>
                                
                                <td class="center"><a href="admin/about/xoa/{{$ab->id}}"><i class="fa fa-trash-o  fa-fw"></i></a> 
                                <a href="admin/about/sua/{{$ab->id}}"><i class="fa fa-pencil fa-fw"></i></a></td>

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