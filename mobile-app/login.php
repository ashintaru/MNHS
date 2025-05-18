<?php
error_reporting(error_reporting() & ~E_NOTICE);
 date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");
include "database.php";
 
  


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="  Progressive Web App">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Title -->
  <title>  Progressive Web App</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">

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



         <?php                                          
 
 


if (isset($_POST['register'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sid = $_POST['sid'];
    $found = 0;






$sql = "SELECT * FROM account where email='$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
  $alert = '<div class="alert custom-alert-3 alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle"></i>
            <div class="alert-text">
              <h6>Oops! something is wrong</h6>
              <span>Email is already registered.</span>
            </div>
            
          </div>';
    $found = 1;
  }
} else {
   
}



$sql = "SELECT * FROM student where id ='$sid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
 $found = 0;
   
  }
} else {
   $found = 1;
       echo ' <script>
            window.location="register.php?error=1"
            </script>';
}




    if($found == 0){



          $sql = "INSERT INTO account ( firstname,lastname, email, contact, username,password, type, month, day, year )
VALUES ('$firstname', '$lastname', '$email', '$contact', '$username', '$password', 'Parent', '$month', '$day', '$year')";

if ($conn->query($sql) === TRUE) {

$last_id = $conn->insert_id;
             $alert = '
<div class="alert custom-alert-2 alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle"></i>
          Hello '.$fullname.'! you are successfully Registered. Please Wait for admin approval of your account.
        
          </div>

          ';


 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "UPDATE student SET pid='$last_id' WHERE id='$sid'";

if ($conn->query($sql) === TRUE) {
 
} else {
  echo "Error updating record: " . $conn->error;
}






    }



}


  ?>

 


        <?php
if(isset($_REQUEST['login']))
  {
    
  $username=trim($_REQUEST['username']);
  $password=trim($_REQUEST['password']);
 

  $query="select * from account where username = '$username' and password='$password' and type!='Admin'";
  
  $login_data=select($query);
  $n=mysqli_num_rows($login_data);
  if($n==1)
  {




    while($data=mysqli_fetch_array($login_data))
    {
    extract($data);
    
    }

 
  

    $_SESSION['id']=$id;
    $_SESSION['firstname']=$firstname;
    $_SESSION['lastname']=$lastname;
    $_SESSION['username']=$username;
    $_SESSION['email']=$email;
    $_SESSION['contact']=$contact;
    
    $_SESSION['type']=$type;


    $_SESSION['status']=$status;

 
  if($type == 'Parent' && $status == 1){
    $_SESSION['login']="parent";
       echo ' <script>
            window.location="parent_index.php"
            </script>';
  }


    if($type == 'Parent' && $status == 0){
    $_SESSION['login']="parent";
       $alert = '<div class="alert custom-alert-3 alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle"></i>
            <div class="alert-text">
              <h6>Oops! Pending Approval</h6>
              <span>Account is not yet Approve.</span>
            </div>
            
          </div>';
  }


         
   
    if($type == 'Teacher'){
      $_SESSION['login']="yes";
       echo ' <script>
            window.location="teacher_index.php"
            </script>';
  }
 

 
     
 
  }
  else
  {
          $alert = '


<div class="alert custom-alert-2 alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle"></i>
           Invalid Credentials.
            <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button"
              data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          ';
  }
  }
       
        ?>



  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
      <div class="text-center px-4">
        <!-- <img class="login-intro-img" src="img/bg-img/36.png" alt=""> -->
        <img class="login-intro-img" src="logo.png" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <h4 class="mb-3 text-center text-warning font-900">MNHS PORTAL</h4>

        <?php echo $alert; ?>
        <form action="login.php" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="username" id="username" placeholder="Username">
          </div>

          <div class="form-group position-relative">
            <input class="form-control" id="psw-input" name="password" type="password" placeholder="Enter Password">
           
          </div>

          <button class="btn btn-warning text-white w-100" name="login" type="submit"><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
        </form>
      </div>

      <!-- Login Meta -->
      <div class="login-meta-data text-center">
      <!--   <a class="stretched-link forgot-password d-block mt-3 mb-1" href="forget-password.html">Forgot
          Password?</a> -->
       <p class="mb-0 mt-3">Didn't have an account? <a class="stretched-link" href="register.php">Register Now</a></p>  
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