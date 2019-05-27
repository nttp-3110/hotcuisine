@extends('admin.master')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(isset($errors))
                    @foreach($errors->all() as $error)
                       <div class="alert alert-danger"> 
                        {{$error}}<br>
                       </div>
                    @endforeach
                @endif
                <form action="admin/loaisp/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                     
                    <div class="form-group">
                        <label>Tên loại sản phẩm</label>
                        <input id="TenLoai" class="form-control" name="Ten" placeholder="Nhập tên loại sản phẩm" required/>
                    </div>
                   
                    <button type="submit" id="btn-them" class="btn btn-default">Thêm loại sản phẩm</button>
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
            $("#btn-them").click(function(event){
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