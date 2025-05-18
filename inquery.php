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

  
   $title = 'METRO TRUCK';
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
    <title> Inquery | <?php echo $title; ?></title>
<link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="fontawesome/css/brands.css" rel="stylesheet" />
  <link href="fontawesome/css/solid.css" rel="stylesheet" />
  
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
       .modal-header {
    border-bottom: 0 none;
}

.modal-footer {
    border-top: 0 none;
}
     </style>


  <!-- Main Sidebar Container -->
   <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-orange elevation-3">
 
    <a href="index.php" class="brand-link">
       <img src="logo/<?php echo $logo; ?>" alt="Logo" class="brand-image rounded    ">
      <span style="font-size:20px;" class="brand-text text-center text-bold "> <?php echo $title; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav  nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

 

          <li class="nav-item  ">
            <a href="index.php" class="nav-link text-bold ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>

 
          <li class="nav-item">
            <a href="inquery.php" class="nav-link text-white  active">
              <i class="nav-icon fa-solid    fa-circle-question"></i>
              <p>
                  Truck Inquery
                 
              </p>
            </a>
          </li>

  

          <li class="nav-item  ">
            <a href="#" class="nav-link   ">
             <i class="nav-icon fa-solid fa-chart-column"></i>
              <p>  
                   Orders
                 
                
              </p>
                 <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview  ">
              <li class="nav-item active">
                <a href="approval.php" class="nav-link ">
                 <i class="fa-solid fa-solid fa-clipboard-list nav-icon"></i>
                  <p>Order Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="trucking.php" class="nav-link  ">
                 <i class="fa-solid fa-solid fa-clipboard-list nav-icon"></i>
                  <p>Order Trucking</p>
                </a>
              </li>
             
            
            </ul>
          </li>


 

 

          <li class="nav-item  ">
            <a href="transaction.php" class="nav-link   ">
             <i class="nav-icon fa-solid  fa-table-list"></i>
              <p>  
                   Transaction
                 
                
              </p>
             
            </a>
           
          </li>



          <li class="nav-item  ">
            <a href="payment.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-money-bill-wave"></i>
              <p>  
                   Payment
                 
                
              </p>
             
            </a>
           
          </li>


          <li class="nav-item  ">
            <a href="feedback.php" class="nav-link   ">
             <i class="nav-icon fa-solid fa-comment"></i>
              <p>  
                   Feedback
                 
                
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
            <h1 class="m-0">Inquery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inquery</li>
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
               Inquery List  
              </h3> 
<button type="button"  data-toggle="modal" data-target="#addmenu" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i> Add Inquery</button>

</div>

<div class="card-body">
<table id="example1" class="table   table-bordered  table-hover table-striped">
<thead>
<tr>

 
<th>Inquery #</th>
<th>Truck Type</th>
<th>Truck</th>
<th>Purpose</th>
<th>Status</th>
<th>Date</th>
<th>Action</th>

</tr>
</thead>
<tbody>


<?php
 
 $id = $_SESSION['id'];

$sql = "SELECT * FROM inquery where cid = '$id'  order by id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

    $status=$row['status'];


      if($status != 'Pending'){
      $status_text = '<span class="badge bg-info">'.$status.'</span>';
    }

    
    if($status == 'Approved'){
      $status_text = '<span class="badge bg-success">Approved</span>';
    }

    if($status == 'Pending'){
      $status_text = '<span class="badge bg-danger">Pending</span>';
    }


 

    echo '

<tr>
 
<td > INQ'.$row['id'].' </td>
<td > '.$row['type'].'</td>
<td > '.$row['truck'].'</td>
<td > '.$row['purpose'].'</td>
<td style="font-size:20px;"  > '.$status_text.'  </td>
 <td > '.$row['month'].' '.$row['day'].', '.$row['year'].' | '.$row['time'].'</td>

 
 
  
 
