<?php

include ("../connect.php");
include ("../header.php");

if (!$logged[username]) {

echo loginStatus_out();

}else{

?>

<div class="h1title"><h1>Search</h1></div><br />
<em class="smalltext">Use either or both boxes to search. If you leave them empty, you will get a list of all of your snippets</em><br /><br />
<form action="searched.php" method="post">
<div class="formbg">
<b>Language</b><br />	<select name="type" id="type">
			<option value="" style="font-weight: bold">Any Language</option>
			<option value="other">Other Language</option>
			<option value="abap">ABAP</option>
			<option value="actionscript">ActionScript</option>
			<option value="ada">Ada</option>

			<option value="apache">Apache Log File</option>
			<option value="applescript">AppleScript</option>
			<option value="asm">ASM (NASM based)</option>
			<option value="asp">ASP</option>
			<option value="autoit">AutoIT</option>
			<option value="bash">Bash</option>

			<option value="basic4gl">Basic4GL</option>
			<option value="blitzbasic">BlitzBasic</option>
			<option value="bnf">Backus-Naur form</option>
			<option value="c">C</option>
			<option value="c_mac">C for Macs</option>
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
			<option value="php">PHP</option>
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

	</select></div><br />
<div class="formbg"><b>Search term</b><br /><input name="searchterm" type="text" id="searchterm"/></div><br />
<div class="formbg">
<input name="" type="submit" value="Search" class="submitbutton"/></div>
</form>


<?php
}
include ("../footer.php");

?>
