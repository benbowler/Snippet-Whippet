<?php
include "connect.php";
include "header.php";
include "functions.php";

$userid = $_GET['userid'];

if ($logged[username]) {

if ($logged[rank]>0) {


$result = mysql_query("select rank from users where id = '$userid'");
$r=mysql_fetch_array($result);
if($r['rank']==1){
$newrank = "0";
}elseif($r['rank']==0){
$newrank = "1";
}else{
echo "You cannot change this rank";
include "footer.php";
exit();
}

$result = mysql_query("UPDATE users SET rank='$newrank' WHERE id='$userid'") 
or die(mysql_error()); 

echo "This user now has a rank of $newrank";

}else{

echo "You must be an admin to access this page";

}

}else{

echo loginStatus_out();

}

include "footer.php";

?>
