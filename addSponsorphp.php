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
$company = $_POST["company"];
$jobtitle = $_POST["jobtitle"];                      
$city = $_POST["city"];
$province = $_POST["province"];
$payRate = $_POST["payRate"];


#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "select compName from SponsorCompany where compName = '$company'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();

if($stmt->rowCount() != 0){
	
$sql = "insert into ads (compName,jobtitle,city,province,payRate) values ('$company','$jobtitle','$city','$province','$payRate')";
$pdo->exec($sql); 
   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
echo "It has been successfully posted!";
}
else{
	echo "That company does not exist in the database!!";
	echo "<br>";
	echo "Register to become a sponsor first!";
}




$pdo = null;

?>

</body>
</html> 
