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
 
}
else
{

 echo '
     <script>
            window.location="login.php"
            </script>';
}   

 
    
   $title = 'MNHS ADMIN PORTAL';
    $logo = 'logo.png';

  
?>
  <?php $py = $year - 1;
$sy = ''.$py.' - '.$year.'';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard |  <?php echo $title; ?></title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="icon" href="logo/<?php echo $logo; ?>">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 


  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       
      
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
   
 
 <li class="nav-item dropdown user-menu">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
<img src="user.png" class="user-image img-circle elevation-2" alt="User Image">
<span class="d-none d-md-inline"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?> </span>
</a>
<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

<li class="user-header bg-white">
<img src="user.png" class="img-circle elevation-2" alt="User Image">
<p>
<?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?>
<small> <?php echo $_SESSION['type']; ?></small>
</p>
</li>
 

<li class="user-footer">
<a href="profile.php" class="btn btn-default btn-flat">Profile</a>
<a href="logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
</li>
</ul>
</li>
 
 
 
 
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-orange elevation-3">
 
    <a href="index.php" class="brand-link " style="display: flex; justify-content: center; align-items: center; text-align: center;"> 
    <img src="logo/<?php echo $logo; ?>" alt="Logo" class="brand-image " style="opacity: .8; margin-right: 10px;">
    <span style="font-size:15px;" class="brand-text text-center text-success  font-weight-bold"><?php echo $title; ?></span>
</a>

    <!-- Sidebar -->
    <div class="sidebar">
    
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav  nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="user.png" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></a>
          <small class="text-success text-center"><i class="fa-solid text-success fa-earth-americas"></i> <?php echo $_SESSION['type']; ?></small>
        </div>
      </div>

 

          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link text-bold text-white  active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>

 
          <li class="nav-item">
            <a href="teacher.php" class="nav-link">
              <i class="nav-icon fa-solid  fa-chalkboard-user"></i>
              <p>
                Manage  Teachers  
                 
              </p>
            </a>
          </li>

  
 
          <li class="nav-item">
            <a href="parent.php" class="nav-link">
              <i class="nav-icon fa-solid   fa-circle-user"></i>
              <p>
               Manage   Parents  
                 
              </p>
            </a>
          </li>

 
          <li class="nav-item  ">
            <a href="student.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-id-card"></i>
              <p>  
                   Students List
                 
                
              </p>
             
            </a>
           
          </li>


        
        <li class="nav-item  ">
            <a href="subject.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-list"></i>
              <p>  
                   Subject List
                 
                
              </p>
             
            </a>
           
          </li>


          




               <li class="nav-item  ">
            <a href="section.php" class="nav-link   ">
             <i class="nav-icon fa-solid  fa-rectangle-list"></i>
              <p>  
                   Section List
                 
                
              </p>
             
            </a>
           
          </li>




   


          <li class="nav-item  ">
            <a href="grade.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-star"></i>
              <p>  
                   Student Grades
                 
                
              </p>
             
            </a>
           
          </li>


          <li class="nav-item  ">
            <a href="settings.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-gear"></i>
              <p>  
                  Settings
                 
                
              </p>
             
            </a>
           
          </li>



          <li class="nav-item  ">
            <a href="ann.php" class="nav-link   ">
             <i class="nav-icon fa-solid  fa-bullhorn"></i>
              <p>  
                  Announcement
              
                
              </p>
             
            </a>
           
          </li>


 
 
                 <li class="nav-item  ">
            <a href="import.php" class="nav-link   ">
             <i class="nav-icon fa-solid  fa-cloud-arrow-up"></i>
              <p>  
                   Import Class List
                 
                
              </p>
             
            </a>
           
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-bold">MNHS ADMIN DASHBOARD </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
   
   <?php 
   $sql = "SELECT  id from account where type ='Teacher' ";
    if ($result = mysqli_query($conn, $sql)) {
    $teacher = mysqli_num_rows( $result );
} 


   $sql = "SELECT  id from account where type ='Parent' ";
    if ($result = mysqli_query($conn, $sql)) {
    $parent = mysqli_num_rows( $result );
} 


   $sql = "SELECT  id from student   ";
    if ($result = mysqli_query($conn, $sql)) {
    $student = mysqli_num_rows( $result );
} 
   ?>

<div class="row">
          <div class=" col-4">
            <!-- small box -->
            <div class="small-box bg-orange ">
              <div class="inner">
                <h3 class="text-white"><?php echo $teacher ?></h3>

                <p class="text-white">Total Teachers</p>
              </div>
              <div class="icon">
             <i class="nav-icon fa-solid  fa-chalkboard-user"></i>
              </div>
              <a href="teacher.php" class="small-box-footer "  style="font-color:white;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="  col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $parent ?></h3>

                <p>Total Parents</p>
              </div>
              <div class="icon">
            <i class="nav-icon fa-solid   fa-circle-user"></i>
              </div>
              <a href="parent.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="  col-4">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $student ?> </h3>

                <p>Total Students</p>
              </div>
              <div class="icon">
            <i class="fa-solid fa-user"></i>
              </div>
              <a href="student.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       
          <!-- ./col -->
        </div>
 
 
        <div class="row">
          <!-- Left col -->
      




          <section class="col-6  ">
                  <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title text-bold text-success">Recent Teachers Added</h3>
                <div class="card-tools">
                  
                  
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Date</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
      
                                  <?php

              $sql = "SELECT * FROM account where type='Teacher' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>

      <td>'.$row['firstname'].' </td>
      <td>'.$row['lastname'].' </td>
      <td>'.$row['email'].' </td>
      <td>'.$row['contact'].' </td>
      <td>'.$row['month'].' '.$row['day'].', '.$row['year'].' </td>
     </tr>';
  }
} else {
 
} ?>


                   
                
                  </tbody>
                </table>
              </div>
            </div>

            <!-- /.card -->
          </section>
          

                    <section class="col-6  ">
                  <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title text-bold text-success">Recent Parents Added</h3>
                <div class="card-tools">
                  
                  
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Date</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
              

              <?php

              $sql = "SELECT * FROM account where type='Parent' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>

      <td>'.$row['firstname'].' </td>
      <td>'.$row['lastname'].' </td>
      <td>'.$row['email'].' </td>
      <td>'.$row['contact'].' </td>
      <td>'.$row['month'].' '.$row['day'].', '.$row['year'].' </td>
     </tr>';
  }
} else {
 
} ?>




                   
                
                  </tbody>
                </table>
              </div>
            </div>

            <!-- /.card -->
          </section>


 
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
 
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#"> <?php echo $title; ?></a>.</strong>
    All rights reserved.
   <div class="float-right text-bold text-orange d-none d-sm-inline-block">
      <b>School Academic Year</b> <?php echo $py; ?> - <?php echo $year; ?>
    </div>
  </footer>

 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
