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


<div class="form-container">
  <h2>Post a New Job Position</h2>

  <form action="addSponsorphp.php" method="POST">
    <div class="form-reg">
      <div class="group">
        <input type="text" name="company" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Company Name</label>
        <!-- placeholder = "Microsoft" -->
      </div>
      <div class="group">
        <input type="text" name="jobtitle" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Job Title</label>
        <!-- placeholder = "Data Scientist" -->
      </div>
    </div>
    <div class="form-reg">
      <div class="group">
        <input type="text" name="city" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>City</label>
        <!-- placeholder = "Toronto" -->
      </div>

      <div class="group">
        <input type="text" name="province" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Province</label>
        <!-- placeholder = "Ontario" -->
      </div>
    </div>
    <div class="form-reg">
      <div class="group">
        <input type="text" name="payRate" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Pay Rate ($XX.XX)</label>
        <!-- placeholder = "14.00" -->
      </div>
    </div>
    <input class="submit" type="submit">
  </form>
</div>

</body>
</html> 
