<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">




	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
		<title>Privacy-Policy | Podologue.mu</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		{{-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon"> --}}

		{{-- <!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"> --}}
		
		<!-- BOOTSTRAP CSS -->
		<link href="podologue.mu/css/bootstrap.min.css" rel="stylesheet">
				
		{{-- <!-- FONT ICONS -->
		<link href="podologue.mu/css/flaticon.css" rel="stylesheet"> --}}

		<!-- PLUGINS STYLESHEET -->
		<link href="podologue.mu/css/menu.css" rel="stylesheet">	
		<link id="effect" href="podologue.mu/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		{{-- <link href="podologue.mu/css/magnific-popup.css" rel="stylesheet">	
		<link href="podologue.mu/css/owl.carousel.min.css" rel="stylesheet">
		<link href="podologue.mu/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="podologue.mu/css/lunar.css" rel="stylesheet"> --}}

		{{-- <!-- ON SCROLL ANIMATION -->
		<link href="podologue.mu/css/animate.css" rel="stylesheet"> --}}

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
                @include('usernav')



			<!-- PRIVACY PAGE
			============================================= -->
			<section id="privacy-page" class="gr--whitesmoke pb-80 inner-page-hero division">
				<div class="container">
					<div class="row justify-content-center">	
						<div class="col-xl-10">


							<!-- INNER PAGE TITLE -->
							<div class="inner-page-title">
								<h2 class="s-52 w-700">{{__("Privacy Policy")}}</h2>
								<p class="p-lg">{{__("In accordance with Article 6 of Law No. 2004-575 of June 21, 2004, concerning trust in the digital economy, users of the website cabinet-de-podologie-podologue.mu are hereby informed of the identity of the various contributors involved in its creation and monitoring.")}}</p>
							</div>


							<!-- TEXT BLOCK -->	
							<div class="txt-block legal-info">

								<!-- Title -->
								<h4 class="s-30 w-700"><span>1.</span> {{__("Legal Informations")}}</h4>

								<!-- Text -->
                                <ul>
                                    <li>{{__("Owner : Cabinet-de-podologie ltée")}}</li>
                                    <li>{{__("Endemika Business Park 2, Petit raffray")}}</li>
                                    <li>{{__("N°BRN: C22186664")}}</li>
                                    <li>{{__("Website builder : Webymind")}}</li>
                                    <li>{{__("Publication Director :  Aglaë Provost-Fleury")}}</li>
                                </ul>
                                <br>
								 

								

								<!-- Text -->
								<p>{{__("The use of the Cabinet de Podologie Ltée - Podologue.mu website implies full acceptance of the following terms and conditions. These terms of use may be modified or supplemented at any time, so users of the Cabinet de Podologie Ltée - Podologue.mu website are encouraged to regularly review them.")}}
								</p>

                                <br>

								<p>{{__("This site is normally accessible to users at all times. However, an interruption for technical maintenance may be decided by Cabinet de Podologie, which will make an effort to communicate the dates and times of the intervention to users in advance. The Cabinet de Podologie Ltée - Podologue.mu website is regularly updated by Webymind. Similarly, legal notices may be modified at any time; nevertheless, they are binding on the user, who is invited to refer to them as often as possible to be informed.")}}
								</p>

								<!-- Title -->
								<h4 class="s-30 w-700"><span>2.</span> {{__("Personal information we collect")}}</h4>
                                    <p>{{__("In Mauritius, personal data is notably protected by the Data Protection Unit (DPU) / Data Protection Act (DPA) of the Penal Code and the Africa Directive, of which Mauritius is a part.")}}</p>
                                    <p>{{__("In any case, Cabinet de Podologie Ltd - Podologue.mu only collects personal information about the user for the purpose of certain services offered by the website Cabinet de Podologie Ltd - Podologue.mu. The user provides this information knowingly, particularly when entering it themselves. It is then specified to the user of the website Cabinet de Podologie Ltd - Podologue.mu whether or not it is mandatory to provide this information.")}}</p>
								<!-- Small Title -->
								<h5 class="s-24 w-700"><span>2.1.</span> {{__("Information you provide to us")}}</h5>

								<!-- Text -->
								<p>{{__("Under the provisions of the Data Protection Act concerning computing, files, and freedoms, every user has the right to access, rectify, and object to personal data concerning them. This can be done by sending a written letter or emailing us on rdv@podologue.mu. We require at least your complete name, email and contact number for invoicing and medical history purpose only.")}}</p>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>{{__("No personal information of the user of the Cabinet de Podologie Ltée - Podologue.mu website is published without the user's knowledge, exchanged, transferred, assigned, or sold on any medium to third parties. The only exception would be in the event of the acquisition of the Podiatry Center and its rights, allowing the transmission of said information to the eventual acquirer, who would, in turn, be bound by the same obligation to preserve and modify the data concerning the user of the Cabinet de Podologie Ltée - Podologue.mu website.")}}
										</p>
									</li>

									{{-- <li class="list-item">
										<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien congue 
										   and augue egestas
										</p>
									</li>

									<li class="list-item">
										<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien congue 
										   augue egestas sagittis massa lorem fusce cursus fusce nulla vitae massa placerat 
										   vulputate purus
										</p>
									</li>

									<li class="list-item">
										<p>Sapien sodales quaerat undo velna purus euismod purus velna blandit vitae auctor 
										   and congue magna tempor sapien gravida laoreet turpis urna augue, viverra a augue 
										   eget dictum pulvinar
										</p>
									</li> --}}

								</ul>

								<!-- Small Title -->
								<h5 class="s-24 w-700"><span>2.2.</span>{{__("Automatic data collection")}}</h5>

								<!-- Text -->
								<p>{{__("The Cabinet de Podologie Ltée - Podologue.mu website contains a certain number of hyperlinks to other websites, set up with the authorization of Cabinet de Podologie Ltée - Podologue.mu. However, Cabinet de Podologie Ltée - Podologue.mu does not have the ability to check the content of the sites thus visited and will not, therefore, assume any responsibility for this.")}}
								</p>

								<!-- Text -->
								<p>{{__("Navigation on the Cabinet de Podologie Ltée - Podologue.mu website may result in the installation of cookie(s) on the user's computer. A cookie is a small file that does not allow the user's identification but records information about a computer's browsing on a site. The data obtained in this way aims to facilitate subsequent navigation on the site and is also intended to enable various traffic measurement tools.")}}
								</p>

								<!-- Small Title -->
								<h5 class="s-24 w-700"><span>2.3.</span> {{__("Cookies")}}</h5>

								<!-- Text -->
								<p>{{__("Refusal to accept a cookie may result in the inability to access certain services. However, the user can configure their computer as follows to refuse the installation of cookies:")}}
								</p>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>{{__("In Internet Explorer cookies link: https://support.microsoft.com/")}}
										</p>
									</li>

									<li class="list-item">
										<p>{{__("In Firefox Cookies link: https://support.mozilla.org/")}}
										</p>
									</li>
									<li class="list-item">
										<p>{{__("In Safari link:https://help.apple.com/safari/")}}
										</p>
									</li>                                    
									<li class="list-item">
										<p>{{__("In Chrome link: https://support.google.com/chrome/")}}
										</p>
									</li> 
								</ul>



								<!-- Title -->
								<h4 class="s-30 w-700"><span>3.</span>{{__("Types of Information")}}</h4>	

								<!-- Text -->
								<p>{{__("Information that, in any form, directly or indirectly enables the identification of the individuals to whom it applies.")}}
								</p>

								<!-- Title -->
								<h4 class="s-30 w-700"><span>4.</span>{{__("How we use personal information")}}</h4>

								<!-- Text -->
								<p>{{{__("Your Personal information is firstly use to identify yourself on our patient records, kept for medical history purpose and invoicing purposes. These information can be use to confirm your appointment and to reach you for appointment or medical purposes only.")}}}
								</p>


								<!-- Title -->
								<h4 class="s-30 w-700"><span>5.</span>{{__("How to contact us")}}</h4>	

								<!-- Text -->  
								<p>{{__("You can reach us via email at")}} <a href="mailto: rdv@podologue.mu" class="color--theme">rdv@podologue.mu</a> {{__("or by phone on +23057097430 specifically for scheduling your appointments.")}} {{__("Any email related to marketing activities or commercial proposals will be automatically rejected.")}}
								</p>

							</div>	<!-- END TEXT BLOCK -->	


						</div>
					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END PRIVACY PAGE -->




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
                                    <li><p><a href="/terms">{{__("Terms and Conditions")}}</a></p></li> 
                                    <li><p><a href="/">{{__("About us")}}</a></p></li>                                    						
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
			</footer>  <!-- END FOOTER-10 -->	




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