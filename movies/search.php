<?php
include "header.php";
include "functions/dbconn.php";
// Access control.
if (isset($_SESSION['userid'])) {
?>
	
<div id="result-left" >
	<h1>Search for a movie</h1>
	<?php
	// Check if Insert.php returned successfull message to display success message.
	if (isset($_GET['insert']) && !empty($_SESSION['title'])) 
	{
		$title = $_SESSION['title'];
		$title = str_replace('_', ' ', $title);
		echo "<p class=successMsg>Movie ".$title." inserted successfully!</p>";
	}
	// Case Insert.php returned an error to display the error.
	elseif (isset($_GET['error']) && $_GET['error']=='emptyfields') 
	{
		echo "<p class=errorMsg>Fill the search field!</p>";
	}
	?>
	<!-- Search form. -->
	<form class="userInput" action="./functions/do_search.php" method="post">
		<!-- Check if a search has already occured to fill the search text. -->
		<input type="text" name="searchQuery" id="searchQuery" onkeyup = "if (event.keyCode == 13) document.getElementByName('search-submit').click()" 
		<?php if (isset($_GET['title'])) 
		{
			$title = $_GET['title'];
			$title = str_replace('_', ' ', $title);
			echo 'value="'.$title.'">';
		}
		else
			echo '>'; 
	?>
	<button type="submit" name="search-submit">Search</button>
	</form>

	<?php 
		// Attributes display of movie found.
		if (isset($_GET['title']) && !empty($_GET['title'])) {
			echo '<p class="result">';
			$title = $_GET["title"];
			$title = str_replace('_', ' ', $title);
			echo $title.'</p><br>
				<img id="img" src="'.$_GET['img'].'"></img><br>
				<p class="result">IMDB Rating: '.$_GET['rating'].'</p>';
			echo '<form action="./functions/insert.php" method="post">
				<button type="submit" name="insert-submit">Insert</button>
				</form>';
		}?>
</div>
<?php  
}
// Access denied.
else 
{
	header('Location: ../index.php'); 
	exit();
}
?>
</body>
</html>