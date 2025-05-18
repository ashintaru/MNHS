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
    <title>Report on Learning Progress and Achievement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        .section-title {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }

        .remarks, .grading-scale, .non-numerical-rating, .core-values {
            width: 100%;
            margin-top: 20px;
        }

        .core-values-table {
            width: 100%;
        }

        .behavior-statements {
            text-align: left;
        }

        .core-values-table th, .core-values-table td {
            font-size: 10px;
            padding: 4px;
        }

        .descriptor-table td {
            text-align: left;
        }

        /* Ensure Descriptors and Marking start on a new page */
        .page-break {
            page-break-before: always;
        }

        .attendance-section, .progress-report-section {
            width: 100%;
            margin-top: 20px;
        }

        .attendance-table th, .attendance-table td {
            padding: 8px;
        }

        .signature-section td {
            text-align: left;
            border: none;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="section-title">REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</div>
    <table>
        <thead>
            <tr>
                <th rowspan="2">Learning Area</th>
                <th colspan="4">Quarter</th>
                <th rowspan="2">Final Grade</th>
                <th rowspan="2">Remarks</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
        </thead>
        <tbody>
<?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
$i = 0;
$sum_final = 0;
$sql = "SELECT * FROM subject where grade_level='$grade_level' and section='$section'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    
    $subject = $row['subject'];
    $first = 0;
    $second = 0;
    $third = 0;
    $forth = 0;
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {
 
}
    //2nd
    $sql2 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='Second' and sid='$sid'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $second = $row2['grades'];
    
  }
} else {
 
}

    //3rd
    $sql3 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='Third' and sid='$sid'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
    $third = $row3['grades'];
    
  }
} else {
 
}


    //4th
    $sql4 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='Forth' and sid='$sid'";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row4 = $result4->fetch_assoc()) {
    $forth = $row4['grades'];
    
  }
} else {
 
}


$final_grade = ($first + $second + $third + $fourth) / 4;
$sum_final = $sum_final + $final_grade;

if($final_grade < 75){
    $remarks = 'Failed';
}


if($final_grade >= 75){
    $remarks = 'Passed';
}

    echo ' 
    <tr><td>'.$row['subject'].'</td>
    <td>'.$first.'%</td>
    <td>'.$second.'%</td>
    <td>'.$third.'%</td>
    <td>'.$forth.'%</td>
    <td>'.$final_grade.'%</td>
    <td>'.$remarks.'</td></tr>';

    $i = $i + 1;

  }
} else {
  
}

$ga = $sum_final / $i;


if($ga < 75){
    $fremarks = 'Failed';
}


