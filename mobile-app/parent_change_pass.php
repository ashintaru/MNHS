<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");

 

 

   if($_SESSION['login']=="parent")                          
{
 
}
else
{

 echo '
     <script>
            window.location="login.php"
            </script>';
}   


 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=" ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Update Profile</title>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Web App Manifest -->
  <link rel="manifest" href="manifest.json">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>

  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <!-- Header Content -->
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <!-- Back Button -->
        <div class="back-button">
          <a href="parent_index.php">
            <i class="bi bi-arrow-left-short"></i>
          </a>
        </div>

        <!-- Page Title -->
        <div class="page-heading">
          <h6 class="mb-0">Manage Password</h6>
        </div>

        <!-- Navbar Toggler -->
        <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
          aria-controls="affanOffcanvas">
          <span class="d-block"></span>
          <span class="d-block"></span>
          <span class="d-block"></span>
        </div>
      </div>
    </div>
  </div>

<?php

$uid = $_SESSION['id'];
$sql = "SELECT * FROM account where id = '$uid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $f = $row['firstname'];
    $l = $row['lastname'];
 

    
  }
} else {
  
 

 
  } ?>


  <!-- # Sidenav Left -->
  <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
    aria-labelledby="affanOffcanvsLabel">

    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
      aria-label="Close"></button>

    <div class="offcanvas-body p-0">
      <div class="sidenav-wrapper">
        <!-- Sidenav Profile -->
        <div class="sidenav-profile bg-gray">
          <div class="sidenav-style3"></div>

          <!-- User Thumbnail -->
          <div class="user-profile">
            <img src="img/user.png" alt="">
          </div>

          <!-- User Info -->
          <div class="user-info">
            <h6 class="user-name text-dark mb-0"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h6>
            <span class="text-dark"><?php echo $_SESSION['type']; ?></span>
          </div>
        </div>

        <!-- Sidenav Nav -->
        <ul class="sidenav-nav ps-0">
          <li>
            <a href="parent_index.php"><i class="bi bi-house-door"></i> Dashboard</a>
          </li>

         

          <li>
            <a href="parent_profile.php"><i class="fa-solid fa-user"></i> Update Profile
           
            </a>
          </li>
          <li>
            <a href="parent_change_pass.php"><i class="fa-solid fa-lock"></i> Change Password
              
            </a>
          </li>
        
          
          <li>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
          </li>
        </ul>

    

        <!-- Copyright Info -->
        <div class="copyright-info">
          <p>
            <span id="copyrightYear"></span>
            &copy; Made by <a href="#">Elaiza Ablaña</a>
          </p>
        </div>
      </div>
    </div>
  </div>
 
 
 
  <div class="page-content-wrapper py-3">
    <div class="container">


 

      <!-- User Meta Data-->
      <div class="card user-data-card">
        <div class="card-body">

                  <?php
if(isset($_POST['update_profile']))
  {

    $pid = $_SESSION['id'];
  
    $password = $_POST['password'];



$sql = "UPDATE account SET password='$password' WHERE id = '$pid' ";

if ($conn->query($sql) === TRUE) {
  echo '<div class="alert custom-alert-3 alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-all"></i>
            <div class="alert-text">
              <h6>Password Updated.</h6>
              <span>Your Password successfully updated!</span>
              
            </div>
            <button class="btn btn-close position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert"
              aria-label="Close"></button>
          </div>';
} else {
  echo "Error updating record: " . $conn->error;
}



 }

$pid = $_SESSION['id'];
$sql = "SELECT * FROM account where id = '$pid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   
    $password = $row['password'];

    
  }
} else {
  
 

 
  }

  ?>


          <form action="parent_change_pass.php" method="POST">
          

         
  
          

            <div class="form-group mb-3">
              <label class="form-label" for="p">Password</label>
              <input class="form-control" name="password" id="password" required type="password" value="<?php echo $password; ?>" placeholder="Enter Password">
            </div>

            <div class="form-group mb-3">
              <label class="form-label" for="p">Confirm Password</label>
              <input class="form-control"   required type="password" id="confirm_password" value="<?php echo $password; ?>" placeholder="Confirm Password">
            </div>

  <span id='message'></span> 


            <button class="btn btn-primary w-100" id="update_" type="submit" name="update_profile">Update Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>



<script type="text/javascript">

  
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html(' ').css('color', 'green');
 
     var button = document.getElementById("update_");
      button.disabled = false;
  } else {
    $('#message').html('Password does not Match').css('color', 'red');
 
      var button = document.getElementById("update_");
       button.disabled = true;
  }
 
});
 

</script>




  <!-- Footer Nav -->
  <div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <!-- Footer Content -->
      <div class="footer-nav position-relative">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
          <li  >
            <a href="parent_index.php">
              <i class="fa-solid fa-house"></i>
              <span>Dashboard</span>
            </a>
          </li>

        

          <li>
            <a href="parent_view_grades.php">
            <i class="fa-solid fa-file-lines"></i>
              <span>View Grades</span>
            </a>
          </li>

          

          <li>
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
          aria-controls="affanOffcanvas">
             <i class="fa-solid fa-user-gear"></i>
              <span>Menu</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- All JavaScript Files -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/slideToggle.min.js"></script>
  <script src="js/internet-status.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/venobox.min.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/rangeslider.min.js"></script>
  <script src="js/vanilla-dataTables.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/dark-rtl.js"></script>
  <script src="js/active.js"></script>
  <script src="js/pwa.js"></script>
</body>

</html>