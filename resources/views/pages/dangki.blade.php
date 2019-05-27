@extends('layout.index')
@section('content')
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="margin-top:15%">
            <div class="panel panel-default">
			  	<div class="panel-heading" style="background:#ECB731;color:#821A1A;text-align:center">Đăng ký tài khoản</div>
			  	<div class="panel-body">
			  	@if(count($errors)>0)
                   		<div class="alert alert-danger">
                   			@foreach($errors->all() as $err)
                   				{{$err}}<br>
                   			@endforeach
                   		</div>
                   @endif
                   @if(isset($mess))
                   		<div class="alert alert-danger">
                   			{{$mess}}
                   		</div>

                   @endif
			    	<form action="register" method="post">
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			    	
			    		<div>
			    			<label>Họ tên</label>
						  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
						  	>
						</div>
						<br>	
						<div>
							
			    			<label>Nhập mật khẩu</label>
						  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Nhập lại mật khẩu</label>
						  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
						</div>
						<br>
						<button type="submit" class="btn btn-default" style="margin-left: 30%;background: #821A1A;color: #ECB731">Đăng ký
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