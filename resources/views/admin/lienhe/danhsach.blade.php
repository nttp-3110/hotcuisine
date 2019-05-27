@extends('admin.master')

@section('content')


<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liên hệ
                            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Thông tin</th>
                                <th>Thay đổi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lienhe as $lh)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$lh->DiaChi}}</td>
                                <td>{{$lh->SoDienThoai}}</td>
                                <td>{{$lh->Email}}</td>
                                <td>{{$lh->ThongTin}}</td>
                                
                               
                                <td class="center"><a href="admin/lienhe/sua/{{$lh->id}}"><i class="fa fa-pencil fa-fw"></i></a></td>
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