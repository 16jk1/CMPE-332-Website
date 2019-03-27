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

<div class="form-container">
  <h2>Add a new Sponsor Company</h2>

  <form action="sponsorcompanyphp.php" method="POST">
    <div class="form-reg">
      <div class="group">
        <input type="text" name="company" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Company Name</label>
        <!-- placeholder = "Microsoft" -->
      </div>
      <div class="group">
        <input type="text" name="rate" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Sponsor Amount ($XXX.XX)</label>
        <!-- placeholder = "1000.00" -->
      </div>
    </div>
    <input class="submit" type="submit">
  </form>
</div>

</body>
</html>
