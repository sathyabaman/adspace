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

$sql= "UPDATE `property` SET `ad_type` = 3 WHERE `property`.`id` ='".$ap_id."'";

$database->query($sql);


redirect_to("index.php");

?>

<?php if(isset($database)) { $database->close_connection(); } ?>
<?php ob_flush(); ?>