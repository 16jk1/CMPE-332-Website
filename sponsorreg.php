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
</div>
</ul>
</div>

<body>


<h2>Sponsor Registration</h2>

<form action="sponsorregphp.php" method="POST">
<p>First name:</p>
<input type="text" name="firstname" placeholder = "Bob" required>
<br>
<p>Last name:</p>
<input type="text" name="lastname" placeholder = "Lee"  required>
<br>
<p>Email:</p>
<input type="text" name="email" placeholder = "****@hotmail.com"  required>
<br>
<p>Company:</p>
<input type="text" name="company" placeholder = "Microsoft"  required>
<br>
<input type="submit">
</form> 


</body>
</html> 
