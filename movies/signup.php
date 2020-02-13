<?php
include 'header.php';
require 'functions/dbconn.php';
?>
<div id="result-left">
	<h1>Signup</h1>
	<?php
		// Check url (GET) for errors in user input or connection errors.
		if (isset($_GET['error'])) {
			// Switch the error message.
			switch ($_GET['error']) {
				case 'emptyfields':
					echo '<p class="errorMsg">Fill in all fields!</p>';
					break;
				case 'invaliduidmail':
					echo '<p class="errorMsg">Invalid Username and Email format!</p>';
					break;
				case 'invalidmail':
					echo '<p class="errorMsg">Email format is not valid!</p>';
					break;
				case 'invaliduid':
					echo '<p class="errorMsg">Invalid Username! Use aplhanumeric only!</p>';
					break;
				case 'passwordcheck':
					echo '<p class="errorMsg">Passwords do not match!</p>';
					break;
				case 'sqlerror':
					echo '<p class="errorMsg">Error connecting to Database!</p>';
					break;
				case 'mailtaken':
					echo '<p class="errorMsg">This email is already registered!</p>';
					break;
				case 'usertaken':
					echo '<p class="errorMsg">Username already in use!</p>';
					break;
				default:
					break;
			}
		}
	?>
	<p>
		<!-- User input form. -->
		<form class="userInput" action="functions/do_signup.php" method="post">
			<!-- Check if a username or email is already sent to fill in the proper fields. -->
			<input type="text" name="uid" placeholder="Username" 
			<?php if (isset($_GET['uid'])) 
			{
				echo 'value="'.$_GET['uid'].'"';
			} ?>>
			<input type="text" name="mail" placeholder="E-mail"
			<?php if (isset($_GET['mail'])) 
			{
				echo 'value="'.$_GET['mail'].'"';
			} ?>>
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat password">
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</p>
	<p class="result">Already have an account? <a class="links" href="login.php">Login</a></p>
</div>
</body>
</html>