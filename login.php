<?php 
	include ("header.php");
	include ("connect.php");
?>

<form method="POST" action="loggedin.php">
<strong>Email</strong><br /> <input type="text" name="email" /><br /><br />
<strong>Password</strong><br /> <input type="password" name="password" /><br />
<br />
<input type="submit" name="submit" value="Login!"><br />
</form>
<br />
<a href="register.php">[Register]</a>

<?php
	include ("footer.php");
?>