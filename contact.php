<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <?php include("php_include/head.php")?>
   </head>
   <body class="bg-light">
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!--********************************
         Code Start From Here 
         ******************************** -->
      <div class="cursor-follower"></div>
      <!-- slider drag cursor -->
      <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i></div>
      <!--==============================
         Preloader
         ==============================-->
      <!--==============================
         Mobile Menu
         ============================== -->
      <?php include("php_include/mobile_menu.php")?><!--==============================
         Sidemenu
         ============================== -->
      <!--==============================
         Header Area
         ==============================-->
      <?php include("php_include/header.php")?>
      <!--==============================
         Breadcumb
         ============================== -->
      <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-9">
                  <div class="breadcumb-content">
                     <h1 class="breadcumb-title">Contact</h1>
                     <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==============================
         Contact Area  
         ==============================-->
      <div class="space">
         <div class="container">
            <div class="title-area text-center">
               <span class="sub-title">Get In Touch</span>
               <h2 class="sec-title text-theme">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
               <div class="col-xl-4 col-lg-6">
                  <div class="about-contact-grid style2">
                     <div class="about-contact-icon">
                        <i class="fal fa-location-dot"></i>
                     </div>
                     <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Our Address</h6>
                        <p class="about-contact-details-text">Mysure, Karnataka</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6">
                  <div class="about-contact-grid style2">
                     <div class="about-contact-icon">
                        <i class="fal fa-phone"></i>
                     </div>
                     <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Phone Number</h6>
                        <p class="about-contact-details-text"><a href="tel:01234567890">+91 9988776655</a></p>
                        <p class="about-contact-details-text"><a href="tel:01234567890">+91 9988776655</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6">
                  <div class="about-contact-grid style2">
                     <div class="about-contact-icon">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Email Address</h6>
                        <p class="about-contact-details-text"><a href="info@skrbd.com">info@skrbd.com</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      </div><!--==============================
         Contact Area   
         ==============================-->
      <div class="space contact-area-3 z-index-common" data-bg-src="assets/img/bg/contact-bg-1-1.png" data-overlay="title" data-opacity="3">
         <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
            <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
         </div>
         <div class="container">
            <div class="row gx-35">
               <div class="col-lg-6">
                  <div class="appointment-wrap2 bg-white me-xxl-5">
                     <h2 class="form-title text-theme">Schedule a visit</h2>
                     <form action="" method="POST" class="appointment-form ajax-contact">
                        <div class="row">
                           <div class="form-group style-border style-radius col-12">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
                              <i class="fal fa-user"></i>
                           </div>
                           <div class="form-group style-border style-radius col-12">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                              <i class="fal fa-envelope"></i>
                           </div>
                           <div class="form-group style-border style-radius col-md-12">
                              <select name="subject" id="subject" class="form-select">
                                 <option value="" disabled selected hidden>Select Service Type</option>
                                 <option value="Real Estate">Real Estate</option>
                                 <option value="Apartment">Apartment</option>
                                 <option value="Residencial">Residencial</option>
                                 <option value="Deluxe">Deluxe</option>
                              </select>
                              <i class="fal fa-angle-down"></i>
                           </div>
                           <div class="col-12 form-group style-border style-radius">
                              <i class="far fa-comments"></i>
                              <textarea placeholder="Type Your Message" class="form-control"></textarea>
                           </div>
                           <div class="col-12 form-btn mt-4">
                              <button class="th-btn">Submit Message <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                           </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
     
	  <div class="location-map contact-sec-map z-index-common">
         <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124738.36909931715!2d76.5532866344807!3d12.310801131997138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf70381d572ef9%3A0x2b89ece8c0f8396d!2sMysuru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1723011770328!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div class="location-map-address bg-theme">
            <div class="thumb">
               <img src="assets/img/property/property_inner_1.jpg" alt="img">
            </div>
            <div class="media-body">
               <h4 class="title">Address:</h4>
               <p class="text">Mysure,Karnataka</p>
               <h4 class="title">Post Code:</h4>
               <p class="text">570001</p>
            </div>
         </div>
      </div>
	  </div>
      <!--==============================
         Footer Area
         ==============================-->
      <?php include("php_include/footer.php")?>
      <!--********************************
         Code End  Here 
         ******************************** -->
      <!-- Scroll To Top -->
      <div class="scroll-top">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
         </svg>
      </div>
      <!--==============================
         All Js File
         ============================== -->
      <!-- Jquery -->
      <?php include("php_include/script.php")?>
   </body>
</html>