<!DOCTYPE html>
<html>
<head>
<link href="schedule.css" type="text/css" rel="stylesheet" >
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
<div class="table-container">
  <h2 class="table-title">Registration Information</h2>
    <?php

    echo "<table><tr><th>Total Registrations</th><th>Total Amount</th></tr>";

    #connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

    $sql = "select COUNT(ID), SUM(rate) from (
    select ID, rate from student
    union
    select sponsorID, rate from sponsor
    union
    select professionID, rate from professional
    ) as tem
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();   #bind the parameters
    while ($row = $stmt->fetch()) {
    	echo "<tr><td>".$row["COUNT(ID)"]."</td><td>".$row["SUM(rate)"]."</td></tr>";
    }

    ?>
</div>
</table>
</body>
</html>
