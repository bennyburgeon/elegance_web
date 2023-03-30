@extends('web.layout') @section('body')

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
			<!-- Mobile View Slider Start -->
			<div class="mobile-slider-1 main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
				<div class="slide">
						<div class="img--holder" style="height:300px;" data-bg="{{ asset('public/images/content/slider/slide-012.jpg') }}"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Brows</b></div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" style="height:300px;" data-bg="{{ asset('public/images/content/slider/slide-011.jpg') }}"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Lashes</b>
											</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" style="height:300px;" data-bg="{{ asset('public/images/content/slider/slide-013.jpg') }}"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Nails</b>
											</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- Mobile View Slider End -->
			<!-- Desktop View Slider Start -->
				<div class="desktop-slider-1 main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}' style="height: 450px;">
					<div class="slide">
						<div class="img--holder" style="height:450px;" data-bg="{{ asset('public/images/content/slider/slide-012.jpg') }}"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Brows</b></div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" style="height:450px;" data-bg="{{ asset('public/images/content/slider/slide-011.jpg') }}"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Lashes</b>
											</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" style="height:450px;" data-bg="{{ asset('public/images/content/slider/slide-013.jpg') }}"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>NAILS</b>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			<!-- Desktop View Slider End -->
		</div>
	</div>

	<!-- Sticky treatments buttons for desktop view 968320 -->
		<div class="treatments-sticky desktop-view-1">
		<div class="row align-items-lg-center-part2">
				<div class="nav nav-pills justify-content-center" role="tablist">
				<a class="nav-link link-inside" data-toggle="pill" href="#FaceTreSec" style="border: 2px solid #ecb3a0;">FACE TREATMENTS</a>
				<a class="nav-link link-inside" data-toggle="pill" href="#EyeTreSec" style="border: 2px solid #ecb3a0;">EYE TREATMENTS</a>
				<a class="nav-link link-inside" data-toggle="pill" href="#HaFeTreSec" style="border: 2px solid #ecb3a0;">HANDS & FEET TREATMENTS</a>
				<a class="nav-link link-inside" data-toggle="pill" href="#BodyTreSec" style="border: 2px solid #ecb3a0;">BODY TREATMENTS</a>
				<a class="nav-link link-inside" data-toggle="pill" href="#HairTreSec" style="border: 2px solid #ecb3a0;">HAIR CUT & COLOUR TREATMENTS</a>
				
				
		</div>
			</div>
	</div>
	<!-- End of sticky buttons -->

	<!--section promotext -->
	<div class="section mt-0">

		<div class="container">
			<div class="promo-text">
				<h4 style="color: #4a4a4a;"><i class="icon-eye-7"></i>More than <span class="text-lg">1,61,000</span> customers</h4>
				<p>Most recommended beauty salon in scotland</p>
			</div>
		</div>
	</div>
	<!--//section promotext -->
	
<!-- Accordion section start -->
<div class="mobile-view-1">
<!-- Face treatments Accordion Start ID: 876842 -->
<button class="accordion-mob">Face Treatments</button>
<div class="panel">
  <div class="section bg-grey mt-0" id="servicesSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						<a class="nav-link" data-toggle="pill" href="#tab-A-v" role="tab"><span>+</span>BROWS & FACE THREADING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-C-v" role="tab"><span>+</span>BROWS & FACE WAXING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-B-v" role="tab"><span>+</span>EYEBROW & EYELASH TINTING</a>
						
						<a class="nav-link" data-toggle="pill" href="#tab-D-v" role="tab"><span>+</span>HI DEFINITION PERFECT BROWS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-D-v-a" role="tab"><span>+</span>HENNA BROWS</a>

						<a class="nav-link" data-toggle="pill" href="#tab-D-v-b" role="tab"><span>+</span>BROW LAMINATION</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						<!-- Threading Start 324954-->
						<div id="tab-A-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-A-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Threading</a>
							</div>
							<div id="tab-A-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/eyebrow-threading-11.jpg') }}" alt="">
									</div>
									
									<div class="post-text">
										<p><b>Threading</b></p>
										
										<p>Threading is an ancient technique of Eyebrow shaping and hair removal from various
											areas of face, originated in the Middle East and South Asia. It provides peach fuzz
											free skin and helps in finer, softer, and smoother regrowth of hair. It gives a precise
											shape and smooth finish to eyebrows which lasts upto five weeks. It is also gentle on
											the skin. Threading is a great alternative for waxing and plucking as it gives a sharp
											and desirable look to your eyebrows. Though many people do not know much about
											threading, it can be a useful regime for our eyebrow care.</p>
										<p><b>Benefits of threading</b></p>
										<p>
											<li>As opposed to other hair removal methods, threading doesn’t use any chemical and therefore, very safe, and gentle for skin</li>
											<li>If you have a sensitive skin or your skin is prone to react to chemical usage
												(redness or itchiness), threading is a perfect alternative for you</li>
											<li>Threading shapes eyebrows in a precise and accurate manner as in threading even
												a single hair can be removed</li>
											<li>Threading also creates a fine brow line to give you a sharp look</li>
											<li>Threading weakens the hair follicle causing a less dense growth of hair over the
												time. Thus, it also provides your brows a long-lasting clean shape</li>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
									<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem2" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is threading done?</b></br>
													A. <p>Material used: 100% sterile thread.</p>
													Process: The thread is double-twisted and glided through the skin to gently remove
													unwanted hair from the root
													</br></br>
													<b>2. Is there anything I need to do before my threading treatment?</b></br>
													A. <li> highly recommend that you exfoliate the area to be threaded at least three days
													before your scheduled treatment. This makes any hair growth in the area, which is
													beneath the skin, visible. It helps the therapist to provide you an accurate brow shape</li>
													<li>On the day of your treatment please try to avoid any make-up on the area to be
														threaded as it makes the treatment process easier and more precise</li> 
													<li>To achieve the best result with threading, please avoid waxing or plucking. It allows our
														therapists to notice and shape hair growth at any stages in one go. Therefore, you can
														be relaxed until your next visit with us</li>
													</br></br>

													<b>3. How long does threading last?</b></br>
													A. Threading usually lasts up to 3 to 4 weeks, depending on your hair type, hair growth and the
													area of the face treated. Full hair growth can be noticed from 2 to 5 weeks.</br></br>

													<b>4. Is threading painful?</b></br>
													A. Threading is gentle on the skin. But as our pain tolerance varies, some of our clients felt
													slight discomfort during the process, whereas some other clients felt no discomfort at all. Be
													sure that our highly experienced therapists are skilled enough to make the process as
													painless as possible.
													</br></br>
													
													<b>5. How old must I be to have this done?</b></br>
													A. You can have threading even if you are 11+, but in that case we will need your parent's or
													guardian's consent. 
													</br></br>
													<b>5. Which areas can be threaded besides eyebrows?</b></br>
													A. Threading can be performed anywhere in our face, from upper lip to chin or side of the face.
													</br></br>
													<b>6. I am using Retin A/Accutane, Is threading suitable for me?</b></br>
													A. Threading is your best choice for removing the hairs, as taking these medications can make
													your skin thin and sensitive. Dermatologists also approve of threading as it doesn’t break or
													pull your skin, unlike waxing. Threading is suitable for all skin types and a completely safe
													process to carry out.
													</br></br>
													<b>7. Is there any possibility of cross contamination in threading?</b></br>
													A. In threading we use a special 100% sterile thread. Once your treatment is complete, we
													dispose the used thread straight away. Therefore, you don't need to worry at all about any
													infection passed from another person.
													</br></br>
													<b>8. What should I do after my treatment? Are there any restrictions to follow? (Threading
														Aftercare)</b></br>
													A. <li>Wash your face with cold water, as it minimises the chance of post-threading redness</li>
													<li>You can apply Aloe Vera Gel to soothe the area treated</li>
													<li>You can rub ice-cubes in the treated area for some time if you experience any irritation
														or red bumps in your skin. But be sure that these reactions are
														natural and normal and therefore nothing to be worried about. They will go with time.</li>
														<li>Avoid perfumed products, direct sunlight or fake tan, chlorinated water and steam, for at
															least 24 hours post-treatment. As after threading the area becomes highly sensitive,
															above mentioned exposures can cause irritation, sunburn, or inflammation.</li>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#faqItem3" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-threading-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-threading-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#faqItem4" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#faqItem5" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="faqItem5" class="collapse faq-item-content" role="tabpanel">
										<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Threading End -->

						<!-- Tinting Start 473085-->
						<div id="tab-B-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-B-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Tinting</a>
							</div>
							<div id="tab-B-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/tinting-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Tinting</b></p>
										
										<p>If you are tired of filling your eyebrows every day or have fair-coloured lashes and you are
											fed up with applying mascara every day, our Tinting treatment can be your perfect solution.
											Tinting is a completely painless, semi-permanent colouring option which gives your
											eyebrows and lashes a desired, long-lasting, natural, and fuller look.</p>
										<p><b>Benefits of Tinting</b></p>
										<p>
											<li>Tinting is a quick process to emphasize your brows or lashes</li>
											<li>Tinting offers a natural yet darker and fuller look to your brows and lashes</li>
											<li>If you are allergic to mascara or make-ups or if you lack time to fill your brows and
												lashes, Tinting can be the end of all the problems</li>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Tinting appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#tinting1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="tinting1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is tinting done?</b></br>
													A. <p>The process of Tinting is like that of the hair dye</p>
													<li>Step 1: Petroleum Jelly is applied to the skin, around the area to be tinted, to prevent the dye from staining your skin.</li>
													<li>Step 2: A semi-permanent dye is then custom mixed to get the desired shade for you.</li>
													<li>Step 3: Then the tint is applied and left for specific/ required time to achieve the right shade for you. This process can take up to 5 to 10 minutes depending on your hair type.</li>
													</br></br>
													<b>2. Is there anything I need to do before my tinting treatment? (Tinting Pre-care)</b></br>
													A. <li>Please make sure that you are aware of our Patch Test requirements</li> 
													<li>If you wear contact lenses, please bring your solution and case with you to keep your contact lenses safe, during the treatment</li>
													<li>Make sure that your lashes and brows are clean and free from any residue from any oils or tanning products. This will allow your tint to be absorbed properly, giving you a stunning look</li>
													</br></br>
													<b>3. How long does tinting last?</b></br>
													A. Make sure that your lashes and brows are clean and free from any residue from any oils or tanning products. This will allow your tint to be absorbed properly, giving you a stunning look.
													</br></br>

													<b>4. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.
													</br></br>
													
													<b>5. What can I tint besides my eyebrows and eyelashes?</b></br>
													A. Tinting can only be done on your eyebrows and eyelashes. 
													</br></br>
													<b>5. Can I choose my preferred colour for tinting? What if I don’t want to go too dark?</b></br>
													A. Before starting your treatment, please let your therapist know what results you are looking
													for. Our therapists will offer the best advice about the shades of tint, considering your hair
													and skin tone. Ideally you should opt for the colour to be 1 or 2 shades lighter or darker than
													your natural hair colour.
													</br></br>
													<b>6. Do I need a patch test for tinting?</b></br>
													A. <p>We prioritise our clients’ health and safety over anything. Therefore, you are required to do a
														Patch Test, 48 hours prior to the treatment.</p>
														<p>You are exempt only if you have undergone tinting treatment in our salons before or within the last 6 months and since then there’s been no change in your medical history.</p>
														<p>The patch test involves applying a small amount of dye on the back of your ear. This process takes only a few seconds. You can’t skip a patch test and we must be very strict about this for your own safety. It helps us to see whether you are allergic to any colours or not, which eliminates chances of post-treatment skin reactions which can be worse at times. You can
															pop into any of your nearest elegance salons/bars at any time to have this done.</p>
													</br></br>
													<b>7. Is tinting suitable during pregnancy?</b></br>
													A. We recommend clients to avoid tinting during the time of pregnancy, as a reaction from the
													tint is more likely to occur during pregnancy due to hormonal changes. If any reaction
													happens, you won’t even be able to treat this with medication, due to your pregnancy.
													</br></br>
													<b>8. What should I do after my treatment? are there any restrictions? (Tinting aftercare)</b></br>
													A. 
													<ul>
														<li>What should I do after my treatment? are there any restrictions? (Tinting aftercare)</li>
														<li>Avoid touching or rubbing your eyes straight after the treatment</li>
														<li>For 24 hours post-treatment, please avoid sauna, swimming, and sunbeds</li>
														<li>Use oil free products around the eye area to prolong the stay of the colour</li>
														<li>If any redness or irritation occurs, apply a damp cotton wool cold compress. If symptoms
															persist more than 24 hours, please seek medical advice</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#tinting1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="tinting1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/tinting-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/tinting-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#tinting1pac" aria-expanded="false"><span>3.</span>Packages</a>
											<div id="tinting1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#tinting1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="tinting1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Tinting End -->

						<!-- Eyebrow Waxing Start 271486-->
						<div id="tab-C-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-C-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Eyebrow Waxing</a>
							</div>
							<div id="tab-C-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/eyebrow-waxing-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Waxing</b></p>
										
										<p>Waxing is a safe method of temporarily removing unwanted hair, which lasts up to 6 weeks. Waxing produces smoother result as it removes the hair from its roots, resulting in slower regrowth unlike shaving where the hair comes back faster.</p>
										<p><b>What are the benefits of Waxing?</b></p>
										<p>
											<li>Waxing slows down the re-growth of the hair</li>
											<li>Waxing makes hair finer when they re-grow</li>
											<li>As minimum chemicals are used during the waxing treatment, it rarely causes skin irritation or allergies</li>
											<li>Waxing removes hair from their roots providing a smooth, exfoliated skin and longer lasting results. Therefore, it is always a better option than shaving as you may know that shaving makes the skin rough and stubbly</li>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#eyebrow1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="eyebrow1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is Waxing done?</b></br>
													A. Waxing is done by using two types of methods, which is warm wax and hot wax. In warm
													waxing, a paper strip is applied and pressed firmly in the area to be waxed, adhering the
													strip to the wax. Then the strip is removed bringing out both the wax and the hair. The hot
													waxing method is performed in the same way, only without the usage of the paper strips.
													The wax is self-setting and therefore, once it’s cool and hard, the therapist removes it along
													with the hair.
													</br></br>
													<b>2. Is there anything I need to do before my waxing treatment? (Waxing Pre-care)</b></br>
													A. <li>We suggest that you exfoliate the place to be waxed, a day before your waxing appointment. It softens your skin and prevents ingrown hair</li> 
													<li>Please do not apply any moisturisers or lotions in the place to be waxed, on the day of your treatment</li>
													<li>If you are having an under-arm waxing, please try to use a deodorant with anti-perspirant
														which allows the hair to come out easily</li>
													<li>Try to have a bath or shower one day prior to your treatment, to open follicles allowing
														easy hair removal</li>
													</br></br>

													<b>3. How long should my hair need to be for waxing?</b></br>
													A. For an easy and safe waxing treatment, your hair must be ¼ inches long. If the hair is too
													short it will be difficult to remove. Also, if you have shaved recently for a quick hair removal,
													please allow at least 10 days for hair regrowth to perform the waxing treatment.</br></br>

													<b>4. How long does waxing result last?</b></br>
													A. The lasting time of the waxing treatment will vary from person to person depending on their
													hair growth. Usually, you can expect the results to last between 3 to 5 weeks. You will see a
													longer lasting effect with repeated waxing treatments. We recommend undergoing waxing
													treatments in every 4 weeks.
													</br></br>
													
													<b>5. Will my hair re-growth be thicker with waxing treatments?</b></br>
													A. No, with consistent waxing treatments you will notice your hair re-growth has become finer
													and slower. 
													</br></br>
													<b>5. I’m pregnant. Is waxing suitable for me?</b></br>
													A. Yes, you can undergo waxing treatments during pregnancy as well. But if you are to undergo
													an intimate waxing treatment, we recommend that you do this after your first trimester.
													</br></br>
													<b>6. Is waxing safe for sensitive skin?</b></br>
													A. Waxing is gentler on the skin compared to other hair removal methods like shaving. If you
													have sensitive skin, it’s very important to follow the pre/aftercare instructions provided in this
													page. We also provide laser hair removal as another safe option, which lasts longer
													(between 3-4 years with proper maintenance). Please speak to our highly experienced and
													knowledgeable therapists if you need any further advice regarding this issue.
													</br></br>
													<b>7. If you have the following conditions or taking following medication or had treatments
														done for following issues, unfortunately we won’t be able to do waxing for your own
														safety.</b></br>
													A. <ul>
														<li>Active herpes outbreak</li>
														<li>Sunburn on the area to be waxed</li>
														<li>Chemical peel within the last 10 days</li>
														<li>Use of retinol on the area to be treated within last 3 days</li>
														<li>Acne medication such as Accutane within the last 6 months</li>
														<li>Acne medication such as Accutane within the last 6 months</li>
													</ul>
													</br></br>
													<b>8. What should I do after my waxing treatment? are there any restriction? (Waxing
														aftercare)</b></br>
													A. <li>What should I do after my waxing treatment? are there any restriction? (Waxing
														aftercare)</li>
													<li>What should I do after my waxing treatment? are there any restriction? (Waxing
														aftercare)</li>
													<li>For at least 24 hours after your treatment, please avoid perfumed products or
														deodorants, direct sunlight or fake tan, chlorinated water, steam and make up. It can
														cause irritation and inflammation in your skin</li>
													<li>Please avoid rubbing or scratching the waxed area as your skin will be highly sensitive
														post-treatment</li>
													<li>Avoid exercising for 24 hours as sweat may cause itchiness in the skin</li>
													<li>If any irritation occurs apply a cool cotton wool compress in the area. If these symptoms
														persist more than 24 hours, please seek medical advice</li>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#eyebrow1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="eyebrow1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-waxing-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-waxing-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#eyebrow1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="eyebrow1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#eyebrow1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="eyebrow1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Eyebrow Waxing End -->

						<!-- Perfect Brows Start 176825 -->
						<div id="tab-D-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-D-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Perfect Brows</a>
							</div>
							<div id="tab-D-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/perfect-brows-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Perfect Brows</b></p>
										
										<p>Hi-Definition Perfect Brows is a five-step procedure exclusively customised for our beloved clients. It involves a combination of techniques including deciding the suitability of the brow shape according to your face, mapping of the brows to make them as even as possible, threading, waxing, and tinting. The whole process gives you a defined, sharp, and prominent brow, yet a natural finish.</p>
										<p><b>What are the benefits of Perfect Brows?</b></p>
											<ul>
												<li>If you are looking to reshape your eyebrows, this treatment is a precise procedure to give you the desired shape.</li>
												<li>If your eyebrows are uneven or sparse and you want them to be thicker, Hi-definition Perfect Brows, is definitely for you.</li>
												<li>If you have mistakenly over plucked your brows and looking to achieve the perfect shape, this treatment can surely satisfy you.</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Hi-Definition Perfect Brows appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#pbrows1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="pbrows1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is the Perfect Brows treatment done?</b></br>
													A. At the beginning of the treatment your therapist will go through a consultation with you to discuss your demands and the final outcome you are looking to achieve. Then she will custom mix the tint to a suitable colour, according to your skin tone and hair colour and then apply that gently. Then she will measure your eyebrows and map them out as evenly as possible, using our quad ratio before waxing and threading. The treatment will be finished off with applying make up for a subtle and natural finish.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. <li>Avoid applying any tanning product or make up on your eyebrows</li> 
													<li>Avoid sun exposure for 48 hours prior to your scheduled treatment</li>
													<li>To achieve the best result with this treatment, you should at least grow your brows for a minimum of 3 to 4 weeks</li>
													</br></br>

													<b>3. How old should I be to have this treatment done?</b></br>
													A. From age of 16+ you can undergo this treatment.</br></br>

													<b>4. How long do Perfect Brows last for?</b></br>
													A. Perfect brows can last between 3 to 5 weeks. We recommend that you leave at least 4 weeks between your visits to allow brow regrowth and to maintain your brows.
													</br></br>

													<b>5. How often should I do this treatment? </b></br>
													A. We recommend that you should do this treatment in every 4 to 5 weeks, allowing natural eyebrow regrowth, which gives you the best result. 
													</br></br>
													
													<b>6. Do I need a patch test for this treatment?</b></br>
													A. Yes, Patch test is mandatory, if you have not had a tinting treatment with us within the last 6 months, or if there is any change in your medical history since your last visit. Patch test should be done 48 hours prior to your scheduled treatment. 
													</br></br>
													<b>7. I’m pregnant, is this suitable for me?</b></br>
													A. Yes, this treatment is suitable for you. We still advise to carry out a patch test before the treatment due to health and safety guidelines. It helps us identify any reaction that might happen due to the expected hormonal changes during your pregnancy. 
													</br></br>
													<b>8. How long does this treatment take?</b></br>
													A. Your treatment will usually take around 30 to 40 minutes.
													</br></br>
													<b>9. What should I do after my treatment, are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Avoid prolonged sun exposure, the usage of sunbeds, swimming, sauna, and steam for 48 hours</li>
														<li>Avoid exfoliating and usage of perfumed products for 3 days post-treatment</li>
														<li>No tanning products or make up should be applied on the area for 24 hours post-treatment</li>
														<li>Avoid using harsh cleansing products as this can fade the colour of the tint</li>
														<li>Do not tweeze in between appointments. Please allow regrowth for your next appointment to achieve the best result</li>
													</ul>								</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#pbrows1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="pbrows1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/perfect-brows-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/perfect-brows-1214.png') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#pbrows1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="pbrows1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#pbrows1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="pbrows1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Perfect brows end -->	

						<!-- Henna Brows Start 959435 -->
						<div id="tab-D-v-a" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-D-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Henna Brows</a>
							</div>
							<div id="tab-D-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/henna-brows-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Henna Brows</b></p>
										
										<p>‘Henna brows’ is a popular form of eyebrow tinting, which is used to stain the skin beneath the brow hairs. The purpose of this treatment is to cast a shadow or create an illusion of depth and fullness in the area, filling in any visual sparseness. It is a non-invasive, non-permanent brow treatment that will transform the look of your brows.
										</p>
										<p>Henna is a natural dye made from a plant, known as Hina or the Henna tree. Henna has been around since the ancient Egyptian time, when it was used for many different purposes such as dyeing hair, clothes, fabrics, and as make up.
										</p>
										<p><b>What are the benefits of Henna Brows?</b></p>
										<ul>
											<li>Henna is a safe and natural alternative to tints and dyes</li>
											<li>It is vegan friendly and free from peroxide activators, which makes it a suitable option for anyone with a sensitive skin</li>
											<li>Henna is a natural product and therefore, it usually produces long-lasting result</li>
											<li>Henna provides better definition to your eyebrows</li>
											<li>It is more effective for staining the skin as compared to other forms of eyebrow tinting</li>
											<li>Henna Brows will appear as more matte and fluffier than regular tinting/li>
										</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Henna Brows appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#MobHBFaq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="MobHBFaq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is it done?</b></br>
													A. At first, henna powder and demineralised water are mixed in an accurate proportion to create a paste, which is then applied through the shape of your eyebrows and allowed to soak into the skin for 10 to 15 minutes. To give an ombré effect, less intensity is applied at the beginning of the brow, with more strength applied in the arch and the tail.
													</br></br>
													<b>2. How Long Henna Brows last?</b></br>
													A. Henna brows can stain the skin, giving you tinted hairs for up to 6 weeks and a tint on the skin can last anywhere from 2 to 10 days.  
													</br></br>

													<b>3. Does it hurt?</b></br>
													A. Not at all. Most of our clients find the service relaxing, soothing and stress releasing.</br></br>

													<b>4. Do you need a patch test for Henna Brows?</b></br>
													A. For Henna Bows, a Patch test is mandatory 48 hours prior to the service. if you don’t have a patch test or service history in our system (registered with your name) within last six months or if you have had any change in your medical history since your last Henna Brow treatment, you are required to have a patch test for your own safety. If you do not meet these conditions, salon won’t be able to proceed with the treatment. 
													</br></br>
													
													<b>5. How do you do the henna brow patch test?</b></br>
													A. After mixing a bit of henna powder with water in proper proportion, we apply a small dot of the mixture in the back of the ear of our client, to see whether the colour is causing any reaction to our client’s skin or not. Then after 15 to 20 minutes we ask the client to rinse the colour off with water.  
													</br></br>
													<b>5. What's the difference between regular tint and Henna Brows?</b></br>
													A. Regular eyebrow tint will only colour the hairs and last anywhere from 2 to 4 weeks. Whereas Henna Brows produce longer lasting results, lasting up to 6 weeks on the hairs. it also tints the skin which gives a better shape and fuller look to your brows.
													</br></br>
													<b>6. How often should you do Henna Brows?</b></br>
													A. We recommend our clients to undergo the treatment every 3 weeks to keep their Henna Brows on point and maintain a fleek look. The more frequently you will undergo the treatment, the longer the skin stain will last. 
													</br></br>
													<b>7. Can I get Henna Brows on my micro bladed eyebrows?</b></br>
													A. Yes, if your microblading is fully healed, you can undergo Henna Brows treatment.
													</br></br>
													<b>8. How long should I wait to get Henna brows after my last eyebrow tint?</b></br>
													A. About 4 weeks after your last brow tint. We suggest this interval to avoid any reaction that the Brow Henna can cause with the chemicals from the brow tint.
													</br></br>
													<b>9. How far in advance should I get Brow Henna done before an event?</b></br>
													A. We always suggest getting Brow Henna done at least 24 hours in advance of any event. The more time you have the better result you will see. 24 hours is just the minimum to ensure enough time is given to keep them dry before having shower or applying makeup. If you’re also having your brows shaped it gives more than enough time for any redness to go away. 
													</br></br>
													<b>10. Can I get Henna brows done for my holidays?</b></br>
													A. Brow Henna needs at least 24 hours before being exposed to water. Make sure you book your appointment in advance. Exposure to swimming & sweating in the sun may cause the Brow Henna to fade faster than normal. 
													</br></br>
													<b>11. What should I do after my Henna Brows treatment? Are there any restrictions? (After Care)</b></br>
													A. <ul>
														<li>Do not rub the area treated</li>
														<li>Avoid heat treatments for 24 hours</li>
														<li>Do not apply brow make-up for at least 24 hours after your treatment</li>
														<li>Avoid sunbathing for 24 hours, as this can cause the tint to fad</li>
														<li>Avoid swimming/saunas for at least 24 hours post-treatment</li>
														<li>Avoid perfumed products in the area treated for at least 24 hours after your treatment</li>
														<li>Please note that oil based make up remover can cause the tint to fade away quicker than usual</li>
														<li>Exposure to the sun/UV lights for long period can cause the tint to fade away quicker than usual</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#MobHBGal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="MobHBGal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/henna-brows-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/henna-brows-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#MobHBDp" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="MobHBDp" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#MobHBAb" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="MobHBAb" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Henna Brows End -->

						<!-- Brow Lamination Start 130327 -->
						<div id="tab-C-v-b" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-C-v-b-mob" class="nav-link" data-toggle="collapse"><span>+</span>Brow Lamination</a>
							</div>
							<div id="tab-C-v-b-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/brow-lamination-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Brow Lamination</b></p>
										
										<p>Eyebrow Lamination is a relatively new treatment method that focuses on creating shiny, smooth, and gorgeous brows. It is also called as “eyebrow perm”. The high-shine or glossy effect is sought after by those who may be experiencing thinning or unruly brows. As a semi-permanent procedure, Eyebrow Lamination may be a good fit if you want to keep your brows styled in a certain way but are tired of using eyebrow gel every day. Overall, Brow Lamination makes your brows look thicker and fuller. It pulls the hairs up vertically, which may also make it look like that you are experiencing new growth.</p>
										<p><b>What are the benefits of Brow Lamination?</b></p>
										<p>
											<ul>
												<li>It can stop thinning hair that may occur with age</li>
												<li>It can fill the gaps in your brows, created from overplucking or over waxing in the past</li>
												<li>It can be a solution to the unruly hairs that tend to go to different directions despite brushing them</li>
												<li>It can be effective if your brows lack a shape or evenness</li>
											</ul>
											Overall, brow lamination is said to make brows look thicker and fuller. Pulling the hairs up vertically may also make it look like you are experiencing new growth.
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Brow Lamination appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#MobBroLamFaq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="MobBroLamFaq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is it done?</b></br>
													A. Brow Lamination involves straightening and lifting the brow hairs using a chemical solution, which allows the hairs to have more flexibility to move into your desired shape/ direction. Thus, it also covers any gaps or stray areas. After your natural brow hairs are straightened, a fixing solution is applied to keep the hairs straight, as well as a tint is applied if desired. The result is fuller-looking brows that stay in a place when brushed into shape.
													</br></br>
													<b>2. How Long does brow lamination last?</b></br>
													A. The result should last until your brow hairs grow out, which is usually about six weeks.  
													</br></br>

													<b>3. Do different skin types react differently to Brow Lamination?</b></br>
													A. . Brow lamination is great for all skin types! If you have oily skin, you may experience a slight decrease in lasting period, due to the excess oil production in your skin.
													</br></br>

													<b>4. Does it hurt?</b></br>
													A. There is no discomfort at all associated with this procedure.
													</br></br>
													
													<b>5. Do you need a patch test for brow lamination?</b></br>
													A. A Patch test is mandatory 48 hours prior to this service. if you don't have a patch test or service history in our system (registered with your name) within last six months or if you have had any change in your medical history since your most recent Brow Lamination treatment, you are required to have a patch test for your own safety. If you do not meet these conditions, salon won’t be able to proceed with the treatment.
													</br></br>
													<b>5. Are there any reasons why brow lamination may not be advisable to me?</b></br>
													A. Contraindications for brow lamination include but are not limited to: psoriasis/eczema; recent eye surgery; alopecia; recent permanent make up (must be healed by 6 weeks);  sunburn; ultra-sensitive skin; blood thinners; pink eye; pregnant/nursing; retinol, Accutane, aha, bha etc; naturally curly brows.
													</br></br>
													<b>6. Can I get Brow lamination on my microbladed eyebrows?</b></br>
													A. Yes, if your microblading is fully healed you can undergo Brow Lamination. 
													</br></br>
													<b>7. How long does brow lamination take?</b></br>
													A. Brow lamination takes approximately 45 minutes.
													</br></br>
													<b>8. What should I do after my Brow Lamination treatments? What are the restrictions? (After Care)</b></br>
													A. <p>Following your Brow Lamination treatment, we recommend that the treatment is repeated every 6-8 weeks, depending on your desired look.</p>
													<p>If you had a brow tint as part of the treatment, you could return every 2 to 4 weeks for a top up to keep your brows perfect and on-point.</p>
													<p>For optimum results, please follow the below:
														<ul>
															<li>For the first 24 hours after the treatment, brows should be treated with care. We recommend not touching the hairs to ensure that they stay in the right direction</li>
															<li>For the first 24 hours after the treatment avoid getting your brows wet</li>
															<li>Specifically, shower, hot baths, swimming, and saunas should be avoided</li>
															<li>We recommend using a Brow Gel or Conditioning Serum between appointments to keep your brows in the best possible condition</li>
														</ul>
													</p>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#MobBroLamGal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="MobBroLamGal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/brow-lamination-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/brow-lamination-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#MobBroLamDp" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="MobBroLamDp" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#MobBroLamAb" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="MobBroLamAb" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Brow Lamination End -->

					</div>
				</div>
			</div>
			

		</div>
	</div>
