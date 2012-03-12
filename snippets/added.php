<?php
include ("../connect.php");

$title = $_POST[title];
$content = $_POST[content];
$type = $_POST[type];
$tags = $_POST[tags];
$project = $_POST[projectid];
$creator = $logged[username];
$creatorid = $logged[id];
$title = htmlentities($title);
$type = htmlentities($type);
$tags = htmlentities($tags);


mysql_query("INSERT INTO snippets 
(title, content, type, tags, projectid, creator, creatorid) VALUES('$title', '$content', '$type', '$tags', '$project', '$creator', '$creatorid') ") 
or die(mysql_error());

header("Location:../");

include ("../header.php");

echo "Your snippet has been stored in the database!";

include ("../footer.php");
?>
