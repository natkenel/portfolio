<?php
$subject = "Contact Form Submission";
$to = 'nknelson@live.com'; //Recipient's E-mail

$headers = "From: i.am@nknelson.com \r\n";

$message = 'From: ' . $_POST['Fname'] . ' ' . $_POST['Lname'] . ' <' . $_POST['email'] . "> \n\n" . $_POST['message'];
$message = wordwrap($message, 70);

if (@mail($to, $subject, $message, $headers))
{
    // Transfer the value 'sent' to ajax function for showing success message.
    echo 'sent';
}
else
{
    // Transfer the value 'failed' to ajax function for showing error message.
    echo 'failed';
}
?>