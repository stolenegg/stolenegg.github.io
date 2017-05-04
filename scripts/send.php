<?php
// Change the 4 variables below
$yourName = 'Stolenegg';
$yourEmail = 'dan@stolenegg.com';
$yourSubject = 'Contact from Web Site';
$referringPage = 'http://www.stolenegg.com/contact.php';
// No need to edit below unless you really want to. It's using a simple php mail() function. Use your own if you want
function cleanPosUrl ($str) {
return stripslashes($str);
}
	if ( isset($_POST['message']) )
	{
	$to = $yourEmail;
	$subject = $yourSubject; //.': '.$_POST['posRegard'];
	$message = cleanPosUrl($_POST['message']);
	$headers = "From: ".cleanPosUrl($_POST['fullname'])." <".$_POST['email'].">\r\n";
	$headers .= 'To: '.$yourName.' <'.$yourEmail.'>'."\r\n";
	$mailit = mail($to,$subject,$message,$headers);
		if ( @$mailit ) {
		header('Location: '.$referringPage.'?success=true');
		}
		else {
		header('Location: '.$referringPage.'?error=true');
		}
	}
?>