<?php

require_once('../includes/initialize.php');

	if(isset($_POST['submit'])) {
		

				$register_check = $_POST['check_register'];
		
				if($register_check == 'dealer'){
						redirect_to('../dealer_registration.php');
					}else{
						redirect_to('../user_registration.php');
						
				}

}
?>
	
	