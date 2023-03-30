
@extends('web.layout')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index-2.html">Home</a>
					<span>Appointments</span>
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
					<div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url(images/content/banner-left6.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<ul class="services-nav flex-column flex-nowrap">
						<li class="nav-item">
							<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Select a Salon</a>
							<div class="collapse show" id="submenu1">
								<ul class="flex-column nav">
									<li class="nav-item"><a class="nav-link" href="https://booking.elegancesalons.co.uk/patchtestuppermall.html">Upper mall, Overgate Centre, Dundee</a></li>
									<li class="nav-item"><a class="nav-link" href="https://booking.elegancesalons.co.uk/patchtestovergate.html">Lower mall, Overgate Centre, Dundee</a></li>
								
									<li class="nav-item"><a class="nav-link" href="https://booking.elegancesalons.co.uk/patchtestfortkinnaird.html">Fort Kinnaird, Edinburgh</a></li>
									<li class="nav-item"><a class="nav-link" href="https://booking.elegancesalons.co.uk/patchtestaberdeen.html">Bonaccord Centre, Aberdeen</a></li>
										<!--<li class="nav-item"><a class="nav-link" href="https://booking.elegancesalons.co.uk/patchtestglasgow.html">Glasgow Fort, Glasgow</a></li>-->
									<li class="nav-item"><a class="nav-link" href="https://booking.elegancesalons.co.uk/patchteststirling.html">The Thistle Centre, Stirling</a></li>
									
								</ul>
							</div>
						</li>
						
						</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
</div>
@endsection