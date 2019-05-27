@extends('layout.index')
@section('content')
<div class="main-grid-one2" id="two">
	<div class="about">
	    <div class="temp-heading">
		    <h3 class="main-head">Giới thiệu</h3>
		</div>
		<div class="about-1">
		   <div class="container"> 
		   	 <div class="about-1-main">	
		   	@foreach($about_1 as $ab)	   	 	   	 	 	  
	   	 	 	<div class="col-md-6 about-right wow bounceInDown" data-wow-delay="0.3s">
	   	 	 	   <h3>{!!$ab->TieuDe!!}</h3>
	   	 	 	   <p>{!!$ab->NoiDung!!}</p>
	   	 	 	</div>
	   	 	
	   	 	 	<div class="col-md-6 about-left wow bounceInUp" data-wow-delay="0.3s">
					<figure>
						<img src="upload/about/{{$ab->Hinh}}" alt="" class="img_responsive">
					</figure>
	   	 	 	</div>
	   	 	@endforeach	
	   	 	  <div class="clearfix"> </div>
		   	 </div>
		   	 <div class="about-bottom">
			      <div class="delivery-info">											
							<div class="delivery-top">
								<h3>Thông tin về chúng tôi</h3>
							</div>
							@foreach($about_2 as $ab)

							<div class="delivery-bottom">
								<div class="col-md-6 deliver-left wow bounceInLeft" data-wow-delay="0.3s">
									<figure>
										<img src="upload/about/{{$ab->Hinh}}" alt="" class="img_responsive">
									</figure>
								</div>
								<div class="col-md-6 delivery-right wow bounceInRight" data-wow-delay="0.3s">
									<h6>{{$ab->TieuDe}}</h6>
							@endforeach
							@foreach($aboutmoi as $ab)
									<div class="deliver-dates">
										<span class="deliver-num">****</span>
										<div class="deliver-text">
											<p>{!!$ab->TieuDe!!}</p>
											<p>{!!$ab->NoiDung!!}</p>
										</div>
										<div class="clearfix"> </div>
									</div>
							@endforeach

								</div>
								<div class="clearfix"> </div>
						  </div>
				   </div>
		    </div>
			 @foreach($slide as $sl)
			 @if($sl->STT==3)
		    <div class="testimonial">
		      	 <h3>{!!$sl->TieuDe!!}</h3>
		      	 <p>{!!$sl->NoiDung!!}</p>
		      	 
		    </div>
		    @endif
		    @endforeach
		    <div class="team">
		      	<h3>Các nhân viên tiềm năng</h3>
      	 	 	<ul class="ch-grid wow bounceInDown" data-wow-delay="0.3s">
					@foreach($nhanvien as $nv)
					<li style="margin-bottom:190px">
						<a href="single.html"><div class="ch-item ch-img-1 wow bounceIn" data-wow-delay="0.4s" style="background-image: url(upload/nhanvien/{{$nv->Hinh}}) ">
							<div class="ch-info">
														
							</div>						
						</div></a>
							<h5><a href="#">{!!$nv->Ten!!}</a></h5>
							<p>{!!$nv->GioiThieu!!}</p>
							<ul class="social-ic">
								<li>
									<a href="{!!$nv->LinkFB!!}"><i class="icon1">
									</i></a>
								</li>
								<li>
									<a href="{!!$nv->LinkTwiter!!}"><i class="icon1 icon2">
									</i></a>
								</li>
								<li>
									<a href="{!!$nv->LinkGoogle!!}"><i class="icon1 icon3">
									</i></a>
								</li>
							</ul>
					</li>
					@endforeach
						<!-- no-mar -->
				 </ul>

		      	 	  <div class="clearfix"> </div>
		      	</div>		      
		   </div>	
		</div>


</div>
@endsection