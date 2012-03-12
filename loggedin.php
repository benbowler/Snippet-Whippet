<?php
include ("connect.php");

$email = stripslashes($_POST['email']);
$password = md5(stripslashes($_POST['password']));

$check = mysql_query("SELECT * FROM `users` WHERE `email` = '$email'") or die(mysql_error());
$checkq = mysql_fetch_array($check);

if ($email == $checkq['email'] && $password == $checkq['password']) {

	if ($checkq['enabled'] == '0') {
	
		echo "Your email appears not to be confirmed. Check your email for a link to sort this.<br /><br />Need help or frustrated? contact us direct";
	
	} else{
	

////////////// Add confirmed check

	setcookie("user_id", $checkq['id'],time()+(60*60*24*5), "/", ""); 
	setcookie("user_pass", $checkq['password'],time()+(60*60*24*5), "/", ""); 
	setcookie("email", $checkq['email'],time()+(60*60*24*5), "/", ""); 

	include ("header.php");
	
	echo ("<meta http-equiv=\"Refresh\" content=\"0; URL=index.php\"/>"); 
	echo "Please wait";
	
	}

} else {

	include ("header.php");

	echo "Sorry, your email and password don't appear to match.";
	
	echo $password;
	echo "<br />";
	echo $email;
}

	include ("footer.php");
?>