<?php
include '../database.php';

$id = $_GET['id'];
$oid = $_GET['oid'];
$price = $_GET['price'];
$type = $_GET['type'];

$tenant_id = $_SESSION['id'];
$tenant  = ''.$_SESSION['firstname'].' '.$_SESSION['lastname'].'';

  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");


 



 $sql = "INSERT INTO req (tid, name, uid, type, price, month, day, year, time)
VALUES ('$tenant_id', '$tenant', '$id', '$type', '$price', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 
 
?>