@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$loaisp->Ten}}
                    <small>Sửa</small>
                
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="admin/loaisp/sua/{{$loaisp->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                    
                    <div class="form-group">
                        <label>Tên loại sản phẩm</label>
                        <input class="form-control" id="TenLoai"  name="Ten"  value="{{$loaisp->Ten}}" />
                    </div>
                   
                    <button type="submit" id="btn-sua" class="btn btn-default">Sửa loại sản phẩm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
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