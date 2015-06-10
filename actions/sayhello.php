<? ob_start(); ?>

<?php 
 require_once("../includes/initialize.php"); 

if (isset($_POST['submit'])) { // Form has been submitted.


$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);


$sql ="INSERT INTO feedback (name, email, message) VALUES ('".$name."', '".$email."', '".$message."')";

$results = $database->query($sql);

$session->message("Thank you for your feedback {$name}. We will contact you soon....");

}

redirect_to("../index.php");
?>

<? ob_flush(); ?>