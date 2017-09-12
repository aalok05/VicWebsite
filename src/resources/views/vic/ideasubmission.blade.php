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


		 <section id="idea-form">
        <div class="container">
        
            <div class="row">
                <div class="wizard">

                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Personal Information">
                                    <span class="round-tab">
                                        <i class="fa fa-user-circle-o"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Member of Professional and  activities related to idea">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Experience">
                                    <span class="round-tab">
                                        <i class="fa fa-suitcase"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Proposed Business information">
                                    <span class="round-tab">
                                        <i class="fa fa-black-tie"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Enter Company Details">
                                    <span class="round-tab">
                                        <i class="fa fa-leaf"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="Have you been abroad thru UG Fellowship">
                                    <span class="round-tab">
                                        <i class="fa fa-institution"></i>
                                    </span>
                                </a>
                            </li>



                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form" class="form-horizontal" id="" name="idea-registration" action="" method="POST" enctype="multipart/form-data">
                        <div class="tab-content">

                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="step1">
                                    <!-- ****************************** Personal Information ******************************* -->
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-11">
                                            <label><strong><u>Personal Information:</u></strong></label>
                                        </div>
                                    </div>

                                    <!-- ********************** Name of Applicant ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="ApplicantName" class="control-label col-sm-3">Name of Applicant: *</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Full Name" data-msg-required="Please enter your Full Name." maxlength="100" class="form-control" name="Name" id="Name" required="true" />
                                                <span id="ApplicantNameError"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **************************** Father’s Name **************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FatherName" class="control-label col-sm-3">Father’s Name: *</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Father’s Name" data-msg-required="Please enter your Father’s Name." maxlength="100" class="form-control" name="FatherName" id="FatherName" required="" />
                                            </div>
                                        </div>
                                    </div>
                                   <!--  **********************************************************************  -->
                                    <!-- **************************** Mother’s Name **************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="MotherName" class="control-label col-sm-3">Mother’s Name:*</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Mother’s Name" data-msg-required="Please enter your Mother’s Name." maxlength="100" class="form-control" name="MotherName" id="MotherName" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->

                                    <!-- **********************************************************************  -->
                                    <!-- **************************** Education ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="Education" class="control-label col-sm-3">Education: *</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="(Branch, Year)" data-msg-required="Please enter your Education." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="Education" id="Education" required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ******************************** Email Id  **************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="Email" class="control-label col-sm-3">Email Id: *</label>
                                            <div class="col-sm-8">
                                                <input type="email" value="" placeholder="Enter Email Id" data-msg-required="Please enter your Email Id." maxlength="50" class="form-control" name="Email" id="Email" required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                             <!-- **************************** Address **********************************-->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="Address" class="control-label col-sm-3">Address:* </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="500" placeholder="maximum character length 500" data-msg-required="Please enter your Address." rows="3" class="form-control" name="Address" id="Address" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- **************************** City ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="City" class="control-label col-sm-3">City : *</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Enter city" value="" data-msg-required="Please enter your city." maxlength="50" class="form-control" name="City" id="City" required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->

                               
                                    <!-- **************************** Pin Code ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="Pincode" class="control-label col-sm-3">Pin Code: *</label>
                                            <div class="col-sm-4">
                                                <input type="number" placeholder="ex. 413110" min="0" value="" data-msg-required="Please enter your Pin Code." minlength="6" maxlength="10" class="form-control" name="Pincode" id="Pincode" required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- **********************************************************************  -->
                                    <div class="row">
                                        <div class="form-group">

                                            <!-- **************************** Mobile No. ******************************* -->
                                            <label for="MobileNumber" class="control-label col-sm-3">Mobile No.:  *</label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter Mobile No." data-msg-required="Please enter your Mobile No.." minlength="10" maxlength="10" class="form-control" name="MobileNumber" id="MobileNumber" required="true" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                            <!-- **************************** Date of Birth ******************************* -->
                                            <label for="DOB" class="control-label col-sm-2">Date of Birth:*</label>
                                            <div class="col-sm-3">
                                                <input type="date" value="" data-msg-required="Please enter your Date of Birth." class="form-control" name="DOB" id="DOB" required="true" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                           

                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- **********************************************************************  -->
                                    <div class="row">
                                        <div class="form-group">

                                            <!-- **************************** Sex ******************************* -->
                                            <label for="Sex" class="control-label col-sm-3">Sex:*</label>
                                            <div class="col-sm-3">
                                                <select data-msg-required="Please enter the Sex." class="form-control" name="Sex" id="Sex" required="true">
                                                    <option value="" disabled selected>Choose Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="NotToDisclose">Not To Disclose</option>
                                                </select>
                                            </div>
                                            <!-- **********************************************************************  -->
                                            <!-- **************************** Nationality ******************************* -->
                                            <label for="Nationality" class="control-label col-sm-2">Nationality: *</label>
                                            <div class="col-sm-3">
                                                <input type="text" value="" placeholder="Enter Nationality" data-msg-required="Please enter your Nationality." maxlength="30" class="form-control" name="Nationality" id="Nationality" required="true" />
                                            </div>
                                            <!-- **********************************************************************  -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">

                                            <!-- **************************** Pan No. ******************************* -->
                                            <label for="MobileNumber" class="control-label col-sm-3">Pan No.:  </label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter Pan No." data-msg-required="Please enter your Pan No.." minlength="10" maxlength="13" class="form-control" name="PanNumber" id="PanNumber" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                            <!-- **************************** Aadhar No.. ******************************* -->
                                             <label for="AadharNumber" class="control-label col-sm-2">Aadhar Card  No.:  </label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter Aadhar Card No." data-msg-required="Please enter your Aadhar card No.." minlength="12" maxlength="13" class="form-control" name="AadharNumber" id="AadharNumber" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">

                                            <!-- **************************** Voter Card No. ******************************* -->
                                            <label for="VoterNumber" class="control-label col-sm-3">Voter Card No.: </label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter Voter Card No." data-msg-required="Please enter your Voter Card No." minlength="10" maxlength="15" class="form-control" name="VoterNumber" id="VoterNumber" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                            <!-- **************************** Driving Lic. No.. ******************************* -->
                                             <label for="DrivingNumber" class="control-label col-sm-2">Driving Lic. No.:  </label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter Driving Lic. No." data-msg-required="Please enter your Driving Lic. No.." minlength="10" maxlength="15" class="form-control" name="DrivingNumber" id="DrivingNumber" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                         
                                        </div>
                                    </div>
                                     <!-- **************************** Passport No.. ******************************* -->
                                     <div class="row">
                                        <div class="form-group">
                                             <label for="AadharNumber" class="control-label col-sm-3">Paassport  No.:  </label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter Aadhar Card No." data-msg-required="Please enter your Passport No.." minlength="12" maxlength="13" class="form-control" name="PassportNumber" id="PassportNumber" required="" />
                                            </div>
                                            </div>
                                             </div>
                                    <!-- **********************************************************************  -->

                                    <!-- ******************************** Website, if any  **************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="Website" class="control-label col-sm-3">Website, if any: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Website If Any" data-msg-required="Please enter your Website If Any." maxlength="100" class="form-control" name="Website" id="Website" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *****************************************************************************  -->

                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" id="buttonstep1" class="btn btn-primary next-step">Next&nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i> </button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="step2">

                                    <!-- ******************************** Technical Association  **************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="TechnicalAssociation"><strong><u>Member of Professional / Technical Association: *</u></strong></label>
                                                <textarea maxlength="500" placeholder="maximum character length 500" data-msg-required="Please enter your Technical Association." rows="4" class="form-control" name="TechnicalAssociation" id="TechnicalAssociation" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *****************************************************************************  -->
                                    <!-- ******************************** ProfessionalActivities:  **************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="ProfessionalActivities"><strong><u>Any other Initiatives, professional activities related to idea: </u></strong></label>
                                                <textarea maxlength="500" placeholder="maximum character length 500" data-msg-required="Please enter your Professional Activities." rows="4" class="form-control" name="ProfessionalActivities" id="ProfessionalActivities" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *****************************************************************************  -->





                                </div>
                                <ul id="mainNav" class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-circle-left"></i> &nbsp; Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Next&nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i> </button></li>
                                </ul>
                            </div>


                            <div class="tab-pane" role="tabpanel" id="step3">
                                <div class="step3">


                                    <!-- *****************************  Experience ************************************ -->
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-11">
                                            <label><strong><u>Experience – could be part-time work, seasonal activity etc:</u></strong></label>
                                        </div>
                                    </div>
                                    <!-- *****************************************************************************  -->
                                    <!-- ********************** Seasonal Activity Marketing ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <label for="SeasonalActivityMarketing" class="control-label col-sm-2">Marketing: </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Seasonal Activity Marketing." rows="3" class="form-control" name="SeasonalActivityMarketing" id="SeasonalActivityMarketing" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** Seasonal Activity Industrial ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <label for="SeasonalActivityIndustrial" class="control-label col-sm-2">Industrial: </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Seasonal Activity Industrial." rows="3" class="form-control" name="SeasonalActivityIndustrial" id="SeasonalActivityIndustrial" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** Seasonal Activity Entrepreneurial ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <label for="SeasonalActivityEntrepreneurial" class="control-label col-sm-2">Entrepreneurial: </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your SeasonalActivityEntrepreneurial." rows="3" class="form-control" name="SeasonalActivityEntrepreneurial" id="SeasonalActivityEntrepreneurial" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** Seasonal Activity Business ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <label for="SeasonalActivityBusiness" class="control-label col-sm-2">Business: </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Seasonal Activity Business." rows="3" class="form-control" name="SeasonalActivityBusiness" id="SeasonalActivityBusiness" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** Seasonal Activity RD ******************************* -->
                                    <div class="row">

                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <label for="SeasonalActivityRD" class="control-label col-sm-2">R &D: </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Seasonal Activity RD." rows="3" class="form-control" name="SeasonalActivityRD" id="SeasonalActivityRD" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->



                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-circle-left"></i> &nbsp; Previous</button></li>
                                    <!--<li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Next&nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i> </button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="step4">
                                <div class="step3">

                                    <!-- ***************** Proposed Business information ******************** -->
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-11">
                                            <label><strong><u>Proposed Business information:</u></strong></label>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ******************** Technology Business Preference ***************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="TechnologyBusinessPreference">Technology Business Preference: *</label>
                                                <input type="text" value="" placeholder="Enter Technology Business Preference" data-msg-required="Please enter your Technology Business Preference." maxlength="100" class="form-control" name="TechnologyBusinessPreference" id="TechnologyBusinessPreference"
                                                       required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- ********************** What Is the Basic Idea  ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="BasicIdea">What Is the Basic Idea? </label>
                                                <textarea maxlength="500" placeholder="maximum character length 500" data-msg-required="Please enter your Basic Idea." rows="3" class="form-control" name="BasicIdea" id="BasicIdea" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- *********************************  Your strengths  ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="Strengths">Your strengths *</label>
                                                <textarea maxlength="150" placeholder="maximum character length 150" data-msg-required="Please enter your Strengths." rows="3" class="form-control" name="Strengths" id="Strengths" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- **********************Challenges / Competitors ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="Challenges">Challenges / Competitors*</label>
                                                <textarea maxlength="250" placeholder="maximum character length 250" data-msg-required="Please enter your Challenges." rows="3" class="form-control" name="Challenges" id="Challenges" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- ************************************ Opportunity ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="Opportunity">
                                                    Opportunity / Scope for growth from existing volume Seek professional help from finance advisor for approx. returns & investment
                                                    *
                                                </label>
                                                <textarea maxlength="150" placeholder="maximum character length 150" data-msg-required="Please enter your Opportunity." rows="3" class="form-control" name="Opportunity" id="Opportunity" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- ********************************** Threats / Risks  ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="Threats">Threats / Risks *</label>
                                                <textarea maxlength="250" placeholder="maximum character length 250" data-msg-required="Please enter your Threats." rows="3" class="form-control" name="Threats" id="Threats" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- *********************************************************************************  -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <!-- ********************************** Entity Type  ******************************* -->
                                            <div class="col-sm-5">
                                                <label for="EntityType">Which One Best Describes Your entity*</label>
                                                <div class="radio-group" data-msg-required="Please select one option.">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="EntityType" id="EntityTypeRadio1" value="Startup" required="" /> Startup
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="EntityType" id="EntityTypeRadio2" value="Existing" required="" />Existing
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="EntityType" id="EntityTypeRadio3" value="Yet to Startup" required="" /> Yet to Startup
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- *********************************************************************************  -->
                                            <!-- ********************************** Entity Type Start Date  *********************** -->
                                            <div class="col-sm-5">
                                                <label for="EntityTypeStartDate">(Please specify target date of incorporation)* </label>
                                                <input type="date" value="" data-msg-required="Please enter your Entity Type Start Date." class="form-control" name="StartDate" id="StarteDate" required="true" />
                                            </div>
                                            <!-- *********************************************************************************  -->
                                            <div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->


                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-circle-left"></i> &nbsp; Previous</button></li>
                                    <!--   <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Next&nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i> </button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="step5">

                                <div class="step3">

                                    <!-- ********************************** Company Details  ***************************** -->
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-9">
                                            <label><strong><u>Enter Company Details (If Applicable)</u></strong></label>
                                        </div>
                                        <div class="col-sm-2">
                                            <ul class="list-inline">
                                                <li><button type="button" class="btn btn-primary next-step">Skip &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i> </button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- **********************  Official Name of Company ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="NameOfCompany" class="control-label col-sm-3">Official Name of Company:</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Name Of Company" data-msg-required="Please enter Name Of Company." maxlength="100" class="form-control" name="NameOfCompany" id="NameOfCompany" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- **************************** Company Address:	 ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="CompanyAddress" class="control-label col-sm-3">Company Address:* </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="250" placeholder="maximum character length 250" data-msg-required="Please enter your Company Address." rows="3" class="form-control" name="CompanyAddress" id="CompanyAddress" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--********************************************************************************  -->
                                    <!-- **************************** City ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="Pincode" class="control-label col-sm-3">City : </label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Enter city" value="" data-msg-required="Please enter your city." maxlength="50" class="form-control" name="CompanyCity" id="CompanyCity" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->

                                    <!-- **************************** Company Pin Code ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="CompanyPinCode" class="control-label col-sm-3">Pin Code: </label>
                                            <div class="col-sm-4">
                                                <input type="number" placeholder="ex. 413110" value="" data-msg-required="Please enter your Company Pin Code." maxlength="10" class="form-control" name="CompanyPinCode" id="CompanyPinCode" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ****************************************************************************  -->
                                    <!-- ***********************************************************************************  -->
                                    <div class="row">
                                        <div class="form-group">
                                            <!-- **************************** Date of Incorporation ******************************* -->
                                            <label for="DateofIncorporation" class="control-label col-sm-3">Date of Incorporation: </label>
                                            <div class="col-sm-2">
                                                <input type="date" value="" data-msg-required="Please enter your Date of Incorporation." maxlength="20" class="form-control" name="DateofIncorporation" id="DateofIncorporation" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                            <!-- **************************** SEC Registration No ******************************* -->
                                            <label for="SECRegistrationNo" class="control-label col-sm-3">SEC Registration No.:</label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter SEC Registration No." data-msg-required="Please enter your SEC Registration No." maxlength="13" class="form-control" name="SECRegistrationNo" id="SECRegistrationNo" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- ***********************************************************************************-->
                                    <div class="row">
                                        <div class="form-group">
                                           <!--  **************************** Company PAN *********************************-->
                                            <label for="CompanyPAN" class="control-label col-sm-3">PAN No.:* </label>
                                            <div class="col-sm-2">
                                                <input type="number" value="" placeholder="Enter PAN No." data-msg-required="Please enter Company PAN No.." maxlength="30" class="form-control" name="CompanyPAN" id="CompanyPAN" required="" />
                                            </div>
                                             <!--*************************************************************************-->
                                             <!--**************************** Company TIN *******************************-->
                                            <label for="CompanyTIN" class="control-label col-sm-3">TIN No.:*</label>
                                            <div class="col-sm-3">
                                                <input type="number" value="" placeholder="Enter TIN No." data-msg-required="Please enter Company TIN No." maxlength="30" class="form-control" name="CompanyTIN" id="CompanyTIN" required="" />
                                            </div>
                                             <!--**********************************************************************-->
                                        </div>
                                    </div>
                                     <!--***************************************************************************  -->
                                    <!-- **************** Company Partners / Team Members ********************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="CompanyPartners" class="control-label col-sm-3">Company Partners / Team Members: </label>
                                            <div class="col-sm-8">
                                                <textarea maxlength="150" placeholder="maximum character length 150" data-msg-required="Please enter Company Partners." rows="3" class="form-control" name="CompanyPartners" id="CompanyPartners" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ********************************************************************************  -->
                                    <!-- **********************  Contact Person  ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="ContactPerson" class="control-label col-sm-3">Contact Person: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Contact Person" data-msg-required="Please enter Contact Person." maxlength="150" class="form-control" name="ContactPerson" id="ContactPerson" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- ***********************************************************************************  -->
                                    <div class="row">
                                        <div class="form-group">
                                            <!-- **************************** Contact Number ********************************* -->
                                            <label for="CompanyContactNumber" class="control-label col-sm-3">Contact Number: </label>
                                            <div class="col-sm-2">
                                                <input type="number" value="" placeholder="Enter Contact Number" data-msg-required="Please enter your Contact Number:." maxlength="15" class="form-control" name="CompanyContactNumber" id="CompanyContactNumber" required="" />
                                            </div>
                                            <!-- *************************************************************************  -->
                                            <!-- **************************** Contact Time ******************************* -->
                                            <label for="ContactTime" class="control-label col-sm-3">Contact Time:</label>
                                            <div class="col-sm-3">
                                                <input type="text" value="" placeholder="ex. 10.00am to 05.00pm" data-msg-required="Please enter Contact Time:" maxlength="30" class="form-control" name="ContactTime" id="ContactTime" required="" />
                                            </div>
                                            <!-- **********************************************************************  -->
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- ************  Technologies Used for development ************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="Technologies">Technologies Used for development: </label>
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Technologies." rows="3" class="form-control" name="Technologies" id="Technologies" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- ************  Target Market (Potential Size):  **** ************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="TargetMarket">Target Market (Potential Size): </label>
                                                <textarea maxlength="350" placeholder="maximum character length 350" data-msg-required="Please enter your Target Market (Potential Size)." rows="3" class="form-control" name="TargetMarket" id="TargetMarket" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- ************  Identical business you know / studied  **** ************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="IdenticalBusiness">Identical business you know / studied? </label>
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Identical business you know / studied." rows="3" class="form-control" name="IdenticalBusiness" id="IdenticalBusiness" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- ****************  Support expected from VIC ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-10">
                                                <label for="SupportExpected">Support expected from VIC: </label>
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Support expected from VIC." rows="3" class="form-control" name="SupportExpected" id="SupportExpected" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- ****************************  SpaceRequired ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="SpaceRequired" class="control-label col-sm-3">Estimated Office Space Required: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Estimated Office Space Required" data-msg-required="Please enter Estimated Office Space Required." maxlength="100" class="form-control" name="SpaceRequired" id="SpaceRequired" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************  -->
                                    <!-- ************************* Number of Employees ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="NumberOfEmployees" class="control-label col-sm-3">Number of Employees: </label>
                                            <div class="col-sm-4">
                                                <input type="number" placeholder="enter no of Employees" value="" data-msg-required="Please enter your Number of Employees." class="form-control" name="NumberOfEmployees" id="NumberOfEmployees" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************************  -->
                                    <!-- **************************** Support Services ********************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="SupportServices">Please Check All Office Support Services You Need: </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="checkbox-group" data-msg-required="Please select at least one option.">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox1" value="Infrastructure" required="" />Infrastructure
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox2" value="Rapid Prototype Consultancy" required="" />Rapid Prototype Consultancy
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox3" value="Idea assessment and vetting" required="" />Idea assessment and vetting
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox4" value="Electronic Product Designing Consultancy" required="" />Electronic Product Designing Consultancy
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox5" value="Mentors Assistance" required="" />Mentors Assistance
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox6" value="Legal Protection" required="" />Legal Protection
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox7" value="Financing Options" required="" />Financing Options
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="SupportServices" id="SupportServicesCheckbox8" value="Product Development Support" required="" />Product Development Support
                                                    </label><br />
                                                    <label>If others, please specify: </label>
                                                    <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Support Services." rows="3" class="form-control" name="SupportServices" id="SupportServices" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ****************************************************************************  -->


                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-circle-left"></i> &nbsp; Previous</button></li>

                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Next&nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i> </button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="step6">
                                <div class="step3">

                                    <!-- ****************************** UG Fellowship ******************************* -->
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-9">
                                            <label><strong><u>Have you been abroad thru UG Fellowship? If yes:</u></strong></label>
                                        </div>
                                        <div class="col-sm-2">
                                            <ul class="list-inline">
                                                <li><button type="button" class="btn btn-primary next-step">Skip &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i> </button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** University Name ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FellowshipUniversityName" class="control-label col-sm-3">University Name: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter University Name" data-msg-required="Please enter  University Name." maxlength="100" class="form-control" name="FellowshipUniversityName" id="FellowshipUniversityName" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** Department Name ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FellowshipDepartmentName" class="control-label col-sm-3">Department Name: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Department Name" data-msg-required="Please enter  Department Name:." maxlength="100" class="form-control" name="FellowshipDepartmentName" id="FellowshipDepartmentName" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- ********************** Professor In-charge ******************************* -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FellowshipProfessorIncharge" class="control-label col-sm-3">Professor In-charge: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Professor In-charge" data-msg-required="Please enter  Professor In-charge." maxlength="100" class="form-control" name="FellowshipProfessorIncharge" id="FellowshipProfessorIncharge" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- *****************Key Research areas of the professor******************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FellowshipResearchAreas" class="control-label col-sm-3">Key Research areas of the professor: </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" placeholder="Enter Key Research areas of the professor" data-msg-required="Please enter your Professor In-charge." maxlength="150" class="form-control" name="FellowshipResearchAreas" id="FellowshipResearchAreas" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- **Had he commercialized or licensed any technology before*********** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-7">
                                                <label for="FellowshiplicensedAnyTechnology">Had he commercialized or licensed any technology before? </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="radio-group" data-msg-required="Please select one option.">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshiplicensedAnyTechnology" id="FellowshiplicensedAnyTechnologyRadio1" value="Yes" required="" /> Yes
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshiplicensedAnyTechnology" id="FellowshiplicensedAnyTechnologyRadio2" value="No" required="" /> No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <!-- *********************** ApplicationBasedProject ********************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FellowshipApplicationBasedProject" class="control-label col-sm-3">
                                                Is it application based
                                            </label>
                                            <div class="radio-group" data-msg-required="Please select one option.">
                                                <div class="col-sm-7">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipApplicationBasedProject" id="FellowshipApplicationBasedProjectRadio1" value="project"> project you are going to work or
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipApplicationBasedProject" id="FellowshipApplicationBasedProjectRadio2" value="learning and gaining"> you will be just learning and gaining theoretical knowledge?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <br />
                                    <!-- *******************  Application Areas  **** ************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-9">
                                                <label for="FellowshipApplicationAreas">Which all application areas for the project you will be working on (Applications of global significance and specific to Indian context) </label>
                                                <textarea maxlength="300" placeholder="maximum character length 300" data-msg-required="Please enter your Application Areas." rows="3" class="form-control" name="FellowshipApplicationAreas" id="FellowshipApplicationAreas" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->
                                    <!-- * ************************ Working Prototype  ****************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="FellowshipWorkingPrototype" class="control-label col-sm-4">
                                                Will you complete working
                                            </label>
                                            <div class="radio-group" data-msg-required="Please select one option.">
                                                <div class="col-sm-7">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipWorkingPrototype" id="FellowshipWorkingPrototypeRadio1" value="Prototype"> Prototype or
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipWorkingPrototype" id="FellowshipWorkingPrototypeRadio2" value="project / experiment"> just a project / experiment?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <br />
                                    <!-- **********************  Demonstrable ******************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-7">
                                                <label for="FellowshipDemonstrable">Will you be able to replicate the demonstrable module / Solution once you are back in India? </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="radio-group" data-msg-required="Please select one option.">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipDemonstrable" id="FellowshipDemonstrableRadio1" value="Yes" required=""> Yes
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipDemonstrable" id="FellowshipDemonstrableRadio2" value="No" required=""> No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <br />
                                    <!-- **********************  Isknowledge ******************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-7">
                                                <label for="FellowshipIsknowledge">If its theoretical knowledge, Is it possible to derive some applications / prototypes around that knowledge? </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="radio-group" data-msg-required="Please select one option.">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipIsknowledge" id="FellowshipIsknowledgeRadio1" value="Yes" required="" /> Yes
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="FellowshipIsknowledge" id="FellowshipIsknowledgeRadio2" value="No" required="" /> No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- **********************************************************************  -->
                                    <br />
                                    <!-- *******************  Maintain Records  **** ************************** -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-9">
                                                <label for="FellowshipMaintainRecords">How you plan to maintain records of your learning? </label>
                                                <textarea maxlength="250" placeholder="maximum character length 250" data-msg-required="Please enter  Maintain Records." rows="3" class="form-control" name="FellowshipMaintainRecords" id="FellowshipMaintainRecords" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***************************************************************************  -->




                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-circle-left"></i> &nbsp; Previous</button></li>

                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Next&nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i> </button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="complete">
                                <div class="step44">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>
                                                Dear Sir ,
                                            </p>
                                            <p>
                                                I hereby declare that all the statements made by me in the application form and information sheet are true and complete to the best of my knowledge, belief and nothing has been concealed or suppressed.
                                                I understand that in case, any of my statements is found untrue during any stage of selection and thereafter, I shall be disqualified from the VIC and I shall be liable for any penal action.
                                                If any VIC lab / property / brand is damaged / misused by me / my company, I will be solely liable to bear the cost and refund the equivalent charges in lieu of the same; which could be either the resource / property replacement or the payment of amount.

                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="checkbox-group" data-msg-required="Please select at least one option.">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name="IAgree" id="IAgreeCheckbox1" value="IAgree" required="" />I Agree to the Terms and Conditions
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="IAgree"></label>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- ************************ Form submit button ************************* -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit"  value="Submit Idea" class="btn btn-primary btn-lg pull-right" ">
                                        </div>
                                    </div>
                                    <!-- ********************************************************************** -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
                
            </div>
          <span id="#tost">   </span>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <hr class="tall">
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
	
<script src="vendor/jquery/jquery.min.js"></script>


<script src="vendor/jquery.validation/jquery.validation.min.js"></script>


<script src="js/form-validation.js"></script>


<!-- Tabs form JS -->
<script src="js/form.js"></script>

        </div>

    
    </div>
        <script src="vendor/jquery/jquery.min.js"></script>

        <script src="vendor/jquery.appear/jquery.appear.min.js"></script>

        <script src="vendor/jquery.easing/jquery.easing.min.js"></script>

        <script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>

        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="vendor/common/common.min.js"></script>

        <script src="vendor/jquery.validation/jquery.validation.min.js"></script>

        <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

        <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>

        <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>

        <script src="vendor/isotope/jquery.isotope.min.js"></script>

        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>

        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <script src="vendor/vide/vide.min.js"></script>


    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>


        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>


        <!-- Current Page Vendor and Views -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>

        <script src="js/views/view.home.js"></script>


        <!-- Theme Custom -->
        <script src="js/custom.js"></script>


        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>


@endsection