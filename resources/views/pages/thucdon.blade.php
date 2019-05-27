@extends('layout.index')
@section('content')
<div class="main-grid-one4" id="five">

	<div class="portfolio">
	    <div class="temp-heading" style="padding:12em 0 3em 0">
		    <h3 class="main-head">THỰC ĐƠN</h3>
		</div>
		<div class="menu-port">
			<div class="container">	
				<div class="menu-grid-main">
					@foreach($sanpham as $sp)
					@if($sp->Moi==1)
					<div class="col-md-4  wow bounceInDown" data-wow-delay="0.3s">
						<a href="sanpham/{{$sp->id}}-{{$sp->TenKhongDau}}"><img src="upload/sanpham/{{$sp->Hinh}}" alt="" class="img-responsive" style="width:100%;height:300px"></a>
						<h4>{{$sp->Ten}}</h4><br><h3 style="color:#ECB731"> Giá: {{$sp->Gia}}$</h3>					
						<p>{!!$sp->NoiDungVanTat!!}</p>
					</div>
					
					@endif
					@endforeach	
				 <div class="clearfix"> </div>
				</div>					
			</div>
		</div>
	<!--enjoy-->
	<div class="enjoy-food">
		<div class="container">
			<h3>Enjoy Your Lunch</h3>
		</div>
	</div>
	<!--portfolio-->
	<div class="portfolio-1">
	   <div class="container"> 
	   	 	<div class="portfolio-1-main">
	   	 		@foreach($sanpham as $sp)
	   	 			@if($sp->NoiBat==1)
		   	 	<div class="col-md-4 port-right wow bounceInLeft" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>{!!$sp->Ten!!}</h5>
								<p>{!!$sp->NoiDungVanTat!!}</p>
						</li>
						<li><a href="sanpham/{{$sp->id}}-{{$sp->TenKhongDau}}"><img class="top-grid" src="upload/sanpham/{{$sp->Hinh}}" alt=""/></a></li>
					</ul>
				</div>
					
					@endif
				@endforeach
				
				<div class="clearfix"> </div>
	   	  	</div>
	    </div>			    	     
	</div>
</div>
@endsection