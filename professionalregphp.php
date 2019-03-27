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
<h2>Professional</h2>


<?php
$p_id = mt_rand(10000000,19999999);
$givenName = $_POST["firstname"];                      
$surname = $_POST["lastname"];
$p_email = $_POST["email"];
$rate = 100.00;
$profession = $_POST["profession"];
echo "$p_id,$givenName,$surname,$p_email,$rate,$profession";
echo "\n Hello $givenName!";
echo "\n Your Profession ID is $p_id.";
echo "\n You must pay $rate.";

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
