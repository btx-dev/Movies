<?php
/* 
Delete function.
Deletes the selected row in movieslist for current user.
*/
require 'dbconn.php';

$title = $_GET['title'];
$username = $_GET['user'];

$sql = "DELETE FROM movielist WHERE Title='$title' AND User='$username'";

$success = mysqli_query($dbconn,$sql);
// Check if the query was successful.
if ($success) 
{
	header('Location: /movies/movies.php'); 
	exit();	
}
// Case query was not successful.
else 
{
	echo "<br>Something went wrong.";
}
?>