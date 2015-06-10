<?php ob_start();?>

<?php require_once("../includes/initialize.php"); ?>

<?php
	$temp1= new property;
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No ID was provided.");
    redirect_to('index.php');
  }

  $value = property::find_by_id($_GET['id']);
$ap_id=($_GET['id']);

$sql2= "INSERT INTO `property_images` VALUES ('','".$ap_id."','1','adspace.lk_1.jpg','image/jpeg','','1')";


$database->query($sql2);

redirect_to("index.php");

?>

<?php if(isset($database)) { $database->close_connection(); } ?>
<?php ob_flush(); ?>