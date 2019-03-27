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

  <div class="table-container">
    <h2 class="table-title">Students</h2>
    <?php

    #$schedule = [session];


    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

    #connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

    $sql = "select fName, lName, email FROM student";
    $stmt = $pdo->prepare($sql);   #create the query
    $stmt->execute();   #bind the parameters

    #stmt contains the result of the program execution
    #use fetch to get results row by row.
    while ($row = $stmt->fetch()) {
    	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["email"]."</td></tr>";
    }


    ?>
    </table>
  </div>


  <div class="table-container">
    <h2 class="table-title">Professsionals</h2>
    <?php

    #$schedule = [session];


    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Profession</th><th>Email</th></tr>";

    #connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

    $sql = "select fName, lName, profession, email FROM professional";
    $stmt = $pdo->prepare($sql);   #create the query
    $stmt->execute();   #bind the parameters

    #stmt contains the result of the program execution
    #use fetch to get results row by row.
    while ($row = $stmt->fetch()) {
    	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["profession"]."</td><td>".$row["email"]."</td></tr>";
    }


    ?>
    </table>
  </div>

  <div class="table-container">
    <h2 class="table-title">Sponsors</h2>
    <?php

    #$schedule = [session];


    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Company</th><th>Email</th></tr>";

    #connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");

    $sql = "select fName, lName, company, email FROM sponsor";
    $stmt = $pdo->prepare($sql);   #create the query
    $stmt->execute();   #bind the parameters

    #stmt contains the result of the program execution
    #use fetch to get results row by row.
    while ($row = $stmt->fetch()) {
    	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["company"]."</td><td>".$row["email"]."</td></tr>";
    }


    ?>
    </table>
  </div>
  <div class="table-container">
  </div>
</body>
</html>
