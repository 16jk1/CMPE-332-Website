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
</div>
</ul>
</div>

<body>
<h2>Hotel Room 500</h2>


<?php

$hotel500 = "500";
$hotel501 = "501";
$hotel502 = "502";

echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "select fName, lName from student, hotelroom where student.hotelRoomNum = hotelroom.roomNum and hotelRoomNum= '500'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute([$hotel500]);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";
}


?>
</table>

<h2>Hotel Room 501</h2>
<?php

$hotel500 = "500";
$hotel501 = "501";
$hotel502 = "502";

echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=university', "root", "");

$sql = "select fName, lName from student, hotelroom where student.hotelRoomNum = hotelroom.roomNum and hotelRoomNum= '501'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute([$hotel501]);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";
}


?>
</table>

<h2>Hotel Room 502</h2>
<?php

$hotel500 = "500";
$hotel501 = "501";
$hotel502 = "502";

echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=university', "root", "");

$sql = "select fName, lName from student, hotelroom where student.hotelRoomNum = hotelroom.roomNum and hotelRoomNum= '502'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute([$hotel502]);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";
}


?>
</table>


</body>
</html> 
