<? ob_start(); ?>

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
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 1;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file1']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}




if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 2;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file2']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}
	


if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 3;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file3']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}
	

if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 4;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file4']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}



if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 5;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file5']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}



if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 6;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file6']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}


if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 7;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file7']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}


if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 8;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file8']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}


if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 9;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file9']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}



if(isset($_POST['submit'])) {
		$veh_pictures = new vehicle_images();
		$veh_pictures->ad_id =($_GET['adid']);
		$veh_pictures->image_no = 10;
		$veh_pictures->approval = 2;
		$veh_pictures->attach_file($_FILES['file10']);
		if($veh_pictures->save()) {
			// Success

			
} else {
			// Failure
$message = join("<br />", $veh_pictures->errors);
		}
}




redirect_to('login_redirection_check.php');
	
?>

<? ob_flush(); ?>