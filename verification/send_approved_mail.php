<?php ob_start();?>

<?php

require_once("../includes/initialize.php");


	$temp1= new property;
	// must have an ID
 	 if(empty($_GET['id'])) {
	$session->message("No ID was provided.");
	redirect_to('index.php');
  }
  
	$ap_id=($_GET['id']);
	$sql="SELECT * FROM property WHERE id='".$ap_id."'";
	$mail_ad= property::find_by_sql($sql);
 
	
	
	
	// mostly the same variables as before
	// ($to_name & $from_name are new, $headers was omitted) 
	foreach($mail_ad as $proper): 
	
	$to_name = "{$proper->contact_name}";
	$to = "{$proper->email}";
	$subject = "Your Propery had been approved successfully!";
	$message =<<<EMAILBODY
	Hello {$proper->contact_name},

	Your Property had been Approved sucessfully and posted on adspace.lk.

	Property ID  : {$ap_id}
	Property Title : {$proper->title}
	
	Visit the link below to See your property on adspace.lk
	
	http://www.adspace.lk/View_single_property.php?id={$ap_id}&title={$proper->title}
	
	
	Thank you,
	Team Adspace.
	
EMAILBODY;
	
	endforeach;
	$message = wordwrap($message,150);
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
	
	//redirect_to("index.php");
	
?>

<?php ob_flush(); ?>