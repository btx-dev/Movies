<?php
/* 	
Insert function.
Inserts a new record in movielist table for current user.
*/
// Access control.
if (isset($_POST['insert-submit'])) {
	require "dbconn.php";
	include '../header.php';
	// Set the query variables.
	$username = $_SESSION['username'];
	echo $username;
	$title = $_SESSION['title'];
	$title = str_replace('_', ' ', $title);
	$actors= $_SESSION['actors'];
	$img_url = $_SESSION['img'];
	$year = $_SESSION['year'];
	$plot = $_SESSION['plot'];
	$rating = $_SESSION['rating'];
	$votes = $_SESSION['votes'];
	$length = $_SESSION['length'];

	$plot = str_replace("'","`",$plot);
	$title = str_replace("'","`",$title);

	// Setup the query.
	$sql = "INSERT INTO movielist(Title, Actors, image_url, Year, Description, Rating, Votes, Length, User) VALUES('$title', '$actors', '$img_url', '$year', '$plot', '$rating', '$votes', '$length', '$username')";

	/* DEBUGGING
	echo "SQL Query to execute: $sql";
	*/
	$success = mysqli_query($dbconn,$sql);
	// Check if the query was successful.
	if ($success) 
	{
		header('Location: /movies/search.php?insert=success'); 
		exit();
		
	} 
	// Case query was not successful.
	else 
	{
		echo "<br>Something went wrong.";
	}
}
//Access denied
else 
{ 
	header('Location: /movies/index.php'); 
	exit();
}
?>