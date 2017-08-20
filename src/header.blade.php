@section('header')
				<!-- HEADER -->
				<header id="nav" class="header header-1">
				  <div class="header-wrapper">
					<div class="container-m-30 clearfix">
					  <div class="logo-row">
					
						<!-- LOGO --> 
						<div class="logo-container-2">
                <div class="logo-2">
                  <a href="index.html" class="clearfix">
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

                      <!-- MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">HOW IT WORKS</div></a>
                      </li>
                      
                      <!-- MEGA MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">ABOUT US</div></a>
                      </li>					
                      
                      <!-- MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">PARTNERS</div></a>
                      </li>					
                      
                        <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('ideasubmission')}}"><div class="main-menu-title">IDEA SUBMISSION</div></a>
                      </li>	


                      <!-- MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">TEAM</div></a>
                      </li>	

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        <a href="#"><div class="main-menu-title">CONTACT</div></a>
                      </li>

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        
                        <a class="main-menu-title" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">LOGIN</a>
                      </li>
										@else
											   <li>
                        <a href="{{route('home')}}"><div class="main-menu-title">OVERVIEW</div></a>
                      </li>

                      <!-- MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">HOW IT WORKS</div></a>
                      </li>
                      
                      <!-- MEGA MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">ABOUT US</div></a>
                      </li>					
                      
                      <!-- MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">PARTNERS</div></a>
                      </li>					
                      
                      
                        <!-- MENU ITEM -->
                      <li>
                        <a href="{{route('ideasubmission')}}"><div class="main-menu-title">IDEA SUBMISSION</div></a>
                      </li>	

                      <!-- MENU ITEM -->
                      <li>
                        <a href="#"><div class="main-menu-title">TEAM</div></a>
                      </li>	

                      <!-- MENU ITEM -->
                      <li id="menu-contact-info-big">
                        <a href="#"><div class="main-menu-title">CONTACT</div></a>
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
@endsection