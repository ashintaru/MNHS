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
    <title> Subject List | <?php echo $title; ?></title>
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
            <a href="student.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-id-card"></i>
              <p>  
                   Students List
                 
                
              </p>
             
            </a>
           
          </li>
 

                  <li class="nav-item  ">
            <a href="subject.php" class="nav-link  text-white active  ">
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
            <h1 class="m-0">Manage Subjects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Subjects</li>
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
               Subjects List  
              </h3> 


<button type="button"  data-toggle="modal" data-target="#addmenu" class="btn btn-secondary float-right"><i class="fa-solid fa-plus"></i> Add New Subjects</button>

  <a href="import_subject.php"   class="btn mr-3 btn-info float-right"><i class="fa-solid fa-cloud-arrow-up"></i> Import Subjects</a>  



</div>

<div class="card-body">
<table id="example1" class="table   table-bordered  table-hover table-striped">
<thead>
<tr>


<th>Subject Name</th>
<th>Description</th>
<th>Grade Level</th>
<th>Time</th>

<th>Section</th>
<th>Teacher</th>
<th>Total Students</th>
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

                $sql = "SELECT * FROM account where type='Teacher'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $teacher_list .= '  <option value="'.$row['firstname'].' '.$row['lastname'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
  }
} else {
 
}

      ?>



<?php
 
 $id = $_SESSION['id'];

$sql = "SELECT * FROM subject    order by id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
    $grade_level = $row['grade_level'];
    $section = $row['section'];
  
     $sql2 = "SELECT  id from student where grade_level ='$grade_level' and section='$section' ";
    if ($result2 = mysqli_query($conn, $sql2)) {
    $student = mysqli_num_rows( $result2 );
} 




    echo '

<tr>
 
<td class="text-bold text-orange"> '.$row['subject'].' </td>
<td >  '.$row['description'].'</td>
<td >Grade '.$row['grade_level'].'</td>
<td > '.$row['time'].'</td>
<td > '.$row['section'].'</td>
<td > '.$row['teacher'].'</td>
<td > '.$student.'</td>
 

 
 
  
 
<td> <h4>   


  <a href="#"  class="btn mr-2 btn-primary" data-toggle="modal" data-target="#edit'.$row['id'].'">     <i class="fas fa-edit "></i>   </a>


    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#del'.$row['id'].'">   <i class="fas fa-trash "></i> </a>


     </h4>
    </td>

</tr>

 
    ';


    // delete modal
    echo '<!-- Modal -->
<div class="modal fade" id="del'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title text-danger text-bold" id="exampleModalLabel">         <i class="fa-solid fa-trash"></i>  Delete Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <form method="POST" action="subject.php" enctype="multipart/form-data">

                  <div class="form-group ">
                    <label for="text">Subject<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"  value="'.$row['subject'].'" required  >
                  </div>


                  <div class="form-group ">
                    <label for="text">Grade Level<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"  value="Grade '.$row['grade_level'].'" required  >
                  </div>



   
                  <div class="form-group ">
                    <label for="text">Time<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"   value="'.$row['time'].'" required >
                  </div>

                  <div class="form-group ">
                    <label for="text">Teacher<text class="text-danger">*</text></label>
                    <input readonly type="text" class="form-control"   value="'.$row['teacher'].'"  >
                  </div>

 

                <div class="form-group ">
                  <label >Section <text class="text-danger">*</text></label>
                  <input readonly type="text" class="form-control"   value="'.$row['section'].'" required  >
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
        <h3 class="modal-title text-bold" id="exampleModalLabel"><i class="fa-solid fa-edit"></i> Update Subject</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="subject.php" enctype="multipart/form-data">
      <div class="row">



        
                  <div class="form-group col-6">
                    <label for="text">Subject Name<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" value="'.$row['subject'].'" name="subject" required placeholder="Enter Subject Name">
                  </div>


                  <div class="form-group col-6">
                  <label >Grade Level</label>
                  <select name="grade_level" required class="form-control">
                  <option selected  value="'.$row['grade_level'].'"> -- Grade '.$row['grade_level'].' -- </option>
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                    <option value="10">Grade 10</option>
                  

                     
                  </select>
                </div>



                  <div class="form-group col-6">
                    <label for="text">Time Start<text class="text-danger">*</text></label>
                    <input type="time" class="form-control" value="'.$row['start'].'"  required name="start" >
                  </div>


                  <div class="form-group col-6">
                    <label for="text">Time End<text class="text-danger">*</text></label>
                    <input type="time" class="form-control" value="'.$row['end'].'" required name="end" >
                  </div>



                   <div class="form-group col-6">
                  <label >Section </label>
                  <select name="section" required class="form-control">
                  '.$section_list.'
                  </select>
                </div>

                  <div class="form-group col-6">
                  <label >Teacher </label>
                  <select name="teacher" required class="form-control">
                  '.$teacher_list.'
                  </select>
                </div>


                       <div class="form-group col-12">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description"  placeholder="Enter Description ...">'.$row['description'].'</textarea>
                      </div>

               
                    <input type="hidden" class="form-control" value="'.$row['id'].'" name="update_id" required >
          


      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submit'.$row['id'].'" name="update_subject" onclick="submit'.$row['id'].'()" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save Update</button>
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
$sql = "DELETE FROM subject WHERE id='$id'";

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
  echo '  <meta http-equiv="refresh" content="1.5; URL=subject.php" />';
 
} else {
 
}

 }
