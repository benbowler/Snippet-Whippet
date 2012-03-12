<?php
include ("connect.php");
include ("header.php");

if ($logged[username]) {
    ?>
    
    <h2>Admin</h2>
<br />
<a href="changepassword.php?action=form&username=<?php echo $logged[username]; ?>">Change your password</a>
<br />
<a href="editprofile.php?action=form&username=<?php echo $logged[username]; ?>">Edit Profile</a><br /><br />

<?php

echo "<h2>Users</h2>";
echo "<table border='1'>";
echo "<tr> <th>ID</th> <th>Name</th> <th>Email</th> <th>Reg. Date</th> <th>Admin</th> </tr>";

$result = mysql_query("select * from users");


while($row=mysql_fetch_array($result))
{	

  

	echo "<tr><td>"; 
	echo $row['id'];
	echo "</td><td>"; 
	echo "<a href='profile.php?userid=".$row['id']."'>".$row['username']."</a>";
	echo "</td><td>"; 
	echo $row['email'];
	echo "</td><td>"; 
	echo $row['regdate'];
	echo "</td><td>"; 
	echo $row['rank'];
	echo "</td></tr>"; 


}
echo "</table>";

    

	}else{    
	echo loginStatus_out();
 

}
include ("footer.php");
?>
