<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Employee Information</h2>


<?php

$dept = "QTMA";
echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=university', "root", "");

$sql = "select fName, lName from committee, committeemember where committee.type = committeemember.position and commName= 'QTMA'";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute([$dept]);   #bind the parameters

#stmt contains the result of the program execution
#use fetch to get results row by row.
while ($row = $stmt->fetch()) {
	echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";
}


?>
</table>
</body>
</html> 
