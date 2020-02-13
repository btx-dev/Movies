<?php
/* 	
Signup function.
Inserts a new record in users table.
*/
// Access control.
if (isset($_POST['signup-submit'])) {

	require 'dbconn.php';
	// Variables initialization.
	$username = $_POST['uid'];
	$mail = $_POST['mail'];
	$password = $_POST['pwd'];
	$password_repeat = $_POST['pwd-repeat'];

	// Empty fields - error "emptyfields" - GET uid, mail.
	if (empty($username) || empty($mail) || empty($password) || empty($password_repeat)) 
	{
		$params = 'emptyfields&uid='.$username.'&mail='.$mail;
		errorRedirect($params);
	}
	// Both mail and uid validaton - error "invaliduidmail".
	elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) 
	{
		errorRedirect("invaliduidmail");
	}
	// Email validaton - error "invalidmail" - GET uid.
	elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
	{
		$params = 'invalidmail&uid='.$username;
		errorRedirect($params);
	}
	// Username validation - error "invaliduid" - GET mail.
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
	{
		$params = 'invaliduid&mail='.$mail;
		errorRedirect($params);
	}
	// Password match check - error "passwordcheck" - GET uid, mail.
	elseif ($password !== $password_repeat) 
	{
		$params = 'passwordcheck&uid='.$username.'&mail='.$mail;
		errorRedirect($params);
	}
	// Username & Email check and insert.
	else 
	{
		// Email query check - error "sqlerror".
		$sql = "SELECT Email FROM users WHERE Email=?";
		$stmt = mysqli_stmt_init($dbconn);
		if (!mysqli_stmt_prepare($stmt, $sql)) 
		{
			errorRedirect("sqlerror");
		}
		else 
		{
			mysqli_stmt_bind_param($stmt, "s", $mail);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$result_check = mysqli_stmt_num_rows($stmt);
			// Case this email already exists - error "mailtaken" - GET mail.
			if ($result_check>0) 
			{
				$params = 'mailtaken&uid='.$username;
				errorRedirect($params);
			}
		
			else 
			{
				// Username query check - error "sqlerror".
				$sql = "SELECT Username FROM users WHERE Username=?";
				$stmt = mysqli_stmt_init($dbconn);
				if (!mysqli_stmt_prepare($stmt, $sql)) 
				{
					errorRedirect("sqlerror");
				}
				// Username query execution.
				else 
				{
					mysqli_stmt_bind_param($stmt, "s", $username);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt);
					$result_check = mysqli_stmt_num_rows($stmt);
					// Case this username already exists - error "usertaken" - GET mail.
					if ($result_check>0) 
					{
						$params = 'usertaken&mail='.$mail;
						errorRedirect($params);
					}
					// Case username is unique.
					else 
					{
						$sql = "INSERT INTO users (Username, Email, Password) VALUES (?,?,?)";
						$stmt = mysqli_stmt_init($dbconn);
						// Check for sql errors.
						if (!mysqli_stmt_prepare($stmt, $sql)) 
						{
							errorRedirect("sqlerror");
						}
						// Case no sql errors hash password and insert the new user. Redirect to homepage.
						else 
						{
							$hashed_password = password_hash($password, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "sss", $username, $mail, $hashed_password);
							mysqli_stmt_execute($stmt);
							header('Location: /movies/login.php?signup=success&uid='.$username.'&mail='.$mail); 
							exit();
						}
					}
				}
			}
		}
	}
}
// Access denied.
else 
{ 
	header('Location: /movies/index.php'); 
	exit();
}
// Redirects back to signup.php if there is an error in user input. Sets error arguments.
function errorRedirect($errorType)
{
	header('Location: /movies/signup.php?error='.$errorType); 
	exit();
}

?>