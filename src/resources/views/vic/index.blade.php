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
	
		<!-- LOADER -->	
		<div id="loader-overflow">
      <div id="loader3">Please enable JS</div>
    </div>	

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
				<!--[if lte IE 8]>
				<div id="ie-container">
					<div id="ie-cont-close">
						<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
					</div>
					<div id="ie-cont-content" >
						<div id="ie-cont-warning">
							<img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
						</div>
						<div id="ie-cont-text" >
							<div id="ie-text-bold">
								You are using an outdated browser
							</div>
							<div id="ie-text">
								For a better experience using this site, please upgrade to a modern web browser.
							</div>
						</div>
						<div id="ie-cont-brows" >
							<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
							<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
							<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
							<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
						</div>
					</div>
				</div>
				<![endif]-->
				
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
				
			<!-- REVO SLIDER FULLSCREEN 1 -->
				<div class="relative">
					<div class="rs-fullscr-container">
						
						<div id="rs-fullscr" class="tp-banner" >
							<ul>	
								<!-- SLIDE 1 -->
								<li data-transition="fade" data-slotamount="1" data-saveperformance="on" data-masterspeed="1500">
									<!-- MAIN IMAGE -->
									 
									<img src="images/revo-slider/dummy.png"  alt="slidebg1" data-lazyload="images/revo-slider/startup.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

								
									
									<div class="tp-caption font-white light-69-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      						data-y="center" 
                     						 data-voffset="-85" 
											data-speed="500"
											data-start="850"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">WELCOME
										</div>
										
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-white light-56-wide sfb tp-resizeme"
											data-x="center"
											data-y="center" 
											data-speed="500"
											data-start="1050"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">TO
										</div>
										
										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-white light-72-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      						data-y="center" 
                      						data-voffset="87" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><span class="bold" style="letter-spacing: 10px;">Vishwaniketan Incubation Centre</span>
										</div>

								</li>

								<!-- SLIDE 2 -->
								<li data-transition="zoomout" data-slotamount="1" data-saveperformance="on" data-masterspeed="1500">
									
                  <!-- MAIN IMAGE -->
                  <img src="images/revo-slider/dummy.png"  alt="slidebg2" data-lazyload="images/revo-slider/index.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
									
									<!-- LAYER NR. 1 -->
										<div class="tp-caption font-white light-69-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      						data-y="center" 
                     						 data-voffset="-85" 
											data-speed="500"
											data-start="850"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">GREAT TEAMS
										</div>
										
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-white light-56-wide sfb tp-resizeme"
											data-x="center"
											data-y="center" 
											data-speed="500"
											data-start="1050"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">BUILD
										</div>
										
										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-white light-72-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      data-y="center" 
                      data-voffset="87" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><span class="bold" style="letter-spacing: 15px;">GREAT IDEAS</span>
										</div>

									
								</li>
								
								<!-- SLIDE 3 -->
								<li data-transition="zoomout" data-slotamount="1" data-saveperformance="on" data-masterspeed="1500">
									
                  <!-- MAIN IMAGE -->
									<img src="images/revo-slider/dummy.png"  alt="citybg" data-lazyload="images/revo-slider/productize.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
									
									<div class="tp-caption font-white light-69-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      						data-y="center" 
                     						 data-voffset="-85" 
											data-speed="500"
											data-start="850"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">READY
										</div>
										
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-white light-56-wide sfb tp-resizeme"
											data-x="center"
											data-y="center" 
											data-speed="500"
											data-start="1050"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">TO
										</div>
										
										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-white light-72-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      data-y="center" 
                      data-voffset="87" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><span class="bold" style="letter-spacing: 15px;">PRODUCTIZE!</span>
										</div>
									
								</li>

							</ul>
					
						</div>
						
					</div>	

				</div>

					
					<!-- SCROLL ICON -->
					<div class="local-scroll-cont">
						<a href="#about" class="scroll-down smooth-scroll">
              <div class="icon icon-arrows-down"></div>
            </a>  
					</div>
					
				</div>

				<br><br>
        <!-- WORK PROCESS 1 -->

        <div class="page-section " >
        <div class="work-proc-1-bg" >
          <div class="container fes4-cont">
            <div class="row">
              
              <div class="col-md-4 ">
                <div class="mb-50">
                  <h2 class="section-title">WORK <span class="bold">PROCESS</span></h2>
                </div>
                <p class="mb-50 " >The process is simple & effective to get you moving fast.... </p>
              </div>
              <div class="col-md-7 col-lg-offset-1">
                <div class="row">
                
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box">
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-lightbulb"></div>
                        </div>
                        <h3><span class="bold">IDEA</span></h3>
                         </div>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-gear"></div>
                        </div>
                        <h3><span class="bold">SCREENING</span></h3>
                      </div>
                    </div>
                  </div>

                </div>
                
                <div class="row">
                
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-laptop"></div>
                        </div>
                        <h3><span class="bold">APPROVAL</span></h3>
                      </div>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-paperplane"></div>
                        </div>
                        <h3><span class="bold">BUILD</span></h3>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>        
        </div>

				<!-- FEATURES 1 -->
				<div id="about" class="page-section">
  <div class="container fes1-cont">
    <div class="row">

      <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20" style="visibility: hidden; animation-name: none;">
        <img src="images/group.jpg" alt="img">
      </div>

      <div class="col-md-8">

        <div class="row">
          <div class="col-md-12">
            <div class="fes1-main-title-cont wow fadeInDown" style="visibility: hidden; animation-name: none;">
              <div class="title-fs-60">
                WHY ARE WE<br>
                <span class="bold">DIFFERENT</span>
              </div>
              <div class="line-3-100"></div>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" style="visibility: hidden; animation-name: none;">
              <div class="fes1-box-icon">
                <div class="icon icon-basic-mixer2"></div>
              </div>
              <h3>WE AIM TO PRODUCE DESIGN ENGINEERS</h3>
              <p>Vishwaniketan is breaking the wheel of conventional engineering education</p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
              <div class="fes1-box-icon">
                <div class="icon icon-basic-lightbulb"></div>
              </div>
              <h3>WE PRODUCE 'READY TO USE' GRADUATES TO INDUSTRY</h3>
              <p></p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" data-wow-delay="400ms" style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
              <div class="fes1-box-icon">
                <div class="icon icon-basic-helm"></div>
              </div>
              <h3>WE EXCEL IN 'PROJECT BASED LEARNING'</h3>
              <p></p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" data-wow-delay="600ms" style="visibility: hidden; animation-delay: 600ms; animation-name: none;">
              <div class="fes1-box-icon">
                <div class="icon icon-basic-settings"></div>
              </div>
              <h3>WE COLLABORATE WITH LOCAL AND GLOBAL CULTURES</h3>
              <p></p>
            </div>
          </div>

        </div>                    

      </div>

    </div>
  </div>
