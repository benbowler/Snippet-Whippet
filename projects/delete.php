<?php

	include ("../connect.php");
    
    $id = $_GET['projectid'];
    
    mysql_query("DELETE FROM projects WHERE id='$id'")
        or die(mysql_error());
        
	header("Location:../");

	include ("../header.php");
    
    echo "Project Deleted";

	include ("../footer.php");

?>
