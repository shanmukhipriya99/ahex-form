<?php

$databaseName = "ahex";

$dbConnected = mysqli_connect("localhost", "root", "");
$dbSelected = mysqli_select_db($dbConnected, $databaseName);

if ($dbConnected) {
	echo "MySQL connected OK<br /><br />";

	if ($dbSelected) {
		echo "DB connected OK<br /><br />";
	} else {
		echo "DB connection FAILED<br /><br />";
	}		
} else {
	echo "MySQL connection FAILED<br /><br />";
}

?>