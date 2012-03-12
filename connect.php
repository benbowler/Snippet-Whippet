<?php

$connect = mysql_connect('127.0.0.1', 'snippetwhippet', 'GUPXMjYv4jtuyb3J');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("snippetwhippet") or die(mysql_error());

$logged = mysql_query("SELECT * from users WHERE id='$_COOKIE[user_id]'") or die(mysql_error());
$logged = mysql_fetch_array($logged);

// Authentication for every page...
if (!isset($_COOKIE['user_id']) || $_COOKIE['user_pass'] != $logged['password']){

	// Exclude this from the LOG*, REGISTER, CONFIRM pages to prevent looping
	if (strpos($_SERVER['REQUEST_URI'], 'log') == false && strpos($_SERVER['REQUEST_URI'], 'register') == false && strpos($_SERVER['REQUEST_URI'], 'confirm') == false && strpos($_SERVER['REQUEST_URI'], 'error') == false){

		header("Location:http://snippetwhippet.com/alpha/logout.php");
	}
}

?>