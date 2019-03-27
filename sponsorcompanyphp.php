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
$sql = "insert into SponsorCompany(compName, sponsorshipLvl, numOfEmailSent) values ('$company','$lvl','$email')";
#$stmt = $pdo->prepare($sql);   #create the query
$pdo->exec($sql);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.


$pdo = null;

?>
<h3>Successfully Added a Sponsor Company<h3>
<br>
<h2>Click <a href ="sponsorreg.php" >Here</a> to register for the conference</h2>

</body>
</html> 
