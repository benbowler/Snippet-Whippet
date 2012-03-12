<?php

include ("../connect.php");
    
    $id = $_GET['id'];
    
    mysql_query("DELETE FROM snippets WHERE id='$id'")
        or die(mysql_error());
    
    header("Location:../");

	include ("../header.php");
    
    echo "Snippet Deleted";

include ("../footer.php");

?>
