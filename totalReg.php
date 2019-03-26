<!DOCTYPE html>
<html>
<head>
<link href="css/TotalReg.css" type="text/css" rel="stylesheet" >
</head>

<header>
    <div class="container">

      <nav>
        <ul>
<li><a href="index.html">Home</a></li>
<li><a href="QTMA.php">QTMA</a></li>
<li><a href="QPPO.php">QPPO</a></li>
<li><a href="Hotel.php">Hotel</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="sponsor.php">Sponsor</a></li>
<li><a href="conference.php">Conference</a></li>
<li><a href="registration.html">Registration</a></li>
  <li><a href="totalReg.php">Total Registration</a></li>
      </ul>
      </nav>
    </div>
  </header>

<body>

  <section id="showcase">
    <div class="p1">
      <h1>Registration Information</h1>
    </div>
  </section>

  <section id="showcase2">
    <div class="p2">
      <h2>9</h2>
      <p> The total amount of registrations in the last 24 hours. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Malesuada fames ac turpis egestas maecenas.</p>
    </div>
  </section>

  <section id="showcase3">
    <div class="p3">
      <h3>450</h3>
      <p> The total amount of revenue raised by the conference. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Malesuada fames ac turpis egestas maecenas.</p>
    </div>
  </section>

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
</table>
</body>
</html>
