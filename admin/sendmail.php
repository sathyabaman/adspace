<?php

	// Include the PHPMailer classes
	// If these are located somewhere else, simply change the path.
	require_once("includes/phpMailer/class.phpmailer.php");
	require_once("includes/phpMailer/class.smtp.php");
	require_once("includes/phpMailer/language/phpmailer.lang-en.php");
	
	// mostly the same variables as before
	// ($to_name & $from_name are new, $headers was omitted) 
	$to_name = "sathyabaman";
	$to = "sathyabaman@isaithuli.com";
	$subject = "Mail Test at ".strftime("%T", time());
	$message = "This is a test.";
	$message = wordwrap($message,70);
	$from_name = "adspace.lk";
	$from = "info@adspace.lk";
	
	// PHPMailer's Object-oriented approach
	$mail = new PHPMailer();
	
	// Can use SMTP
	// comment out this section and it will use PHP mail() instead
	
	$mail->IsSMTP();
	$mail->Host     = "localhost";
	$mail->Port     = 25;
	$mail->SMTPAuth = true;
	$mail->Username = "info@adspace.lk";
	$mail->Password = "902542760";
	
	// Could assign strings directly to these, I only used the 
	// former variables to illustrate how similar the two approaches are.
	$mail->FromName = $from_name;
	$mail->From     = $from;
	$mail->AddAddress($to, $to_name);
	$mail->Subject  = $subject;
	$mail->Body     = $message;
	
	$result = $mail->Send();
	echo $result ? 'Sent' : 'Error';
  
?>