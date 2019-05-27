
<div class="top-navg ">
	<div class="container">
		
		<div class=" logo wow tada" data-wow-delay="0.3s">
			<a href="index.html"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="navigation" style="width:30%; margin-left:37%">	
			<div class="menu menu-li">
				<ul class="menu-list">
					@if(!isset($user))
	                <li class="menu-item">
	                	<a href="login" class="menu-link">Đăng nhập </a>  
	                </li>
					<li class="menu-item" style="color:#fff">| </li>
					<li class="menu-item">
						<a href="register" class="menu-link">Đăng kí</a>
					</li>
	                @else
	                <li class="menu-item">
	                	<a href="user" class="menu-link">
	                	<span class ="glyphicon glyphicon-user"></span>
	                	{{$user->name}}</a>  
	                </li>
					<li class="menu-item" style="color:#fff">| </li>
					<li class="menu-item">
						<a href="logout" class="menu-link">Đăng xuất</a>
					</li>

                	@endif
					
				</ul>
			</div>
		</div>
		<div class="navigation" style="width:100%;margin-top: 0.5em;">	
			<!-- <span class="menu-ic"><img src="images/menu2.png" alt=""></span> -->
			<div class="menu menu-li">
				<ul class="menu-list">
					<li class="menu-item menu-item-current"><a href="trangchu" class="menu-link">Trang chủ</a></li>
					<li class="menu-item"><a href="gioithieu" class="menu-link">Giới thiệu</a></li>
					<li class="menu-item"><a href="dichvu" class="menu-link">Dịch vụ</a></li>
					<li class="menu-item"><a href="thucdon" class="menu-link">Thực đơn</a></li>
					<li class="menu-item"><a href="lienhe" class="menu-link">Liên hệ</a></li>
					
				</ul>
			</div>
			

			 <script>
				   $( "span.menu-ic" ).click(function() {
					 $( ".navigation ul" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>