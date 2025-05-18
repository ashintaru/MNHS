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
    <title> Student List | <?php echo $title; ?></title>
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <script src="jquery.min.js"></script>
  <script src="sweetalert2@11.js"></script>
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
 
 
 
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
 



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
     <style type="text/css">
/*       .modal-header {
    border-bottom: 0 none;
}*/

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
            <a href="student.php" class="nav-link  active  text-white">
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
            <h1 class="m-0">Manage Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 


    <!-- Main content -->
    <section class="content">
<div class="card">
<div class="card-header">
<h3 class="card-title">  
               Student List  
              </h3> 
<button type="button"  data-toggle="modal" data-target="#addmenu" class="btn btn-success float-right"><i class="fa-solid fa-id-card"></i> Add New Students</button>


  <a href="import_student.php"   class="btn mr-3 btn-info float-right"><i class="fa-solid fa-cloud-arrow-up"></i> Import Students</a>  
</div>



<div class="card-body">

    <div class="form-group   col-3">
    <label>Academic Year <text class="text-danger">*</text></label>
    <select id="sy" onchange="sy()" class="form-control" name="year" required>
        <option   disabled selected>Selected Year </option>
        <option value="2022 - 2023">2022 - 2023</option>
        <option value="2023 - 2024">2023 - 2024</option>
        <option selected value="<?php echo $py; ?> - <?php echo $year; ?>"><?php echo $py; ?> - <?php echo $year; ?></option>
    </select>
</div>

<script type="text/javascript">
  
  function  sy(){

    var sy = document.getElementById("sy").value;

       window.location="filter_student.php?sy="+sy;
  }

</script>


<table id="example1" class="table table-hover table-striped table-bordered     table-hover table-striped">
<thead>
<tr>

 
<th>Student ID #</th>
<th>Lastname</th>
<th>Firstname</th>
<th>MiddleInitial</th>
<th>contact</th>
<th>Email</th>
<th>Grade Level</th>
<th>Section</th>
<th>Parent Name</th>
<th>S.Y.</th>
 
<th> </th>

</tr>
</thead>
<tbody>
<?php 

  $sql = "SELECT * FROM section order by section";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $section_list .= '  <option value="'.$row['section'].'">'.$row['section'].'</option>';
  }
} else {
 
}

      ?>


                                          <?php 

                $sql = "SELECT * FROM account where type='Parent'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pid_list .= '  <option value="'.$row['id'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
  }
} else {
 
}

      ?>



<?php
 
 $id = $_SESSION['id'];
 $sql = "SELECT * FROM student order by lastname DESC";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
    $py = $year - 1;

    $pid = $row['pid'];

    $sql2 = "SELECT  firstname, lastname FROM account where id = '$pid' ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
   $firstname = $row2['firstname'];
   $lastname = $row2['lastname'];
  }
} else {
   
}
 
 $sy = $row['sy'];
 $middle_initial = substr($row['middlename'], 0, 1);

    echo '

<tr>
 
<td class="text-bold text-orange"><img src="student.png" width="40px"> '.$row['id'].' </td>
<td > '.$row['lastname'].'</td>
<td > '.$row['firstname'].'</td>
<td > '.strtoupper($middle_initial).'</td>
<td > '.$row['contact'].'</td>
<td > '.$row['email'].'</td>
<td > '.$row['grade_level'].'</td>
<td > '.$row['section'].'</td>
<td > '.$firstname.' '.$lastname.'</td>
<td class="text-bold text-orange" > '.$sy.'</td>
 
 
  
 
<td>
<a href="view_student.php?id='.$row['id'].'"  class="btn mr-2 btn-info" >     <i class="fa-solid fa-eye "></i>   </a>

  <a href="#"  class="btn mr-2 btn-primary" data-toggle="modal" data-target="#edit'.$row['id'].'">     <i class="fas fa-edit "></i>   </a>
  <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#del'.$row['id'].'">   <i class="fas fa-trash "></i> </a>

    </td>

</tr>

 
    ';


    // delete modal
    echo '<!-- Modal -->
