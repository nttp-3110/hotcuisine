@extends('layout.index')
@section('content')
<div class="single">
	<div class="container">
					<div class="blog-to">		
					
						<img class="img-responsive sin-on wow bounceInLeft" data-wow-delay="0.3s" src="images/b1.jpg" alt="" />
							<div class="blog-top">
						
							<div class="top-blog wow bounceInDown" data-wow-delay="0.3s">
								<h4>{{$sanpham->Ten}}</h4>
								
								<p class="sed2">{!!$sanpham->NoiDung!!}</p>
								<div class="md-in">
								<ul class="grid-part">
									@foreach($sanphammoi as $sp)
									<li><a href="#">{{$sp->Ten}}</a></li>
									
									@endforeach
								</ul>
								</div>

								
								<div class="md-in-rit">
								<ul class="grid-part">
									
									@foreach($sanphamnoibat as $sp)
									<li><a href="sanpham/{{$sp->id}}-{!!$sp->TenKhongDau!!}">{{$sp->Ten}}</a></li>
									@endforeach
								</ul>
								</div>
						    <div class="clearfix"> </div>
							</div>
							
					</div>
					</div>
	<div class="admin wow bounceInUp" data-wow-delay="0.3s">
							<p>But I must explain to you how all this mistaken idea of denouncing 
								pleasure and praising pain was born and I will give you a complete 
								account of the system, and expound the actual teachings of the great 
								explorer of the truth, the master-builder of human happiness. 
								No one rejects, dislikes, or avoids pleasure itself.</p>
							<a href="#"><i>Join Smith</i></a>
						</div>
					
		<div class="single-middle">	
		<h1>Comments</h1>
		@foreach($sanpham->binhluan as $bl)		
			
				<div class="media wow bounceInlLeft" data-wow-delay="0.3s">
				  <div class="media-left">
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">{!!$bl->user->name!!}</a></h4>
						<p>{!!$bl->NoiDung!!}</p>
				  </div>
				</div>
				
				
		@endforeach	
		</div>
		<!---->

		@if(isset($user))
            <div class="well"><!-- neu dang nhap moi hien firm-->
            @if(session('thongbao'))
            	<script>
            	 alert('{!!session("thongbao")!!}');
        		</script>
            @endif
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form" action="binhluan/{{$sanpham->id}}" method="post">
                	<input type="hidden" name="_token" value="{{csrf_token()}}">
	                <input type="hidden" name="idSP" value="{{$sanpham->id}}">
	                <input type="hidden" name="idUser" value="{{$user->id}}">
	                    <div class="form-group">
	                        <textarea class="form-control" rows="3" name="NoiDung"></textarea>
	                    </div>
	                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>

            <hr>
            @endif
	</div>
</div>
@endsection