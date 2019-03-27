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
  <h2>Sponsor Registration</h2>

  <form action="sponsorregphp.php" method="POST">
    <div class="form-reg">
      <div class="group">
        <input type="text" name="firstname" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>First Name</label>
        <!-- placeholder = "Bob" -->
      </div>
      <div class="group">
        <input type="text" name="lastname" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Last Name</label>
        <!-- placeholder = "Lee" -->
      </div>
    </div>
    <div class="form-reg">
      <div class="group">
        <input type="text" name="company" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Profession</label>
        <!-- placeholder = "Microsoft" -->
      </div>

      <div class="group">
        <input type="text" name="email" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Email</label>
        <!-- placeholder = "****@hotmail.com" -->
      </div>
    </div>
    <input class="submit" type="submit">
  </form>
</div>

</body>
</html>
