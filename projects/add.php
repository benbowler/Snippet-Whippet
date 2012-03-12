<?php
	include ("../header.php");
	include ("../connect.php");
?>
<h1>New Project</h1><br />
<form action="added.php" method="post">
	<div class="formbg">
<b>Name</b><br /><input name="name" id="name" type="text" />
</div><br />



	<div class="formbg">
		<h2>Share your Project</h2>or leave this blank not to share it<br />
		<textarea name="members" id="members">Emails</textarea>
	</div><br />


<div class="formbg">
<input name="" type="submit" value="Submit"/>
</div>
</form>


<?php
	include ("../footer.php");
?>
