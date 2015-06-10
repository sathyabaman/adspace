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
								 redirect_to('../dealer_registration.php');
								}else{}
		
		
		$add_user->password = $_POST['password'];
		$add_user->con_password = $_POST['conform_password'];
		$add_user->user_type = 2;
		$add_user->registered_date = date("Y-m-d");
		$add_user->last_login = date("Y-m-d");
		$add_user->active = 1;
		
		
		
		
							if($add_user->password==$add_user->con_password){
							
											if($add_user->save()) {
												// Success
										  $session->message("<br/ > Your registration was sucessfull. we have send you a conformation mail please check it.");
												//redirect_to('../log_in.php');
											} else {
												// Failure
										  $message = join("<br />", $book->errors);
											}
							
							}else{
										$session->message(" <br/ > Your password didnot match. Please try again!");
										redirect_to('../dealer_registration.php');
								
										}
				
				
							



		$user_last_inserted_value= $database->insert_id();

	


		$add_user_contact = new user_contact();
		$add_user_contact->user_id = $user_last_inserted_value;
		$add_user_contact->company = $_POST['company'];
		$add_user_contact->user_type = 2;
		$add_user_contact->phone1 = $_POST['phone_1'];
		$add_user_contact->phone2 = $_POST['phone_2'];
		$add_user_contact->district = $_POST['district'];
		$add_user_contact->city = $_POST['city'];
		$add_user_contact->offical_email = $_POST['offical_email'];
		$add_user_contact->website = $_POST['website'];
		$add_user_contact->address = $_POST['address'];
		$add_user_contact->description = $_POST['description'];



						if($add_user_contact->save()) {
								// Success
						  $session->message("<br/> Your registration was sucessfull. Please login .");
							//	redirect_to('../log_in.php');
						} else {
								// Failure
								  $message = join("<br />", $book->errors);
									}



		$add_opening_hours = new opening_hours();
		$add_opening_hours->user_id = $user_last_inserted_value;
		$add_opening_hours->mon_o = $_POST['mon_o'];
		$add_opening_hours->mon_c = $_POST['mon_c'];
		$add_opening_hours->tue_o = $_POST['tue_o'];
		$add_opening_hours->tue_c = $_POST['tue_c'];
		$add_opening_hours->wed_o = $_POST['wed_o'];
		$add_opening_hours->wed_c = $_POST['wed_c'];
		$add_opening_hours->thr_o = $_POST['thr_o'];
		$add_opening_hours->thr_c = $_POST['thr_c'];
		$add_opening_hours->fri_o = $_POST['fri_o'];
		$add_opening_hours->fri_c = $_POST['fri_c'];
	
		


			if(isset($_POST['sat_closing']) &&
			   $_POST['sat_closing'] == 'sat_closed')
			{
				
					$add_opening_hours->sat_o = "close";
					$add_opening_hours->sat_c = "close";
					
			}
			else
			{
					$add_opening_hours->sat_o = $_POST['sat_o'];
					$add_opening_hours->sat_c = $_POST['sat_c'];
			}    
		
		
		
			if(isset($_POST['sun_closing']) &&
			   $_POST['sun_closing'] == 'sun_closed')
			{
				
					$add_opening_hours->sun_o = "close";
					$add_opening_hours->sun_c = "close";
					
			}
			else
			{
					$add_opening_hours->sun_o = $_POST['sun_o'];
					$add_opening_hours->sun_c = $_POST['sun_c'];
			}    
		
		
		
						if($add_opening_hours->save()) {
								// Success
						  $session->message("<br/> Your registration was sucessfull. Please Login.");
								redirect_to('../log_in.php');
						} else {
								// Failure
								  $message = join("<br />", $book->errors);
									}
		


	
}
?>
	
<? ob_flush(); ?>
	