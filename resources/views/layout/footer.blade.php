<div class="footer" style="min-height:0px;">
	<div class="container">
		<div class="footer-main">
		<div class="col-md-4 amet-sed wow bounceInDown" data-wow-delay="0.3s" style="margin-left:33%">
			
			@foreach($lienhe as $lh)
			<p>{{$lh->ThongTin}}</p>
			<ul class="social">
				<li><span> </span>{{$lh->DiaChi}} </li>
				<li class="phone"><span> </span> {{$lh->SoDienThoai}}</li>
				<li class="mail"><a href="mailto:contact@Example.com"><span> </span>{{$lh->Email}}</a></li>
			</ul>
			</div>
			@endforeach
			 
			
		
			
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>