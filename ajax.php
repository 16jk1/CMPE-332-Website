<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
  	$pdo = new PDO('mysql:host=localhost;dbname=conference2', "root", "");
$delete_data = "DELETE FROM sponsorcompany WHERE compName = 'Samsun'";  #create the query
$pdo->exec($delete_data);   #bind the parameters
    exit;
}
?>