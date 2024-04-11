<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
		<title>Terms & Conditions | Podologue.mu</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		{{-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon"> --}}

		<!-- GOOGLE FONTS -->
		{{-- <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
		 --}}
		<!-- BOOTSTRAP CSS -->
		{{-- <link href="podologue.mu/css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="podologue.mu/css/flaticon.css" rel="stylesheet"> --}}

           		 <!-- Scripts -->
			@vite(['resources/sass/app.scss', 'resources/js/app.js'])

		<!-- PLUGINS STYLESHEET -->
		<link href="podologue.mu/css/menu.css" rel="stylesheet">	
		<link id="effect" href="podologue.mu/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		{{-- <link href="podologue.mu/css/magnific-popup.css" rel="stylesheet">	
		<link href="podologue.mu/css/owl.carousel.min.css" rel="stylesheet">
		<link href="podologue.mu/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="podologue.mu/css/lunar.css" rel="stylesheet"> --}}

		<!-- ON SCROLL ANIMATION -->
		{{-- <link href="podologue.mu/css/animate.css" rel="stylesheet"> --}}

		<!-- TEMPLATE CSS -->
		<link href="podologue.mu/css/blue-theme.css" rel="stylesheet">
		<!-- <link href="podologue.mu/css/crocus-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/green-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/magenta-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/pink-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/purple-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/skyblue-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/red-theme.css" rel="stylesheet"> -->
		<!-- <link href="podologue.mu/css/violet-theme.css" rel="stylesheet"> -->
		
		<!-- RESPONSIVE CSS -->
		<link href="podologue.mu/css/responsive.css" rel="stylesheet">

        <style>
            .tra-menu .wsmainfull{
                background-color:black!important;
            }
            .inner-page-title p{
                line-height:1.5!important;
            }
            
        </style>

	</head>




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

            @include('usernav')


			<!-- TERMS PAGE
			============================================= -->
			<section id="terms-page" class="gr--whitesmoke pb-80 inner-page-hero division">
				<div class="container">
					<div class="row justify-content-center">	
						<div class="col-xl-10">


							<!-- INNER PAGE TITLE -->
							<div class="inner-page-title">
								<h2 class="s-52 w-700">{{__('Terms & Conditions')}}</h2>
								<p class="p-lg">{{__("By using the podologue.mu website and benefiting from our services, you accept the following terms and conditions of sale. We recommend that you read them carefully.")}}</p>
							</div>


							<!-- TEXT BLOCK -->	
							<div class="txt-block legal-info">

								<!-- Title -->
								<h4 class="s-30 w-700"><span>1.</span> {{__("Ownership")}}</h4>

								<!-- Text -->
								<p>{{__("Total or partial reproduction of this website, or any of its elements (drawings, designs, logos, photos, etc.), by any means, is prohibited and would constitute a violation that could engage the civil and criminal liability of its author. The databases appearing on the website are also protected.")}}
								</p>

								<!-- Text -->
								<p>{{__("The site podologue.mu, as well as those of its partners, and the logos, are elements protected by intellectual property law and cannot be subject, without the consent of the publication director, to any partial or total reproduction or representation. In case of violation of these restrictions, you have 24 hours to destroy any downloaded or held content, whether in electronic or printed form belonging to Podologue.mu - CABINET DE PODOLOGUE - Business Registration Number: C22186664.")}}
								</p>

								<!-- Title -->
								<h4 class="s-30 w-700"><span>2.</span>{{__("Acceptance of Terms")}}</h4>

								<!-- Text -->
								<p>{{__("By accessing the podologue.mu website, you automatically agree to our terms and conditions of sale and for billing purposes. Each appointment made will be invoiced in accordance with our current rates.")}}
								</p>

								<!-- Text -->
								<p>{{__("Podologue.mu is not responsible for, nor does it encourage minors to browse this site or create an account to make appointments without the consent of their parents or an adult.")}}
								</p>

								<!-- Title -->
								<h4 class="s-30 w-700"><span>3.</span>{{__("Service Description")}}</h4>

								<!-- Text -->
								<p>
								</p>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>{{__("Podiatry Assessment")}}
										</p>
									</li>

									<li class="list-item">
										<p>{{__("Medical Pedicure Service")}}
										</p>
									</li>
									<li class="list-item">
										<p>{{__('Custom made Insole')}}
										</p>
									</li>                                    

								</ul>

								<!-- Small Title -->
								{{-- <h5 class="s-24 w-700"><span>3.1.</span> Subscription</h5>

								<!-- Text -->
								<p>Integer congue sagittis augue egestas  velna purus purus magna nec suscipit and egestas 
								   magna aliquam ipsum vitae purus justo lacus ligula ipsum primis cubilia donec undo augue 
								   luctus vitae egestas a molestie donec libero sapien dapibus congue tempor undo quisque 
								   fusce cursus neque diam augue fusce sapien nulla a primis lacinia ipsum a molestie blandit 
								   and justo an aliquet eget molestie sagittis at quaerat sodales
								</p>

								<!-- Text -->
								<p>Aliqum mullam tincidunt a sapien gravida and diam donec porta.</p> --}}

								<!-- Title -->
								<h4 class="s-30 w-700"><span>4.</span>{{__('Account Information')}}</h4>

								<!-- Text -->
								<p>{{__("Creating an account is mandatory to access the appointment booking calendar. By providing information such as your full name, email address, and the type of consultation, these details must be accurate and complete, without errors. This information enables you to create your patient account at the podiatry clinic through podologue.mu and is strictly confidential for billing purposes and the medical history of your consultation for better follow-up.")}}
								</p>

                                <p>{{__("For more information on how we handle your personal data, please refer to our privacy policy available on our website")}}</p>

								<!-- Small Title -->
								<h5 class="s-24 w-700"><span>4.1.</span> {{__("Appointment Booking")}}</h5>

								<!-- Text -->
								<p>{{__("Please note that each reservation on podologue.mu is subject to billing for the service and reserved time. Failure to attend an appointment or cancellation without prior notice results in revenue loss for Podologue.mu. We kindly request that you inform us of your unavailability or any impediment at least 24 hours before the appointment. Otherwise, an invoice will be issued for the reserved time and service, payable within the next 24 hours.")}}
								</p>

								<!-- Text -->
								{{-- <p>Sagittis augue congue egestas integer velna purus purus magna nec suscipit and egestas 
								   magna aliquam ipsum vitae purus justo lacus ligula ipsum primis cubilia donec undo augue 
								   luctus vitae egestas a molestie donec libero sapien dapibus congue tempor undo quisque 
								   fusce cursus neque aliquam fusce blandit
								</p> --}}

								<!-- Small Title -->
								<h5 class="s-24 w-700"><span>4.2.</span>{{__("Account Responsibility")}}</h5>

								<!-- Text -->
								<p>{{__("Users are solely responsible for their podologue.mu accounts. Podologue.mu does not have access to user accounts or passwords, as they are encrypted and kept confidential. Users are prohibited from sharing their account email or password. In the event of a forgotten password, users can click on the 'Forgot Password' option to retrieve a new one. We strongly encourage users to maintain the confidentiality of their credentials at all times.")}}
								</p>

								<!-- Title -->
								<h4 class="s-30 w-700"><span>5.</span> {{__("Price")}}</h4>

								<!-- List -->	
								{{-- <ul class="simple-list">

									<li class="list-item"> --}}
										<p>{{__("Prices for our services are subject to change without prior notice. The most current pricing details are available in the 'Price' section accessible upon user login to their account. We reserve the right to modify or update pricing information as needed without notification.")}}
										</p>
									{{-- </li>

									<li class="list-item">
										<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien congue 
										   and augue egestas
										</p>
									</li>

								</ul> --}}

								{{-- <!-- Text -->
								<p>Augue congue sagittis egestas integer velna purus purus magna nec suscipit and egestas 
								   magna aliquam ipsum vitae purus justo lacus ligula ipsum primis cubilia donec undo augue 
								   luctus vitae egestas a molestie donec libero sapien dapibus congue tempor undo quisque 
								   fusce cursus neque donec and ipsum porta diam lorem sodales an aliquam lacinia justo 
								   sapien congue aliquet and sodales a quaerat tortor lacinia egestas
								</p> --}}

								<!-- Title -->
								<h4 class="s-30 w-700"><span>6.</span>{{__("Method of Payment")}}</h4>

								<!-- Text -->
								<p>{{__("Patients have the option to settle payments using MCB Mobile Juice Pay or cash. Please note that credit/debit card payments are not available at the cabinet.")}} 
								</p>

								<!-- Text -->
								<p>
								</p><br>

								<!-- Small Title -->
								<h5 class="s-24 w-700"><span>6.1.</span>{{__("Refunds and Claims")}}</h5>

								<!-- Text -->
								<p>{{__("Due to the personalized nature of our services, no refunds are possible once the services have been rendered. While we commit to delivering our services with utmost care and professionalism, no specific guarantee is provided. In accordance with our duty of care, we strive to offer quality services without guaranteeing specific outcomes. Therefore, no claims or guarantees are made regarding the results of the services provided.")}}
								</p>

								{{-- <!-- Text -->
								<p>Aliqum mullam tincidunt a sapien gravida and diam donec porta.</p> --}}

								<!-- Title -->
								<h4 class="s-30 w-700"><span>7.</span> {{__("Security")}}</h4>

								<!-- Text -->
								<p>{{__("The website podologue.mu is protected by Google's anti-spam measures and SSL encryption to ensure security. Third-party applications are utilized to enhance website protection. It is strongly advised not to engage in spamming or attempt to attack podologue.mu under any circumstances. Any act of cyber criminal activity will result in necessary legal action being taken against the responsible party.")}}
								</p>

								<!-- Title -->
								<h4 class="s-30 w-700"><span>8.</span> {{__("Changes of terms and conditions")}}</h4>

								<!-- Text -->
								<p>{{__("Podologue.mu reserves the right to modify, alter or update any clause in these terms and conditions at any time without prior notice. The terms and conditions may be subject to periodic changes. It is recommended that you regularly review these terms and conditions to stay updated with any modifications.")}}
								</p>	

								{{-- <!-- Text -->
								<p>Sagittis augue congue egestas integer velna purus purus magna nec suscipit and egestas 
								   magna aliquam ipsum vitae purus justo lacus ligula ipsum primis cubilia donec undo augue 
								   luctus vitae egestas a molestie donec libero sapien dapibus congue tempor undo quisque 
								   fusce cursus neque aliquam fusce blandit
								</p> --}}

								<!-- Title -->
								<h4 class="s-30 w-700"><span>9.</span> {{__("How to contact us")}}</h4>	

								<!-- Text -->  
								<p>{{__("You can reach us via email at")}} <a href="mailto: rdv@podologue.mu" class="color--theme">rdv@podologue.mu</a> {{__("or by phone on +23057097430 specifically for scheduling your appointments.")}} {{__("Any email related to marketing activities or commercial proposals will be automatically rejected.")}}
								</p>


							</div>	<!-- END TEXT BLOCK -->	


						</div>
					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END TERMS PAGE -->




			<!-- FOOTER-10
			============================================= -->
			<footer id="footer-10" class="pt-50 footer">
				<div class="container text-center">
					<div class="row justify-content-center">	
						<div class="col-xl-10">


							<!-- FOOTER LOGO -->
							<div class="footer-info">
								<img class="footer-logo" src="podologue.mu/images/aglae-logo-dark.webp" alt="footer-logo">
							</div>	


							<!-- FOOTER LINKS -->
							<div class="footer-links">
								<ul class="foo-links clearfix">
                                    <li><p><a href="privacy-policy">{{__("Privacy Policy")}}</a></p></li> 
                                    <li><p><a href="privacy.html">{{__("About us")}}</a></p></li>                                    						
								</ul>
							</div>


							<!-- FOOTER SOCIALS -->
							{{-- <ul class="bottom-footer-socials ico-25">
								<li><a href="#"><span class="flaticon-facebook"></span></a></li>
								<li><a href="#"><span class="flaticon-twitter"></span></a></li>
								<li><a href="#"><span class="flaticon-instagram"></span></a></li>
							</ul> --}}


						</div>
					</div>    <!-- End row -->	
				</div>     <!-- End container -->	
			</footer>   <!-- END FOOTER-10 -->
	



		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="podologue.mu/js/jquery-3.7.0.min.js"></script>
		{{-- <script src="podologue.mu/js/bootstrap.min.js"></script>	 --}}
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


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->	


	</body>




</html>