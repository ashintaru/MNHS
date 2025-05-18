<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");


   if($_SESSION['login']=="yes")                          
{

$id = $_SESSION['id'];
 
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
  <meta name="description" content="  Progressive Web App">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>  Progressive Web App</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <?php $py = $year - 1;
$sy = ''.$py.' - '.$year.'';
 ?>
<body>
  <?php
if(isset($_POST['save_grade']))
  {

    // GET
    $section = $_POST['section'];
    $grade_level = $_POST['grade_level'];
    $subject = $_POST['subject'];
    $sid = $_POST['sid'];
    $tid = $_SESSION['id'];


    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $forth = $_POST['forth'];



    //first quarter start

    $sql = "SELECT * FROM grades where sid='$sid' and tid='$tid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='First' and sy='$sy' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $uid = $row['id']; // update id
    // if exist
    $sql2 = "UPDATE grades SET grades='$first' WHERE id='$uid'  and sy='$sy'";

if ($conn->query($sql2) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}

// if exist
  }
} else {

  $sql3 = "INSERT INTO grades (sid, tid, grade_level, section, subject, quarter, grades, month, day, year, time, sy)
VALUES ('$sid', '$tid', '$grade_level', '$section', '$subject', 'First', '$first', '$month', '$day', '$year', '$time', '$sy')";

if ($conn->query($sql3) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


   
}

    //first quarter end


    //second quarter start

    $sql = "SELECT * FROM grades where sid='$sid' and tid='$tid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Second'  and sy='$sy' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $uid = $row['id']; // update id
    // if exist
    $sql2 = "UPDATE grades SET grades='$second' WHERE id='$uid'  and sy='$sy' ";

if ($conn->query($sql2) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}

// if exist
  }
} else {


    $sql3 = "INSERT INTO grades (sid, tid, grade_level, section, subject, quarter, grades, month, day, year, time, sy)
VALUES ('$sid', '$tid', '$grade_level', '$section', '$subject', 'Second', '$second', '$month', '$day', '$year', '$time', '$sy')";

if ($conn->query($sql3) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

    //second quarter end



    //third quarter start

    $sql = "SELECT * FROM grades where sid='$sid' and tid='$tid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Third' and sy='$sy'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $uid = $row['id']; // update id
    // if exist
    $sql2 = "UPDATE grades SET grades='$third' WHERE id='$uid' and sy='$sy' ";

if ($conn->query($sql2) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}

// if exist
  }
} else {


    $sql3 = "INSERT INTO grades (sid, tid, grade_level, section, subject, quarter, grades, month, day, year, time, sy)
VALUES ('$sid', '$tid', '$grade_level', '$section', '$subject', 'Third', '$third', '$month', '$day', '$year', '$time', '$sy')";

if ($conn->query($sql3) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

    //third quarter end


    //forth quarter start

    $sql = "SELECT * FROM grades where sid='$sid' and tid='$tid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Forth' and sy='$sy' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $uid = $row['id']; // update id
    // if exist
    $sql2 = "UPDATE grades SET grades='$forth' WHERE id='$uid' and sy='$sy' ";

if ($conn->query($sql2) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}

// if exist
  }
} else {


    $sql3 = "INSERT INTO grades (sid, tid, grade_level, section, subject, quarter, grades, month, day, year, time, sy)
VALUES ('$sid', '$tid', '$grade_level', '$section', '$subject', 'Forth', '$forth', '$month', '$day', '$year', '$time', '$sy')";

if ($conn->query($sql3) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

    //third quarter end




} ?>
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
   <div
          class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">

          <!-- Navbar Toggler -->
          <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
          aria-controls="affanOffcanvas">
            <div class="span-wrap">
              <span class="d-block"></span>
              <span class="d-block"></span>
              <span class="d-block"></span>
            </div>
          </div>

          <!-- Logo Wrapper -->
          <div class="logo-wrapper">
            <a href="#" class="text-dark">
            MNHS <?php echo $_SESSION['type']; ?> Portal
            </a>
          </div>

          <!-- User Profile -->
          <div class="user-profile-wrapper">
             
          </div>
        </div>
    </div>
  </div>

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
            <a href="teacher_index.php"><i class="bi bi-house-door"></i> Dashboard</a>
          </li>

             <li>
            <a href="teacher_my_subject.php"><i class="fa-solid fa-book"></i> My Subject
           
            </a>
          </li>
          

          <li>
            <a href="teacher_profile.php"><i class="fa-solid fa-user"></i> Update Profile
           
            </a>
          </li>
          <li>
            <a href="teacher_change_pass.php"><i class="fa-solid fa-lock"></i> Change Password
              
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
 
 <!-- Order/Payment Success -->
  <div class="order-success-wrapper">
    <div class="custom-container">
      <div class="order-done-content">
        <i class="bi bi-check-circle-fill text-success mb-2 display-1"></i>
        <h5>Grade Successfully Encoded!</h5>
         
        <a class="btn btn-primary mt-3" onclick="teacher_done()" href="#"><i class="fa-regular fa-thumbs-up"></i> Done</a>
      </div>
    </div>
  </div>


<script type="text/javascript">
  
  function teacher_done() {
    // body...
    window.location="teacher_view_student.php?section=<?php echo $_GET['section']; ?>&grade_level=<?php echo $_GET['grade_level']; ?>&subject=<?php echo $_GET['subject']; ?>&sid=<?php echo $_GET['sid']; ?>"
  }

</script>
  <!-- Footer Nav -->
  <div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <!-- Footer Content -->
      <div class="footer-nav position-relative">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
          <li >
            <a href="teacher_index.php">
              <i class="fa-solid fa-house"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="active text-orange">
            <a href="teacher_search_student.php">
            <i class="fa-solid fa-edit"></i>
              <span>Encode Grades</span>
            </a>
          </li>

          <li>
            <a href="teacher_view_grades.php">
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