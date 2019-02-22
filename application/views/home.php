﻿<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Xsilica</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/et-line.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plyr.css">
    <link rel="stylesheet" href="assets/css/flag.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css">


    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="..assets/js/html5shiv.min.js"></script>
    <script src="..assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <header class="header-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-top">
                        <div class="logo-area">

                            <h4>Xsilica</h4>
                        </div>
                        <div class="header-top-toggler">
                            <div class="header-top-toggler-button"></div>
                        </div>
                        <div class="top-nav">
                            <!-- <div class="dropdown header-top-notification">
                  <a href="#" class="notification-button">Notification</a>
                  <div class="notification-card">
                    <div class="notification-head">
                      <span>Notifications</span>
                      <a href="#">Mark all as read</a>
                    </div>
                    <div class="notification-body">
                      <a href="home-2.html" class="notification-list">
                        <i class="fas fa-bolt"></i>
                        <p>Your Resume Updated!</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-check-square"></i>
                        <p>You applied for Project Manager <span>@homeland</span></p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-user"></i>
                        <p>You changed password</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                    </div>
                    <div class="notification-footer">
                      <a href="#">See all notification</a>
                    </div>
                  </div>
                </div> -->
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                            <div class="dropdown header-top-account login-modals">
                                <button title="Title" type="button" data-toggle="modal"
                                    data-target="#exampleModalLong">Login</button>
                                <button title="Title" type="button" data-toggle="modal"
                                    data-target="#exampleModalLong2">Registration</button>
                            </div>
                            <select class="selectpicker select-language" data-width="fit">
                                <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English
                                </option>
                                <option data-content='<span class="flag-icon flag-icon-ae"></span> Arabic'>Arabic
                                </option>
                            </select>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg cp-nav-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="menu-item active"><a title="Home" href="home.html">Home</a></li>

                                <li class="menu-item dropdown">
                                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                        aria-haspopup="true" aria-expanded="false">Doctors</a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item"><a href="candidate.html">Doctors Listing</a></li>
                                        <li class="menu-item"><a href="candidate-details.html">Doctors Details</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                        aria-haspopup="true" aria-expanded="false">Hospitals</a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item"><a href="employer-listing.html">Hosptials Listing</a></li>
                                        <li class="menu-item"><a href="employer-details.html">Hospital Details</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item"><a href="contact.html">Complaints</a></li>

                                <li class="menu-item"><a href="contact.html">Contact Us</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Modal -->
    <div class="account-entry">
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i data-feather="user"></i>Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
            <form method="post" action="<?php echo base_url(); ?>login/validation">
             
              <div class="form-group">
              <label>Enter Email Address</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                 </div>
              <div class="form-group">
              <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                   </div>
              <div class="more-option">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    Remember Me
                  </label>
                </div>
                <a href="#">Forget Password?</a>
              </div>
              <input type="submit" name="login" value="Login" class="button primary-bg btn-block" /> 
                
              <!-- <button class="button primary-bg btn-block">Login</button> -->
            </form>
            <div class="shortcut-login">
              <span>Or connect with</span>
              <div class="buttons">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
              </div>
              <p>Don't have an account? <a href="#">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <div class="account-type">
                <a href="#" class="candidate-acc active"><i data-feather="user"></i>Membership</a>
               </div> -->
            <!-- <form action="#"> -->
            <form method="post" action="<?php echo base_url(); ?>register/validation">
   
              <div class="form-group">
              <label>Enter Your Name</label>
              <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
 
              </div>
              <div class="form-group">
              <label>Enter Your Valid Email Address</label>
              <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
              <div class="form-group">
              <label>Enter Password</label>
              <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
    </div>
              <div class="more-option terms">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                  <label class="form-check-label" for="defaultCheck2">
                    I accept the <a href="#">terms & conditions</a>
                  </label>
                </div>
              </div>
              <input type="submit" name="register" value="Register" class="button primary-bg btn-block" />
  
              <!-- <button class="button primary-bg btn-block">Register</button> -->
            </form>
            <div class="shortcut-login">
              <span>Or connect with</span>
              <div class="buttons">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
              </div>
              <p>Already have an account? <a href="#">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        <!-- Banner -->
        <div class="banner banner-2 banner-2-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content">
                            <h1>Health Care for All</h1>
                            <p>Apply online for Medical Licenses & Clinical Permits</p>
                            <div class="short-infos">
                                <div class="info">
                                    <h4>35,862</h4>
                                    <span>Doctors</span>
                                </div>
                                <div class="info">
                                    <h4>9,240</h4>
                                    <span>Hospitals</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Search and Filter -->

        <div class="searchAndFilter-wrapper-2">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="searchAndFilter-block">

                            <div class="searchAndFilter searchAndFilter-2">
                                <h5>Find a Doctor or a Hospital</h5>
                                <form action="#" class="search-form">
                                    <input type="text" placeholder="Enter Keywords">
                                    <select class="selectpicker" id="search-location">
                                        <option value="" selected="">Location</option>
                                        <option value="california">California</option>
                                        <option value="las-vegas">Las Vegas</option>
                                        <option value="new-work">New Work</option>
                                        <option value="carolina">Carolina</option>
                                        <option value="chicago">Chicago</option>
                                        <option value="silicon-vally">Silicon Vally</option>
                                        <option value="washington">Washington DC</option>
                                        <option value="neveda">Neveda</option>
                                    </select>
                                    <select class="selectpicker" id="search-category">
                                        <option value="" selected="">Category</option>
                                        <option value="real-state">Hospitals</option>
                                        <option value="vehicales">Doctors</option>
                                        <option value="electronics">Dentists</option>
                                        <option value="beauty">Diagnostic Centers</option>
                                        <option value="furnitures">Blood Banks</option>
                                    </select>
                                    <button class="button"><i class="fas fa-search"></i>Search </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search and Filter End -->

        <!-- PLD Category -->
        <div class="padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Health Care Professional - New Licenses Application</h4>
                        <div class="categories">
                            <a href="General">
                                <div class="category">
                                    <div class="icon">
                                        <i data-feather="edit"></i>
                                    </div>
                                    <h5>General License<span>(45)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="Medical_Specialist">
                                <div class="icon">
                                    <i data-feather="feather"></i>
                                </div>
                                <h5>Medical Specialist<span>(147)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="Dental">
                                <div class="icon">
                                    <i data-feather="briefcase"></i>
                                </div>
                                <h5>Dental License<span>(87)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="CAM">
                                <div class="icon">
                                    <i data-feather="package"></i>
                                </div>
                                <h5>Complementary & Alternative Medicine<span>(367)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="Allied">
                                <div class="icon">
                                    <i data-feather="pie-chart"></i>
                                </div>
                                <h5>Allied Health Professional<span>(41)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="Nurse">
                                <div class="icon">
                                    <i data-feather="command"></i>
                                </div>
                                <h5>Nursing<span>(126)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="life-buoy"></i>
                                </div>
                                <h5>Certified Professional<span>(161)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="bar-chart-2"></i>
                                </div>
                                <h5>Consultant License<span>(233)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="radio"></i>
                            </div>
                            <h5><a href="job-listing.html">Visiting Doctor<span>(92)</span></a></h5>
                        </div>



                        <span class="vr vr-1"></span>
                        <span class="vr vr-2"></span>
                        <span class="vr vr-3"></span>
                        <span class="vr vr-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PLD Category End -->
    <hr>
    <!-- FLD Category In Patient -->
    <div class="padding-bottom-60">
        <div class="container">
            <div class="row">

                <div class="col">
                    <br>
                    <h4>Clinical Facilities - New In Patient Permits Application</h4>
                    <div class="categories">
                        <div class="category">
                            <a href="General_Hospital">
                                <div class="icon">
                                    <i data-feather="bar-chart-2"></i>
                                </div>
                                <h5>General Hospital<span>(233)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="Speciality_Hospital">
                                <div class="icon">
                                    <i data-feather="edit"></i>
                                </div>
                                <h5>Specialty Hospital<span>(45)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="Speciality_Hospital">
                                <div class="icon">
                                    <i data-feather="feather"></i>
                                </div>
                                <h5>Teaching Hospital<span>(147)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="briefcase"></i>
                                </div>
                                <h5>Hospice Care Center<span>(87)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="package"></i>
                                </div>
                                <h5>Geriatric Center<span>(367)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="pie-chart"></i>
                                </div>
                                <h5>Long-Term care Center / Nursing Home<span>(41)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="command"></i>
                                </div>
                                <h5>Behavioral Rehabilitation Center<span>(126)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="life-buoy"></i>
                                </div>
                                <h5>Physical Rehabilitation Center<span>(161)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <a href="job-listing.html">
                                <div class="icon">
                                    <i data-feather="headphones"></i>
                                </div>
                                <h5> Pediatric rehabilitation Center<span>(69)</span>
                            </a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                            </div>
                            <h5><a href=""><span></span></a></h5>
                        </div>



                        <span class="vr vr-1"></span>
                        <span class="vr vr-2"></span>
                        <span class="vr vr-3"></span>
                        <span class="vr vr-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category In PatientEnd -->
    <hr>
    <!-- FLD Category Out Patient -->
    <div class="padding-bottom-60">
        <div class="container">
            <div class="row">

                <div class="col">
                    <br>
                    <h4>Clinical Facilities -New Out Patient Permits Application</h4>
                    <div class="categories">
                        <div class="category">
                            <div class="icon">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                            <h5><a href="job-listing.html">Surgical Clinic without OPD<span>(233)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="edit"></i>
                            </div>
                            <h5><a href="job-listing.html">Surgical Clinic with OPD Clinics<span>(45)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="feather"></i>
                            </div>
                            <h5><a href="job-listing.html">Multi-Speciality Clinic<span>(147)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="briefcase"></i>
                            </div>
                            <h5><a href="job-listing.html">Single Speciality Clinic<span>(87)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="package"></i>
                            </div>
                            <h5><a href="job-listing.html">Dental Clinic<span>(367)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="pie-chart"></i>
                            </div>
                            <h5><a href="job-listing.html">Fertility Centre<span>(41)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="command"></i>
                            </div>
                            <h5><a href="job-listing.html">Rehabilitation Centre<span>(126)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="life-buoy"></i>
                            </div>
                            <h5><a href="job-listing.html">Behavioral Rehabilitation Center<span>(161)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="headphones"></i>
                            </div>
                            <h5><a href="job-listing.html"> Physical Rehabilitation Center<span>(69)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="radio"></i>
                            </div>
                            <h5><a href=""> Clinical Research Center<span>(20)</span></a></h5>
                        </div>



                        <span class="vr vr-1"></span>
                        <span class="vr vr-2"></span>
                        <span class="vr vr-3"></span>
                        <span class="vr vr-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="categories">
                        <div class="category">
                            <div class="icon">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                            <h5><a href="job-listing.html">Gastrointestinal Endoscopy Centre<span>(233)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                            <h5><a href="job-listing.html">Stem Cell Processing/Storage Cente<span>(233)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                            <h5><a href="job-listing.html">Telemedicine Centre<span>(233)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                            <h5><a href="job-listing.html">Sleep Medicine centre<span>(233)</span></a></h5>
                        </div>
                        <div class="category">
                            <div class="icon">
                                <i data-feather="bar-chart-2"></i>
                            </div>
                            <h5><a href="job-listing.html">School / Nursery Clinic<span>(233)</span></a></h5>
                        </div>
                        <span class="vr vr-1"></span>
                        <span class="vr vr-2"></span>
                        <span class="vr vr-3"></span>
                        <span class="vr vr-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->


    <!-- Jobs -->
    <div class="section-padding alice-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header section-header-2 section-header-with-right-content">
                        <h2>Recent Jobs</h2>
                        <a href="job-listing.html" class="header-right">+ Browse All Jobs</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Designer Required</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York
                                            City</a></span>
                                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full
                                            Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Project Manager</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San
                                            Francisco</a></span>
                                    <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part
                                            Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i
                                                data-feather="briefcase"></i>Geologitic</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New
                                            Orleans</a></span>
                                    <span class="job-type temporary"><a href="#"><i
                                                data-feather="clock"></i>Temporary</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York
                                            City</a></span>
                                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full
                                            Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">UI Designer</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San
                                            Francisco</a></span>
                                    <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part
                                            Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Land Development Marketer</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i
                                                data-feather="briefcase"></i>Realouse</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington,
                                            D.C.</a></span>
                                    <span class="job-type freelance"><a href="#"><i
                                                data-feather="clock"></i>Freelance</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs End -->

    <!-- Top Companies -->
    <div class="section-padding-top padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header">
                        <h2>Top Companies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="company-carousel owl-carousel">
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-1.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Digoin</a></h4>
                                <span>Kansas City, Missouri</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Orion Ltd.</a></h4>
                                <span>Sacramento, California</span>
                                <a href="job-listing.html" class="button">2 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Realhouse</a></h4>
                                <span>London, United Kingdom</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-4.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">BioPro</a></h4>
                                <span>Ajax, Ontarioland</span>
                                <a href="job-listing.html" class="button">1 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-1.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Digoin</a></h4>
                                <span>Kansas City, Missouri</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Orion Ltd.</a></h4>
                                <span>Sacramento, California</span>
                                <a href="job-listing.html" class="button">2 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Realhouse</a></h4>
                                <span>London, United Kingdom</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-4.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">BioPro</a></h4>
                                <span>Ajax, Ontarioland</span>
                                <a href="job-listing.html" class="button">1 Open Positions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Companies End -->

    <!-- Testimonial -->
    <div class="section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="testimonial-quote">
                            <img src="images/testimonial/quote.png" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-for">
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob One”</p>
                                <h5>Maria Marlin @ Google</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob Two”</p>
                                <h5>Laura Harper @ Amazon</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob Three”</p>
                                <h5>John Doe @ Envato</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob Four”</p>
                                <h5>Jenny Doe @ Dribbble</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob Five”</p>
                                <h5>Michle Clark @ Apple</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob Two”</p>
                                <h5>Laura Harper @ Amazon</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and
                                    demoralized by the charmsto send our denim shorts wardrob Three”</p>
                                <h5>John Doe @ Envato</h5>
                            </div>
                        </div>
                        <div class="testimonial-nav">
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-1.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/1.png" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-2.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/2.png" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-3.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/3.png" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-4.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/4.png" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-5.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/5.png" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-2.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/2.png" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="images/testimonial/thumb-3.jpeg" class="img-fluid commenter" alt="">
                                <img src="images/testimonial/3.png" class="comapnyLogo" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Career Advice -->
    <div class="section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header">
                        <h2>Career Advice</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-grid">
                        <div class="body">
                            <span class="date">22 <span>Dec</span></span>
                            <h3><a href="blog-details.html">Who chooses to enjoy a pleasure</a></h3>
                            <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which</p>
                        </div>
                        <div class="info">
                            <span class="author"><a href="#"><i data-feather="user"></i>Robert Karlos</a></span>
                            <span class="comments"><a href="#"><i data-feather="message-circle"></i>42</a></span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-grid">
                        <div class="body">
                            <span class="date">22 <span>Dec</span></span>
                            <h3><a href="blog-details.html">Who chooses to enjoy a pleasure</a></h3>
                            <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which</p>
                        </div>
                        <div class="info">
                            <span class="author"><a href="#"><i data-feather="user"></i>Robert Karlos</a></span>
                            <span class="comments"><a href="#"><i data-feather="message-circle"></i>42</a></span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-grid">
                        <div class="body">
                            <span class="date">22 <span>Dec</span></span>
                            <h3><a href="blog-details.html">Who chooses to enjoy a pleasure</a></h3>
                            <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which</p>
                        </div>
                        <div class="info">
                            <span class="author"><a href="#"><i data-feather="user"></i>Robert Karlos</a></span>
                            <span class="comments"><a href="#"><i data-feather="message-circle"></i>42</a></span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- Career Advice End -->

    <!-- App Download -->
    <div class="padding-top-90 padding-bottom-90 app-download-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="app-download">
                        <h2>Get Xsilica App</h2>
                        <p>Searching for jobs never been that easy. Now you can find job matched your career expectation
                        </p>
                        <div class="app-download-button">
                            <a href="#" class="apple-app">Apple Store</a>
                            <a href="#" class="android-app">Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App Download End -->

    <!-- Footer -->
    <footer class="footer-bg">
        <div class="footer-top border-bottom section-padding-top padding-bottom-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-logo">
                            <!-- <a href="#">
                  <img src="images/footer-logo.png" class="img-fluid" alt="">
                </a> -->
                            <h3>Xsilica</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social">
                            <ul class="social-icons">
                                <li><a href="#"><i data-feather="facebook"></i></a></li>
                                <li><a href="#"><i data-feather="twitter"></i></a></li>
                                <li><a href="#"><i data-feather="linkedin"></i></a></li>
                                <li><a href="#"><i data-feather="instagram"></i></a></li>
                                <li><a href="#"><i data-feather="youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget-wrapper padding-bottom-60 padding-top-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-widget footer-shortcut-link">
                            <h4>Information</h4>
                            <div class="widget-inner">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-widget footer-shortcut-link">
                            <h4>Job Seekers</h4>
                            <div class="widget-inner">
                                <ul>
                                    <li><a href="#">Create Account</a></li>
                                    <li><a href="#">Career Counseling</a></li>
                                    <li><a href="#">My Xsilica</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Video Guides</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-widget footer-shortcut-link">
                            <h4>Employers</h4>
                            <div class="widget-inner">
                                <ul>
                                    <li><a href="#">Create Account</a></li>
                                    <li><a href="#">Products/Service</a></li>
                                    <li><a href="#">Post a Job</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-sm-6">
                        <div class="footer-widget footer-newsletter">
                            <h4>Newsletter</h4>
                            <p>Get e-mail updates about our latest news and Special offers.</p>
                            <form action="#" class="newsletter-form form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email address...">
                                </div>
                                <button class="btn button primary-bg">Submit<i class="fas fa-caret-right"></i></button>
                                <p class="newsletter-error">0 - Please enter a value</p>
                                <p class="newsletter-success">Thank you for subscribing!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-bottom border-top">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="copyright-text">Copyright <a href="#">Xsilica</a> 2018, All right reserved
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="back-to-top">
                                        <a href="#">Back to top<i class="fas fa-angle-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.nstSlider.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="js/custom.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
</body>

</html>