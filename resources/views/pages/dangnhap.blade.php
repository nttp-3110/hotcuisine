@extends('layout.index')
@section('content')
<div class="main-grid-one5">

    	<!-- slider -->
    	<div class="row carousel-holder ">
    		<div class="col-md-4"></div>
        
            <div class="col-md-4" style="margin-top:15%">
                <div class="panel panel-default">
				  	<div class="panel-heading" style="background:#ECB731;color:#821A1A;text-align:center">Đăng nhập</div>
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

                   @if(session('thongbao'))
                   	<div class="alert alert-success">
                   		{{session('thongbao')}}
                   	</div>
                   @endif
				    	<form action="login" method="post">
				    		<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" name="password">
							</div>
							<br>
							<button type="submit" class="btn btn-default" style="margin-left: 25%;background: #821A1A;color: #ECB731">Đăng nhập
              </button>
              <button type="reset" class="btn btn-default" style="margin-left: 5%;background: #821A1A;color: #ECB731">Làm mới
              </button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
@endsection