<?php
/* 	
Update function.
Updates Rating, Votes in movielist table for current user.
*/
require 'dbconn.php';
// Set the variables.
$searchQuery = $_GET['title'];
$username = $_GET['user'];
$apikey = "Your API Key Goes Here";
// Replace chars to make the call.
$searchQuery = str_replace(' ', '+', $searchQuery);
$url = "http://www.omdbapi.com/?apikey=".$apikey."&t=".$searchQuery;
// Call to API and decode the result.	
$data = file_get_contents($url);
$movie = json_decode($data, true);
// Replace chars again to execute the query.
$searchQuery = str_replace('+', ' ', $searchQuery);
// Get new values.
$rating = $movie['imdbRating'];
$votes = $movie['imdbVotes'];

$sql = "UPDATE movielist SET Rating = '$rating', Votes = '$votes' WHERE Title='$searchQuery' AND User='$username'";

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