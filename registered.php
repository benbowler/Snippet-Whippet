<?
include ("connect.php");
include ("header.php");

// Email files
include("includes/phpmailer/class.phpmailer.php");
include("includes/phpmailer/class.smtp.php");

function check_email_address($email) {
	// First, we check that there's one @ symbol, and that the lengths are right
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
	// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
	return false;
	}

	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {	
		if (!ereg("^(([A-Za-z0-9!$%&'*+/=?^_`{|}~-][A-Za-z0-9!$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
 			return false;
		}
	}
	
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
			return false; // Not enough parts to domain
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
				return false;
			}
		}
	}
	return true;
}

$name = stripslashes($_POST[name]);
$name = htmlentities($name);

$email = stripslashes($_POST[email]);
$email = htmlentities($email);

$password = md5(stripslashes($_POST[password]));
$password = htmlentities($password);

$passagain = md5(stripslashes($_POST[passagain]));
$passagain = htmlentities($passagain);

// Chack for blank fields
if ($_POST[name] == '' || $_POST[password] == '' || $_POST[passagain] == '' || $_POST[email] == '') {
	echo "<strong>Error. A field was left blank.</strong>";
	include ("footer.php");
	exit ();
}

// Check for password mismatch
if($password != $passagain){
	echo "The passwords did not match";
	include ("footer.php");
	exit();
}

if (!check_email_address($email)) {
	echo $email . ' is not a valid email address.';
	include ("footer.php");
	exit();
}

// Check if email has been used before
$checkemail = mysql_query("SELECT email from users WHERE email='$email'") or die(mysql_error());
$checkemail = mysql_fetch_array($checkemail);

if (isset($checkemail['email'])) {
	echo $email . ' is currently singed up with another account. Have you forgotten your password. Oh tough atm theres no way to change it. Mail me!';
	include ("footer.php");
	exit();
}



function createRandomKey() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    
    while ($i <= 6) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}



// Create the confirmation ID
$confirmid = createRandomKey();

echo "Confirm id $confirmid";


	// Now email the confirmation
	$subject="Confirm your Snippet Whippet Account";
	$bodyHTML="Hi,<br /><br />Just now you signed up for a Snippet Whippet account. Just one step to go and you can get manageing your code.<br /><br /><a href=\"http://snptwpt.com/confirm.php?id=$confirmid\">http://snptwpt.com/confirm.php?id=$confirmid</a><br /><br />Good luck,<br /><br />The Snippet Whippet Team<br /><br />Fast and Lean Code Snippet Management";
	$bodyTest="Hi, /n /nJust now you signed up for a Snippet Whippet account. Just one step to go and you can get manageing your code./n /n http://snptwpt.com/confirm.php?id=$confirmid/n /nGood luck,/n /nThe Snippet Whippet Team/n /nFast and Lean Code Snippet Management";
	
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
		
		


// If all is good lets get it into the database
mysql_query("INSERT INTO users (name, password, email, enabled, confirmid, plan) VALUES ('$name','$password','$email', '0', '$confirmid', '0')") or die(mysql_error());


?>

<b>Registration Successful!</b>
<br />
Please note: Passwords are case sensitive<br />

Check your email, confirm your account and login.

<a href="login.php">[Login]</a>

<?php include ("footer.php"); ?>
