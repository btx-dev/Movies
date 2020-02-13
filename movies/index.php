<?php
include 'header.php';
?>

<div id="result-left" >
	<!-- Greet message. -->
	<h1>Welcome</h1>
	<?php
		// Check if there is a session to provide info and setup the form.
		if (isset($_SESSION['userid'])) 
		{
			echo '<p class="noteMsg">You are logged is as user: '.$_SESSION['username'].'</p>
				<form action="functions/logout.php" method="post">
				<button type="submit" name="logout-submit">Logout</button>
				</form>';
		}
		// Case there is no session.
		else 
		{
			echo '<p class="result"><a class="links" href="login.php">Login</a>
			or
			<a class="links" href="signup.php">Signup</a></p>';
		}
	?>
</div>
</body>
</html>