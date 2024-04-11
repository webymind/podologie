			<header id="header" class="tra-menu navbar-light white-scroll">
				<div class="header-wrapper">


					<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo">
							<a href="https://podologue.mu"><img src="podologue.mu/images/aglae-logo-dark.webp" alt="podologue.mu-logo-mobile-logo"></a></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU HEADER BLACK LOGO -->
	    					<div class="desktoplogo">
	    						<a href="/" class="logo-black"><img src="podologue.mu/images/aglae-logo-dark.webp" alt="podologue.mu-logo"></a>
	    					</div>


	    					<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU HEADER WHITE LOGO -->
	    					<div class="desktoplogo">
	    						<a href="https://podologue.mu" class="logo-white"><img src="podologue.mu/images/logo-white.svg" alt="podologue.mu-logo"></a>
	    					</div>


	    					<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-theme">

								    <!--  AGLAE-PROVOST-FLEURY-PODOLOGUE.MU SIMPLE NAVIGATION LINK -->
							    	{{-- <li class="nl-simple" aria-haspopup="true"><a href="/home" class="h-link">{{ __('Home') }}</a></li> --}}
									<!-- SIMPLE NAVIGATION LINK -->
							    		<li aria-haspopup="true"><a href="#" class="h-link">{{ __('Medical Pedicure') }} <span class="wsarrow"></span></a>
											<ul class="sub-menu">
												<li class="nl-simple" aria-haspopup="true"><a href="/pedicure-medical-specificities" class="h-link">{{ __('Specificities') }}</a>
												</li>
												<li class="nl-simple" aria-haspopup="true"><a href="/diabetic-foot" class="h-link">{{ __('Diabetic Foot') }}</a>
												</li>	
												<li class="nl-simple" aria-haspopup="true"><a href="/plantar-wart" class="h-link">{{ __('Plantar Wart') }}</a>
												</li>
												<li class="nl-simple" aria-haspopup="true"><a href="/orthonyxies-onychoplasty" class="h-link">{{ __('Orthonyxies & Onychoplasty') }}</a>
												</li>												
												{{-- <li class="nl-simple" aria-haspopup="true"><a href="/" class="h-link">{{ __('Pédicurie Médicale') }}</a>
												</li>
												
												<li class="nl-simple" aria-haspopup="true"><a href="/" class="h-link">{{ __('Bilan Podologique') }}</a>
												</li>																				 --}}
											</ul>
								    	</li>

							    		<li aria-haspopup="true"><a href="#" class="h-link">{{ __('Podiatry Assessment') }} <span class="wsarrow"></span></a>
											<ul class="sub-menu">
												<li class="nl-simple" aria-haspopup="true"><a href="/podiatric-specificities" class="h-link">{{ __('Specificities') }}</a>
												</li>
												<li class="nl-simple" aria-haspopup="true"><a href="/sports-podiatry" class="h-link">{{ __('Sports podiatry') }}</a>
												</li>	
												<li class="nl-simple" aria-haspopup="true"><a href="/posturology" class="h-link">{{ __('Posturology') }}</a>
												</li>
											</ul>
								    	</li>										


								
	
									<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU DROPDOWN SUB MENU -->
						          	<li class="nl-simple" aria-haspopup="true"><a href="/about-aglae" class="h-link">{{ __('À propos') }}</a>
	            						{{-- <ul class="sub-menu">
	            							<li aria-haspopup="true"><a href="#lnk-1">{{ __('About Aglaë') }}</a></li>
	            							<li aria-haspopup="true"><a href="#lnk-1">{{ __('Get Direction') }}</a></li>
						           		</ul> --}}
								    </li>		
									
									
	        						<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU DROPDOWN SUB MENU -->
						          	<li aria-haspopup="true"><a href="#" class="h-link">{{ Config::get('languages')[App::getLocale()] }} <span class="wsarrow"></span></a>
	            						<ul class="sub-menu">
									@foreach (Config::get('languages') as $lang => $language)
										@if ($lang != App::getLocale())
										<li>
											<a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
												@endif
											@endforeach
										</li>
						           		</ul>
								    </li>


								@guest
							    	<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU SIGN IN LINK -->
							    	<li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
							    		{{-- <a href="{{ route('register') }}" class="h-link">{{ __('Register') }}</a> --}}
								@if (Route::has('register'))
                                <li class="nav-item">
                                    <a  class="h-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                           	 @endif
                    
								@else
						          	<li aria-haspopup="true"><a href="#" class="h-link"> <span class="wsarrow">{{ Auth::user()->name }}</span></a>
	            					<ul class="sub-menu">                                
                                    <a  class="dropdown-item" class="h-link" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
						    		</ul>
								</li>	
								@endguest

								    <!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU SIGN UP BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="{{ route('login') }}" class="btn r-04 btn--theme hover--tra-white last-link">{{ __('Book Appointment') }}</a>
								    </li> 


	        					</ul>
	        				</nav>	<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU END MAIN MENU -->


	    				</div>
	    			</div>	<!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU END NAVIGATION MENU -->


				</div>     <!-- AGLAE-PROVOST-FLEURY-PODOLOGUE.MU End header-wrapper -->
			</header>