<?php

include 'db.php';



foreach($dbh->query('SELECT * from login') as $row) {
	echo "<pre>" . print_r($row, 1) . "</pre>";
}


/*
//SELECT * FROM 'login' WHERE username = 'felix'
$statement = $dbh->query("SELECT * FROM login");
$row = $statement->fetch(PDO::FETCH_ASSOC);


echo "<pre>" . print_r($row, 1) . "</pre>";
*/
?>