</div>
<!-- Face treatments Accordion End ID: 127519 -->


<!-- Eye treatments Accordion Start ID: 539166 -->
<button class="accordion-mob">Eye Treatments</button>
<div class="panel">
  <div class="section section bg-grey" id="aboutSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-E-v" role="tab"><span>+</span>STRIP LASHES</a> -->
						<a class="nav-link" data-toggle="pill" href="#tab-F-v" role="tab"><span>+</span>PARTY LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-G-v" role="tab"><span>+</span>SEMI PERMANENT NATURAL & GLAMOUR LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-H-v" role="tab"><span>+</span>RUSSIAN NATURAL & GLAMOUR LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-I-v" role="tab"><span>+</span>LASH LIFT AND TINT</a>
						
						
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						
						<!-- <div id="tab-E-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-E-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Strip Lashes</a>
							</div>
							<div id="tab-E-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/strip-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Strip Lashes</b></p>
										
										<p>Strip lashes come in the form of a natural or a dramatic look. These lashes are attached to a thin strip that adheres to your eyelid.</p>
										<p><b>What are the benefits of Strip Lashes?</b></p>
											<p>This treatment is a quick process if you want lashes for a day’s occasion or night out. Strips lashes can be reused if they are looked after well and removed carefully. With these lashes you can achieve various looks.</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#stlashes1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="stlashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash treatment? Pre-care?</b></br>
													A. <ul>
														<li>If you wear waterproof mascara avoid use for 3 days prior to your appointment</li>
														<li>Make sure your eyes and lashes are clean</li>
														<li>Avoid oil-based products around the eyes</li>
														<li>Shower before your appointment as you will not be allowed to get the lashes wet for 24 hours after your treatment</li>
														<li>Remove contact lenses during the appointment-bring your case and solution with you</li>
													</ul>.
													</br></br>
													<b>2. How long do Strip Lashes last for?</b></br>
													A. Ideally, they can last 1-2 days if looked after well. You can remove them carefully and reapply them the next day. 
													</br></br>

													<b>3. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 10-15 minutes.</br></br>

													<b>4. Do I need a patch test for this treatment?</b></br>
													A. You do not require a patch test for strip lashes. However, if you are allergic to latex please let the therapist know so as they can recommend an alternative treatment for you.
													</br></br>
													
													<b>5. Will this hurt?</b></br>
													A. No, this is an eye closed treatment you will find it relaxing. 
													</br></br>
													<b>5. How will the strip lashes feel on me?</b></br>
													A. Once the glue has adhered and dried, you should not feel any discomfort at all.
													</br></br>
													<b>6. Can I apply mascara on my false lashes?</b></br>
													A. Applying mascara can give a dramatic look, however if you do not apply any products on your strip lashes you can get longer out of them.
													</br></br>
													<b>7. Can I get the lashes wet?</b></br>
													A. Try not to, Once the lashes get wet, it will be hard to maintain its curl and shape.								</br></br>
													<b>8. How can I remove these lashes?</b></br>
													A. Apply some make up remover with a cotton bud on the lash line, uses tweezers to peel them off.								</br></br>
													<b>9. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. 
														<ul>
															<li>For 48 hours after application do not swim, steam, or use sauna</li>
															<li>Do not apply waterproof mascara as the remover for this will affect the bonding of the lashes</li>
															<li>Do not use lash curlers as this could break the lash bonding</li>
															<li>Never pull lashes as this will also cause your natural lashes to fall out</li>
															<li>Be gentle with the false lashes, avoid tugging and getting them caught of clothes and towels</li>
														</ul>							</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#stlashes1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="stlashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/strip-lashes-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/strip-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#stlashes1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="stlashes1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#stlashes1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="stlashes1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- Party Lashes Start 594052 -->
						<div id="tab-F-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-F-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Party Lashes</a>
							</div>
							<div id="tab-F-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/party-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Party Lashes</b></p>
										
										<p>Party lashes are made up of cluster fans with multiple lashes on each bulb. They are applied on the top of your natural lashes, providing you a fancy yet natural look.</p>
										<p><b>What are the benefits of Party Lashes?</b></p>
											<ul>
												<li>Cluster lashes are a quick process resulting in instant volumized lashes</li>
												<li>Party Lashes feels natural and weightless</li>
												<li>The treatments procedure is relaxing and comfortable</li>
												<li>The treatment provides extra length to your natural lashes</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Party Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#plashes1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="plashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash treatment? (Pre-care)</b></br>
													A. <ul>
														<li>Clean your lashes before your scheduled appointment</li>
														<li>Avoid using oil-based products on and around the eye area before your appointment.</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>You must remove your contact lenses during the process and therefore, don’t forget to bring your case and solution with you</li>
													</ul>
													</br></br>
													<b>2. How long do Party Lashes last for?</b></br>
													A. Ideally, they can last up to 7 to 10 days. But it depends on the condition of your natural lashes, the natural oil production in the eye area and on your post-treatment care.  
													</br></br>

													<b>3. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 20 to 30 minutes.</br></br>

													<b>4. Do I need a patch test for this treatment?</b></br>
													A. You do not require a patch test for party lashes as per the used glue guidelines. The glue used is skin sensitive.
													</br></br>
													
													<b>5. Does this hurt?</b></br>
													A. No, this is a relaxing process. You just have to close your eyes during the treatment. 
													</br></br>
													<b>5. I wear contact lenses. Can I have this treatment done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend you remove your lenses during the treatment. 
													</br></br>
													<b>6. Can I apply mascara on these lashes?</b></br>
													A. Applying mascara on the bottom lashes give a dramatic look. However, if you do not apply any products on your party lashes, they can stay longer. 
													</br></br>
													<b>7. Can I get the lashes wet?</b></br>
													A. After 24 hours you can. But if the lashes get wet, it will be hard to maintain its curl and shape. 							</br></br>
													<b>8. . I have an eye infection. Is this treatment suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.								</br></br>
													<b>9. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. 
														<ul>
															<li>For 48 hours avoid sauna, steam, showers, or hot baths</li>
															<li>Please be gentle with your lashes</li>
															<li>Avoid using oil-based products in the eye area and please do not rub or pull your lashes out</li>
															<li>Do not use waterproof mascara or make up remover as this will affect the bonding of the lashes</li>
															<li>Never pull off the eyelash extensions as this will pull out your natural lashes too</li>
															<li>Be gentle with the extensions and avoid tugging and getting them caught on clothes and towels</li>
														</ul>							</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#plashes1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="plashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/party-lashes-1213.jpeg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/party-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#plashes1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="plashes1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#plashes1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="plashes1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Party Lashes End  -->

						<!-- Semi Permanent Lashes Start 793710 -->
						<div id="tab-G-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-G-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Semi Permanent Lashes</a>
							</div>
							<div id="tab-G-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/semi-per-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Semi Permanent Lashes</b></p>
										
										<p>In Semi-Permanent lashes, one extension is applied to one natural lash using a special adhesive. These lashes fall out only with your natural hair growth cycle and they can last up to 6 weeks with maintenance. Semi-Permanent Lashes are light weight, and they can result in achieving a fuller but natural enhancement or a dramatic look.</p>
										<p><b>What are the benefits of semi-permanent lashes?</b></p>
											<ul>
												<li>Semi-Permanent Lashes transform your natural lashes into longer, thicker, and curlier lashes</li>
												<li>Semi-Permanent Lashes are appropriate for special occasions and holidays or if you want a natural enhancement</li>
												<li>If you want to avoid wearing mascara every day, this treatment is for you. It helps you to say no to clumping, and smudging mascara</li>
												<li>It can be your best choice if you would like a natural or full-on glam look. With maintenance these lashes can last several weeks</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Semi Permanent Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#splashes1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="splashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. <ul>
														<li>We highly recommend you to clean your lashes before arriving for your scheduled appointment</li>
														<li>Please avoid using oil-based products on and around the eye area</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>If you use contact lenses, you will be asked to remove them during your treatment and therefore, don’t forget to bring your lens case and solution with you</li>
													</ul>
													</br></br>
													<b>2. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service. 
													</br></br>

													<b>3. How long do Semi Permanent lashes last?</b></br>
													A. Ideally, they last up to 2 to 3 weeks, depending on the condition of your natural lashes, your post-treatment cleanliness/ care, and the natural oil production of the eye area. We recommend to refill lashes, every 2 weeks for long lasting results.</br></br>

													<b>4. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 45 to 60 minutes, if you opt for the glamour look this will take longer than the usual time stated above. 
													</br></br>
													
													<b>5. Do I need a patch test?</b></br>
													A. Yes , if you have not had semi permanent lashes or Russian lashes done from us before , you are required to come for a patch test 24/48 hours prior to your appointment. If you are a regular client and we have your semi permanent lash  or Russian lash extension history within  6 months  registered in our system, you do not require a patch test if there is no change in your medical history. 
													</br></br>
													<b>6. I don’t want my lashes to be too long. Is this suitable for me?</b></br>
													A. Yes, this is suitable for you as semi-permanent lashes come in all lengths. Therefore, you can choose to have a fuller but natural length. 
													</br></br>
													<b>7. I wear contact lenses. Can I have this done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend you removing your lenses for the duration of the treatment. 
													</br></br>
													<b>8. Can I apply mascara on these  lashes?</b></br>
													A. Applying mascara can give you a dramatic look, however if you do not apply any products on your lashes, they can last longer. 								</br></br>
													<b>9. Does this hurt?</b></br>
													A. No. Eyelash extensions is a closed eye treatment; you should feel relaxed during the process. 								</br></br>
													<b>10. Can I get the lashes wet?</b></br>
													A. Try not to get your lashes wet. Once the lashes get wet, it will be hard to maintain its curl and shape. 							</br></br>

													<b>11. I have an eye infection is this suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.							</br></br>

													<b>12. What should I do after my treatment? are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours avoid sauna, steam, showers, or hot baths</li>
														<li>Please be gentle with your lashes</li>
														<li>Please avoid using oil-based products on the eye area</li>
														<li>Please do not rub or pull your lashes out</li>
														<li>Do not use waterproof mascara or make up remover as this will affect the bonding of the lashes</li>
														<li>Never pull off the eyelash extensions as this will pull out your natural lashes too</li>
														<li>Be gentle with the extensions and avoid tugging and getting them caught on clothes and towels</li>
													</ul>							</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#splashes1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="splashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/semi-per-lashes-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/semi-per-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#splashes1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="splashes1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#splashes1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="splashes1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Semi Permanent Lashes End -->

						<!-- Russian Lashes Start 860864 -->
						<div id="tab-H-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-H-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Russian Lashes</a>
							</div>
							<div id="tab-H-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/russian-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Russian Lashes</b></p>
										
										<p>In Russian lashes, more than one extension is applied to one natural lash by fanning them to make them appear like more lashes are growing from one stem. These lashes fall out with our natural hair growth cycle and they can last up to 6 weeks with proper maintenance. Russian lashes can be done to achieve a fuller but natural enhancement or a dramatic look.</p>
										<p><b>What are the benefits of Russian lashes?</b></p>
											<ul>
												<li>Russian Lashes give your lashes a more defined and fuller look</li>
												<li>Russian Lashes are extremely lightweight and can’t be felt when applied</li>
												<li>Russian Lashes are apt for special occasions and holidays or if you want a natural enhancement</li>
												<li>If you want to avoid wearing mascara every day, this treatment is for you. It helps you to say no to clumping, and smudging mascara</li>
												<li>You can opt either for a natural or for a full-on glam look</li>
												<li>With proper maintenance these lashes can last several weeks</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Russian Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#rlashes1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="rlashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash treatment? (Pre-care)</b></br>
													A. <ul>
														<li>We highly recommend cleaning your lashes before arriving for your scheduled appointment</li>
														<li>Please avoid using oil-based products on and around the eye area</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>If you use contact lenses, you will be asked to remove them during your treatment and therefore, don’t forget to bring your lens case and solution with you</li>
													</ul>.
													</br></br>
													<b>2. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service. 
													</br></br>

													<b>3. How long do Russian Lashes last?</b></br>
													A. Ideally, they can last up to 4 to 5 weeks, depending on the condition of your natural lashes, you post treatment care or cleanliness and the natural oil production of the eye area. We recommend to refill lash in every 2 weeks for long lasting results. You can also individually replace the lashes which have fallen out.</br></br>

													<b>4. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 1.5 hours. if you opt for the glamour look this will take longer than the usual time stated above. 
													</br></br>
													
													<b>5. Do I need a patch test?</b></br>
													A. Yes , if you have not had semi permanent lashes or Russian lashes done from us before , you are required to come for a patch test 24/48 hours prior to your appointment. If you are a regular client and we have your semi permanent lash  or Russian lash extension history within  6 months  registered in our system, you do not require a patch test if there is no change in your medical history. 
													</br></br>
													<b>5. I don’t want my lashes to be too long. Is this suitable for me?</b></br>
													A. Yes, this is suitable for you as lashes come in all lengths. Therefore, you can choose to have a fuller look but natural length. 
													</br></br>
													<b>6. Does this hurt?</b></br>
													A. No. This is a closed eye treatment, and you should feel relaxed during your treatment. 
													</br></br>
													<b>7. I wear contact lenses. Can I have this done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend removing your lenses for the duration of the treatment. 								</br></br>
													<b>8. Can I apply mascara on my false lashes?</b></br>
													A. Applying mascara can give you a dramatic look, however if you do not apply any products on your lashes, they can last longer. 								</br></br>
													<b>9. Can I get the lashes wet?</b></br>
													A. Try not to get your lashes wet. Once the lashes get wet, it will be hard to maintain its curl and shape.							</br></br>

													<b>10. I have an eye infection is this suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.							</br></br>

													<b>11. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours avoid sauna, steam, showers, or hot baths</li>
														<li>Please be gentle with your lashes</li>
														<li>Please avoid using oil-based products on the eye area</li>
														<li>Please do not rub or pull your lashes out</li>
														<li>Do not use waterproof mascara or make up remover as this will affect the bonding of the lashes</li>
														<li>Never pull off the eyelash extensions as this will pull out your natural lashes too</li>
														<li>Be gentle with the extensions and avoid tugging and getting them caught on clothes and towels</li>
													</ul>							</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#rlashes1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="rlashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/russian-lashes-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/russian-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#rlashes1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="rlashes1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#rlashes1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="rlashes1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Russian Lashes End -->

						<!-- Lash Lift and Tint 894688 -->
						<div id="tab-I-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-I-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Lash Lift & Tint</a>
							</div>
							<div id="tab-I-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/lash-lift-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Lash Lift</b></p>
										
										<p>Lash Lift is a perming method which uses silicone shields. This technique is used to lift the lash from the root, and it can lift, straighten, or curl your lashes upwards creating a volumized look to your own natural lashes. This treatment is combined with a tinting service to give you a volumized and gorgeous mascara look.</p>
										<p><b>What are the benefits of lash lift?</b></p>
											<ul>
												<li>This treatment enhances your natural lashes without the hassle of any ongoing maintenance</li>
												<li>There is no need to wear mascara for a few weeks after this treatment as it includes lash tint</li>
												<li>This treatment will make your natural lashes look fuller, thicker, and longer</li>
												<li>The curls in your lashes last around 5 weeks, depending on the health of your lashes and how you maintain them</li>
												<p>If you are a hay fever sufferer and prone to itchy or watery eyes, this treatment is beneficial for you.</p>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Lash Lift appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#llt1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="llt1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash lift treatment? (Pre-care)</b></br>
													A. <ul>
														<li>We highly recommend cleaning your lashes before arriving for your scheduled appointment</li>
														<li>Please avoid using oil-based products on and around the eye area</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>If you use contact lenses, you will be asked to remove them during your treatment and therefore, don’t forget to bring your lens case and solution with you</li>
													</ul>.
													</br></br>
													<b>2. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service. 
													</br></br>

													<b>3. How long does Lash Lift last for?</b></br>
													A. Ideally, it can last up to 6 weeks, but this can vary from person to person. No maintenance appointments are required for this treatment. We recommend repeating this process every 6 to 8 weeks to lift the new hair growth as well. With the use of harsh products and heat or if you are a swimmer, you may find your lashes are dropping or weakening prematurely.</br></br>

													<b>4. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 60 minutes.
													</br></br>
													
													<b>5. Do I need a patch test?</b></br>
													A. Yes, if you have not had Lash Lift before or with elegance salons within the last 6 months, please pop in for a patch test 48 hours prior to your appointment. If you are a regular client for Lash Lift with us, you do not require a patch test if there is no change in your medical history.
													</br></br>
													<b>5. Is this treatment safe?</b></br>
													A. Yes, lashes are lifted on to specially made eye pads before applying the products.
													</br></br>
													<b>6. Does this hurt?</b></br>
													A. This treatment is done with your eyes being closed and it is painless. Clients find this procedure to be relaxing.
													</br></br>
													<b>7. I wear contact lenses can I have this done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend removing your lenses for the duration of the treatment.								</br></br>
													<b>8. Can I apply mascara on my lashes?</b></br>
													A. Yes, you can apply mascara after 48 hours, which can give a dramatic look. However, if you do not apply any products on your lashes, they can stay longer. 								</br></br>
													<b>9. Does lash lift damage your natural lashes?</b></br>
													A. No, but we suggest following the aftercare for the treatment stated below. 							</br></br>

													<b>10. I have an eye infection is this suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.							</br></br>

													<b>11. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours avoid getting your lashes wet</li>
														<li>Do not use harsh products on your lashes</li>
														<li>For 48 hours please avoid sauna, swimming, and steam as this will weaken the effect of your treatment</li>
														<li>Do not use eyelash curlers and waterproof mascara</li>
														<li>Avoid any facial treatments for 48 hours</li>
														<li>Use gentle soap free products around the eyes and use a lash nourishing serum daily</li>
													</ul>							</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#llt1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="llt1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/lash-lift-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/lash-lift-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#llt1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="llt1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#llt1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="llt1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Lash Lift and Tint End -->
						
						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Eye treatments Accordion End ID: 317079 -->


