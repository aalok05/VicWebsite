@extends('layouts.master')

@section('content')
<!--Container Starts-->
<div class="container">     
 <!--Login and Registration Start-->        
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
	
	<!--Login and Registration Ends-->

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

	  <!-- PAGE TITLE LARGE IMG -->
            <br><br>
            <div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url(images/campus.jpg);height:100%">
                <div class="relative container align-left">
                    <div class="row">
                        <div class="col-md-8">
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">

            <!-- ADS 2 -->
            <div class="page-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6  ">
                            <div class="fes2-main-text-cont">
                                <div class="title-fs-45">
                                    OUR<br>
                                    <span class="bold">CAMPUS</span>
                                </div>
                                <div class="line-3-100"></div>

                                <div class="fes2-text-cont" style="text-align:justify;">
                                    Institute of Management Entrepreneurship & Engineering Technology (iMEET) is housed in 20-acre campus located along the Mumbai-Pune expressway. Nearby landmarks are the Indiabulls Golf City, Godrej Ciy, Adlabs Imagica and so on. In fact, the campus will be surrounded by the biggest development hub of India in the very near future. <br><br>

                                    Industrial areas like Patalganga, Rasayani, Khalapur are very closely located. Industry from Hinjewadi, JNPT, Nagothane , Thane, Belapur, Seepz, Pimpri-Chinchwad and Chakan, are within an hourӳ drive from campus. The college campus has fully functional workshops, laboratories, 24-hour library and refreshments, hostel for girls and boys apart from home. The campus is designed to provide a comfortable experience so that students get a healthy environment for their personal development.<br><br>

                                    We provide buses from Khopoli, Airoli, Vashi, Nerul, Kharghar, Panvel, Karjat, Pen, Uran, Koparkhairane and Belapur to reach you to the campus within an hour..
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInRight">

                            <div class="ads-img-cont">
                                <img src="images/clg.png" alt="img">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- FEATURES 2 -->
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            <!-- ADS 1 -->
            <div class="page-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 left-50">
                            <div class="fes2-main-text-cont">
                                <div class="title-fs-45">
                                    OUR<br>
                                    <span class="bold">PHILOSOPHY</span>
                                </div>
                                <div class="line-3-100"></div>

                                <div class="fes2-text-cont" style="text-align:justify;"> Vishwaniketan believes that future entrepreneurs can be created by inculcating technical skills, life skills, innovation and creativity and by adding a design perspective in the teaching and learning process. We also believe that this is possible only with global exposure.
                                                                                        Our philosophy is to empower our teachers and students by providing them with such global exposure in order to fulfill our objectives of academic excellence leading to creation of Industry Ready Professionals.
                                                                                        We believe that this is possible with our commitment to Internationalize Education through collaborations with right Global Partners.
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 right-50 wow fadeInLeft">

                            <div class="ads-img-cont">
                                <img src="images/3.jpg" alt="img">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">

            <!-- ADS 1 -->
            <div class="page-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 left-50">
                            <div class="fes2-main-text-cont">
                                <div class="title-fs-45">
                                    <span class="bold">Dr. Ramjee Prasad</span>
                                </div>
                                <div class="line-3-100"></div>
                                <p style="color:#0088cc;">Hon. President, Vishwaniketan</p>
                                <div class="fes2-text-cont" style="text-align:justify;">
                                    Dr. Ramjee Prasad is currently the Director of Center for TeleInfrastructure (CTIF) at Aalborg University, Denmark and Professor, Wireless Information Multimedia Standadisation Forum for India GISFI established in 2009. GISFI aims to increase collaboration between European, Indian, Japanese and North-American standardization activities in the area of Information and Communication Technology (ICT) and related application areas. He was the Founder Chairman of the HERMES Partnership- a network of leading independent European research centres established in 1997 of which he is now the Honorary Chair.<br><br>
                                    He is also a knight (Ԓidderԩ of the Order of Dennebrog(2010) a distinguished award by the Queen of Denmark. He has received several international awards the latest being 2014 IEEE AESS Outstanding Organizational Leadership Award. He has been a Ph.D guide for over 100 students.
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 right-50 wow fadeInLeft">

                            <div class="ads-img-cont">
                                <img src="images/team/RamjiPrasad.png" alt="img">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">

            <!-- ADS 2 -->
            <div class="page-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6  ">
                            <div class="fes2-main-text-cont">
                                <div class="title-fs-45">

                                    <span class="bold">Dr. S. S. Inamdar</span>
                                </div>
                                <div class="line-3-100"></div>
                                <p style="color:#0088cc;">Managing Trustee/Secretary, Vishwaniketan</p>
                                <div class="fes2-text-cont" style="text-align:justify;">
                                    Dr. S.S. Inamdar holds a Doctorate in Electrical Engineering from National Institute of Industrial Engineering(NITIE).He has total 29 years of experience in education of which over 20 have been spent at leading institutes in the capacity of Director or Principal. <br><br>
                                    He was steering committee member of European Commission Project under Erasmus Mundus Programme titled ԍobility of LifeԮ Vishwaniketan is an outcome of this programme where he introduced the PBL method of learning.He has been working very closely with foreign universities under various collaboration programs. After studying education systems globally he is very strongly convinced that Indian education has to be transformed from theoretical (question-answer-marks cycle) to problem & Project Based Learning (PBL)
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInRight">

                            <div class="ads-img-cont">
                                <img src="images/team/DrSSInamdar.png" alt="img">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            <!-- ABOUT US 1 -->
            <div class="page-section pt-110-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-40">
                                <h2 class="section-title"><span class="bold">MANAGEMENT</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="member col-md-4 col-sm-4 wow fadeInUp">
                            <div class="member-image">
                                <img src="images/team/director.png" alt="img">
                            </div>
                            <h3>Dr. Janhavi Inamdar</h3>
                            <span>Director</span>
                            <ul class="team-social">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                            </ul>
                        </div>

                        <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="member-image">
                                <img src="images/team/ceo.png" alt="img">
                            </div>
                            <h3>Mr. R. S. Benjamin</h3>
                            <span>CEO</span>
                            <ul class="team-social">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                            </ul>
                        </div>

                        <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="400ms">
                            <div class="member-image">
                                <img src="images/team/principal.jpg" alt="img">
                            </div>
                            <h3>Dr. B. R. Patil</h3>
                            <span>Principal</span>
                            <ul class="team-social">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                            </ul>
                        </div>

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