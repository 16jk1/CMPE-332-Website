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
<div class="table-container">
<h2 class="table-title">Sponsors</h2>
<?php
	
echo "<table><tr><th>Company</th><th>Sponsorship Level</th><th>Email Sent</th></tr>";
#$schedule = [session];
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "select * FROM SponsorCompany";
	$stmt = $pdo->prepare($sql);   #create the query
	$stmt->execute();   #bind the parameters
	while ($row = $stmt->fetch()) {
	#echo "<tr><td>".$row["compName"]."</td><td>".$row["sponsorshipLvl"]."</td><td>.<button name="Remove" type="submit" onclick="return table_raw()">Remove</button>.</td></tr>";
	echo "<tr><td>".$row["compName"]."</td><td>".$row["sponsorshipLvl"]."</td><td>".$row["numOfEmailSent"]."</td></tr>";
	}



#stmt contains the result of the program execution
#use fetch to get results row by row.


?>
</table>
</div>

<div class="table-container">
<h2 class="table-title">Jobs Available</h2>
<?php

#$schedule = [session];


echo "<table><tr><th>Company</th><th>Job Title</th><th>City</th><th>Province</th><th>payRate</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

$sql = "select * FROM ads";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["compName"]."</td><td>".$row["jobTitle"]."</td><td>".$row["city"]."</td><td>".$row["province"]."</td><td>".$row["payRate"]."</td></tr>";
}


?>
</table>
</div>
<br>
<div class="form-container">
  <form action="DeleteSponsor.php" method="post">
    <div class="form-org">
      <div class="group">
        <input type="text" name="compName" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Company To Delete</label>
      </div>
      <input class="delete" type="submit" name="delete" value="Delete">
    </div>
  </form>
</div>



</body>
</html> 
