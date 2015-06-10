<? ob_start(); ?>

<?php 
 require_once("../includes/initialize.php"); 

if (isset($_POST['submit'])) { // Form has been submitted.


$prop = new property();



$prop->title = trim($_POST['Title']);
$prop->category = trim($_POST['category']);
$prop->propert_typ = trim($_POST['pro_type']);
$prop->bed = trim($_POST['bed']);
$prop->bath = trim($_POST['bath']);
$prop->district = trim($_POST['district']);
$prop->city = trim($_POST['city']);
$prop->size = trim($_POST['no_perches']);
$prop->contact_name = trim($_POST['contact_name']);
$prop->skype = trim($_POST['skype']);
$prop->tel_home = trim($_POST['telephone1']);
$prop->tel_other = trim($_POST['telephone2']);
$prop->email = trim($_POST['email']);
$prop->website = trim($_POST['web']);
$prop->price = trim($_POST['price']);
$prop->description = trim($_POST['description']);
$prop->date = date("Y-m-d");
$prop->verified=1;


$prop->create();

$insert_id= $db->insert_id();


// start image upload

// image upload 1

$max_file_size = 30485760;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB

				for($i=1; $i<7; $i++){
					
					
						if(isset($_POST['submit'])) {
								$photo = new property_images();
								$photo->property_id = $insert_id;
								$photo->approved = 2;
								$photo->img_no = $i;
								$img="img".$i;
								$photo->attach_file($_FILES[$img]);
								if($photo->save()) {
									// Success		
						} else {
									// Failure
						$message = join("<br />", $photo->errors);
								}
						}
				
				}


}

$session->message("Your property had been submited sucessfully. we will review your property and approve it within 24 hours. Thank you!");

redirect_to("../index.php");

?>

<? ob_flush(); ?>

