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
<br>
<br>

<br>
<br>

	   <!-- CLIENTS 1 & TESTIMONIALS 1 -->
     <div class="w3-container">
  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Industry Partner')">Industry Partner</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Foreign University')">Foreign University</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Mentors')">Mentors</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Subject Matter Experts')">Subject Matter Experts</button>
  </div>
  
  <div id="Industry Partner" class="w3-container w3-border city">
  <br> 
<div class="col-md-7">
                            <div class="row client-row border-bot">
                                <a target="_blank" href="http://www.en.aau.dk/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/aalborg.png">
                                        <p>ZENSAR</p>
                                    </div>
                                </a>
                                <a target="_blank"  href="http://www.au.dk/en/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/aarhus.png">
                                        <p>TCS</p>
                                    </div>
                                </a>
                                    
                                <a target="_blank" href="http://www.ait.gr/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/athens.gif">
                                        <p>INFOSYS</p>
                                    </div>
                                </a>
                                <a target="_blank" href="https://www.uark.edu/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/arkansas.jpg">
                                        <p>AMAZON</p>
                                    </div>
                                </a>
                            </div>

                            <div class="row client-row">
                                <a target="_blank" href="https://www.stevens.edu/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/stevens.png">
                                        <p>WIPRO</p>
                                    </div>
                                </a>
                                <a target="_blank" href="https://urfu.ru/en/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img  alt="client" src="images/partners/ural.jpg">
                                        <p>MPHASIS</p>
                                    </div>
                                </a>
                                <a target="_blank"  href="http://web.uniroma2.it/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img alt="client" src="images/partners/vergata.jpg">
                                        <p>HCL</p>
                                    </div>
                                </a>
                                <a target="_blank" href="http://www.tu-sofia.bg/">
                                    <div class="col-xs-6 col-sm-3 text-center">
                                        <img  alt="client" src="images/partners/sofia.png">
                                        <p>JP MORGAN</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- TESTIMONIALS 1 -->
                        <div class="col-md-5">
                            <blockquote class="quote mb-0 pl-50-min-1169">
                                <p>25+ Companies in 10 countries partner with us. Meet our partners.</p>
                            </blockquote>
                        </div>

                    </div>
 
  

  <div id="Foreign University" class="w3-container w3-border city" style="display:none">
  <br> 
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

  <div id="Mentors" class="w3-container w3-border city" style="display:none">
