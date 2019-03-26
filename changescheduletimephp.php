<!DOCTYPE html>
<html>
<head>
<link href="indexCSS.css" type="text/css" rel="stylesheet" >
</head>

<div class="navi">
<ul>
<div class ="navi2">
  <li><a href="index.html">Home</a></li>
  <li><a href="QTMA.php">QTMA</a></li>
  <li><a href="QPPO.php">QPPO</a></li>
  <li><a href="Hotel.php">Hotel</a></li>
  <li><a href="schedule.php">Schedule</a></li>
  <li><a href="sponsor.php">Sponsor</a></li>
  <li><a href="conference.php">Conference</a></li>
  <li><a href="registration.html">Registration</a></li>  
    <li><a href="totalReg.php">Total Registration</a></li>  
</div>
</ul>
</div>

<body>


<?php


$event = $_POST["event"];
$starttime = $_POST["starttime"];                      
$endtime = $_POST["endtime"];
$date = $_POST["date"];
$location = $_POST["location"];

$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$sql2 = "select startTime, endTime, roomLocation, date from session where startTime = '$starttime' and endTime = '$endtime' and roomLocation = '$location' 
and date = '$date' and sessionName != '$event'";
$stmt = $pdo->prepare($sql2);
$stmt->execute();
	
if($stmt->rowCount() > 0){
	echo "You cannot change to that schedule! Already taken.";
}
else{
#connect to the database
echo "Everything has successfully changed";
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "update session set startTime = '$starttime', endTime = '$endtime', roomLocation = '$location', date = '$date' where sessionName = '$event'";
$pdo->exec($sql); 
}

?>
</table>

</body>
</html> 
