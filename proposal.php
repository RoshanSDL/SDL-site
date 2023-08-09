<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Square DataLabs - Empowering Digital Commerce</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="scss/main.css" />
  </head>

  <body>
    <!--================ Start Social media Bars =================-->

    <!-- Floating Social Media bar Starts -->
<div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fa fa-phone"></i>
    <a href="" target="_blank"> Say hello!</a>
  </div>
  <div class="fl-fl float-tw">
    <i class="fa fa-whatsapp"></i>
    <a href="" target="_blank">Reach out!</a>
  </div>

</div>
<!-- Floating Social Media bar Ends -->

    <!--================ End Social media Bars =================-->

   <!--================ Start Header Area =================-->
   <header class="header-area">
    <div class="container-fluid">
      <div class="header-wrap">
        <div
          class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
        >
          <div class="col menu-left">
            <a href="index.html" class="logo-img"
            ><img class="mx-auto" src="img/logo.png" alt="SquareDataLabs"
          /></a>
           
          </div>
          <div class="col-5 text-lg-center mt-2 mt-lg-0 menu-center">
            <!-- <span>"Empowering Digital Commerce"</span> -->
          </div>
          <nav class="col navbar navbar-expand-lg justify-content-end">
            <!-- Toggler/collapsibe Button -->
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#collapsibleNavbar"
            >
              <span class="lnr lnr-menu"></span>
            </button>

            <!-- Navbar links -->
            <div
              class="collapse navbar-collapse menu-right"
              id="collapsibleNavbar">
              <ul class="navbar-nav justify-content-center w-100">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link cool-link dropdown-toggle"   href="services.html" id="navbardrop">
                    Services
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item cool-link" href="services.html">Web & Mobile Applications</a>
                    <a class="dropdown-item cool-link" href="services.html">Ecommerce solutions</a>          
                    <a class="dropdown-item cool-link" href="services.html">IT consulting</a>
                    <a class="dropdown-item cool-link" href="services.html">Offshore consultation</a>
                  
                  </div>
                </li> 
               
                <li class="nav-item">
                  <a class="nav-link" href="careers.html">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blogs.html">Blogs</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    <section class="banner-area2 relative">
      <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>Contact Us</h1>
        <p>
          Communication is the key to success. Let's stay connected
        </p>
      </div>
    </section>
    <!--================ End banner Area =================-->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
		
		
		
		 	  
<?php

if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
 
	$email_to = "arun@squaredatalabs.com";
	

 
    $email_subject = "SQUARE DATALABS - Enquiry";
 
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['full_name']) ||
 
        !isset($_POST['location']) ||
		
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $full_name = $_POST['full_name']; // required
	
    $location = $_POST['location']; // required
 
    
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$full_name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  } 
  
  
 

 
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($full_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
	
    $email_message .= "Location: ".clean_string($location)."\n";
  
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here-->
 
          <h2>Thank you for  <span>your interest in us!</span></h2>
          <p>We will be in touch with you very soon.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
           <a href="https://www.squaredatalabs.com/" class="btn-get-started">Back to Page</a>
	
		  
		  <?php
 
}
 
?>
		  
		  
		  </div>
        </div>
		
		
         <div class="col-lg-6 order-1 order-lg-2">
          <img src="img/hero-img.webp" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

   

    </div>
  </section>

  <!--================ End PHP  Coding Area =================-->

   <!--================ Start Footer Area =================-->
   <footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-4  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Security Standard Certified</h6>
          <div class="cert">
            <img src="./img/pci-logo.png">
            <p class="levl">Level 2</p>
          </div>
          
        </div>
      </div>
      <div class="col-lg-4  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Locate Us</h6>
          <p>   
            <span class="flag"><img src="./img/flag-india.png"/></span>
            Infopark, Kochi 
          </p>
          <p>   
            <span class="flag"><img src="./img/flag-india.png"/></span>
            Vazhakkala, Kochi
          </p>
          
         
          <p>   
            <span class="flag"><img src="./img/flag-usa.png"/></span>
            Orange, California
          </p>
          <p>   
            <span class="flag"><img src="./img/flag-uae.png"/></span>
            Al Nahda, Sharjah
          </p>
        </div>
      </div>
      <div class="col-lg-2  col-md-6 col-sm-6">
        <div class="single-footer-widget mail-chimp">
          <h6 class="mb-20">Links</h6>
          <ul class="instafeed flex-wrap">
            <li><a href="#"> About us</a></li>
            <li><a href="#"> Services</a></li>
            <li><a href="#"> Careers</a></li>
            <li><a href="#"> Podcasts</a></li>
            <li><a href="#"> Contact us</a></li>
            
          
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Connect with Us</h6>
          <p>
            <a href="mailto:collab@squaredatalabs.com" class="text-white">collab@squaredatalabs.com</a><br/>
            <a href="mailto:sales@squaredatalabs.com" class="text-white">sales@squaredatalabs.com</a><br/>
            <a href="tel:+91 7994887763" class="text-white">+91 7994887763</a><br/>
            <a href="tel:+971 564651977" class="text-white">+971 564651977</a>
          </p>
          
         
          <div class="footer-social d-flex align-items-center">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/square-datalabs-llc/mycompany/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
      <p class="footer-text m-0"><b><u class="text-white">Privacy policy:</u></b> All information's are collected with consent only. Google analytics fetch data from websites, but we don't have access to it, and we do not disclose any personal information, or we save it for any kind of purpose. We comply to legal norms and for any queries you can reach us on <a href="mailto:collab@squaredatalabs.com ">collab@squaredatalabs.com </a> </p>
      <p class="footer-text m-0">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> <span class="text-white">SQUARE DATALABS LLC. </span>  All rights reserved | Powered by: <a href="#" target="_blank" class="text-white">Snippet Commerece 360<span class="digre">&#176;</span> </a>
</p>
    </div>
  </div>
</footer>
<!--================ End Footer Area =================-->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
