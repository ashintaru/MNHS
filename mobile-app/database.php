<?php

session_start();
 define( 'DOIFD_SERVICE', '');

define("Server","sql200.infinityfree.com");
  define("User","if0_37396851");
  define("Password","38pvhnu5EyQbko");
  define("Database","if0_37396851_mnhs");
  function iud($query)
  {
    $cid=mysqli_connect(Server,User,Password,Database) or die("connection error");
  $result=mysqli_query($cid,$query);
  $n=mysqli_affected_rows($cid);
  mysqli_close($cid);
  return $n;
  }
  
function select($query)
{
  $cid=mysqli_connect(Server,User,Password,Database) or die("connection error");
  $result=mysqli_query($cid,$query);
  mysqli_close($cid);
  return $result;
}

 


$servername = "sql200.infinityfree.com";
$username = "if0_37396851";
$password = "38pvhnu5EyQbko";
$dbname = "if0_37396851_mnhs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





?>