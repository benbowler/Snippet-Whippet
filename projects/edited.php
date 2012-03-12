<?php
include ("../connect.php");

$id = $_GET['id'];
$name = $_POST[name];

mysql_query("UPDATE projects SET name='$name' WHERE id='$id'") 
or die(mysql_error()); 

header("Location:../");

include ("../header.php");

echo "Your project has been updated in the database!";

include ("../footer.php");

?>
