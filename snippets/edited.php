<?php
include ("../connect.php");

$id = $_GET['id'];
$title = $_POST[title];
$content = $_POST[content];
$type = $_POST[type];
$tags = $_POST[tags];
$project = $_POST[projectid];
$title = htmlentities($title);
$type = htmlentities($type);
$tags = htmlentities($tags);

mysql_query("UPDATE snippets SET title='$title', content='$content', type='$type', tags='$tags', projectid='$project' WHERE id='$id'") 
or die(mysql_error()); 

header("Location:../");

include ("../header.php");

echo "Your snippets has been updated in the database!";

include ("../footer.php");

?>
