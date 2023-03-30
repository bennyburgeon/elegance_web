@extends('web.layout')
@section('body')
<!--//header-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">


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
								<a href="tel: +44 (0) 1382 549282" class="float-link-i"
									style="background-color: #f19779;">
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


							<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top"
										data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
						</div>
					</div>
					<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left"
							title="Open panel">+</span></div>
				</div>
			</div>

		</div>
		<!--//section slider-->
		<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">

					<div class="col-xl-12  bg-cover" style="">
						<section class="section about-section gray-bg" id="about">
							<div class="container">
								<div class="row align-items-center flex-row-reverse">
									<div class="col-lg-6 ">
										<div class="about-text go-to">
											<h3 class="dark-color">{{ auth()->guard()->user()->firstname }} {{ auth()->guard()->user()->lastname }}</h3>
											<!-- <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6> -->
											<div class="row about-list">
												<div class="col-md-6">
													<div class="media">
														<label>Email</label>
													</div>
													<div class="media">
														<label>Phone</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="media">
														<label>{{ auth()->guard()->user()->email }}</label>
													</div>
													<div class="media">
														<label>{{ auth()->guard()->user()->mobile }}</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="about-avatar rounded-circle">
											<img src="{{ asset('public/images/beauty.png') }}" title="" alt="">
										</div>
									</div>
								</div>
								<div class="counter">
									<div class="row">
										<div class="col-4 col-lg-4">
											
											<div class="count-data text-center">
												<br>
												<h6 class="count h2" data-to="500" data-speed="500">{{$customerdetails->visit_details_count}}</h6>
												<p class="m-0px font-w-600">times visited</p>
											</div>
										</div>
										<div class="col-4 col-lg-4">
											
											<div class="count-data text-center">
												<img src="{{ asset('public/images/coin.png') }}" alt="" style="width: 40px;">
												<h6 class="count h2" data-to="500" data-speed="500">{{$customerdetails->visitDetails->sum('rewarded_amount')}}</h6>
												<p class="m-0px font-w-600">Points earned</p>
											</div>
										</div>
										<div class="col-4 col-lg-4">
											<div class="count-data text-center">
												<img src="{{ asset('public/images/coin.png') }}" alt="" style="width: 40px;">
												<h6 class="count h2" data-to="500" data-speed="500">{{ ($customerdetails->visitDetails->sum('rewarded_amount') - $customerdetails->visitDetails->sum('redeem_amount')) }}</h6>
												<p class="m-0px font-w-600">Points Left</p>
											</div>
										</div>
									</div>
								</div>
						<button class="button-56" role="button">LOGOUT</button>

							</div>
					</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<!--//section faq-->
	</div>
	<!--//section-->
	@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('public/css/style6.css') }}">
@endpush
@push('js')

@endpush