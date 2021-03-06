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


<h2>Sponsors</h2>

<?php

$compName = $_POST["compName"]; 
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "select compName from SponsorCompany where compName = '$compName'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();

if($stmt->rowCount() != 0){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM sponsorcompany WHERE compName = '$compName'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
else{
	echo "That Company Does not Exists!";
}
$conn = null;


#stmt contains the result of the program execution
#use fetch to get results row by row.


?>

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
</body>
</html> 
