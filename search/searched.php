
<?php
include ("../header.php");
include ("../connect.php");

if (!$logged[username]) {

echo loginStatus_out();

}else{

$searchterm = $_POST[searchterm];
$language = $_POST[type];

echo "<h1>Search Results</h1><br />";

if(empty($language)) {
	$result = mysql_query("select * from snippets WHERE tags LIKE '%$searchterm%'&&creatorid=$logged[id]");
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

}

else{

$result = mysql_query("select * from snippets WHERE tags LIKE '%$searchterm%' AND type = '$language'");
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
}
}
include ("../footer.php");

?>