if($ga >= 75){
    $fremarks = 'Passed';
}



 ?>
           
           
            
        
            <tr><td colspan="5">General Average</td>
                <td><?php echo number_format($ga, 2); ?>%</td>
                <td><?php echo $fremarks; ?></td></tr>
        </tbody>
    </table>

    <div class="section-title">REPORT ON LEARNER'S OBSERVED VALUE</div>
    <div class="core-values">
        <table class="core-values-table">
            <thead>
                <tr>
                    <th rowspan="2">Core Values</th>
                    <th rowspan="2" class="behavior-statements">Behavior Statements</th>
                    <th colspan="4">Quarter</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. Maka-Diyos</td>
                    <td class="behavior-statements">Expresses one’s spiritual beliefs while respecting the spiritual beliefs of others</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="behavior-statements">Shows adherence to ethical principles by upholding truth</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>2. Makatao</td>
                    <td class="behavior-statements">Is sensitive to individual, social, and cultural differences</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="behavior-statements">Demonstrates contributions toward solidarity</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>3. Makakalikasan</td>
                    <td class="behavior-statements">Cares for the environment and utilizes resources wisely, judiciously, and economically</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>4. Makabansa</td>
                    <td class="behavior-statements">Demonstrates pride in being a Filipino; exercises the rights and responsibilities of a Filipino citizen</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="behavior-statements">Demonstrates appropriate behavior in carrying out activities in the school, community, and country</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Page break to move Descriptors and Marking to a second page -->
    <div class="page-break"></div>

    <div class="section-title">Descriptors</div>
    <div class="grading-scale">
        <table class="descriptor-table">
            <thead>
                <tr><th>Descriptors</th><th>Grading Scale</th><th>Remarks</th></tr>
            </thead>
            <tbody>
                <tr><td>Outstanding</td><td>90-100</td><td>Passed</td></tr>
                <tr><td>Very Satisfactory</td><td>85-89</td><td>Passed</td></tr>
                <tr><td>Satisfactory</td><td>80-84</td><td>Passed</td></tr>
                <tr><td>Fairly Satisfactory</td><td>75-79</td><td>Passed</td></tr>
                <tr><td>Did Not Meet Expectations</td><td>Below 75</td><td>Failed</td></tr>
            </tbody>
        </table>
    </div>

    <div class="section-title">Marking</div>
    <div class="non-numerical-rating">
        <table class="descriptor-table">
            <thead>
                <tr><th>Marking</th><th>Non-numerical Rating</th></tr>
            </thead>
            <tbody>
                <tr><td>AO</td><td>Always Observed</td></tr>
                <tr><td>SO</td><td>Sometimes Observed</td></tr>
                <tr><td>RO</td><td>Rarely Observed</td></tr>
                <tr><td>NO</td><td>Not Observed</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Page break to move attendance and report card to 3rd and 4th page -->
    <div class="page-break"></div>

    <div class="attendance-section">
        <table class="attendance-table">
            <thead>
                <tr><th colspan="12">Attendance Record</th></tr>
                <tr>
                    <th><?php echo $month; ?></th><th>Oct</th><th>Nov</th><th>Dec</th><th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>May</th><th>June</th><th>Jul</th><th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> &nbsp;</td></tr>
                <tr><td>No. of School Days</td></tr>
                <tr><td></td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td>&nbsp;</td></tr>
                <tr><td>No. of Days Present</td></tr>
                <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td>&nbsp;</td></tr>
                 <tr><td> Absent</td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td>&nbsp;</td></tr>
            </tbody>
        </table>

        <div class="signature-section">
            <table>
                <tr><td>PARENT / GUARDIAN'S SIGNATURE</td></tr>
                <tr><td>1st Quarter ____________________________</td></tr>
                <tr><td>2nd Quarter ____________________________</td></tr>
                <tr><td>3rd Quarter ____________________________</td></tr>
                <tr><td>4th Quarter ____________________________</td></tr>
            </table>
        </div>
    </div>

    <div class="page-break"></div>
<?php $lastYear = date('Y', strtotime('-1 year')); 

$sql = "SELECT * FROM student where id='$sid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $contact = $row['contact'];
 
  }
} else {
   
}
?>


    <div class="progress-report-section">
        <h3 class="section-title">PROGRESS REPORT CARD</h3>
        <table>
            <tbody>
                <tr><td>Region:</td><td>IV-A CALABARZON</td></tr>
                <tr><td>Division:</td><td>GENERAL TRIAS CITY</td></tr>
                <tr><td>District:</td><td>CLUSTER I</td></tr>
                <tr><td>School:</td><td>GEN. GREGORIO S. ALOÑA SR. MEMORIAL ELEMENTARY</td></tr>
                <tr><td>School Year:</td><td><?php echo $lastYear ?>-<?php echo $year ?></td></tr>
            </tbody>
        </table>

        <h3>Student Information</h3>
        <table>
            <tr><td>Name:</td><td><?php echo $firstname; ?> <?php echo $lastname; ?></td></tr>
            <tr><td>Age:</td><td> </td></tr>
            <tr><td>Grade:</td><td><?php echo $grade_level; ?></td></tr>
            <tr><td>Section:</td><td><?php echo $section; ?></td></tr>
            <tr><td>LRN:</td><td>234567891011</td></tr>
        </table>

        <p>Dear Parent,</p>
        <p>This report card shows the ability and progress your child has made in the different learning areas as well as his/her progress in core values.</p>
        <p>The school welcomes you should you desire to know more about your child's progress.</p>

        <table>
            <tr><td>Principal:</td><td>ANNE B. CURTIS</td></tr>
            <tr><td>Teacher:</td><td>BARBIE S. IMPERIAL</td></tr>
        </table>

        <h3>Certificate of Transfer</h3>
        <table>
            <tr><td>Admitted to Grade:</td><td>FOUR</td></tr>
            <tr><td>Section:</td><td>MASUNURIN</td></tr>
        </table>

        <table>
            <tr><td>Principal:</td><td>ANNE B. CURTIS</td></tr>
            <tr><td>Teacher:</td><td>BARBIE S. IMPERIAL</td></tr>
        </table>

        <h3>Cancellation of Eligibility to Transfer</h3>
        <table>
            <tr><td>Admitted in:</td><td>________________</td></tr>
            <tr><td>Date:</td><td>________________</td></tr>
            <tr><td>Principal:</td><td>________________</td></tr>
        </table>
    </div>
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
