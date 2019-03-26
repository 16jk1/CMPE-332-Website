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
<h2>Students</h2>


<?php
$s_id = $_POST["sid"];
$givenName = $_POST["firstname"];                      
$surname = $_POST["lastname"];
$s_email = $_POST["email"];
$rate = 50.00;
$hotelroom = mt_rand(1,100)%3 + 500;

echo "Hey $givenName!";
echo "Your Hotel Room Number is $hotelroom.";
echo "You must pay $rate.";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into student(ID,fName, lName, rate, email, hotelRoomNum) values ('$s_id','$givenName','$surname','$rate','$s_email','$hotelroom')";
#$stmt = $pdo->prepare($sql);   #create the query
$pdo->exec($sql);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.


$pdo = null;

?>

</body>
</html> 
