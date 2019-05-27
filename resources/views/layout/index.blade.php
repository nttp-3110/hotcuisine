<!DOCTYPE HTML>
<html>
<head>
<title>Hot Cuisine a Hotels and Restaurants Category Flat Bootstrap Responsive  Website Template | Home :: w3layouts</title>
<base href="{{asset('')}}">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hot Cuisine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts start-->
<link href='//fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,600,500,700,800,900,200,300' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/jquery.js"></script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!--horizan start here-->
	@include('layout.menu')
	<div class="clearfix"></div>
<!--mother grid start here-->
<!-- content -->
	@yield('content')

<!--footer end here-->
   @include('layout.footer')
    <div class="copy-right wow shake" data-wow-delay="0.3s">
    	 <p>© 2016 Hot Cuisine. All Rights Reserved </p>
    </div>
</div>



<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

    </script>
<!-- animated-css -->
@yield('script')

</body>
</html>