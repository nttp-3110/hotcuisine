
@extends('admin.master')
@section('content')
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="padding-bottom:15%">
            <div class="panel panel-default" style="margin: 5% 0 0 25%">
			  	<div class="panel-heading" style="background:#ECB731;color:#821A1A;text-align:center">THÔNG TIN TÀI KHOẢN</div>
			  	<div class="panel-body">
			  	@if(session('thongbao'))
                   	<div class="alert alert-success">
                   		{{session('thongbao')}}
                   	</div>
                   @endif
			    	<form action="admin/user" method="post">
			    		<input type="hidden" name="_token" value="{{csrf_token()}}">
			    		<div>
			    			<label>Họ tên</label>
						  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="{{$user->name}}">
						</div>
						<br>
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
						  	readonly value="{{$user->email}}" 
						  	>
						</div>
						<br>	
						<div>
							<input type="checkbox" class="checkPassword" name="checkPassword">
			    			<label>Đổi mật khẩu</label>
						  	<input disabled="" type="password" class="form-control inputMatKhau" name="password" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Nhập lại mật khẩu</label>
						  	<input disabled="" type="password" class="form-control inputMatKhau" name="passwordAgain" aria-describedby="basic-addon1">
						</div>
						<br>
						<button type="submit" class="btn btn-default" style="margin-left: 30%;background: #821A1A;color: #ECB731">Sửa thông tin
						</button>
						<button type="reset" class="btn btn-default" style="margin-left: 20%;background: #821A1A;color: #ECB731">Làm mới</button>

			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <!-- end slide -->
</div>
@endsection

@section('script')

	<script>
		$(document).ready(function(){
			
			$('.checkPassword').change(function(){
				if($(this).is(":checked"))
				{
					
					$('.inputMatKhau').removeAttr('disabled');
				}
				else
				{
					$('.inputMatKhau').attr('disabled','');
				}
			});
		});
	</script>
@endsection