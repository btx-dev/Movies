<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Movies List</title>
	<link href="style/movieStyle.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" href="./images/favicon.png"/>
	<!--Horizontical navigation menu style-->
	<style>
		ul 
		{
			position: fixed;
			width: 100%;
			top: 0;
			list-style-type: none;
			margin: 0;
			margin-bottom: 20px;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}
		li 
		{
			float: left;
		}
		li a 
		{
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-weight: bold;
		}
		li a:hover 
		{
			background: #ddd;
  			color: black;
		}
		li a.activeNav
		{
			background-color: red;
		}
	</style>
</head>
<body onload="color()">
<!-- Horizontical navigation menu. -->
<div id="top">
	<ul>
	  <li ><a href="index.php" id="index.php" title="Home Page" >Home</a></li>
	  <!-- Navigation menu setup for user status. -->
	  <?php
	  	// Check if there is a user session.
		if (!isset($_SESSION['userid'])) 
		{ 
			echo '<li ><a href="login.php" id="login.php" title="Login">Login</a></li>
				<li ><a href="signup.php" id="signup.php" title="Signup">Signup</a></li>';
		}
		// Case there is a user session.
		else 
		{
			echo '<li ><a href="search.php" id="search.php" title="Movie Search">Search</a></li>
				<li ><a href="movies.php" id="movies.php" title="Movies Display">Movies List</a></li>
				<li ><a href="./functions/logout.php" id="logout.php" title="Logout">Logout</a></li>';
		}
		
	  ?>
	</ul>
</div>
<!-- 'Go to top' button. -->
<button onclick="topFunction()" id="toTopBtn" title="Go to top">Top</button>
<script type="text/javascript">
	window.onscroll = function() {scrollFunction()};
	// Navigation menu highlighting function for current user path.
	function color()
	{
		var x ="<?php echo basename($_SERVER['PHP_SELF']);?>";
		var y = document.getElementById(x);
		y.classList.add("activeNav");
		x="";
	}
	// Show-hide 'Go to top' button on scroll.
	function scrollFunction() 
	{
	 	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
	 	{
	    	document.getElementById("toTopBtn").style.display = "block";
	  	} 
	  	else 
	  	{
	    	document.getElementById("toTopBtn").style.display = "none";
	  	}
	}
	//'Go to top' button function. Scroll to the top of the page.
	function topFunction() 
	{
 		document.body.scrollTop = 0;
  		document.documentElement.scrollTop = 0;
	}	
</script>
