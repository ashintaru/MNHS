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

 
 
 

 
 
 

  <div class="page-content-wrapper py-3" id="elementsSearchList">
    <div class="container">
      <!-- Search Form -->
      <div class="card">
        <div class="card-body p-3">


           <?php $py = $year - 1;
$sy = ''.$py.' - '.$year.'';
 ?>
 
           <div class="form-group">
              <label class="form-label" for="defaultSelect">Academic Year</label>
              <select class="form-select bg-light" id="sy" onchange="sy()" aria-label="Default select">

        <option selected  disabled  >Selected Year : <?php echo $_GET['sy']; ?></option> 
        <option value="2022 - 2023">2022 - 2023</option>
        <option value="2023 - 2024">2023 - 2024</option>
        <option  value="<?php echo $py; ?> - <?php echo $year; ?>"><?php echo $py; ?> - <?php echo $year; ?></option>
              </select>
            </div>


 <script type="text/javascript">
  
  function  sy(){

    var sy = document.getElementById("sy").value;

       window.location="parent_view_grades_filter.php?sy="+sy;
  }

</script>


          <div class="form-group mb-0">
            <input class="form-control" id="elementsSearchInput" type="text" onkeyup="elementsSearch()"
              placeholder="Search Children to view grades...">
          </div>
        </div>
      </div>

 

<?php

$pid = $_SESSION['id'];
$fsy = $_GET['sy'];


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


if($parents == 'on'){
 
}

 if($parents == ''){
   echo ' <br><div class="alert custom-alert-2 alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle"></i>
          Viewing Grades is Disabled
            
          </div>';
}
 


 $sql = "SELECT * FROM student where pid='$pid'   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $grade_level = $row['grade_level'];
    $section = $row['section'];
    $sid = $row['id'];


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


if($parents == 'on'){
  $href = 'parent_view_children.php?section='.$section.'&grade_level='.$grade_level.'&subject='.$subject.'&sid='.$sid.'&sy='.$fsy.' ';
  $icon = '<i class="bi bi-caret-right-fill fz-12"></i>';
}

 if($parents == ''){
  $href = '#';
  $icon = '<i class="fa-solid fz-15 text-danger fa-rectangle-xmark"></i>';
}
 



   echo '  <a class="affan-element-item" href="'.$href.'">

        <text > [ <text class="text-success"> <i class="fa-regular fa-id-badge"></i> '.$row['id'].' </text> ] '.$row['firstname'].' '.$row['lastname'].' </text> 
      '.$icon.'
      </a>';


  
  }
} else {
 
}




 

 ?>
 
      
 

      <script>
        function elementsSearch() {
          var input = document.getElementById('elementsSearchInput');
          var filter = input.value.toUpperCase();
          var list = document.getElementById("elementsSearchList");
          var listItem = list.getElementsByClassName('affan-element-item');

          for (i = 0; i < listItem.length; i++) {
            var a = listItem[i];
            var textValue = a.textContent || a.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
              listItem[i].style.display = "";
            } else {
              listItem[i].style.display = "none";
            }
          }
        }
      </script>
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