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
  <title>Student Grades | Batangas Christian School</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="icon" href="logo.png">
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
 


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!--    
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="logo.png" alt="logo" height="60" width="60">
  </div> -->

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
<span class="d-none d-md-inline"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></span>
</a>
<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

<li class="user-header bg-white">
<img src="user.png" class="img-circle elevation-2" alt="User Image">
<p>
<?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?>
<small>Administrator</small>
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
     <style type="text/css">
       .modal-header {
    border-bottom: 0 none;
}

.modal-footer {
    border-top: 0 none;
}
     </style>

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

 

          <li class="nav-item ">
            <a href="index.php" class="nav-link text-dark  ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>

 
          <li class="nav-item">
            <a href="teacher.php" class="nav-link ">
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
            <a href="student.php" class="nav-link    ">
             <i class="nav-icon fa-solid fa-id-card"></i>
              <p>  
                   Students List
                 
                
              </p>
             
            </a>
           
          </li>

 

                  <li class="nav-item  ">
            <a href="subject.php" class="nav-link      ">
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
            <a href="grade.php" class="nav-link  active text-white">
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
            <h1 class="m-0">Student Grades Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Grades Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 

<?php
$id = $_GET['id'];
$sy = $_GET['sy'];
$sql = "SELECT * FROM student where id = '$id'   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $midname = $row['midname'];
    $grade = $row['grade_level'];
    $section = $row['section'];

    $sname = ' '.$row['firstname'].' '.$row['midname'].' '.$row['lastname'].' ';

  }
} else {
 
}

 ?>
    <!-- Main content -->
    <section class="content">
<div class="container">
<div class="row">
        <div class="col-lg-12">
            <div id="this_print_only" class="card">
                <div class="card-body">
                    <div class=" text-dark text-center">
                         
                        <div class="mb-1">
                           <h2 class="mb-1 text-dark">MARINIG NATIONAL HIGH SCHOOL</h2>
                        </div>
                        <div class="text-dark">
                            <p class="mb-0">244 Marinig, Cabuyao, Calabarzon, PH</p>
                            <p class="mb-0"><i class="uil uil-envelope-alt me-1"></i> admin@mnhs.com</p>
                            <p><i class="uil uil-phone me-1"></i>  (0907) 77-37633 (SMART)</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-dark">
                                <h5 class="font-size-16 mb-1">Student # : <u><?php echo $id; ?> </u></h5>
                               
                                <h5 class="mb-1">Grade Level / Section : <u><?php echo $grade ?> - <?php echo $section; ?></u></h5>
                                <h5 class="mb-1">Student Name :  <u><?php echo $firstname; ?> <?php echo $midname; ?>, <?php echo $lastname; ?></u> </h5>
                                 <h5 class="mb-1">School Academic Year :  <u><?php echo $sy; ?>  </u> </h5>
                                
                            </div>
                        </div>
                  
                    </div>
                    <!-- end row -->
                    
                    <div class="py-2">
                        <br>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>1st Grading</th>
                                        <th>2nd  Grading</th>
                                        <th>3rd Grading</th>
                                        <th>4th Grading</th>
                                        <th class="text-end no-print"   > </th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>


                                  <?php


$sql = "SELECT subject FROM grades where grade_level = '$grade' and section='$section' and sid='$id' and sy='$sy' group by subject ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
    $subject = $row['subject'];
    $sql1 = "SELECT grades FROM grades   where quarter = 'First' and sid='$id' and subject='$subject' and sy='$sy'  order by id DESC limit 1 ";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];

  }
} else {
   $first = '';
}


    $sql2 = "SELECT grades FROM grades where quarter = 'Second' and sid='$id' and subject='$subject' and sy='$sy' order by id DESC limit 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $second = $row2['grades'];
  }
} else {
   $second = '';
}


    $sql3 = "SELECT grades FROM grades where quarter = 'Third' and sid='$id' and subject='$subject' and sy='$sy' order by id DESC limit 1";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
    $third = $row3['grades'];
  }
} else {
   $third = '';
}

    $sql4 = "SELECT grades FROM grades where quarter = 'Forth'  and sid='$id' and subject='$subject' and sy='$sy' order by id DESC limit 1";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row4 = $result4->fetch_assoc()) {
    $forth = $row4['grades'];
  }
} else {
   $forth = '';
}

$addgrade = '<a href="#" data-toggle="modal" data-target="#add_grade'.$row['id'].'" class="btn btn-info me-1"><i class="fa-solid fa-pen-to-square"></i></a>';

     echo '
 <tr>
                                        <th  class="text-primary">'.$row['subject'].'</th>
                                        <th >'.$first.'</th>
                                        <th >'.$second.'</th>
                                        <th >'.$third.'</th>
                                        <th >'.$forth.'</th>
                                         
                                        <td class="text-end no-print">  </td>
                                    </tr>





      ';

 

  }
} else {
 
}


                                   ?>
                                   
                                
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div><!-- end table responsive -->
                        <div class="d-print-none mt-4">
                            <div class="float-end">
                                <a href="#" onclick="printDiv('this_print_only')" class="btn btn-success me-1"><i class="fa fa-print"></i></a>

                     
             

                
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
 
 

  

<!--   -->
    <script>
        function printDiv(divId) {
            var divToPrint = document.getElementById(divId);
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write(`
                <html>
                <head>
                    <link rel="stylesheet" href="dist/css/adminlte.min.css">
                    <style>
                        @media print {
                            .no-print {
                                display: none;
                            }
                        }
                    </style>
                </head>
                <body onload="window.print()">
                    ${divToPrint.innerHTML}
                </body>
                </html>
            `);
            newWin.document.close();
            setTimeout(function() { newWin.close(); }, 10);
        }
    </script> 

 

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#"> Batangas Christian School</a>.</strong>
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

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false,
      "buttons": [  "excel", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
