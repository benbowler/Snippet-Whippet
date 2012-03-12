<?
	include ("connect.php");
	include ("header.php");
?>

<form method="post" action="registered.php">

<br />

<strong>Name</strong><br /><input type="text" name="name"><br /><br />
<strong>Email</strong><br /><input type="text" name="email"><br /><br />
<strong>Password</strong><br /><input type="password" name="password"><br /><br />
<strong>Re-Type Password</strong><br /><input type="password" name="passagain"><br /><br />

<input type="submit" name="submit" value="Register">

</form>

<?php
	include ("footer.php");
?>