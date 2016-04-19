<?php
$name = $_POST['name']
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $email \n Subject: $subject \n Message: $message";
$recipient = "svetlana@margetova.eu";
$subject = $subject;
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$thankyou = 'Ďakujem za tvoju správu :)';
header("Location: http://svetlanam.github.io/htmlkurz2016/");
die();
?>
