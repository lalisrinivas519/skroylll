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
               <form action="forgot_process.php" method="POST" class="appointment-form ajax-contact">
                  <div class="row">
                     <div class="form-group style-border3 col-12">
                        <input type="text" class="form-control" name="userid" placeholder="User Id" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">								
                        <i class="fal fa-user"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="password" class="form-control" name="new_password" placeholder="New Password" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fal fa-lock"></i>
                     </div>
                     <div class="form-group style-border3 col-12">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">
                        <i class="fal fa-lock"></i>
                     </div>
                     <div class="col-12 form-btn mt-4">
                        <button class="th-btn style-border" type="submit" name="submit" style="background-color:#216a85; box-shadow:7px 7px 5px #37afdb;">Submit<span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                     </div>
                  </div>
               </form>
            </div>
         </center>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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