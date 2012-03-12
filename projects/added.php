<?php
include ("../connect.php");

// Email files
include("../includes/phpmailer/class.phpmailer.php");
include("../includes/phpmailer/class.smtp.php");
	
$name = $_POST[name];
$creatorid = $logged[id];
$group = $logged[group];

$inviter = "";

mysql_query("INSERT INTO projects (name, creatorid) VALUES('$name', '$creatorid') ") or die(mysql_error());  


$membersstring = $_POST[members];

// Clean up the input
$membersstring = str_replace(" ", "", $membersstring);
$membersstring = str_replace(";", ",", $membersstring);

$membersarray = explode(",", $membersstring);


// Yey!! It's working
foreach ($membersarray as &$email) {
	
	echo "<br />$email <br />";

	$result = mysql_query("SELECT * FROM users WHERE email='$email'");
	
	if ($row = mysql_fetch_array($result)) {
		echo $row['email'] . " Yep that's " . $row['name'];
		echo "<br />"; 
	} else {
		echo "$email is not registered... let's email you!";
	
	$subject="$logged[name] has Shared Code with You.";
	$bodyHTML="Hey,<br /><br />$logged[name] wants to share code snippets with you relating the project $name. All you have to do to view, edit and contribute to the project is follow the link below and sign up;<br /><br /><a href=\"http://snptwpt.com/register.php?email=$email\">http://snptwpt.com/register.php?email=$email</a><br /><br />Thanks,<br /><br />The Snippet Whippet Team<br /><br />Fast and Lean Code Snippet Management";
	$bodyTest="Hey,/n/n$logged[name] wants to share code snippets with you relating the project $name. All you have to do to view, edit and contribute to the project is follow the link below and sign up;/n /n http://snptwpt.com/register.php?email=$email/n /nThanks,/n /nThe Snippet Whippet Team/n /nFast and Lean Code Snippet Management";
	
	$mail=new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port 
	
	$mail->Username   = "info@snippetwhippet.com";  // GMAIL username
	$mail->Password   = "lgqah5an4onWah";            // GMAIL password
	
	$mail->From       = "info@snippetwhippet.com";
	$mail->FromName   = "Snippet Whippet Team";
	$mail->Subject    = $subject;
	$mail->Body       = $bodyHTML;                  //HTML Body
	$mail->AltBody    = $bodyText; //Text Body
	
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->AddAddress("$email","Potential User");
	$mail->AddReplyTo("info@snippetwhippet.com","Snippet Whippet Team");
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}
		
		

/*
echo '\nSending Update Email\n';

$mail = new PHPMailer();  // Instantiate your new class
$mail->IsSMTP();          // set mailer to use SMTP
$mail->SMTPAuth = true;   // turn on SMTP authentication
$mail->Host = 'smtp.gmail.com'; // specify main and backup server
$mail->SMTPSecure= 'ssl'; //  Used instead of TLS when only POP mail is selected
$mail->Port = 465;        //  Used instead of 587 when only POP mail is selected

$mail->Username = 'info@snippetwhippet.com';  // SMTP username, you could use your google apps address too.
$mail->Password = 'lgqah5an4onWah'; // SMTP password

$mail->From = 'info@snippetwhippet.com'; //Aparently must be the same as the UserName
$mail->FromName = 'Snippet Whippet Team';
$mail->Subject = 'Shared Code from';
$mail->Body = 'You have been invited to share  code snippets relating to $name Project. In the future youll be able to access it with a link...';


$mail->AddT0($email, 'name?');


if(!$mail->Send())
{
  echo "There was an error sending the message:" . $mail->ErrorInfo;
  exit;
}
echo "DoneÉ\n";
*/



	}
}

//unset($email);




//header("Location:../");

//include ("../header.php");

echo "Your project has been stored in the database!";

include ("../footer.php");
?>