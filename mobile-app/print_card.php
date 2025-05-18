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

$id = $_SESSION['id'];
 
}
else
{

 echo '
     <script>
            window.location="login.php"
            </script>';
}   
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full-Screen Iframe</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    .iframe-container {
      width: 100%;
      height: 100%;
      overflow: hidden; /* Prevent scrollbars if content overflows */
    }
    iframe {
      width: 100%;
      height: 100%;
      border: none; /* Remove iframe border */
    }
  </style>
</head>
<body>
  <div class="iframe-container">
   <iframe src="first.php?section=<?php echo $_GET['section']; ?>&grade_level=<?php echo $_GET['grade_level']; ?>&sid=<?php echo $_GET['sid']; ?>"  > </iframe>
  </div>
  <script>
  window.addEventListener("load", function() {
    setTimeout(function() {
      window.print();
    }, 500); // Delay for half a second to ensure the page is fully loaded
  });
</script>

</body>
</html>
 