<td> <h4>   


  <a href="#"  class="btn btn-primary" data-toggle="modal" data-target="#edit'.$row['id'].'">     <i class="fas fa-edit "></i>   </a>


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
         
      </div>
      <div class="modal-body">
    <center> <h2><strong> Delete INQ'.$row['id'].' ??? <strong> </h2> </center>
         <form style="display:none;" method="post" action="inquery.php">
          
                    
                       
                  
                    
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
        <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fa-solid fa-edit"></i> Update Inquery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="item.php" enctype="multipart/form-data">
      <div class="row">


                  
   <div class="form-group col-6">
                    <label for="text">Purpose Of Truck <text class="text-danger">*</text></label>
                    <input type="text" class="form-control" name="purpose" value="'.$row['purpose'].'" required placeholder="Enter Purpose">
                  </div>

                  <div class="form-group col-6">
                    <label for="text">Delivery Date <text class="text-danger">*</text></label>
                    <input type="date" class="form-control" name="delivery_date" value="'.$row['dd'].'" placeholder="Enter date">
                  </div>

 
                  <div class="form-group col-6">
                  <label >Type Of Truck <text class="text-danger">*</text></label>
                  <select name="type" class="form-control">
                    <option selected value="'.$row['type'].'">'.$row['type'].' [Selected]</option>
                    <option value="Company">Company</option>
                    <option value="Goverment">Goverment</option>
                   
                  </select>
                </div>


                <div class="form-group col-6">
                  <label >Select Truck <text class="text-danger">*</text></label>
                  <select name="truck" class="form-control">

                  <option selected value="'.$row['truck'].'">'.$row['truck'].' [Selected]</option>
                    <option value="Aluminum Truck">Aluminum Truck</option>
                    <option value="Goverment">Goverment</option>
                     <option value="Composite Truck">Composite Truck</option>
                      <option value="Refrigerated Truck">Refrigerated Truck</option>
                       <option value="Closed Truck">Closed Truck</option>
                        <option value="Wing Truck">Wing Truck</option>
                         <option value="Side Curtain Truck">Side Curtain Truck</option>
                          <option value="FB Van">FB Van</option>
                           <option value="Utility Van">Utility Van</option>
                            <option value="Shuttle Van">Shuttle Van</option>
                             <option value="Passenger Van">Passenger Van</option>
                              <option value="Lineman Utility Van">Lineman Utility Van</option>
                               <option value="Ambulance Bodies">Ambulance Bodies</option>
                                <option value="Prisoners Van">Prisoners Van</option>
                                 <option value="Patrol/Assult Bodies">Patrol/Assult Bodies</option>

                   
                  </select>
                </div>




 

                <div class="form-group col-12">
                  <label >Design Preferences (color, branding, specific features) <text class="text-danger">*</text></label>
                  <input type="text" class="form-control" name="preferences" value="'.$row['preferences'].'" placeholder="Enter Design Preferences">
                </div>

              <div class="form-group col-6">
                  <label >Select Payment Method <text class="text-danger">*</text></label>
                  <select name="pm" class="form-control">
                    <option value="Bank">Bank</option>
                    <option value="Cash">Cash</option>
                     <option value="Cheque">Cheque</option>
                      

                   
                  </select>
                </div>

                  <div class="form-group col-6">
                  <label >Budget Range<text class="text-danger">*</text></label>
                  <input type="number" class="form-control" name="budget_range" value="'.$row['br'].'" required placeholder="Enter Amount">
                </div>

                  <div class="form-group col-6">
                  <label >Proof Of Funds<text class="text-danger">*</text></label> <br>
      <a   href="image/'.$row['proof'].'" download="image/'.$row['proof'].'">  Click here to download  </a>
                    
                </div>


               
                    <input type="hidden" class="form-control" value="'.$row['id'].'" name="update_id" required >
          


      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="id1a'.$row['id'].'" name="update_item" onclick="submit'.$row['id'].'()" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save Inquery</button>
         </form>
      </div>
    </div>
  </div>
</div>
 


 
';


  



  }
} else {
  echo "No   Records";
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
$sql = "DELETE FROM inquery WHERE id='$id'";

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
  echo '  <meta http-equiv="refresh" content="1.5; URL=inquery.php" />';
 
} else {
 
}

 }
?>


