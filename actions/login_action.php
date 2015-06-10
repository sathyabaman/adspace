<?php ob_start();?>



<?php
require_once('../includes/initialize.php');


		if (isset($_POST['login'])) { 
		
		  $email = trim($_POST['login_email']);
		  $password = trim($_POST['login_password']);
		  
		 
			$found_user = User::authenticate($email, $password);
			
							  if ($found_user) {
								$session->login($found_user);
									log_action('Login', "{$found_user->email} logged in.");
								redirect_to("../admin/user_profile.php");
							  } else {
								$session->message("Email or the password you entered is incorrect. Please try again!");
								redirect_to("../login.php");
							  }
		  
		} else { 
		  
		  $password = "";
		  
		}


		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		if (isset($_POST['register'])) { 
		
		$add_user = new User();
		
		$add_user->full_name = $_POST['full_name'];
		$add_user->email = $_POST['email'];
		
		
		
		
								if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
								}else{ $session->message("Email address not valid. Please try again.");
								redirect_to('../login.php');
								}
		
		
		
		
								$email_value= user::is_already_exist($_POST['email']);
								

									
									if($email_value==1){
									 $session->message("Email address already exist. please login or try with another email address.");
									 redirect_to('../login.php');
									}else{}
		
		
		$add_user->password = $_POST['password'];
		$add_user->con_password = $_POST['conform_password'];
		$add_user->user_type = 1;
		$add_user->registered_date = date("Y-m-d");
		$add_user->last_login = date("Y-m-d");
		$add_user->active = 1;
		
								$pass_length=(strlen($_POST['password']));
								
								
							if($pass_length<8){
									 $session->message("Your password must have atleast eight characters long. Please try again!"); 
									 redirect_to('../login.php');
									}else{}
									
									
									
		
							if($add_user->password==$add_user->con_password){
							
											if($add_user->save()) {
										
										  $session->message("Your registration was sucessfull. Please login.");
												redirect_to('../login.php');
											} else {
									
										  $message = join("<br />", $book->errors);
											}
							
							}else{
										$session->message("Password didn't match. Please try again!");
										redirect_to('../login.php');
								
										}
		  
		}
		
		
		
		

							

?>
	 
<?php ob_flush(); ?>