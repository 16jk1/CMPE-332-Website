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
  <h2>Student Registration</h2>

  <form action="studentregphp.php" method="POST">
    <div class="form-reg">
      <div class="group">
        <input type="text" name="sid" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Student ID</label>
        <!-- placeholder = "00000000" -->
      </div>

      <div class="group">
        <input type="text" name="firstname" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>First Name</label>
        <!-- placeholder = "Bob" -->
      </div>
    </div>
    <div class="form-reg">
      <div class="group">
        <input type="text" name="lastname" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Last Name</label>
        <!-- placeholder = "Lee" -->
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
