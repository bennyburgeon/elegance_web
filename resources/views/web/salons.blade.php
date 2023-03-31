
@extends('web.layout')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Salons</span>
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
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">Let's find</div>
				<h1 style="color: black;">Our Salons</h1>
				<div class="h-decor"></div>
				
			</div>
		</div>
		<!--<div class="container">
			<div class="row col-equalH">
			<!-- map here
			<div id="map"></div>
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1BLmv92Hb0JiDQAMK3__YTmLOyV4fBGbH" width="100%" height="480"></iframe>
				
			</div>
		</div>-->
	</div>
	<!--//section-->
</div>
<!--section-->
	<div class="section page-content-first">
		
		<div class="container mt-3 mt-lg-5">
			<div class="row">
				
				<div class="col-md-8 col-lg-9">
					<div class="filters-row align-items-center">
						<div class="filters-row-right"><span>Choose Your Nearest Salons</span>
							<div class="form-inline">
								<div class="select-wrapper">
									<select name="sorting" onchange="location = this.value;">
									     <option value="">Choose branch</option>
										 <option value="salon-details.html">Glasgow Fort, Glasgow</option>
										 <option value="salon-details-1.html">Bonaccord Centre, Aberdeen</option>
										 <option value="salon-details-2.html">The Thistle Centre, Stirling</option>
										 <option value="salon-details-3.html">Ocean Terminal, Edinburgh</option>
										 <option value="salon-details-4.html">Wellgate Shopping Centre, Dundee</option>
										
										<option value="salon-details-6.html">Overgate Centre, Dundee</option>
										<option value="salon-details-7.html">Overgate Centre, Dundee</option>
										<option value="salon-details-8.html">Fortkinnaird, Edinburgh</option>
									</select>
									
								</div>
							</div>
						</div>
						<div class="filters-row-right d-flex align-items-center">
							
							<!-- <a href="clinic-details.html" class="btn"><i class="icon-right-arrow"></i>View Clinic<i class="icon-right-arrow"></i></a> -->
						</div>
					</div>
					<div class="prd-grid">
					<!-- 	<div class="prd">
							<div class="prd-img">
								<a href="salon-details.html"><img src="{{ asset('public/images/product/salon-1.jpg')}}" class="img-fluid" alt=""></a>
							</div>
							<div class="prd-info">
								<h3><a href="salon-details.html">Hair and Beauty Salon Glasgow</a></h3>
								
								<div class="star-rating"><img src="{{ asset('public/images/content/testimonials-author-3-1.png')}}" alt=""></span>
									<span class="rating-text"><img src="{{ asset('public/images/content/testimonials-author-3-2.png')}}" alt=""></span>
								</div>
								<a href="salon-details.html" class="btn"><i class="icon-right-arrow"></i>View Salon<i class="icon-right-arrow"></i></a>
							</div>
							
						</div> -->
						@foreach($data as $keys)
						<div class="prd">
							<div class="prd-img">
								<a href="salon-details-1.html"><img src="{{env('IMG_URL')}}/{{$keys->image}}" class="img-fluid" alt=""></a>
							</div>
							<div class="prd-info">
								<h3><a href="salon-details-1.html">{{$keys->title}}</a></h3>
								
								<div class="star-rating"><img src="{{ asset('public/images/content/testimonials-author-3-1.png')}}" alt=""></span>
									<span class="rating-text"><img src="{{ asset('public/images/content/testimonials-author-3-2.png')}}" alt=""></span>
								</div>
								<a href="salon-details-1.html" class="btn"><i class="icon-right-arrow"></i>View Salon<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						@endforeach
					</div>
					<div class="clearfix"></div>
					
				</div>
				<div class="col-md-4 col-lg-3 column-filters">
					<div class="column-filters-inside">
						<div class="side-block">
							<h3 class="side-block-title">Branches</h3>
							<ul class="category-list">
								<li><a href="salon-details.html">Glasgow Fort, Glasgow</a></li>
								<li><a href="salon-details-1.html">Bonaccord Centre, Aberdeen</a></li>
								<li><a href="salon-details-2.html">The Thistle Centre, Stirling</a></li>
								
								<li><a href="salon-details-4.html">Wellgate Shopping Centre, Dundee</a></li>
								
								<li><a href="salon-details-6.html">Overgate Centre, Dundee</a></li>
								<li><a href="salon-details-7.html">Overgate Centre, Dundee</a></li>
								<li><a href="salon-details-8.html">Fortkinnaird, Edinburgh</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection