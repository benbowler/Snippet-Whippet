<?php

function loginStatus_out()
	{	
	echo "<h2>Please Wait</h2>";
	echo ("<meta http-equiv=\"Refresh\" content=\"0; URL=login.php?action=form\"/>");
	}

function userExists_check($username) 
	{
  	$result = mysql_query("SELECT * FROM users WHERE username='".$username."'") or die(mysql_error());
   		if($row = mysql_fetch_array($result)) {
      		return 1;
   		}
   	return 0;
	}

?>
