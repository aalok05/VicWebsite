@extends('layouts.master')

@section('content')

	
	<div class="container">     
         
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
   
                                    <a id="google_login" class="circle google" href="{{ url('/auth/google') }}">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="{{ url('/auth/facebook') }}">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="{{ route('login') }}" accept-charset="UTF-8">
                                     {{ csrf_field() }}
									<input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login">
									
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="{{ route('register') }}" accept-charset="UTF-8">
                                   {{ csrf_field() }}
								<input id="name" class="form-control" type="text" placeholder="Name" name="name">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		  </div>
    </div>
	
	
		

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
			
				
				<!-- HEADER -->
				<header id="nav" class="header header-1 no-transparent mobile-no-transparent">
				  <div class="header-wrapper">
					<div class="container-m-30 clearfix">
					  <div class="logo-row">
					  
						<!-- LOGO --> 
						<div class="logo-container-2">
                <div class="logo-2">
                  <a href="{{route('home')}}" class="clearfix">
                    <img src="images/VIC/VIC1.png" class="logo-img" alt="Logo">
                  </a>
                </div>
              </div>
						<!-- BUTTON --> 
						<div class="menu-btn-respons-container">
							<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
								<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
							</button>
						</div>
					 </div>
					</div>

					<!-- MAIN MENU CONTAINER -->
					<div class="main-menu-container">
						
						  <div class="container-m-30 clearfix">	
						  
								<!-- MAIN MENU -->
								<div id="main-menu">
								  <div class="navbar navbar-default" role="navigation">
		<!-- MAIN MENU LIST -->
									<nav class="collapse collapsing navbar-collapse right-1024">
									  <ul class="nav navbar-nav">
                      @if (Auth::guest())
                      <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('home')}}"><div class="main-menu-title">OVERVIEW</div></a>
                      </li>

                    <!-- MEGA MENU ITEM -->
                      <li>
                        <a href="{{route('aboutus')}}"><div class="main-menu-title">ABOUT US</div></a>
                      </li>	
                      
                      <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('teams')}}"><div class="main-menu-title">TEAM</div></a>
                      </li>	

                         <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('partners')}}"><div class="main-menu-title">PARTNERS</div></a>
                      </li>		
                          <!-- MENU ITEM -->
                       <li class="parent">
                          <a href="#"><div class="main-menu-title">HOW IT WORKS</div></a>
                            <ul class="sub">
                              <li><a href="{{route('references')}}">References</a></li>
                              <li><a href="{{route('downloads')}}">Downloads</a></li>
                              </ul>
                       </li>
   
                        <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('ideasubmission')}}"><div class="main-menu-title">IDEA SUBMISSION</div></a>
                      </li>	


                      

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        <a href="{{route('contact')}}"><div class="main-menu-title">CONTACT</div></a>
                      </li>

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        
                        <a class="main-menu-title" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">LOGIN</a>
                      </li>
										@else
											   <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('home')}}"><div class="main-menu-title">OVERVIEW</div></a>
                      </li>

                    <!-- MEGA MENU ITEM -->
                      <li>
                        <a href="{{route('aboutus')}}"><div class="main-menu-title">ABOUT US</div></a>
                      </li>	
                      
                      <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('teams')}}"><div class="main-menu-title">TEAM</div></a>
                      </li>	

                         <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('partners')}}"><div class="main-menu-title">PARTNERS</div></a>
                      </li>		
                          <!-- MENU ITEM -->
                       <li class="parent">
                          <a href="#"><div class="main-menu-title">HOW IT WORKS</div></a>
                            <ul class="sub">
                              <li><a href="{{route('references')}}">References</a></li>
                              <li><a href="{{route('downloads')}}">Downloads</a></li>
                              </ul>
                       </li>
   
                        <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('ideasubmission')}}"><div class="main-menu-title">IDEA SUBMISSION</div></a>
                      </li>	


                      

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        <a href="{{route('contact')}}"><div class="main-menu-title">CONTACT</div></a>
                      </li>

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        
                       
											  <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" class="main-menu-title" data-toggle="modal" >LOGOUT</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
											</li>
									  </ul>
						  			@endif
									</nav>
								  </div>
								</div>
								<!-- END main-menu -->
								
						  </div>
						  <!-- END container-m-30 -->
						
					</div>
					<!-- END main-menu-container -->
					
				  </div>
				  <!-- END header-wrapper -->
				  
				</header>
