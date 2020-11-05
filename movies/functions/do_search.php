<?php
/*
Search function.
Call to the omdb API with user input as argument(title).
*/
// Access control and empty field check.
if (isset($_POST['search-submit']) && !empty($_POST['searchQuery'])) {
	require 'dbconn.php';
	include '../header.php';

	// Set variables for the API call.
	$apikey = "Your API Key Goes Here";
	$searchQuery = $_POST['searchQuery'];
	$searchQuery = str_replace(' ', '+', $searchQuery);
	$url = "http://www.omdbapi.com/?apikey=".$apikey."&t=".$searchQuery;
	// Call to API and decode the result.	
	$data = file_get_contents($url);
	$movie = json_decode($data, true);

	// Set GET and SESSION variables.
	$title = $movie['Title'];
	$title = str_replace(' ', '_', $title);
	$_SESSION['title'] = $title;
	$_SESSION['year'] =  $movie['Year'];
	$_SESSION['actors'] =  $movie['Actors'];
	$_SESSION['plot'] =  $movie['Plot'];
	$_SESSION['votes'] =  $movie['imdbVotes'];
	$_SESSION['length'] =  $movie['Runtime'];
	$rating =  $movie['imdbRating'];
	$_SESSION['rating'] = $rating;
	$poster =  $movie['Poster'];
	$_SESSION['img'] = $poster;

	// Redirect to search.php with attributes.
	header('Location: ../search.php?title='.$title.'&rating='.$rating.'&img='.$poster);
	exit();
}
else {
	// Access granted but search query is empty. Redirect with error.
	if (empty($_POST['searchQuery']) && isset($_POST['search-submit'])) {
		header('Location: ../search.php?error=emptyfields'); 
		exit();
	}
	// Access denied.
	header('Location: ../index.php'); 
	exit();
}
?>
