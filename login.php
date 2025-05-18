<?php  
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Login | MNHS Admin Portal</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
     <img src="logo/logo.png" class="rounded" width="50%"><br>
     <br>
      <a href="index.php" class="h2 text-orange mt-3"><b>MNHS ADMIN PORTAL</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to continue.</p>
<?php
if(isset($_REQUEST['login']))
  {
    
  $username=trim($_REQUEST['username']);
  $password=trim($_REQUEST['password']);
 

  $query="select * from account where username = '$username' and password='$password' and type='Admin'";
  
  $login_data=select($query);
  $n=mysqli_num_rows($login_data);
  if($n==1)
  {




    while($data=mysqli_fetch_array($login_data))
    {
    extract($data);
    
    }

    $_SESSION['type']=$type;
    $_SESSION['id']=$id;
    $_SESSION['firstname']=$firstname;
    $_SESSION['lastname']=$lastname;
    $_SESSION['email']=$email;
    $_SESSION['contact']=$contact;
    $_SESSION['login']="yes";

       echo ' <script>
            window.location="index.php"
            </script>';
  
  }
  else
  {
          echo'


<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i>Invalid Credentials.</h5>
Invalid  Password!
</div>


          ';
  }
  }
       
        ?>

      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" required name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
             <i class="fa-solid fa-circle-user"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" required name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-success">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"   name="login" class="btn btn-success   text-bold btn-block"><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

 
      <!-- /.social-auth-links -->

      <p class="mb-1">
        
      </p>
     <p class="mb-0">
        <!-- <a href="register.php" class="text-center">Register a new account</a> -->
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
