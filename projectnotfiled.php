<?php

include ("header.php");
include ("connect.php");

if ($logged[username]) {

	echo "<h1>Project Info</h1><br />";

$projectid = $_GET['projectid'];
$result = mysql_query("select * from snippets where projectid = ''");
	echo "<table class=\"stripeMe\">
		  <tr class=\"searchheader\">
		  <th>Title</th>
		  <th>Language</th>
		  <th>Tags</th>
		  </tr>";
while($r=mysql_fetch_array($result))
{	
 
	$title=$r["title"];
	$id=$r["id"];
	$language=$r["type"];
	$tags=$r["tags"];
   
   echo "<tr>
		 <td><a href='display.php?id=$id'>$title</a></td>
		 <td><b>$language</b></td>
		 <td>$tags</td>
		 </tr>";



}
echo "</table>";

}else{

echo loginStatus_out();

}

include ("footer.php");
?>