<!-- add menu Modal -->
<form method="POST" action="inquery.php" enctype="multipart/form-data">
<div class="modal fade" id="addmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fa-solid fa-plus"></i> Add Inquery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">


                  

        
                  <div class="form-group col-6">
                    <label for="text">Purpose Of Truck <text class="text-danger">*</text></label>
                    <input type="text" class="form-control" name="purpose" required placeholder="Enter Purpose">
                  </div>

                  <div class="form-group col-6">
                    <label for="text">Delivery Date <text class="text-danger">*</text></label>
                    <input type="date" class="form-control" name="delivery_date" placeholder="Enter date">
                  </div>



                  <div class="form-group col-6">
                  <label >Type Of Truck <text class="text-danger">*</text></label>
                  <select name="type" class="form-control">
                    <option value="Company">Company</option>
                    <option value="Goverment">Goverment</option>
                   
                  </select>
                </div>



                <div class="form-group col-6">
                  <label >Select Truck <text class="text-danger">*</text></label>
                  <select name="truck" class="form-control">
                    <option value="Aluminum Truck">Aluminum Truck</option>
                    <option value="Goverment">Goverment</option>
                     <option value="Composite Truck">Composite Truck</option>
                      <option value="Refrigerated Truck">Refrigerated Truck</option>
                       <option value="Closed Truck">Closed Truck</option>
                        <option value="Wing Truck">Wing Truck</option>
                         <option value="Side Curtain Truck">Side Curtain Truck</option>
                          <option value="FB Van">FB Van</option>
                           <option value="Utility Van">Utility Van</option>
                            <option value="Shuttle Van">Shuttle Van</option>
                             <option value="Passenger Van">Passenger Van</option>
                              <option value="Lineman Utility Van">Lineman Utility Van</option>
                               <option value="Ambulance Bodies">Ambulance Bodies</option>
                                <option value="Prisoners Van">Prisoners Van</option>
                                 <option value="Patrol/Assult Bodies">Patrol/Assult Bodies</option>

                   
                  </select>
                </div>


                <div class="form-group col-6">
                  <label >Quantity<text class="text-danger">*</text></label>
                  <input type="number" class="form-control" name="qty" required placeholder="Enter Quantity">
                </div>


 

                <div class="form-group col-6">
                  <label >Design Preferences (color, branding, specific features) <text class="text-danger">*</text></label>
                  <input type="text" class="form-control" name="preferences" placeholder="Enter Design Preferences">
                </div>

              <div class="form-group col-6">
                  <label >Select Payment Method <text class="text-danger">*</text></label>
                  <select name="pm" class="form-control">
                    <option value="Bank">Bank</option>
                    <option value="Cash">Cash</option>
                     <option value="Cheque">Cheque</option>
                      

                   
                  </select>
                </div>

                  <div class="form-group col-6">
                  <label >Budget Range<text class="text-danger">*</text></label>
                  <input type="number" class="form-control" name="budget_range" required placeholder="Enter Amount">
                </div>

                  <div class="form-group col-6">
                  <label >Proof Of Funds<text class="text-danger">*</text></label>
                  <input type="file" class="form-control" name="file" required  >
                </div>




      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="id1" name="submit_inquery" onclick="submit()" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Submit  Inquery</button>
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
if(isset($_POST['submit_inquery']))
  {

    $purpose = $_POST['purpose'];
    $pm = $_POST['pm'];
    $dd = $_POST['delivery_date'];
    $type = $_POST['type'];
    $truck = $_POST['truck'];
    $br = $_POST['budget_range'];
    $preferences = $_POST['preferences'];
 

    $cid = $_SESSION['id'];
    $customer = ''.$_SESSION['firstname'].' '.$_SESSION['lastname'].'';
    $location = "image/";
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size

    $sql = "INSERT INTO inquery (cid, customer, purpose, dd, type, truck, preferences, br, pm, proof, month, day, year, time)
VALUES ('$cid', '$customer', '$purpose', '$dd', '$type', '$truck', '$preferences', '$br', '$pm', '$file_name', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
  move_uploaded_file($file_temp, $location . $file_name); 

  echo '<script type="text/javascript">
  
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Submit Inquery",
  showConfirmButton: false,
  timer: 1500
});


</script> ';

 echo '  <meta http-equiv="refresh" content="1.5; URL=inquery.php" />';


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





} ?>



  <?php
if(isset($_POST['update_item']))
  {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $pm = $_POST['pm'];
    $update_id = $_POST['update_id'];


    $location = "image/";
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size

    $sql = "UPDATE item SET name='$name', pm='$pm', category='$category', price='$price', status='$status', image='$file_name' WHERE id='$update_id'";

if ($conn->query($sql) === TRUE) {
  
    move_uploaded_file($file_temp, $location . $file_name); 

  echo '<script type="text/javascript">
  
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Updated",
  showConfirmButton: false,
  timer: 1500
});


</script> ';

 echo '  <meta http-equiv="refresh" content="2; URL=item.php" />';


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
