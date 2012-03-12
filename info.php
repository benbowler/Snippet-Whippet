<?php

include ("connect.php");
include ("header.php");

if (!$logged[username]) {

echo loginStatus_out();

}else{

$result = mysql_query("SELECT count(*) FROM snippets");
$count = mysql_result($result,0,0);
echo "There are $count snippets in the database";

?>
<br /><br />
<a href="viewall.php"><b>View all Snippets on one page</b></a> (Use with caution)
<?php
}
include ("footer.php");

?>
