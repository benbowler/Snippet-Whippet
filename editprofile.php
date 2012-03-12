<?php
include ("connect.php");
include ("header.php");

if ($logged[username]) {

 function check_email_address($email) {
 // First, we check that there's one @ symbol, and that the lengths are right
 if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
 // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
 return false;
 }
 // Split it into sections to make life easier
 $email_array = explode("@", $email);
 $local_array = explode(".", $email_array[0]);
 for ($i = 0; $i < sizeof($local_array); $i++) {
 if (!ereg("^(([A-Za-z0-9!$%&'*+/=?^_`{|}~-][A-Za-z0-9!$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
 return false;
 }
 }
 if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
 $domain_array = explode(".", $email_array[1]);
 if (sizeof($domain_array) < 2) {
 return false; // Not enough parts to domain
 }
 for ($i = 0; $i < sizeof($domain_array); $i++) {
 if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
 return false;
 }
 }
 }
 return true;
 }

?>
<h2>Edit Profile</h2>

<?php
if ($_GET[username] == $logged['username']) {

if ($_GET[action] == 'form') {

$pq = mysql_query("SELECT * FROM users WHERE username = '$_GET[username]'");
$pr = mysql_fetch_array($pq);

?>

<form method="POST" action="editprofile.php?username=<? echo $_GET[username]; ?>&amp;action=process">

<br /><b>Email</b><br /> <input type="text" name="email" value="<? echo $pr[email]; ?>"><br /><br />
<br />
<input type="submit" name="submit" value="Update email address">




</form>

<?php
}elseif ($_GET[action] == 'process') {

$email = addslashes($_POST[email]);
if (!check_email_address($email)) {
echo $email . ' is not a valid email address.';
exit();
}


mysql_query("UPDATE users SET email = '$email' WHERE username = '$_GET[username]'");

?>

<b>Email address Updated</b>
<br />

<a href="index.php">Home</a>




<?

}

}else {
?>
<b>Error! You are not logged in as the user specified.</b>
<?
}
?>
<?php 

}else{    
	echo loginStatus_out();
 

}

include ("footer.php");
?>