</div>
  
				<!-- DIVIDER -->

				<hr class="mt-0 mb-0">			


				<!-- FEATURES 2 -->
				<div class="page-section">
					<div class="container-fluid">
						<div class="row">
            
							<div class="col-md-6 wow fadeInLeft equal-height ">
								<div class="fes2-main-text-cont">
									<div class="title-fs-45">
										OUR<br>
										<span class="bold">MISSION</span>
									</div>
									<div class="line-3-70"></div>
									<div class="fes2-text-cont">To create an institution of global excellence where the Vishwaniketan graduate will be 'ready to use' for industry.</div>
								</div>
							</div>
              
							<div class="col-md-6">
								<div class="row">
									<div class="fes2-img equal-height"></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>

				<!-- FEATURES 3 -->
				<div class="page-section">
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-6 left-50 wow fadeInRight equal-height">
									<div class="fes2-main-text-cont">
										<div class="title-fs-45">
											OUR<br>
											<span class="bold">VISION</span>
										</div>
										<div class="line-3-100"></div>
										<div class="fes2-text-cont">Vishwaniketan will provide quality engineering education to create 'Design Engineers'. Our engineers will positively impact their own lives and also society at large. They will do so by implementing Project Based Learning(PBL) approach to solve human and technology problems. We aim to create socially aware entrepreneurs who will empower society with relevant technology and business solution.</div>
									</div>
							</div>
              
              <div class="col-md-6 right-50">
								<div class="row">
									<div class="fes3-img equal-height" ></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	

				<!-- FEATURES 4 -->
