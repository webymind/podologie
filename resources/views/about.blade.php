<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@include('head')

        <meta name="keywords" content="Podiatrist Mauritius, Aglaë Provost-Fleury, Foot care specialist,Podologue.mu,Professional podiatry services,Mauritius foot health,Personalized foot care, Expert podiatric care"> 
        
        <meta property="og:url" content= "https://podologue.mu/about-aglae">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Learn about Aglaë Provost-Fleury, an experienced podiatrist in Mauritius, dedicated to personalized foot care. Discover professional services for optimal foot health at Podologue.mu.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | About Aglaë Provost-Fleury | Podiatrist in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | About Aglaë Provost-Fleury | Podiatrist in Mauritius </title>
        
        <meta name="description" content="Learn about Aglaë Provost-Fleury, an experienced podiatrist in Mauritius, dedicated to personalized foot care. Discover professional services for optimal foot health at Podologue.mu.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu/about-aglae" />

            <style>
            .tra-menu .wsmainfull{
                background-color:black!important;
            }
            .inner-page-title p{
                line-height:1.5!important;
            }
            .bg--03 {
                background-image: url(podologue.mu/images/podologue.mu-book-appointment-6.png);
            }
            .align-items-center{
                padding-top: 100px;
            }
                #scroll-to-top-button {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    display: none;
                }
        </style>





	<body> 







		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">






    @include("nav")







			<!-- TEXT CONTENT
			============================================= -->
			<section id="lnk-1" class="pt-100 ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->	
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="podologue.mu/images/Aglaë-PF-P-hero-1.webp" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">

								<!-- Section ID -->	
						 		<span class="section-id">{{ __("Your Podiatrist in Mauritius") }}</span>

								<!-- Title -->	
								<h2 class="s-46 w-700">Aglaë Provost-Fleury</h2>

								<!-- Text -->	
								<p>{{ __("I am a state-certified chiropodist-podiatrist since 2017, affiliated and specialized in the practice of the POD key for managing diabetic patients.") }}
								</p>

								<!-- Small Title -->	
								<h5 class="s-24 w-700"></h5>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
										<p> {{ __("I am also a member of the Association of Podiatrists of Mauritius, recognized by the AHPC.") }}
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">{{ __("I consult patients at my office from Monday to Thursday, from 9:00 AM to 5:30 PM, located at the Business Park Endemika in Petit Raffray.") }}
										</p>
									</li>

								</ul>
								<br>
								<p>{{ __("Stay connected and join our clinic on Facebook »") }} <a href="https://www.facebook.com/aglaeprovostfleurypodologue" target="_blank"><img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="aglaeprovostfleurypodologue-podologue.mu"/></a></p>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->





            @include("banner")


			@include("footer")

		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="podologue.mu/js/jquery-3.7.0.min.js"></script>

		<script src="podologue.mu/js/menu.js"></script>

				
		<!-- Custom Script -->		
		<script src="podologue.mu/js/custom.js"></script>
  


	</body>




</html>