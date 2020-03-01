<?php

//this will be the message sent for cronjob
$to      = '629860@student.inholland.nl';
$subject = 'JUST AN CRONJOB EMAIL';
$message = 'THIS IS A SPAM MAIL';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>