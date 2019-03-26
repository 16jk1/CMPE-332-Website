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
<form action="changescheduletimephp.php" method="POST">
<h2>Pick an Event</h2>
<select name="event" id="schedule" required>
<option value="" selected="selected">Select an Event..</option>
<option value="BlockChain Developer Workshop">BlockChain Developer Workshop</option>
<option value="Mobile App Workshop">Mobile App Workshop</option>
<option value="Systems Engineering Workshop">Systems Engineering Workshop</option>
</select>

<h2>Pick a Start Time</h2>
<select name="starttime" id="schedule" required>
<option value="" selected="selected">Select a time..</option>
<option value="9:00:00">9:00:00</option>
<option value="10:00:00">10:00:00</option>
<option value="11:00:00">11:00:00</option>
<option value="12:00:00">12:00:00</option>
<option value="13:00:00">13:00:00</option>
<option value="14:00:00">14:00:00</option>
<option value="15:00:00">15:00:00</option>
<option value="16:00:00">16:00:00</option>
</select>

<h2>Pick a End Time</h2>
<select name="endtime" id="schedule" required>
<option value="" selected="selected">Select a time..</option>
<option value="10:00:00">10:00:00</option>
<option value="11:00:00">11:00:00</option>
<option value="12:00:00">12:00:00</option>
<option value="13:00:00">13:00:00</option>
<option value="14:00:00">14:00:00</option>
<option value="15:00:00">15:00:00</option>
<option value="16:00:00">16:00:00</option>
<option value="17:00:00">17:00:00</option>
</select>

<h2>Pick a Date</h2>
<select name="date" id="schedule" required>
<option value="" selected="selected">Select a date..</option>
<option value="03/23/2019">03/23/2019</option>
<option value="03/24/2019">03/24/2019</option>
<option value="03/27/2019">03/27/2019</option>
<option value="03/28/2019">03/28/2019</option>
</select>

<h2>Pick a Location</h2>
<select name="location" id="schedule" required>
<option value="" selected="selected">Select a location..</option>
<option value="Etherington AUD">Etherington AUD</option>
<option value="BioSci 1129">BioSci 1129</option>
<option value="Mitchell AUD">Mitchell AUD</option>
</select>

<br>
<br>
<input type="submit" name="submit" value="Change Selected Values"/>
</form>
<br>
<?php


echo "<table><tr><th>Session Name</th><th>Start Time</th><th>End Time</th><th>Room Location</th><th>Date</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

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

</body>
</html> 
