@extends('layouts.master')

@section('content')

	
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
                                       <input class="btn btn-default btn-login" type="submit" value="Login" >
									
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
                                        <input class="btn btn-default btn-register" type="submit" value="Create account"  name="commit">
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
  <!-- PAGE TITLE -->
            <div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url(images/campus.jpg)">
                <div class="relative container align-left">
                    <br><br><br><br>
                </div>
            </div>
            <!-- DEVIDER -->
            <hr class="mt-0 mb-0">

            <!-- GOOGLE MAP & CONTACT FORM -->
            <div class="page-section">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="row">
                                <div id="googleMap">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7553.075109634609!2d73.26708383291432!3d18.81875146293836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e2b676c190e9%3A0xf77754195ba9b262!2sVishwaniketan&#39;s+Institute+of+Management+Entrepreneurship+and+Engineering+Technology!5e0!3m2!1sen!2sin!4v1457718494415" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-form-cont">
                                <!-- TITLE -->
                                <div class="mb-40">
                                    <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                                </div>

                                <!-- CONTACT FORM -->
                                <div>
                                    <form id="contact-form" action="http://abcgomel.ru/haswell/php/contact-form.php" method="POST">

                                        <div class="row">
                                            <div class="col-md-12 mb-30">
                                                <!-- <label>Your name *</label> -->
                                                <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mb-30">
                                                <!-- <label>Your email address *</label> -->
                                                <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-30">
                                                <!-- <label>Your name *</label> -->
                                                <input type="text" value="" data-msg-required="Please enter your subject" maxlength="100" class="controled" name="name" id="name" placeholder="SUBJECT" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mb-40">
                                                <!-- <label>Message *</label> -->
                                                <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 text-center-xxs">
                                                <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                                            </div>
                                        </div>

                                    </form>
                                    <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
                                        Thanks, your message has been sent to us.
                                    </div>

                                    <div class="alert alert-danger hidden animated shake" id="contactError">
                                        <strong>Error!</strong> There was an error sending your message.
                                    </div>
                                </div>
                            </div>
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