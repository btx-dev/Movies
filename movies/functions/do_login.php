<?php
/* 	
Login Function.
Checks the credentials provided.
*/
//	Access control. 
if (isset($_POST['login-submit'])) {

	require 'dbconn.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['password'];
	// Check user credentials for empty fields.
	if (empty($mailuid) || empty($password)) 
	{
		$params = 'emptyfields&uid='.$mailuid;
		errorRedirect($params);
	}
	// Case fields are not empty.
	else 
	{
		$sql = "SELECT * FROM users WHERE Username=? OR Email=?";
		$stmt = mysqli_stmt_init($dbconn);
		// Check the connection to database.
		if (!mysqli_stmt_prepare($stmt, $sql)) 
		{
			errorRedirect('sqlerror');
		}
		// Case no connection error.
		else 
		{
			// Query the database for the credentials provided.
			mysqli_stmt_bind_param($stmt,"ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			// Check if user exists.
			if ($row = mysqli_fetch_assoc($result)) 
			{
				// Check if the password is correct. Redirect with error.
				$password_check = password_verify($password, $row['Password']);
				if ($password_check == false) 
				{
					$params = 'wrongpwd&uid='.$mailuid;
					errorRedirect($params);
				}
				// Case password is corerct, start the session. Redirect to homepage.
				else if ($password_check == true) 
				{
					session_start();
					$_SESSION['userid'] = $row['ID'];
					$_SESSION['username'] = $row['Username'];

					header('Location: ../index.php?login=success'); 
					exit();
				}
			}
			// Case no user or email found. Redirect with error.
			else 
			{
				errorRedirect("nouser");
			}
		}
	}
}
//Access denied.
else 
{ 
	header('Location: ../index.php'); 
	exit();
}
// Redirects back to login.php if there is an error in user input. Sets error arguments.
function errorRedirect($errorType)
{
	header('Location: ../login.php?error='.$errorType); 
	exit();
}
?>