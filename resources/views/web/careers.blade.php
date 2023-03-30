
@extends('web.layout') @section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Careers</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
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
	<!--//section-->
	<!--section-->
	<!--section prices-->
	<div class="section bg-norepeat bg-md-none section-top-padding" style="background-image: url({{ asset('public/images/bg-top-left2.png')}})">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1 double-title double-title--center double-title--vcenter" data-title=""><span style="color:black;">Job Opportunities</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="row justify-content-center prices-carousel js-prices-carousel mt-2">
				<div class="col-sm-6 col-md-6">
					<div class="prices-box prices-box--style2">
						<h4 class="prices-box-title">Nail Technicians</h4>
						<div class="prices-box-text">2 Vacancies</div>
						
						<div class="prices-box-row" style="text-align: left;">Locations: Dundee, Stirling, Aberdeen, Edinburgh, Glasgow</div>
						<div class="prices-box-row" style="text-align: left;">Qualification: Diploma / Any Other Beautician course</div>
						<div class="prices-box-row" style="text-align: left;">Experience Required: 2 Yrs+</div>
						<div class="prices-box-row" style="text-align: left;">Skills Required: Manicures & Pedicures, Acrylic & Gel extensions.</div>
					
						<div class="prices-box-row" style="text-align: left;">Full Time</div>
						<div class="prices-box-row" style="text-align: left;">Pay: Option of Salary or per hour</div>
						<div class="prices-box-row" style="text-align: left;">Nail Technician is a creative job with high wages. Nail technicians are should be artistic as well as pleasent.</div>
						<div class="prices-box-link">
							<a href="apply.html" class="btn"><i class="icon-right-arrow"></i><span>Apply now</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="prices-box prices-box--style2">
						<h4 class="prices-box-title">Brows Technicians</h4>
						<div class="prices-box-text">2 Vacancies</div>
						
						<div class="prices-box-row" style="text-align: left;">Location: Dundee</div>
						<div class="prices-box-row" style="text-align: left;">Qualification: Diploma</div>
						<div class="prices-box-row" style="text-align: left;">Experience Required: 2 Yrs+</div>
						<div class="prices-box-row" style="text-align: left;">Skills Required: Threading, Tinting, Waxing, Semipermanent & Russian lashes, Lash lift, Brow lamination, and Henna brows.</div>
					
						<div class="prices-box-row" style="text-align: left;">Full Time</div>
						<div class="prices-box-row" style="text-align: left;">Pay: Option of Salary or per hour</div>
						<div class="prices-box-row" style="text-align: left;">Nail Technician is a creative job with high wages. Nail technicians are should be artistic as well as pleasent.</div>
						<div class="prices-box-link">
							<a href="apply.html" class="btn"><i class="icon-right-arrow"></i><span>Apply now</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		
	</div>
	
	</br>
	<!--//section prices-->
</div>


@endsection