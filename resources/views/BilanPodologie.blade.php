<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('head')

        <meta name="keywords" content="Podiatry Mauritius, Foot care services, Podologue.mu, Aglaë Provost-Fleury, Foot posture analysis, Podiatric evaluations, Corrective foot care specialist, Mauritius podiatrist"> 
        
        <meta property="og:url" content= "https://podologue.mu/podiatry">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Enhance your well-being with expert podiatric care and posture assessment in Mauritius by Aglaë Provost-Fleury at Podologue.mu. Discover personalized treatments for improved posture and foot health.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Aglaë Provost-Fleury Podiatry Posture Assessment in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | Aglaë Provost-Fleury Podiatry Posture Assessment in Mauritius </title>
        
        <meta name="description" content="Enhance your well-being with expert podiatric care and posture assessment in Mauritius by Aglaë Provost-Fleury at Podologue.mu. Discover personalized treatments for improved posture and foot health.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu/podiatry" />

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
        </style>

		<!--Custom TAB CSS-->

		<style>
				.containertab {
				max-width: auto;
				margin: 10px auto;
				}

				.box {
				box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
				background-color: #fff;
				border-radius: 3px;
				overflow: hidden;
				}

				.tab-list {
				margin: 0;
				padding: 0;
				list-style: none;
				display: flex;
				position: relative;
				}

				
				.tab-list::before {
				content: "";
				display: block;
				height: 2px;
				width: 33.333%;
				position: absolute;
				bottom: 0;
				background-color: #aaa;
				transition: 0.3s;
				}

				.tab-item {
				flex: 1;
				text-align: center;
				transition: 0.3s;
				opacity: 0.5;
				}

				.tab-toggle {
				display: none;
				}

				.tab-content {
				display: none;
				}

				.tab-toggle:nth-child(1):checked ~ .tab-list .tab-item:nth-child(1),
				.tab-toggle:nth-child(2):checked ~ .tab-list .tab-item:nth-child(2),
				.tab-toggle:nth-child(3):checked ~ .tab-list .tab-item:nth-child(3) {
				opacity: 1;
				}

				/* tab bar 底線位移控制 */
				.tab-toggle:nth-child(2):checked ~ .tab-list::before {
				transform: translateX(100%);
				}

				.tab-toggle:nth-child(3):checked ~ .tab-list::before {
				transform: translateX(200%);
				}

				
				.tab-toggle:nth-child(1):checked ~ .tab-container .tab-content:nth-child(1),
				.tab-toggle:nth-child(2):checked ~ .tab-container .tab-content:nth-child(2),
				.tab-toggle:nth-child(3):checked ~ .tab-container .tab-content:nth-child(3) {
				display: block;
				}

				.tab-trigger {
				display: block;
				padding: 10px 0;
				}

				.tab-container {
				padding: 15px 30px;
				}

		</style>



	<body> 




		{{-- <!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div> --}}




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">




			<!-- HEADER
			============================================= -->
			{{-- <header id="header" class="tra-menu navbar-dark inner-page-header white-scroll">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"><img src="images/logo-blue.png" alt="mobile-logo"></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER BLACK LOGO -->
	    					<div class="desktoplogo">
	    						<a href="demo-1.html" class="logo-black"><img src="images/logo-blue.png" alt="logo"></a>
	    					</div>
	    					

	    					<!-- HEADER WHITE LOGO -->
	    					<div class="desktoplogo">
	    						<a href="demo-1.html" class="logo-white"><img src="images/logo-blue-white.png" alt="logo"></a>
	    					</div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-theme">


	        						<!-- DROPDOWN SUB MENU -->
						          	<li aria-haspopup="true"><a href="#" class="h-link">Company <span class="wsarrow"></span></a>
	            						<ul class="sub-menu">
	            							<li aria-haspopup="true"><a href="about.html">About Us</a></li>
	            							<li aria-haspopup="true"><a href="careers.html">Careers <span class="sm-info">4</span></a></li>
	            							<li aria-haspopup="true"><a href="reviews.html">Customers</a></li>
	            							<li aria-haspopup="true"><a href="blog-listing.html">Our Blog</a></li>
	            							<li aria-haspopup="true"><a href="contacts.html">Contact Us</a></li>	
						           		</ul>
								    </li>
								    

								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="projects.html" class="h-link">Case Studies</a></li>


								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="pricing-1.html" class="h-link">Pricing</a></li>


								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="faqs.html" class="h-link">FAQs</a></li>


							    	<!-- SIGN IN LINK -->
							    	<li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
							    		<a href="login-2.html" class="h-link">Sign In</a>
							    	</li>


								    <!-- SIGN UP BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="signup-2.html" class="btn r-04 btn--theme hover--theme last-link">Get Started</a>
								    </li> 


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER --> --}}
            @include('nav')


			
			<!-- SINGLE PROJECT-1
			============================================= -->
			<section id="project-1" class="gr--whitesmoke inner-page-hero single-project">
				<div class="container">
					<div class="row justify-content-center">	


						<!-- PROJECT DISCRIPTION -->
						<div class="col-lg-11 col-xl-10">
							<div class="project-description">


								<!-- PROJECT TITLE -->
								<div class="project-title">
									
									<!-- Title -->	
									<h2 class="s-52 w-700">{{ __("Podiatric assessment") }}</h2>


								</div>	<!-- END PROJECT TITLE -->



								<!-- PROJECT PREVIEW IMAGE  -->
					 			<div class="project-priview-img mb-50">
									<img class="img-fluid r-16" src="podologue.mu/images/projects/etude-globale-de-la-posture.webp" alt="Podiatry Assessment">	
								</div>

								<div class="containertab">
									<div class="box">
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked>
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">

										<ul class="tab-list" style="margin: -9px!important;">
										<li class="tab-item">
											<label class="tab-trigger" for="tab1"><p style="background-color: #269dfc; color:white; border-radius:5px;">{{ __("Specificities") }}</p></label>
										</li>
										<li class="tab-item">
											<label class="tab-trigger" for="tab2"><p style="background-color: #269dfc; color:white; border-radius:5px;">
												{{ __("Sports podiatry") }}</p></label>
										</li>
										<li class="tab-item">
											<label class="tab-trigger" for="tab3"><p style="background-color: #269dfc; color:white; border-radius:5px;">{{ __("Posturology") }}</p></label>
										</li>
										</ul>

										<div class="tab-container">
										<div class="tab-content"><h2>{{ __("Specificities") }}</h2><br>
										<div class="tab-container">
										<ul class="simple-list">

										
											<p>{{ __("The podiatrist, through listening to their patient, evaluating their environment, clinically observing the feet, analyzing the walking technique, and taking footprints, establishes a diagnosis with the aim of identifying the conditions and static and dynamic disorders of the patient.") }}
											</p>

											<p>{{ __("Following this podiatric assessment, and if deemed necessary, the practitioner designs, creates, and adjusts a pair of orthotic insoles. These are devices intended to correct morphological issues of the feet and their impact on the patient's balance (statics), walking, or running (dynamics) through mechanical action.") }}</p>

											<p>{{ __("The insoles aim to restore, by correcting it, the optimal functionality of the foot, particularly with its repercussions on the musculoskeletal system") }}</p>
											<p>{{ __("They are adaptable to your various pairs of shoes, including sandals.") }}</p>
											<img class="img-fluid r-16" src="/podologue.mu/images/semelles.webp" width="375px" height="auto" alt="">
											<hr>



											<p>{{ __("Here are some examples of common pathologies:") }}</p>
											<img class="img-fluid r-16" src="/podologue.mu/images/pathologies-2.webp" alt="">
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
										
										

									

										<h4>{{ __("Management of dizziness") }}</h4>

										<p>{{ __("If you have been experiencing dizziness since a fall or an accident, it is possible that it is due to the displacement of one or more crystals in the inner ear. A specific assessment allows for the diagnosis and rehabilitation of this condition.") }}</p>

										<p style="color: black">{{ __("The podiatrist plays a role in advising, educating, and preventing issues related to hygiene, footwear, walking, and autonomy, all of which have implications for overall quality of life and health.") }}</p>

										</div>
											
										</div>
										<div class="tab-content"><h2>{{ __("Sports podiatry") }}</h2>

											<div class="tab-container">
												<p>{{ __("Athletes... stay vigilant!") }}</p>
												<img class="img-fluid r-16" src="/podologue.mu/images/Podologie-du-sport.webp" alt=""><br>
												<br>
												<p>
													{{ __("Sports amplify all daily constraints.") }}
												</p>
												<p>
													{{ __("Each step creates a shockwave through the contact of the heel with the ground.") }}
												</p>

												<p>
													{{ __("Like a real earthquake, it is transmitted to all our joints, with decreasing force from the heel to the skull.") }}
												</p>

												<p>
													{{ __("This phenomenon of a resonance chamber explains all the resulting pathologies such as joint, muscular, and bone pains.") }}
												</p>

												<p>{{ __("So, my friends, pay attention to your body. The first thing to do is to drink, drink, and drink... water, of course!") }}</p>

												<p>{{ __("Your body is made up of 60% water, so indulge in it!") }}</p>
												<p>
													{{ __("Your joints are like cushions, absorbing all the constraints, thanks in particular to synovial fluid (the capsule containing synovial fluid that allows joints to move smoothly).") }} 
												</p>
												<p>
													{{ __("Excessive pressures at close intervals can lead to premature osteoarthritis: this condition is always painful and often forces a halt to physical activity.") }}
												</p>

												<p>{{ __("Unfortunately, effective current treatments are only performed through surgery or joint debridement.") }}</p>

												<h4>{{ __("From a normal joint to osteoarthritis.") }}</h4>

												<img class="img-fluid r-16" src="/podologue.mu/images/arthrose.webp" width="375px" height="auto" alt=""><br>
												<br>
												<p>
													{{ __("Your muscles and ligaments are, in turn, like true elastic bands, more or less stretchable depending on the individuals: nature can be tough and sometimes not very generous! They feed directly on water and oxygen, and I emphasize the latter.") }}

												</p>

												<p>
													{{ __("All athletes will tell you, water is absolutely essential for your muscles and even constitutes the first treatment for your ailments. It would be a shame to deprive yourself of such a remedy.") }}
												</p>

												<p>
													{{ __("But let's not forget warm-ups and stretches, which also alleviate many conditions.") }}

												</p>
												<img class="img-fluid r-16" src="/podologue.mu/images/os-podologie.webp" width="375px" height="auto" alt=""><br>
												<br>

												<p>{{ __("As for your bones, poor things... you take about 8777 steps per day, for a moderately active person, with a shockwave multiplied depending on your sport and the terrain on which it is practiced.") }}</p>
												<p>
													{{ __("It is not uncommon, when practicing a sport, and even quite frequent, to develop specific pathologies (aside from traumatic accidents like fractures), such as:") }}
												</p>
												<ul class="simple-list">
													<li>{{ __("shin splints (inflammation of the periosteum, the membrane surrounding the bone).") }}</li>
													<li>{{ __("Sever's disease (inflammatory heel pain in adolescents).") }}</li>
													<li>{{ __("Osgood-Schlatter disease (pain in the knee affecting adolescent athletes).") }}</li>
													<li>{{ __("Stress fractures (beginning with a crack and localized pain during sports activities, inevitably leading to a full-fledged fracture if the intensity is maintained).") }}</li>
												</ul>

												<img class="img-fluid r-16" src="/podologue.mu/images/Osgood-Schlatter-disease.webp" width="375px" height="auto" alt=""><br>
												<br>
												<p>
													{{ __("My advice if you fall into the athlete category") }}
												</p>
												<p>
													{{ __("Regardless of your sport, remember to seek the advice of your healthcare professionals: physiotherapist, osteopath, podiatrist") }}
												</p>
												<p>
													{{ __("Indeed, they will identify, if any, the risk factors leading to the onset of these pathologies. They will not be misled by the tricks that your body may use to compensate for certain deficiencies.") }}

												</p>

												<p>
													{{ __("Thus, poor posture is most often concealed through a very clever adaptation of your body, giving you the illusion of being the fortunate owner of a healthy body.") }}
												</p>

												<p>
													{{ __("Believe in our experience, a consultation will teach you a lot about yourself and how your body functions.") }}
												</p>
												<p>
													{{ __("It will also enable you to go further in your sports endeavors and be more ambitious.") }}
												</p>
												<p>
													{{ __("Take care of yourself, your body will thank you!") }}
												</p>
											</div>

										</div>



										<div class="tab-content">
											<h2>{{ __("Posturology") }}</h2>
											<br>
											
											<img class="img-fluid r-16" src="/podologue.mu/images/posturologie-et-podologie-de-lenfants.webp" width="530px" height="645px" alt=""><br>
											<br>
											<p>
												{{ __("Posturology is the study of the mechanisms involved in balance control and its dysfunctions. Indeed, far from being an anatomical given, maintaining an upright posture represents a true neurophysiological feat for humans.") }}

											</p>

											<p>
												{{ __("To achieve this, humans have developed a postural regulation system that allows them to stand upright despite external constraints, orient themselves in space, and adjust their movements precisely. At every moment, this system ensures that the adopted posture is as close as possible to an ideal reference posture, economical in energy, and perfectly symmetrical in terms of muscle contractions.") }}

											</p>

											<p>
												{{ __("A poor posture, regardless of its origin, is therefore more energy-intensive and inevitably leads to unnecessary, asymmetric, and often painful muscle contractions.") }}
											</p>

											<h4>{{ __("Principles of operation:") }} </h4>

											<p>
												{{ __("The postural regulation system utilizes information transmitted by numerous sensors located throughout the body to inform the brain about the nature of the environment and enable it to adjust the work of each muscle, ensuring that standing or walking occurs under optimal conditions. In this complex system, the eye and the foot are major entry points for postural regulation.") }}

											</p>

											<p>
												{{ __("A misalignment of the foot (valgus, varus, etc.) or a slight ocular deviation will create an imbalance in the postural muscle chains and, consequently, a modification of posture (shoulder rotation, pelvic tilt, etc.). Numerous pathologies (lower back pain, neck pain, joint and muscle discomfort, headaches, dizziness, etc.) will then emerge as a consequence and not the cause of poor posture.") }}

											</p>

											<h4>{{ __("Role of the foot in postural regulation") }}</h4>
											<p>
												{{ __("The skin on the sole of the foot contains sensors sensitive to pressures on the order of micrograms. Their function is to inform the brain about the nature of the ground (hard, soft, even, rough, etc.) and the overall position of the body in space. For example, if the sensors under the forefoot are compressed, the brain will interpret this information as a forward fall and will mobilize the appropriate muscle groups to return to a balanced position.") }}

											</p>
											<h4>
												{{ __("Role of the podiatrist in postural treatment:") }}
											</h4>
											<p>
												{{ __("The main objective of the podiatrist, after a thorough analysis of the patient's static posture (too forward, too much to the right, pelvic tilt, tilted head, etc.), is to restore a position close to absolute verticality (postural invariant).") }}
											</p>

											<p>
												{{ __("This postural reprogramming is achieved through the use of so-called posture insoles. These are custom-made orthotic insoles with elements not exceeding 3 mm in thickness.") }}

											</p>

											<p>
												{{ __("These thin wedges act as sensorial lures, stimulating the pressure sensors beneath them and instructing the brain to adjust muscle tone in accordance with the received stimulations.") }}
											</p>

											<p>
												{{ __("The choice of stimulation wedges helps rebalance muscle contractions to recenter the patient. This way, the patient adopts a new posture that is more comfortable and free from unnecessary contractions.") }}
											</p>

											<p>
												{{ __("However, achieving a perfect posture can only be attained when the various organs that make up the postural regulation system are functioning perfectly. That's why it is not uncommon for the podiatrist, after the clinical examination, to refer the patient to an ophthalmologist, a dentist, or an osteopath.") }}
											</p>

											<p>{{ __("Sources: Bernard Bricot's Global Postural Reprogramming / Philippe and Sylvie Villeneuve's API") }}</p>

										</div>
										</div>
									</div>
								</div>



						</div>	<!-- END PROJECT DISCRIPTION -->
					</div>

					</div>	  <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END SINGLE PROJECT-1 -->




			<!-- BANNER-6
			============================================= -->

            <section id="banner-3" class="pt-100 banner-section">
				<div class="container">


					<!-- BANNER-3 WRAPPER -->
					<div class="banner-3-wrapper bg--03 bg--scroll r-16">
						<div class="banner-overlay">
							<div class="row">


								<!-- BANNER-3 TEXT -->
								<div class="col">
									<div class="banner-3-txt color--white">

										<!-- Title -->	
										<h5 class="s-48 w-700">{{__("Book an Appointment")}}</h5>

										<!-- Text -->
										<p class="p-xl">{{__("The podiatry and pedicure clinic is now located at Emdemika Business Park 2, in Petit Raffray, for various treatments.")}}
											</p>

										<!-- Button -->
										<a href="/login" class="btn r-04 btn--theme hover--tra-white">{{__("Schedule Now")}}</a>

										<!-- Button Text -->
										<p class="p-sm btn-txt ico-15">
											<span class="flaticon-check"></span> {{__("Schedule an appointment according to your availability!")}}
										</p>

									</div>
								</div>	<!-- END BANNER-3 TEXT -->


							</div>   <!-- End row -->	
						</div>   <!-- End banner overlay -->	
					</div>    <!-- END BANNER-3 WRAPPER -->


				</div>     <!-- End container -->	
			</section>



            @include('footer')



		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="podologue.mu/js/jquery-3.7.0.min.js"></script>
		<script src="podologue.mu/js/bootstrap.min.js"></script>	
		{{-- <script src="podologue.mu/js/modernizr.custom.js"></script>
		<script src="podologue.mu/js/jquery.easing.js"></script>
		<script src="podologue.mu/js/jquery.appear.js"></script> --}}
		<script src="podologue.mu/js/menu.js"></script>
		{{-- <script src="podologue.mu/js/owl.carousel.min.js"></script>
		<script src="podologue.mu/js/pricing-toggle.js"></script>
		<script src="podologue.mu/js/jquery.magnific-popup.min.js"></script>
		<script src="podologue.mu/js/request-form.js"></script>	
		<script src="podologue.mu/js/jquery.validate.min.js"></script>
		<script src="podologue.mu/js/jquery.ajaxchimp.min.js"></script>	
		<script src="podologue.mu/js/popper.min.js"></script>
		<script src="podologue.mu/js/lunar.js"></script>
		<script src="podologue.mu/js/wow.js"></script> --}}
				
		<!-- Custom Script -->		
		<script src="podologue.mu/js/custom.js"></script>




	</body>




</html>