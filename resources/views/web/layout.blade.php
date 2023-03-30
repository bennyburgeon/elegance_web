<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description"
		  content="Elegance is an award winning beauty chain established in 2010 with exceptional business growth and innovative business formula. All of our branches are rated 4.5 and 5 by our customers in Goolge and Facebook.">
	<meta name="author" content="Elegance">
	<meta name="format-detection" content="telephone=no">
	<title>Elegance Salon</title>
	<!-- Stylesheets -->
	<link href="{{ asset('public/vendor/slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('public/vendor/animate/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/icons/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/color/color.css') }}" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="{{ asset('public/images/favicon.png') }}" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
	
	@stack('css')

</head>

<body class="shop-page">

<header class="header">
	<div class="header-quickLinks js-header-quickLinks d-lg-none">
		<div class="quickLinks-top js-quickLinks-top"></div>
		<div class="js-quickLinks-wrap-m">
		</div>
	</div>
	
	<div class="header-topline d-none d-lg-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-auto d-flex align-items-center">
					
					<!-- <b><div class="header-phone"><i class="icon-telephone"></i><a href="tel: +44 (0) 1382 549282"> +44 (0) 1382 549282</a></div></b> -->
					
				</div>
				<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<span class="header-social">
							<a href="https://www.facebook.com/Elegance2010/" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="https://www.instagram.com/elegancehairandbeautysalons/" class="hovicon"><i class="icon-instagram"></i></a>
						
							<a href="https://twitter.com/elegancesalons" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="https://www.google.com/maps/search/Elegance+Hair+and+Beauty+Salon+Scotland/@56.5040588,-4.2394738,8z/data=!3m1!4b1" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
						</span>
				</div>
			</div>
		</div>
	</div>
	<div class="header-rosegold-line d-lg-flex"></div>
	<div class="header-content">
		<div class="container">
			<div class="row align-items-lg-center">
				<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
					<span class="icon-menu"></span>
				</button>
				<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
					<a href="index.html" class="header-logo"><img src="{{ asset('public/images/logo.png') }}" alt="" class="img-fluid"></a>
				</div>
				<div class="col-lg ml-auto header-nav-wrap">
					<div class="header-nav js-header-nav">
						<nav class="navbar navbar-expand-lg btco-hover-menu">
							<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="{{ route('salons') }}">Find a Salon</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('treatemnts') }}">Treatments</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="{{ route('offers') }}">Offers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('appointment') }}">Make an Appointment</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('packages') }}">Packages</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="{{ route('careers') }}">Careers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('contacts') }}">Contact Us</a>
									</li>	
								</ul>
							</div>
						</nav>
					</div>
					<!--<div class="header-search">
						<form action="#" class="form-inline">
							<i class="icon-search"></i>
							<input type="text" placeholder="Search Location">
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
					<div class="header-search">
						<form action="#" class="form-inline">
							<i class="icon-cart"></i>
							
							
						</form>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</header>

@section('body')
      
      @show

<!--footer-->
<div class="footer mt-0">
	<div class="container">
		<div class="row py-1 py-md-2 px-lg-0">
			<div class="col-lg-4 footer-col1 pt-lg-3">
				<div class="row flex-column flex-md-row flex-lg-column">
					<div class="col-md col-lg-auto">
						<div class="footer-logo">
							<img src="{{ asset('public/images/logo.png') }}" alt="" class="img-fluid">
						</div>
						<div class="mt-2 mt-lg-0"></div>
					<div class="col-md">
						<div class="footer-text mt-1 mt-lg-1">
							<p>To receive updates about 
                                recent offers,</br>please 
                                submit your email address 
                                below
								<br>us with your email below</p>
							<form action="#" class="footer-subscribe">
								<div class="input-group">
									<input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email"/>
									<span><i class="icon-black-envelope"></i></span>
								</div>
							</form>
						</div>
					</div>
					</div>
					<div class="col-md">
						<div class="footer-text mt-1 mt-lg-1">
							<ul class="icn-list">
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4 col-lg-4">
					<h3 style="color: black;">Blog Posts</h3>
					<div class="h-decor"></div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="{{ asset('public/images/content/news-02.jpg') }}" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="https://elegancesalons.wordpress.com/">Make a statement with...</a></div>
							<p>June 26, 2021</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="{{ asset('public/images/content/news-01.jpg') }}" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="https://elegancesalons.wordpress.com/">Upto 50% Off</a></div>
							<p>June 26, 2021</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="{{ asset('public/images/content/news-03.jpg') }}" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="https://elegancesalons.wordpress.com/">Luxury mani & pedi</a></div>
							<p>June 26, 2021</p>
						</div>
					</div>
				</div>
			<div class="col-sm-4 col-lg-4">
				<h3 style="color: black;">Customer Service</h3>
				<div class="h-decor"></div>
				<ul class="icn-list">
					<li><i class="icon-play"></i><a href="termsandconditions.html">Terms & Conditions</a></li>
					<li><i class="icon-play"></i><a href="privacypolicy.html">Privacy Policy</a></li>
					<li><i class="icon-play"></i><a href="deliveryinformation.html">Delivery Information</a></li>
					<li><i class="icon-play"></i><a href="coockiespolicy.html">Cookies Policy</a></li>
				</ul>
				<div class="footer-social d-md-none d-lg-block">
							<a href="https://www.facebook.com/Elegance2010/" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="https://www.instagram.com/elegancehairandbeautysalons/" class="hovicon"><i class="icon-instagram"></i></a>
						
							<a href="https://twitter.com/elegancesalons" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="https://www.google.com/maps/search/Elegance+Hair+and+Beauty+Salon+Scotland/@56.5040588,-4.2394738,8z/data=!3m1!4b1" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</div>
			</div>
			
		</div>
	</div>
	<div class="header-rosegold-line d-lg-flex"></div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row text-center text-md-left">
				<div class="col-sm">Copyright © 2021 <a href="#"></a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="0#">Elegance All Rights Reserved</a></div>
					
				
			</div>
		</div>
	</div>
</div>



<script src="{{ asset('public/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('public/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('public/vendor/cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('public/vendor/bootstrap-datetimepicker/moment.js') }}"></script>
<script src="{{ asset('public/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('public/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('public/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('public/vendor/waypoints/sticky.min.js') }}"></script>
<script src="{{ asset('public/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('public/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('public/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js') }}"></script>
<script src="{{ asset('public/vendor/countTo/jquery.countTo.js') }}"></script>
<script src="{{ asset('public/vendor/form-validation/jquery.form.js') }}"></script>
<script src="{{ asset('public/vendor/form-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="1yx6de5T"></script>
<!-- Custom Scripts -->
<script src="{{ asset('public/js/app.js') }}"></script>
<script src="{{ asset('public/color/color.js') }}"></script>
<script src="{{ asset('public/js/app-shop.js') }}"></script>
<script src="{{ asset('public/form/forms.js') }}"></script>
@stack('js')
</body>

</html>