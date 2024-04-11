<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
        <meta name="keywords" content="Register podiatry appointments Mauritius, Podologue.mu account creation, Book appointment foot care Mauritius, Podiatric services registration, Expert podiatry Mauritius, Medical pedicure account setup, Mauritius foot health bookings, Podiatrist account creation."> 
        
        <meta property="og:url" content= "https://podologue.mu/register">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Register and create your account to easily book appointments for top-notch podiatry and medical pedicure services in Mauritius at Podologue.mu. Join for personalized foot care and wellness solutions.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Register - Create your account to Book Appointment podiatry and medical pedicure services in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | Register - Create your account to Book Appointment podiatry and medical pedicure services in Mauritius </title>
        
        <meta name="description" content="Register and create your account to easily book appointments for top-notch podiatry and medical pedicure services in Mauritius at Podologue.mu. Join for personalized foot care and wellness solutions.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu/register" />		  

							

		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">


        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


		<!-- PLUGINS STYLESHEET -->


		<!-- ON SCROLL ANIMATION -->
		<link href="podologue.mu/css/animate.css" rel="stylesheet">

		<!-- TEMPLATE CSS -->

		<link href="podologue.mu/css/pink-theme.css" rel="stylesheet">

		
		<!-- RESPONSIVE CSS -->
		<link href="podologue.mu/css/responsive.css" rel="stylesheet">
		<style>
			.btn-google img {
				position: relative;
				width: 120px;
				height: 28px;
				top: -2px;
				right: 5px;
			}
		</style>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<style>
		.btn-show-pass{
			top:6px!important;
		}
		.texte {
			margin-top:221px;
		}
	@media (min-width: 767px) and (max-width: 1024px){
		.reset-page-wrapper .form-control, .register-page-form .form-control{
			height: 40px!important;
		}
	}
		
	</style>

	</head>




	<body> 



		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">


			<!-- SIGN UP PAGE
			============================================= -->
			<div id="signup" class="bg--scroll login-section division">
				<div class="container">
					<div class="row justify-content-center">


						<!-- REGISTER PAGE WRAPPER -->
						<div class="col-lg-11">
							<div class="register-page-wrapper r-16 bg--fixed">	
								<div class="row">


									<!-- SIGN UP FORM -->
									<div class="col-md-6">
										<div class="register-page-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

												<!-- Google Button -->	
									<div class="col-md-12">
									<a  href="https://podologue.mu" class="btn btn-google ico-left">
								<img  class="img-fluid" src="/podologue.mu/images/register-logo-black.png" alt="logo-image"></a>
												</div>  

												<!-- Login Separator -->
												<div class="col-md-12 text-center">	
													<div class="separator-line">{{ __('Sign up') }}</div>
												</div>

												<!-- Form Input -->	
												<div class="col-md-12">
							<p class="p-sm input-header">{{ __('Name') }}</p>
							<input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
							        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
												
						</div>

												<!-- Form Input -->	
										<div class="col-md-12">
								<p class="p-sm input-header">{{ __('Email') }}</p>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
								    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
							</div>

								<div class="col-md-12">
								<p class="p-sm input-header">{{ __('Phone Number') }}</p>
								<input id="Phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-md-12">
								<p class="p-sm input-header">{{ __('Password') }}</p>
								<div class="wrap-input">
									<span class="btn-show-pass ico-20" onclick="togglePassword('password', 'togglePassword')">
										<i class="fas fa-eye" id="togglePassword" style="font-size: 14px;"></i>
									</span>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> 
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="col-md-12">
								<p class="p-sm input-header">{{ __('Confirm Password') }}</p>
								<div class="wrap-input">
									<span class="btn-show-pass ico-20" onclick="togglePassword('password-confirm', 'toggleConfirmPassword')">
										<i class="fas fa-eye" id="toggleConfirmPassword" style="font-size: 14px;"></i>
									</span>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
								</div>
							</div>							
													
												<!-- Form Submit Button -->	
												<div class="col-md-12">
													<button type="submit" class="btn btn--theme hover--theme submit">{{ __('Register') }}</button>
												</div> 

												<!-- Log In Link -->	
												<div class="col-md-12">
													<p class="create-account text-center">
														{{ __('Already have an account?') }} <a href="{{ route('login') }}" class="color--theme">{{ __('Login') }}</a>
													</p>
												</div> 

											</form>
										</div>
									</div>	<!-- END SIGN UP FORM -->


									<!-- SIGN UP PAGE TEXT -->
									<div class="col-md-6">
										<div class="register-page-txt color--white">


											<!-- Section ID -->	
										<span class="section-id">{{ __('Create Your Account') }}</span>

											<!-- Title -->
											{{-- <h2 class="s-48 w-700"> </h2> --}}

											<!-- Text -->
											<p class="texte">{{ __('Sign up is quick and easy! By signing up, you\'ll have full control of your appointments!') }}
												
											</p>

											<!-- Copyright -->
											<div class="register-page-copyright">												
												<p class="p-sm"> &copy; <script>document.write(new Date().getFullYear());</script> Podologue.mu | <span>{{ __('All Rights Reserved') }}</span></p>
											</div>

										</div>
									</div>	<!-- END SIGN UP PAGE TEXT -->


								</div>  <!-- End row -->
							</div>	<!-- End register-page-wrapper -->
						</div>	<!-- END REGISTER PAGE WRAPPER -->


			 		</div>	   <!-- End row -->	
			 	</div>	   <!-- End container -->		
			</div>	<!-- END SIGN UP PAGE -->




				
		<!-- Custom Script -->		
		<script src="/podologue.mu/js/custom.js"></script>





	</body>
	
	<script>
			function togglePassword(fieldId, iconId) {
			const passwordField = document.getElementById(fieldId);
			const eyeIcon = document.getElementById(iconId);
			if (passwordField.type === 'password') {
				passwordField.type = 'text';
				eyeIcon.classList.remove('fa-eye');
				eyeIcon.classList.add('fa-eye-slash');
			} else {
				passwordField.type = 'password';
				eyeIcon.classList.remove('fa-eye-slash');
				eyeIcon.classList.add('fa-eye');
			}
		}

	</script>



</html>




