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
 

$sid = $_GET['sid'];
$sql = "SELECT * FROM student where id='$sid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $grade_level = $row['grade_level'];
    $section = $row['section'];

  }
} else {
  
}



?>
<html>

<head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"Bookman Old Style";
	panose-1:2 5 6 4 5 5 5 2 2 4;}
@font-face
	{font-family:"Old English Text MT";
	panose-1:3 4 9 2 4 5 8 3 8 6;}
@font-face
	{font-family:"TroJan Pro";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0in;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
 /* Page Definitions */
 @page WordSection1
	{size:420.95pt 595.35pt;
	margin:.1in 8.65pt .1in 8.65pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>

</head>

<body lang=EN-PH style='word-wrap:break-word'>

<div class=WordSection1>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:1.25in'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;padding:0in 5.75pt 1.45pt 5.75pt;
  height:1.25in'>
  
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"Old English Text MT"'>Republic of the Philippines</span></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='position:absolute;z-index:-1896228864;left:0px;margin-left:437px;
  margin-top:4px;width:63px;height:65px'><img width=63 height=65
  src="first_files/image002.png"></span><span style='position:absolute;
  z-index:-1895824384;left:0px;margin-left:18px;margin-top:5px;width:71px;
  height:64px'><img width=71 height=64 src="first_files/image003.png"
  alt="A group of logos with text&#10;&#10;Description automatically generated"></span><span
  style='font-family:"Old English Text MT"'>Department of Education</span></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"TroJan Pro",serif'>Region IV - A CALABARZON</span></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"TroJan Pro",serif'>City Schools Division of Cabuyao </span> - <span
  style='font-family:"TroJan Pro",serif;color:black'>District III</span></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:12.0pt;font-family:"Times New Roman",serif'>MARINIG NATIONAL
  HIGH SCHOOL</span></b></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"TroJan Pro",serif'>Purok 3, Brgy.
  Marinig, City of Cabuyao, Laguna</span></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:5.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.85pt'>
  <td width="12%" valign=top style='width:12.8%;padding:0in 5.75pt 1.45pt 5.75pt;
  height:14.85pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Name:</span></p>
  </td>
  <td width="87%" colspan=4 valign=top style='width:87.2%;padding:0in 5.75pt 1.45pt 5.75pt;
  height:14.85pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $firstname; ?> <?php echo $lastname; ?></b></p>
  </td>
 </tr>
 <tr>
  <td width="12%" valign=top style='width:12.8%;padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Age:</span></p>
  </td>
  <td width="38%" colspan=2 valign=top style='width:38.58%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span> </b></p>
  </td>
  <td width="16%" valign=top style='width:16.82%;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Sex:</span></p>
  </td>
  <td width="31%" valign=top style='width:31.8%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span> </b></p>
  </td>
 </tr>
 <tr>
  <td width="12%" valign=top style='width:12.8%;padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Grade:</span></p>
  </td>
  <td width="38%" colspan=2 valign=top style='width:38.58%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span>Grade <?php echo $grade_level; ?></b></p>
  </td>
  <td width="16%" valign=top style='width:16.82%;padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Section:</span></p>
  </td>
  <td width="31%" valign=top style='width:31.8%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $section; ?></b></p>
  </td>
 </tr>
 <tr>
  <td width="20%" colspan=2 valign=top style='width:20.98%;padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>School
  Year:</span></p>
  </td>
  <td width="30%" valign=top style='width:30.4%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span>2024 - 2025</b></p>
  </td>
  <td width="16%" valign=top style='width:16.82%;padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>LRN:</span></p>
  </td>
  <td width="31%" valign=top style='width:31.8%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.75pt 1.45pt 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr height=0>
  <td width=91 style='border:none'></td>
  <td width=58 style='border:none'></td>
  <td width=215 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=225 style='border:none'></td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:9.0pt'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:44.5pt'>
  <td width="100%" colspan=2 valign=top style='width:100.0%;padding:0in 5.4pt 0in 5.4pt;
  height:44.5pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-family:
  "Bookman Old Style",serif'>Dear Parent:</span> </p>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:2.0pt;
  font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:3.0pt;
  font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-family:
  "Bookman Old Style",serif'> This report card shows the ability
  and progress of your child has made in the different learning areas as well
  as his/her core values.</span></p>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-family:
  "Times New Roman",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="50%" valign=top style='width:50.0%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><u><span style='font-size:10.0pt;font-family:"Bookman Old Style",serif'>SHYREENE
  T. LEGISMA</span></u></b></p>
  </td>
  <td width="50%" valign=top style='width:50.0%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><u><span style='font-size:10.0pt;font-family:"Bookman Old Style",serif'>NOEL
  E. GAGARING JR.</span></u></b></p>
  </td>
 </tr>
 <tr>
  <td width="50%" valign=top style='width:50.0%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"Bookman Old Style",serif'>Principal</span></p>
  </td>
  <td width="50%" valign=top style='width:50.0%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"Bookman Old Style",serif'>Adviser</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing>&nbsp;</p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:14.85pt'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;padding:0in 5.4pt 0in 5.4pt;
  height:14.85pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-family:"Bookman Old Style",serif'>Certificate of Transfer</span></b></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-family:"Bookman Old Style",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="30%" valign=top style='width:30.36%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Admitted
  to Grade:</span></p>
  </td>
  <td width="21%" colspan=2 valign=top style='width:21.04%;border:none;
  border-bottom:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Section:</span></p>
  </td>
  <td width="34%" valign=top style='width:34.56%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="46%" colspan=2 valign=top style='width:46.76%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Eligible
  for admission to Grade</span></p>
  </td>
  <td width="53%" colspan=3 valign=top style='width:53.24%;border:none;
  border-bottom:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="100%" colspan=5 valign=top style='width:100.0%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="51%" colspan=3 valign=top style='width:51.42%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><u><span
  style='font-size:10.0pt;font-family:"Bookman Old Style",serif'>SHYREENE T.
  LEGISMA</span></u></b></p>
  </td>
  <td width="48%" colspan=2 valign=top style='width:48.58%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><u><span
  style='font-size:10.0pt;font-family:"Bookman Old Style",serif'>NOEL E.
  GAGARING JR.</span></u></b></p>
  </td>
 </tr>
 <tr>
  <td width="51%" colspan=3 valign=top style='width:51.42%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"Bookman Old Style",serif'>Principal</span></p>
  </td>
  <td width="48%" colspan=2 valign=top style='width:48.58%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"Bookman Old Style",serif'>Adviser</span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=215 style='border:none'></td>
  <td width=116 style='border:none'></td>
  <td width=33 style='border:none'></td>
  <td width=99 style='border:none'></td>
  <td width=245 style='border:none'></td>
 </tr>
</table>

<p class=MsoNoSpacing>&nbsp;</p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr>
  <td width="100%" colspan=5 valign=top style='width:100.0%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-family:"Bookman Old Style",serif'>Cancellation of Eligibility to
  Transfer</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.04%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Admitted
  in:</span></p>
  </td>
  <td width="25%" valign=top style='width:25.72%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>Date:</span></p>
  </td>
  <td width="42%" colspan=2 valign=top style='width:42.72%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:3.05pt'>
  <td width="21%" valign=top style='width:21.04%;padding:0in 5.4pt 0in 5.4pt;
  height:3.05pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="25%" rowspan=2 valign=top style='width:25.72%;border:none;
  padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.4pt 0in 5.4pt;
  height:3.05pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="42%" colspan=2 valign=top style='width:42.72%;border:none;
  border-top:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:3.15pt'>
  <td width="21%" valign=top style='width:21.04%;padding:0in 5.4pt 0in 5.4pt;
  height:3.15pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="13%" colspan=2 valign=top style='width:13.66%;padding:0in 5.4pt 0in 5.4pt;
  height:3.15pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="39%" valign=top style='width:39.58%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:3.15pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.04%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="25%" valign=top style='width:25.72%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="13%" colspan=2 valign=top style='width:13.66%;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="39%" valign=top style='width:39.58%;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-family:"Bookman Old Style",serif'>Principal</span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=149 style='border:none'></td>
  <td width=182 style='border:none'></td>
  <td width=74 style='border:none'></td>
  <td width=22 style='border:none'></td>
  <td width=280 style='border:none'></td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:6.0pt'>&nbsp;</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:16.65pt'>
  <td width="100%" colspan=12 valign=top style='width:100.0%;border:none;
  border-bottom:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:16.65pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-family:"Bookman Old Style",serif'>REPORT ON ATTENDANCE</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="22%" valign=top style='width:22.8%;border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="5%" valign=top style='width:5.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Jul</span></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Aug</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Sep</span></p>
  </td>
  <td width="6%" valign=top style='width:6.84%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Oct</span></p>
  </td>
  <td width="7%" valign=top style='width:7.32%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Nov</span></p>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Dec</span></p>
  </td>
  <td width="6%" valign=top style='width:6.58%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Jan</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Feb</span></p>
  </td>
  <td width="7%" valign=top style='width:7.48%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Mar</span></p>
  </td>
  <td width="6%" valign=top style='width:6.92%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Apr</span></p>
  </td>
  <td width="7%" valign=top style='width:7.78%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Total</span></p>
  </td>
 </tr>
 <tr>
  <td width="22%" valign=top style='width:22.8%;border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>No.
  of school days</span></p>
  </td>
  <td width="5%" valign=top style='width:5.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.84%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.32%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.58%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.48%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.92%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.78%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="22%" valign=top style='width:22.8%;border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>No.
  of days present</span></p>
  </td>
  <td width="5%" valign=top style='width:5.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.84%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.32%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.58%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.48%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.92%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.78%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="22%" valign=top style='width:22.8%;border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>No.
  of days absent</span></p>
  </td>
  <td width="5%" valign=top style='width:5.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.84%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.32%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.58%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.98%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.48%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="6%" valign=top style='width:6.92%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="7%" valign=top style='width:7.78%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:8.0pt'>&nbsp;</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="99%"
 style='width:99.88%;border-collapse:collapse;border:none'>
 <tr style='height:18.9pt'>
  <td width="100%" colspan=4 valign=top style='width:100.0%;border:none;
  padding:0in 5.4pt 0in 5.4pt;height:18.9pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-family:"Bookman Old Style",serif'>PARENT/GUARDIANS SIGNATURE</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.84%;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>1<sup>st</sup>
  Quarter:</span></p>
  </td>
  <td width="30%" valign=top style='width:30.16%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="21%" valign=top style='width:21.34%;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>3<sup>rd</sup>
  Quarter:</span></p>
  </td>
  <td width="28%" valign=top style='width:28.68%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width="19%" valign=top style='width:19.84%;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>2<sup>nd</sup>
  Quarter:</span></p>
  </td>
  <td width="30%" valign=top style='width:30.16%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="21%" valign=top style='width:21.34%;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>4<sup>th</sup>
  Quarter:</span></p>
  </td>
  <td width="28%" valign=top style='width:28.68%;border:none;border-bottom:
  solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:1.0pt'>&nbsp;</span></p>

</div>

</body>

 <div class="page-break">
   




<html >

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">

 
<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:"Cambria Math";
  panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
  {font-family:Tahoma;
  panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
  {font-family:"Bookman Old Style";
  panose-1:2 5 6 4 5 5 5 2 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:0in;
  line-height:115%;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
  {margin:0in;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;}
.MsoChpDefault
  {font-family:"Calibri",sans-serif;}
.MsoPapDefault
  {margin-bottom:10.0pt;
  line-height:115%;}
 /* Page Definitions */
 @page WordSection1
  {size:420.95pt 595.35pt;
  margin:.1in 8.65pt .1in 8.65pt;}
div.WordSection1
  {page:WordSection1;}
 /* List Definitions */
 ol
  {margin-bottom:0in;}
ul
  {margin-bottom:0in;}
-->
</style>

</head>

<body class="page-break" lang=EN-PH style='word-wrap:break-word'>

<div class=WordSection1>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:13.5pt'>
  <td width="100%" colspan=7 valign=top style='width:100.0%;border:none;
  border-bottom:solid black 1.0pt;padding:0in 5.75pt 0in 5.75pt;height:13.5pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-family:"Bookman Old Style",serif'>REPORT ON LEARNING PROGRESS AND
  ACHIEVEMENT</span></b></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:2.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="35%" rowspan=2 valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>LEARNING AREAS</span></b></p>
  </td>
  <td width="34%" colspan=4 valign=top style='width:34.9%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>QUARTER</span></b></p>
  </td>
  <td width="11%" rowspan=2 valign=top style='width:11.84%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>FINAL GRADE</span></b></p>
  </td>
  <td width="17%" rowspan=2 valign=top style='width:17.94%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>REMARKS</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>1</span></b></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>2</span></b></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>3</span></b></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>4</span></b></p>
  </td>
 </tr>

 <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
 
    
    $subject = 'Filipino '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $remarks = '';
    $fg = '';
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if(($first != '' && $second !='' && $third!='' && $forth!='') && ($first !='0' && $second!='0' && $third!='0' && $forth!='0')){

 
  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>
 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>Filipino
  </span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p> 
  </td>
 </tr>


 <!-- ENGLISH -->
  <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
 
    
    $subject = 'English '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $remarks = '';
    $fg = '';
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if(($first != '' && $second !='' && $third!='' && $forth!='') && ($first !='0' && $second!='0' && $third!='0' && $forth!='0')){

 
  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>
 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>English
  </span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $average; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>


 <!-- MATHEMATICS -->
  <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'Mathematics '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $remarks = '';
    $average = '';
    $fg = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>

 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>Mathematics
  </span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $thirds; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>

 <!-- SCIENCE -->

   <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'Science '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>

 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>Science
  </span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>

 <!-- Aralin Panlipunan -->

    <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'Aralin Panlipunan '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}


if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>

 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>Araling
  Panlipunan</span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>
 <!-- Values Education -->

     <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'Values Education '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>

 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>Values
  Education </span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>
 <!-- Technology and Livelihood Education -->

 
      <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'Technology and Livelihood Education '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>
 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>Technology
  and Livelihood Education </span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>
 <!-- MAPEH -->

       <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'MAPEH '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>

 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>MAPEH
  </span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>

 <!-- Music & Arts -->

        <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'Music & Arts '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}
 ?>


 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing style='margin-left:.5in'><span style='font-size:9.0pt;
  font-family:"Bookman Old Style",serif'>Music &amp; Arts</span></p>
  <p class=MsoNoSpacing style='margin-left:.5in'><span style='font-size:9.0pt;
  font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>

 <!-- P.E. & Health -->
         <?php

$sid = $_GET['sid'];
$grade_level = $_GET['grade_level'];
$section = $_GET['section'];
 
    $subject = 'P.E. & Health '.$grade_level.'';
    $first = '';
    $second = '';
    $third = '';
    $forth = '';
    $fremarks = '';
    
    //1st
    $sql1 = "SELECT grades FROM grades where subject='$subject' and grade_level='$grade_level' and section='$section' and quarter='First' and sid='$sid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $first = $row1['grades'];
    
  }
} else {

   $first = '';
 
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

  $second = '';
 
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
    $third  = '';
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
 $forth =  '';
}

if($first != '' && $second !='' && $third!='' && $forth!='' && $first !='0' && $second!='0' && $third!='0' && $forth!='0'){

  $average = ($first + $second + $third + $forth) / 4;
  $fg = "$average %";

if($average < 75){
    $remarks = 'Failed';
}


if($average >= 75){
    $remarks = 'Passed';
}
}

 ?>

 <tr>
  <td width="35%" valign=top style='width:35.32%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>P.E.
  &amp; Health</span></p>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $first; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.58%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $second; ?></p>
  </td>
  <td width="8%" valign=top style='width:8.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $third; ?></p>
  </td>
  <td width="9%" valign=top style='width:9.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $forth; ?></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $fg; ?></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span><?php echo $remarks; ?></p>
  </td>
 </tr>


          <?php

 

 ?>

 <tr>
  <td width="70%" colspan=5 valign=top style='width:70.22%;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><b><span style='font-size:12.0pt;font-family:"Bookman Old Style",serif'>GENERAL
  AVERAGE</span></b></p>
  <p class=MsoNoSpacing><span style='font-size:2.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="11%" valign=top style='width:11.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="17%" valign=top style='width:17.94%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:1.0pt'>&nbsp;</span></p>

<p class=MsoNoSpacing><span style='font-size:1.0pt'>&nbsp;</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:68.7pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=96 valign=top style='width:1.0in;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bookman Old Style",serif'>MODALITY</span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:1.0pt'>&nbsp;</span></p>

<p class=MsoNoSpacing><span style='font-size:1.0pt'>&nbsp;</span></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:7.65pt'>
  <td colspan=6 valign=top style='border:none;border-bottom:solid black 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt;height:7.65pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:10.0pt;font-family:"Bookman Old Style",serif'>REPORT ON
  LEARNER’S OBSERVED VALUES</span></b></p>
  </td>
 </tr>
 <tr>
  <td rowspan=2 valign=top style='border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Core Values</span></b></p>
  </td>
  <td width=280 rowspan=2 valign=top style='width:210.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>Behavior
  Statements</span></b></p>
  </td>
  <td width=130 colspan=4 valign=top style='width:97.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>QUARTER</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>1</span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>2</span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>3</span></b></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>4</span></b></p>
  </td>
 </tr>
 <tr>
  <td rowspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='margin-left:.25in;text-indent:-.25in'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>MAKA-DIYOS</span></p>
  </td>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Express one’s spiritual beliefs while
  respecting the spiritual beliefs of others.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Shows adherence to ethical principles
  by upholding truth.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td rowspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='margin-left:.25in;text-indent:-.25in'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>MAKATAO</span></p>
  </td>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Is sensitive to individual, social,
  culture differences.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.7pt'>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt;height:15.7pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Demonstrates contributions toward
  solidarity.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt;height:15.7pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt;height:15.7pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt;height:15.7pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt;height:15.7pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='margin-left:.25in;text-indent:-.25in'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>MAKAKALIKASAN</span></p>
  </td>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Cares for the environment and utilizes
  resources wisely, judiciously, and economically.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td rowspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='margin-left:.25in;text-indent:-.25in'><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>MAKABANSA</span></p>
  </td>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Demonstrate pride in being a Filipino;
  exercises the rights and responsibilities of a Filipino citizen.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=280 valign=top style='width:210.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Bookman Old Style",serif'>Demonstrates appropriate behavior in
  carrying out activities in the school, community, and country.</span></p>
  </td>
  <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width=34 valign=top style='width:25.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.75pt 4.3pt 5.75pt'>
  <p class=MsoNoSpacing><span style='font-size:8.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNoSpacing><span style='font-size:3.0pt'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr>
  <td width="21%" valign=top style='width:21.58%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Descriptors</span></b></p>
  </td>
  <td width="18%" valign=top style='width:18.04%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Grading Scale</span></b></p>
  </td>
  <td width="17%" valign=top style='width:17.12%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Remarks</span></b></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></b></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Marking</span></b></p>
  </td>
  <td width="27%" valign=top style='width:27.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Non-numerical
  Rating</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.58%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Outstanding</span></p>
  </td>
  <td width="18%" valign=top style='width:18.04%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>90-100</span></p>
  </td>
  <td width="17%" valign=top style='width:17.12%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Passed</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>AO</span></p>
  </td>
  <td width="27%" valign=top style='width:27.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Always Observed</span></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.58%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Very
  Satisfactory</span></p>
  </td>
  <td width="18%" valign=top style='width:18.04%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>85-89</span></p>
  </td>
  <td width="17%" valign=top style='width:17.12%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Passed</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>SO</span></p>
  </td>
  <td width="27%" valign=top style='width:27.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Sometimes
  Observed</span></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.58%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Satisfactory</span></p>
  </td>
  <td width="18%" valign=top style='width:18.04%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>80-84</span></p>
  </td>
  <td width="17%" valign=top style='width:17.12%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Passed</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>RO</span></p>
  </td>
  <td width="27%" valign=top style='width:27.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Rarely Observed</span></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.58%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Fairly
  Satisfactory</span></p>
  </td>
  <td width="18%" valign=top style='width:18.04%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>75-79</span></p>
  </td>
  <td width="17%" valign=top style='width:17.12%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Passed</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>NO</span></p>
  </td>
  <td width="27%" valign=top style='width:27.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Not Observed</span></p>
  </td>
 </tr>
 <tr>
  <td width="21%" valign=top style='width:21.58%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Did Not Meet
  Expectations</span></p>
  </td>
  <td width="18%" valign=top style='width:18.04%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Below 75</span></p>
  </td>
  <td width="17%" valign=top style='width:17.12%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>Failed</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
  <td width="27%" valign=top style='width:27.52%;padding:0in 5.75pt .7pt 5.75pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Bookman Old Style",serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:1.0pt'>&nbsp;</span></p>

</div>

</body>

</html>



 </div> 
<script>
  window.addEventListener("load", function() {
    setTimeout(function() {
      window.print();
    }, 5000); // Delay for half a second to ensure the page is fully loaded
  });
</script>
</html>

