<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->

	<!-- Animate.css -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{URL::asset('css/flexslider.css')}}">

	<!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

	<!-- Modernizr JS -->
    <script src="{{URL::asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation" id="top-nav" style="display:none;">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="{{'homeIndex'}}" style="color:white;">MAXI-CARE PHARMACY</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li><a href="{{'homeIndex'}}">Home</a></li>
						<!--<li class="has-dropdown">
								<a href="product.html">Products</a>
							<ul class="dropdown">
								<li><a href="single.html">Single Shop</a></li>
							</ul>
						</li>-->
						<li><a href="{{'about'}}">About Us</a></li>
						<li><a href="{{'ProductsAndServices'}}">Products & Services</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li><a href="{{'contactUs'}}">Contact</a></li>
					</ul>
				</div>
				<!--
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
						<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>-->
			</div>
			
		</div>
	</nav>

    @yield('content')

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>MAXICARE PHARMACY</h3>
					<p style="color:white;">We are a retail pharmacy situated at the heart of lilongwe the capital city of malawi.We aim at providing quality healthcare products,services and solutions to our clients.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
    <script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
    <script src="{{URL::asset('js/jquery.countTo.js')}}"></script>
	<!-- Flexslider -->
    <script src="{{URL::asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- Main -->
    <script src="{{URL::asset('js/main.js')}}"></script>

	<script>
		$(document).ready(function(){
			$("#top-nav").show(3000);
			$(".freeDelivery").hide();
			$("#loadFreeDelivery").click(function(){
				if ($("#loadFreeDelivery").text() == "Learn More")
					{
						$(".freeDelivery").slideDown();
						$("#loadFreeDelivery").text("Read Less ");
					}
				else
					{
						$(".freeDelivery").slideUp();
						$("#loadFreeDelivery").text("Learn More");	
					}
			});
		});
	</script>
	</body>
</html>

