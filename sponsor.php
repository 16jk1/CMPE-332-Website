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

<table>
 <tr>
  <td>
   <button name="Remove" type="submit" onclick="return 
     table_raw()">HTML</button>
  </td>
 </tr>
</table>

<script>
public function table_raw(){
$delete_data = "DELETE FROM TableName WHERE ID= your_fetch_id";
return $delete_data;
}
</script>
<h2>Sponsors</h2>


<?php

#$schedule = [session];


echo "<table><tr><th>Company</th><th>Sponsorship Level</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "select * FROM sponsorcompany";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	#echo "<tr><td>".$row["compName"]."</td><td>".$row["sponsorshipLvl"]."</td><td>.<button name="Remove" type="submit" onclick="return table_raw()">Remove</button>.</td></tr>";
	echo "<tr><td>".$row["compName"]."</td><td>".$row["sponsorshipLvl"]."</td></tr>";
}


?>
</table>

<h2>Jobs Available</h2>


<?php

#$schedule = [session];


echo "<table><tr><th>Company</th><th>Job Title</th><th>City</th><th>Province</th><th>payRate</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "select * FROM ads";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["compName"]."</td><td>".$row["jobTitle"]."</td><td>".$row["city"]."</td><td>".$row["province"]."</td><td>".$row["payRate"]."</td></tr>";
}


?>
</table>

</body>
</html> 
