<?php

session_start();
  define( 'DOIFD_SERVICE', '');

  define("Server","localhost");
  define("User","u356281675_ashintaru");
  define("Password","Lh8$5I|cMgtf");
  define("Database","u356281675_ashintaru");
  // define("Server","localhost");
  // define("User","root");
  // define("Password","");
  // define("Database","yumyum");
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

 


// $servername = "sql200.infinityfree.com";
// $username = "if0_37396851";
// $password = "38pvhnu5EyQbko";
// $dbname = "if0_37396851_mnhs";

$servername = "localhost";
$username = "u356281675_ashintaru";
$password = "Lh8$5I|cMgtf";
$dbname = "u356281675_ashintaru";


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "yumyum";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





?>