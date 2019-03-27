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
<h2>Students</h2>


<?php
$s_id = $_POST["sid"];
$givenName = $_POST["firstname"];                      
$surname = $_POST["lastname"];
$s_email = $_POST["email"];
$rate = 50.00;
$hotelroom = mt_rand(1,100)%5 + 500;
$notfull = false;
while($notfull == false){
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$sql2 = "select count(ID) as num from student, hotelRoom where student.hotelRoomNum = hotelroom.roomNum and hotelRoomNum= '$hotelroom'";
$stmt = $pdo->prepare($sql2);
$stmt->execute();
$result = $stmt->fetchColumn();

if($hotelroom == 500)
	$numbed = 2;
else if ($hotelroom == 501)
	$numbed = 1;
else if ($hotelroom == 502)
	$numbed = 3;
else if ($hotelroom == 503)
	$numbed = 5;
else if ($hotelroom == 504)
	$numbed = 4;
else if ($hotelroom == 505)
	$numbed = 2;

if ($result == $numbed){
	$hotelroom = mt_rand(1,100)%5 + 500;
}
else	
	$notfull = true;
}
echo "Hey $givenName!";
echo "\n Your Hotel Room Number is $hotelroom.";
echo "\n You must pay $rate.";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into student(ID,fName, lName, rate, email, hotelRoomNum) values ('$s_id','$givenName','$surname','$rate','$s_email','$hotelroom')";
#$stmt = $pdo->prepare($sql);   #create the query
$pdo->exec($sql);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.


$pdo = null;

?>

</body>
</html> 
