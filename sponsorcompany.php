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


<h2>Add a new Sponsor Company</h2>

<form action="sponsorcompanyphp.php" method="POST">
<p>Company Name:</p>
<input type="text" name="company" placeholder = "Microsoft"  required>
<br>
<p>How much are you willing to sponsor?:</p>
<input type="text" name="rate" placeholder = "1000.00"  required>
<br>
<input type="submit">
</form> 


</body>
</html> 
