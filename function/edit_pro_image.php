<?php
require_once('../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("../log_in.php"); }
?>
<?php
	$max_file_size = 10485760;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB

	if(isset($_POST['submit'])) {
		$pro_pic = new profile_pic();
		
		
		$pro_pic->user_id=$_SESSION['user_id'];
		
		  		  $check_value= profile_pic::is_image_exist($_SESSION['user_id']);
				 				 if($check_value==1){
									 $pro_pic->destroy();
									}else{}
	
		
		$pro_pic->attach_file($_FILES['file_upload']);
		
		if($pro_pic->save()) {
			// Success
      $session->message(" You have sucessfully changed your profile picture.");
			redirect_to('../admin/dealer_profile.php');
		} else {
			// Failure
      $message = join("<br />", $book->errors);
		}
		
	}
	
?>