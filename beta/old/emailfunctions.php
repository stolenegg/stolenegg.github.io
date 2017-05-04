<?php

# Sends an e-mail
function sendEmail($from, $to, $cc, $bcc, $subject, $messagetxt)
{

    $usertostr = $to;
    $userccstr = $cc;
    $userbccstr = $bcc;
    $replyto = $from;
    

    $headers = "From: $from\n" .
               "Reply-To: $replyto\n" .
               "CC: $userccstr\n" .
               "BCC: $userbccstr\n";

    $message = "$messagetxt\n\n";

    return mail($usertostr, $subject, $message, $headers, "-fadmin-linux@boxingorange.com");
}
?>