<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
        <meta name="keywords" content="Sign in podiatry appointments Mauritius, Podologue.mu, Book appointment foot care Mauritius, Podiatric services sign-in, Expert podiatry Mauritius, Foot health appointment scheduling, Podiatrist sign-in services, Mauritius pedicure bookings"> 
        
        <meta property="og:url" content= "https://podologue.mu/login">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Sign in to book appointments for expert podiatry and pedicure services in Mauritius at Podologue.mu. Experience specialized foot care for enhanced wellness and comfort.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Sign In - Book Appointment podiatry and medical pedicure services in Mauritius"> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | Sign In - Book Appointment podiatry and medical pedicure services in Mauritius </title>
        
        <meta name="description" content="Sign in to book appointments for expert podiatry and pedicure services in Mauritius at Podologue.mu. Experience specialized foot care for enhanced wellness and comfort.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu/login" />		  

							

		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

		<link href="podologue.mu/css/pink-theme.css" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="podologue.mu/css/responsive.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

	</head>

	<style>
		@media (min-width: 200px) and (max-width: 767px){
			.btn-show-pass {
				top: 18px!important;
			}
		}

		@media (min-width: 768px) and (max-width: 1024px){
			.btn-show-pass {
				top: 18px!important;
			}
		}


		.btn-show-pass{
			top:6px!important;
		}
		@media only screen and (max-width: 768px){
			.texte {
				margin-top:-96px!important;
			}

		}
		.texte {
			margin-top:-86px;
		}

		@media only screen and (max-width: 768px) {
			#login .register-page-wrapper {
			background: url("podologue.mu/images/podiatry2.webp");
			background-size: contain;
			background-repeat:no-repeat;
			}
		}	
		
		@media (min-width: 200px) and (max-width: 767px) {

			.reset-page-wrapper .form-control, .register-page-form .form-control{
				height: 40px!important;
			}
		}
				@media (min-width: 767px) and (max-width: 1024px) {

			.reset-page-wrapper .form-control, .register-page-form .form-control{
				height: 40px!important;
			}
		}
		
	</style>




	<body> 


		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">




			<!-- LOGIN PAGE
			============================================= -->
			<div id="login" class="bg--scroll login-section division">
				<div class="container">
					<div class="row justify-content-center">


						<!-- REGISTER PAGE WRAPPER -->
						<div class="col-lg-11">
							<div class="register-page-wrapper r-16 bg--fixed">	
								<div class="row">


									<!-- LOGIN PAGE TEXT -->
									<div class="col-md-6">
										<div class="register-page-txt color--white">

											
											<a href="https://podologue.mu"><img class="img-fluid" src="/podologue.mu/images/logo-white.svg" alt="logo-image"></a>

											
											<h2 class="s-42 w-700">{{ __('Sign in') }}</h2>
											{{-- <h2 class="s-42 w-700"> on Podologue.mu </h2> --}}

											
											<p class="texte">{{ __('Sign in to book an appointment with') }} <br>
												{{ __('Aglaë Provost-Fleury, your podiatrist in Mauritius !') }}
											</p>

											
											<div class="register-page-copyright">
												<p class="p-sm"> &copy; <script>document.write(new Date().getFullYear());</script> Podologue.mu | <span>{{ __('All Rights Reserved') }}</span></p>
											</div>

										</div>
									</div>	<!-- END LOGIN PAGE TEXT -->


									<!-- LOGIN FORM -->
									<div class="col-md-6">
										<div class="register-page-form">
										<form method="POST" action="{{ route('login') }}">
                        						@csrf

												<!-- Google Button -->	
												<div class="col-md-12">
													{{-- <a  href="#" class="btn btn-google ico-left">
														<img src="/podologue.mu/images/png_icons/google.png" alt="google-icon"> Sign in with Google
													</a> --}}
												</div>  

												
												<div class="col-md-12 text-center">	
													
												</div>

												
										<div class="col-md-12">
										<p class="p-sm input-header">{{ __('Email') }}</p>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>

								<p class="p-sm input-header">{{ __('Password') }}</p>
								<div class="wrap-input">
									<span class="btn-show-pass ico-20" onclick="togglePassword()">
										<i class="fas fa-eye" id="togglePassword" style="font-size: 14px;"></i>
									</span>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

													
												<div class="col-md-6 offset-md-4">
													<div class="reset-password-link">
														<p class="p-sm"><a href="{{ route('password.request') }}" class="color--theme">{{ __('Forgot Password?') }}</a></p>
													</div>
												</div>

												
												<div class="col-md-12">
													<button type="submit"  class="btn btn--theme hover--theme submit">  {{ __('Login') }}</button>
												</div> 

												
												<div class="col-md-12">
													<p class="create-account text-center">
														{{ __('Don\'t have an account?') }} <a href="{{ route('register') }}" class="color--theme">{{ __('Register') }}</a>
													</p>
												</div>  

											</form> 
										</div>
									</div>	<!-- END LOGIN FORM -->


								</div>  <!-- End row -->
							</div>	<!-- End register-page-wrapper -->
						</div>	<!-- END REGISTER PAGE WRAPPER -->


			 		</div>	   <!-- End row -->	
			 	</div>	   <!-- End container -->		
			</div>	<!-- END LOGIN PAGE -->




		</div>	<!-- END PAGE CONTENT -->	

				
		<!-- Custom Script -->		
		<script src="/podologue.mu/js/custom.js"></script>

<script>

	function togglePassword() {
		const passwordField = document.getElementById('password');
		const eyeIcon = document.getElementById('togglePassword');
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

	</body>





</html>





