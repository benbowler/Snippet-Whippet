<?php

include ("../connect.php");
include ("../header.php");

// Is this effective
$id = $_GET['projectid'];
if (is_numeric ($id)) {
	$result = mysql_query("SELECT * FROM projects WHERE id = $id")
    or die(mysql_error());
	$row = mysql_fetch_array($result );
} else {
	echo "Are you trying to hack me? For shame!";
}
?>

<h1>New Project</h1><br />
<form action="edited.php?id=<?php echo $id; ?>" method="post">
	<div class="formbg">
<b>Name</b><br /><input name="name" id="name" type="text" value="<?php echo $row['name'] ?>" />
</div><br />
<div class="formbg">
<input name="" type="submit" value="Submit"/>
</div>
</form>

<?php
include ("../footer.php");
?>
