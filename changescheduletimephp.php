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


<?php


$event = $_POST["event"];
$starttime = $_POST["starttime"];                      
$endtime = $_POST["endtime"];
$date = $_POST["date"];
$location = $_POST["location"];


$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$sql2 = "select  roomLocation, date from session where roomLocation = '$location' and date = '$date' and sessionName != '$event'";
$stmt = $pdo->prepare($sql2);
$stmt->execute();	
	if ($stmt->rowCount() > 0){
		$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
		$sql2 = "select startTime from session where roomLocation = '$location' and date = '$date' and sessionName != '$event'";
		$stmt = $pdo->prepare($sql2);
		$stmt->execute();
		$startresult = $stmt->fetchColumn();
		
		$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
		$sql3 = "select endTime from session where roomLocation = '$location' and date = '$date' and sessionName != '$event'";
		$stmt = $pdo->prepare($sql3);
		$stmt->execute();
		$endresult = $stmt->fetchColumn();
		if( $starttime >= $startresult && $starttime <= $endresult || $endtime >= $startresult && $endtime <= $endresult){
				echo "You cannot change to that schedule! Already taken.";
		}
		else {
		#connect to the database
			echo "Everything has successfully changed";
			$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

			$sql = "update session set startTime = '$starttime', endTime = '$endtime', roomLocation = '$location', date = '$date' where sessionName = '$event'";
			$pdo->exec($sql); 	
			
		}
	}else{
				#connect to the database
			echo "Everything has successfully changed";
			$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

			$sql = "update session set startTime = '$starttime', endTime = '$endtime', roomLocation = '$location', date = '$date' where sessionName = '$event'";
			$pdo->exec($sql); 	
	}

?>
</table>

</body>
</html> 
