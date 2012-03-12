<?php
include ("connect.php");
include ("header.php");
?>
<div id="error" style="width: 100%; text-align: center">
<img src="img/whippet.jpg" style="width: 50%" alt="Uhoh :( Snippet Whippet ERROR" /><br /><br />
<?php
echo "ERROR: $_GET[error]<br /><br />";
echo "There appears to be a problem. Something I did no doubt. <a href=\"contact form\">Let us know!</a></div>";

include ("footer.php");
?>