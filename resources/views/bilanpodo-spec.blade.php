<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@include('head')

        <meta name="keywords" content="Podiatry assessment, Foot health, Ankle examination, Knee and leg evaluation, Pelvis and back care, Podiatrist services, Lower limb wellness, Podiatric expertise, Comprehensive foot analysis, Musculoskeletal health."> 
        
        <meta property="og:url" content= "https://podologue.mu/pedicure">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Explore comprehensive podiatric assessments at Podologue.mu, focusing on the health of your feet, ankles, knees, legs, pelvis, and back. Our expert podiatrists provide personalized care to address a range of concerns, promoting overall lower limb and spinal well-being.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu - Podiatric Assessment, Feet and Ankles, Knees and Legs, Pelvis and Back treatment in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title>Podologue.mu - Podiatric Assessment, Feet and Ankles, Knees and Legs, Pelvis and Back treatment in Mauritius</title>
        
        <meta name="description" content="Explore comprehensive podiatric assessments at Podologue.mu, focusing on the health of your feet, ankles, knees, legs, pelvis, and back. Our expert podiatrists provide personalized care to address a range of concerns, promoting overall lower limb and spinal well-being.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu//pedicure" />


            <style>
            .tra-menu .wsmainfull{
                background-color:black!important;
            }
            .inner-page-title p{
                line-height:1.5!important;
            }
            .bg--03 {
                background-image: url("podologue.mu/images/podologue.mu-book-appointment-6.png");
            }   
            </style>  




	<body> 






		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">





            @include('nav')


			

	

			<!-- TEXT CONTENT
			============================================= -->
			<section style="padding-top: 170px" class="ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->	
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img  class="img-fluid" src="podologue.mu/images/projects/etude-globale-de-la-posture.webp" alt="etude-globale-de-la-posture" >
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">

								
								<!-- TEXT BOX -->	
								<div class="txt-box">

									<!-- Title -->	
									<span class="s-24 w-700">{{ __("Specificities") }}</span>

									<!-- Text -->	
											<p>{{ __("The podiatrist, through listening to their patient, evaluating their environment, clinically observing the feet, analyzing the walking technique, and taking footprints, establishes a diagnosis with the aim of identifying the conditions and static and dynamic disorders of the patient.") }}
											</p>

											<p>{{ __("Following this podiatric assessment, and if deemed necessary, the practitioner designs, creates, and adjusts a pair of orthotic insoles. These are devices intended to correct morphological issues of the feet and their impact on the patient's balance (statics), walking, or running (dynamics) through mechanical action.") }}</p>


								</div>	<!-- END TEXT BOX -->	



							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->



			<section class="ct-01 inner-page-hero content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->	
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-md-6 order-last order-md-2">
							<div class="txt-block left-column wow fadeInRight">

								<!-- Section ID -->	
						 		<span class="section-id"></span>

								<!-- Title -->	
								<h2 class="s-30 w-700" class="p-4">{{ __("The Insoles") }}</h2>

								<!-- Text -->	
											<p>{{ __("The insoles aim to restore, by correcting it, the optimal functionality of the foot, particularly with its repercussions on the musculoskeletal system") }}</p>

                                <p>{{ __("They are adaptable to your various pairs of shoes, including sandals.") }}</p>

								<!-- List -->	
								{{-- <ul class="simple-list">

									<li class="list-item">
										<p>Tempor sapien quaerat an ipsum laoreet purus and sapien dolor an ultrice 
											ipsum aliquam undo congue dolor cursus 
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Cursus purus suscipit vitae cubilia magnis volute egestas vitae 
											sapien turpis ultrice auctor congue placerat
										</p>
									</li>

								</ul> --}}

							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block right-column wow fadeInLeft">
								<img class="img-fluid" src="podologue.mu/images/semelles.webp" style="border-radius: 10px" alt="semelles">
							</div>
						</div>


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>


            <section style="padding-top: 100px" class="ct-02 content-section division">
                <div class="container">
                    <h4 class="p-4">{{ __("Here are some examples of common pathologies:") }}</h4>

                    <div class="p-4">
                        <img class="img-fluid r-16" src="/podologue.mu/images/pathologies-2.webp" width="350px" alt="pathologies">
                    </div>
                        
                            <ul class="simple-list" style="padding: 5px"><br>
                                <li class="list-item">
                                    {{ __("Feet and ankles: Plantar fasciitis, heel spur, plantar fasciitis, tendonopathies (Achilles tendon, posterior tibial tendon, fibular tendons), ankle instability, Morton's syndrome, forefoot metatarsalgia, high arches, flat feet, Hallux Valgus.") }}
                                </li>
                                <li class="list-item">
                                    {{ __("Knees and legs: Knock-knee (genu valgum), bowlegged (genu varum), tendonopathies (pes anserinus, iliotibial band syndrome, anterior tibial tendon...), meniscopathy, tibial periostitis.") }}
                                </li>
                                <li class="list-item">
                                    {{ __("Pelvis and back: Scoliotic posture, scoliosis, pelvic tilt, lower limb length discrepancy (short leg), lower back pain, neck pain.") }}
                                </li><br>
                            </ul> 
                            
                             <h4 class="p-4">{{ __("Management of dizziness") }}</h4>

							<p>{{ __("If you have been experiencing dizziness since a fall or an accident, it is possible that it is due to the displacement of one or more crystals in the inner ear. A specific assessment allows for the diagnosis and rehabilitation of this condition.") }}</p>

							<p style="color: black">{{ __("The podiatrist plays a role in advising, educating, and preventing issues related to hygiene, footwear, walking, and autonomy, all of which have implications for overall quality of life and health.") }}</p>                             
                </div>
              
            </section>





			@include('banner')




            @include('footer')


		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="podologue.mu/js/jquery-3.7.0.min.js"></script>

		<script src="podologue.mu/js/menu.js"></script>

				
		<!-- Custom Script -->		
		<script src="podologue.mu/js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            const button = document.getElementById("scroll-to-top-button");

            // Show the button when user scrolls down 70% of the page
            window.addEventListener("scroll", function () {
                if (window.scrollY > 0.7 * window.innerHeight) {
                    button.style.display = "block";
                } else {
                    button.style.display = "none";
                }
            });

            // Scroll to the top when the button is clicked
            button.addEventListener("click", function () {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });

		
    </script>


	</body>




</html>