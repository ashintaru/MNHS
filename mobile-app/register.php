<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");


 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Register - MNHS</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Web App Manifest -->
  <link rel="manifest" href="manifest.json">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-success" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>

  <!-- Back Button -->
  <div class="login-back-button">
    <a href="login.php" class="text-success">
      <i class="bi bi-arrow-left-short"></i>
    </a>
  </div>

  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
      <div class="text-center px-4">
        <img class="login-intro-img" src="logo.png" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <h6 class="mb-3 text-center">Register as Parent</h6>
        
        <?php

        $error = $_GET['error'];

        if($error == 1){
          echo  '<div class="alert custom-alert-3 alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle"></i>
            <div class="alert-text">
              <h6>Oops! something is wrong</h6>
              <span>Student ID # Not Found.</span>
            </div>
            
          </div>';
        }

         ?>

        <form action="login.php" method="POST">

  

        <div class="form-group text-start mb-3">
            <input class="form-control" type="text" name="sid" required placeholder="Enter Student ID #">
        </div>


        <div class="form-group text-start mb-3">
            <input class="form-control" type="text" name="username" required placeholder="Enter Username">
        </div>

        <div class="form-group text-start mb-3">
            <input class="form-control" type="text" name="firstname" required placeholder="Enter Firstname">
        </div>

        <div class="form-group text-start mb-3">
            <input class="form-control" type="text" name="lastname" required placeholder="Enter Lastname">
        </div>

         

    <div class="form-group ">
    
    <div class="input-group">
        <span class="input-group-text">+63</span>
        <input type="tel" class="form-control" name="contact" required 
               placeholder="Enter Contact #" pattern="[0-9]{10}" 
               maxlength="10" minlength="10" title="Enter a 10-digit phone number">
    </div>
</div>


          <div class="form-group text-start mb-3">
            <input class="form-control" type="text" name="email" required placeholder="Email address">
          </div>



          <div class="form-group text-start mb-3 position-relative">
            <input class="form-control" id="psw-input" type="password" required placeholder="Enter password">
          </div>


          <div class="form-group text-start mb-3 position-relative">
            <input class="form-control" id="confirm_password" name="password" type="password" placeholder="Confirm password">
          </div>

          <span id='message'></span> 

          <div class="mb-3" id="pswmeter"></div>

          <div class="form-check mb-3">
            <input class="form-check-input text-success" id="checkedCheckbox" type="checkbox" value="" required checked>
            <label class="form-check-label text-muted fw-normal" for="checkedCheckbox">I agree with the terms &amp;
              policy.</label>
          </div>

          <button id="sub" class="btn btn-success text-white w-100" type="submit" name="register"><i class="fa-solid fa-user-check"></i>&nbsp;  Sign Up</button>
        </form>
      </div>

      <!-- Login Meta -->
      <div class="login-meta-data text-center">
        <p class="mt-3 mb-0">Already have an account? <a class="stretched-link" href="login.php">Login</a></p>
      </div>
    </div>
  </div>

 

<script type="text/javascript">

  function confirm() {
  $('#psw-input, #confirm_password').on('keyup', function () {
  if ($('#psw-input').val() == $('#confirm_password').val()) {
    $('#message').html(' ').css('color', 'green');
 
       $("#sub").show();
    
    
  } else {
    $('#message').html('Password does not Match').css('color', 'red');
 
              $("#sub").hide();
      
  }
 
});
}
setInterval(confirm, 1000);

 
 
</script>


  <!-- All JavaScript Files -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/internet-status.js"></script>
  <script src="js/dark-rtl.js"></script>
  <script src="js/pswmeter.js"></script>
  <script src="js/active.js"></script>
  <script src="js/pwa.js"></script>
</body>

</html>