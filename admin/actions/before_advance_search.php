<? ob_start(); ?>

<?php 

require_once("../../includes/initialize.php");



$category = trim($_POST['category']);
$propert_typ = trim($_POST['pro_type']);
$district = trim($_POST['district']);



$val = property::count_advance_search($category, $propert_typ, $district);


redirect_to("advancesearch.php?value=".$val."&cat=".$category."&pro_type=".$propert_typ."&distri=".$district."");

?>

<? ob_flush(); ?>