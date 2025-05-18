
<!DOCTYPE html>
<html>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<form enctype="multipart/form-data" method="post" role="form">

    <div class="form-group">
        <label for="exampleInputFile">Import Student Records</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $url = 'sql200.infinityfree.com';
    $username = 'if0_37396851';
    $password = '38pvhnu5EyQbko';
    $database = 'if0_37396851_mnhs';

    // Establish connection
    $conn = mysqli_connect($url, $username, $password, $database);
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }

    // Check if a file was uploaded
    if (isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name']) {
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;

        // Loop through each line in the CSV file
        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
            $firstname = $filesop[0];
            $lastname = $filesop[1];
            $contact = $filesop[2];
            $email = $filesop[3];
            $grade_level = $filesop[4];
            $section = $filesop[5];
            $sy = $filesop[6];
            
            // Prepare and execute the SQL statement
        $sql = "INSERT INTO student (firstname, lastname, contact,email, grade_level, section,sy) 
        VALUES (?, ?, ?, ?, ?,?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sssssss', $firstname, $lastname, $contact, $email, $grade_level, $section, $sy);

            if (mysqli_stmt_execute($stmt)) {
                $c++;
            } else {
                echo "Error inserting row: " . mysqli_error($conn);
            }
        }

        fclose($handle); // Close the file after reading

        // Check if any rows were inserted
        if ($c > 0) {
           
             echo '<script> 
 
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Imported",
  showConfirmButton: false,
  timer: 1500
})
 
 

  </script>';
  echo '  <meta http-equiv="refresh" content="1.5; URL=student.php" />';

        } else {
            echo "Sorry! Unable to import data.";
        }
    } else {
        echo "No file uploaded. Please upload a CSV file.";
    }

    mysqli_close($conn); // Close the connection
}
?>