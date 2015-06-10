<? ob_start(); ?>

<?php

require_once('../includes/initialize.php');

$user=$_SESSION['user_id'];


		$sql  = "SELECT user_type FROM user WHERE id = ".$user." ";
		$user_typ_check = User::find_by_sql($sql);
		
				
				foreach ($user_typ_check as $utc) :	
				 			$user_type = $utc->user_type;
				endforeach;
				

		if($user_type == 1){
			redirect_to("../admin/user_profile.php");
		}else{
			redirect_to("../admin/dealer_profile.php");
			  }


?>

<? ob_flush(); ?>