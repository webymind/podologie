<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

        <meta name="keywords" content="Book appointment podiatry Mauritius, Podologue.mu, Medical pedicure services, Podiatric appointments Mauritius, Foot care scheduling,Expert podiatry Mauritius, Mauritius foot health appointments, Podiatrist appointment availability"> 
        
        <meta property="og:url" content= "https://podologue.mu/home">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Schedule your appointment for expert podiatry and medical pedicure services in Mauritius at Podologue.mu. Experience specialized foot care for improved wellness and comfort.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Book Appointment - Podiatry and medical pedicure in Mauritius "> 
        <meta property="og:type" content="Website">
        
        <title>Podologue.mu | Book Appointment - Podiatry and medical pedicure in Mauritius</title>
        
        <meta name="description" content="Schedule your appointment for expert podiatry and medical pedicure services in Mauritius at Podologue.mu. Experience specialized foot care for improved wellness and comfort.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu/home" />

	<style>
		.pricing-features li p{
			line-height: 1.5!important;
		}
	</style>


	<body> 


		<!-- Podologue.mu Main - Webymind - CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">

			<!-- HEADER
			
			============================================= -->
					@include('usernav')
		<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU END HEADER -->




			<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU HERO-1
			============================================= -->	
			<section id="hero-1" class="bg--scroll hero-section">
				<div class="container">	
					<div class="row d-flex align-items-center">


						<!-- HERO TEXT -->
						<div class="col-md-6">
							<div class="hero-1-txt color--white ">
                                {{-- <img class="img-fluid" src="podologue.mu/images/book-appointment-podologue.mu.png" alt="AGLAE-PROVOST-FLEURY-PODOLOGUE.MU hero-image"> --}}
								<!-- Title -->
								{{-- <h2 class="s-58 w-700">Your Podologue in Mauritius</h2> --}}

								<!-- Text -->
								<h2 class="p-xl">
									{{ __('Book an appointment according to your availability.') }}
								</h2>


							</div>
						</div>
							<!-- END AGLAE-PROVOST-FLEURY-PODOLOGUE.MU HERO TEXT -->	


						<!-- HERO IMAGE -->
						<div class="col-md-6">	
							<div >	
								{{-- <img class="img-fluid" src="podologue.mu/images/hero-1-img.png" alt="AGLAE-PROVOST-FLEURY-PODOLOGUE.MU hero-image">	 --}}  
                            <!-- Calendar-webymind-->
                            <div class="calendly-inline-widget" data-url="https://calendly.com/aglae-provost-fleury-podologue/podologie?hide_event_type_details=1&hide_gdpr_banner=1&background_color=fffffff&text_color=003866&primary_color=01B6D6" style="width:auto;height:632px;"></div>
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js " async></script>  
                            <!-- Calendar-webymind widget end -->   
							
							</div>
						</div>	
						

					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	<!-- END HERO-1 -->	



			<!-- FEATURES-HEAD + 3 CARD SECTION IMG
			============================================= -->
			<hr class="divider">

			@include('heading-3card')


			<section id="pricing-1" class="gr--whitesmoke pb-40 inner-page-hero pricing-section">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-8">
							<div class="section-title mb-70">	

								<!-- Title -->	
								<h2 class="s-52 w-700">{{ __("Pricing") }}</h2>	
											<p class="color--grey">{{ __("If your appointment is for a podiatric assessment, please bring your regular footwear as well as those specifically used for sports.") }}</p>

							</div>	
						</div>
					</div>	<!-- END SECTION TITLE -->	


					<!-- PRICING TABLES -->
					<div class="pricing-1-wrapper">
						<div class="row row-cols-1 row-cols-md-3">


							<!-- STARTER PLAN -->
							<div class="col">
								<div id="pt-1-1" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">


									<!-- TABLE HEADER -->
									<div class="pricing-table-header">

										<!-- Title -->
										<h5 class="s-24 w-700">{{ __("Medical Pedicure") }}</h5>



										<!-- Button -->
										{{-- <a href="#" class="pt-btn btn r-04 btn--theme hover--theme">Get srarted - it's free</a> --}}
										<p class="p-sm btn-txt text-center color--grey"></p>

									</div>	<!-- END TABLE HEADER -->


									<!-- PRICING FEATURES -->
									<ul class="pricing-features color--black ico-10 ico--green mt-25">
										<li><p><span class="flaticon-check"></span> Rs 1500 {{ __("Medical Pedicure") }}</p></li>
										<li><p><span class="flaticon-check"></span> Rs 1300 {{ __("Plantar Warts") }}</p></li>
										<li><p><span class="flaticon-check"></span> Rs 1300 {{ __("Orthonyxies") }}</p></li>

									</ul>	


								</div>
							</div>	<!-- END STARTER PLAN -->


							<!-- BASIC PLAN -->
							<div class="col">
								<div id="pt-1-2" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">


									<!-- TABLE HEADER -->
									<div class="pricing-table-header">

										<!-- Title -->
										<h5 class="s-24">{{ __("Podiatry Assessment") }}</h5>
											
										<!-- Price -->	
										<div class="price">								


										</div>	<!-- End Price -->	


									</div>	<!-- END TABLE HEADER -->


									<!-- PRICING FEATURES -->
									<ul class="pricing-features color--black ico-10 ico--green mt-25">
										<li><p><span class="flaticon-check"></span> Rs 2000 {{ __("Podiatry Assessment") }}</p></li>
										<li><p><span class="flaticon-check"></span> Rs 2000 {{ __("Treatment of dizziness") }}</p></li>
									</ul>


								</div>
							</div>	<!-- END BASIC PLAN -->


							<div class="col">
								<div id="pt-1-3" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">


									<!-- TABLE HEADER -->
									<div class="pricing-table-header">

										<!-- Title -->
										<h5 class="s-24">{{ __("Urgence") }}</h5>

										<!-- Price -->	
										<div class="price">	


										</div>	<!-- End Price -->	


									</div>	<!-- END TABLE HEADER -->


									<!-- PRICING FEATURES -->
									<ul class="pricing-features color--black ico-10 ico--green mt-25">
										<li><p><span class="flaticon-check"></span>Rs 1500 {{ __("Emergency medical pedicure") }}</p></li>

									</ul>
									

								</div>
							</div>


						</div>
					</div>	
					<!-- PRICING TABLES -->

				
				</div>	   <!-- End container -->
			</section>
			


	@include('footer')


	</body>

	@include('script')



</html>