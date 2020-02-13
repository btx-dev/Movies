<?php
/* 	
Logout function.
Logs the user out and destroys the session.
*/
session_start();
session_unset();
session_destroy();

header('Location: /movies/index.php?logout=success'); 
exit();
?>