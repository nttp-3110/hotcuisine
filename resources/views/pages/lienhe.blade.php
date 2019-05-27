@extends('layout.index')
@section('content')
<div class="main-grid-one5" id="six">
	<div class="contact">
	    <div class="temp-heading" style="padding: 12em 0em 3em 0em">
		    <h3 class="main-head">Liên hệ</h3>
		</div>
		<div class="contact-1">
		   	<div class="container"> 
				<div class="contact-1-main">		   	 	 
					<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
						<h3>Gửi tin nhắn cho chúng tôi</h3>
	   	 	 				<form method="post" action="{!!url('lienhe')!!}" style="margin-bottom:10%"> 
						   	 	<input type="hidden" name="_token" value="{{csrf_token()}}">
									<p>Họ tên</p>
									<input type="text" name="name" placeholder="" required=""/>
									<p>Tin nhắn</p>
									<textarea name="NoiDung"  placeholder="" required=""> </textarea>
									<input type="submit" value="Send" style="margin-left:40%">
									<input type="reset" value="Reset" style="font-size: 1em; color: #fff;background:#ECB731;border: none;padding: 0.6em 1.5em;outline: none;display: inline-block;font-family: 'Ruluko', sans-serif;font-weight: 600; margin-left:5%">
							</form>
					</div>
						   	    
					<div class="clearfix"> </div>
				</div>	
		  
		</div>
	 </div>
	</div>
</div>
@endsection