?>


<!-- add menu Modal -->
<form method="POST" action="subject.php" enctype="multipart/form-data">
<div class="modal fade" id="addmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-success text-bold" id="exampleModalLabel"><i class="fa-solid fa-book"></i> Add Subjects</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">


                  

        
                  <div class="form-group col-6">
                    <label for="text">Subject Name<text class="text-danger">*</text></label>
                    <input type="text" class="form-control" name="subject" required placeholder="Enter Subject Name">
                  </div>


                   <div class="form-group col-6">
                  <label >Grade Level</label>
                  <select name="grade_level" required class="form-control">
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                    <option value="10">Grade 10</option>
                  

                     
                  </select>
                </div>



                  <div class="form-group col-6">
                    <label for="text">Time Start<text class="text-danger">*</text></label>
                    <input type="time" class="form-control" required name="start" >
                  </div>


                  <div class="form-group col-6">
                    <label for="text">Time End<text class="text-danger">*</text></label>
                    <input type="time" class="form-control" required name="end" >
                  </div>


 

                <div class="form-group col-6">
                  <label >Section <text class="text-danger">*</text></label>
                   <select class="form-control" required name="section">
                                    <?php 

                $sql = "SELECT * FROM section order by section";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '  <option value="'.$row['section'].'">'.$row['section'].'</option>';
  }
} else {
 
}

      ?>
                  
                  </select>
                </div>


                 

                <div class="form-group col-6">
                  <label >Teacher <text class="text-danger">*</text></label>
                   <select class="form-control" required name="teacher">
                                    <?php 

                $sql = "SELECT * FROM account where type='Teacher'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '  <option value="'.$row['firstname'].' '.$row['lastname'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
  }
} else {
 
}

      ?>
                  
                  </select>
                </div>


                 <div class="form-group col-12">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description ..."></textarea>
                      </div>

 
 

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="id1" name="add_subject" onclick="submit()" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Save New Subject</button>
      </div>
    </div>
  </div>
</div>
  </form>








<!-- add menu Modal -->
<form method="POST" action="subject.php" enctype="multipart/form-data">
<div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog   modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-success text-bold" id="exampleModalLabel"><i class="fa-solid fa-cloud-arrow-up"></i> Import Subjects</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">


                  

        
                  <div class="form-group col-12">
                    <label for="text">Import Subjects (.csv)<text class="text-danger">*</text></label>
                    <input type="file" class="form-control" name="subject" required placeholder="Enter Subject Name">
                  </div>


             
 
 


   

 
 

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="id1" name="add_subject" onclick="submit()" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Import Subject</button>
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
if(isset($_POST['add_subject']))
  {

    $subject = $_POST['subject'];
    $grade_level = $_POST['grade_level'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $section = $_POST['section'];
    $teacher = $_POST['teacher'];
    
  
 
 
    $sql = "INSERT INTO subject (subject, grade_level, time, section, teacher, month, day, year)
VALUES ('$subject', '$grade_level', '$start $end', '$section', '$teacher', '$month', '$day', '$year')";

if ($conn->query($sql) === TRUE) {
   

  echo '<script type="text/javascript">
  
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Added Subject",
  showConfirmButton: false,
  timer: 1500
});


</script> ';

 echo '  <meta http-equiv="refresh" content="1.5; URL=subject.php" />';


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





} ?>



  <?php
if(isset($_POST['update_subject']))
  {


    $subject = $_POST['subject'];
    $grade_level = $_POST['grade_level'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $section = $_POST['section'];
    $teacher = $_POST['teacher'];
    $description = $_POST['description'];
    
    $update_id = $_POST['update_id'];
 

    $sql = "UPDATE subject SET subject='$subject', grade_level='$grade_level', time='$start $end', section='$section', teacher='$teacher', description='$description' WHERE id='$update_id'";

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

 echo '  <meta http-equiv="refresh" content="1.5; URL=subject.php" />';


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
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false,
      "buttons": [  "excel", "print", "pdf"]
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
