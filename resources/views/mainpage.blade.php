<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

		@include('head')
  		<!-- SITE TITLE -->
		
        <meta name="keywords" content="Plantar wart treatment, Wart removal, Podiatry services, Foot care, Plantar wart specialist, Mauritius podiatrist, Wart treatment for adults, Wart removal for children, Foot health, Plantar wart care."> 
        
        <meta property="og:url" content= "https://podologue.mu">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Discover effective and specialized plantar wart treatment for both adults and children in Mauritius. Our expert podiatrists provide gentle and comprehensive solutions to eliminate plantar warts, ensuring optimal comfort and swift recovery. Contact us for personalized care tailored to all age groups.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Aglaë Provost-Fleury Plantar Wart Treatment for Adults and Children in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | Aglaë Provost-Fleury Plantar Wart Treatment for Adults and Children in Mauritius </title>
        
        <meta name="description" content="Discover effective and specialized plantar wart treatment for both adults and children in Mauritius. Our expert podiatrists provide gentle and comprehensive solutions to eliminate plantar warts, ensuring optimal comfort and swift recovery. Contact us for personalized care tailored to all age groups.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu" />



	<body> 


		<!-- Podologue.mu Main - Webymind - CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">

			<!-- HEADER
			============================================= -->
			@include('nav')
		<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU END HEADER -->




			<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU HERO-1
			============================================= -->	
			@include('hero')




			<!-- FEATURES-SERVICE
			============================================= -->
			@include('features')


			<!-- DIVIDER LINE -->
			<hr class="divider">

			@include('heading-3card')



			<!-- FEATURES IMAGE ET TEXT GAUGE ET DROITE-5
			============================================= -->
				{{-- @include('text-img-left') --}}




			<!-- STATISTIC-1
			============================================= -->
				{{-- @include('img-left-text-cta') --}}



			<!-- FEATURES-12
			============================================= -->
				{{-- @include('left-text-card-right-icon') --}}




			<!-- TEXT CONTENT Easy inter
			============================================= -->
		{{-- @include('txt-img-content') --}}


			<!-- IMAGE CONTENT below with heading
			============================================= -->
				{{-- @include('img-content-with-head-txt') --}}




			<!-- BRANDS-1
			============================================= -->
			{{-- @include('brand-logo') --}}




			<!-- FEATURES-HEAD + 3 CARD SECTION IMG
			============================================= -->
				{{-- @include('heading-3card') --}}



			<!-- TEXT CONTENT IMG RIGHT
			============================================= -->
			{{-- @include('text-left-img-r') --}}




			<!-- IMAGE CONTENT-head-cta
			============================================= -->
			{{-- @include('img-content-cta-b') --}}




			<!-- TEXT CONTENT wih 1-2-3
			============================================= -->
			{{-- @include('3steps') --}}



			<!-- TESTIMONIALS-1
			============================================= -->
			{{-- @include('reviews') --}}



			<!-- INTEGRATIONS-2
			============================================= -->
				{{-- @include('intergrate-app') --}}


			<!-- FAQs-3
			============================================= -->
			{{-- @include('faq') --}}
			<!-- END FAQs-3 -->




			<!-- BANNER-3
			============================================= -->
				@include('banner')




			<!-- MODAL WINDOW (IMAGE LINK)
			============================================= -->
				{{-- @include('pop-up') --}}





			@include('footer')



		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="/podologue.mu/js/jquery-3.7.0.min.js"></script>
		<script src="/podologue.mu/js/bootstrap.min.js"></script>	
		<script src="/podologue.mu/js/modernizr.custom.js"></script>
		<script src="/podologue.mu/js/jquery.easing.js"></script>
		<script src="/podologue.mu/js/jquery.appear.js"></script>
		<script src="/podologue.mu/js/menu.js"></script>
		<script src="/podologue.mu/js/owl.carousel.min.js"></script>
		{{-- <script src="/podologue.mu/js/pricing-toggle.js"></script> --}}
		<script src="/podologue.mu/js/jquery.magnific-popup.min.js"></script>
		{{-- <script src="/podologue.mu/js/request-form.js"></script>	
		<script src="/podologue.mu/js/jquery.validate.min.js"></script> --}}
		<script src="/podologue.mu/js/jquery.ajaxchimp.min.js"></script>	
		<script src="/podologue.mu/js/popper.min.js"></script>
		<script src="/podologue.mu/js/lunar.js"></script>
		<script src="/podologue.mu/js/wow.js"></script>
				
		<!-- Custom Script -->		
		<script src="/podologue.mu/js/custom.js"></script>


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

	{{-- <script>
    function redirectToBilanURL() {
        // Replace 'YOUR_NEW_URL_HERE' with the desired URL you want to redirect to
        window.location.href = '/podiatry';
    }
	</script>

		<script>
    function redirectToPediURL() {
        // Replace 'YOUR_NEW_URL_HERE' with the desired URL you want to redirect to
        window.location.href = '/pedicure';
    }
	</script>

	<script>
    function redirectToSemelleURL() {
        // Replace 'YOUR_NEW_URL_HERE' with the desired URL you want to redirect to
        window.location.href = '/semelle';
    }
	</script> --}}





	</body>


</html>




