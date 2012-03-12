<?php

include "header.php";
include "connect.php";
include("functions.php");

if (!$logged[username]) {

echo loginStatus_out();

}else{
?>
<h1>Projects</h1>
<br /><div class="formbg"><a href='projectnotfiled.php'>Snippets in no project</a></div><br />


<?php
$result = mysql_query("select * from projects");

while($row=mysql_fetch_array($result))
{	  

	echo "<a href='projectinfo.php?projectid=".$row['id']."'>". $row['name'] ."</a>";
	echo " - <a href='deleteproject.php?projectid=".$row['id']."'>"."Delete"."</a><br />";
}

?>
<br /><br />
<h1>New Project</h1><br />
<form action="insertproject.php" method="post">
	<div class="formbg">
<b>Name</b><br /><input name="name" id="name" type="text" />
</div><br />
<div class="formbg">
<input name="" type="submit" value="Submit"/>
</div>
</form>


<?php

}

include "footer.php";

?>
