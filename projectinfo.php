<?php

include ("header.php");
include ("connect.php");

if ($logged[username]) {

	echo "<h1>Project Info</h1><br />";

$projectid = $_GET['projectid'];
$result = mysql_query("select * from snippets where projectid = '$projectid'");

while($r=mysql_fetch_array($result))
{	
  
  $id=$r["id"];
   $title=$r["title"];
   $type=$r["type"];
   
   echo "<a href='display.php?id=" . $id . "'>" . $title . "</a> - " . $type . "<br />";

if ($logged['rank']>0) {
?>


<?php

}

}


}else{

echo loginStatus_out();

}

include ("footer.php");
?>
