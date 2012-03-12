<?php

include ("header.php");
include ("connect.php");

if(!$logged[username]){

echo loginStatus_out();

}else{

include_once('includes/highlighter/geshi.php');

$id = $_GET[id];
if (is_numeric ($id)) {
?>

<script type="text/javascript">
<!--
function confirmation() {
	var answer = confirm("Delete this Snippet?")
	if (answer){
		window.location = "delete.php?id=<?php echo $id; ?>";
	}
}
//-->

</script>

<?php

$result = mysql_query("select * from snippets WHERE id = '$id'");

while($r=mysql_fetch_array($result))
{	
  $title=$r["title"];
  $content=$r["content"];
  $language=$r["type"];
  $tags=$r["tags"];
  $creator=$r["creator"];
  
  $geshi =& new GeSHi($content, $language);
  $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
  $geshi->set_overall_class('snippetsdisplayblock');
  $geshi->set_line_style('margin-left: 2em;');
  $content = $geshi->parse_snippets();
  
   echo "<h2>$title</h2><b>$language</b><br /> Tags: $tags<br /> Creator: $creator<br /><a href='edit.php?id=$id'><img src='img/editicon.gif' /></a> <a onclick='confirmation()'><img src='img/deleteicon.gif' /></a><br /> $content <br /><br />";
}

}else{

echo "Don't hack me!";

}
}

include ("footer.php");

?>
