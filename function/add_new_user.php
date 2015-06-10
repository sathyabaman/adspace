<? ob_start(); ?>


<?php
require_once('../includes/initialize.php');



	if(isset($_POST['submit'])) {
		
		
			
		$add_user = new User();
		
		$add_user->full_name = $_POST['full_name'];
		$add_user->email = $_POST['email'];
		
		
								$email_value= user::is_already_exist($_POST['email']);
								
									if($email_value==1){
									 $session->message("<br/>The email address already exist. please login or try with another email address.");
									 redirect_to('../user_registration.php');
									}else{}
		
		
		$add_user->password = $_POST['password'];
		$add_user->con_password = $_POST['conform_password'];
		$add_user->user_type = 1;
		$add_user->registered_date = date("Y-m-d");
		$add_user->last_login = date("Y-m-d");
		$add_user->active = 1;
		
		
		
		
							if($add_user->password==$add_user->con_password){
							
											if($add_user->save()) {
												// Success
										  $session->message("<br/ > Your registration was sucessfull. Please login.");
												//redirect_to('../log_in.php');
											} else {
												// Failure
										  $message = join("<br />", $book->errors);
											}
							
							}else{
										$session->message(" <br/ > Email or the password you entered is incorrect. Please try again!");
										redirect_to('../user_registration.php');
								
										}
				
				
							



		$user_last_inserted_value= $database->insert_id();

	


		$add_user_contact = new user_contact();
		$add_user_contact->user_id = $user_last_inserted_value;
		$add_user_contact->company = "";
		$add_user_contact->phone1 = $_POST['phone_1'];
		$add_user_contact->phone2 = $_POST['phone_2'];
		$add_user_contact->district = $_POST['district'];
		$add_user_contact->city = $_POST['city'];
		$add_user_contact->offical_email = "";
		$add_user_contact->website = "";
		$add_user_contact->started_year = "";
		$add_user_contact->description = "";



						if($add_user_contact->save()) {
								// Success
						  $session->message("<br/> Your registration was sucessfull. Please Login.");
								redirect_to('../log_in.php');
							} else {
								// Failure
						  $message = join("<br />", $add_user_contact->errors);
							}

	
}
?>
	
<? ob_flush(); ?>