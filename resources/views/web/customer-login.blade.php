@extends('web.layout')
@section('body')
<!--//header-->

<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index-2.html">Home</a>
					<span>Offers</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section slider-->
	<div class="section mt-0">
		<div style="top: 250px;" class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
			<div class="quickLinks js-quickLinks closed">
				<div class="container">
					<div class="row no-gutters">
						
						<div class="col">
							<a href="contact.html" class="float-link-i">
								<i class="icon-black-envelope"></i><span>Mail Us</span></a>
						</div>
						
						<div class="col">
							<a href="tel: +44 (0) 1382 549282" class="float-link-i" style="background-color: #f19779;">
								<i class="icon-telephone"></i><span>Call Us</span></a>
							
						</div>
						<div class="col">
							<a href="salons.html" class="float-link-i" style="background-color: #eea48b;">
								<i class="icon-placeholder2"></i><span>Location</span></a>
							
						</div>
						<div class="col">
							<a href="#" class="float-link-i" style="background-color: #ebb3a0;">
								<i class="icon-phone-download-symbol"></i><span>Download App</span></a>
							
						</div>
						
						
						<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
					</div>
				</div>
				<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
			</div>
		</div>
		
	</div>
	<!--//section slider-->
	<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
				
					<div class="col-xl-6  bg-cover" style="">
						<div class="santa fadeIn first">
							<img src="{{ asset('public/images/banner-left11 (1).jpg') }}" alt=""></div>
							<!-- <h1>SIGN IN TO REDEEM OFFERS</h1> -->
							<!-- <div id="formContent"> -->
								<!-- Tabs Titles -->
								<!-- <h2 class="active"> Sign In </h2> -->
								<!-- <h2 class="inactive underlineHover">Sign Up </h2> -->
						
								<!-- Icon -->
								<!-- <div class="fadeIn first"> -->
									<!-- <img src="images/woman.png"  style="border-radius: 50%;width:120px" id="icon" alt="User Icon" /> -->
								<!-- </div> -->
						
								<!-- Login Form -->
								<!-- <form> -->
									<!-- <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"> -->
									<!-- <input type="text" id="password" class="fadeIn third" name="login" placeholder="password"> -->
									<!-- <input type="submit" class="fadeIn fourth" value="Log In" href="offers.html"> -->
								<!-- </form> -->
						
								<!-- Remind Passowrd -->
								<!-- <div id="formFooter"> -->
									<!-- <a class="underlineHover" href="#">Forgot Password?</a> -->
								<!-- </div> -->
						
							<!-- </div> -->
						
					</div>
					<div class="col-xl-6">
						<h1 style="margin-left: 50px;">SIGN UP TO REDEEM OFFERS</h1>
						<div id="formContent">
							<!-- Tabs Titles -->
							<h2 class="active"> Sign In </h2>
							<h2 class="inactive underlineHover">Sign Up </h2>
							<!-- Icon -->
							<div class="fadeIn first">
								<img src="{{ asset('public/images/woman.png') }}" style="border-radius: 50%;width:120px" id="icon" alt="User Icon" />
							</div>
							<!-- Login Form -->
							<form action="{{route('customers.check.login')}}" method="post" enctype="multipart/form-data" >
            					{!! csrf_field() !!}
								<input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
								<input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
								<input type="submit" class="fadeIn fourth" value="Log In" >
							</form>
							<!-- Remind Passowrd	 -->
							<div id="formFooter">
								<a class="underlineHover" href="#">Forgot Password?</a>
							</div>
						</div>
 
				</div>
			</div>
		</div>
		<!--//section faq-->
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('public/css/style6.css') }}">
@endpush
@push('js')

@endpush
