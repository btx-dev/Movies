<?php
include "functions/dbconn.php";
include "header.php";
// Check if there is a session.
if (isset($_SESSION['userid'])) 
{
	$validUser = mysqli_real_escape_string($dbconn, $_SESSION['username']);
	// Check if there are movies for current user. 
	$result = $dbconn->query("SELECT * FROM movielist WHERE User='$validUser'");
	// Case no movie found prompt to search.
	if ($result->num_rows<1) 
	{
	 	echo '<p class="result">No movies yet? 
	 	<a class="links" href="search.php">Search</a>
	 	for one!<p> ';
	}
	// Case movies found
	else 
	{
		// Fetch results. 
		while ($movie=$result->fetch_assoc()) 
		{ 
?>
		<!-- title div: Title and year. -->
		<div id="title"> 
			<h1><?php echo $movie['Title']?></h1>
			<span class="year"> <?php echo "(".$movie['Year'].")" ?></span>
			<img id="deleteIcon" class="toolbar" src="./images/delete.png" onclick="deleteMovie('<?php echo $movie['Title'] ?>')">
			<img id="updateIcon" class="toolbar" src="./images/update.png" onclick="updateMovie('<?php echo $movie['Title'] ?>')">
		</div>	
		<!-- Left div: image url, rating, votes -->
		<div id="left"> 
			<a href="<?php echo($movie['image_url']) ?>"><img id="poster" src="<?php echo $movie['image_url']?>" ></a> <!--Εικόνα Σύνδεσμος-->
			<div id="rating" ><?php echo "IMDB Rating: ". $movie['Rating'] ?></div>
			<div id="votes" ><?php echo "IMDB Votes: ". $movie['Votes'] ?></div>
		</div>
		<!-- Content div: plot, actors list. -->
		<div id="content">
			<h2>Plot: </h2>
			<p id="plot"> <?php echo $movie['Description']?> </p>
			<h2>Acting: </h2>
			<p id="plot"> <?php echo $movie['Actors'] ?> </p>
		</div>
		<!-- Footer div: duration, added timestamp. -->
		<div id="footer">
			<span class="comments"><?php echo "Duration: ".$movie['Length']. " min <br> Added on: ".$movie['TimeStamp'] ?> </span>
			<hr>
		</div>
<?php 
		}
	} 
}
// Case there is no session.
else {
	header('Location: /movies/index.php'); 
	exit();
}
?>
<script>
function deleteMovie(title) 
{
	var txt;
	var r = confirm('The movie will be removed from your database! \nAre you sure you want to delete: "' + title + '"?');
	if (r == true) 
	{
		location.replace("./functions/delete.php?title=" + title + "&user=<?php echo $_SESSION['username'] ?>");
	}
}
function updateMovie(title)
{
	var r = confirm('The movie will be updated in your database! \nUpdate "' + title + '" now?');
	if (r == true) 
	{
		location.replace("./functions/update.php?title=" + title + "&user=<?php echo $_SESSION['username'] ?>");
	}
}
</script>
</body>
</html>