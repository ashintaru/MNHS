<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");


if ($_SESSION['login'] == "yes" && $_SESSION['type'] == "Teacher") {
    echo '
    <script>
        window.location="teacher_index.php"
    </script>';
} 
else if ($_SESSION['login'] == "yes" && $_SESSION['type'] == "Parent") {
    echo '
    <script>
        window.location="parent_index.php"
    </script>';
} 
else {
    echo '
    <script>
        window.location="login.php"
    </script>';
}
  
 
?>