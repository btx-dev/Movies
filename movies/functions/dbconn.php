<?php

// Connection to the database movies(mysql).

$host = "Your Hostname Goes Here eg: 'localhost'";
$user = "Your Username Goes Here eg: 'root'";
$pass = "Your Password Goes Here";
$dbname = "movies";

$dbconn = mysqli_connect($host, $user, $pass, $dbname);

// Case connection fails.
if (!$dbconn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>