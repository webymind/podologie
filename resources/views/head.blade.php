	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		    <!-- CSRF Token -->
    		<meta name="csrf-token" content="{{ csrf_token() }}">
				

		
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">


   		 <!-- Scripts -->
			@vite(['resources/sass/app.scss', 'resources/js/app.js'])



		<!-- PLUGINS STYLESHEET -->
		<link href="podologue.mu/css/menu.css" rel="stylesheet">	
		<link id="effect" href="podologue.mu/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		{{-- <link href="podologue.mu/css/magnific-popup.css" rel="stylesheet">	 --}}
		<link href="podologue.mu/css/owl.carousel.min.css" rel="stylesheet">
		{{-- <link href="podologue.mu/css/owl.theme.default.min.css" rel="stylesheet"> --}}
		{{-- <link href="podologue.mu/css/lunar.css" rel="stylesheet"> --}}
				<!-- FONT ICONS -->
		<link href="podologue.mu/css/flaticon.css" rel="stylesheet">
		<!-- ON SCROLL ANIMATION -->
		<link href="podologue.mu/css/animate.css" rel="stylesheet">


		<link href="podologue.mu/css/pink-theme.css" rel="stylesheet">

		
		<!-- RESPONSIVE CSS -->
		<link href="podologue.mu/css/responsive.css" rel="stylesheet">
            <style>
                #scroll-to-top-button {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    display: none;
                }

				/* .bgongle--white-100{
					background-image:url("/podologue.mu/images/sante-ongle-podologue.mu.webp");
					background-size:cover;
					
				}

				.bgorthony--white-100{
					background-image:url("/podologue.mu/images/Orthonyxie-podologue.mu.webp");
					background-size:cover;
				}

				.bgOrtho--white-100{
					background-image:url("/podologue.mu/images/Onychoplastie-podologue.mu.webp");
					background-size:cover;
				}

				.bgOnycho--white-100{
					background-image:url("/podologue.mu/images/Onycho-podologue.mu.webp");
					background-size:cover;
				} */

				/* .fbox-2 .fbox-img.h-175{
					background-image:url("podologue.mu/images/bilan-podolo-podologue.mu.webp");
					background-size:cover;
				} */

				@media (min-width: 200px) and (max-width: 767px){
					.fl-3{
						display:none!important;
					}
				}
				@media (min-width: 200px) and (max-width: 767px){
					.footer{
						text-align:center;
					}
				}				
				@media (min-width: 768px) and (max-width: 1024px){
					.col-sm-10{
						display:none!important;
					}
				}
				@media (min-width: 768px) and (max-width: 1024px){
					.row-cols-md-2>*{
						width:100%;
					}
				}
				
				.row-cols-md-2>*{
					width:100%!important;
				}					
            </style>    
			
			

	</head>