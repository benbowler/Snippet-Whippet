<?php
ob_start();
include ("header.php");
include ("connect.php");
?>

<h2>You've been logged out.</h2>
<?php

	setcookie("user_id", "",time()-3600, "/", ""); 
	setcookie("user_pass", "",time()-3600, "/", ""); 
	setcookie("email", "",time()-3600, "/", ""); 

echo ("<meta http-equiv=\"Refresh\" content=\"1; URL=login.php\"/>"); 

include ("footer.php");

?>
 
