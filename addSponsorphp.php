<!DOCTYPE html>
<html>
<head>
<link href="schedule.css" type="text/css" rel="stylesheet" >
</head>

<header>
  <div class="container">
    <nav>
      <ul>
        <li class="nav-item"><a href="index.html">Home</a></li>
        <li class="dropdown">
          <a href="committee.php" class="dropbtn">Committee</a>
          <div class="dropdown-content">
            <a href="QTMA.php">QTMA</a>
            <a href="QPPO.php">QPPO</a>
            <a href="QCBT.php">QCBT</a>
          </div>
        </li>
        <li class="nav-item"><a href="Hotel.php">Hotel</a></li>
        <li class="nav-item"><a href="schedule.php">Schedule</a></li>
        <li class="nav-item"><a href="sponsor.php">Sponsor</a></li>
        <li class="nav-item"><a href="conference.php">Conference</a></li>
        <li class="nav-item"><a href="registration.html">Registration</a></li>
        <li class="nav-item"><a href="totalReg.php">Total Registration</a></li>
      </ul>
    </nav>
  </div>
</header>

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