<br>   
            
             <div class="row">

             
      <div class="col-sm-6 col-md-4">

       
        <img src="images/partners/mentors/1.png" class="img-responsive" width="200px"  alt="Image">
        <p><br><b>Dr. Constantinos B. Papadias</b><br>
        <b>Dean</b><br>
        
            <b>Athens</b> <br>
            Information Technology (AIT), in Athens, Greece
            
            Professor and Head of its Broadband Wireless and Sensor Networks (B-WiSE) Research Group. He is also Adjunct Professor at Aalborg University. He has published over 180 papers and 3 books and has received over 7000 citations for his work. He has also made standards  contributions and holds 12 patents. He was a Distinguished Lecturer of the IEEE Communications Society for 2012-2013 and is a Fellow of IEEE.
            
        </p>
      </div>
      <div class="col-sm-6 col-md-4">

        <img src="images/partners/mentors/2.png" class="img-responsive" width="200px"  alt="Image">
        <p><br><b>Dr. Aristodemos Pnevmatikakis</b><br>
        <b>Associate professor</b><br>
        
            <b>Athens</b> <br>
            Information Technology (AIT), in Athens, Greece
            
            With 20 years’ experience in Signal processing, his prime research interest is in systems for multimodal detection, tracking and identification, aiming at activity recognition in intelligent spaces. To this extend he utilises signals from cameras, microphones and wearable, environmental and domotics sensors. He is co-author of the books Audio-Visual Person Tracking: A Practical Approach (Imperial College Press, London, UK, Summer 2011) and Delta-Sigma Modulators, Modelling, Design and Applications (Imperial College Press, London, UK, 2003).
            
        </p>
      </div>
      <div class="col-sm-6 col-md-4">

        <img src="images/partners/mentors/3.png" class="img-responsive" width="200px"  alt="Image">
        <p><br><b>Dr. Dimitrios Ntaikos</b><br>
        <b>Research Scientist </b><br>
        
            <b>Athens</b> <br>
            Information Technology (AIT), in Athens, Greece              
            Have done Research Commission of NTUA, contract on “MIMO technologies for satellite and stratospheric communications”. Α) Design process on MIMO systems for satellite and stratospheric communications. Β) Measurement of MIMO radio channels - Measurements' processing. Also, Research Commission of AUTH, measuring power density of electromagnetic radiation, and Research Commission of AUTH, contract on “Computer Applications for Satellite Communications II. Improved interactive wideband access through best convergence of services using DVB-RCS technology”etc.
            
          </p>
      </div>
      <div class="col-sm-6 col-md-4">

        <img src="images/partners/mentors/4.png" class="img-responsive" width="200px"  alt="Image">
        <p><br><b>Dr. George Papageorgiou</b><br>
        <b>Research Scientist </b><br>
        
           <b>Athens</b> <br>
            Information Technology (AIT), Greece
            
            George Papageorgiou received his BSc Degree in Applied Mathematics from the National and Technical University of Athens (SEMFE, NTUA) in 2007, the M.Sc. degree in Applied Mathematics in 2012 and his   Ph.D. degree in Informatics and Telecommunications in 2016 from the National and Kapodistrian University of Athens (UOA). His research interests include Sparse Optimization methods, Robust Algorithms, Machine Learning, Nonlinear Estimation, Adaptive and Distributed Learning, Wireless Communications and Information Theory. Has proposed several journal articles and peer-reviewed conference publications.
            
            
          </p>
      </div>
      <div class="col-sm-6 col-md-4">

        <img src="images/partners/mentors/5.png" class="img-responsive" width="200px"   alt="Image">
        <p><br><b>Dr. Gregory Yovanof</b><br>
        <b>Professor</b><br>
        
            <b>Athens</b><br>
            Information Technology (AIT), Greece
            
            Over twenty-year R&D and Business Development experience in the areas of: Design of communication systems, and Production of Multimedia ASIC chips. Areas of expertise: Broadband wireless communications; Design of multimedia systems; Applications of information theory; Commercialization of technological innovations. Business Development experience with hi-tech companies from the greater Pacific Rim region. Exposed to the structured environment of a big corporation as well as the creative chaos of a start-up. Member of an executive team that succeeded in raising VC funds to launch a company in Silicon Valley. Associate Dean at AIT, Head of the Broadband Wireless and Sensor Networks R&D group at AIT, and the Academic Director of a M.Sc. program in the Management of Innovation.
            
          </p>
      </div>
      <div class="col-sm-6 col-md-4">

          <img src="images/partners/mentors/6.png" class="img-responsive" width="200px"   alt="Image">
          <p><br><b>Dr. Faidon Komisopoulos</b><br>
          <b>Senior Research Scientist </b><br>
          
              <b>Athens</b> <br>
              Information Technology (AIT), Greece
              
              Studied Business Administration and Computer Science. Obtained his MBA from “Haute Ecole Groupe ICHEC - ISC St Louis”. His PHD thesis was on “Creation of a Model for Estimating and Managing an Organization’s Capability to Innovate, using the Innovation Management Techniques” (University of Piraeus 2011). 
              
              Right now, he is lecturing on “Managing Information Systems”, “Strategic management” and “Innovation and Entrepreneurship” in several Universities and Colleges. 
              He has published more than 10 Papers and Publications over the 4 past years. A lot of research activities, consulting, and adult training programmes. Former commercial director in multinational company with adequate managerial experience.
              
            </p>
      </div>
      <div class="col-sm-6 col-md-4">

          <img src="images/partners/mentors/7.png" class="img-responsive"  width="200px"  alt="Image">
          <p><br><b>Mr. Maruti Pawar</b><br>
          <b>Promoter - Amptronics </b><br>
          
              <b>India</b> <br>
              
              Leading supplier & manufacturer of furnaces, gas mixing Stations, Automatic Argon Purging Systems, Ladles & Vessels and Fuel Extraction Systems such as FES Bags Houses and FES Panels. 
              Mentors Vishwaniketan students and staff in projects related to mechanical & electrical, related to metallurgy & machine design.
              
            </p>
      </div>
      <div class="col-sm-6 col-md-4">

          <img src="images/partners/mentors/8.png" class="img-responsive" width="200px"  alt="Image">
          <p><br><b>Mr. Krishna Sirohi</b><br>
          <b>Founder & President – i2TB Research and Foundation,</b><br>
          
              <b>India</b><br>
              
              Short summary              
              
            </p>
      </div>
      <div class="col-sm-6 col-md-4">

          <img src="images/partners/mentors/9.png" class="img-responsive"  width="200px"  alt="Image">
          <p><br><b>Mauro De Sanctis</b><br>
          <b>Associate Editor – Space Electronics and Communications, IEEE Aerospace and Electronic Systems Magazine</b><br>
          
              <b>Denmark</b><br>
              He is serving as Associate Editor for the Space Electronics and Communications area of the IEEE Aerospace and Electronic Systems Magazine. His main areas of interest are: wireless terrestrial and satellite communication networks, data mining and information theory. He co-authored more than 80 papers published on journals and conference proceedings. He was co-recipient of the best paper award from the 2009 International Conference on Advances in Satellite and Space Communications (SPACOMM 2009).
              
            </p>
      </div>
      <div class="col-sm-6 col-md-4">

          <img src="images/partners/mentors/10.png" class="img-responsive" width="200px"  alt="Image">
          <p><br><b>Viktor Yeshchenko </b><br>
          <b>Engineer - Igor Sikorsky Kyiv Polytechnic Institute</b><br>
          
              <b>Kiev, Ukraine</b><br>

              •	Worked in three scientific biomechanical projects in collaboration with academic staff from several medical institutions (including military hospital);
              •	Designed strength of biomechanical structures of lower limbs and jaw with isotropic/anisotropic/viscoelastic mechanical properties, various fractures, osteosynthesis systems and implants, under static and dynamic load conditions;
              •	Created methodical, algorithms and computer program (for calculating pressure values and forces using Fuji Prescale Pressure Film);
              Conducted complicated CAD modelling on basis of computer tomography scans of human   bones and FEA analyses of stress-strain state to study strength and reliability parameters of biomechanical systems
              
              
            </p>
      </div>
  </div>
  </div>

  </div>

  <div id="Subject Matter Experts" class="w3-container w3-border city" style="display:none">
<br>        
              <div class="member col-md-4 col-sm-4">
                            <div class="member-image">
                                <img src="images/team/director.png" alt="img"  >
                            </div>
                            <h3>Dr. Janhavi Inamdar</h3>
                            <span>Director</span>
                            <ul class="team-social">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                            </ul>
                        </div>

                        <div class="member col-md-4 col-sm-4" data-wow-delay="200ms">
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

                        <div class="member col-md-4 col-sm-4" data-wow-delay="400ms">
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
        
				<!-- WORK PROCESS 1 -->

				
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

<!--Tab Script-->
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
<!-- JS end -->	
	

@endsection