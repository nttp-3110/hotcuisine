@extends('layout.index')
@section('content')
<div class="clear"></div>
<div class="main-grid-one1"  id="one">
	@foreach($slide as $sl)
		@if($sl->STT==1)
	<div class="home-banner" style="background-image: url('upload/slide/{{$sl->Hinh}}')">

		
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s" >
			<h1>{!!$sl->TieuDe!!}</h1>
			<span class="span-dream-bar"> </span>
			<p>{!!$sl->NoiDung!!}</p>
		</div>
		
	</div>
		@endif
	@endforeach
	<!--furniture-->
	<div class="furniture">
		<div class="container">

			<div class="furniture-main">
				@foreach($sanphammoi as $sp)
				<div class="col-md-4 furniture-grid wow bounceInLeft" data-wow-delay="0.3s">
					<figure>
						<img src="upload/sanpham/{{$sp->Hinh}}" alt="" class="img_responsive" style="width:100%;height:240px">
					</figure>
					<h4><a href="sanpham/{{$sp->id}}-{{$sp->TenKhongDau}}">{!!$sp->Ten!!}</a></h4>
					<p>{!!$sp->NoiDungVanTat!!}</p>
					
				</div>
				@endforeach

				<div class="col-md-4 furniture-grid no-marg wow bounceInRight" data-wow-delay="0.3s">
					@foreach($sanphamnoibat as $sp)

					<div class="furni-small-grid">
					   <div class="furnitu-left">
					  	  <a href="sanpham/{{$sp->id}}-{{$sp->TenKhongDau}}"><img src="upload/sanpham/{{$sp->Hinh}}" alt="" class="img-responsive"></a>
					   </div>
					   <div class="furnitu-right">
					  	  <h5><a href="sanpham/{{$sp->id}}-{{$sp->TenKhongDau}}">{!!$sp->Ten!!}</a></h5>
					  	  <p>{!!$sp->NoiDungVanTat!!}</p>
					   </div>
					 <div class="clearfix"> </div>
					</div>
					@endforeach
				</div>
			 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--promiss-->
	@foreach($slide as $sl)
		@if($sl->STT==2)
	<div class="promiss" style="background-image: url(upload/slide/{{$sl->Hinh}})">
		<div class="container">
			<div class="promiss-main wow bounceInDown" data-wow-delay="0.3s">
				<h3>{!!$sl->TieuDe!!}</h3>
				<p>{!!$sl->NoiDung!!}</p>
			</div>
		</div>
	</div>
		@endif
	@endforeach
	<!---welcome-->
	<div class="welcome">
		<div class="container">
			<div class="welcome-main">
				<div class="welcome-top">
					<h3>Chào mừng quý khách đến với nhà hàng ẩm thực Hot Cuisine</h3>
				</div>
				<div class="welcome-bottom">
					<div class="col-md-6 welcome-left wow bounceInUp" data-wow-delay="0.3s">
					@foreach($about as $ab)
						<h4> {!!$ab->TieuDe!!}</h4>
						<p>{!!$ab->ThongTinNoiBat!!}</p>
					@endforeach
					</div>
					@foreach($sanphammoi as $sp)
					   <div class="col-md-3 wel-img1 wow bounceInLeft" data-wow-delay="0.3s">
						   <a href="sanpham/{{$sp->id}}-{!!$sp->TenKhongDau!!}"><ul class="welcome-grid gr-welcome ">
								<li>
								   <h4 class="zero">{!!$sp->Ten!!}</h4>
								   <p class="zero">{!!$sp->NoiDungVanTat!!}</p>
								</li>
								<li><img class="top" src="upload/sanpham/{{$sp->Hinh}}" alt=""/></li>
							</ul></a>
					   </div>
					@endforeach
				  <div class="clearfix"> </div>
				</div>
			</div>
		</div>
</div>
@endsection