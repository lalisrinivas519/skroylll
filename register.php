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
      <!--==============================
         Contact Area  
         ==============================-->
      <!--==============================
         Contact Area   
         ==============================-->
      <div class="video-area-2 space overflow-hidden" data-bg-src="assets/img/bg/video-bg-2-1.png">
         <center>
            <div class="col-lg-5">
               <form action="register_process.php" method="POST" class="appointment-form ajax-contact" >
                  <div class="row">
                     <div class="form-group style-border3 col-12">
                        <input type="text" class="form-control" name="userid"  placeholder="Enter User Id" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fal fa-user"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="text" class="form-control" name="name"  placeholder="Enter Your Name" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fal fa-user"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="number" class="form-control" name="mobile"  placeholder="Enter Your Mobile No" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fas fa-mobile-alt"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <select id="cars" placeholder="MOBILE" name="type_of_join" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                          
                           <option value="BUYER">BUYER</option>
                           <option value="SHARE HOLDER">SHARE HOLDER</option>
                        </select>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <select id="cars" placeholder="MOBILE" name="type_of_join" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                           <option value="Sales Exective">Sales Exective</option>
                           <option value="Sr Salse Exective">Sr Salse Exective</option>
                           <option value="Salse Officer"> Salse Officer</option>
                           <option value="Sr Salse Officer">Sr. Salse Officer</option>
                           <option value="Marketing Officer">Marketing Officer</option>
                           <option value="Sr Marketing Officer">Sr. Marketing Officer</option>
                           <option value="Marketing Manager">Marketing Manager</option>
                           <option value="Sr Marketing Manager">Sr. Marketing Manager</option>
                           <option value="Ecevtive Manager">Ecevtive Manager</option>
                           <option value="Sr Ecevtive Manager">Sr. Ecevtive Manager</option>
                        </select>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="password" class="form-control" name="password"  placeholder="Enter Your Password" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fas fa-lock"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="password" class="form-control"  name="confirm_password" placeholder="Re-enter Your Password" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fas fa-lock"></i>
                     </div>
                     <div class="col-12 form-btn mt-4">
                        <button class="th-btn style-border" type="submit" name="submit" style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;" >Submit<span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                     </div>
                  </div>
                  <p class="form-messages mb-0 mt-3"></p>
               </form>
            </div>
         </center>
      </div>
      <!--==============================
         Footer Area
         ==============================-->
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