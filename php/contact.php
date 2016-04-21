<?php

if ($_POST)
{
  $to       = "svetlana@margetova.eu";
  $subject  = 'New client';

  $error    = array();

  $name     = isset($_POST["name"]) ? $_POST["name"] : '';
  $email    = isset($_POST["email"]) ? $_POST["email"] : '';
  $subject   = isset($_POST["subject"]) ? $_POST["subject"] : '';
  $message  = isset($_POST["message"]) ? $_POST["message"] : '';

    $headers = "From: ".$email."\r\n";
  	$headers .= "Reply-To: ".$email."\r\n";
  	$headers .= "MIME-Version: 1.0\r\n";
  	$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $sentMail = @mail($to, $subject, $message . ' - ' . $name, $headers);

    if ($sentMail)
    {
  		$response = array ('success' => 1);
  		echo json_encode($response);
  		exit;
  	}

  exit;
}
