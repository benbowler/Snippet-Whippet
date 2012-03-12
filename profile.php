<?php

include ("header.php");
include ("connect.php");

if ($logged[username]) {

	echo "<h1>Profile</h1><br />";

$userid = $_GET['userid'];
$result = mysql_query("select * from users where id = '$userid'");

while($r=mysql_fetch_array($result))
{	
  
   $username=$r["username"];
   $email=$r["email"];
   $regdate=$r["regdate"];
   $rank=$r["rank"];

   echo "<h2>$username</h2>$email <br />Registration Date - $regdate <br />Admin? - $rank";

if ($logged['rank']>0) {
?>
<br /><br />
<a href="rankchange.php?userid=<?php echo $userid; ?>">Upgrade/ Downgrade Rank</a>

<?php

}

}


}else{

echo loginStatus_out();

}

include ("footer.php");
?>