<br>
<br>

	

				<div class="page-section pt-110-cont">
					<div class="container">
          <div class="row">
              <div class="col-md-12">
                <div class="mb-40">
                  <h2 class="section-title"><span class="bold">References</span></h2>
                </div>
              </div>
            </div>
            <div class="row">
            
              <div class="member col-md-4 col-sm-4 wow fadeInUp" style="text-align:justify;">
                <div class="member-image">
                  <a href="http://startupindia.gov.in/learning-development/"><img src="images/si.png" alt="img"></a>
                </div>
                <a href="http://startupindia.gov.in/learning-development/"><h3>Startup India Learning Program</h3></a>
                <span>Startup India Learning Program is a free online Entrepreneurship program by Startup India, a GOI initiative. Invest India in collaboration with UpGrad has developed this program. The aim is to help entrepreneurs get their ideas and ventures to the next level through structured learning. The program covers lessons on key areas of starting up by 40+ top founders of India in an extensive 4-Week Program.</span>
              </div>
              
              <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="200ms" style="text-align:justify;">
                <div class="member-image">
                  <a href="https://www.entrepreneur.com/article/238908"><img src="images/EntrepreneurIndia.jpg" alt="img"></a>
                </div>
                <a href="https://www.entrepreneur.com/article/238908"><h3>15 Online Learning Sites Every Entrepreneur Should Visit </h3></a>
                <span>Being a successful entrepreneur means you have to wear a lot of hats, especially when your company is just starting out and you don’t have enough employees to cover all the areas you need. </span>
               
              </div>
              
              <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="400ms" style="text-align:justify;">
                <div class="member-image">
                 <a href="https://www.investmentnetwork.in/"><img src="images/logo-ain-colour.png" alt="img"></a> 
                </div>
                <a href="https://www.investmentnetwork.in/"><h3>Angel Investment Network</h3></a>
                <span>Well, we started small, but now our network has 30 branches extending to 80 different countries. We have 805,379 registered members with 144,800 investors and 660,579 entrepreneurs. This makes us the largest angel investment community in the world, and we’re growing daily. As a result, we’ve already raised Rs.2,000 Crore for some of the coolest startups in the UK and across the world.</span>
              </div>

              
            </div>
            <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="400ms" style="text-align:justify;">
                <div class="member-image">
                 <a href="https://yourstory.com/"><img src="images/Logo-FeatureImage-01.jpg" alt="img"></a> 
                </div>
                <a href="https://yourstory.com/"><h3>Your Story</h3></a>
                <span>When history reaches a turning point, there are those who watch and those who act. We at YourStory are both observers and participants in the making of new economic history. The purpose of our existence is to evaluate, expound and showcase the awesome spark of creation in every entrepreneur and changemaker. </span>
              </div>

            <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="400ms" style="text-align:justify;">
                <div class="member-image">
                 <a href="https://blog.angel.co/"><img src="images/angel-list.png" alt="img"></a> 
                </div>
                <a href="https://blog.angel.co/"><h3>Angel List</h3></a>
                <span>AngelList is a platform for startups, angel investors, and job-seekers looking to work at startups. Created in 2010, the platform has a mission to democratize the investment process. It started as an online introduction board for tech startups that needed seed funding. <br></span>
              </div>

					</div>

        </div>

        

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	        

        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<!-- JS begin -->

		<!-- jQuery  -->
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>		

		<!-- MAGNIFIC POPUP -->
		<script src="js/jquery.magnific-popup.min.js"></script>
    
    <!-- PORTFOLIO SCRIPTS -->
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    
    <!-- COUNTER -->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    
    <!-- APPEAR -->    
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    
    <!-- OWL CAROUSEL -->    
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    
    <!-- MAIN SCRIPT -->

		<script src="js/main.js"></script>
		
		<!-- REVOSLIDER SCRIPTS  -->
			<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
			<script type="text/javascript" src="rslider/js/jquery.themepunch.tools.min.js"></script>   
			<script type="text/javascript" src="rslider/js/jquery.themepunch.revolution-parallax.min.js"></script>
			<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
			<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution-parallax.min.js"></script>
      
      <!-- SLIDER REVOLUTION INIT  -->
			<script type="text/javascript">

				jQuery(document).ready(function() {
          if ( (navigator.appVersion.indexOf("Win")!=-1) && ( ieDetect == false ) ) {	
                    jQuery('#rs-fullscr').revolution(
                    {
                      dottedOverlay:"none",
                      delay:16000,
                      startwidth:1170,
                      startheight:700,
                      hideThumbs:200,
                      
                      thumbWidth:100,
                      thumbHeight:50,
                      thumbAmount:5,
                      
                      //fullScreenAlignForce: "off",
                      
                      navigationType:"none",
                      navigationArrows:"solo",
                      navigationStyle:"preview4",
                      
                      hideTimerBar:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      
                      swipe_velocity: 0.7,
                      swipe_min_touches: 1,
                      swipe_max_touches: 1,
                      drag_block_vertical: false,
                                  
                      parallax:"scroll",
                      parallaxBgFreeze:"on",
                      parallaxLevels:[45,40,35,50],
                      parallaxDisableOnMobile:"on",
                                  
                      keyboardNavigation:"off",
                      
                      navigationHAlign:"center",
                      navigationVAlign:"bottom",
                      navigationHOffset:0,
                      navigationVOffset:20,

                      soloArrowLeftHalign:"left",
                      soloArrowLeftValign:"center",
                      soloArrowLeftHOffset:20,
                      soloArrowLeftVOffset:0,

                      soloArrowRightHalign:"right",
                      soloArrowRightValign:"center",
                      soloArrowRightHOffset:20,
                      soloArrowRightVOffset:0,
                          
                      shadow:0,
                      fullWidth:"off",
                      fullScreen:"on",

                      spinner:"spinner4",
                      
                      stopLoop:"off",
                      stopAfterLoops:-1,
                      stopAtSlide:-1,

                      shuffle:"off",
                      
                      autoHeight:"off",						
                      forceFullWidth:"off",						
                                  
                      hideThumbsOnMobile:"off",
                      hideNavDelayOnMobile:1500,						
                      hideBulletsOnMobile:"off",
                      hideArrowsOnMobile:"off",
                      hideThumbsUnderResolution:0,
                      
                      hideSliderAtLimit:0,
                      hideCaptionAtLimit:0,
                      hideAllCaptionAtLilmit:0,
                      startWithSlide:0,
                      //fullScreenOffsetContainer: ""	
                    });
          } else {
                  jQuery('#rs-fullscr').revolution(
                    {
                      dottedOverlay:"none",
                      delay:16000,
                      startwidth:1170,
                      startheight:700,
                      hideThumbs:200,
                      
                      thumbWidth:100,
                      thumbHeight:50,
                      thumbAmount:5,
                      
                      navigationType:"none",
                      navigationArrows:"solo",
                      navigationStyle:"preview4",
                      
                      hideTimerBar:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      
                      swipe_velocity: 0.7,
                      swipe_min_touches: 1,
                      swipe_max_touches: 1,
                      drag_block_vertical: false,
                                  
                      parallax:"mouse",
                      parallaxBgFreeze:"on",
                      parallaxLevels:[0],
                      parallaxDisableOnMobile:"on",
                                  
                      keyboardNavigation:"off",
                      
                      navigationHAlign:"center",
                      navigationVAlign:"bottom",
                      navigationHOffset:0,
                      navigationVOffset:20,

                      soloArrowLeftHalign:"left",
                      soloArrowLeftValign:"center",
                      soloArrowLeftHOffset:20,
                      soloArrowLeftVOffset:0,

                      soloArrowRightHalign:"right",
                      soloArrowRightValign:"center",
                      soloArrowRightHOffset:20,
                      soloArrowRightVOffset:0,
                          
                      shadow:0,
                      fullWidth:"off",
                      fullScreen:"on",

                      spinner:"spinner4",
                      
                      stopLoop:"off",
                      stopAfterLoops:-1,
                      stopAtSlide:-1,

                      shuffle:"off",
                      
                      autoHeight:"off",						
                      forceFullWidth:"off",						
                                  
                      hideThumbsOnMobile:"off",
                      hideNavDelayOnMobile:1500,						
                      hideBulletsOnMobile:"off",
                      hideArrowsOnMobile:"off",
                      hideThumbsUnderResolution:0,
                      
                      hideSliderAtLimit:0,
                      hideCaptionAtLimit:0,
                      hideAllCaptionAtLilmit:0,
                      startWithSlide:0,
	
                    });      
          }									
				});	//ready
				
			</script>

<!-- JS end -->	
	

@endsection