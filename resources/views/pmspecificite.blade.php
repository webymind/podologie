<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@include('head')

        <meta name="keywords" content="Medical pedicure, Corn treatment, Callus removal, Ingrown nail care, Fungal infection treatment, Wart removal, Cracks treatment, Foot care Mauritius, Podiatry services, Foot health."> 
        
        <meta property="og:url" content= "https://podologue.mu/pedicure">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Discover expert medical pedicure treatments in Mauritius for corns, calluses, ingrown nails, fungal infections, warts, and cracks. Our skilled professionals provide specialized care for your foot concerns, ensuring comfort and well-being. Contact us for personalized solutions tailored to your specific needs.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Medical Pedicure for Corns, Calluses, Ingrown Nails, Fungal Infections, Warts, and Cracks Treatment in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title>Medical Pedicure for Corns, Calluses, Ingrown Nails, Fungal Infections, Warts, and Cracks Treatment in Mauritius</title>
        
        <meta name="description" content="Discover expert medical pedicure treatments in Mauritius for corns, calluses, ingrown nails, fungal infections, warts, and cracks. Our skilled professionals provide specialized care for your foot concerns, ensuring comfort and well-being. Contact us for personalized solutions tailored to your specific needs.">  
        
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
								<img class="img-fluid" src="podologue.mu/images/fissure-crevasse.webp" alt="fissure-crevasse">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">

								
								<!-- TEXT BOX -->	
								<div class="txt-box">

									<!-- Title -->	
									<h5 class="s-24 w-700">{{ __("Specificities") }}</h5>

									<!-- Text -->	
                                <p>{{ __("Our feet are often the last priority. Yet, neglecting them is a continual source of minor (and major) pains, such as backache, heavy legs... that disrupt our daily life. It's essential to regularly care for them.") }}</p>

								<p>{{ __("A pedicure treatment allows for the curative or preventive treatment of all skin and nail conditions, thus relieving the pains or discomfort caused by corns, calluses, ingrown nails, fungal infections, warts, cracks...") }}</p>

								</div>	<!-- END TEXT BOX -->	


								<!-- TEXT BOX -->	
								<div class="txt-box mb-0">

									<!-- Title -->	
									{{-- <h5 class="s-24 w-700">Connect your data sources</h5> --}}

									<!-- Text -->	
								<p>{{ __("The treatments are provided in suitable hygienic conditions (sterilization of instruments and single-use blades).") }}</p>

								<p>{{ __("At the end of the consultation, the podiatrist may prescribe certain external-use medications to ensure the therapeutic follow-up of treated lesions (ointments, antiseptics...).") }}</p>

								<p>{{ __("Our feet are the final link in a complex chain that enables us to stand, navigate, and walk. To perform these various functions harmoniously, it's essential that they are not subjected to various discomforts themselves. Therefore, pedicure care aims therapeutically to relieve our feet from the numerous pathologies that affect them and limit their functions.") }}</p>


								</div>	<!-- END TEXT BOX -->


							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




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