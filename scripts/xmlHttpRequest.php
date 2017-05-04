<?php
// change the 4 variables below
$yourName = 'Stolenegg';
$yourEmail = 'dan@stolenegg.com';
$yourSubject = 'Contact from Web Site';
$referringPage = 'http://www.stolenegg.com/contact.php';

// no need to change the rest unless you want to. You could add more error checking but I'm gonna do that later in the official release

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

echo '<resultset>';

function cleanPosUrl ($str) {
$nStr = $str;
$nStr = str_replace("**am**","&",$nStr);
$nStr = str_replace("**pl**","+",$nStr);
$nStr = str_replace("**eq**","=",$nStr);
return stripslashes($nStr);
}
	if ( $_GET['contact'] == true && $_GET['xml'] == true && isset($_POST['message']) ) {
	$to = $yourName;
	$subject = 'AJAX Mail: '.cleanPosUrl($yourSubject);
	$message = cleanPosUrl($_POST['message']);
	$headers = "From: ".cleanPosUrl($_POST['fullname'])." <".cleanPosUrl($_POST['email']).">\r\n";
	$headers .= 'To: '.$yourName.' <'.$yourEmail.'>'."\r\n";
	$mailit = mail($to,$subject,$message,$headers);
		
		if ( @$mailit )
		{ $posStatus = 'OK'; $posConfirmation = 'Success! Your e-mail has been sent.'; }
		else
		{ $posStatus = 'NOTOK'; $posConfirmation = 'Your e-mail could not be sent. Please try back at another time.'; }
		
		/*
		if ( $_POST['selfCC'] == 'send' )
		{
		$ccEmail = cleanPosUrl($_POST['posEmail']);
		@mail($ccEmail,$subject,$message,"From: Yourself <".$ccEmail.">\r\nTo: Yourself");
		}
		*/
	
	echo '
		<status>'.$posStatus.'</status>
		<confirmation>'.$posConfirmation.'</confirmation>
		<regarding>'.cleanPosUrl($_POST['posRegard']).'</regarding>
		';
	}
echo'	</resultset>';

?>