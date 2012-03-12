<?php
include ("header.php");
include ("connect.php");

if (!$logged[username]) {

echo loginStatus_out();

}else{

$result = mysql_query("select * from snippets");
	while($r=mysql_fetch_array($result))
		{
		$title=$r["title"];
		$id=$r["id"];
   		$language=$r["type"];
   		$tags=$r["tags"];
   
   echo "<div class='searchresults'><a href='display.php?id=$id'>$title </a><br /><b>$language</b><br />Tags: $tags</div>";

}
}
include ("footer.php");

?>
