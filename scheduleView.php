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
<h2>Conference Schedule</h2>
<h2>Pick a Date to View</h2>
<form action="scheduleView.php" method="POST">
<select name="date" id="schedule" required>
<option value="" selected="selected">Select a date..</option>
<option value="All Events">All Events</option>
<option value="03/23/2019">03/23/2019</option>
<option value="03/24/2019">03/24/2019</option>
<option value="03/27/2019">03/27/2019</option>
<option value="03/28/2019">03/28/2019</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="See Selected Values"/>
</form>
<div class="table-container">

  <?php

  $date = $_POST["date"];


  echo "<h2 class="table-title">$date</h2>";
  echo "<table><tr><th>Session Name</th><th>Start Time</th><th>End Time</th><th>Room Location</th><th>Date</th></tr>";

  #connect to the database
  $pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
  If($date != "All Events")
  	$sql = "select * FROM session where date = '$date'";
  else
  	$sql = "select * FROM session";
  $stmt = $pdo->prepare($sql);   #create the query
  $stmt->execute();   #bind the parameters

  #stmt contains the result of the program execution
  #use fetch to get results row by row.
  while ($row = $stmt->fetch()) {
  	echo "<tr><td>".$row["sessionName"]."</td><td>".$row["startTime"]."</td><td>".$row["endTime"]."</td><td>".$row["roomLocation"]."</td><td>".$row["date"]."</td></tr>";
  }

  ?>
  </table>
</div>


<h2><a href="changescheduletime.php">Change Schedule</a></h2>

</body>
</html>
