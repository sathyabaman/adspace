<?php ob_start();?>

<?php 

require_once("../../includes/initialize.php"); 

$city = trim($_POST['city_search']);

$val = property::count_city_search($city);

redirect_to("city_search.php?value=".$val."&city=".$city."");

?>

<?php ob_flush(); ?>