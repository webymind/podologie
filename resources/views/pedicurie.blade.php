<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@include('head')

        <meta name="keywords" content="Medical pedicure Mauritius, Podologue.mu,Aglaë Provost-Fleury, Foot health specialist, Podiatric pedicure, Foot care services, Mauritius podiatrist, Professional pedicure treatments"> 
        
        <meta property="og:url" content= "https://podologue.mu/pedicure">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Experience specialized medical pedicure services in Mauritius with Aglaë Provost-Fleury at Podologue.mu. Discover personalized foot care for enhanced comfort and well-being.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Aglaë Provost-Fleury Medical Pedicure in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | Aglaë Provost-Fleury Medical Pedicure in Mauritius </title>
        
        <meta name="description" content="Experience specialized medical pedicure services in Mauritius with Aglaë Provost-Fleury at Podologue.mu. Discover personalized foot care for enhanced comfort and well-being.">  
        
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

		{{-- <!--Custom TAB CSS-->

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
				.tab-toggle:nth-child(3):checked ~ .tab-list .tab-item:nth-child(3),
				.tab-toggle:nth-child(4):checked ~ .tab-list .tab-item:nth-child(4) {
				opacity: 1;
				}

				
				.tab-toggle:nth-child(2):checked ~ .tab-list::before {
				transform: translateX(100%);
				}

				.tab-toggle:nth-child(3):checked ~ .tab-list::before {
				transform: translateX(200%);
				}

				.tab-toggle:nth-child(4):checked ~ .tab-list::before {
				transform: translateX(200%);
				}
				
				.tab-toggle:nth-child(1):checked ~ .tab-container .tab-content:nth-child(1),
				.tab-toggle:nth-child(2):checked ~ .tab-container .tab-content:nth-child(2),
				.tab-toggle:nth-child(3):checked ~ .tab-container .tab-content:nth-child(3),
				.tab-toggle:nth-child(4):checked ~ .tab-container .tab-content:nth-child(4) {
				display: block;
				}

				.tab-trigger {
				display: block;
				padding: 10px 0;
				}

				.tab-container {
				padding: 15px 30px;
				}

		</style>			    --}}






	<body> 




		<!-- PRELOADER SPINNER
		============================================= -->	
		{{-- <div id="loading" class="loading--theme">
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
				    	<span class="smllogo"><img src="podologue.mu/images/logo-blue.png" alt="mobile-logo"></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER BLACK LOGO -->
	    					<div class="desktoplogo">
	    						<a href="demo-1.html" class="logo-black"><img src="podologue.mu/images/logo-blue.png" alt="logo"></a>
	    					</div>
	    					

	    					<!-- HEADER WHITE LOGO -->
	    					<div class="desktoplogo">
	    						<a href="demo-1.html" class="logo-white"><img src="podologue.mu/images/logo-blue-white.png" alt="logo"></a>
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
			{{-- <section id="project-1" class="gr--whitesmoke inner-page-hero single-project">
				<div class="container">
					<div class="row justify-content-center">	


						<!-- PROJECT DISCRIPTION -->
						<div class="col-lg-11 col-xl-10">
							<div class="project-description">


								<!-- PROJECT TITLE -->
								<div class="project-title">
									
									<!-- Title -->	
									<h2 class="s-52 w-700">{{ __("Medical Pedicure") }}</h2>
								</div>
								<!-- END PROJECT TITLE -->


								<!-- PROJECT PREVIEW IMAGE  -->

								<div class="containertab">
									<div class="box">
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked>
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">
										<input type="radio" class="tab-toggle" name="tab-toggle" id="tab4">

										<ul class="tab-list" style="margin: -9px!important;">
										<li class="tab-item">
											<label class="tab-trigger" for="tab1"><p style="background-color: #269dfc; color:white; border-radius:5px;">{{ __("Specificities") }}</p></<label>
										</li>
										<li class="tab-item">
											<label class="tab-trigger" for="tab2"><p style="background-color: #269dfc; color:white; border-radius:5px;">{{ __("Diabetic Foot") }}
											</p></label>
										</li>
										<li class="tab-item">
											<label class="tab-trigger" for="tab3"><p style="background-color: #269dfc; color:white; border-radius:5px;">{{ __("Plantar Wart") }}</p></label>
										</li>
										<li class="tab-item">
											<label class="tab-trigger" for="tab4"><p style="background-color: #269dfc; color:white; border-radius:5px;">Ortho et Onycho</p></label>
										</li>
										
										</ul>

										<div class="tab-container">
										<div class="tab-content"><h2>{{ __("Specificities") }}</h2><br>
										<div class="tab-container">
										<ul class="simple-list">
					 			<div class="project-priview-img mb-50">
									<img class="img-fluid r-16" src="podologue.mu/images/podologue-pedicurie-medicale.webp" alt="Medical Pedicure">	
								</div>

								<p>{{ __("Our feet are often the last priority. Yet, neglecting them is a continual source of minor (and major) pains, such as backache, heavy legs... that disrupt our daily life. It's essential to regularly care for them.") }}</p>

								<p>{{ __("A pedicure treatment allows for the curative or preventive treatment of all skin and nail conditions, thus relieving the pains or discomfort caused by corns, calluses, ingrown nails, fungal infections, warts, cracks...") }}</p>

									<img class="img-fluid r-16" src="podologue.mu/images/fissure-crevasse.webp" alt="">	
									<br><br>

								<p>{{ __("The treatments are provided in suitable hygienic conditions (sterilization of instruments and single-use blades).") }}</p>

								<p>{{ __("At the end of the consultation, the podiatrist may prescribe certain external-use medications to ensure the therapeutic follow-up of treated lesions (ointments, antiseptics...).") }}</p>

								<p>{{ __("Our feet are the final link in a complex chain that enables us to stand, navigate, and walk. To perform these various functions harmoniously, it's essential that they are not subjected to various discomforts themselves. Therefore, pedicure care aims therapeutically to relieve our feet from the numerous pathologies that affect them and limit their functions.") }}</p>

										</ul>


										</div>
											
										</div>

										<div class="tab-content"><h2>{{ __("The Diabetic Foot") }}</h2>

											<div class="tab-container">
												<p>{{ __("DIABETES, a chronic condition affecting an increasing number of people, highlights the crucial role of podiatrists.") }}</p>

												<p>{{ __("The foot is the primary site of complications resulting from this disease, as 90% of hospitalized diabetic patients are admitted to treat a foot condition.") }}</p>

												<p>{{ __("Diabetes can lead to neuropathic disorders (loss of sensitivity), arteriopathic issues (poor circulation of arterial blood), and serious podiatric complications.") }}</p>

												<p>{{ __("Management by a podiatrist allows for the grading of podiatric risk, curative care, patient education, assessment of footwear, and the implementation of orthotic treatment (insoles) if necessary.") }}</p>

												<h4>{{ __("Good practices to take care of your feet.") }}</h4>

												<ul class="simple-list">
													<li class="list-items">
														{{ __("Wash your feet with lukewarm water and mild soap.") }}
													</li>

													<li>
														{{ __("Apply a fragrance-free moisturizing cream daily, avoiding application between the toes.") }}
													</li>

													<li>
														{{ __("Wear clean and soft socks made of cotton or wool.") }}
													</li>

													<li>
														{{ __("Trim and file nails square-shaped, preferably after a shower when they are softer.") }}
													</li>

													<li>
														{{ __("Thoroughly dry your feet.") }}
													</li>

													<li>
														{{ __("Avoid walking barefoot.") }}
													</li>

													<li>
														{{ __("Avoid wearing heels or sandals, and opt for comfortable shoes. Run your hand inside shoes before wearing them.") }}
													</li>

													<li>
														{{ __("Inspect your feet daily to spot any wounds, bruises, redness, or unusual discoloration.") }}
													</li>

												</ul><br>

												<p>{{ __("To delve further...") }}</p>

												<P>{{ __("Diabetic Gradation:") }}</P>
												<ul  class="simple-list">
													<li class="list-items">{{ __("Grade 0: No sensitive neuropathy.") }}</li>
													<li>{{ __("Grade 1: Isolated sensitive neuropathy.") }}</li>
													<li>{{ __("Grade 2: Sensitive neuropathy associated with lower limb arteriopathy and/or foot deformity.") }}</li>
													<li>{{ __("Grade 3: History of ulceration or amputation.") }}</li>
												</ul>

												<br>

												<p>{{ __("10 to 15% of diabetic patients still have to undergo amputation today when all therapeutic interventions have failed to halt the devastating effects of this disease.") }}</p>

												<p>{{ __("It is therefore crucial to continue individual prevention efforts, which offer the best chance to optimize the quality of life for patients, alongside fundamental research on the disease itself.") }}</p>

												<h5>{{ __("I. General Complications of Diabetes") }}</h5>

												<p>{{ __("The metabolic changes caused by diabetes schematically generate three major types of complications:") }}</p>

												<h6>{{ __("Neurological Complications") }}</h6>

												<p>{{ __("The involvement of peripheral nerves causes sensory and motor deficits, primarily affecting the nerves of the lower limbs (legs), with a distal predominance. The severity of nerve damage increases as it approaches the extremities.") }}</p>

												<h6>{{ __("Vascular Complications") }}</h6>

												<p>{{ __("Cholesterol deposits lead to a gradual blockage of large arterial trunks (macroangiopathy) as well as damage to small vessels (microangiopathy). Both phenomena cause arteritis predominantly in the lower limbs and impaired healing. Skin lesions heal poorly, creating potential entry points for germs responsible for infectious diseases.") }}</p>

												<h6>{{ __("Infectious Complications") }}</h6>

												<p>{{ __("The immune system of diabetic patients is weakened. Diabetics are more susceptible to bacterial infections and are also more vulnerable to skin and nail fungal infections. Furthermore, observed metabolic alterations reduce the effectiveness of antibiotic and antifungal treatments in these patients.") }}</p>

												<h5>{{ __("II. Impact of these Complications on the Foot") }}</h5>
													<br>
												<h6>{{ __("Consequences of Neurological Impairments") }}</h6>

												<p>{{ __("The vast majority of pathologies encountered on the diabetic foot originate from neurological impairments. Two types of lesions in the nervous system should be distinguished:") }}</p>

												<h5>{{ __("1. Sensory-Motor Impairments") }}</h5>

													<p>{{ __("These impairments of peripheral nerves, primarily affecting the lower limbs, constitute diabetic neuropathy, mainly of the polyneuritis type, leading to motor and sensory disorders") }}</p>

													<p>{{ __("Sensory issues manifest as a gradual impairment of various forms of sensitivity. This includes, to varying degrees, deficits in touch perception, pain, paresthesia, or hypoesthesia. Sensitivity disturbances are also observed.") }}</p>

												<p>{{ __("The onset of these sensory issues is often formidable because the foot, no longer well-informed about external threats or spatial parameters necessary for the fine adjustments required by the complex action of walking, is more susceptible to traumatic risks. This is especially dangerous in diabetics due to their impaired healing and vulnerability to infections.") }}</p>

												<h5>{{ __("2. Neurovegetative Impairments:") }}</h5>

												<p>{{ __("At the foot level, the vegetative nervous system (VNS), conveyed by motor and sensory nerves, is also affected by the disease.") }}</p>

												<p>{{ __("Instead of evenly distributing arterial blood between the bone structure and the skin, it will favor the vascularization of skin tissues at the expense of the skeleton. This dysfunction leads to a disruption of the bone apposition/resorption system, responsible for diabetic arthropathies.") }}</p>

												<h5>{{ __("3. Osteoarticular and Cutaneous Impairments Induced by Neurological Degeneration:") }}</h5>
													<br>
												<h6>{{ __("Diabetic Arthropathies") }}</h6>

												<p>{{ __("The foot is particularly affected by this process of bone resorption, as it is maximal in the instep (tarsus) and the big toe, both vital for walking. The joints become red, swollen, and warm but are never painful. These are referred to as pseudo-inflammatory conditions.") }}</p>

												<p>{{ __("Subsequently, deformities such as the collapse of the plantar arch due to tarsal involvement or toe dislocations (Charcot's foot) may occur.") }}</p>

												<h5>{{ __("Radiological Signs:") }}</h5>

												<p>{{ __("Identification of areas of osteoporosis and bone lysis, as well as images of bone formations (osteophytes) such as heel spurs because resorption is associated with the construction of aberrant structures on the margins of any functionality.") }}</p>

												<img class="img-fluid r-16" src="podologue.mu/images/foot-print.webp" alt="Le Pied Diabétique">	
												<br>
												<h6>{{ __("Cutaneous Consequences of Neurological and Osteoarticular Impairments on the Foot") }}</h6>
												<br>
												<p>{{ __("The various bone deformities will alter the shape of the foot and the uniformity of its plantar supports. Pathological walking pressures will emerge, leading to the formation of calloused areas (hyperkeratosis) in areas of higher pressure. The lack of pain sensitivity often present at this stage of the disease, along with a lack of prevention, is often responsible for the transformation of these calluses into plantar ulcers.") }}</p>

												<p>{{ __("In the absence of prompt intervention, these skin lesions progress towards chronicity as healing does not occur, and osteitis (skeletal involvement) is often a concern.") }}</p>

												<p>{{ __("Blisters that may appear due to friction with shoes, though seemingly common, should be promptly treated under good aseptic conditions. They pose a risk of infection with the known dramatic consequences in a diabetic context.") }}</p>

												<p>{{ __("Most of these pathologies occur at a stage of diabetic disease where the patient does not experience painful symptoms and, if not educated by healthcare professionals, may overlook a benign lesion that could ultimately have catastrophic effects. Simple yet rigorous care at the onset would have been sufficient for treatment.") }}</p>

												<h6>{{ __("Consequences of Arterial, Osteoarticular, and Cutaneous Disorders") }}</h6>

												<p>{{ __("Associated Cutaneous Lesions:") }}</p>

												<p>{{ __("These severe lesions are caused by ischemic involvement of the arteries in the lower limbs, within the context of diabetic macroangiopathy. They result in a reduction of arterial blood flow to the foot, with a decrease or abolition of arterial pulses and cooling of the skin. Eventually, ulcers may occur, leading to toe necrosis and sometimes complicated by gangrene.") }}</p>

												<img class="img-fluid r-16" src="podologue.mu/images/diab.webp" alt="Pied Diabétique-podologue.mu">	
												<br>
												<br>
												<p>{{ __("Other Cutaneous Infections") }}</p>
												<ul  class="simple-list">
													<li class="list-items"> {{ __("Superinfected Fissures") }}

													</li>

													<li>
														 {{ __("Fungal Infections.") }}
													</li>
												</ul>

												<p>{{ __("The cutaneous, immune, and vascular alterations in diabetes also contribute to the development of fungal infections, manifesting as infections in the toes or interdigital spaces. It is crucial to emphasize the need for rigorous treatment, bearing in mind that the healing process may take longer than in a non-diabetic individual.") }}</p>

												<p>{{ __("The diabetic foot is fragile, constantly at risk, and can lead to complications in the vascular, neurological, skeletal, and cutaneous aspects, with dramatic consequences for the patient's autonomy and survival.") }}</p>

												<p>
													{{ __("Regular monitoring and effective prevention fortunately help avoid many troubles. The foot plays a major role in the quality of life and health of a diabetic.") }}
												</p>

												<p>
													{{ __("This subject is the epitome of the need to inform for better prevention and to prevent better for better relief.") }}

												</p>


												<img class="img-fluid r-16" src="podologue.mu/images/prendre-soin-de-vos-pieds.webp" alt="prendre-soin-de-vos-pied-podologue.mu">	
												<br>

											</div>

										</div>



										<div class="tab-content">
											<h2>{{ __("Plantar Wart") }}</h2>
											<br>
											<p>{{ __("Warts are small benign tumors of infectious or viral origin. Highly contagious and self-inoculable, they are often painful as they develop in areas of pressure points (heel, forefoot, toes).") }}</p>

											<h5>{{ __("What are the factors that favor their development?") }}</h5>
											<br>
											<h6>{{ __("The environment") }}</h6>

											<p>{{ __("Wet environments, such as swimming pools or changing rooms, are conducive to their transmission because they allow the dilation of skin pores. Warts can thus embed more easily in the dermis and develop at its expense.") }}</p>

											<h6>{{ __("The patient") }}</h6>

											<p>{{ __("Children, whose immune system is not fully developed, are particularly receptive. It is estimated that one in two children will have one at some point.") }}</p>

											<p>{{ __("In adults, warts develop more difficultly and affect an average of one in five people. However, certain factors favor their appearance (immunodeficiency, fatigue, stress, lack of magnesium).") }}</p>

											<h5>{{ __("How to recognize them and what are the treatments?") }}</h5>

											<p>{{ __("There are around a hundred different viruses, so warts can have many appearances.") }}</p>

											<p>{{ __("Frequently, however, two types are encountered:") }}</p>

											<ul class="simple-list">

												<li class="list-items">
													{{ __("Punctate warts, known as myrmecia.") }}
												</li>
											</ul>
												<p>{{ __("In the form of a nail, they penetrate deeply into the skin and can be very painful. Often confused with plantar calluses, their size varies from a few millimeters to 1 cm.") }}</p>

												<ul  class="simple-list">
													<li class="list-items">
														{{ __("Mosaic warts.") }}
													</li>
												</ul>

												<p>{{ __("It is a group of warts located on the plantar surface of the foot. Shallow and covered with a layer of dead skin, they are often not very painful and can be confused with calluses.") }}</p>

												<p>{{ __("In children, warts often disappear spontaneously after a few months. In adults, spontaneous disappearances are less frequent but can occur following the treatment of predisposing factors.") }}</p>

												<p>{{ __("In any case, the risk of self-contamination, contagion, and pain necessitate therapeutic intervention as soon as they are diagnosed.") }}</p>
												<p>
													{{ __("Various local treatments (nitrogen, glycolic acid) are generally very effective if applied regularly until the wart completely disappears. Therefore, professional healthcare intervention (podiatrist, doctor) is often recommended.") }}

												</p>

												<p>
													{{ __("I suggest treating plantar warts with the application of a wart-removing solution, reserved for professionals.") }}
												</p>
												<p>{{ __("This wart remover does not have a keratolytic action. It is composed of pure glycolic acid, making it highly effective.") }}</p>
												<p>
													{{ __("It is an Alpha-Hydroxy Acid with the essential characteristic of its action on inter-corneocyte ionic bonds. By breaking down these bonds, this wart remover penetrates more easily and deeply. In a metaphorical sense, a keratolytic (as well as cryotherapy techniques) violently destroys all the bricks of the cell wall, while the one used in the clinic only detaches the bricks to be removed without destroying the rest of the cell wall.") }}
												</p>

												<p>
													{{ __("This treatment usually takes effect between 2 to 6 applications, typically with one application per session each week. By targeting only the wart, this wart remover allows for faster and higher-quality healing.") }}

												</p>
										</div>

										<div class="tab-content">
											<h2>{{ __("Orthonyxies & Onychoplasty") }}</h2>
											<br>
											
											<h5>{{ __("What is orthonyxy?") }}</h5>
											<br>
											<p>{{ __("Orthonyxy is a treatment involving nail orthosis provided by a podiatrist. Its objectives are:") }}</p>
											<ul>
												<li>{{ __("Correct an abnormal growth or curvature of the nail.") }}</li>
												<li>{{ __("Treat a chronic conflict between the nail and its groove (ingrown nail or recurrent periungual corns). The placement of this nail orthosis is done prior to a podiatry treatment. Its installation and wearing are painless.") }}</li>
											</ul>
											<br>

												<img class="img-fluid r-16" src="podologue.mu/images/ortho.webp" width="375px" height="auto" alt="Orthonyxies">	
												<br><br>
											<h5>{{ __("In which cases to use orthonyxie?") }}</h5>

											<p>{{ __("This treatment can be implemented for individuals experiencing deformation or improper regrowth of a nail, which can lead to painful conditions such as periungual corns, embedded or recurrent ingrown nails.") }}</p>

											<p>{{ __("The main dysmorphies encountered:") }}</p>
											<img class="img-fluid r-16" src="podologue.mu/images/orthony.webp" alt="l’orthonyxie">

											<hr>

											<h5>{{ __("What is onychoplasty?") }}</h5>

											<p>{{ __("Onychoplasty is a nail prosthesis. It is custom-made by a podiatrist. The prosthesis is applied to the remaining nail and fills the empty space with the aim of protecting the nail until complete regrowth. It involves the partial or total reconstruction of the nail using medical resin. Its application is painless.") }}</p>

											<p>{{ __("Onychoplasty is recommended, for example:") }}</p>
											<ul class="simple-list">
												<li class="list-items">{{ __("Following a detachment of the nail, which can occur due to various impacts during sports activities or in daily life.") }}</li>

												<li>{{ __("In the event of an accident that has deformed the nail matrix.") }}</li>

												<li>{{ __("A deviation of the nail.") }}</li>
												<br>
												<img class="img-fluid r-16" src="podologue.mu/images/onychro.webp" width="375px" height="auto" alt="Onychoplastie-podologue.mu">
												<br>
											</ul>
										</div>

										
										</div>

									</div>
								</div>							



							</div>
						</div>	<!-- END PROJECT DISCRIPTION -->


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END SINGLE PROJECT-1 --> --}}

			<section class="ct-01 inner-page-hero content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->	
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-md-6 order-last order-md-2">
							<div class="txt-block left-column wow fadeInRight">

								<!-- Section ID -->	
						 		<span class="section-id">{{ __("Medical Pedicure") }}</span>

								<!-- Title -->	
								<h2 class="s-46 w-700">{{ __("Specificities") }}</h2>

								<!-- Text -->	
								<p>{{ __("Our feet are often the last priority. Yet, neglecting them is a continual source of minor (and major) pains, such as backache, heavy legs... that disrupt our daily life. It's essential to regularly care for them.") }}</p>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
								<p>{{ __("A pedicure treatment allows for the curative or preventive treatment of all skin and nail conditions, thus relieving the pains or discomfort caused by corns, calluses, ingrown nails, fungal infections, warts, cracks...") }}</p>
									</li>

									<li class="list-item">
										<p>{{ __("The treatments are provided in suitable hygienic conditions (sterilization of instruments and single-use blades).") }}</p>

										<p>{{ __("At the end of the consultation, the podiatrist may prescribe certain external-use medications to ensure the therapeutic follow-up of treated lesions (ointments, antiseptics...).") }}</p>

										<p>{{ __("Our feet are the final link in a complex chain that enables us to stand, navigate, and walk. To perform these various functions harmoniously, it's essential that they are not subjected to various discomforts themselves. Therefore, pedicure care aims therapeutically to relieve our feet from the numerous pathologies that affect them and limit their functions.") }}</p>

									</li>

								</ul>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block right-column wow fadeInLeft">
								<img class="img-fluid" src="podologue.mu/images/fissure-crevasse.webp" alt="content-image">
							</div>
						</div>


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>			



			<!-- BANNER-6
			============================================= -->
			{{-- <section id="banner-6" class="bg--05 bg--scroll banner-section">
				<div class="banner-overlay pt-80 pb-90">
					<div class="container">


						<!-- BANNER-6 WRAPPER -->
						<div class="banner-6-wrapper">
							<div class="row justify-content-center">


								<!-- BANNER-6 TEXT -->
								<div class="col-md-9">
									<div class="banner-6-txt text-center color--white">

										<!-- Title -->	
										<h3 class="s-46 w-700">Give it a try, it's free!</h3>

										<!-- Text -->
										<p class="p-xl o-85">It only takes a few clicks to get started</p>

										<!-- Button -->
										<a href="#" class="btn r-04 btn--theme hover--tra-white" data-bs-toggle="modal" data-bs-target="#modal-3">Get srarted - it's free</a>

										<!-- Button Text -->
										<p class="p-sm btn-txt ico-15 o-85">
											<span class="flaticon-check"></span> Free for 14 days, no credit card required.
										</p>

									</div>
								</div>	<!-- END BANNER-6 TEXT -->


							</div>   <!-- End row -->	
						</div>    <!-- END BANNER-6 WRAPPER -->


					</div>    <!-- End container -->	
				</div>     <!-- End banner overlay -->	
			</section>	<!-- END BANNER-6 --> --}}
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




			<!-- MODAL WINDOW (REQUEST FORM)
			============================================= -->
			{{-- <div id="modal-3" class="modal auto-off fade" tabindex="-1" role="dialog" aria-labelledby="modal-3">
				 <div class="modal-dialog modal-xl modal-dialog-centered">
			        <div class="modal-content">


			        	<!-- CLOSE BUTTON -->
			            <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
			            	<span class="flaticon-cancel"></span>
			            </button>


			            <!-- MODAL CONTENT -->
			            <div class="modal-body">
			            	<div class="container">
                  				 <div class="row">


                  				 	<!-- BACKGROUND IMAGE -->
                  				 	<div class="col-md-5 bg-img d-none d-sm-flex align-items-end"></div>


                  				 	<!-- REQUEST FORM -->
                  				 	<div class="col-md-7">
                  				 		<div class="modal-body-content">

                  				 			<!-- TEXT -->
                  				 			<div class="request-form-title">

		                  				 		<!-- Title 	-->	
												<h3 class="s-28 w-700">Get started for Free!</h3>	

												<!-- Text -->
												<p class="color--grey">Aliquam augue suscipit, luctus neque purus ipsum 
												   neque dolor primis libero
												</p>

											</div>
	                  				 		
											<!-- FORM -->	
	                  				 		<form name="requestForm" class="row request-form">
							                                            
								                <!-- Form Input -->
								                <div class="col-md-12">
								                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" autocomplete="off" required> 
								                </div>
								                     
								                <!-- Form Input -->       
								                <div class="col-md-12">
								                	<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" autocomplete="off" required> 
								                </div>

								                <!-- Form Button -->
								                <div class="col-md-12 form-btn">  
								                	<button type="submit" class="btn btn--theme hover--theme submit">Get Started Now</button>
								                </div>
								                                                              
								                <!-- Form Message -->
								                <div class="col-md-12 request-form-msg">
								                	<span class="loading"></span>
								                </div>   
								                                              
								            </form>	<!-- END FORM -->		

								        </div>
                  				 	</div>	<!-- END REQUEST FORM -->
		            		

                  				 </div>
                  			</div>
			            </div>	<!-- END MODAL CONTENT -->


					 </div>
			    </div>
			</div>	<!-- MODAL WINDOW (REQUEST FORM) --> --}}




			<!-- FOOTER-3
			============================================= -->
			{{-- <footer id="footer-3" class="pt-100 footer">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER LOGO -->
						<div class="col-xl-3">
							<div class="footer-info">
								<img class="footer-logo" src="podologue.mu/images/logo-blue.png" alt="footer-logo">
							</div>	
						</div>	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-3 col-xl-2">
							<div class="footer-links fl-1">
							
								<!-- Title -->
								<h6 class="s-17 w-700">Company</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="about.html">About Us</a></p></li>
									<li><p><a href="careers.html">Careers</a></p></li>	
									<li><p><a href="blog-listing.html">Our Blog</a></p></li>							
									<li><p><a href="contacts.html">Contact Us</a></p></li>			
								</ul>

							</div>
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-3 col-xl-2">
							<div class="footer-links fl-2">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Product</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="features.html">Integration</a></p></li>
									<li><p><a href="reviews.html">Customers</a></p></li>	
									<li><p><a href="pricing-1.html">Pricing</a></p></li>	
									<li><p><a href="help-center.html">Help Center</a></p></li>			
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-3 col-xl-2">
							<div class="footer-links fl-3">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Legal</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="terms.html">Terms of Use</a></p></li>										
									<li><p><a href="privacy.html">Privacy Policy</a></p></li>
									<li><p><a href="cookies.html">Cookie Policy</a></p></li>
									<li><p><a href="#">Site Map</a></p></li>
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER LINKS -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-links fl-4">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Connect With Us</h6>

								<!-- Mail Link -->
								<p class="footer-mail-link ico-25">
									<a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a>
								</p>

								<!-- Social Links -->	
								<ul class="footer-socials ico-25 text-center clearfix">		
									<li><a href="#"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#"><span class="flaticon-twitter"></span></a></li>
									<li><a href="#"><span class="flaticon-github"></span></a></li>
									<li><a href="#"><span class="flaticon-dribbble"></span></a></li>
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


					</div>	<!-- END FOOTER CONTENT -->


					<hr>	<!-- FOOTER DIVIDER LINE -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright"><p class="p-sm">&copy; 2023 Martex. <span>All Rights Reserved</span></p></div>
							</div>


							<!-- FOOTER SECONDARY LINK -->
							<div class="col">
								<div class="bottom-secondary-link ico-15 text-end">
									<p class="p-sm"><a href="https://themeforest.net/user/dsathemes/portfolio">Made with 
										<span class="flaticon-heart color--pink-400"></span> by @DSAThemes</a>
									</p>
								</div>
							</div>


						</div>  <!-- End row -->
					</div>	<!-- END BOTTOM FOOTER -->


				</div>     <!-- End container -->	
			</footer>   <!-- END FOOTER-3 -->	 --}}

            @include('footer')


		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="podologue.mu/js/jquery-3.7.0.min.js"></script>
		{{-- <script src="podologue.mu/js/bootstrap.min.js"></script>	
		<script src="podologue.mu/js/modernizr.custom.js"></script>
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