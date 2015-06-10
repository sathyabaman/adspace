<?php ob_start();?>

<?php 

require_once("../../includes/initialize.php");

if (isset($_POST['submit'])) { // Form has been submitted.

$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

}

	$temp1= new mail_list;
	$sql="SELECT DISTINCT email FROM mail_list";
	$email_address = mail_list::find_by_sql($sql);
	

	foreach($email_address as $eml_add): 
	
	$to_name = "";
	$to = "{$eml_add->email}";
	$subject = "{$subject}";
	$message =<<<EMAILBODY
	
{$message}
	
EMAILBODY;
	
	
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
	endforeach;
	//redirect_to("index.php");
	
?>

<?php ob_flush(); ?>