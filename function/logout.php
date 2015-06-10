<? ob_start(); ?>

<?php require_once("../includes/initialize.php"); ?>
<?php	
    $session->logout();
    $session->message("You have sucessfully Logged out!!. Thank you.");
    redirect_to("../login.php");
?>

<? ob_flush(); ?>