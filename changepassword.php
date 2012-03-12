<?php
include ("connect.php");
include ("header.php");

if ($logged[name]) {
?>


<h2> Change Password - <? if ($logged[name]) {
    echo $logged[name];
}
?></h2><br />

<?php
if ($_GET[name] == $logged['name']) {
    
    if ($_GET[action] == 'form') {
        
        $pq = mysql_query("SELECT * FROM users WHERE name = '$_GET[name]'");
        $pr = mysql_fetch_array($pq);
        
        ?>
        
        <form method="POST" action="changepassword.php?name=<? echo $_GET[name]; ?>&amp;action=process">
        <b>New Password</b><br />  <input type="password" name="newpass"><br /><br />
        <b>Re-Type New Password</b><br />  <input type="password" name="newpasscheck"><br />
        <br />
        <input type="submit" name="submit" value="Change Password">
        </form>
        
        <?php
        
    } else if ($_GET[action] == 'process') {
        
        $currentpassword = md5(addslashes($_POST[current]));
        $newpassword = md5(addslashes($_POST[newpass]));
        $newpasswordcheck = md5(addslashes($_POST[newpasscheck]));
        
        if ($newpassword == $newpasswordcheck) {
            
            mysql_query("UPDATE users SET password = '$newpassword' WHERE password = '$currentpassword' AND name = '$_GET[name]'");
            
            
            ?>
            
            <b>Password changed! You will have to login again!</b>
            <br />
            <a href="<?php echo SNIPPET_INSTALLED_DIRECTORY ?>">Login Again</a>
            
            <?php
            
        } else {
            echo "<b>Error! New password fields do not match.</b>";
        }
        
    }
    
} else {
    
    ?>
    <b>Error! You are not logged in as the user specified.</b>
    <?php
}

}else{    
	echo loginStatus_out();
 

}


include ("footer.php");

?>