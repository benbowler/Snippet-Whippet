<?php

include ("../connect.php");
include ("../header.php");

?>
<div class="h1title"><h1>Insert</h1></div><br />
<form action="added.php" method="post">
	<div class="formbg">
<b>Language</b>
<em class="smalltext">You must specify the language if you want syntax highlighting</em><br />
<select name="type" id="type">
		<option value="Other" style="font-weight: bold">Other Language</option>
		<option value="ABAP">ABAP</option>
		<option value="Actionscript">ActionScript</option>
		<option value="Ada">Ada</option>

		<option value="Apache">Apache Log File</option>
		<option value="Applescript">AppleScript</option>
		<option value="ASM">ASM (NASM based)</option>
		<option value="ASP">ASP</option>
		<option value="AutoIT">AutoIT</option>
		<option value="Bash">Bash</option>

		<option value="Basic4GL">Basic4GL</option>
		<option value="BlitzBasic">BlitzBasic</option>
		<option value="BNF">Backus-Naur form</option>
		<option value="C">C</option>
		<option value="C_Mac">C for Macs</option>
		<option value="caddcl">CAD DCL</option>

		<option value="cadlisp">CAD Lisp</option>
		<option value="cfdg">CFDG</option>
		<option value="cfm">ColdFusion</option>
		<option value="cpp">C++</option>
		<option value="csharp">C#</option>

		<option value="css">CSS</option>
		<option value="d">D</option>
		<option value="delphi">Delphi</option>
		<option value="diff">Diff</option>
		<option value="div">DIV</option>
		<option value="dos">DOS</option>

		<option value="dot">GraphViz</option>
		<option value="eiffel">Eiffel</option>
		<option value="fortran">Fortran</option>
		<option value="freebasic">FreeBasic</option>
		<option value="genero">Genero (4GL)</option>
		<option value="glsl">glSlang</option>

		<option value="gml">GML</option>
		<option value="groovy">Groovy</option>
		<option value="haskell">Haskell</option>
		<option value="html4strict">HTML (4.0.1)</option>
		<option value="idl">Uno IDL</option>
		<option value="inno">Inno</option>

		<option value="io">IO</option>
		<option value="java">Java</option>
		<option value="javascript">Javascript</option>
		<option value="latex">LaTeX</option>
		<option value="lisp">Lisp</option>

		<option value="lua">Lua</option>
		<option value="matlab">Matlab</option>
		<option value="mirc">mIRC</option>
		<option value="mpasm">MPASM</option>
		<option value="mysql">MySQL</option>
		<option value="nsis">NullSoft Installer</option>

		<option value="objc">Objective C</option>
		<option value="ocaml">OCaml</option>
		<option value="oobas">Openoffice.org BASIC</option>
		<option value="oracle8">Oracle 8</option>
		<option value="pascal">Pascal</option>

		<option value="per">Per (4GL)</option>
		<option value="perl">Perl</option>
		<option value="PHP">PHP</option>
		<option value="plsql">PL/SQL</option>
		<option value="python">Python</option>

		<option value="qbasic">QBasic/QuickBASIC</option>
		<option value="rails">Rails</option>
		<option value="reg">Windows Registry</option>
		<option value="robots">robots.txt</option>
		<option value="ruby">Ruby</option>
		<option value="sas">SAS</option>

		<option value="scheme">Scheme</option>
		<option value="sdlbasic">SDLBasic</option>
		<option value="smalltalk">Smalltalk</option>
		<option value="smarty">Smarty</option>
		<option value="sql">SQL</option>
		<option value="tcl">TCL</option>

		<option value="text">Plain text</option>
		<option value="thinbasic">thinBasic</option>
		<option value="tsql">T-SQL</option>
		<option value="vb">VisualBasic</option>
		<option value="vbnet">VB.NET</option>
		<option value="vhdl">VHDL</option>

		<option value="visualfoxpro">VisualFoxPro</option>
		<option value="winbatch">Winbatch</option>
		<option value="xml">XML</option>
		<option value="xpp">X++</option>
		<option value="z80">Z80 Assembler</option>

</select>
</div><br />
<div class="formbg">
<b>Title</b><br /><input name="title" id="title" type="text" /></div><br />
<div class="formbg">
<b>Content</b><br /><textarea name="content" rows="18" id="formcontent" onkeydown="return catchTab(this,event)"></textarea></div><br />
<div class="formbg">
<b>Tags</b> <em class="smalltext">Separated by spaces. Make them descriptive, they're used for searching</em><br /><input name="tags" id="tags" type="text" /></div><br />
<div class="formbg">
<b>Project</b><br /><select id="projectid" name="projectid">
<?php
$result = mysql_query("SELECT * FROM projects WHERE creatorid = $logged[id]");
print_r($results);
while($row=mysql_fetch_array($result))
{	
  
	echo "<option value = \"" . $row['id'] . "\" id=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
}


?>
<option value="" id="" style="font-weight: bold">Don't add to project</option>
</select></div><br />
<div class="formbg">
<input name="" type="submit" value="Submit" class="submitbutton"/></div>
</form>



<?php 

include ("../footer.php");

?>
