<!DOCTYPE html>
<html>
<head>
<link href="schedule.css" type="text/css" rel="stylesheet" >
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
<div class="table-container">
<h2 class="table-title">QCBT Committee</h2>
<?php

echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "select fName, lName from committeeMember where commName= 'QCBT'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";
}


?>
</table>
</div>
</body>
</html> 