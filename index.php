<?php

include ("connect.php");
include ("header.php");

include_once ('includes/highlighter/geshi.php');

// snippets with a project to go home to at night

$projects = mysql_query("SELECT * FROM projects WHERE creatorid='$logged[id]'") or die(mysql_error());

while($projectrow = mysql_fetch_array($projects)) {

	echo "<dl class=\"headerblock project whitelinks\"><dt><strong>" . $projectrow['name'] . "</strong></dt><dd>";

	$projectid = $projectrow['id'];
	
	echo "<a href=\"projects/edit.php?projectid=" . $projectid . "\"><strong>[Edit]</strong></a> <a href=\"projects/delete.php?projectid=" . $projectid . "\"><strong>[Delete]</strong></a></dd></dl>";
	
	$snippets = mysql_query("select * from snippets WHERE projectid = $projectid");
	
	while($snippetsrow=mysql_fetch_array($snippets))
	{	
		$id=$snippetsrow['id'];
	  $title=$snippetsrow["title"];
	  $content=$snippetsrow["content"];
	  $language=$snippetsrow["type"];
	  $tags=$snippetsrow["tags"];
	  $creator=$snippetsrow["creator"];
	  
	  $geshi =& new GeSHi($content, $language);
	  $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
	  $geshi->set_overall_class('codedisplayblock');
	  $geshi->set_line_style('margin-left: 2em;');
	  $content = $geshi->parse_code();
	  
	   echo "<dl class=\"snippet headerblock\"><dt><strong>$title</strong> ($language)</dt><dd><a href=\"snippets/edit.php?id=$id\"><strong>[Edit]</strong></a> <a href=\"snippets/delete.php?id=$id\"><strong>[Delete]</strong></a></dd></dl>
		<div class=\"snippet\"><strong>Tags: </strong>$tags<br /> Creator: $creator<br />
	   <br /> $content</div>";

	}

}


// Orphaned Snippets

	echo "<dl class=\"project headerblock\"><dt><strong>No Project</strong></dt><dd> </dd></dl>";

	$orphanedsnippets = mysql_query("select * from snippets WHERE projectid=0&&creatorid=$logged[id]");
	
	while($snippetsrow=mysql_fetch_array($orphanedsnippets))
	{	
		$id=$snippetsrow['id'];
	  $title=$snippetsrow["title"];
	  $content=$snippetsrow["content"];
	  $language=$snippetsrow["type"];
	  $tags=$snippetsrow["tags"];
	  $creator=$snippetsrow["creator"];
	  
	  $geshi =& new GeSHi($content, $language);
	  $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
	  $geshi->set_overall_class('codedisplayblock');
	  $geshi->set_line_style('margin-left: 2em;');
	  $content = $geshi->parse_code();
	  
	   echo "<dl class=\"snippet headerblock\"><dt>$title</dt><dd><a href=\"snippets/edit.php?id=$id\">[Edit]</a> <a href=\"snippets/delete.php?id=$id\">[Delete]</a></dd></dl>
		<div class=\"snippet\"><strong>$language</strong><br /> Tags: $tags<br /> Creator: $creator<br />
	   <br /> $content</div>";


}

include("footer.php");
?>