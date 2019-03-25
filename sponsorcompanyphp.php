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
<h2>Sponsor</h2>


<?php                     
$rate = $_POST["rate"];
$company = $_POST["company"];

if ($rate >= 1000 && $rate < 3000){
	$lvl = "Bronze";
	$email = 0;
}
else if ($rate >= 3000 && $rate < 5000){
	$lvl = "Silver";
	$email = 3;
}
else if ($rate >= 5000 && $rate < 10000){
	$lvl = "Gold";
	$email = 4;
}
else if ($rate >= 10000){
	$lvl = "Platinum";
	$email = 5;
}


#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into sponsorcompany(compName, sponsorshipLvl, numOfEmailSent) values ('$company','$lvl','$email')";
#$stmt = $pdo->prepare($sql);   #create the query
$pdo->exec($sql);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.


$pdo = null;

?>
<h2>Click <a href ="sponsorreg.php" >Here</a> to register for the conference</h2>

</body>
</html> 
