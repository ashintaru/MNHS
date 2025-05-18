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

  <div class="page-content-wrapper">

 
 
 
<?php
$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
$sy = $_GET['sy'];

$sql = "SELECT * FROM student where id='$sid' and sy='$sy' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $contact = $row['contact'];
 
  }
} else {
   
}


 ?>
 
 
 

  <div class="page-content-wrapper py-3" id="elementsSearchList">
    <div class="container">
      <!-- Single Team Member -->
          <div class="col-12">
            <div class="card team-member-card shadow">
              <div class="card-body">
                <!-- Member Image-->
                <div class="   mb-2">
                  <img width="100px" src="student-card.png" alt="">
                </div>
                <!-- Team Info-->
                <div class="team-info">
                  <h6 class="mb-1 fz-14">Parent : <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></h6>
         
                </div>


                <div class="team-info">
                  <h6 class="mb-1 fz-14">Student :  <?php echo $firstname; ?> <?php echo $lastname; ?></h6>
                  <p class="mb-0 fz-12"><?php echo $_GET['sid']; ?></p>
                </div>
              </div>
              <!-- Contact Info-->
              <div class="contact-info bg-primary">
                <p class="mb-0 text-truncate"><?php echo $grade_level; ?> - <?php echo $section; ?></p>
              </div>
            </div>
          </div>
 

<?php

//$teacher = ''.$_SESSION['firstname'].' '.$_SESSION['lastname'].'';
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
$sid = $_GET['sid'];

 


$sql = "SELECT * FROM subject where grade_level='$grade_level' and section='$section'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


    $grade_level = $row['grade_level'];
    $section = $row['section'];
    $subject = $row['subject'];
    $first = 0;
    $second = 0;
    $third = 0;
    $forth = 0;
    $teacher = $row['teacher'];

    //first
    $sql1 = "SELECT grades FROM grades where grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='First' and sid='$sid' and sy='$sy'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
  }
} else {
   
}

//second
$sql2 = "SELECT grades FROM grades where grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Second' and sid='$sid' and sy='$sy'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $second = $row2['grades'];
  }
} else {
   
}

//third
$sql3 = "SELECT grades FROM grades where grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Third' and sid='$sid' and sy='$sy'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
    $third = $row3['grades'];
  }
} else {
   
}

//forth

$sql4 = "SELECT grades FROM grades where grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Forth' and sid='$sid' and sy='$sy'";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row4 = $result4->fetch_assoc()) {
    $forth = $row4['grades'];
  }
} else {
   
}


    echo '  <!-- Timeline Content -->
      <div class="card timeline-card   mt-3">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="timeline-text mb-2">
              <span style="font-size:20px;" class="badge mb-2  rounded"><i class="fa-solid fa-book"></i> '.$row['subject'].'</span>
              <h6><i class="fa-solid fa-address-book"></i>'.$teacher.'</h6>
            </div>
            <div class="timeline-icon mb-2"> 
           
            </div>
          </div>
          
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary"><i class="fa-regular fa-clock"></i> Time :  '.$row['time'].' </span>
            <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> Grade Level :  '.$row['grade_level'].' </span>
            <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> Section :  '.$row['section'].'</span>
          </div>
          <br>

        



             <!-- Single Skill Progress Bar -->
          <div class="skill-progress-bar d-flex align-items-center">
            <!-- Skill Icon -->
            <div class="skill-icon shadow-sm p-2">
             <i class="fa-solid fz-20 text-success fa-file-lines"></i>
            </div>



            <div class="skill-data">
              <!-- Skill Name -->
              <div class="skill-name d-flex align-items-center justify-content-between">
                <p class="mb-1">1st Quarter</p>
                <small class="mb-1">
                  <span class="counter">'.$first.'</span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar" style="width: '.$first.'%;" role="progressbar" aria-valuenow="'.$first.'" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <!-- Single Skill Progress Bar -->
          <div class="skill-progress-bar d-flex align-items-center">
            <!-- Skill Icon -->
            <div class="skill-icon shadow-sm p-2">
              <i class="fa-solid fz-20 text-success fa-file-lines"></i>
            </div>

            <div class="skill-data">
              <!-- Skill Name -->
              <div class="skill-name d-flex align-items-center justify-content-between">
                <p class="mb-1">2nd Quarter</p>
                <small class="mb-1">
                  <span class="counter">'.$second.'</span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: '.$second.'%;" role="progressbar" aria-valuenow="'.$second.'"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <!-- Single Skill Progress Bar -->
          <div class="skill-progress-bar d-flex align-items-center">
            <!-- Skill Icon -->
            <div class="skill-icon shadow-sm p-2 fz-20">
            <i class="fa-solid fz-20 text-success fa-file-lines"></i>
            </div>

            <div class="skill-data">
              <!-- Skill Name -->
              <div class="skill-name d-flex align-items-center justify-content-between">
                <p class="mb-1">3rd Quarter</p>
                <small class="mb-1">
                  <span class="counter">'.$third.'</span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: '.$third.'%;" role="progressbar" aria-valuenow="'.$third.'"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>


          <!-- Single Skill Progress Bar -->
          <div class="skill-progress-bar d-flex align-items-center">
            <!-- Skill Icon -->
            <div class="skill-icon shadow-sm p-2 fz-20">
            <i class="fa-solid fz-20 text-success fa-file-lines"></i>
            </div>

            <div class="skill-data">
              <!-- Skill Name -->
              <div class="skill-name d-flex align-items-center justify-content-between">
                <p class="mb-1">4th Quarter</p>
                <small class="mb-1">
                  <span class="counter">'.$forth.'</span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: '.$forth.'%;" role="progressbar" aria-valuenow="'.$forth.'"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>




        </div>
      </div>
 ';
     
  }
} else {
   
}


     ?>

      

    </div>
  </div>

 

    <div class="pb-3"></div>
  </div>
 
  <!-- Footer Nav -->
  <div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <!-- Footer Content -->
      <div class="footer-nav position-relative">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
          <li >
            <a href="parent_index.php">
              <i class="fa-solid fa-house"></i>
              <span>Dashboard</span>
            </a>
          </li>

        

          <li class="active text-orange">
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