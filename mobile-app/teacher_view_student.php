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
            <a href="teacher_index.php"><i class="bi bi-house-door"></i> Dashboard</a>
          </li>


           <li>
            <a href="teacher_arecords.php"><i class="fa-solid fa-chalkboard-user"></i> Assessment Records
           
            </a>
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

  <div class="page-content-wrapper">

 
 
 
<?php
$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
$subject = $_GET['subject'];

$sql = "SELECT * FROM student where id='$sid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $contact = $row['contact'];
    $firstname = $row['firstname'];
 
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
                  <h6 class="mb-1 fz-14"><?php echo $firstname; ?> <?php echo $lastname; ?></h6>
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

$teacher = ''.$_SESSION['firstname'].' '.$_SESSION['lastname'].'';
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
$subject = $_GET['subject'];
$btn = '';

$sql = "SELECT time FROM subject where grade_level='$grade_level' and section='$section' and subject='$subject'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $time = $row['time'];
  }
} else {
 
}

 
 ?>
 
        <?php $py = $year - 1;
$sy = ''.$py.' - '.$year.'';


          $first = 0;
          $second = 0;
          $third = 0;
          $forth = 0;
          // first quarter

          $sql = "SELECT grades FROM grades where sid='$sid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='First' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $first = $row['grades'];
  }
} else {
   
}


          $sql = "SELECT grades FROM grades where sid='$sid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Second' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $second = $row['grades'];
  }
} else {
   
}


          $sql = "SELECT grades FROM grades where sid='$sid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Third' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $third = $row['grades'];
  }
} else {
   
}


          $sql = "SELECT grades FROM grades where sid='$sid' and grade_level='$grade_level' and section='$section' and subject='$subject' and quarter='Forth' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $forth = $row['grades'];
  }
} else {
   
}


 $btn1 ='';

 if($first > 0 && $second > 0 && $third > 0 && $forth > 0){

  $btn1 = 'disabled';

 }

 ?>
  <!-- Timeline Content -->
      <div class="card timeline-card mt-3">

        <div class="card-body">
 <button class="btn  btn-success <?php echo $btn1; ?>  " data-bs-toggle="modal"
            data-bs-target="#fullscreenModal"><i class="fa-solid text-white  fa-pen-to-square"></i> Encode Grades </button>

          
 
          <div class="d-flex mt-3 justify-content-between">
            <div class="timeline-text mb-2">
              <span style="font-size:20px;" class="badge mb-2  rounded"><i class="fa-solid fa-book"></i> <?php echo $subject; ?></span>
              <h6><i class="fa-solid fa-address-book"></i> <?php echo $teacher; ?></h6>
            </div>
            <br>
            <div class="timeline-icon mb-2"> 
           
            </div>
          </div>
          
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary"><i class="fa-regular fa-clock"></i> Time : <?php echo $time; ?> </span>
            <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> Grade Level : <?php echo $grade_level; ?> </span>
            <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> Section : <?php echo $section; ?></span>
            <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> S.Y. : <?php echo $sy; ?></span>
          </div>
          <br>

          <?php



    
    $success = $_GET['success'];

    if($success == 'yes'){

      echo ' <div class="alert custom-alert-2 alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle"></i>
            Grades successfully encoded!
            <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button"
              data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }


           ?>

   
      <?php

    $sql4 = "SELECT * FROM settings where id='1' ";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row4 = $result4->fetch_assoc()) {
    $_first = $row4['first'];
    $_second = $row4['second'];
    $_third = $row4['third'];
    $_forth = $row4['forth'];
    $og = $row4['og'];
     
  }
} else {
  
}


if($_first == 'on'){
  $first_input = ' ';
  $first_ph = 'Enter 1st Quarter Grades ';
}

 if($_first == ''){
 
    $first_input = 'readonly';
  $first_text = 'Input For First Grading Grades is Disabled';
}


if($_second == 'on'){
  $second_input = ' ';
  $second_ph = 'Enter 2nd Quarter Grades';

}

 if($_second == ''){
  
  $second_input = 'readonly';
  $second_ph = 'Input For Second Grading Grades is Disabled';
}



