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
 

$sql = "SELECT * FROM student where id='$sid' ";
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
                  <h6 class="mb-1 fz-14"><?php echo $firstname; ?> <?php echo $lastname; ?></h6>
                  <p class="mb-0 fz-12"><?php echo $_GET['sid']; ?></p>
                   <p class="mb-0 fz-12"><?php echo $grade_level; ?> - <?php echo $section; ?></p>
                </div>
              </div>
              <!-- Contact Info-->
      <?php

    $sql2 = "SELECT * FROM settings where id='1' ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $grades = $row2['grades'];
    $generate = $row2['generate'];
    $parents = $row2['parents'];
     
  }
} else {
  
}

 

$tid = $_SESSION['id'];
 
// Get all grades for this student and teacher
$sql = "SELECT grades FROM grades WHERE tid='$tid' AND sid='$sid'";
$result = $conn->query($sql);

$count_zero = 0; // Default: no records exist

if ($result && $result->num_rows > 0) {
    $total_grades = $result->num_rows;
    $zero_count = 0;
    
    // Count how many grades are zero
    while ($row = $result->fetch_assoc()) {
        if ($row['grades'] == 0) {
            $zero_count++;
        }
    }
    
    // Set count_zero based on conditions
    if ($zero_count == 0) {
        $count_zero = 1; // All grades are > 0
    } else {
        $count_zero = 2; // Some grades are zero
    }
}

// Determine button state
if ($generate == 'on') {
    if ($count_zero == 1) {
        // All grades complete (none are zero)
        $btn = '<a href="first.php?section='.$section.'&grade_level='.$grade_level.'&sid='.$sid.'" class="btn btn-success me-2 ms-2 mb-2"><i class="fa-solid fa-print"></i> Generate Report Cards</a>';
    } elseif ($count_zero == 2) {
        // Some grades are zero
        $btn = '<a href="#" class="btn btn-danger me-2 ms-2 mb-2"><i class="fa-solid fa-print"></i> Complete All Grades First</a>';
    } else {
        // No grades exist yet (count_zero = 0)
        $btn = '<a href="#" class="btn btn-danger me-2 ms-2 mb-2"><i class="fa-solid fa-print"></i> No Grades Entered Yet</a>';
    }
} else {
    // Generation disabled
    $btn = '<a href="#" class="btn btn-danger me-2 ms-2 mb-2"><i class="fa-solid fa-print"></i> Generate Report Cards Disabled</a>';
}

 
 
// if($count_zero > 0){
//  $btn = '  <a href="#" class="btn btn-danger me-2 ms-2 mb-2 "><i class="fa-solid fa-print"></i> Complete All Grades First </a>';
// }


       ?>
 
            <?php echo $btn; ?>


            </div>
          </div>
 

<?php
 
 
 

// Get and sanitize parameters
$grade_level = isset($_GET['grade_level']) ? intval($_GET['grade_level']) : 0;
$section = isset($_GET['section']) ? $conn->real_escape_string(urldecode($_GET['section'])) : '';
$sid = isset($_GET['sid']) ? $conn->real_escape_string($_GET['sid']) : '';
$sy_filter = isset($_GET['sy']) ? $conn->real_escape_string($_GET['sy']) : '2024 - 2025'; // Default SY

// Debug output (remove in production)
echo "<!-- Debug: grade_level=$grade_level, section=$section, sid=$sid, sy=$sy_filter -->\n";

// Get all subjects for this class
$sql = "SELECT * FROM subject WHERE grade_level='$grade_level' AND section='$section'";
$result = $conn->query($sql);

if (!$result) {
    die("Subject query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $subject = $conn->real_escape_string($row['subject']);
        
        // Debug subject
        echo "<!-- Debug: Processing subject: $subject -->\n";
        
        // Get all grades for this subject in one query
        $grades_sql = "SELECT quarter, grades FROM grades 
                      WHERE grade_level='$grade_level' 
                      AND section='$section' 
                      AND subject='$subject' 
                      AND sid='$sid' 
                      AND sy='$sy_filter'";
        $grades_result = $conn->query($grades_sql);
        
        if (!$grades_result) {
            echo "<!-- Grades query failed: " . $conn->error . " -->\n";
            continue;
        }
        
        // Initialize quarters
        $quarter_grades = [
            'First' => 0,
            'Second' => 0,
            'Third' => 0,
            'Forth' => 0
        ];
        
        // Populate with actual grades
        while ($grade_row = $grades_result->fetch_assoc()) {
            $quarter = $grade_row['quarter'];
            $grade = $grade_row['grades'];
            echo "<!-- Found grade for $quarter: $grade -->\n";
            
            if (array_key_exists($quarter, $quarter_grades)) {
                $quarter_grades[$quarter] = $grade;
            }
        }
        
        // Display the card
        echo '<div class="card timeline-card mt-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="timeline-text mb-2">
                            <span style="font-size:20px;" class="badge mb-2 rounded">
                                <i class="fa-solid fa-book"></i> '.htmlspecialchars($row['subject']).'
                            </span>
                          <h6><i class="fa-solid fa-address-book"></i> '.htmlspecialchars($_SESSION['firstname'] . ' ' . $_SESSION['lastname']).'</h6>

                        </div>
                    </div>
                    
                    <div class="timeline-tags">
                        <span class="badge fw-normal bg-primary"><i class="fa-regular fa-clock"></i> Time: '.htmlspecialchars($row['time']).'</span>
                        <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> Grade Level: '.htmlspecialchars($row['grade_level']).'</span>
                        <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> Section: '.htmlspecialchars($row['section']).'</span>
                        <span class="badge fw-normal bg-primary"><i class="fa-solid fa-circle-info"></i> SY: '.htmlspecialchars($sy_filter).'</span>
                    </div>
                    <br>';
        
        // Display each quarter
        foreach ($quarter_grades as $quarter => $grade) {
            $display = [
                'First' => '1st Quarter',
                'Second' => '2nd Quarter',
                'Third' => '3rd Quarter',
                'Forth' => '4th Quarter'
            ][$quarter];
            
            echo '<div class="skill-progress-bar d-flex align-items-center">
                    <div class="skill-icon shadow-sm p-2">
                        <i class="fa-solid fz-20 text-success fa-file-lines"></i>
                    </div>
                    <div class="skill-data">
                        <div class="skill-name d-flex align-items-center justify-content-between">
                            <p class="mb-1">'.$display.'</p>
                            <small class="mb-1">
                                <span class="counter">'.$grade.'</span>%
                            </small>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar '.($quarter == 'First' ? '' : 'bg-primary').'" 
                                 style="width: '.$grade.'%;" 
                                 role="progressbar" 
                                 aria-valuenow="'.$grade.'" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>';
        }
        
        echo '</div></div>'; // Close card
    }
} else {
    echo '<div class="alert alert-info">No subjects found for this class.</div>';
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
            <a href="teacher_index.php">
              <i class="fa-solid fa-house"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li >
            <a href="teacher_search_student.php">
            <i class="fa-solid fa-edit"></i>
              <span>Encode Grades</span>
            </a>
          </li>

          <li class="active text-orange">
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