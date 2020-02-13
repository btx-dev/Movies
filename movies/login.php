<?php
include 'header.php';
?>

<div id="result-left" >
	<h1>Login</h1>
	<?php 
		// Check url (GET) for errors in user input or connection errors.
		if (isset($_GET['error'])) 
		{
			// Switch the error message.
			switch ($_GET['error']) 
			{
				case 'emptyfields':
					echo '<p class="errorMsg">Fill in all fields!</p>';
					break;
				case 'sqlerror':
					echo '<p class="errorMsg">Error connecting to Database!</p>';
					break;
				case 'wrongpwd':
					echo '<p class="errorMsg">Wrong password for user: '.$_GET['uid'].' !</p>';
					break;
				case 'nouser':
					echo '<p class="errorMsg">No such user!</p>';
					break;
				default:
					# code...
					break;
			}
			echo '<p class="errorMsg">';
		}
		// Case signup occured.
		elseif (isset($_GET['signup'])) 
		{
		 	echo '<p class="successMsg">Signup success!</p>
		 		<p class="successMsg">Login with Username: <b>'.$_GET['uid'].'</b> or Email: <b>'.$_GET['mail'].'</b></p>';
		} 
	?>
	<p>
		<!-- User input form. -->
		<form class="userInput" action="/movies/functions/do_login.php" method="post">
			<!-- Check if an input is already sent to fill in the mailuid text. -->
			<input type="text" name="mailuid" placeholder="Username/Email"
			<?php if (isset($_GET['uid'])) 
			{
				echo 'value="'.$_GET['uid'].'"';
			} ?>>
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="login-submit">Login</button>
		</form>
	</p>
	<!-- Signup prompt. -->
	<p class="result">Don't have an account? <a class="links" href="signup.php" >Signup</a></p>
</div>

</body>
</html>