if($_third == 'on'){
  $third_input = ' ';
  $third_ph = ' Enter 3rd Quarter Grades';
}

 if($_third == ''){
   $third_input = 'readonly';
  $third_ph = 'Input For Third Grading Grades is Disabled';
}



if($_forth == 'on'){
  $forth_input = ' ';
  $forth_ph = 'Enter 4th Quarter Grades ';
}

 if($_forth == ''){
 
    $forth_input = 'readonly';
  $forth_ph = 'Input For Forth Grading Grades is Disabled';
}


$btn = '';  

// Query to check if there's a conflict in session time for the same teacher
$sql = "SELECT * FROM subject 
        WHERE teacher = ? 
        AND time = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $teacher, $time);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $btn = ' disabled';
}



 if($og == 'on'){
  
  $btn = '';
}
 




       ?>

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
                  <span class="counter"><?php echo $first; ?></span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar" style="width: <?php echo $first; ?>%;" role="progressbar" aria-valuenow="78" aria-valuemin="0"
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
                  <span class="counter"><?php echo $second; ?></span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: <?php echo $second; ?>%;" role="progressbar" aria-valuenow="96"
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
                  <span class="counter"><?php echo $third; ?></span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: <?php echo $third; ?>%;" role="progressbar" aria-valuenow="88"
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
                  <span class="counter"><?php echo $forth; ?></span>%
                </small>
              </div>

              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: <?php echo $forth; ?>%;" role="progressbar" aria-valuenow="88"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>




        </div>

      </div>

 
    </div>

  </div>

  <!-- Fullscreen Modal -->
  <form method="POST" action="teacher_success.php?section=<?php echo $section; ?>&grade_level=<?php echo $grade_level; ?>&subject=<?php echo $subject; ?>&sid=<?php echo $sid; ?>&success=yes"> 
  <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="fullscreenModalLabel"><i class="fa-solid text-dark  fa-pen-to-square"></i> Encode Grades </h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                    <div class="form-group">
                    <label class="text-dark" for=" text-dark">1st Quarter <text class="text-danger">*</text></label>
                    <input type="number" class="form-control" name="first" <?php echo $first_input; ?> required id="text" min="0" max="100" value="<?php echo $first; ?>" placeholder="<?php echo $first_ph; ?>">
                  </div>


                  <div class="form-group">
                    <label class="text-dark" for="text text-dark">2nd Quarter <text class="text-danger">*</text></label> 
                    <input type="number" class="form-control" name="second" required <?php echo $second_input; ?> id="text" min="0" max="100" value="<?php echo $second; ?>" placeholder="<?php echo $second_ph; ?>">
                  </div>

                  <div class="form-group">
                    <label class="text-dark" for="text text-dark">3rd Quarter <text class="text-danger">*</text></label>
                    <input type="number" class="form-control" name="third" <?php echo $third_input; ?> required id="text" min="0" max="100" value="<?php echo $third; ?>" placeholder="<?php echo $third_ph; ?>">
                  </div>


                  <div class="form-group">
                    <label class="text-dark" for="text text-dark">4th Quarter <text class="text-danger">*</text></label>
                    <input type="number" class="form-control" name="forth" <?php echo $forth_input; ?> required id="text" min="0" max="100" value="<?php echo $forth; ?>" placeholder="<?php echo $forth_ph; ?>">
                  </div>
                  
                  <input type="hidden" name="section" value="<?php echo $section; ?>" >
                  <input type="hidden" name="grade_level" value="<?php echo $grade_level; ?>" >
                  <input type="hidden" name="subject" value="<?php echo $subject; ?>" >
                  <input type="hidden" name="sid" value="<?php echo $sid; ?>" >

                  <?php
 

 
 


?>



        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-sm btn-success <?php echo $btn; ?>   " type="submit"   name="save_grade"><i class="fa-solid fa-cloud-arrow-up"></i> Save Grades</button>
          </form>
        </div>
      </div>
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