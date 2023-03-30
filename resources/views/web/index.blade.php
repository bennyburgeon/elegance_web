@extends('web.layout')
@section('body')
<!--//header-->
<div class="page-content">
	<!--section slider-->
	<div class="section mt-0">
		<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
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
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="loader-dna">
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
					<column>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
					</column>
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
				</div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
				
				<div class="slide">
					<div class="img--holder" data-bg="{{ asset('public/images/content/slider/slide-02.jpg') }}"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>High-Standard, Safe &
                                       Budget-Friendly</b>
									<br>Services</div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Highest standards of customer service</div>
									<div class="slide-btn"><a href="treatments1213.html" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-01.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>The Best Salon
                                        Experience</b><br>
										in the UK</div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Advanced medicine. Compassionate care</div>
									<div class="slide-btn"><a href="treatments1213.html" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-03.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">Your Satisfaction
										<br><b>is Our
                                        Promise</b></div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Highest standards of customer service</div>
									<div class="slide-btn"><a href="treatments1213.html" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-04.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">We Only Use
										<br><b>Top Quality Products</b></div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Highest standards of customer service</div>
									<div class="slide-btn"><a href="treatments1213.html" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section slider-->
	<div class="text-center max-670 mt-4 mx-md-auto">
					<marquee><a href="#" class="btn btn-xs btn-gradient" data-toggle="modal" data-target="#modalBookingForm" style="background-color: #818080;"><i class="icon-placeholder2" style="color: black;"></i><span>Notification: Check our latest offers & book online.</span><i class="icon-right-arrow"></i></a></marquee>
	</div>
	<!--section departments-->
	<div class="section bg-bottom bg-right bg-norepeat bg-md-none bg-fixed section-bottom-padding section-top-padding" style="background-image: url(images/bg-bottom-right.png)">
		<div class="container">
			<div class="row mt-lg-4">
				<div class="col-md-6 col-xl-6 pr-xl-7">
					<div class="department-tabs2">
						<div class="department-tab2">
							<a href="https://booking.elegancesalons.co.uk"><div class="department-tab2-number"><i class="icon-news-11"></i></div></a>
							<a href="https://booking.elegancesalons.co.uk"><div class="department-tab2-text" >Book an Appointment Now</div></a>
							
						</div>
						<div class="department-tab2">
							<a href="packages.html"><div class="department-tab2-number"><i class="icon-news-12"></i></div></a>
							<a href="packages.html"><div class="department-tab2-text">Buy & Save on Treatment Packages</div></a>
							
						</div>
						<div class="department-tab2">
							<a href="https://elegancesalon.zenoti.com/webstoreNew/giftcards"><div class="department-tab2-number"><i class="icon-news-13"></i></div></a>
							<a href="https://elegancesalon.zenoti.com/webstoreNew/giftcards"><div class="department-tab2-text">Perfect Gifts for Any Ocassion</div></a>
						
						</div>
						<div class="department-tab2">
							<a href="https://www.elegancebeautygroup.co.uk/browse"><div class="department-tab2-number"><i class="icon-news-14"></i></div></a>
							<a href="https://www.elegancebeautygroup.co.uk/browse"><div class="department-tab2-text">Shop your products</div></a>
						
						
						</div>
					</div>
					<div class="department-tabs2-bg"><img src="{{ asset('public/images/bg-department.png') }}" alt=""></div>
				</div>
				<div class="col-md-6 col-xl-6">
					<div class="department-carousel2">
						<div class="department-item">
							<div class="h-sub theme-color">Welcome to</div>
						
							<a href="index.html" class="header-logo"><img src="{{ asset('public/images/logo.png') }}" alt="" class="img-fluid"></a>
							
							<p>Established in 2010, Elegance is an award winning beauty chain, which has become
							Scotland&#39;s one of the leading beauty groups
							by providing high-standard beauty treatments
							followed by exceptional business growth.</p>
							<p>With Beauty Salons located in Edinburgh,
							Glasgow, Stirling, Aberdeen, and Dundee,
							we proudly cater a satisfied client base over
							161,000. All our branches are highly rated
							(4.5 stars &#8211; 5 stars) in Google and Facebook,
							for our pitch-perfect treatments, warm
							customer service and lucrative price deals.</p>
							<p>
							 Our highly skilled and experienced staffs
							work passionately to ensure highest
							customer satisfaction, while performing
							individualised treatments in a professional as
							well as caring ambience. Equipped with
							latest technologies and quality products,
							Elegance gives you the glam touch you
							need! 
                               
							    
							</p>
							
							<a href="https://www.eleganceclinics.co.uk/" class="btn mt-3" style="background:#599f90; color:#fff;border: 2px solid #fff;box-shadow: inset 0 0 0 1px #fff;" ><i class="icon-right-arrow" style="color: #56a59e;"></i><span style="color: #fff;">Check Our Laser Hair Removal Services</span><i class="icon-right-arrow" style="color: #56a59e;"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  departments-->
	<!--section-->
	<div class="section bg-grey mt-md-0">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="EXPLORE"><span style="color: black;">Salons | Services | Offers</span></h2>
				<div class="h-decor"></div>
			</div>
			
			
			<div class="nav nav-pills-icons js-nav-pills-carousel" role="tablist">
				<a class="nav-link" href="salons.html"><i class="icon-find"></i><span>Find a Salon</span></a>
				<a class="nav-link" href="treatments1213.html"><i class="icon-mommy"></i><span>Services</span></a>
				<a class="nav-link" href="offers.html"><i class="icon-offers"></i><span>Offers</span></a>
				<a class="nav-link" href="aftercare.html"><i class="icon-care"></i><span>After Care</span></a>
				<a class="nav-link" href="https://booking.elegancesalons.co.uk"><i class="icon-calendar2"></i><span>Appointment</span></a>
				
				<a class="nav-link" href="https://www.elegancebeautygroup.co.uk/browse"><i class="icon-cart"></i><span>Retail Shop</span></a>
				<a class="nav-link" href="careers.html"><i class="icon-team"></i><span>Careers</span></a>
				<a class="nav-link" href="https://www.elegancebeautygroup.co.uk/browse"><i class="icon-dental-chair"></i><span>Consultation</span></a>
				<a class="nav-link" href="download.html"><i class="icon-smartphone"></i><span>Download App</span></a>
				
				<a class="nav-link" href="https://elegancesalon.zenoti.com/webstoreNew/giftcards/ba04dfc5-dc3e-453a-bf81-fc6b333defb9"><i class="icon-card"></i><span>Gift Cards</span></a>
				
			</div>
			</br>
			<div class="h-sub theme-color"><center> &#60;&#60; Swipe Left or Right &#62;&#62; </center></div>
		</div>
	</div>
	<!--//section-->
	<!--section special offers-->
	<div class="section" id="specialOffer">
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="{{ asset('public/images/content/brows-ind-15.jpg') }}" alt="">
						</div>
						<div class="special-card-caption text-left">
							<div class="special-card-txt1"><h1 style="color:white;">BROWS</h1></div>
							
							
							<div><a href="treatments1213.html#FaceTreSec" class="btn" ><i class="icon-right-arrow"></i><span>Find Now</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="{{ asset('public/images/content/lashes-ind-15.jpg') }}" alt="">
						</div>
						<div class="special-card-caption text-left">
							<div class="special-card-txt1"><h1 style="color:white;">LASHES</h1></div>
							
							
							<div><a href="treatments1213.html#EyeTreSec" class="btn" ><i class="icon-right-arrow"></i><span>Find Now</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="{{ asset('public/images/content/nails-ind-15.jpg') }}" alt="">
						</div>
						<div class="special-card-caption text-left">
							<div class="special-card-txt1"><h1 style="color:white;">NAILS</h1></div>
							
							
							<div><a href="treatments1213.html#HaFeTreSec" class="btn" ><i class="icon-right-arrow"></i><span>Find Now</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="{{ asset('public/images/content/waxing-ind-15.jpg') }}" alt="">
						</div>
						<div class="special-card-caption text-left">
							<div class="special-card-txt1"><h1 style="color:white;">WAXING</h1></div>
							
							
							<div><a href="treatments1213.html#BodyTreSec" class="btn" ><i class="icon-right-arrow"></i><span>Find Now</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="{{ asset('public/images/content/massage-ind-15.jpg') }}" alt="">
						</div>
						<div class="special-card-caption text-left">
							<div class="special-card-txt1"><h1 style="color:white;">MASSAGE</h1></div>
							
							
							<div><a href="treatments1213.html#BodyTreSec" class="btn" ><i class="icon-right-arrow"></i><span>Find Now</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="{{ asset('public/images/content/hair-ind-15.jpg') }}" alt="">
						</div>
						<div class="special-card-caption text-left">
							<div class="special-card-txt1"><h1 style="color:white;">HAIR</h1></div>
							
							
							<div><a href="treatments1213.html#HairTreSec" class="btn" ><i class="icon-right-arrow"></i><span>Find Now</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section special offers-->
	
	
	<!--//section services -->
	<div class="section bg-norepeat bg-md-none section-top-padding" style="background-image: url(images/bg-top-left.png)">
		<div class="container-fluid px-0 over-visible">
			<div class="row">
				<div class="col-lg-6">
					<div class="services-tab-wrap float-right">
						<div class="title-wrap-alt text-center text-md-left">
							
							<h2 class="h1 double-title double-title--top-md" data-title="TREATMENTS"><span class="theme-color" >SERVICES</span></h2>
						</div>
						
						<div id="tab-content-2" class="tab-content mt-2">
							<div id="tab-A1" class="tab-pane fade show active" role="tabpanel">
								<div id="faqAccordion1" class="faq-accordion faq-accordion--style2" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span></span><span>Brow Treatments</span></a>
										<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
											<div>
											<li><a href="treatments1213.html">Eyebrow Threading</a></li>
											<li><a href="treatments1213.html">Eyebrow Waxing</a></li>
											<li><a href="treatments1213.html">Eyebrow and Eyelash Tinting</a></li>	
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span></span><span>Lash Treatments</span></a>
										<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
											<div>
												<li><a href="treatments1213.html">Party Lashes</a></li>
												<li><a href="treatments1213.html">Semi permanent Lashes</a></li>
												<li><a href="treatments1213.html">Russian Lashes</a></li>
												<li><a href="treatments1213.html">Lash Lift and Tint</a></li>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span></span><span>Nail Treatments</span></a>
										<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
											<div>
												<li><a href="treatments1213.html">Manicures </a></li>
												<li><a href="treatments1213.html">Pedicures</a></li>
												<li><a href="treatments1213.html">Gel Manicures</a></li>
												<li><a href="treatments1213.html">Acrylic Nails</a></li>
												<li><a href="treatments1213.html">Gel Nails</a></li>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span></span><span>Waxing & Massage</span></a>
										<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
											<div>
												<li><a href="treatments1213.html">Body Waxing</a></li>
												<li><a href="treatments1213.html">Intimate Waxing</a></li>
												<li><a href="treatments1213.html">Massages</a></li>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem5" aria-expanded="false" class="collapsed"><span></span><span>Hair</span></a>
										<div id="faqItem5" class="collapse faq-item-content" role="tabpanel">
											<div>
												<li><a href="treatments1213.html">Cut and blow dry</a></li>
												<li><a href="treatments1213.html">Blow dry</a></li>
												<li><a href="treatments1213.html">Hair Tint</a></li>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
				<div class="col-lg-6 position-relative">
					<div class="ml-xl-6">
						<img src="{{ asset('public/images/content/index-img-02.jpg') }}" class="w-sm-100" alt="">
					</div>
					<div class="over-image-card pos-left">
						<div class="over-image-card-icon"><i class="icon-download"></i></div>
						<div class="over-image-card-text">
							<h4>Download Pricelist</h4>
							<p>Check our Pricelist to find the cost of your favourite treatments!</p>
							<a href="brochure.html" class="btn "><i class="icon-right-arrow"></i><span>View</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section services -->
	
	
	
	
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				
				<h1 style="color: black;">Why choose elegance salons</h1>
				<div class="h-decor"></div>
				
			</div>
		</div>
		<div class="container">
			<div class="row col-equalH">
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="awards.html"><img src="{{ asset('public/images/content/services-05.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="awards.html">Award Winning Salon</a></h5>
						<div class="h-decor"></div>
						<p>
						    
						    We have won multiple 
                            awards over the years for 
                            our excellence, 
                            commitment, and 
                            performance
						</p>
						</br>
						
						</br>
						<a href="awards.html" class="btn"><i class="icon-right-arrow"></i>View Awards<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="about.html"><img src="{{ asset('public/images/content/services-02.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="about.html">Established Since 2010</a></h5>
						<div class="h-decor"></div>
						<p>
						    Elegance was established 
                            in 2010, with a dream to 
                            bring revolution in beauty 
                            Industry. We are delighted 
                            that we have changed our 
                            dream into reality with 
                            our passion and 
                            perfection
						</p>
						<a href="about.html" class="btn"><i class="icon-right-arrow"></i>About Us<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="rating.html"><img src="{{ asset('public/images/content/services-06.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="rating.html">Over 161000 customers</a></h5>
						<div class="h-decor"></div>
						<p>
						    
						    Our beloved customers 
                            are the reason behind 
                            our success. Across 
                            Scotland we enjoy a 
                            huge client base over 
                            161,000. And the 
                            number of happy clients 
                            is growing every day
						</p>
						
						<a href="rating.html" class="btn"><i class="icon-right-arrow"></i>View Ratings<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="team.html"><img src="{{ asset('public/images/content/services-03.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name" ><a href="team.html">Expert in the Industry</a></h5>
						<div class="h-decor"></div>
						<p>
						    We are the leading salon 
                            service provider in 
                            Scotland. And the credit 
                            goes to our highly 
                            experienced, skilled, 
                            committed, and 
                            passionate staffs, who 
                            ensure the highest 
                            customer satisfaction
						</p>
						<a href="team.html" class="btn"><i class="icon-right-arrow"></i>Our Expert Panel<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="https://www.elegancebeautygroup.co.uk/browse"><img src="{{ asset('public/images/content/services-04.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="https://www.elegancebeautygroup.co.uk/browse">Top Quality Products</a></h5>
						<div class="h-decor"></div>
						<p>
						    We want our clients to 
                            look glamorous and 
                            beautiful always. We 
                            always use high-quality 
                            products because we 
                            believe that our clients
                            deserve the best
						</p>
						</br>
						<a href="https://www.elegancebeautygroup.co.uk/browse" class="btn"><i class="icon-right-arrow"></i>View Awards<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="team.html"><img src="{{ asset('public/images/content/services-01.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="team.html">Professional Approach</a></h5>
						<div class="h-decor"></div>
						<p>
						    Our staffs are highly 
                            professional. But we also 
                            make sure that in 
                            Elegance, each client is 
                            provided the care and 
                            comfort they seek for.
						</p>
						</br>
						<a href="team.html" class="btn"><i class="icon-right-arrow"></i>Our Team<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	<!--//section-->
	
	<!--section testimonials-->
	<div class="section bg-grey p-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="reviews-style4-wrap">
						<div class="reviews-style4">
							<div class="title-wrap">
								<div class="h-sub theme-color">Customer Reviews</div>
								<h2 class="h1 double-title double-title--white double-title--right" data-title="Testimonials"><span style="color: black;">What Our <br class="d-sm-none">Customers Say</span></h2>
							</div>
							<div class="js-reviews-carousel2 reviews-carousel">
								<div class="review">
								
									
									<div class="fb-post" data-href="https://www.facebook.com/nichola.aird.7/posts/3020270974925635" data-width="500" data-show-text="true"><blockquote cite="https%3A%2F%2Fwww.facebook.com%2Fanelia.danailova%2Fposts%2F5149798965049008" class="fb-xfbml-parse-ignore"><p>Thank you to the Dundee Overgate store and store manager for the excellent service and treatment I received tonight....</p>Posted by <a href="#" role="button">Moira Tosh</a> on&nbsp;<a href="https://www.facebook.com/moira.hodgkinson.9/posts/2629857017080785">Wednesday, 4 December 2019</a></blockquote></div>
								</div>
								<div class="review">
								
									<div class="fb-post" data-href="https://www.facebook.com/anelia.danailova/posts/5149798965049008" data-width="500" data-show-text="true"><blockquote cite="https%3A%2F%2Fwww.facebook.com%2Fanelia.danailova%2Fposts%2F5149798965049008" class="fb-xfbml-parse-ignore"><p>Thank you to the Dundee Overgate store and store manager for the excellent service and treatment I received tonight....</p>Posted by <a href="#" role="button">Moira Tosh</a> on&nbsp;<a href="https://www.facebook.com/moira.hodgkinson.9/posts/2629857017080785">Wednesday, 4 December 2019</a></blockquote></div>
									
								</div>
								<div class="review">
								
									<div class="fb-post" data-href="https://www.facebook.com/Aliballybee28/posts/6805329942825670" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/paula.hegarty.90/posts/10157177453564877" class="fb-xfbml-parse-ignore"><p>Twice in the last six weeks had an amazing facial with two different beauticians. And very reasonably price in their Aberdeen store</p>Posted by <a href="#" role="button">Paula Hegarty</a> on&nbsp;<a href="https://www.facebook.com/paula.hegarty.90/posts/10157177453564877">Saturday, 23 November 2019</a></blockquote></div>
								</div>
								<div class="review">
									<div class="fb-post" data-href="https://www.facebook.com/omobabs/posts/2545688708820212" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/omobabs/posts/2545688708820212" class="fb-xfbml-parse-ignore"><p>Elegance Beauty Group is one of the best eye brow shaping and nails fixing shop in Dundee. They are so good at their job...</p>Posted by <a href="https://www.facebook.com/omobabs">Dami Ajiboye</a> on&nbsp;<a href="https://www.facebook.com/omobabs/posts/2545688708820212">Thursday, 14 November 2019</a></blockquote></div>
								</div>
								<div class="review">
									<div class="fb-post" data-href="https://www.facebook.com/jacqueline.hudson.12/posts/10159778751778679" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/lyndsey.rogan.9/posts/2751819571534783" class="fb-xfbml-parse-ignore"><p>Used quite a few times and always happy with my visit, appointments easy to make on their app and always quick , staff are very welcoming and I would highly recommend 😀</p>Posted by <a href="https://www.facebook.com/omobabs">Lyndsey Rogan</a> on&nbsp;<a href="https://www.facebook.com/omobabs/posts/2545688708820212">Thursday, 14 November 2019</a></blockquote></div>
								</div>
								
								
								
							</div>
						
						</div>
						
					</div>
				</div>
				<div class="col-md-6 py-sm-3 px-md-4 px-xl-8">
					<div class="testimonials-bg-wrap">
						<img src="{{ asset('public/images/content/tesimonials-bg.png') }}" alt="" class="reviews-style4-image-right">
						<div class="testimonials-icon"><span><span>“</span></span></div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--//section testimonials-->
	
</div>
@endsection