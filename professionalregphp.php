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
<h2>Professional</h2>


<?php
$p_id = mt_rand(10000000,19999999);
$givenName = $_POST["firstname"];                      
$surname = $_POST["lastname"];
$p_email = $_POST["email"];
$rate = 100.00;
$profession = $_POST["profession"];
echo "$p_id,$givenName,$surname,$p_email,$rate,$profession";
echo "Hello $givenName!";
echo "Your Profession ID is $p_id.";
echo "You must pay $rate.";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into professional(fName, lName, rate, email, profession, professionID) values ('$givenName','$surname','$rate','$p_email','$profession','$p_id')";
#$stmt = $pdo->prepare($sql);   #create the query
$pdo->exec($sql);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.


$pdo = null;

?>

</body>
</html> 