<!-- Hands and Feet Treatments Accordion Start ID: 861350 -->
<button class="accordion-mob">Hands and Feet Treatments</button>
<div class="panel">
  <div class="section bg-grey" id="specialitySection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<a class="nav-link" data-toggle="pill" href="#tab-K-v-a" role="tab"><span>+</span>BASIC MANICURES AND PEDICURES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-K-v" role="tab"><span>+</span>GEL MANICURES AND PEDICURES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-L-v" role="tab"><span>+</span>ACRYLICS EXTENSIONS</a>
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-M-v" role="tab"><span>+</span>OVERLAYS</a> -->
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-N-v" role="tab"><span>+</span>HOLOGRAPHIC NAILS</a> -->
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-O-v" role="tab"><span>+</span>CHROME NAILS</a> -->
						<a class="nav-link" data-toggle="pill" href="#tab-P-v" role="tab"><span>+</span>GEL EXTENSION</a>
						<a class="nav-link" data-toggle="pill" href="#tab-P1-v" role="tab"><span>+</span>JAPANESE MANICURE & PEDICURE</a>
						<a class="nav-link" data-toggle="pill" href="#tab-P2-v" role="tab"><span>+</span>GEL NAIL EXTENSIONS & OVERLAYS</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">

						<!-- Basic Manicures and Pedicures Start 830771 -->
						<div id="tab-K-v-a" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-K-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Basic Manicures and Pedicures</a>
							</div>
							<div id="tab-K-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/basic-manicure-pedicure-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Basic Manicures and Pedicures</b></p>
										
										<p>Manicure refers to the curation and care of a client's hands and Pedicure refers to the curation and care of a client's feet. This includes skincare, nail care, and artificial nail enhancements that can be customized to suit a variety of preferences.</b></p>
										<p>Benefits of Basic Manicures and Pedicures</p>
										<p>
											<ul>
												<li>This treatment deep cleanses your nails, as well as ensures that they look great and healthy</li>
												<li>It removes any dead skill cells, which is an essential part of encouraging new skin cell growth</li>
												<li>It protects your nails’ health in an ongoing basis</li>
												<li>It protects your nails’ health in an ongoing basis</li>
												<li>It increases blood flow, improves joint mobility, and helps to reduce swelling and pain</li>
												<li>The treatment is an incredibly relaxing experience</li>
											</ul>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Basic Manicures and Pedicures appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#MobBMPFaq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="MobBMPFaq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is it done?</b></br>
													A. Manicure and Pedicure consist of filing and shaping the free edge of nails, pushing, and clipping (with a cuticle pusher and cuticle nippers) any non-living tissue (but limited to the cuticle and hangnails), and the application of fingernail polish. You can also upgrade it to French polish or hand massage with an additional cost.
													</br></br>
													<b>2. How long will manicure and pedicure take?</b></br>
													A. Your appointment will ideally take around 15- 20 minutes for basic manicure and 20-25 minutes for basic pedicure. 
													</br></br>

													<b>3. Does a manicure hurt?</b></br>
													A. Manicures and Pedicures shouldn't hurt or damage your nails. It is a relaxing process.</br></br>

													<b>4. What's the difference between a luxury manicure and a basic manicure?</b></br>
													A. The primary focus of a basic manicure is your nails. A luxury manicure is typically a longer service focused on stress relief and relaxation. A luxury manicure typically lasts longer than a regular manicure, and more emphasis is provided on the overall experience, rather than nail maintenance.
													</br></br>
													
													<b>5. Should I trim my nails before a  pedicure?</b></br>
													A. If you're doing a pedicure, then no. Don't trim them. When the nail comes back in, it'll be ingrown. You should trim them straight across, not rounded.
													</br></br>
													<b>6. How long does standard polish last for?</b></br>
													A. Normal nail polish usually lasts up to 5 days with proper care and is a great choice for temporary or short one-off occasions. If that’s too short of period for you then we recommend you book a gel manicure which can last up to two weeks.
													</br></br>
													<b>7. How often you should get manicures and pedicures?</b></br>
													A. <p>
														It depends on your lifestyle and preference (the faster your nails grow and the more abuse they withstand). If you prefer perfect polish and medium to long nails, you’ll need a manicure once a week. If you favour shorter nails for a more active lifestyle, you may need a professional manicure only every two weeks. Overall, we’d recommend having polish in every two weeks and the maximum should three weeks!
													</p>
													<p>Overall, we’d recommend on average every two weeks – maximum three weeks!</p>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#MobBMPGal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="MobBMPGal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/basic-manicure-pedicure-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/basic-manicure-pedicure-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#MobBMPDp" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="MobBMPDp" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#MobBMPAb" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="MobBMPAb" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Basic Manicures and Pedicures End -->

						<!-- Gel Manicure and Pedicure 298427 -->
						<div id="tab-K-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-K-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gel Manicure & Pedicure</a>
							</div>
							<div id="tab-K-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gel-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gel Nails</b></p>
										
										<p>Gel polish is a thick consistency liquid, which is applied to the natural nail and cured under UV light. Gel nails last longer than normal nail varnish leaving your nails shiny and strong for up to 14 days.</p>
										<p><b>What are the benefits of Gel Nails?</b></p>
											<ul>
												<li>Gel nails dry quicker under UV light, so there’s no need to worry about smudging them</li>
												<li>Long lasting- It can last up to 14 days without fading and is scratch free</li>
												<li>If your nails are weak or prone to splitting, gel polish gives your nails added protection</li>
												<li>Gel nails look and feel natural, as the gel is applied in thin layers</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#Gnails1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="Gnails1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are Gel Nails done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results/colour you are looking to achieve. The treatment is done by firstly prepping your nails with dry manicure technique, then two coats of gel polish is applied in thin layers for a natural finish, which cures and hardens under UV light and can last up to a good two weeks.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? Pre-care?</b></br>
													A. Your nails must be a normal length for this treatment. Extremely short nails will be difficult to do, also they will not last very long at all. Please make sure your nails are clean and free from any debris, and decide how you want your nails to look, we will try our best!
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 11+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Gel Nails last for?</b></br>
													A. Gel Nails can last up to 2 weeks. We recommend you have your gel nails removed professionally to avoid damage to the nail bed. Gel nails can be removed and reapplied every two-three weeks and change of colour.
													</br></br>
													
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 20-30 minutes. 
													</br></br>
													<b>5. What should I be doing after my treatment, are there any restrictions?Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the gel takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>Keep up with maintenance appointments to keep your nails looking their best</li>
														<li>Apply cuticle oil daily to prolong enhancements durability and flexibility and cuticle softness</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#Gnails1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="Gnails1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-nails-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-nails-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#Gnails1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="Gnails1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#Gnails1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="Gnails1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gel Manicure and Pedicure End -->

						<!-- Acrylics Extensions 677016 -->
						<div id="tab-L-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-L-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Acrylics Extensions</a>
							</div>
							<div id="tab-L-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/acrylics-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Acrylics Extensions</b></p>
										
										<p>Acrylic extensions are nail enhancements, which is set using a combination of a liquid monomer and powder polymer. Enhancements are created as an option for clients wishing to transform their natural nails instantly into beautiful strong nails.</p>
										<p><b>What are the benefits of Acrylic extensions?</b></p>
											<li>Acrylic extensions are very popular treatment at elegance salons, as they are long lasting</li>
											<li>These enhancements are great for protecting weak nails and they prevent you from biting nails (if you are a nail biter and want to grow your nails</li>
											<li>The extensions are natural looking, and you have plenty of colours and designs to choose from</li>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Acrylics Extension appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#Aextension1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="Aextension1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are Acrylic Extensions done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results you are looking to achieve. The treatment is done by combining liquid monomer and powder polymer to make an acrylic nail. This paste is applied onto your natural nail and tip which hardens over time and can last up to a good couple of weeks.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. Your nails must be at a normal length for this treatment. If you have extremely short nails, it will be difficult to do the treatment and in that case the extension will not last very long at all. Please make sure your nails are clean and free from any debris, polish, and oils. From our various options, you can select your desired nail look and we will achieve that for you.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From the age of 12+ you can receive this service with consent of your parent or guardian.</br></br>

													<b>4. How long do Acrylic Extensions last for?</b></br>
													A. Acrylic extensions can last up to 2 weeks. We recommend refills in every 2 weeks for the coverage of the regrowth and to maintain your nails and for the longevity of your enhancements (at this point you can even choose a different colour!).
													</br></br>
													
													<b>5. I don’t want my nails too long; I desire a natural length. Can I still have these done?</b></br>
													A. Yes, the therapist will carry out a consultation and the treatment will be done step by step. You will be able to decide your shape, length, colour, and design. 
													</br></br>
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 60 to 70 minutes.
													</br></br>
													<b>6. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the acrylic takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>If your break a nail or if it comes off, please do not try to glue it back on yourself this could lead to infections</li>
														<li>Book maintenance appointments to keep your nails on-point and perfect</li>
														<li>Apply cuticle oil daily to soften cuticle, prolong enhancement’s durability and flexibility</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#Aextension1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="Aextension1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/acrylics-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/acrylics-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#Aextension1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="Aextension1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#Aextension1pac" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="Aextension1pac" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Acrylics Extensions End -->


						<!-- <div id="tab-M-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-M-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Overlays</a>
							</div>
							<div id="tab-M-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/overlays-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Overlays</b></p>
										
										<p>An overlay is done with either gel or acrylic, this is applied to the natural nail but not extending the length. Overlays can be finished with gel polish or using coloured acrylic powder.</p>
										<p><b>What are the benefits of Overlays?</b></p>
											<ul>
												<li>Strengthens your nails and prevents you from biting them, if you are a nail biter</li>
												<li>Overlays can be refilled for growth coverage</li>
												<li>If your nails are weak or prone to splitting, gel polish gives your nails added protection</li>
												<li>Overlays look and feel natural</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#overlays1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="overlays1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are overlays done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results/colour you are looking to achieve. The treatment is done by firstly prepping your nails with dry manicure technique, then an overlay is applied in thin layers for a natural finish and can last up to a good two weeks.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? Pre-care?</b></br>
													A. Your nails must be a normal length for this treatment. Extremely short nails will be difficult to do, also they will not last very long at all. Please make sure your nails are clean and free from any debris, and decide how you want your nails to look, we will try our best!
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 12+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Overlays last for?</b></br>
													A. Overlays can last up to 2 weeks. We recommend refills every 2 weeks for coverage of the regrowth and to maintain your nails and for longevity of your enhancements (at this point you can even choose a different colour!).
													</br></br>
													
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 45-60 minutes. 
													</br></br>
													<b>6. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the gel takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>Keep up with maintenance appointments to keep your nails looking their best</li>
														<li>Apply cuticle oil daily to prolong overlays durability and flexibility and cuticle softness</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#overlays1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="overlays1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/overlays-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/overlays-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#overlays1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="overlays1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#overlays1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="overlays1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div id="tab-N-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-N-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Holographic Nails</a>
							</div>
							<div id="tab-N-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/holographic-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Holographic Nails</b></p>
										
										<p>Make something so sparkly that it’s holographic, and we’ll quickly be obsessed.

So, it should come as no surprise that we are totally obsessing over the holographic nails trend right now.

It’s shiny. It’s sparkly. We could stare at these nails glittering under light for hours. Seriously, getting these nails will be a serious distraction at work.

Elegance Beauty offers holographic nails in all of our salons across Scotland. Get in touch today to book your appointment, and walk away with this super on-trend style.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#overlays1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="overlays1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/holographic-nails-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/holographic-nails-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#overlays1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="overlays1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#overlays1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="overlays1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div id="tab-O-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-O-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Chrome Nails</a>
							</div>
							<div id="tab-O-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/chrome-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Chrome Nails</b></p>
										
										<p>Chrome nails are the beauty trend of 2017, with many celebs like Gigi Hadid, rocking the look on the red carpet.

Get this on-trend look at any Elegance Beauty salon.

Chrome nails offer a glamorous high-shine for any and all occasions.

The bold look can be achieved by applying a highly pigmented silver powder over gel or acrylic nails. The chrome powder sticks to the layer that gels like Shellac create after curing under the lamp.

These mirror nails last just as long as a normal Shellac manicure, so you

Book your appointment for Chrome Nails online today.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#Cnails1faq" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="Cnails1faq" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/chrome-nails-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/chrome-nails-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#Cnails1gal" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="Cnails1gal" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#Cnails1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="Cnails1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->

						<!-- Gel Extensions 291268 -->
						<div id="tab-P-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-P-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gel Extensions</a>
							</div>
							<div id="tab-P-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gel-extensions-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gel Extensions</b></p>
										
										<p>Gel Extensions are nail enhancements, involving the application of a layer of thick transparent gel which is cured using a UV lamp. Enhancements are created as an option for clients, wishing to transform their natural nails instantly into beautiful strong nails.</p>
										<p><b>What are the benefits of Gel extensions?</b></p>
											<ul>
												<li>Gel enhancements are great for protecting weak nails, which also prevents you from biting them (if you are a nail biter and want to grow your nails). These nail extensions are natural looking, and you have plenty of colours and designs to choose from.</li>
												<li>If you are allergic to chemical products, gel extensions are suitable for you as they are odourless.</li>
												<li>Gel extensions last long, up to two weeks and can last even longer if you keep up with the maintenance appointments.</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gel Extension appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#Gelxtensions1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="Gelxtensions1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are Gel Extensions done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results you are looking to achieve. The treatment is done by applying a thick transparent gel on your nail bed and tip extension and then cured under UV lamp to set properly. It lasts up to a good couple of weeks.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? Pre-care?</b></br>
													A. Your nails must be at a normal length for this treatment. If you have extremely short nails, it will be difficult to do the treatment and in that case the extension will not last very long at all. Please make sure your nails are clean and free from any debris, polish, and oils. From our various options, you can select your desired nail look and we will achieve that for you.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 12+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Gel Extensions last for?</b></br>
													A. Gel extensions can last up to 2 weeks. We recommend refills in every 2 weeks for covering the regrowth and to maintain your nails. It also provides longevity to your enhancements (at this point you can even choose a different colour!).
													</br></br>
													
													<b>5. I don’t want my nails too long; I desire a natural length. Can I still have these done?</b></br>
													A. Yes, the therapist will carry out a consultation and the treatment will be done step by step. You will be able to decide your shape, length, colour, and design. 
													</br></br>
													<b>6. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 60-80 minutes.
													</br></br>
													<b>7. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the gel takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>If your break a nail or if it comes off, please do not try to glue it back on yourself this could lead to infections</li>
														<li>Book maintenance appointments to keep your nails on-point and perfect</li>
														<li>Apply cuticle oil daily to soften cuticle, prolong enhancement’s durability and flexibility</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#Gelxtensions1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="Gelxtensions1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-extensions-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-extensions-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#Gelxtensions1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="Gelxtensions1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#Gelxtensions1pac" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="Gelxtensions1pac" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gel Extensions End -->

						<!-- Japanese Manicure and Pedicure 456852 -->
						<div id="tab-P1-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-P1-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Japanese Manicure & Pedicure</a>
							</div>
							<div id="tab-P1-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/jap-manicure-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Japanese Manicure & Pedicure</b></p>
										
										<p>Japanese Manicure and Pedicure is an ancient technique of buffing nutrients deep into the nail bed. This treatment makes your nails appear healthy and naturally shiny without the use of a polish.</p>
										<p><b>What are the benefits of Japanese Manicure?</b></p>
											<ul>
												<li>This treatment protects your nails from splitting and peeling</li>
												<li>It promotes healthy nail growth stimulation</li>
												<li>It protects and nourishes weak nails</li>
												<li>It provides a silky sheen on nails</li>
												<li>It helps in natural nail enhancement</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Japanese Manicure & Pedicure appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#Gelxtensions1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="Gelxtensions1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is a Japanese manicure done?</b></br>
													A. At first the nail bed is buffed and then a paste (complex of vitamins, beeswax, and natural silicone earth) is buffed deep into the nail bed. The whole process is repeated three times. This treatment is great for damaged-brittle nails. You can also undergo this treatment between your gel appointments to keep your nails healthy. 
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. Your nails must be at a normal length for this treatment. If you have extremely short nails, it will be difficult to do the treatment and in that case the manicure will not last very long at all. Please make sure your nails are clean and free from any debris, polish, and oils. 
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From the age of 11+ you can receive this service with the consent of your parent or guardian.</br></br>

													<b>4. How long does Japanese Manicure last for?</b></br>
													A. Japanese Manicure can last up to 2 weeks. We recommend maintaining your nails carefully for the longevity of your natural enhancement. Please repeat the process in every two weeks. 
													</br></br>
													
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 20 to 30 minutes.  
													</br></br>
													<b>6. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Please do not use your nails as tools as this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and while using chemicals</li>
														<li>Book maintenance appointments to keep your nails on-point</li>
														<li>Apply cuticle oil daily to soften cuticle, prolong enhancement’s durability and flexibility</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#Gelxtensions1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="Gelxtensions1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/jap-manicure-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/jap-manicure-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#Gelxtensions1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="Gelxtensions1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#Gelxtensions1pac" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="Gelxtensions1pac" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Japanese Manicure and Pedicure End -->

						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Hands and Feet Treatments Accordion End ID: 196059 -->


<!-- Body Treatments Accordion Start ID: 813498 -->
<button class="accordion-mob">Body Treatments</button>
<div class="panel">
  <div class="section bg-grey" id="equipmentSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<a class="nav-link" data-toggle="pill" href="#tab-Q-v" role="tab"><span>+</span>WAXING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Q1-v" role="tab"><span>+</span>BODY & INTIMATE WAXING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Q2-v" role="tab"><span>+</span>BODY & HEAD MASSAGE</a>		
						<a class="nav-link" data-toggle="pill" href="#tab-Q3-v" role="tab"><span>+</span>BASIC & ADVANCED FACIALS</a>			
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						<!-- Waxing 412710 -->
						<div id="tab-Q-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Waxing</a>
							</div>
							<div id="tab-Q-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/waxing-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Waxing</b></p>
										
										<p>Waxing is a safe method to temporarily remove unwanted hair for up to 6 weeks. Waxing produces smoother results as it removes hair from the roots resulting in slower regrowth, unlike shaving which the hair grows back within days.</p>
										<p><b>What are the benefits of Waxing?</b></p>
											Waxing slows down re-growth and you may find the hair to be finer. As there are minimal chemicals used in waxing, this rarely causes skin irritation and allergies. As you may know shaving causes the skin to be rough and stubbly, waxing removes the hair from the root providing smooth exfoliated skin and longer lasting results.
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#waxing1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is Waxing done?</b></br>
													A. Waxing is done by using two types of methods, which is warm wax and hot wax. A paper strip is applied and pressed firmly, adhering the strip to the wax it is then pulled off against the direction of the hair growth. The hot wax method is done the same way, but without the use of a paper strips, the wax is self-setting and pulled off against the direction of the hair growth.
													</br></br>
													<b>2. Is there anything I need to do before my waxing treatment? Waxing Pre-care?</b></br>
													A. We recommend you exfoliate the day before your waxing appointment to soften your skin and prevent ingrown hair. Please do not apply any moisturisers or lotions on the day of your treatment. If you are having under arm waxing, try to use a deodorant with anti-perspirant this allows the hair to be removed easily. Bath or shower on the day prior to your treatment, to open up follicles allowing easy hair removal.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.</br></br>

													<b>4. How long does my hair need to be?</b></br>
													A. For an easy and safe waxing treatment, the hair must be ¼ inches long. If the hair is too short it will be difficult to remove, also if you are shaving for a method of quick hair removal please allow 10 days for regrowth to do a waxing treatment.
													</br></br>
													
													<b>5. How long do waxing results last?</b></br>
													A. The results will vary person to person, and on your hair growth cycle. Typically, you can expect the results to last anywhere between 3-5 weeks. You will see a longer lasting effect with with repeat treatments. We recommend waxing treatments to be done every 4 weeks. 
													</br></br>
													<b>6. Will my hair re-growth be thicker with waxing treatments?</b></br>
													A. No, with consistent waxing treatments you will notice your hair re-growth to become finer and slower.
													</br></br>
													<b>7. I’m pregnant, is this suitable for me?</b></br>
													A. Yes, you can have waxing treatments done. If you are having an intimate waxing treatment, we recommend you have this done after your first trimester.
													</br></br>
													<b>8. Is waxing safe for sensitive skin?</b></br>
													A. Waxing is much gentler on the skin compared to other methods such as shaving. If you have sensitive skin, it’s very important to follow the pre/aftercare instructions provided. We also do laser hair removal as another safe option, which also lasts longer between 3-4 years with maintenance, why not speak to our technicians for further advice!
													</br></br>
													<b>9. I have the following conditions/taking medication or have had treatments done, is this suitable for me?</b></br>
													A. <ul>
														<li>Active herpes outbreak</li>
														<li>Sunburn on the area to be treated</li>
														<li>Chemical peel within the last 10 days</li>
														<li>Use of retinol on the area to be treated within last 3 days</li>
														<li>Acne medication such as Accutane or within the last 6 months</li>
														<li>Eczema, psoriasis, dermatitis or varicose veins in the area to be treated</li>
													</ul>
													Unfortunately, we will not be able to carry out your waxing treatment with the above.
													</br></br>
													<b>10. What should I be doing after my treatment, are there any restrictions? 

Waxing aftercare</b></br>
													A. We recommend you wear clean, lose fit clothing after your waxing treatment, and apply the products of which your therapist will let you know about.
													<p>For at least 24 hours after your treatment, avoid perfumed products/deodorants, direct sunlight/fake tan, chlorinated water, steam, make up, rubbing or scratching the area as your skin will be highly sensitive. Avoid exercising for 24 hours as sweating may cause the skin to be itchy. Exposure mentioned can cause irritation and inflammation. If any irritation occurs apply a cool damp compress to the area, if these symptoms persist more than 24 hours, seek medical advice.</p>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#waxing1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/waxing-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/waxing-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#waxing1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="waxing1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#waxing1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="waxing1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Waxin End -->

						<!-- Intimate Waxing 919862 -->
						<div id="tab-Q1-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q1-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Intimate Waxing</a>
							</div>
							<div id="tab-Q1-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/intimate-waxing-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Intimate Waxing</b></p>
										
										<p>Waxing is a safe method to temporarily remove unwanted hair for up to 6 weeks. Waxing produces smoother results as it removes hair from the roots resulting in slower regrowth, unlike shaving which the hair grows back within days.</p>
										<p><b>What are the benefits of Waxing?</b></p>
											Waxing slows down re-growth and you may find the hair to be finer. As there are minimal chemicals used in waxing, this rarely causes skin irritation and allergies. As you may know shaving causes the skin to be rough and stubbly, waxing removes the hair from the root providing smooth exfoliated skin and longer lasting results.
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#waxing1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is Waxing done?</b></br>
													A. Waxing is done by using two types of methods, which is warm wax and hot wax. A paper strip is applied and pressed firmly, adhering the strip to the wax it is then pulled off against the direction of the hair growth. The hot wax method is done the same way, but without the use of a paper strips, the wax is self-setting and pulled off against the direction of the hair growth.
													</br></br>
													<b>2. Is there anything I need to do before my waxing treatment? Waxing Pre-care?</b></br>
													A. We recommend you exfoliate the day before your waxing appointment to soften your skin and prevent ingrown hair. Please do not apply any moisturisers or lotions on the day of your treatment. If you are having under arm waxing, try to use a deodorant with anti-perspirant this allows the hair to be removed easily. Bath or shower on the day prior to your treatment, to open up follicles allowing easy hair removal.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.</br></br>

													<b>4. How long does my hair need to be?</b></br>
													A. For an easy and safe waxing treatment, the hair must be ¼ inches long. If the hair is too short it will be difficult to remove, also if you are shaving for a method of quick hair removal please allow 10 days for regrowth to do a waxing treatment.
													</br></br>
													
													<b>5. How long do waxing results last?</b></br>
													A. The results will vary person to person, and on your hair growth cycle. Typically, you can expect the results to last anywhere between 3-5 weeks. You will see a longer lasting effect with with repeat treatments. We recommend waxing treatments to be done every 4 weeks. 
													</br></br>
													<b>6. Will my hair re-growth be thicker with waxing treatments?</b></br>
													A. No, with consistent waxing treatments you will notice your hair re-growth to become finer and slower.
													</br></br>
													<b>7. I’m pregnant, is this suitable for me?</b></br>
													A. Yes, you can have waxing treatments done. If you are having an intimate waxing treatment, we recommend you have this done after your first trimester.
													</br></br>
													<b>8. Is waxing safe for sensitive skin?</b></br>
													A. Waxing is much gentler on the skin compared to other methods such as shaving. If you have sensitive skin, it’s very important to follow the pre/aftercare instructions provided. We also do laser hair removal as another safe option, which also lasts longer between 3-4 years with maintenance, why not speak to our technicians for further advice!
													</br></br>
													<b>9. I have the following conditions/taking medication or have had treatments done, is this suitable for me?</b></br>
													A. <ul>
														<li>Active herpes outbreak</li>
														<li>Sunburn on the area to be treated</li>
														<li>Chemical peel within the last 10 days</li>
														<li>Use of retinol on the area to be treated within last 3 days</li>
														<li>Acne medication such as Accutane or within the last 6 months</li>
														<li>Eczema, psoriasis, dermatitis or varicose veins in the area to be treated</li>
													</ul>
													Unfortunately, we will not be able to carry out your waxing treatment with the above.
													</br></br>
													<b>10. What should I be doing after my treatment, are there any restrictions? 

Waxing aftercare</b></br>
													A. We recommend you wear clean, lose fit clothing after your waxing treatment, and apply the products of which your therapist will let you know about.
													<p>For at least 24 hours after your treatment, avoid perfumed products/deodorants, direct sunlight/fake tan, chlorinated water, steam, make up, rubbing or scratching the area as your skin will be highly sensitive. Avoid exercising for 24 hours as sweating may cause the skin to be itchy. Exposure mentioned can cause irritation and inflammation. If any irritation occurs apply a cool damp compress to the area, if these symptoms persist more than 24 hours, seek medical advice.</p>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#waxing1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/intimate-waxing-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/intimate-waxing-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#waxing1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="waxing1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#waxing1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="waxing1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Intimate Waxing End -->

						<!-- Body and Head Massage 298639 -->
						<div id="tab-Q2-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q2-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Body & Head massage </a>
							</div>
							<div id="tab-Q2-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/indian-head-massage-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Indian Head Massage</b></p>
										
										<p>Indian Head Massage is an ayurvedic treatment of healing which is being popular every day. Indian head massage focuses on massaging the acupressure points along the neck, head, and shoulders. This massage is performed using special techniques to improve the hair and scalp condition as well. This treatment is stress releasing and relaxing.</p>
										<p><b>What are the benefits of Indian Head Massage?</b></p>
											<ul>
												<li>This treatment promotes hair growth by increasing oxygen in the hair follicles</li>
												<li>Indian head massage can reduce headache</li>
												<li>It can improve mental and emotional well-being</li>
												<li>It gives you relief from stress and results in a relaxing sleep</li>
												<li>It improves the hair and scalp condition</li>
												<li>It improves the blood circulation and the lymphatic flow</li>
												<li>It can free the knots of muscular tension</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Indian Head Massage appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#waxing1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is an Indian Head Massage done?</b></br>
													A. This treatment is carried out on a reclining chair, using combined techniques such as massage strokes, compression movements and acupressure points. This treatment includes kneading and circular motions.
													</br></br>
													<b>2. How does this feel?</b></br>
													A. This treatment is calm, stress releasing, and relaxing. This treatment will make you feel energised, revitalised, and will improve your concentration skill. Your body will continue to re-energise and repair itself 48 hours after the treatment.
													</br></br>

													<b>3. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. We recommend washing your hair the day before your appointment and removing any pins which will make the massage uncomfortable. Try to wear a comfortable cotton top during your appointment.</br></br>

													<b>4. How long is an Indian Head Massage session?</b></br>
													A. The session is usually 15 to 25 minutes, but this can be adapted to suit your needs. 
													</br></br>
													
													<b>5. Which pre-existing conditions may affect my treatment?</b></br>
													A. <ul>
														<li>Skin or scalp infections</li>
														<li>Recent head or neck surgery</li>
														<li>Epilepsy</li>
														<li>Heart conditions</li>
														<li>Cancer</li>
														<li>High/low blood pressure</li>
														<li>High temperature</li>
														<li>Infectious disease</li>
													</ul></br>
													<b>6. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Increase water intake after your treatment to help in the detox process of the body</li>
														<li>Have a suitable rest after the treatment</li>
														<li>Reduce the consumption of alcohol and caffeine, post-treatment</li>
													</ul>
													Get in touch with the team at your local Elegance Beauty salon for more information or book your Indian head massage appointment online today!
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#waxing1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/indian-head-massage-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/indian-head-massage-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#waxing1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="waxing1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#waxing1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="waxing1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Body and Head Massage End -->

						<!-- Basic and Advanced Facials 838443 -->
						<div id="tab-Q3-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q3-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Basic & Advanced Facials</a>
							</div>
							<div id="tab-Q3-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/facial-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Basic & Advanced Facials</b></p>
										
										<p>Facial is a deep cleansing and moisturising treatment, which uses a variety of products, addressing your skin concerns and condition. This treatment is customised for your individual suitability, for a healthy and balanced skin appearance.</p>
										<p><b>What are the benefits of Facials?</b></p>
											<ul>
												<li>Facial clears up blemishes and solves your acne problems</li>
												<li>Facial is suitable for all skin types such as sensitive, dry, oily, and normal skin</li>
												<li>It detoxifies and increases blood circulation improving the appearance of your skin</li>
												<li>It slows the process of premature ageing</li>
												<li>It deep cleanses your skin from all impurities</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Basic & Advanced Facials appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#waxing1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How often do I need a facial?</b></br>
													A. We recommend having your facial treatment once a month for best result or if you have skin concerns.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. We recommend removing facial make up prior to your scheduled appointment, but if you don’t have time to do this, that’s not a problem! 
													Keep in mind your concerns and skin type and communicate that to your therapist, so that she can recommend the right facial to you. Make a list of the products you use as part of your daily skincare regime.
													
													</br></br>

													<b>3. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 40-60 minutes.</br></br>

													<b>4. How should I feel after the treatment?</b></br>
													A. You will feel hydrated and your skin will have a healthy glow in appearance.
													</br></br>
													
													<b>5. Can I apply make up after my facial?</b></br>
													A. Yes, you can apply makeup after your facial. Just remember to remove it thoroughly before you go to bed.</br>
													<b>6. What should I do after my treatment? Are there any Restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Always cleanse, tone and moisturise your face daily</li>
														<li>Always remove make up thoroughly at the end of the day</li>
														<li>Drink plenty of water (6-8 glasses a day) to keep your skin hydrated</li>
														<li>Avoid sunbathing, sauna, heat, and hot showers for 24 hours post treatment</li>
														<li>For 24 hours do not apply any perfumed products near or on the area treated</li>
													</ul>
													Get in touch with the team at your local Elegance Beauty salon for more information or book your Indian head massage appointment online today!
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#waxing1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/facial-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/facial-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#waxing1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="waxing1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#waxing1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="waxing1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Basic and Advanced Facials -->

						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Body Treatments Accordion End ID: 234415 -->


<!-- Hair Cut and Color Treatments Accordion Start ID: 419075 -->
<button class="accordion-mob">Hair Cut and Color Treatments</button>
<div class="panel">
  <div class="section bg-grey" id="equipmentSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-a" role="tab"><span>+</span>LADIES CUT AND STYLING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-b" role="tab"><span>+</span>HAIR HIGHLIGHTS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-c" role="tab"><span>+</span>HAIR TINTING</a>		
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-d" role="tab"><span>+</span>GENTS CUT & STYLING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-e" role="tab"><span>+</span>GENTS GROOMING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-f" role="tab"><span>+</span>WET AND HOT TOWEL SHAVE</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-g" role="tab"><span>+</span>GENTS HAIR HIGHLIGHTS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-h" role="tab"><span>+</span>GIRLS BROWS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-i" role="tab"><span>+</span>GIRLS LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-j" role="tab"><span>+</span>GIRLS NAILS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-k" role="tab"><span>+</span>GIRLS HAIR</a>
						<a class="nav-link" data-toggle="pill" href="#tab-DD-v-l" role="tab"><span>+</span>PAMPER PACKAGES</a>			
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						
						<!-- Ladies Cut and Styling Start 327338 -->
						<div id="tab-DD-v-a" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Ladies Cut & Styling</a>
							</div>
							<div id="tab-DD-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/ladies-cut-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Ladies Cut & Styling</b></p>
										
										<p>All your haircuts appointment  will begin with a consultation where you and your stylist can discuss different styles and what will work best for you and your hair. Your stylist will recommend the correct wash and care products to cleanse and condition your hair at the backwash. Your hair will then be washed and conditioned. Following this, your hair will be cut using methods that suit the desired result. Your hair will then be finished with a  blow dry or alternatively other styling techniques will be carried out such as straightening, curling, diffusing, setting.</p>
										<p>
											We offer the following services:
											<ul>
												<li>Cut & Blow Dry</li>
												<li>Wash & Blow Dry </li>
												<li>Dry Cut </li>
												<li>Hair Ups</li>
												<li>GHD Hair Curls</li>
												<li>Hair Straightening</li>
												<li>Fringe Cut</li>
												<li>Hair Extensions & Removal</li>
											</ul>
										</p>
										<p><b>Benefits:</b></p>
										<p>
											<ul>
												<li>It promotes healthy hair growth</li>
												<li>It helps with hair breakage</li>
												<li>Hair trimming helps remove nasty-looking split ends</li>
												<li>The process helps remove damaged hair</li>
												<li>Makes styling much easier as rough ends are eliminated</li>
												<li>It will make your hair look much thicker and healthier right from the root to the tip</li>
											</ul>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Ladies Cut and Styling appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#MobLaHSFaq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="MobLaHSFaq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. What does a ladies cut and finish include?</b></br>
													A. Your appointment will begin with a consultation where you and your stylist will agree on the style and the finish. Includes a shampoo and head massage. Your hair will be cut with scissors or with the use of clippers depending on the desired style.
													</br></br>
													<b>2. How often to trim your hair for hair growth?</b></br>
													A. For hair growth, it is recommended to get haircuts every six to eight weeks.
													</br></br>

													<b>3. What is restyle?</b></br>
													A. It's changing the shape, layers, texture or style of the hair. It can often be going from long hair to a bob, or adding in undercuts/shaving. A restyle requires more time, and (depending on the cut).</br></br>

													<b>4. Is a wash included in a haircut?</b></br>
													A. Your hair will be washed if you have booked for wash , cut and finish.
													</br></br>
													
													<b>5. What does a dry haircut mean?</b></br>
													A. A dry haircut is exactly what it sounds like: cutting the hair while dry, as opposed to the traditional method of cutting it while it's wet. 
													</br></br>
													<b>6. Is my hair considered long or short?</b></br>
													A. If your strands reach past your shoulders, it's considered long.
													</br></br>
													<b>7. Will salon cut your hair if you have lice?</b></br>
													A. Due to health and safety reasons, hairdressers cannot proceed. They have to stop and cannot cut your hair when you have lice.
													</br></br>
													<b>8. Can I get hair colour along with cut and finish?</b></br>
													A. Yes , you can get your colour done and get your cut and finish.
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#MobLaHSGal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="MobLaHSGal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/ladies-cut-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/ladies-cut-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#MobLaHSDp" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="MobLaHSDp" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#MobLaHSAb" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="MobLaHSAb" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Ladies Cut End -->

						<!-- Hair Highlights Start 787741 -->
						<div id="tab-DD-v-b" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-b-mob" class="nav-link" data-toggle="collapse"><span>+</span>Hair Highlights</a>
							</div>
							<div id="tab-DD-v-b-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/hair-highlight-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Hair Highlights</b></p>
										
										<p>Highlighting your hair is an effective way to draw attention to its natural beauty without coloring all of it. Highlights are sections and strands of your hair that are dyed a few shades lighter than your natural hair colour; this is done to brighten the overall colour of your hair using foils. Highlights are a low-maintenance styling technique. They are the perfect choice for individuals who want to subtly adjust their hair color without having to get root touch-ups frequently.</p>
										<p>We offer following Highlights:
											<ul>
												<li><b>Full Head Highlights:</b> Full head highlights are a perfect option for those who prefer a consistent hair colour and don’t want to show off their natural shade. If you are wondering how many foils are needed to cover the whole head with highlights.</li>
												<li><b>Half Head Highlights:</b> Half head highlights cover only specific sections of your hair, for example, the front strands near your face, or the top hair layer only, while the sections underneath typically remain undyed. A lot of people decide to go with half head highlights because they like the way their natural hair colour is seen through the highlighted strands. They are inexpensive to maintain, which is one of their biggest pros.</li>
												<li><b>T Bar Highlights:</b> T-section highlights are highlights that highlight the hairs in approximately 1/4th of the head, specifically in the top and crown area.</li>
												<li><b>Balayage:</b> is a highlighting technique that can be either partial or full. In other words, the rules of partial and full highlights also apply to balayage. However, a distinctive trait of balayage is that it is hand-painted rather than dyed with foils</li>
											</ul>
										</p>
										<p><b>What are the benefits of Hair Highlights?</b></p>
										<p>
											<ul>
												<li>Versatile</li>
												<li>Adds Depth</li>
												<li>Enhances Skin Tone</li>
												<li>Disguises Gray’s</li>
												<li>Modernize Your Style</li>
											</ul>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Hair Highlights appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#MobHaHFaq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="MobHaHFaq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Which Colour is best for highlights?</b></br>
													A. It is two shades lighter than your base colour. That way, it looks more natural.
													</br></br>
													<b>2. Does highlights damage your hair?</b></br>
													A. Highlights generally require the use of bleach or lightener. As such, any time you chemically alter your hair, it will cause damage. On the bright side, highlights use such small sections of hair that it limits the damage. Plus, there are ways can minimize harm and repair your hair. Use a good conditioning treatment regularly, and give your tresses some extra nourishment from time to time. 
													</br></br>

													<b>3. How long does my hair need to be?</b></br>
													A. For an easy and safe waxing treatment, the hair must be ¼ inches long. If the hair is too short it will be difficult to remove, also if you are shaving for a method of quick hair removal please allow 10 days for regrowth to do a waxing treatment.</br></br>

													<b>4. Do I need a patch test for highlights?</b></br>
													A. Patch test is mandatory 48 hours prior your appointment if we have to use the toner for your highlights. To avoid disappointments, please book your hair consultation before booking for your service.
													</br></br>
													
													<b>5. Do I have to do anything before my treatment? Pre-care?</b></br>
													A. Do not shampoo your hair at least 1-2 days before your appointment. Do not shape your hair with heat tools such as straighteners etc.
													</br></br>
													<b>6. Can I get hair cut with my highlights?</b></br>
													A. Yes, you can get cut and blow-dry along with your highlights.
													</br></br>
													<b>7. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.
													</br></br>
													<b>8. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 2-3 hours, depending on if its full/half head highlights, duration of this treatment may vary.
													</br></br>
													<b>9. How often should I get this done to maintain?</b></br>
													A. We recommend you get the colour process done every 3-5 weeks for best results.
													</br></br>
													<b>10. After Care?</b></br>
													A. <ul>
														<li>Don't wash your hair for about 24 hours after a foil highlighting session -- this delay will give the hair colour time to be fully absorbed into each strand</li>
														<li>Get a colour care shampoo and conditioner. Regular shampoo and conditioner will strip the colour from your hair</li>
														<li>Go easy on the heat</li>
														<li>Use weekly deep conditioning at home</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#MobHaHGal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="MobHaHGal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-highlight-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-highlight-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#MobHaHDp" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="MobHaHDp" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#MobHaHAb" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="MobHaHAb" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Hair Highlights End -->

						<!-- Hair Tinting Start 329284 -->
						<div id="tab-DD-v-c" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-c-mob" class="nav-link" data-toggle="collapse"><span>+</span>Hair Tinting</a>
							</div>
							<div id="tab-DD-v-c-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/hair-tinting-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Hair Tinting</b></p>
										
										<p>A full head tint is a permanent colour which can lighten or darken hair and cover those bothersome greys. Aside from this colour service being a one-step process that coats the hair with a single shade, it's also the perfect way to render a beautiful, all over colour.</p>
										<p>
											We offer following Hair Tinting:
											<ul>
												<li><b>Full head Tint:</b> A full head of colour is where one colour is applied all over the head from roots to tips, using permanent colour to cover grey and lift virgin hair by up to 3 levels or semi-permanent to change depth, tone and add shine to your hair.</li>
												<li><b>Root Tint:</b> In order to maintain a full head tint you may need to come back for a root tint every 4-6 weeks depending on the speed of your root growth.</li>
											</ul>
										</p>
										<p><b>What are the benefits of Hair Tinting?</b></p>
										<p>
											<ul>
												<li>Add volume. Adding a subtle colour to your hair can make it look thicker than it really is</li>
												<li>Makes your hair shiny. People with dull, dry hair might want to give hair colouring a try</li>
												<li>Play up your features</li>
												<li>Enhance your haircut</li>
											</ul>
										</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Hair Tinting appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#MobHaTiFaq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="MobHaTiFaq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How long does a full head tint last?</b></br>
													A. It's expected to last about four weeks but can fade earlier if not properly cared for.
													</br></br>
													<b>2. How long should a full head tint take?</b></br>
													A. Application should take around 30 minutes and then processing time is about 45 minutes. However, if you are attempting to cover a lot of grey hairs or use a high-lift colouring product, this time may increase. 
													</br></br>

													<b>3. Do you need a patch test for hair tint?</b></br>
													A. A Patch test is mandatory 48 hours prior to this service.  if you don't have a patch test or service history in our system (registered in your name) within last six months or if you have had any change in your medical history since your most recent hair tint treatment you are required to have a patch test. If you do not meet these conditions , Salon cannot proceed with the treatments.</br></br>

													<b>4. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.
													</br></br>
													
													<b>5. How often can you use root touch up?</b></br>
													A. Every 4 to 6 weeks, and no later than 8 weeks. 
													</br></br>
													<b>6. How often should i shampoo my hair after receiving a colour service?</b></br>
													A. Leave at least 24 hours before shampooing your hair…48 hours is even better. try and limit your washing to 3 times a week, especially if you have a more intense colour like, red.
													</br></br>
													<b>7. Can I get hair tint and highlights on same day?</b></br>
													A. Yes, as long as your hair is in good condition.
													</br></br>
													<b>8. Can I lighten by hair without bleaching?</b></br>
													A. If you are trying to go from a dark shade colour to a light shade of colour, you will need to bleach the hair. To lighten the hair, you have to use some type of bleach or peroxide to remove the pigment in the hair. Once the pigment is removed, the hair cuticle lifts allowing the hair colour to be absorbed.
													</br></br>
													<b>9. After Care?</b></br>
													A. <ul>
														<li>Don’t wash your hair for two days after your colour service</li>
														<li>Avoid swimming and saunas for a couple of weeks too as both heat and chlorine cause colour fade</li>
														<li>Always use a colour-protecting shampoo and conditioner as they’re specifically formulated to reduce fade and dryness</li>
														<li>Avoid standing  directly under the shower spray unless you’re rinsing, and keep the water warm, rather than hot</li>
														<li> Always apply a sun protection barrier product. Do pay close attention to the crown as it catches the most sun</li>
														<li>Guard your hair against heat damage. Before you reach for your straightening irons, hairdryer or curling tongs spray on a heat-protective product </li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#MobHaTiGal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="MobHaTiGal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-tinting-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-tinting-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#MobHaTiDp" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="MobHaTiDp" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#MobHaTiAb" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="MobHaTiAb" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Hair Tinting End -->

						<!-- Gents Cut and Styling Start 826023 -->
						<div id="tab-DD-v-d" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-d-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Cut and Styling</a>
							</div>
							<div id="tab-DD-v-d-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gents-haircut-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Cut and Styling</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gents Cut and Styling appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gents Cut and Styling End -->

						<!-- Gents Grooming Start 880073 -->
						<div id="tab-DD-v-e" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-e-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Grooming</a>
							</div>
							<div id="tab-DD-v-e-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gents-grooming-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Grooming</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gents Grooming appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gents Grooming End -->

						<!-- Wet and Hot Towel Shave Start 761390 -->
						<div id="tab-DD-v-f" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-f-mob" class="nav-link" data-toggle="collapse"><span>+</span>Wet and Hot Towel Shave</a>
							</div>
							<div id="tab-DD-v-f-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/hot-wet-shave-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Wet and Hot Towel Shave</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Wet and Hot Towel Shave appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Wet and Hot Towel Shave End -->

						<!-- Gents Hair Highlights Start 733178 -->
						<div id="tab-DD-v-g" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-g-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Hair Highlights</a>
							</div>
							<div id="tab-DD-v-g-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gents-hair-highlight-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Hair Highlights</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gents Hair Highlights appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gents Hair Highlights End -->

						<!-- Girls Brows Start 732845 -->
						<div id="tab-DD-v-h" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-h-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Brows</a>
							</div>
							<div id="tab-DD-v-h-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-brows-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Brows</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Brows appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Brows End -->

						<!-- Girls Lashes Start 743935 -->
						<div id="tab-DD-v-i" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-i-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Lashes</a>
							</div>
							<div id="tab-DD-v-i-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Lashes</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Lashes End -->

						<!-- Girls Nails Start 451859 -->
						<div id="tab-DD-v-j" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-j-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Nails</a>
							</div>
							<div id="tab-DD-v-j-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Nails</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Nails appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Nails End -->

						<!-- Girls Hair Start 979075 -->
						<div id="tab-DD-v-k" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-k-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Hair</a>
							</div>
							<div id="tab-DD-v-k-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-hair-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Hair</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Hair appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Hair End -->

						<!-- Pamper Packages Start 113233 -->
						<div id="tab-DD-v-l" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-DD-v-l-mob" class="nav-link" data-toggle="collapse"><span>+</span>Pamper Packages</a>
							</div>
							<div id="tab-DD-v-l-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/pamper-packages-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Pamper Packages</b></p>
										
										<p>...</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Pamper Packages appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Pamper Packages End -->

						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Body Treatments Accordion End ID: 234415 -->
<!-- Hair Cut and Color Treatments Accordion End ID: 291075 -->
</div>
<!-- Accordion section end -->

	<!--section services-->
	<div class="desktop-view-1">
	<!-- Face Treatments Start ID: 145467 -->
	<div id="FaceTreSec"><a name="FaceTreSec" />
	<div class="section bg-grey mt-0" id="servicesSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						<a class="nav-link active" data-toggle="pill" href="#tab-Desk-A-v" role="tab"><span>+</span>BROWS & FACE THREADING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-C-v" role="tab"><span>+</span>BROWS & FACE WAXING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-B-v" role="tab"><span>+</span>EYEBROW & EYELASH TINTING</a>
						
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-D-v" role="tab"><span>+</span>HI DEFINITION PERFECT BROWS</a>

						<a class="nav-link" data-toggle="pill" href="#tab-Desk-D-v-a" role="tab"><span>+</span>HENNA BROWS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-D-v-b" role="tab"><span>+</span>BROW LAMINATION</a>
						
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						<!-- Treading 367718 -->
						<div id="tab-Desk-A-v" class="tab-pane active" role="tabpanel" aria-expanded="true">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-A-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Threading</a>
							</div>
							<div id="tab-A-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/eyebrow-threading-11.jpg') }}" alt="">
									</div>
									
									<div class="post-text">
										<p><b>Threading</b></p>
										
										<p>Threading is an ancient technique of Eyebrow shaping and hair removal from various
											areas of face, originated in the Middle East and South Asia. It provides peach fuzz
											free skin and helps in finer, softer, and smoother regrowth of hair. It gives a precise
											shape and smooth finish to eyebrows which lasts upto five weeks. It is also gentle on
											the skin. Threading is a great alternative for waxing and plucking as it gives a sharp
											and desirable look to your eyebrows. Though many people do not know much about
											threading, it can be a useful regime for our eyebrow care.</p>

										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion-Desk1" class="faq-accordion" data-children=".faq-item">
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#ThreadingBene"><i class="icon-right-arrow"></i><span>1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Faq Modal Start -->
										<div class="modal fade" id="ThreadingBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  									<div class="modal-dialog" role="document">
    									<div class="modal-content">
      									<div class="modal-header">
        									<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          								<span aria-hidden="true">&times;</span>
        									</button>
      									</div>
      								<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
													<p><b>Benefits of threading</b></p>
										<p>
											<li>As opposed to other hair removal methods, threading doesn’t use any chemical and therefore, very safe, and gentle for skin</li>
											<li>If you have a sensitive skin or your skin is prone to react to chemical usage
												(redness or itchiness), threading is a perfect alternative for you</li>
											<li>Threading shapes eyebrows in a precise and accurate manner as in threading even
												a single hair can be removed</li>
												<li>Threading also creates a fine brow line to give you a sharp look</li>
												<li>Threading weakens the hair follicle causing a less dense growth of hair over the
													time. Thus, it also provides your brows a long-lasting clean shape</li>
										</p>
      								</div>
      						<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      					</div>
    						</div>
  							</div>
								</div>
										<!-- Modal End -->
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#FaqModal1"><i class="icon-right-arrow"></i><span>2. FAQ</span><i class="icon-right-arrow"></i></a>

										<!-- Faq Modal Start -->
										<div class="modal fade" id="FaqModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  									<div class="modal-dialog" role="document">
    									<div class="modal-content">
      									<div class="modal-header">
        									<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          								<span aria-hidden="true">&times;</span>
        									</button>
      									</div>
      								<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
													<b>1. How is threading done?</b></br>
													A. <p>Material used: 100% sterile thread.</p>
													Process: The thread is double-twisted and glided through the skin to gently remove
													unwanted hair from the root.
													</br></br>
													<b>2. Is there anything I need to do before my threading treatment?</b></br>
													A. <li>We highly recommend that you exfoliate the area to be threaded at least three days
														before your scheduled treatment. This makes any hair growth in the area, which is
														beneath the skin, visible. It helps the therapist to provide you an accurate brow shape.</li> 
														<li>On the day of your treatment please try to avoid any make-up on the area to be
															threaded as it makes the treatment process easier and more precise</li>
														<li>To achieve the best result with threading, please avoid waxing or plucking. It allows our
															therapists to notice and shape hair growth at any stages in one go. Therefore, you can
															be relaxed until your next visit with us</li>
													</br></br>

													<b>3. How long does threading last?</b></br>
													A. Threading usually lasts up to 3 to 4 weeks, depending on your hair type, hair growth and the
													area of the face treated. Full hair growth can be noticed from 2 to 5 weeks.</br></br>

													<b>4. Is threading painful?</b></br>
													A. Threading is gentle on the skin. But as our pain tolerance varies, some of our clients felt
													slight discomfort during the process, whereas some other clients felt no discomfort at all. Be
													sure that our highly experienced therapists are skilled enough to make the process as
													painless as possible.
													</br></br>
													
													<b>5. How old should I be to have threading done?</b></br>
													A. You can have threading even if you are 11+, but in that case we will need your parent's or
													guardian's consent. 
													</br></br>
													<b>5. Which areas can be threaded besides eyebrows?</b></br>
													A. Threading can be performed anywhere in our face, from upper lip to chin or side of the face.
													</br></br>
													<b>6. I am using Retin A/Accutane. Is threading suitable for me?</b></br>
													A. Threading is your best choice for removing the hairs, as taking these medications can make
													your skin thin and sensitive. Dermatologists also approve of threading as it doesn’t break or
													pull your skin, unlike waxing. Threading is suitable for all skin types and a completely safe
													process to carry out.
													</br></br>
													<b>7. Is there any possibility of cross contamination in threading?</b></br>
													A. In threading we use a special 100% sterile thread. Once your treatment is complete, we
													dispose the used thread straight away. Therefore, you don't need to worry at all about any
													infection passed from another person.
													</br></br>
													<b>8. What should I do after my treatment? Are there any restrictions to follow? (Threading
														Aftercare)</b></br>
													A. <li>Wash your face with cold water, as it minimises the chance of post-threading rednessWash your face with cold water, as it minimises the chance of post-threading redness</li>
													<li>You can apply Aloe Vera Gel to soothe the area treated</li>
													<li>You can rub ice-cubes in the treated area for some time if you experience any irritation
														or red bumps in your skin. But be sure that these reactions are
														natural and normal and therefore nothing to be worried about. They will go with time</li>
													<li>You can rub ice-cubes in the treated area for some time if you experience any irritation
														or red bumps in your skin. But be sure that these reactions are
														natural and normal and therefore nothing to be worried about. They will go with time</li>
													</br></br>
      								</div>
      						<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      					</div>
    						</div>
  							</div>
								</div>
										<!-- Modal End -->
										<br>
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GalModal1"><i class="icon-right-arrow"></i><span>3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Faq Modal Start -->
		<div class="modal fade" id="GalModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-threading-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-threading-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
													
											<br>
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#DpModal1"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
												<!-- Faq Modal Start -->
		<div class="modal fade" id="DpModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Faq Modal End -->
												<br>
												<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AbModal1"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="AbModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
	
											<br>	
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Treading End -->

						<!-- Tinting 702375 -->
						<div id="tab-Desk-B-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-B-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Tinting</a>
							</div>
							<div id="tab-B-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/tinting-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Tinting</b></p>
										
										<p>If you are tired of filling your eyebrows every day or have fair-coloured lashes and you are
											fed up with applying mascara every day, our Tinting treatment can be your perfect solution.
											Tinting is a completely painless, semi-permanent colouring option which gives your
											eyebrows and lashes a desired, long-lasting, natural, and fuller look.</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Tinting appointment online  today!</b></p>
										<div class="mt-3 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#TintingBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="TintingBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>Benefits of Tinting</b></p>
										<p>
											<li>Tinting is a quick process to emphasize your brows or lashes</li>
											<li>Tinting offers a natural yet darker and fuller look to your brows and lashes</li>
											<li>If you are allergic to mascara or make-ups or if you lack time to fill your brows and
												lashes, Tinting can be the end of all the problems</li>
										</p>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#TintingFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

													<!-- Modal Start -->
		<div class="modal fade" id="TintingFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="tinting1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is tinting done?</b></br>
													A. <p>The process of Tinting is like that of the hair dye.</p>
													<li>Step 1: Petroleum Jelly is applied to the skin, around the area to be tinted, to prevent the dye from staining your skin</li>
													<li>Step 2: A semi-permanent dye is then custom mixed to get the desired shade for you</li>
													<li>Step 3: Then the tint is applied and left for specific/ required time to achieve the right shade for you. This process can take up to 5 to 10 minutes depending on your hair type</li>
													</br></br>
													<b>2. Is there anything I need to do before my tinting treatment? (Tinting Pre-care)</b></br>
													A. <li>Please make sure that you are aware of our Patch Test requirements</li> 
													<li>If you wear contact lenses, please bring your solution and case with you to keep your contact lenses safe, during the treatment</li>
													<li>Make sure that your lashes and brows are clean and free from any residue from any oils or tanning products. This will allow your tint to be absorbed properly, giving you a stunning look</li>
													</br></br>

													<b>3. How long does tinting last?</b></br>
													A. Tinting usually lasts up to 3 to 4 weeks which varies from person to person, depending their skincare regime, skin type and exposure to the sun which fades the pigments quickly. The tint fades away naturally and we recommend you to have a touch up every 4 weeks.
													</br></br>

													<b>4. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.
													</br></br>
													
													<b>5. What can I tint besides my eyebrows and eyelashes?</b></br>
													A. Tinting can only be done on your eyebrows and eyelashes. 
													</br></br>
													<b>5. Can I choose my preferred colour for tinting? What if I don’t want to go too dark?</b></br>
													A. Before starting your treatment, please let your therapist know what results you are looking
													for. Our therapists will offer the best advice about the shades of tint, considering your hair
													and skin tone. Ideally you should opt for the colour to be 1 or 2 shades lighter or darker than
													your natural hair colour.
													</br></br>
													<b>6. Do I need a patch test for tinting?</b></br>
													A. <p>We prioritise our clients’ health and safety over anything. Therefore, you are required to do a Patch Test, 48 hours prior to the treatment.</p>
													<p>You are exempt only if you have undergone tinting treatment in our salons before or within the last 6 months and since then there’s been no change in your medical history.</p>
													<p>The patch test involves applying a small amount of dye on the back of your ear. This process
														takes only a few seconds. You can’t skip a patch test and we must be very strict about this
														for your own safety. It helps us to see whether you are allergic to any colours or not, which
														eliminates chances of post-treatment skin reactions which can be worse at times. You can
														pop into any of your nearest elegance salons/bars at any time to have this done.</p>
													</br>
													<b>7. Is tinting suitable during pregnancy?</b></br>
													A. We recommend clients to avoid tinting during the time of pregnancy, as a reaction from the
													tint is more likely to occur during pregnancy due to hormonal changes. If any reaction
													happens, you won’t even be able to treat this with medication, due to your pregnancy.
													</br></br>
													<b>8. What should I do after my treatment? are there any restrictions? (Tinting aftercare)</b></br>
													A. 
													<b>Tinting aftercare</b>
													<ul>
														<li>Avoid eye make up for 12 hours</li>
														<li>Avoid touching or rubbing your eyes straight after the treatment</li>
														<li>For 24 hours post-treatment, please avoid sauna, swimming, and sunbeds</li>
														<li>Use oil free products around the eye area to prolong the stay of the colour</li>
														<li>If any redness or irritation occurs, apply a damp cotton wool cold compress. If symptoms
															persist more than 24 hours, please seek medical advice</li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#TintingGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="TintingGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="tinting1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/tinting-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/tinting-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<br>
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#DpTinting" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>

											<!--  Modal Start -->
		<div class="modal fade" id="DpTinting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<br>
												<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AbTinting" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="AbTinting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Tinting -->

						<!-- Eyebrow Waxing 740445 -->
						<div id="tab-Desk-C-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-C-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Eyebrow Waxing</a>
							</div>
							<div id="tab-C-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/eyebrow-waxing-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Waxing</b></p>
										
										<p>Waxing is a safe method of temporarily removing unwanted hair, which lasts up to 6 weeks. Waxing produces smoother result as it removes the hair from its roots, resulting in slower regrowth unlike shaving where the hair comes back faster.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#FaceWaxBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Modal Start -->
		<div class="modal fade" id="FaceWaxBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Waxing?</b></p>
										<p>
											<li>Waxing is a safe method of temporarily removing unwanted hair, which lasts up to 6 weeks. Waxing produces smoother result as it removes the hair from its roots, resulting in slower regrowth unlike shaving where the hair comes back faster.</li>
											<li>Waxing makes hair finer when they re-grow</li>
											<li>As minimum chemicals are used during the waxing treatment, it rarely causes skin irritation or allergies</li>
											<li>Waxing removes hair from their roots providing a smooth, exfoliated skin and longer lasting results. Therefore, it is always a better option than shaving as you may know that shaving makes the skin rough and stubbly</li>
										</p>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#FaceWaxFaq"><i class="icon-right-arrow"></i><span>2. FAQ</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="FaceWaxFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="eyebrow1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is Waxing done?</b></br>
													A. Waxing is done by using two types of methods, which is warm wax and hot wax. In warm
													waxing, a paper strip is applied and pressed firmly in the area to be waxed, adhering the
													strip to the wax. Then the strip is removed bringing out both the wax and the hair. The hot
													waxing method is performed in the same way, only without the usage of the paper strips.
													The wax is self-setting and therefore, once it’s cool and hard, the therapist removes it along
													with the hair.
													</br></br>
													<b>2. Is there anything I need to do before my waxing treatment? (Waxing Pre-care)</b></br>
													A. <li>We suggest that you exfoliate the place to be waxed, a day before your waxing appointment. It softens your skin and prevents ingrown hair</li> 
													<li>Please do not apply any moisturisers or lotions in the place to be waxed, on the day of your treatment</li>
													<li>If you are having an under-arm waxing, please try to use a deodorant with anti-perspirant which allows the hair to come out easily</li>
													<li>Try to have a bath or shower one day prior to your treatment, to open follicles allowing easy hair removal</li>
													</br></br>

													<b>3. How long should my hair need to be for waxing?</b></br>
													A. For an easy and safe waxing treatment, your hair must be ¼ inches long. If the hair is too
													short it will be difficult to remove. Also, if you have shaved recently for a quick hair removal,
													please allow at least 10 days for hair regrowth to perform the waxing treatment.</br></br>

													<b>4. How long does waxing result last?</b></br>
													A. The lasting time of the waxing treatment will vary from person to person depending on their
													hair growth. Usually, you can expect the results to last between 3 to 5 weeks. You will see a
													longer lasting effect with repeated waxing treatments. We recommend undergoing waxing
													treatments in every 4 weeks.
													</br></br>
													
													<b>5. Will my hair re-growth be thicker with waxing treatments?</b></br>
													A. No, with consistent waxing treatments you will notice your hair re-growth has become finer
													and slower. 
													</br></br>
													<b>5. I’m pregnant. Is waxing suitable for me?</b></br>
													A. Yes, you can undergo waxing treatments during pregnancy as well. But if you are to undergo
													an intimate waxing treatment, we recommend that you do this after your first trimester.
													</br></br>
													<b>6. Is waxing safe for sensitive skin?</b></br>
													A. Waxing is gentler on the skin compared to other hair removal methods like shaving. If you
													have sensitive skin, it’s very important to follow the pre/aftercare instructions provided in this page. We also provide laser hair removal as another safe option, which lasts longer
													(between 3-4 years with proper maintenance). Please speak to our highly experienced and
													knowledgeable therapists if you need any further advice regarding this issue.
													</br></br>
													<b>7. If you have the following conditions or taking following medication or had treatments
														done for following issues, unfortunately we won’t be able to do waxing for your own
														safety.</b></br>
													A. <ul>
														<li>Active herpes outbreak</li>
														<li>Sunburn on the area to be waxed</li>
														<li>Chemical peel within the last 10 days</li>
														<li>Use of retinol on the area to be treated within last 3 days</li>
														<li>Acne medication such as Accutane within the last 6 months</li>
														<li>Eczema, psoriasis, dermatitis, or varicose veins in the area to be treated</li>
													</ul>
													</br></br>
													<b>8. What should I do after my waxing treatment? are there any restriction? (Waxing
														aftercare)</b></br>
													A. <li>We recommend that you wear clean and lose-fit clothes after your waxing treatment</li>
													<li>Please apply the products recommended by your therapist</li>
													<li>For at least 24 hours after your treatment, please avoid perfumed products or
														deodorants, direct sunlight or fake tan, chlorinated water, steam and make up. It can
														cause irritation and inflammation in your skin.</li>
													<li>For at least 24 hours after your treatment, please avoid perfumed products or
														deodorants, direct sunlight or fake tan, chlorinated water, steam and make up. It can
														cause irritation and inflammation in your skin</li>
														<li>Avoid exercising for 24 hours as sweat may cause itchiness in the skin</li>
														<li>If any irritation occurs apply a cool cotton wool compress in the area. If these symptoms persist more than 24 hours, please seek medical advice.</li>
													</br></br>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<br>
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#FaceWaxGal"><i class="icon-right-arrow"></i><span>3. Gallery</span><i class="icon-right-arrow"></i></a>
										<!-- Modal Start -->
		<div class="modal fade" id="FaceWaxGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="eyebrow1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-waxing-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/eyebrow-waxing-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<br>
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#FaceWaxDp"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
												<!-- Faq Modal Start -->
		<div class="modal fade" id="FaceWaxDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

	<br>
												<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#FaceWaxAv"><i class="icon-right-arrow"></i><span>5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="FaceWaxAv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
									<br>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Eyebrow Waxing End -->

						<!-- Perfect Brows 887801 -->
						<div id="tab-Desk-D-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-D-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Perfect Brows</a>
							</div>
							<div id="tab-D-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/perfect-brows-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Perfect Brows</b></p>
										
										<p>Hi-Definition Perfect Brows is a five-step procedure exclusively customised for our beloved clients. It involves a combination of techniques including deciding the suitability of the brow shape according to your face, mapping of the brows to make them as even as possible, threading, waxing, and tinting. The whole process gives you a defined, sharp, and prominent brow, yet a natural finish.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your HI-Definition Perfect Brows appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#PerBBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Modal Start -->
		<div class="modal fade" id="PerBBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Perfect Brows?</b></p>
											<ul>
												<li>If you are looking to reshape your eyebrows, this treatment is a precise procedure to give you the desired shape.</li>
												<li>If your eyebrows are uneven or sparse and you want them to be thicker, Hi-definition Perfect Brows, is definitely for you.</li>
												<li>If you have mistakenly over plucked your brows and looking to achieve the perfect shape, this treatment can surely satisfy you.</li>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#PerBFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="PerBFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="pbrows1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is the Perfect Brows treatment done?</b></br>
													A. At the beginning of the treatment your therapist will go through a consultation with you to discuss your demands and the final outcome you are looking to achieve. Then she will custom mix the tint to a suitable colour, according to your skin tone and hair colour and then apply that gently. Then she will measure your eyebrows and map them out as evenly as possible, using our quad ratio before waxing and threading. The treatment will be finished off with applying make up for a subtle and natural finish. 
													</br></br>
													<b>2. 2.	Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. <ul>
														<li>Avoid applying any tanning product or make up on your eyebrows.</li>
														<li>Avoid sun exposure for 48 hours prior to your scheduled treatment.</li>
														<li>To achieve the best result with this treatment, you should at least grow your brows for a minimum of 3 to 4 weeks.</li>
													</ul> 
													</br></br>

													<b>3. How old should I be to have this treatment done?</b></br>
													A. From age of 16+ you can undergo this treatment.</br></br>

													<b>4. How long do Perfect Brows last for?</b></br>
													A. Perfect brows can last between 3 to 5 weeks. We recommend that you leave at least 4 weeks between your visits to allow brow regrowth and to maintain your brows.
													</br></br>

													<b>5. How often should I do this treatment? </b></br>
													A. We recommend that you should do this treatment in every 4 to 5 weeks, allowing natural eyebrow regrowth, which gives you the best result. 
													</br></br>
													
													<b>6. Do I need a patch test for this treatment?</b></br>
													A. Yes, Patch test is mandatory, if you have not had a tinting treatment with us within the last 6 months, or if there is any change in your medical history since your last visit. Patch test should be done 48 hours prior to your scheduled treatment.  
													</br></br>
													<b>7. I’m pregnant, is this suitable for me?</b></br>
													A. Yes, this treatment is suitable for you. We still advise to carry out a patch test before the treatment due to health and safety guidelines. It helps us identify any reaction that might happen due to the expected hormonal changes during your pregnancy. 
													</br></br>
													<b>8. How long does this treatment take?</b></br>
													A. Your treatment will usually take around 30 to 40 minutes. 
													</br></br>
													<b>9. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. <ul>
														<li>Avoid prolonged sun exposure, the usage of sunbeds, swimming, sauna, and steam for 48 hours</li>
														<li>Avoid exfoliating and usage of perfumed products for 3 days post-treatment</li>
														<li>No tanning products or make up should be applied on the area for 24 hours post-treatment</li>
														<li>Avoid using harsh cleansing products as this can fade the colour of the tint</li>
														<li>Do not tweeze in between appointments. Please allow regrowth for your next appointment to achieve the best result</li>
													</ul>	
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#PerBGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="PerBGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="pbrows1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/perfect-brows-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/perfect-brows-1214.png') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#PerBDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="PerBDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#PerBAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="PerBAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Perfect Brows end -->

						<!-- Henna Brows Start 435102 -->
						<div id="tab-Desk-D-v-a" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-D-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Henna Brows</a>
							</div>
							<div id="tab-Desk-D-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/henna-brows-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Henna Brows</b></p>
										
										<p>‘Henna brows’ is a popular form of eyebrow tinting, which is used to stain the skin beneath the brow hairs. The purpose of this treatment is to cast a shadow or create an illusion of depth and fullness in the area, filling in any visual sparseness. It is a non-invasive, non-permanent brow treatment that will transform the look of your brows.
										</p>
										<p>Henna is a natural dye made from a plant, known as Hina or the Henna tree. Henna has been around since the ancient Egyptian time, when it was used for many different purposes such as dyeing hair, clothes, fabrics, and as make up.
										</p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HeBroBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HeBroBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Henna Brows?</b></p>
										<ul>
											<li>Henna is a safe and natural alternative to tints and dyes</li>
											<li>It is vegan friendly and free from peroxide activators, which makes it a suitable option for anyone with a sensitive skin</li>
											<li>Henna is a natural product and therefore, it usually produces long-lasting result</li>
											<li>Henna provides better definition to your eyebrows</li>
											<li>It is more effective for staining the skin as compared to other forms of eyebrow tinting</li>
											<li>Henna Brows will appear as more matte and fluffier than regular tinting</li>
										</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HeBroFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HeBroFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is it done?</b></br>
													A. At first, henna powder and demineralised water are mixed in an accurate proportion to create a paste, which is then applied through the shape of your eyebrows and allowed to soak into the skin for 10 to 15 minutes. To give an ombré effect, less intensity is applied at the beginning of the brow, with more strength applied in the arch and the tail.
													</br></br>
													<b>2. How Long Henna Brows last?</b></br>
													A. Henna brows can stain the skin, giving you tinted hairs for up to 6 weeks and a tint on the skin can last anywhere from 2 to 10 days.  
													</br></br>

													<b>3. Does it hurt?</b></br>
													A. Not at all. Most of our clients find the service relaxing, soothing and stress releasing.</br></br>

													<b>4. Do you need a patch test for Henna Brows?</b></br>
													A. For Henna Bows, a Patch test is mandatory 48 hours prior to the service. if you don’t have a patch test or service history in our system (registered with your name) within last six months or if you have had any change in your medical history since your last Henna Brow treatment, you are required to have a patch test for your own safety. If you do not meet these conditions, salon won’t be able to proceed with the treatment.
													</br></br>
													
													<b>5. How do you do the Henna Brow patch test?</b></br>
													A. After mixing a bit of henna powder with water in proper proportion, we apply a small dot of the mixture in the back of the ear of our client, to see whether the colour is causing any reaction to our client’s skin or not. Then after 15 to 20 minutes we ask the client to rinse the colour off with water.  
													</br></br>
													<b>5. What's the difference between regular tint and Henna Brows?</b></br>
													A. Regular eyebrow tint will only colour the hairs and last anywhere from 2 to 4 weeks. Whereas Henna Brows produce longer lasting results, lasting up to 6 weeks on the hairs. it also tints the skin which gives a better shape and fuller look to your brows.
													</br></br>
													<b>6. How often should you do Henna Brows?</b></br>
													A. We recommend our clients to undergo the treatment every 3 weeks to keep their Henna Brows on point and maintain a fleek look. The more frequently you will undergo the treatment, the longer the skin stain will last.
													</br></br>
													<b>7. Can I get Henna Brows on my micro bladed eyebrows?</b></br>
													A. Yes, if your microblading is fully healed, you can undergo Henna Brows treatment. 
													</br></br>
													<b>8. How long should I wait to get Henna brows after my last eyebrow tint?</b></br>
													A. About 4 weeks after your last brow tint. We suggest this interval to avoid any reaction that the Brow Henna can cause with the chemicals from the brow tint. 
													</br></br>
													<b>9. How far in advance should I get Brow Henna done before an event?</b></br>
													A. We always suggest getting Brow Henna done at least 24 hours in advance of any event. The more time you have the better result you will see. 24 hours is just the minimum to ensure enough time is given to keep them dry before having shower or applying makeup. If you’re also having your brows shaped it gives more than enough time for any redness to go away. 
													</br></br>
													<b>10. Can I get Henna brows done for my holidays?</b></br>
													A. Brow Henna needs at least 24 hours before being exposed to water. Make sure you book your appointment in advance. Exposure to swimming & sweating in the sun may cause the Brow Henna to fade faster than normal. 
													</br></br>
													<b>11. What should I do after my Henna Brows treatment? Are there any restrictions? (After Care)</b></br>
													A. <ul>
														<li>Do not rub the area treated</li>
														<li>Avoid heat treatments for 24 hours</li>
														<li>Do not apply brow make-up for at least 24 hours after your treatment</li>
														<li>Avoid sunbathing for 24 hours, as this can cause the tint to fad</li>
														<li>Avoid swimming/saunas for at least 24 hours post-treatment</li>
														<li>Avoid perfumed products in the area treated for at least 24 hours after your treatment</li>
														<li>Please note that oil based make up remover can cause the tint to fade away quicker than usual</li>
														<li>Exposure to the sun/UV lights for long period can cause the tint to fade away quicker than usual</li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HeBroGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HeBroGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/henna-brows-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/henna-brows-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HeBroDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="HeBroDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HeBroAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="HeBroAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Henna Brows End -->

												<!-- Brow Lamination Start  497908 -->
						<div id="tab-Desk-D-v-b" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-D-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Brow Lamination</a>
							</div>
							<div id="tab-D-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/brow-lamination-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Brow Lamination</b></p>
										
										<p>Eyebrow Lamination is a relatively new treatment method that focuses on creating shiny, smooth, and gorgeous brows. It is also called as “eyebrow perm”. The high-shine or glossy effect is sought after by those who may be experiencing thinning or unruly brows. As a semi-permanent procedure, Eyebrow Lamination may be a good fit if you want to keep your brows styled in a certain way but are tired of using eyebrow gel every day. Overall, Brow Lamination makes your brows look thicker and fuller. It pulls the hairs up vertically, which may also make it look like that you are experiencing new growth.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Brow Lamination appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BroLamBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BroLamBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Brow Lamination?</b></p>
										<p>
											<ul>
												<li>It can stop thinning hair that may occur with age</li>
												<li>It can fill the gaps in your brows, created from overplucking or over waxing in the past</li>
												<li>It can be a solution to the unruly hairs that tend to go to different directions despite brushing them</li>
												<li>It can be effective if your brows lack a shape or evenness</li>
											</ul>
											Overall, brow lamination is said to make brows look thicker and fuller. Pulling the hairs up vertically may also make it look like you are experiencing new growth.
										</p>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BroLamFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BroLamFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is it done?</b></br>
													A. Brow Lamination involves straightening and lifting the brow hairs using a chemical solution, which allows the hairs to have more flexibility to move into your desired shape/ direction. Thus, it also covers any gaps or stray areas. After your natural brow hairs are straightened, a fixing solution is applied to keep the hairs straight, as well as a tint is applied if desired. The result is fuller-looking brows that stay in a place when brushed into shape. 
													</br></br>
													<b>2. How Long does brow lamination last?</b></br>
													A. The result should last until your brow hairs grow out, which is usually about six weeks.  
													</br></br>

													<b>3. Do different skin types react differently to Brow Lamination?</b></br>
													A. Brow lamination is great for all skin types! 
													If you have oily skin, you may experience a slight decrease in lasting period, due to the excess oil production in your skin.
													</br></br>

													<b>4. Does it hurt?</b></br>
													A. There is no discomfort at all associated with the procedure.
													</br></br>
													
													<b>5. Do you need a patch test for brow lamination?</b></br>
													A. A Patch test is mandatory 48 hours prior to this service. if you don't have a patch test or service history in our system (registered with your name) within last six months or if you have had any change in your medical history since your most recent Brow Lamination treatment, you are required to have a patch test for your own safety. If you do not meet these conditions, salon won’t be able to proceed with the treatment.
													</br></br>
													<b>5. Are there any reasons why brow lamination may not be advisable to me?</b></br>
													A. Contraindications for Brow Lamination includes but are not limited to: psoriasis/eczema, recent eye surgery, alopecia, recent permanent make up (must be healed by 6 weeks), sunburn, ultra-sensitive skin, blood thinners, pink eye, pregnancy/nursing; usage of retinol, Accutane, AHA, BHA etc: or if you have naturally curly brows.
													</br></br>
													<b>6. Can I get Brow lamination on my micro bladed eyebrows?</b></br>
													A. Yes, if your microblading is fully healed you can undergo Brow Lamination.
													</br></br>
													<b>7. How long does brow lamination take?</b></br>
													A. Brow lamination takes approximately 45 minutes.
													</br></br>
													<b>8. What should I do after my Brow Lamination treatments? What are the restrictions? (After Care)</b></br>
													A. 
														<ul>
															<li>Following your Brow Lamination treatment, we recommend you to repeat the treatment in every 6 to 8 weeks, depending on your desired look</li>
															<li>If you had a brow tint as part of the treatment, you could return every 2 to 4 weeks for a top up to keep your brows perfect and on-point</li>
															<p>For optimum results, please follow the below:</p>
															<li>For the first 24 hours after the treatment, brows should be treated with care. We recommend not touching the hairs to ensure that they stay in the right direction.</li>
															<li>For the first 24 hours after the treatment avoid getting your brows wet</li>
															<li>Specifically, shower, hot baths, swimming, and saunas should be avoided</li>
															<li>We recommend using a Brow Gel or Conditioning Serum between appointments to keep your brows in the best possible condition</li>
														</ul>
													
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BroLamGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BroLamGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/brow-lamination-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/brow-lamination-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="IndHMDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="IndHMAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Brow Lamination End -->

					</div>
				</div>
			</div>
			
		</div>
	</div>
	</div>
	<!-- Face Treatments End ID: 725229 -->
	<!--//section  services-->
	<!--section-->

	<!-- Eye Treatments Start ID: 355097 -->
	<div id="EyeTreSec"><a name="EyeTreSec" />
	<div class="section" id="aboutSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-E-v" role="tab"><span>+</span>STRIP LASHES</a> -->
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-F-v" role="tab"><span>+</span>PARTY LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-G-v" role="tab"><span>+</span>SEMI PERMANENT NATURAL & GLAMOUR LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-H-v" role="tab"><span>+</span>RUSSIAN NATURAL & GLAMOUR LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-I-v" role="tab"><span>+</span>LASH LIFT AND TINT</a>
						
						
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						
						<!-- <div id="tab-E-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-E-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Strip Lashes</a>
							</div>
							<div id="tab-E-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/strip-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Strip Lashes</b></p>
										
										<p>Strip lashes come in the form of a natural or a dramatic look. These lashes are attached to a thin strip that adheres to your eyelid.</p>
										<p><b>What are the benefits of Strip Lashes?</b></p>
											<p>This treatment is a quick process if you want lashes for a day’s occasion or night out. Strips lashes can be reused if they are looked after well and removed carefully. With these lashes you can achieve various looks.</p>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#stlashes1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="stlashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash treatment? Pre-care?</b></br>
													A. <ul>
														<li>If you wear waterproof mascara avoid use for 3 days prior to your appointment</li>
														<li>Make sure your eyes and lashes are clean</li>
														<li>Avoid oil-based products around the eyes</li>
														<li>Shower before your appointment as you will not be allowed to get the lashes wet for 24 hours after your treatment</li>
														<li>Remove contact lenses during the appointment-bring your case and solution with you</li>
													</ul>.
													</br></br>
													<b>2. How long do Strip Lashes last for?</b></br>
													A. Ideally, they can last 1-2 days if looked after well. You can remove them carefully and reapply them the next day. 
													</br></br>

													<b>3. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 10-15 minutes.</br></br>

													<b>4. Do I need a patch test for this treatment?</b></br>
													A. You do not require a patch test for strip lashes. However, if you are allergic to latex please let the therapist know so as they can recommend an alternative treatment for you.
													</br></br>
													
													<b>5. Will this hurt?</b></br>
													A. No, this is an eye closed treatment you will find it relaxing. 
													</br></br>
													<b>5. How will the strip lashes feel on me?</b></br>
													A. Once the glue has adhered and dried, you should not feel any discomfort at all.
													</br></br>
													<b>6. Can I apply mascara on my false lashes?</b></br>
													A. Applying mascara can give a dramatic look, however if you do not apply any products on your strip lashes you can get longer out of them.
													</br></br>
													<b>7. Can I get the lashes wet?</b></br>
													A. Try not to, Once the lashes get wet, it will be hard to maintain its curl and shape.								</br></br>
													<b>8. How can I remove these lashes?</b></br>
													A. Apply some make up remover with a cotton bud on the lash line, uses tweezers to peel them off.								</br></br>
													<b>9. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. 
														<ul>
															<li>For 48 hours after application do not swim, steam, or use sauna</li>
															<li>Do not apply waterproof mascara as the remover for this will affect the bonding of the lashes</li>
															<li>Do not use lash curlers as this could break the lash bonding</li>
															<li>Never pull lashes as this will also cause your natural lashes to fall out</li>
															<li>Be gentle with the false lashes, avoid tugging and getting them caught of clothes and towels</li>
														</ul>							</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#stlashes1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="stlashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/strip-lashes-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/strip-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#stlashes1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="stlashes1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#stlashes1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="stlashes1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->

						<!-- Party Lashes 245411 -->
						<div id="tab-Desk-F-v" class="tab-pane active" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-F-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Party Lashes</a>
							</div>
							<div id="tab-F-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/party-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Party Lashes</b></p>
										
										<p>Party lashes are made up of cluster fans with multiple lashes on each bulb. They are applied on the top of your natural lashes, providing you a fancy yet natural look.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Party Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#ParLBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Modal Start -->
		<div class="modal fade" id="ParLBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Party Lashes?</b></p>
					<ul>
						<li>Cluster lashes are a quick process resulting in instant volumized lashes</li>
						<li>Party Lashes feels natural and weightless</li>
						<li>The treatments procedure is relaxing and comfortable</li>
						<li>The treatment provides extra length to your natural lashes</li>
					</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#ParLFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="ParLFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="plashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash treatment? (Pre-care)</b></br>
													A. <ul>
														<li>Clean your lashes before your scheduled appointment</li>
														<li>Avoid using oil-based products on and around the eye area before your appointment.</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>You must remove your contact lenses during the process and therefore, don’t forget to bring your case and solution with you</li>
													</ul>
													</br></br>
													<b>2. How long do Party Lashes last for?</b></br>
													A. Ideally, they can last up to 7 to 10 days. But it depends on the condition of your natural lashes, the natural oil production in the eye area and on your post-treatment care.  
													</br></br>

													<b>3. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 20 to 30 minutes.</br></br>

													<b>4. Do I need a patch test for this treatment?</b></br>
													A. You do not require a patch test for party lashes as per the used glue guidelines. The glue used is skin sensitive.
													</br></br>
													
													<b>5. Does this hurt?</b></br>
													A. No, this is a relaxing process. You just have to close your eyes during the treatment. 
													</br></br>
													<b>5. I wear contact lenses. Can I have this treatment done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend you remove your lenses during the treatment. 
													</br></br>
													<b>6. Can I apply mascara on these lashes?</b></br>
													A. Applying mascara on the bottom lashes give a dramatic look. However, if you do not apply any products on your party lashes, they can stay longer. 
													</br></br>
													<b>7. Can I get the lashes wet?</b></br>
													A. After 24 hours you can. But if the lashes get wet, it will be hard to maintain its curl and shape. 							</br></br>
													<b>8. . I have an eye infection. Is this treatment suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.								</br></br>
													<b>9. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. 
														<ul>
															<li>For 48 hours avoid sauna, steam, showers, or hot baths</li>
															<li>Please be gentle with your lashes</li>
															<li>Avoid using oil-based products in the eye area and please do not rub or pull your lashes out</li>
															<li>Do not use waterproof mascara or make up remover as this will affect the bonding of the lashes</li>
															<li>Never pull off the eyelash extensions as this will pull out your natural lashes too</li>
															<li>Be gentle with the extensions and avoid tugging and getting them caught on clothes and towels</li>
														</ul>								
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#ParLGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="ParLGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="plashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/party-lashes-1213.jpeg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/party-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#ParLDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="ParLDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#ParLAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="ParLAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>

									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Party Lashes End -->

						<!-- Semi Permanent Lashes 654699 -->
						<div id="tab-Desk-G-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-G-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Semi Permanent Lashes</a>
							</div>
							<div id="tab-G-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/semi-per-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Semi Permanent Lashes</b></p>
										
										<p>In Semi-Permanent lashes, one extension is applied to one natural lash using a special adhesive. These lashes fall out only with your natural hair growth cycle and they can last up to 6 weeks with maintenance. Semi-Permanent Lashes are light weight, and they can result in achieving a fuller but natural enhancement or a dramatic look.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Semi Permanent Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#SemiPLBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Modal Start -->
		<div class="modal fade" id="SemiPLBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of semi-permanent lashes?</b></p>
					<ul>
						<li>Semi-Permanent Lashes transform your natural lashes into longer, thicker, and curlier lashes</li>
						<li>Semi-Permanent Lashes are appropriate for special occasions and holidays or if you want a natural enhancement</li>
						<li>If you want to avoid wearing mascara every day, this treatment is for you. It helps you to say no to clumping, and smudging mascara</li>
						<li>It can be your best choice if you would like a natural or full-on glam look. With maintenance these lashes can last several weeks</li>
					</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#SemiPLFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="SemiPLFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="splashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. <ul>
														<li>We highly recommend you to clean your lashes before arriving for your scheduled appointment</li>
														<li>Please avoid using oil-based products on and around the eye area</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>If you use contact lenses, you will be asked to remove them during your treatment and therefore, don’t forget to bring your lens case and solution with you</li>
													</ul>
													</br></br>
													<b>2. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service. 
													</br></br>

													<b>3. How long do Semi Permanent lashes last?</b></br>
													A. Ideally, they last up to 2 to 3 weeks, depending on the condition of your natural lashes, your post-treatment cleanliness/ care, and the natural oil production of the eye area. We recommend to refill lashes, every 2 weeks for long lasting results.</br></br>

													<b>4. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 45 to 60 minutes, if you opt for the glamour look this will take longer than the usual time stated above. 
													</br></br>
													
													<b>5. Do I need a patch test?</b></br>
													A. Yes , if you have not had semi permanent lashes or Russian lashes done from us before , you are required to come for a patch test 24/48 hours prior to your appointment. If you are a regular client and we have your semi permanent lash  or Russian lash extension history within  6 months  registered in our system, you do not require a patch test if there is no change in your medical history.  
													</br></br>
													<b>6. I don’t want my lashes to be too long. Is this suitable for me?</b></br>
													A. Yes, this is suitable for you as semi-permanent lashes come in all lengths. Therefore, you can choose to have a fuller but natural length. 
													</br></br>
													<b>7. I wear contact lenses. Can I have this done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend you removing your lenses for the duration of the treatment. 
													</br></br>
													<b>8. Can I apply mascara on these  lashes?</b></br>
													A. Applying mascara can give you a dramatic look, however if you do not apply any products on your lashes, they can last longer. 								</br></br>
													<b>9. Does this hurt?</b></br>
													A. No. Eyelash extensions is a closed eye treatment; you should feel relaxed during the process. 								</br></br>
													<b>10. Can I get the lashes wet?</b></br>
													A. Try not to get your lashes wet. Once the lashes get wet, it will be hard to maintain its curl and shape. 							</br></br>

													<b>11. I have an eye infection is this suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.							</br></br>

													<b>12. What should I do after my treatment? are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours avoid sauna, steam, showers, or hot baths</li>
														<li>Please be gentle with your lashes</li>
														<li>Please avoid using oil-based products on the eye area</li>
														<li>Please do not rub or pull your lashes out</li>
														<li>Do not use waterproof mascara or make up remover as this will affect the bonding of the lashes</li>
														<li>Never pull off the eyelash extensions as this will pull out your natural lashes too</li>
														<li>Be gentle with the extensions and avoid tugging and getting them caught on clothes and towels</li>
													</ul>					
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#SemiPLGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="SemiPLGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="splashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/semi-per-lashes-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/semi-per-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#SemiPLDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="SemiPLDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#SemiPLAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="SemiPLAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Semi Permanent Lashes End -->

						<!-- Russian Lashes 215745 -->
						<div id="tab-Desk-H-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-H-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Russian Lashes</a>
							</div>
							<div id="tab-H-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/russian-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Russian Lashes</b></p>
										
										<p>In Russian lashes, more than one extension is applied to one natural lash by fanning them to make them appear like more lashes are growing from one stem. These lashes fall out with our natural hair growth cycle and they can last up to 6 weeks with proper maintenance. Russian lashes can be done to achieve a fuller but natural enhancement or a dramatic look.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Russian Lashes appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#RusLBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Modal Start -->
		<div class="modal fade" id="RusLBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Russian lashes?</b></p>
					<ul>
						<li>Russian Lashes give your lashes a more defined and fuller look</li>
						<li>Russian Lashes are extremely lightweight and can’t be felt when applied</li>
						<li>Russian Lashes are apt for special occasions and holidays or if you want a natural enhancement</li>
						<li>If you want to avoid wearing mascara every day, this treatment is for you. It helps you to say no to clumping, and smudging mascara</li>
						<li>You can opt either for a natural or for a full-on glam look</li>
						<li>With proper maintenance these lashes can last several weeks</li>
					</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#RusLFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="RusLFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="rlashes1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash treatment? (Pre-care)</b></br>
													A. <ul>
														<li>We highly recommend cleaning your lashes before arriving for your scheduled appointment</li>
														<li>Please avoid using oil-based products on and around the eye area</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>If you use contact lenses, you will be asked to remove them during your treatment and therefore, don’t forget to bring your lens case and solution with you</li>
													</ul>.
													</br></br>
													<b>2. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service. 
													</br></br>

													<b>3. How long do Russian Lashes last?</b></br>
													A. Ideally, they can last up to 4 to 5 weeks, depending on the condition of your natural lashes, you post treatment care or cleanliness and the natural oil production of the eye area. We recommend to refill lash in every 2 weeks for long lasting results. You can also individually replace the lashes which have fallen out.</br></br>

													<b>4. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 1.5 hours. if you opt for the glamour look this will take longer than the usual time stated above. 
													</br></br>
													
													<b>5. Do I need a patch test?</b></br>
													A. Yes , if you have not had semi permanent lashes or Russian lashes done from us before , you are required to come for a patch test 24/48 hours prior to your appointment. If you are a regular client and we have your semi permanent lash  or Russian lash extension history within  6 months  registered in our system, you do not require a patch test if there is no change in your medical history.
													</br></br>
													<b>5. I don’t want my lashes to be too long. Is this suitable for me?</b></br>
													A. Yes, this is suitable for you as lashes come in all lengths. Therefore, you can choose to have a fuller look but natural length. 
													</br></br>
													<b>6. Does this hurt?</b></br>
													A. No. This is a closed eye treatment, and you should feel relaxed during your treatment. 
													</br></br>
													<b>7. I wear contact lenses. Can I have this done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend removing your lenses for the duration of the treatment. 								</br></br>
													<b>8. Can I apply mascara on my false lashes?</b></br>
													A. Applying mascara can give you a dramatic look, however if you do not apply any products on your lashes, they can last longer. 								</br></br>
													<b>9. Can I get the lashes wet?</b></br>
													A. Try not to get your lashes wet. Once the lashes get wet, it will be hard to maintain its curl and shape.							</br></br>

													<b>10. I have an eye infection is this suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.							</br></br>

													<b>11. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours avoid sauna, steam, showers, or hot baths</li>
														<li>Please be gentle with your lashes</li>
														<li>Please avoid using oil-based products on the eye area</li>
														<li>Please do not rub or pull your lashes out</li>
														<li>Do not use waterproof mascara or make up remover as this will affect the bonding of the lashes</li>
														<li>Never pull off the eyelash extensions as this will pull out your natural lashes too</li>
														<li>Be gentle with the extensions and avoid tugging and getting them caught on clothes and towels</li>
													</ul>						
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#RusLGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="RusLGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="rlashes1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/russian-lashes-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/russian-lashes-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#RusLDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="RusLDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#RusLAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="RusLAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Russian Lashes End -->

						<!-- Lash and Lift Tint 548286 -->
						<div id="tab-Desk-I-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-I-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Lash Lift & Tint</a>
							</div>
							<div id="tab-I-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/lash-lift-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Lash Lift</b></p>
										
										<p>Lash Lift is a perming method which uses silicone shields. This technique is used to lift the lash from the root, and it can lift, straighten, or curl your lashes upwards creating a volumized look to your own natural lashes. This treatment is combined with a tinting service to give you a volumized and gorgeous mascara look.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Lash Lift appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LashLBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

										<!-- Modal Start -->
		<div class="modal fade" id="LashLBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of lash lift?</b></p>
											<ul>
												<li>This treatment enhances your natural lashes without the hassle of any ongoing maintenance</li>
												<li>There is no need to wear mascara for a few weeks after this treatment as it includes lash tint</li>
												<li>This treatment will make your natural lashes look fuller, thicker, and longer</li>
												<li>The curls in your lashes last around 5 weeks, depending on the health of your lashes and how you maintain them</li>
												<p>If you are a hay fever sufferer and prone to itchy or watery eyes, this treatment is beneficial for you.</p>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LashLFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

											<!-- Modal Start -->
		<div class="modal fade" id="LashLFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="llt1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Is there anything I need to do before my lash lift treatment? (Pre-care)</b></br>
													A. <ul>
														<li>We highly recommend cleaning your lashes before arriving for your scheduled appointment</li>
														<li>Please avoid using oil-based products on and around the eye area</li>
														<li>Get a shower before your appointment as you will not be suggested to get the lashes wet at all for 24 hours after your treatment</li>
														<li>If you use contact lenses, you will be asked to remove them during your treatment and therefore, don’t forget to bring your lens case and solution with you</li>
													</ul>
													<b>2. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service. 
													</br></br>

													<b>3. How long does Lash Lift last for?</b></br>
													A. Ideally, it can last up to 6 weeks, but this can vary from person to person. No maintenance appointments are required for this treatment. We recommend repeating this process every 6 to 8 weeks to lift the new hair growth as well. With the use of harsh products and heat or if you are a swimmer, you may find your lashes are dropping or weakening prematurely.</br></br>

													<b>4. How long will this treatment take?</b></br>
													A. Your appointment will take approximately 60 minutes.
													</br></br>
													
													<b>5. Do I need a patch test?</b></br>
													A. Yes, if you have not had Lash Lift before or with elegance salons within the last 6 months, please pop in for a patch test 48 hours prior to your appointment. If you are a regular client for Lash Lift with us, you do not require a patch test if there is no change in your medical history.  
													</br></br>
													<b>5. Is this treatment safe?</b></br>
													A. Yes, lashes are lifted on to specially made eye pads before applying the products. 
													</br></br>
													<b>6. Does this hurt?</b></br>
													A. This treatment is done with your eyes being closed and it is painless. Clients find this procedure to be relaxing. 
													</br></br>
													<b>7. I wear contact lenses can I have this done?</b></br>
													A. Yes, this is suitable for you. Although we do recommend removing your lenses for the duration of the treatment. 								</br></br>
													<b>8. Can I apply mascara on my lashes?</b></br>
													A. Yes, you can apply mascara after 48 hours, which can give a dramatic look. However, if you do not apply any products on your lashes, they can stay longer. 								</br></br>
													<b>9. Does lash lift damage your natural lashes?</b></br>
													A. No, but we suggest following the aftercare for the treatment stated below. 							</br></br>

													<b>10. I have an eye infection is this suitable for me?</b></br>
													A. If you are suffering from any eye infection, you shouldn’t undergo this treatment. If you have a stye or other infection, inside or at the edge of your eyelid, they can become inflamed and painful due to this treatment. You should inform your therapist beforehand about any such concern and seek medical advice before undergoing any treatment.							</br></br>

													<b>11. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>For 48 hours avoid getting your lashes wet</li>
														<li>Do not use harsh products on your lashes</li>
														<li>•	For 48 hours please avoid sauna, swimming, and steam as this will weaken the effect of your treatment</li>
														<li>Do not use eyelash curlers and waterproof mascara</li>
														<li>Avoid any facial treatments for 48 hours</li>
														<li>Use gentle soap free products around the eyes and use a lash nourishing serum daily</li>
													</ul>							
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LashLGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>
											<!-- Modal Start -->
		<div class="modal fade" id="LashLGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="llt1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/lash-lift-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/lash-lift-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LashLDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="LashLDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LashLAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="LashLAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Lash and Lift End -->

						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Eye Treatments End ID: 507611 -->
	<!--//section-->
	<!--section speciality-->
	<!-- Hands and Feet Treatments Start ID: 365794 -->
	<div id="HaFeTreSec"><a name="HaFeTreSec" />
	<div class="section bg-grey" id="specialitySection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-K-v-a" role="tab"><span>+</span>BASIC MANICURES AND PEDICURES</a>

						<a class="nav-link" data-toggle="pill" href="#tab-Desk-K-v" role="tab"><span>+</span>GEL MANICURES AND PEDICURES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-L-v" role="tab"><span>+</span>ACRYLICS EXTENSIONS</a>
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-M-v" role="tab"><span>+</span>OVERLAYS</a> -->
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-N-v" role="tab"><span>+</span>HOLOGRAPHIC NAILS</a> -->
						<!-- <a class="nav-link" data-toggle="pill" href="#tab-O-v" role="tab"><span>+</span>CHROME NAILS</a> -->
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-P-v" role="tab"><span>+</span>GEL EXTENSION</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-P1-v" role="tab"><span>+</span>JAPANESE MANICURE & PEDICURE</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">

												<!-- Basic Manicures and Pedicures Start 960436 -->
						<div id="tab-Desk-K-v-a" class="tab-pane active" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-K-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Basic Manicures and Pedicures</a>
							</div>
							<div id="tab-Desk-K-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/basic-manicure-pedicure-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Basic Manicures and Pedicures</b></p>
										
										<p>A manicure refers to the curation and care of a client's hands and a pedicure refers to the curation and care of a client's feet. This includes skincare, nail care, and artificial nail enhancements that can be customized to a variety of preferences.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Basic Manicures and Pedicures appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaMPBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BaMPBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Manicures and Pedicures?</b></p>
										<p>
											<ul>
												<li>Deep clean for your nails, as well as ensuring that they look great</li>
												<li>Removal of dead skill cells, which is an essential part of encouraging new skin cell growth</li>
												<li>Protect your nail health on an ongoing basis</li>
												<li>Increase blood flow , improve joint mobility and help to reduce swelling and pain</li>
												<li>Incredibly relaxing experience</li>
											</ul>
										</p>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaMPFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BaMPFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is it done?</b></br>
													A. manicure and pedicure consist of filing and shaping the free edge of nails, pushing and clipping (with a cuticle pusher and cuticle nippers) any non-living tissue (but limited to the cuticle and hangnails),  and the application of fingernail polish. You can also upgrade to French polish or hand massage with an additional cost.
													</br></br>
													<b>2. How long will manicure and pedicure take?</b></br>
													A. Your appointment will ideally take around 15- 20 minutes for basic manicure and 20-25 minutes for basic pedicure. 
													</br></br>

													<b>3. Does a manicure hurt?</b></br>
													A. Manicures and Pedicures shouldn't hurt or damage your nails.</br></br>

													<b>4. What's the difference between a luxury manicure and a basic manicure?</b></br>
													A. The number one focus of a basic manicure is your nails. A luxury manicure is typically a longer service focused on stress relief and relaxation. A luxury manicure typically lasts longer than a regular manicure, and more emphasis is placed on the overall experience, rather than hand maintenance.
													</br></br>
													
													<b>5. Should I trim my nails before a  pedicure?</b></br>
													A. If you're doing a pedicure, then no, don't trim them. When the nail comes back in, it'll be ingrown. You should trim them straight across, not rounded.
													</br></br>
													<b>6. How long does standard polish last for?</b></br>
													A. Normal nail polish usually lasts up to 5 days with proper care and is a great choice for temporary or short one-off occasions. If that’s too short of period for you then we recommend you book a gel manicure which can last up to two weeks.
													</br></br>
													<b>7. How often you should get manicures and pedicures?</b></br>
													A. <p>
														It depends on your lifestyle and preference. The faster your nails grow and the more abuse they withstand and if you prefer perfect polish and medium to long nails, you’ll need a manicure once a week. If you favour shorter nails for a more active lifestyle, you may need a professional manicure only every two weeks.
													</p>
													<p>Overall, we’d recommend on average every two weeks – maximum three weeks!</p>
													
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaMPGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BaMPGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/basic-manicure-pedicure-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/basic-manicure-pedicure-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaMPDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="BaMPDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaMPAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="BaMPAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Basic Manicures and Pedicures End -->

						<!-- Gel Manicure and Pedicure 216260 -->
						<div id="tab-Desk-K-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-K-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gel Manicure & Pedicure</a>
							</div>
							<div id="tab-K-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gel-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gel Nails</b></p>
										
										<p>Gel polish is a thick consistency liquid, which is applied to the natural nail and cured under UV light. Gel nails last longer than normal nail varnish leaving your nails shiny and strong for up to 14 days.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelNBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>
										<!-- Modal Start -->
		<div class="modal fade" id="GelNBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Gel Nails?</b></p>
											<ul>
												<li>Gel nails dry quicker under UV light, so there’s no need to worry about smudging them</li>
												<li>Long lasting- It can last up to 14 days without fading and is scratch free</li>
												<li>If your nails are weak or prone to splitting, gel polish gives your nails added protection</li>
												<li>Gel nails look and feel natural, as the gel is applied in thin layers</li>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelNFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>
											<!-- Modal Start -->
		<div class="modal fade" id="GelNFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Gnails1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are Gel Nails done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results/colour you are looking to achieve. The treatment is done by firstly prepping your nails with dry manicure technique, then two coats of gel polish is applied in thin layers for a natural finish, which cures and hardens under UV light and can last up to a good two weeks.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? Pre-care?</b></br>
													A. Your nails must be a normal length for this treatment. Extremely short nails will be difficult to do, also they will not last very long at all. Please make sure your nails are clean and free from any debris, and decide how you want your nails to look, we will try our best!
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 11+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Gel Nails last for?</b></br>
													A. Gel Nails can last up to 2 weeks. We recommend you have your gel nails removed professionally to avoid damage to the nail bed. Gel nails can be removed and reapplied every two-three weeks and change of colour.
													</br></br>
													
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 20-30 minutes. 
													</br></br>
													<b>5. What should I be doing after my treatment, are there any restrictions?Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the gel takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>Keep up with maintenance appointments to keep your nails looking their best</li>
														<li>Apply cuticle oil daily to prolong enhancements durability and flexibility and cuticle softness</li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelNGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>
											<!-- Modal Start -->
		<div class="modal fade" id="GelNGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Gnails1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-nails-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-nails-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelNDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="GelNDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelNAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="GelNAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gel Manicure and Pedicure End -->

						<!-- Acrylics Extensions 382462 -->
						<div id="tab-Desk-L-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-L-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Acrylics Extensions</a>
							</div>
							<div id="tab-L-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/acrylics-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Acrylics Extensions</b></p>
										
										<p>Acrylic extensions are nail enhancements, which is set using a combination of a liquid monomer and powder polymer. Enhancements are created as an option for clients wishing to transform their natural nails instantly into beautiful strong nails.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Acrylics Extension appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AcrEBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>
										<!-- Modal Start -->
		<div class="modal fade" id="AcrEBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Acrylic extensions?</b></p>
						<li>Acrylic extensions are very popular treatment at elegance salons, as they are long lasting</li>
						<li>These enhancements are great for protecting weak nails and they prevent you from biting nails (if you are a nail biter and want to grow your nails)</li>
						<li>The extensions are natural looking, and you have plenty of colours and designs to choose from</li>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AcrEFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>
											<!-- Modal Start -->
		<div class="modal fade" id="AcrEFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Aextension1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are Acrylic Extensions done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results you are looking to achieve. The treatment is done by combining liquid monomer and powder polymer to make an acrylic nail. This paste is applied onto your natural nail and tip which hardens over time and can last up to a good couple of weeks. 
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. Your nails must be at a normal length for this treatment. If you have extremely short nails, it will be difficult to do the treatment and in that case the extension will not last very long at all. Please make sure your nails are clean and free from any debris, polish, and oils. From our various options, you can select your desired nail look and we will achieve that for you.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 12+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Acrylic Extensions last for?</b></br>
													A. Acrylic extensions can last up to 2 weeks. We recommend refills every 2 weeks for coverage of the regrowth and to maintain your nails and for longevity of your enhancements (at this point you can even choose a different colour!).
													</br></br>
													
													<b>5. I don’t want my nails too long; I desire a natural length. Can I still have these done?</b></br>
													A. Yes, the therapist will carry out a consultation and the treatment will be done step by step. You will be in charge of your shape, length, colour and design. 
													</br></br>
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 60-70 minutes.
													</br></br>
													<b>6. What should I be doing after my treatment, are there any restrictions?Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the acrylic takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>If your break a nail or if it comes off, please do not try to glue it back on yourself this could lead to infections</li>
														<li>Book maintenance appointments to keep your nails on-point and perfect</li>
														<li>•	Apply cuticle oil daily to soften cuticle, prolong enhancement’s durability and flexibility</li>
													</ul>
												</div>
											</div>      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AcrEGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>
											<!-- Modal Start -->
		<div class="modal fade" id="AcrEGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Aextension1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/acrylics-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/acrylics-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AcrEDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="AcrEDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#AcrEAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="AcrEAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Acrylics Extensions End -->

						<!-- <div id="tab-M-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-M-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Overlays</a>
							</div>
							<div id="tab-M-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/overlays-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Overlays</b></p>
										
										<p>An overlay is done with either gel or acrylic, this is applied to the natural nail but not extending the length. Overlays can be finished with gel polish or using coloured acrylic powder.</p>
										<p><b>What are the benefits of Overlays?</b></p>
											<ul>
												<li>Strengthens your nails and prevents you from biting them, if you are a nail biter</li>
												<li>Overlays can be refilled for growth coverage</li>
												<li>If your nails are weak or prone to splitting, gel polish gives your nails added protection</li>
												<li>Overlays look and feel natural</li>
											</ul>
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#overlays1faq" aria-expanded="false" class="collapsed"><span>1.</span>FAQ</a>
											<div id="overlays1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are overlays done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results/colour you are looking to achieve. The treatment is done by firstly prepping your nails with dry manicure technique, then an overlay is applied in thin layers for a natural finish and can last up to a good two weeks.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? Pre-care?</b></br>
													A. Your nails must be a normal length for this treatment. Extremely short nails will be difficult to do, also they will not last very long at all. Please make sure your nails are clean and free from any debris, and decide how you want your nails to look, we will try our best!
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 12+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Overlays last for?</b></br>
													A. Overlays can last up to 2 weeks. We recommend refills every 2 weeks for coverage of the regrowth and to maintain your nails and for longevity of your enhancements (at this point you can even choose a different colour!).
													</br></br>
													
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 45-60 minutes. 
													</br></br>
													<b>6. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the gel takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>Keep up with maintenance appointments to keep your nails looking their best</li>
														<li>Apply cuticle oil daily to prolong overlays durability and flexibility and cuticle softness</li>
													</ul>
													</br></br>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#overlays1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="overlays1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/overlays-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/overlays-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#overlays1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="overlays1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#overlays1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="overlays1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div id="tab-N-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-N-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Holographic Nails</a>
							</div>
							<div id="tab-N-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/holographic-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Holographic Nails</b></p>
										
										<p>Make something so sparkly that it’s holographic, and we’ll quickly be obsessed.

So, it should come as no surprise that we are totally obsessing over the holographic nails trend right now.

It’s shiny. It’s sparkly. We could stare at these nails glittering under light for hours. Seriously, getting these nails will be a serious distraction at work.

Elegance Beauty offers holographic nails in all of our salons across Scotland. Get in touch today to book your appointment, and walk away with this super on-trend style.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#overlays1gal" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="overlays1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/holographic-nails-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/holographic-nails-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#overlays1pac" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="overlays1pac" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#overlays1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="overlays1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div id="tab-O-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-O-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Chrome Nails</a>
							</div>
							<div id="tab-O-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/chrome-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Chrome Nails</b></p>
										
										<p>Chrome nails are the beauty trend of 2017, with many celebs like Gigi Hadid, rocking the look on the red carpet.

Get this on-trend look at any Elegance Beauty salon.

Chrome nails offer a glamorous high-shine for any and all occasions.

The bold look can be achieved by applying a highly pigmented silver powder over gel or acrylic nails. The chrome powder sticks to the layer that gels like Shellac create after curing under the lamp.

These mirror nails last just as long as a normal Shellac manicure, so you

Book your appointment for Chrome Nails online today.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion3" href="#Cnails1faq" aria-expanded="false" class="collapsed"><span>2.</span>Gallery</a>
											<div id="Cnails1faq" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/chrome-nails-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/chrome-nails-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion4" href="#Cnails1gal" aria-expanded="false"><span>3.</span>Discounted Packages</a>
											<div id="Cnails1gal" class="collapse faq-item-content" role="tabpanel">
												<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion5" href="#Cnails1bra" aria-expanded="false"><span>4.</span>Available Branches</a>
											<div id="Cnails1bra" class="collapse faq-item-content" role="tabpanel">
												
												<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
												
											</div>
										</div>
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- Gel Extensions 987017 -->
						<div id="tab-Desk-P-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-P-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gel Extensions</a>
							</div>
							<div id="tab-P-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gel-extensions-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gel Extensions</b></p>
										
										<p>Gel Extensions are nail enhancements, involving the application of a layer of thick transparent gel which is cured using a UV lamp. Enhancements are created as an option for clients, wishing to transform their natural nails instantly into beautiful strong nails.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gel Extension appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelEBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>
										<!-- Modal Start -->
		<div class="modal fade" id="GelEBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Gel extensions?</b></p>
											<ul>
												<li>Gel enhancements are great for protecting weak nails, which also prevents you from biting them (if you are a nail biter and want to grow your nails). These nail extensions are natural looking, and you have plenty of colours and designs to choose from.</li>
												<li>If you are allergic to chemical products, gel extensions are suitable for you as they are odourless.</li>
												<li>•	Gel extensions last long, up to two weeks and can last even longer if you keep up with the maintenance appointments.</li>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelEFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>
											<!-- Modal Start -->
		<div class="modal fade" id="GelEFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Gelxtensions1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How are Gel Extensions done?</b></br>
													A. Your therapist will firstly carry out a consultation with you to discuss your needs and the end results you are looking to achieve. The treatment is done by applying a thick transparent gel on your nail bed and tip extension and then cured under UV lamp to set properly. It lasts up to a good couple of weeks. 
													</br></br>
													<b>2. Is there anything I need to do before my treatment? Pre-care?</b></br>
													A. Your nails must be at a normal length for this treatment. If you have extremely short nails, it will be difficult to do the treatment and in that case the extension will not last very long at all. Please make sure your nails are clean and free from any debris, polish, and oils. From our various options, you can select your desired nail look and we will achieve that for you.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 12+ you can receive this service with consent of parent or guardian.</br></br>

													<b>4. How long do Gel Extensions last for?</b></br>
													A. Gel extensions can last up to 2 weeks. We recommend refills in every 2 weeks for covering the regrowth and to maintain your nails. It also provides longevity to your enhancements (at this point you can even choose a different colour!). 
													</br></br>
													
													<b>5. I don’t want my nails too long; I desire a natural length. Can I still have these done?</b></br>
													A. Yes, the therapist will carry out a consultation and the treatment will be done step by step. You will be able to decide your shape, length, colour, and design. 
													</br></br>
													<b>6. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 60-80 minutes.
													</br></br>
													<b>7. What should I be doing after my treatment, are there any restrictions? Aftercare</b></br>
													A. <ul>
														<li>For 48 hours, please avoid swimming, sauna, steam as the gel takes time to bond and harden further to adhere to your nail bed</li>
														<li>Do not use your nails as tools this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and use of chemicals</li>
														<li>If your break a nail or if it comes off, please do not try to glue it back on yourself this could lead to infections</li>
														<li>Book maintenance appointments to keep your nails on-point and perfect</li>
														<li>Apply cuticle oil daily to soften cuticle, prolong enhancement’s durability and flexibility</li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelEGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="GelEGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Title</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Gelxtensions1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-extensions-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/gel-extensions-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelEDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="GelEDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#GelEAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="GelEAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gel Extensions End -->

						<!-- Japanese Manicure and Pedicure 859704 -->
						<div id="tab-Desk-P1-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-P1-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Japanese Manicure & Pedicure</a>
							</div>
							<div id="tab-P1-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/jap-manicure-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Japanese Manicure & Pedicure</b></p>
										
										<p>Japanese Manicure and Pedicure is an ancient technique of buffing nutrients deep into the nail bed. This treatment makes your nails appear healthy and naturally shiny without the use of a polish.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Japanese Manicure & Pedicure appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#JapaMBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="JapaMBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Japanese Manicure?</b></p>
											<ul>
												<li>This treatment protects your nails from splitting and peeling</li>
												<li>It promotes healthy nail growth stimulation</li>
												<li>It protects and nourishes weak nails</li>
												<li>It provides a silky sheen on nails</li>
												<li>It helps in natural nail enhancement</li>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#JapaMFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="JapaMFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Gelxtensions1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is a Japanese Manicure done?</b></br>
													A. At first the nail bed is buffed and then a paste (complex of vitamins, beeswax, and natural silicone earth) is buffed deep into the nail bed. The whole process is repeated three times. This treatment is great for damaged-brittle nails. You can also undergo this treatment between your gel appointments to keep your nails healthy. 
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. Your nails must be at a normal length for this treatment. If you have extremely short nails, it will be difficult to do the treatment and in that case the manicure will not last very long at all. Please make sure your nails are clean and free from any debris, polish, and oils. 
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From the age of 11+ you can receive this service with the consent of your parent or guardian.</br></br>

													<b>4. How long does Japanese Manicure last for?</b></br>
													A. Japanese Manicure can last up to 2 weeks. We recommend maintaining your nails carefully for the longevity of your natural enhancement. Please repeat the process in every two weeks.
													</br></br>
													
													<b>5. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 20-30 minutes. 
													</br></br>
													<b>6. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Please do not use your nails as tools as this will damage and weaken them</li>
														<li>Avoid using nail polish remover containing acetone</li>
														<li>Wear gloves when performing household chores, gardening and while using chemicals</li>
														<li>Book maintenance appointments to keep your nails on-point</li>
														<li>Apply cuticle oil daily to soften cuticle, prolong enhancement’s durability and flexibility</li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
											<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#JapaMGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="JapaMGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Title</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="Gelxtensions1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/jap-manicure-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/jap-manicure-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#JapaMDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="JapaMDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#JapaMAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="JapaMAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Japanese Manicure and Pedicure End -->

						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Hands and Feet Treatments End ID: 533108 -->
	<!--//section speciality-->
	<!--section equipment-->

	<!-- Body Treatments Start ID: 377546 -->
	<div id="BodyTreSec"><a name="BodyTreSec" />
	<div class="section" id="equipmentSection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-Q-v" role="tab"><span>+</span>WAXING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-Q1-v" role="tab"><span>+</span>BODY & INTIMATE WAXING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-Q2-v" role="tab"><span>+</span>BODY & HEAD MASSAGE</a>		
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-Q3-v" role="tab"><span>+</span>BASIC & ADVANCED FACIALS</a>			
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">

						<!-- Waxing 702691 -->
						<div id="tab-Desk-Q-v" class="tab-pane active" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Waxing</a>
							</div>
							<div id="tab-Q-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/waxing-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Waxing</b></p>
										
										<p>Waxing is a safe method to temporarily remove unwanted hair for up to 6 weeks. Waxing produces smoother results as it removes hair from the roots resulting in slower regrowth, unlike shaving which the hair grows back within days.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#WaxBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="WaxBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Waxing?</b></p>
											Waxing slows down re-growth and you may find the hair to be finer. As there are minimal chemicals used in waxing, this rarely causes skin irritation and allergies. As you may know shaving causes the skin to be rough and stubbly, waxing removes the hair from the root providing smooth exfoliated skin and longer lasting results.
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

									<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#WaxFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="WaxFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Title</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is Waxing done?</b></br>
													A. Waxing is done by using two types of methods, which is warm wax and hot wax. A paper strip is applied and pressed firmly, adhering the strip to the wax it is then pulled off against the direction of the hair growth. The hot wax method is done the same way, but without the use of a paper strips, the wax is self-setting and pulled off against the direction of the hair growth.
													</br></br>
													<b>2. Is there anything I need to do before my waxing treatment? Waxing Pre-care?</b></br>
													A. We recommend you exfoliate the day before your waxing appointment to soften your skin and prevent ingrown hair. Please do not apply any moisturisers or lotions on the day of your treatment. If you are having under arm waxing, try to use a deodorant with anti-perspirant this allows the hair to be removed easily. Bath or shower on the day prior to your treatment, to open up follicles allowing easy hair removal.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.</br></br>

													<b>4. How long does my hair need to be?</b></br>
													A. For an easy and safe waxing treatment, the hair must be ¼ inches long. If the hair is too short it will be difficult to remove, also if you are shaving for a method of quick hair removal please allow 10 days for regrowth to do a waxing treatment.
													</br></br>
													
													<b>5. How long do waxing results last?</b></br>
													A. The results will vary person to person, and on your hair growth cycle. Typically, you can expect the results to last anywhere between 3-5 weeks. You will see a longer lasting effect with with repeat treatments. We recommend waxing treatments to be done every 4 weeks. 
													</br></br>
													<b>6. Will my hair re-growth be thicker with waxing treatments?</b></br>
													A. No, with consistent waxing treatments you will notice your hair re-growth to become finer and slower.
													</br></br>
													<b>7. I’m pregnant, is this suitable for me?</b></br>
													A. Yes, you can have waxing treatments done. If you are having an intimate waxing treatment, we recommend you have this done after your first trimester.
													</br></br>
													<b>8. Is waxing safe for sensitive skin?</b></br>
													A. Waxing is much gentler on the skin compared to other methods such as shaving. If you have sensitive skin, it’s very important to follow the pre/aftercare instructions provided. We also do laser hair removal as another safe option, which also lasts longer between 3-4 years with maintenance, why not speak to our technicians for further advice!
													</br></br>
													<b>9. I have the following conditions/taking medication or have had treatments done, is this suitable for me?</b></br>
													A. <ul>
														<li>Active herpes outbreak</li>
														<li>Sunburn on the area to be treated</li>
														<li>Chemical peel within the last 10 days</li>
														<li>Use of retinol on the area to be treated within last 3 days</li>
														<li>Acne medication such as Accutane or within the last 6 months</li>
														<li>Eczema, psoriasis, dermatitis or varicose veins in the area to be treated</li>
													</ul>
													Unfortunately, we will not be able to carry out your waxing treatment with the above.
													</br></br>
													<b>10. What should I be doing after my treatment, are there any restrictions? Waxing aftercare</b></br>
													A. We recommend you wear clean, lose fit clothing after your waxing treatment, and apply the products of which your therapist will let you know about.
													<p>For at least 24 hours after your treatment, avoid perfumed products/deodorants, direct sunlight/fake tan, chlorinated water, steam, make up, rubbing or scratching the area as your skin will be highly sensitive. Avoid exercising for 24 hours as sweating may cause the skin to be itchy. Exposure mentioned can cause irritation and inflammation. If any irritation occurs apply a cool damp compress to the area, if these symptoms persist more than 24 hours, seek medical advice.</p>
													
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#WaxGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="WaxGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/waxing-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/waxing-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#WaxDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="WaxDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#WaxAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="WaxAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Waxing End -->

						<!-- Intimate Waxing 940240 -->
						<div id="tab-Desk-Q1-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q1-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Intimate Waxing</a>
							</div>
							<div id="tab-Q1-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/intimate-waxing-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Intimate Waxing</b></p>
										
										<p>Waxing is a safe method to temporarily remove unwanted hair for up to 6 weeks. Waxing produces smoother results as it removes hair from the roots resulting in slower regrowth, unlike shaving which the hair grows back within days.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your threading appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IntiWaxBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="IntiWaxBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Waxing?</b></p>
											Waxing slows down re-growth and you may find the hair to be finer. As there are minimal chemicals used in waxing, this rarely causes skin irritation and allergies. As you may know shaving causes the skin to be rough and stubbly, waxing removes the hair from the root providing smooth exfoliated skin and longer lasting results.
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IntiWaxFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="IntiWaxFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is Waxing done?</b></br>
													A. Waxing is done by using two types of methods, which is warm wax and hot wax. A paper strip is applied and pressed firmly, adhering the strip to the wax it is then pulled off against the direction of the hair growth. The hot wax method is done the same way, but without the use of a paper strips, the wax is self-setting and pulled off against the direction of the hair growth.
													</br></br>
													<b>2. Is there anything I need to do before my waxing treatment? Waxing Pre-care?</b></br>
													A. We recommend you exfoliate the day before your waxing appointment to soften your skin and prevent ingrown hair. Please do not apply any moisturisers or lotions on the day of your treatment. If you are having under arm waxing, try to use a deodorant with anti-perspirant this allows the hair to be removed easily. Bath or shower on the day prior to your treatment, to open up follicles allowing easy hair removal.
													</br></br>

													<b>3. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.</br></br>

													<b>4. How long does my hair need to be?</b></br>
													A. For an easy and safe waxing treatment, the hair must be ¼ inches long. If the hair is too short it will be difficult to remove, also if you are shaving for a method of quick hair removal please allow 10 days for regrowth to do a waxing treatment.
													</br></br>
													
													<b>5. How long do waxing results last?</b></br>
													A. The results will vary person to person, and on your hair growth cycle. Typically, you can expect the results to last anywhere between 3-5 weeks. You will see a longer lasting effect with with repeat treatments. We recommend waxing treatments to be done every 4 weeks. 
													</br></br>
													<b>6. Will my hair re-growth be thicker with waxing treatments?</b></br>
													A. No, with consistent waxing treatments you will notice your hair re-growth to become finer and slower.
													</br></br>
													<b>7. I’m pregnant, is this suitable for me?</b></br>
													A. Yes, you can have waxing treatments done. If you are having an intimate waxing treatment, we recommend you have this done after your first trimester.
													</br></br>
													<b>8. Is waxing safe for sensitive skin?</b></br>
													A. Waxing is much gentler on the skin compared to other methods such as shaving. If you have sensitive skin, it’s very important to follow the pre/aftercare instructions provided. We also do laser hair removal as another safe option, which also lasts longer between 3-4 years with maintenance, why not speak to our technicians for further advice!
													</br></br>
													<b>9. I have the following conditions/taking medication or have had treatments done, is this suitable for me?</b></br>
													A. <ul>
														<li>Active herpes outbreak</li>
														<li>Sunburn on the area to be treated</li>
														<li>Chemical peel within the last 10 days</li>
														<li>Use of retinol on the area to be treated within last 3 days</li>
														<li>Acne medication such as Accutane or within the last 6 months</li>
														<li>Eczema, psoriasis, dermatitis or varicose veins in the area to be treated</li>
													</ul>
													Unfortunately, we will not be able to carry out your waxing treatment with the above.
													</br></br>
													<b>10. What should I be doing after my treatment, are there any restrictions? Waxing aftercare</b></br>
													A. We recommend you wear clean, lose fit clothing after your waxing treatment, and apply the products of which your therapist will let you know about.
													<p>For at least 24 hours after your treatment, avoid perfumed products/deodorants, direct sunlight/fake tan, chlorinated water, steam, make up, rubbing or scratching the area as your skin will be highly sensitive. Avoid exercising for 24 hours as sweating may cause the skin to be itchy. Exposure mentioned can cause irritation and inflammation. If any irritation occurs apply a cool damp compress to the area, if these symptoms persist more than 24 hours, seek medical advice.</p>
													
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IntiWaxGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="IntiWaxGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/intimate-waxing-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/intimate-waxing-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
											
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IntiWaxDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="IntiWaxDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IntiWaxAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="IntiWaxAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Intimate Waxing End -->

						<!-- Body and Head Massage 726626 -->
						<div id="tab-Desk-Q2-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q2-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Body & Head massage </a>
							</div>
							<div id="tab-Q2-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/indian-head-massage-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Indian Head Massage</b></p>
										
										<p>Indian Head Massage is an ayurvedic treatment of healing which is being popular every day. Indian head massage focuses on massaging the acupressure points along the neck, head, and shoulders. This massage is performed using special techniques to improve the hair and scalp condition as well. This treatment is stress releasing and relaxing.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Indian Head Massage appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="IndHMBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Indian Head Massage?</b></p>
											<ul>
												<li>This treatment promotes hair growth by increasing oxygen in the hair follicles</li>
												<li>Indian head massage can reduce headache</li>
												<li>It can improve mental and emotional well-being</li>
												<li>It gives you relief from stress and results in a relaxing sleep</li>
												<li>It improves the hair and scalp condition</li>
												<li>It improves the blood circulation and the lymphatic flow</li>
												<li>It can free the knots of muscular tension</li>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="IndHMFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How is an Indian Head Massage done?</b></br>
													A. This treatment is carried out on a reclining chair, using combined techniques such as massage strokes, compression movements and acupressure points. This treatment includes kneading and circular motions. 
													</br></br>
													<b>2. How does this feel?</b></br>
													A. This treatment is calm, stress releasing, and relaxing. This treatment will make you feel energised, revitalised, and will improve your concentration skill. Your body will continue to re-energise and repair itself 48 hours after the treatment. 
													</br></br>

													<b>3. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. We recommend washing your hair the day before your appointment and removing any pins which will make the massage uncomfortable. Try to wear a comfortable cotton top during your appointment.</br></br>

													<b>4. How long is an Indian Head Massage session?</b></br>
													A. The session is usually 15 to 25 minutes, but this can be adapted to suit your needs.
													</br></br>
													
													<b>5. Which pre-existing conditions may affect my treatment?</b></br>
													A. <ul>
														<li>Skin or scalp infections</li>
														<li>Recent head or neck surgery</li>
														<li>Epilepsy</li>
														<li>Heart conditions</li>
														<li>Cancer</li>
														<li>High/low blood pressure</li>
														<li>High temperature</li>
														<li>Infectious disease</li>
													</ul></br>
													<b>6. What should I do after my treatment? Are there any restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Increase water intake after your treatment to help in the detox process of the body</li>
														<li>Have a suitable rest after the treatment</li>
														<li>Reduce the consumption of alcohol and caffeine, post-treatment</li>
													</ul>
													Get in touch with the team at your local Elegance Beauty salon for more information or book your Indian head massage appointment online today!
													
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="IndHMGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/indian-head-massage-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/indian-head-massage-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="IndHMDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#IndHMAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="IndHMAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Body and Head Massage End -->

						<!-- Basic and Advanced Facials 859065 -->
						<div id="tab-Desk-Q3-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Q3-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Basic & Advanced Facials</a>
							</div>
							<div id="tab-Q3-v-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/facial-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Basic & Advanced Facials</b></p>
										
										<p>Facial is a deep cleansing and moisturising treatment, which uses a variety of products, addressing your skin concerns and condition. This treatment is customised for your individual suitability, for a healthy and balanced skin appearance.</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Basic & Advanced Facials appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaAdFaBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BaAdFaBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Facials?</b></p>
					<ul>
						<li>Facial clears up blemishes and solves your acne problems</li>
						<li>Facial is suitable for all skin types such as sensitive, dry, oily, and normal skin</li>
						<li>It detoxifies and increases blood circulation improving the appearance of your skin</li>
						<li>It slows the process of premature ageing</li>
						<li>It deep cleanses your skin from all impurities</li>
					</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										
				<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaAdFaFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BaAdFaFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How often do I need a facial?</b></br>
													A. We recommend having your facial treatment once a month for best result or if you have skin concerns.
													</br></br>
													<b>2. Is there anything I need to do before my treatment? (Pre-care)</b></br>
													A. We recommend removing facial make up prior to your scheduled appointment, but if you don’t have time to do this, that’s not a problem! 
													Keep in mind your concerns and skin type and communicate that to your therapist, so that she can recommend the right facial to you. Make a list of the products you use as part of your daily skincare regime.
													
													</br></br>

													<b>3. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 40-60 minutes.</br></br>

													<b>4. How should I feel after the treatment?</b></br>
													A. You will feel hydrated and your skin will have a healthy glow in appearance.
													</br></br>
													
													<b>5. Can I apply make up after my facial?</b></br>
													A. Yes, you can apply makeup after your facial. Just remember to remove it thoroughly before you go to bed.</br>
													<b>6. What should I do after my treatment? Are there any Restrictions? (Aftercare)</b></br>
													A. <ul>
														<li>Always cleanse, tone and moisturise your face daily</li>
														<li>Always remove make up thoroughly at the end of the day</li>
														<li>Drink plenty of water (6-8 glasses a day) to keep your skin hydrated</li>
														<li>Avoid sunbathing, sauna, heat, and hot showers for 24 hours post treatment</li>
														<li>For 24 hours do not apply any perfumed products near or on the area treated</li>
													</ul>
													Get in touch with the team at your local Elegance Beauty salon for more information or book your Indian head massage appointment online today!
													
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaAdFaGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="BaAdFaGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/facial-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/facial-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaAdFaDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="BaAdFaDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#BaAdFaAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="BaAdFaAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Basic and Advanced Facials End -->
						<!-- End of treatment infos -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Body Treatments End ID: 772142 -->

	<!-- Hair Cut and Colour Treatments Start ID: 897440 -->
	<div id="HairTreSec"><a name="HairTreSec" />
	<div class="section bg-grey" id="specialitySection">
		<div class="container">
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-a" role="tab"><span>+</span>LADIES CUT AND STYLING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-b" role="tab"><span>+</span>HAIR HIGHLIGHTS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-c" role="tab"><span>+</span>HAIR TINTING</a>		
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-d" role="tab"><span>+</span>GENTS CUT & STYLING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-e" role="tab"><span>+</span>GENTS GROOMING</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-f" role="tab"><span>+</span>WET AND HOT TOWEL SHAVE</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-g" role="tab"><span>+</span>GENTS HAIR HIGHLIGHTS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-h" role="tab"><span>+</span>GIRLS BROWS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-i" role="tab"><span>+</span>GIRLS LASHES</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-j" role="tab"><span>+</span>GIRLS NAILS</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-k" role="tab"><span>+</span>GIRLS HAIR</a>
						<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-l" role="tab"><span>+</span>PAMPER PACKAGES</a>		
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">

						<!-- Ladies Cut and Styling Start 701215 -->
						<div id="tab-Desk-QQ-v-a" class="tab-pane active" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-a-mob" class="nav-link" data-toggle="collapse"><span>+</span>Ladies Cut and Styling</a>
							</div>
							<div id="tab-Desk-QQ-v-a-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/ladies-cut-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Ladies Cut and Styling</b></p>
										
										<p>All your haircuts appointment  will begin with a consultation where you and your stylist can discuss different styles and what will work best for you and your hair. Your stylist will recommend the correct wash and care products to cleanse and condition your hair at the backwash. Your hair will then be washed and conditioned. Following this, your hair will be cut using methods that suit the desired result. Your hair will then be finished with a  blow dry or alternatively other styling techniques will be carried out such as straightening, curling, diffusing, setting.</p>
										<p>
											We offer the following services:
											<ul>
												<li>Cut & Blow Dry</li>
												<li>Wash & Blow Dry </li>
												<li>Dry Cut </li>
												<li>Hair Ups</li>
												<li>GHD Hair Curls</li>
												<li>Hair Straightening</li>
												<li>Fringe Cut</li>
												<li>Hair Extensions & Removal</li>
											</ul>
										</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Ladies Cut and Styling appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LaCuBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="LaCuBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Ladies Cut & Styling?</b></p>
											<ul>
												<li>It promotes healthy hair growth</li>
												<li>It helps with hair breakage</li>
												<li>Hair trimming helps remove nasty-looking split ends</li>
												<li>The process helps remove damaged hair</li>
												<li>Makes styling much easier as rough ends are eliminated</li>
												<li>It will make your hair look much thicker and healthier right from the root to the tip</li>
											</ul>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LaCuFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="LaCuFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. What does a ladies cut and finish include?</b></br>
													A. Your appointment will begin with a consultation where you and your stylist will agree on the style and the finish. Includes a shampoo and head massage. Your hair will be cut with scissors or with the use of clippers depending on the desired style.
													</br></br>
													<b>2. How often to trim your hair for hair growth?</b></br>
													A. For hair growth, it is recommended to get haircuts every six to eight weeks.
													</br></br>

													<b>3. What is restyle?</b></br>
													A. It's changing the shape, layers, texture or style of the hair. It can often be going from long hair to a bob, or adding in undercuts/shaving. A restyle requires more time, and (depending on the cut).</br></br>

													<b>4. Is a wash included in a haircut?</b></br>
													A. Your hair will be washed if you have booked for wash , cut and finish.
													</br></br>
													
													<b>5. What does a dry haircut mean?</b></br>
													A. A dry haircut is exactly what it sounds like: cutting the hair while dry, as opposed to the traditional method of cutting it while it's wet. 
													</br></br>
													<b>6. Is my hair considered long or short?</b></br>
													A. If your strands reach past your shoulders, it's considered long.
													</br></br>
													<b>7. Will salon cut your hair if you have lice?</b></br>
													A. Due to health and safety reasons, hairdressers cannot proceed. They have to stop and cannot cut your hair when you have lice.
													</br></br>
													<b>8. Can I get hair colour along with cut and finish?</b></br>
													A. Yes , you can get your colour done and get your cut and finish.
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LaCuGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="LaCuGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/ladies-cut-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/ladies-cut-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LaCuDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="LaCuDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#LaCuAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="LaCuAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Ladies Cut and Styling End -->

												<!-- Hair Highlights Start 565783 -->
						<div id="tab-Desk-QQ-v-b" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-b-mob" class="nav-link" data-toggle="collapse"><span>+</span>Hair Highlights</a>
							</div>
							<div id="tab-Desk-QQ-v-b-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/hair-highlight-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Hair Highlights</b></p>
										
										<p>Highlighting your hair is an effective way to draw attention to its natural beauty without coloring all of it. Highlights are sections and strands of your hair that are dyed a few shades lighter than your natural hair colour; this is done to brighten the overall colour of your hair using foils. Highlights are a low-maintenance styling technique. They are the perfect choice for individuals who want to subtly adjust their hair color without having to get root touch-ups frequently.</p>
										<p>We offer following Highlights:
											<ul>
												<li><b>Full Head Highlights:</b> Full head highlights are a perfect option for those who prefer a consistent hair colour and don’t want to show off their natural shade. If you are wondering how many foils are needed to cover the whole head with highlights.</li>
												<li><b>Half Head Highlights:</b> Half head highlights cover only specific sections of your hair, for example, the front strands near your face, or the top hair layer only, while the sections underneath typically remain undyed. A lot of people decide to go with half head highlights because they like the way their natural hair colour is seen through the highlighted strands. They are inexpensive to maintain, which is one of their biggest pros.</li>
												<li><b>T Bar Highlights:</b> T-section highlights are highlights that highlight the hairs in approximately 1/4th of the head, specifically in the top and crown area.</li>
												<li><b>Balayage:</b> is a highlighting technique that can be either partial or full. In other words, the rules of partial and full highlights also apply to balayage. However, a distinctive trait of balayage is that it is hand-painted rather than dyed with foils</li>
											</ul>
										</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Hair Highlights appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaHiBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HaHiBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Hair Highlights?</b></p>
										<p>
											<ul>
												<li>Versatile</li>
												<li>Adds Depth</li>
												<li>Enhances Skin Tone</li>
												<li>Disguises Gray’s</li>
												<li>Modernize Your Style</li>
											</ul>
										</p>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaHiFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HaHiFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. Which Colour is best for highlights?</b></br>
													A. It is two shades lighter than your base colour. That way, it looks more natural.
													</br></br>
													<b>2. Does highlights damage your hair?</b></br>
													A. Highlights generally require the use of bleach or lightener. As such, any time you chemically alter your hair, it will cause damage. On the bright side, highlights use such small sections of hair that it limits the damage. Plus, there are ways can minimize harm and repair your hair. Use a good conditioning treatment regularly, and give your tresses some extra nourishment from time to time. 
													</br></br>

													<b>3. How long does my hair need to be?</b></br>
													A. For an easy and safe waxing treatment, the hair must be ¼ inches long. If the hair is too short it will be difficult to remove, also if you are shaving for a method of quick hair removal please allow 10 days for regrowth to do a waxing treatment.</br></br>

													<b>4. Do I need a patch test for highlights?</b></br>
													A. Patch test is mandatory 48 hours prior your appointment if we have to use the toner for your highlights. To avoid disappointments, please book your hair consultation before booking for your service.
													</br></br>
													
													<b>5. Do I have to do anything before my treatment? Pre-care?</b></br>
													A. Do not shampoo your hair at least 1-2 days before your appointment. Do not shape your hair with heat tools such as straighteners etc.
													</br></br>
													<b>6. Can I get hair cut with my highlights?</b></br>
													A. Yes, you can get cut and blow-dry along with your highlights.
													</br></br>
													<b>7. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.
													</br></br>
													<b>8. How long will this treatment take?</b></br>
													A. Your appointment will ideally take around 2-3 hours, depending on if its full/half head highlights, duration of this treatment may vary.
													</br></br>
													<b>9. How often should I get this done to maintain?</b></br>
													A. We recommend you get the colour process done every 3-5 weeks for best results.
													</br></br>
													<b>10. After Care?</b></br>
													A. <ul>
														<li>Don't wash your hair for about 24 hours after a foil highlighting session -- this delay will give the hair colour time to be fully absorbed into each strand</li>
														<li>Get a colour care shampoo and conditioner. Regular shampoo and conditioner will strip the colour from your hair</li>
														<li>Go easy on the heat</li>
														<li>Use weekly deep conditioning at home</li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaHiGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HaHiGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-highlight-1213.png') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-highlight-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaHiDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="HaHiDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaHiAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="HaHiAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Hair Highlights End -->

												<!-- Hair Tinting Start 311450 -->
						<div id="tab-Desk-QQ-v-c" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-c-mob" class="nav-link" data-toggle="collapse"><span>+</span>Hair Tinting</a>
							</div>
							<div id="tab-Desk-QQ-v-c-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/hair-tinting-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Hair Tinting</b></p>
										
										<p>A full head tint is a permanent colour which can lighten or darken hair and cover those bothersome greys. Aside from this colour service being a one-step process that coats the hair with a single shade, it's also the perfect way to render a beautiful, all over colour.</p>
										<p>
											We offer following Hair Tinting:
											<ul>
												<li><b>Full head Tint:</b> A full head of colour is where one colour is applied all over the head from roots to tips, using permanent colour to cover grey and lift virgin hair by up to 3 levels or semi-permanent to change depth, tone and add shine to your hair.</li>
												<li><b>Root Tint:</b> In order to maintain a full head tint you may need to come back for a root tint every 4-6 weeks depending on the speed of your root growth.</li>
											</ul>
										</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Hair Tinting appointment online  today!</b></p>
										<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaTiBene"><i class="icon-right-arrow"></i><span >1. Benefits</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HaTiBene" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Benefits</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<p><b>What are the benefits of Hair Tinting?</b></p>
										<p>
											<ul>
												<li>Add volume. Adding a subtle colour to your hair can make it look thicker than it really is</li>
												<li>Makes your hair shiny. People with dull, dry hair might want to give hair colouring a try</li>
												<li>Play up your features</li>
												<li>Enhance your haircut</li>
											</ul>
										</p>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaTiFaq"><i class="icon-right-arrow"></i><span >2. FAQ</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HaTiFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">FAQ</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1faq" class="collapse faq-item-content" role="tabpanel">
												<div>
													<b>1. How long does a full head tint last?</b></br>
													A. It's expected to last about four weeks but can fade earlier if not properly cared for.
													</br></br>
													<b>2. How long should a full head tint take?</b></br>
													A. Application should take around 30 minutes and then processing time is about 45 minutes. However, if you are attempting to cover a lot of grey hairs or use a high-lift colouring product, this time may increase. 
													</br></br>

													<b>3. Do you need a patch test for hair tint?</b></br>
													A. A Patch test is mandatory 48 hours prior to this service.  if you don't have a patch test or service history in our system (registered in your name) within last six months or if you have had any change in your medical history since your most recent hair tint treatment you are required to have a patch test. If you do not meet these conditions , Salon cannot proceed with the treatments.</br></br>

													<b>4. How old must I be to have this done?</b></br>
													A. From age of 16+ you can receive this service.
													</br></br>
													
													<b>5. How often can you use root touch up?</b></br>
													A. Every 4 to 6 weeks, and no later than 8 weeks. 
													</br></br>
													<b>6. How often should i shampoo my hair after receiving a colour service?</b></br>
													A. Leave at least 24 hours before shampooing your hair…48 hours is even better. try and limit your washing to 3 times a week, especially if you have a more intense colour like, red.
													</br></br>
													<b>7. Can I get hair tint and highlights on same day?</b></br>
													A. Yes, as long as your hair is in good condition.
													</br></br>
													<b>8. Can I lighten by hair without bleaching?</b></br>
													A. If you are trying to go from a dark shade colour to a light shade of colour, you will need to bleach the hair. To lighten the hair, you have to use some type of bleach or peroxide to remove the pigment in the hair. Once the pigment is removed, the hair cuticle lifts allowing the hair colour to be absorbed.
													</br></br>
													<b>9. After Care?</b></br>
													A. <ul>
														<li>Don’t wash your hair for two days after your colour service</li>
														<li>Avoid swimming and saunas for a couple of weeks too as both heat and chlorine cause colour fade</li>
														<li>Always use a colour-protecting shampoo and conditioner as they’re specifically formulated to reduce fade and dryness</li>
														<li>Avoid standing  directly under the shower spray unless you’re rinsing, and keep the water warm, rather than hot</li>
														<li> Always apply a sun protection barrier product. Do pay close attention to the crown as it catches the most sun</li>
														<li>Guard your hair against heat damage. Before you reach for your straightening irons, hairdryer or curling tongs spray on a heat-protective product </li>
													</ul>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaTiGal"><i class="icon-right-arrow"></i><span >3. Gallery</span><i class="icon-right-arrow"></i></a>

		<!-- Modal Start -->
		<div class="modal fade" id="HaTiGal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Gallery</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div id="waxing1gal" class="collapse faq-item-content" role="tabpanel">
												<div id="tab1" class="collapse show">
													<div class="pb-4 pb-lg-6">
														<div class="row row-sm-space pt-2">
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-tinting-1213.jpg') }}" class="img-fluid" alt=""></div>
															<div class="col-sm-4"><img src="{{ asset('public/images/content/hair-tinting-1214.jpg') }}" class="img-fluid" alt=""></div>
														</div>
													</div>
												</div>
											</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaTiDp" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span>4. Discounted Packages</span><i class="icon-right-arrow"></i></a>
				<!--  Modal Start -->
		<div class="modal fade" id="HaTiDp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Packages</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div>
												<a href="packages.html" class="btn-link">View Packages<i class="icon-right-arrow"></i></a>	
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->

										<a href="" class="btn cus-mt-3" data-toggle="modal" data-target="#HaTiAb" style="width: 100%;text-align:left;"><i class="icon-right-arrow"></i><span >5. Available Branches</span><i class="icon-right-arrow"></i></a>

												<!-- Modal Start -->
		<div class="modal fade" id="HaTiAb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
        			<h5 class="modal-title modal-title-black" id="exampleModalLabel">Available Branches</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      				</div>
      				<div class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
        			<div class="download-block-text">
												
													<ul class="marker-list-md">
														<li><a href="salon-details.html">Elegance Salon, Glasgow Fort, Glasgow</a></li>
														<li><a href="salon-details-1.html">Elegance Salon, Bonaccord Centre, Aberdeen</a></li>
														<li><a href="salon-details-2.html">Elegance Salon, The Thistle Centre, Stirling</a></li>
														<li><a href="salon-details-3.html">Elegance Express Beauty, Ocean Terminal, Edinburgh </a></li>
														<li><a href="salon-details-4.html">Elegance Express Beauty, Wellgate Shopping Centre, Dundee</a></li>
														
														
														<li><a href="salon-details-7.html">Elegance Salon, Overgate Centre, Dundee</a></li>
														<li><a href="salon-details-8.html">Elegance Salon, Fortkinnaird, Edinburgh</a></li>
													</ul>
												</div>
      				</div>
      				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>
		<!-- Modal End -->
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Hair Tinting End -->

												<!-- Gents Cut & Styling Start 289193 -->
						<div id="tab-Desk-QQ-v-d" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-d-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Cut & Styling</a>
							</div>
							<div id="tab-Desk-QQ-v-d-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gents-haircut-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Cut & Styling</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gents Cut appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gents Cut & Styling End -->

						<!-- Gents Grooming Start 262096 -->
						<div id="tab-Desk-QQ-v-e" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-e-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Grooming</a>
							</div>
							<div id="tab-Desk-QQ-v-e-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gents-grooming-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Grooming</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gents Grooming appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gents Grooming End -->

						<!-- Wet and Hot Towel Shave Start 334152 -->
						<div id="tab-Desk-QQ-v-f" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-f-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Cut & Styling</a>
							</div>
							<div id="tab-Desk-QQ-v-f-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/hot-wet-shave-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Cut & Styling</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your ... appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Wet and Hot Towel Shave End -->

						<!-- Gents Hair Highlights Start 509647 -->
						<div id="tab-Desk-QQ-v-g" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-g-mob" class="nav-link" data-toggle="collapse"><span>+</span>Gents Hair Highlights</a>
							</div>
							<div id="tab-Desk-QQ-v-g-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/gents-hair-highlight-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Gents Hair Highlights</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Gents Hair Highlights appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Gents Hair Highlights End -->

						<!-- Girls Brows Start 440395 -->
						<div id="tab-Desk-QQ-v-h" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-h-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Brows</a>
							</div>
							<div id="tab-Desk-QQ-v-h-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-brows-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Brows</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Brows appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Brows End -->

						<!-- Girls Lashes Start 780211 -->
						<div id="tab-Desk-QQ-v-i" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-i-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Lashes</a>
							</div>
							<div id="tab-Desk-QQ-v-i-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-lashes-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Lashes</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Lashes appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Lashes End -->

						<!-- Girls Nails Start 240098 -->
						<div id="tab-Desk-QQ-v-j" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-j-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Nails</a>
							</div>
							<div id="tab-Desk-QQ-v-j-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-nails-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Nails</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Nails  appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Nails End -->

						<!-- Girls Hair Start 974619 -->
						<div id="tab-Desk-QQ-v-k" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-k-mob" class="nav-link" data-toggle="collapse"><span>+</span>Girls Hair</a>
							</div>
							<div id="tab-Desk-QQ-v-k-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/girls-hair-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Girls Hair</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Girls Hair appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Girls Hair End -->

						<!-- Pamper Packages Start 600766 -->
						<div id="tab-Desk-QQ-v-l" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-Desk-QQ-v-l-mob" class="nav-link" data-toggle="collapse"><span>+</span>Pamper Packages</a>
							</div>
							<div id="tab-Desk-QQ-v-l-mob" class="collapse tab-content-m">
								<div class="blog-post blog-post-single">
									<div class="post-image">
										<img src="{{ asset('public/images/blog/pamper-packages-11.jpg') }}" alt="">
									</div>
									<div class="post-text">
										<p><b>Pamper Packages</b></p>
										
										<p>...</p>
										
										<p><b>Get in touch with the team at your local Elegance Beauty salon for more information or  book your Pamper Packages appointment online  today!</b></p>
										<div class="cus-mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<a href="https://booking.elegancesalons.co.uk" class="btn mt-3" style="width: 100%;background: #ebb3a0;color: white;"><i class="icon-right-arrow"></i><span>Make Your Booking</span><i class="icon-right-arrow"></i></a>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Pamper Packages End -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Hair Cut and Colour Treatments End ID: 348285 -->

	<!--//section equipment-->
	<!--section faq-->
	<div class="section bg-grey py-0" id="faqSection">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 banner-left bg-cover"
					 style="background-image: url(images/content/banner-left.jpg)"></div>
				<div class="col-xl-6">
					<div class="faq-wrap faq-wrap--pad-lg px-15 px-lg-8">
						<div class="title-wrap">
							<h2 class="h1">Customer Information</h2>
						</div>
						<div class="mt-2 mt-lg-4"></div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1"
							   aria-expanded="true"><span>1.</span><span>How do I make an appointment?</span></a>
							<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
								<div>
									<p>If you would like to make an appointment with one of our therapist, please
										contact our reception staff. Alternatively you may book your appointments
										online. Every effort will be made to accommodate your preferred time and choice
										of practitioner. </p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2"
							   aria-expanded="false" class="collapsed"><span>2.</span><span>How do I get a copy of my records to another provider? </span></a>
							<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										Everyone’s needs are different, so have a chat to your dentist about how often
										you need to have your teeth checked by them based on the condition of your
										mouth, teeth and gums. It’s recommended that children see their dentist at least
										once a year.
									</p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3"
							   aria-expanded="false" class="collapsed"><span>3.</span><span>Is there a charge for copies of my medical record? </span></a>
							<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										Everyone’s needs are different, so have a chat to your dentist about how often
										you need to have your teeth checked by them based on the condition of your
										mouth, teeth and gums. It’s recommended that children see their dentist at least
										once a year.
									</p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4"
							   aria-expanded="false" class="collapsed"><span>4.</span><span>How do I assure that my person I designate has access to my medical records? </span></a>
							<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										Everyone’s needs are different, so have a chat to your dentist about how often
										you need to have your teeth checked by them based on the condition of your
										mouth, teeth and gums. It’s recommended that children see their dentist at least
										once a year.
									</p>
								</div>
							</div>
						</div>
						<a href="contact.html" class="btn mt-15 mt-sm-3"><i
								class="icon-right-arrow"></i><span>Contact Us</span><i
								class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
  @push('css')
  <link href="{{ asset('public/color/color.css') }}" rel="stylesheet">
  <style type="text/css">
		.mobile-view-1{
			display: none;
		}
		.desktop-view-1{
			display: block;
		}
		 @media (max-width:768px) {
     
   .mobile-view-1{
     display: block;
  	}
  	.desktop-view-1{
    	display: none;
  	}

		}
		.mobile-slider-1{
			display:none;
		}
		.desktop-slider-1{
			display:block;
		}
		@media (max-width:425px) {
  			.desktop-slider-1 {
    		display: none;
  			}
			  .mobile-slider-1{
			display:block;
		}
		}
		.content-padding {
    	padding: 10px;
    	overflow:hidden ; /* minds inside and outside floatting elements, fine if no size given */
		}
		.treatments-sticky {
  		position: -webkit-sticky;
  		position: sticky;
  		top: 70px;
  		background-color: white;
  		padding: 15px 10px 5px 10px;
  		font-size: 20px;
  		z-index: 1;
		}

		.sticky-buttton-style {
			border: 2px solid #ecb3a0;
		}

		.accordion {
  		background-color: #eee;
  		color: #444;
  		cursor: pointer;
  		padding: 18px;
  		width: 100%;
  		border: none;
  		text-align: left;
  		outline: none;
  		font-size: 15px;
  		transition: 0.4s;
  		background-color:white;
  		font-weight: bold;
  		margin-bottom: 10px;
		}

		.accordion-mob {
  		background-color: #eee;
  		color: #444;
  		cursor: pointer;
  		padding: 10px;
  		width: 97%;
  		border: 2px solid #ecb3a0;
  		border-radius: 25px;
  		text-align: left;
  		outline: none;
  		font-size: 15px;
  		transition: 0.4s;
  		background-color:white;
  		font-weight: bold;
  		margin-bottom: 10px;
  		margin-right: 5px;
  		margin-left: 5px;
		}

		.panel {
			margin-bottom: 10px;
		}

		.active, .accordion:hover {
  		background-color: #fff; 
		}

		.panel {
  		padding: 0 18px;
  	display: none;
  	background-color: white;
  	overflow: hidden;
		}

		.modal-title-black{
			color: black;
		}
	</style>

@endpush
@push('js')
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script>
var acc = document.getElementsByClassName("accordion-mob");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endpush