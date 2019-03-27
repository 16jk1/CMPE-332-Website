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

<h2>Pick a Hotel Room to View</h2>
<form action="hotelView.php" method="POST">
<select name="room" id="hotel" required>
<option value="" selected="selected">Select a room..</option>
<option value="All Rooms">All Rooms</option>
<option value="500">500</option>
<option value="501">501</option>
<option value="502">502</option>
<option value="503">503</option>
<option value="502">504</option>
<option value="503">505</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="See Selected Values"/>
</form>

<div class="table-container">
<?php

$room = $_POST["room"];

echo "<h2>Hotel Room #$room</h2>";

$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$sql2 = "select count(ID) as num from student, hotelRoom where student.hotelRoomNum = hotelRoom.roomNum and hotelRoomNum= '$room'";
$stmt = $pdo->prepare($sql2);
$stmt->execute();
$result = $stmt->fetchColumn();

$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$sql3 = "select numOfBeds from hotelRoom where roomNum = '$room'";
$stmt = $pdo->prepare($sql3);
$stmt->execute();
$numbeds = $stmt->fetchColumn();

if ($result == $numbeds){
	echo "Room is Full";
}
else	
	echo "Room is not Full";
	

echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
If($room != "All Rooms")
	$sql = "select fName, lName from student, hotelRoom where student.hotelRoomNum = hotelRoom.roomNum and hotelRoomNum= '$room'";
else
	header("Location: allhotelView.php");
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";
}


?>
</table>
</div>
</body>
</html> 