<div class="modal fade" id="del'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title text-danger text-bold" id="exampleModalLabel">         
          <i class="fa-solid fa-trash"></i>  Delete Student Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="student.php" enctype="multipart/form-data">



                  <div class="form-group ">
                    <label for="text">Student ID #<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"  value="'.$row['id'].'" required  >
                  </div>



                  <div class="form-group ">
                    <label for="text">Firstname<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"  value="'.$row['firstname'].'" required  >
                  </div>


   
                  <div class="form-group ">
                    <label for="text">Lastname<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"   value="'.$row['lastname'].'" required >
                  </div>


                  <input style="display:none;" type="text" name="id" value="'.$row['id'].'">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="submit" name="del" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>';

/// edit menu modal
echo ' 

<!-- add menu Modal -->

<div class="modal fade" id="edit'.$row['id'].'"   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-bold" id="exampleModalLabel"><i class="fa-solid fa-id-card"></i> Update Student Details</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="student.php" enctype="multipart/form-data">
      <div class="row">


                  <div class="form-group col-6">
                    <label for="text">Firstname<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" value="'.$row['firstname'].'" name="firstname" required placeholder="Enter Firstname">
                  </div>

                  <div class="form-group col-6">
                    <label for="text">Lastname<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" value="'.$row['lastname'].'" required placeholder="Enter Lastname" name="lastname" >
                  </div>

                  <div class="form-group col-6">
                    <label for="text">Middlename<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" value="'.$row['middlename'].'" required placeholder="Enter middlename" name="middlename" >
                  </div>

                 

                  <div class="form-group col-6">
                      <label>Contact #<text class="text-danger">*</text></label>
                      <div class="input-group">
                          <span class="input-group-text">+63</span>
                          <input type="tel" class="form-control" value="'.$row['contact'].'" name="contact" required 
                                placeholder="Enter Contact #" pattern="[0-9]{10}" 
                                maxlength="10" minlength="10" title="Enter a 10-digit phone number">
                      </div>
                  </div>

                  <div class="form-group col-6">
                    <label for="text">Email<text class="text-danger">*</text></label>
                    <input type="email" class="form-control" value="'.$row['email'].'" required placeholder="Enter Email" name="email"  >
                  </div>
  
                  <div class="form-group col-6">
                  <label >Select Grade Level</label>
                  <select name="grade_level" class="form-control">
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                    <option value="10">Grade 10</option>
                  </select>
                </div>



                   <div class="form-group col-6">
                  <label >Section </label>
                  <select name="section" required class="form-control">
                  '.$section_list.'
                  </select>
                </div>

                  <div class="form-group col-6">
                  <label >Select Parents </label>
                  <select name="pid" required class="form-control">
                  '.$pid_list.'
                  </select>
                </div>


               
                    <input type="hidden" class="form-control" value="'.$row['id'].'" name="update_id" required >
          


      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submit'.$row['id'].'" name="update_student" onclick="submit'.$row['id'].'()" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save Update</button>
         </form>
      </div>
    </div>
  </div>
</div>
';


  



  }
} else {
  echo "No Subject Records";
}
 
?>


 

</tbody>
 
</table>
</div>

</div>
    </section>
    <!-- /.content -->
  </div>
 
<?php
 if(isset($_POST['del']))
  {

     $id = $_POST['id'];
// sql to delete a record
$sql = "DELETE FROM student WHERE id='$id'";

if ($conn->query($sql) === TRUE) {



  echo '<script> 
 
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Deleted",
  showConfirmButton: false,
  timer: 1500
})
 
 

  </script>';
  echo '  <meta http-equiv="refresh" content="1.5; URL=student.php" />';
 
} else {
 
}

 }
?>


