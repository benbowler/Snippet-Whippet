<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Snippet Whippet - Fast and Lean Code Snippet Management</title>


<link href="http://snippetwhippet.com/alpha/style.css" rel="stylesheet" type="text/css" /><!-- UPDATE ON LAUNCH-->
<script type="text/javascript" src="includes/js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
	   $(".stripeMe tr").mouseover(function(){$(this).addClass("over");}).mouseout(function(){$(this).removeClass("over");});
	   $(".stripeMe tr:even").addClass("alt");
	 });
    </script>

<script type="text/javascript">
function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  }
  else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

function replaceSelection (input, replaceString) {
	if (input.setSelectionRange) {
		var selectionStart = input.selectionStart;
		var selectionEnd = input.selectionEnd;
		input.value = input.value.substring(0, selectionStart)+ replaceString + input.value.substring(selectionEnd);
    
		if (selectionStart != selectionEnd){ 
			setSelectionRange(input, selectionStart, selectionStart + 	replaceString.length);
		}else{
			setSelectionRange(input, selectionStart + replaceString.length, selectionStart + replaceString.length);
		}

	}else if (document.selection) {
		var range = document.selection.createRange();

		if (range.parentElement() == input) {
			var isCollapsed = range.text == '';
			range.text = replaceString;

			 if (!isCollapsed)  {
				range.moveStart('character', -replaceString.length);
				range.select();
			}
		}
	}
}


function catchTab(item,e){
	if(navigator.userAgent.match("Gecko")){
		c=e.which;
	}else{
		c=e.keyCode;
	}
	if(c==9){
		replaceSelection(item,String.fromCharCode(9));
		setTimeout("document.getElementById('"+item.id+"').focus();",0);	
		return false;
	}
		    
}
</script>
</head>

<body>
	<div id="headercontainer">
		<div id="header">
		
			<h2 id="title"><a href="http://snippetwhippet.com/alpha" alt="Snippet Whippet - Fast and Lean Code Snippet Management"><img src="http://snippetwhippet.com/alpha/img/swlogo.gif" alt="Snippet Whippet - Fast and Lean Code Snippet Management" /></a><!--ANOTHER NON RELATIVE VALUE TO BE CHANGED. Oh, I'm SO sorry, sir. Actually this was my doing, no fault of your own, it's mine to update...--></h2>
		
			<ul id="accountcontrols" class="menu whitelinks">
				<li><a href="logout.php"><strong>[Logout]</strong></a></li>
				<li><a href="settings.php"><strong>[Settings]</strong></a></li>
			</ul>

		</div>
	</div>
	<div id="container">
	
	<dl class="headerblock title">
		<dt>
			<ul id="navigation" class="menu"><strong>
				<li><a href="http://snippetwhippet.com/alpha">Dashboard</a></li>
				<li><a href="http://snippetwhippet.com/alpha/snippets">Snippets</a></li>
				<li><a href="http://snippetwhippet.com/alpha/projects">Projects</a></li>
				<li><a href="http://snippetwhippet.com/alpha/teams">Teams</a></li></strong>
			</ul>
		</dt>
		<dd><strong><a href="snippets/add.php">[New Snippet]</a> <a href="projects/add.php">[New Project]</a></strong>
		</dd>
	</dl>
	
	<div id="content">