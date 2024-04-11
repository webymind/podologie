
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
        <meta name="keywords" content="Reset password podiatry Mauritius, Podologue.mu password recovery, Foot care account reset Mauritius, Password recovery podiatrist Mauritius, Podiatric services password change , Medical pedicure account security, Mauritius foot health password reset, Podiatrist password assistance"> 
        
        <meta property="og:url" content= "https://podologue.mu/password/reset">
        <meta property="og:site_name" content="https://podologue.mu">
        
        <meta property="og:description" content="Reset your password easily at Podologue.mu for uninterrupted access to premier podiatry and medical pedicure services in Mauritius. Securely regain account control for personalized foot care.">
        
        <meta property="og:image" content="/podologue.mu/images/logo-white.svg">
        
        <meta property="og:title" content="Podologue.mu | Reset-Password "> 
        <meta property="og:type" content="Website">
        
        <title> Podologue.mu | Reset-Password  </title>
        
        <meta name="description" content="Reset your password easily at Podologue.mu for uninterrupted access to premier podiatry and medical pedicure services in Mauritius. Securely regain account control for personalized foot care.">  
        
        <link rel="alternate" hreflang="fr-FR" href="https://podologue.mu/password/reset" />	
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">

		<link href="/podologue.mu/css/pink-theme.css" rel="stylesheet"> 

		@vite(['resources/sass/app.scss', 'resources/js/app.js'])
		<!-- RESPONSIVE CSS -->
		<link href="/podologue.mu/css/responsive.css" rel="stylesheet">
        <style>
            .text-md-end{
                margin-left: -26.5rem!important;
            }
            @media only screen and (min-width: 200px) and (max-width: 767px){
                .text-md-end{
                    margin-left: -15.5rem!important;
                }
            }
                @media only screen and (min-width: 768px) and (max-width: 1024px){
                .text-md-end{
                    margin-left: -22.5rem!important;
                }
            }
			.reset-page-wrapper form{
				border-radius:10px;
			}
        </style>

	</head>




	<body> 

		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">




			<!-- RESET PASSWORD PAGE
			============================================= -->
			<section id="reset-password" class="bg--fixed reset-password-section division">
				<div class="container">
					<div class="row justify-content-center">	
						<div class="col-md-7 col-lg-5">

							<!-- LOGO -->
							<div class="login-page-logo">
								<a href="https://podologue.mu"><img class="img-fluid" src="/podologue.mu/images/aglae-logo-dark.webp" alt="Reset password podiatry Mauritius">	</a>				
							</div> 	

							<!-- RESET PASSWORD FORM -->
							<div class="reset-page-wrapper text-center">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif                                
								<form method="POST" action="{{ route('password.email') }}">
                                    @csrf
									<!-- Title-->
									<div class="col-md-12">
										<div class="reset-form-title">
											<h5 class="s-26 w-700">{{ __('Reset Password') }}</h5>
											<p class="p-sm color--grey">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. Once clicked on the send reset link button please wait for 10 seconds.') }}
											</p>
										</div>
									</div> 

                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                    

									<!-- Form Submit Button -->	
									<div class="col-md-12">
										<button type="submit" class="btn btn--theme hover--theme submit">{{ __('Send Reset Link') }}</button>
									</div> 

									<!-- Form Data  -->	
									<div class="col-md-12">
										<div class="form-data text-center">
											<span><a href="/login">{{ __('Never mind, I remembered!') }}</a></span>
										</div>
									</div>

									<!-- Form Message -->
									<div class="col-lg-12 reset-form-msg">
										<span class="loading"></span>
									</div>	

								</form>	
							</div>	<!-- END RESET PASSWORD FORM -->
						</div>
			        </div>	   <!-- End row -->	
			 	</div>	   <!-- End container -->		
			</section>	<!-- END RESET PASSWORD PAGE -->




		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	

				
		<!-- Custom Script -->		
		<script src="/podologue.mu/js/custom.js"></script>



	</body>




</html>