<div class="page-section fes4-cont">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" style="visibility: hidden; animation-name: none;">
          <h2 class="section-title">OUR <span class="bold">FOCUS</span></h2>
        </div>
      </div>            
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
          <div class="fes4-title-cont">
            <div class="fes4-box-icon">
              <div class="icon icon-basic-picture"></div>
            </div>
            <h3><span class="bold">LIFE SKILLS DEVELOPMENT</span></h3>
            <p>We believe life and business skills are important alike. We strive to instill creativity and innovation, willingness to work and a happy lifestyle in student and teachers.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="400ms" style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
          <div class="fes4-title-cont">
            <div class="fes4-box-icon">
              <div class="icon icon-basic-share"></div>
            </div>
            <h3><span class="bold">PROJECT BASED LEARNING</span></h3>
            <p>PBL is a proven instrument to create future-ready professionals/entrepreneurs who will work on product devlopment oriented, 'Patent' based research and commercialisation of Intellectual Property.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="600ms" style="visibility: hidden; animation-delay: 600ms; animation-name: none;">
          <div class="fes4-title-cont">
            <div class="fes4-box-icon">
              <div class="icon icon-basic-target"></div>
            </div>
            <h3><span class="bold">BUSINESS INCUBATION AND STARTUPS</span></h3>
            <p>We create a 'enterpreneur friendly' environment for creation and prosperity of young startups.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="800ms" style="visibility: hidden; animation-delay: 800ms; animation-name: none;">
          <div class="fes4-title-cont">
            <div class="fes4-box-icon">
              <div class="icon icon-basic-settings"></div>
            </div>
            <h3><span class="bold">INDUSTRY COLLABORATIONS</span></h3>
            <p>We bridge the gap between industry and academics by collaborating with industry experts.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="1000ms" style="visibility: hidden; animation-delay: 1000ms; animation-name: none;">
          <div class="fes4-title-cont">
            <div class="fes4-box-icon">
              <div class="icon icon-basic-globe"></div>
            </div>
            <h3><span class="bold">INTERNATIONAL COLLABORATIONS</span></h3>
            <p>25+ Universities in 10 countries partner with us. We encourage a culturally diverse environment for maximum exposure for our</p>
          </div>
        </div>
      </div>              

    </div>
  </div>
</div>        
         
        

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	
        
        <!-- CLIENTS 1 & TESTIMONIALS 1 -->
        <div class="page-section p-110-cont">
					<div class="container">
            <div class="row">
            
              <div class="col-md-12">
                <div class="mb-50">
								  <h2 class="section-title">OUR <span class="bold">PARTNERS</span></h2>
								</div>
							</div>
              
						</div>
            <div class="row">
                  <!-- CLIENTS 1 -->
                        <div class="col-md-7">
                            <div class="row client-row border-bot">
                                <a target="_blank" href="http://www.en.aau.dk/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/aalborg.png">
                                        <p>AALBORG UNIVERSITY</p>
                                    </div>
                                </a>
                                <a href="http://www.au.dk/en/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/aarhus.png">
                                        <p>AARHUS UNIVERSITY</p>
                                    </div>
                                </a>
                                    
                                <a target="_blank" href="http://www.ait.gr/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/athens.gif">
                                        <p>ATHENS INSTITUTE OF TECHNOLOGY</p>
                                    </div>
                                </a>
                                <a target="_blank" href="https://www.uark.edu/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/arkansas.jpg">
                                        <p>UNIVERSITY OF ARKANSAS</p>
                                    </div>
                                </a>
                            </div>

                            <div class="row client-row">
                                <a target="_blank" href="https://www.stevens.edu/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/stevens.png">
                                        <p>STEVENS INSTITUTE OF TECHNOLOGY</p>
                                    </div>
                                </a>
                                <a target="_blank" href="https://urfu.ru/en/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img  alt="client" src="images/partners/ural.jpg">
                                        <p>URAL FEDERAL UNIVERSITY</p>
                                    </div>
                                </a>
                                <a target="_blank"  href="http://web.uniroma2.it/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/vergata.jpg">
                                        <p>UNIVERSITY OF ROME TOR VERGATA</p>
                                    </div>
                                </a>
                                <a target="_blank" href="http://www.tu-sofia.bg/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img  alt="client" src="images/partners/sofia.png">
                                        <p>TECHNICAL UNIVERSITY SOFIA</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- TESTIMONIALS 1 -->
                        <div class="col-md-5">
                            <blockquote class="quote mb-0 pl-50-min-1169">
                                <p>25+ Universities in 10 countries partner with us. Meet our partners.</p>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>

        
				
				<!-- WORK PROCESS 1 -->

				

				<!-- ABOUT US 2 -->
				<div class="page-section about-us-2-cont pt-100-cont">
					<div class="container">
          
            <div class="row">
              <div class="col-md-12">
                <div class="mb-40">
								  <h2 class="section-title">OUR <span class="bold">TEAM</span></h2>
								</div>
							</div>
						</div>
            
            <div class="page-section pt-110-cont">
          <div class="container">
            <div class="row">
            
              <div class="member col-md-4 col-sm-4 wow fadeInUp">
                <div class="member-image">
                  <img src="images/team/khandekar.jpg" alt="img">
                </div>
                <h3>Dhananjay Khanzode</h3>
                <span>Director</span>
                <ul class="team-social">
                  <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                  <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                  <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                </ul>
              </div>
              
              <div class="member col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="member-image">
                  <img src="images/team/sandeep.jpg" alt="img">
                </div>
                <h3>Dr. Sandeep Inamdar</h3>
                <span>Managing Trustee and Secretary</span>
                <ul class="team-social">
                  <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                  <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                  <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                </ul>
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