<!-- add menu Modal -->
<form method="POST" action="student.php" enctype="multipart/form-data">
<div class="modal fade" id="addmenu"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-orange text-bold" id="exampleModalLabel"><i class="fa-solid fa-id-card"></i> Add New Student</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

              <center><h4 class="text-bold">STUDENT DETAILS</h4></center> 
      <div class="row">



        
                  <div class="form-group col-6">
                    <label for="text">Firstname<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" name="firstname" required placeholder="Enter Firstname">
                  </div>

                  <div class="form-group col-6">
                    <label for="text">Lastname<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" required placeholder="Enter Lastname" name="lastname" >
                  </div>
                  
                  <div class="form-group col-6">
                    <label for="text">Middlename<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" required placeholder="Enter Middlename" name="middlename" >
                  </div>


    <div class="form-group col-6">
    <label>Contact #<text class="text-danger">*</text></label>
    <div class="input-group">
        <span class="input-group-text">+63</span>
        <input type="tel" class="form-control" name="contact" required 
               placeholder="Enter Contact #" pattern="[0-9]{10}" 
               maxlength="10" minlength="10" title="Enter a 10-digit phone number">
    </div>
</div>

                  <div class="form-group col-6">
                    <label for="text">Email<text class="text-danger">*</text></label>
                    <input type="email" class="form-control" required placeholder="Enter Email" name="email"  >
                  </div>
  
                  <div class="form-group col-6">
                  <label >Select Grade Level</label>
                  <select name="grade_level" class="form-control">
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                    <option value="10">Grade 10</option>
                  </select>
                </div>


                <div class="form-group col-6">
                  <label >Select Section</label>
                  <select name="section" class="form-control">\
                    <?php 

                    $sql = "SELECT section FROM section";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo  '<option value="'.$row['section'].'">'.$row['section'].'</option>';
  }
} else {
 
}

                    ?>
                    
                     
                  </select>
                </div>


                 <div class="form-group col-6">
                  <label >Select Parents</label>
                  <select name="pid" class="form-control select2bs4" style="width: 100%;">
                    <?php 

                    $sql = "SELECT * FROM account where type='Parent' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo  '<option value="'.$row['id'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
  }
} else {
 
}

                    ?>
                    
                     
                  </select>
                </div>



                  
              
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="id1" name="add_student" onclick="submit()" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Save New Subject</button>
      </div>
    </div>
  </div>
</div>
  </form>



<script> 

 


function submit() {
  // body...
  var button = document.getElementById("id1");  
  button.disabled = true;
}
</script>


  <?php
if(isset($_POST['add_student']))
  {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $grade_level = $_POST['grade_level'];
    $pid = $_POST['pid'];
    $section = $_POST['section'];
    
    
  
 
 
    $sql = "INSERT INTO student (firstname, lastname,middlename,contact, email, grade_level, section, pid, month, day, year, sy)
VALUES ('$firstname', '$lastname', '$middlename',' $contact', '$email', '$grade_level', '$section', '$pid', '$month', '$day', '$year' ,'$sy')";

if ($conn->query($sql) === TRUE) {
   

  echo '<script type="text/javascript">
  
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Added New Student",
  showConfirmButton: false,
  timer: 1500
});


</script> ';

 echo '  <meta http-equiv="refresh" content="1.5; URL=student.php" />';


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





} ?>



  <?php
if(isset($_POST['update_student']))
  {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST["middlename"];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $grade_level = $_POST['grade_level'];
    $pid = $_POST['pid'];
    $section = $_POST['section'];
    $teacher = $_POST['teacher'];
    
    $update_id = $_POST['update_id'];
 

    $sql = "UPDATE student SET firstname='$firstname', lastname='$lastname', middlename='$middlename', contact='$contact', email='$email', grade_level='$grade_level', pid='$pid', section='$section' WHERE id='$update_id'";

if ($conn->query($sql) === TRUE) {
   

  echo '<script type="text/javascript">
  
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Updated",
  showConfirmButton: false,
  timer: 1500
});


</script> ';

 echo '  <meta http-equiv="refresh" content="1.5; URL=student.php" />';


} else {
  echo "Error updating record: " . $conn->error;
}


 




} ?>




 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#"><?php echo $title; ?></a>.</strong>
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
 
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
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(function () {

 
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
    //  theme: 'bootstrap4'
    })


    // $("#example1").DataTable({
    //   "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false,
    //   "buttons": [  "excel", "print", "pdf"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "ordering": true, // Enable sorting
      "order": [[2, 'asc'], [1, 'asc']], // Sort by Lastname (col 2), then Firstname (col 1)
      "buttons": ["excel", "print", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

</body>
</html>
