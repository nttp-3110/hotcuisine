@extends('layout.index')
@section('content')
<div class="main-grid-one3" id="three">

	<div class="services">
	    <div class="temp-heading" style="padding: 10em 0em 3em 0em;">
		    <h3 class="main-head">Dịch vụ</h3>
		</div>
		<div class="services-1">
		   	<div class="container"> 
		   		<div class="services-1-main">
		   	 	@foreach($dichvu as $dv)
			   	 	<div class="col-md-4 service-grid wow bounceInDown" data-wow-delay="0.3s">
			   	 		<a href="#" class="hi-icon hi-icon-archive"><span class="ser1" style="background:url('upload/dichvu/{{$dv->Hinh}}');background-repeat:no-repeat;background-position:17px 18px"> </span></a>
			   	 		<h3>{!!$dv->TieuDe!!}</h3>
			   	 		<p>{!!$dv->NoiDung!!}</p>
			   	 	</div>
		   	 @endforeach
		   		<div class="clearfix"> </div>
		 	</div>
		   	<div class="services-middle">
		   	 	<h3>Các sản phẩm đặc biệt</h3>
		   	 	<div class="ser-mid-imgs">
		   	 	@foreach($sanphammoi as $sp)
			   	 	<div class="col-md-6 ser-mid-lft-img1 wow bounceInLeft" data-wow-delay="0.3s">
			   	 		<img src="upload/sanpham/{{$sp->Hinh}}" alt="" style="width:100%;height:220px">
			   	 	</div>
			   	@endforeach
			   	 	<!-- <div class="col-md-6 ser-mid-rit-img2 wow bounceInRight" data-wow-delay="0.3s">
			   	 		<img src="images/plat2.png" alt="">	   	 	
			   	 	</div> -->
			   	  	<div class="clearfix"> </div>
		   	 	</div>
		   	 	@foreach($dichvunoibat as $dv)
			   	    <h4>{!!$dv->TieuDe!!}</h4>
			   	    <p>{!!$dv->NoiDung!!}</p>
		   		@endforeach
		   	</div>
		   	<div class="spl-offers">
		   	 	<div class="col-md-8 spl-left">
		   	 		<h3>Sản phẩm đặc biệt</h3>
		   	 		@foreach($sanphamnoibat as $sp)
		   	 	    <div class="col-md-6 spl-left-img wow bounceInLeft" data-wow-delay="0.3s">
		   	 	    	<a href="sanpham/{{$sp->id}}-{{$sp->TenKhongDau}}"><img src="upload/sanpham/{{$sp->Hinh}}" alt=""></a>
		   	 	    </div>
		   	 	    
		   	 	    <div class="col-md-6 spl-left-text wow bounceInDown" data-wow-delay="0.3s">
		   	 	    	<p> {!!$sp->NoiDung!!}</p>
		   	 	    </div>
		   	 	    @endforeach
		   	 	  <div class="clearfix"> </div>
		   	 	</div>
		   	 	<div class="col-md-4 spl-right wow bounceInRight" data-wow-delay="0.3s">
		   	 		<h3>Danh sách dịch vụ</h3>
		   	 		  	<ul>
		   	 		  	@foreach($dichvu as $dv)
			   	 		  	<li><span class="glyphicon glyphicon-ok"> </span>{!!$dv->TieuDe!!}</li>
			   	 		@endforeach

		   	 		  	</ul>
		   	 	</div>
		   	  <div class="clearfix"> </div>
		   	 </div>
		   </div>	
		</div>
	<!--addition services-->
	<div class="addition">
	   <div class="container">
			<h3>Một số dịch vụ khác</h3>
			<div class="addition-main">
				<div class="col-md-6 addition-left wow bounceInRight" data-wow-delay="0.3s">
					@foreach($dichvumoi as $dv)
					<div class="cantin">
						<div class="cantin-icons">
							<span class="ser-icon1" style="background-image:url(upload/dichvu/{{$dv->Hinh}})"> </span>
						</div>	
						<div class="cantin-text">
							<h4><a href="single.html">{!!$dv->TieuDe!!}</a></h4>
							<p>{!!$dv->NoiDungVanTat!!}</p>
						</div>
					  <div class="clearfix"> </div>
					</div>
					@endforeach
				</div>
				@foreach($sanphamnoibat as $nb)
				<div class="col-md-6 addition-right wow bounceInLeft" data-wow-delay="0.3s">
					<a href="single.html"><img src="upload/sanpham/{{$nb->Hinh}}" alt="" class="img-responsive"></a>
				</div>
				@endforeach
			<div class="clearfix"> </div>
		</div>
	 </div>
   	</div>
</div>
@endsection