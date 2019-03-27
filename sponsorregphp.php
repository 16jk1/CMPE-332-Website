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
$s_id = mt_rand(10000000,19999999);
$givenName = $_POST["firstname"];                      
$surname = $_POST["lastname"];
$s_email = $_POST["email"];
$rate = 0;
$company = $_POST["company"];

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "select compName from sponsorcompany where compName = '$company'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();

if($stmt->rowCount() != 0){
	
$sql = "insert into sponsor(fName, lName, rate, email, company, sponsorID) values ('$givenName','$surname','$rate','$s_email','$company','$s_id')";
#$stmt = $pdo->prepare($sql);   #create the query
$pdo->exec($sql);   #bind the parameters

echo "Hello $givenName from $company!";
echo "\n Your Sponsor ID is $s_id.";
echo "\n You must pay $rate.";
}
#stmt contains the result of the program execution
#use fetch to get results row by row.
else{
	echo "That company does not exist in the database!!";
	echo "<br>";
	echo "Register to become a sponsor first!";
}


$pdo = null;

?>

</body>
</html> 
