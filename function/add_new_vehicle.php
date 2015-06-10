<? ob_start(); ?>

<?php
require_once('../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("../log_in.php"); }


	if(isset($_POST['submit'])) {
		
		
			
		$vehicle_details = new vehicles();
		
		$vehicle_details->user_id =$_SESSION['user_id'];
		$vehicle_details->vehicle_category = $_POST['category'];
		$vehicle_details->vehicle_type = $_POST['vehicle_type'];
		$vehicle_details->make = $_POST['manufacture'];
		$vehicle_details->model = $_POST['model_no'];
		$vehicle_details->year = $_POST['year'];
		$vehicle_details->fuel = $_POST['fuel_type'];
		$vehicle_details->milage = $_POST['mileage'];
		$vehicle_details->transmission = $_POST['transmission'];
		$vehicle_details->color = $_POST['color'];
		$vehicle_details->doors = $_POST['doors'];
		$vehicle_details->engine_capacity = $_POST['engine_capacity'];
		$vehicle_details->price = $_POST['price'];

		
							if(isset($_POST['negotiable']) &&
								   $_POST['negotiable'] == 'negotiable')
								{
									
										$vehicle_details->negotiable =1;
										
								}
								else
								{
										$vehicle_details->negotiable = 2;
								} 

		$vehicle_details->contact_person = $_POST['contact_name'];
		$vehicle_details->contact_no = $_POST['phone_1'];
		$vehicle_details->contact_no2 = $_POST['phone_2'];
		$vehicle_details->email = $_POST['email'];
		$vehicle_details->website = $_POST['website'];
		$vehicle_details->address = $_POST['address'];
		$vehicle_details->city = $_POST['city'];
		$vehicle_details->district = $_POST['district'];
		$vehicle_details->submited_date = date("Y-m-d");
		$vehicle_details->no_of_views = 0;
		$vehicle_details->premium = 0;
		$vehicle_details->approved=1;
		
		
			$vehicle_details->save();
							

		
		
		

		
		
		// vehicle features
		
		
		$adid = $database->insert_id();
		
		$vehicle_features = new vehicle_features();
		
		$vehicle_features->ad_id = $adid;

							 if(isset($_POST['air_conditioning']) &&
								   $_POST['air_conditioning'] == 'air_conditioning')
								{
										$vehicle_features->ac = 1;	
								}
								else
								{
										$vehicle_features->ac = 2;
								} 
								
								
							 if(isset($_POST['abs']) &&
								   $_POST['abs'] == 'abs')
								{
										$vehicle_features->abs2 = 1;	
								}
								else
								{
										$vehicle_features->abs2 = 2;
								} 
								
								
							 if(isset($_POST['air_bags']) &&
								   $_POST['air_bags'] == 'air_bags')
								{
										$vehicle_features->air_bags = 1;	
								}
								else
								{
										$vehicle_features->air_bags = 2;
								} 
								
								
							 if(isset($_POST['alloy_wheels']) &&
								   $_POST['alloy_wheels'] == 'alloy_wheels')
								{
										$vehicle_features->alloy_wheels = 1;	
								}
								else
								{
										$vehicle_features->alloy_wheels = 2;
								} 
								
							
							if(isset($_POST['central_locking']) &&
								   $_POST['central_locking'] == 'central_locking')
								{
										$vehicle_features->centeral_locking = 1;	
								}
								else
								{
										$vehicle_features->centeral_locking = 2;
								} 
								
							
							if(isset($_POST['navigation_system']) &&
								   $_POST['navigation_system'] == 'navigation_system')
								{
										$vehicle_features->navigation_system = 1;	
								}
								else
								{
										$vehicle_features->navigation_system = 2;
								} 
								
							
							if(isset($_POST['power_window']) &&
								   $_POST['power_window'] == 'power_window')
								{
										$vehicle_features->power_window = 1;	
								}
								else
								{
										$vehicle_features->power_window = 2;
								} 
												
							
							
							if(isset($_POST['power_steering']) &&
								   $_POST['power_steering'] == 'power_steering')
								{
										$vehicle_features->power_stearing = 1;	
								}
								else
								{
										$vehicle_features->power_stearing = 2;
								} 
												
							
							
							if(isset($_POST['parking_sensor']) &&
								   $_POST['parking_sensor'] == 'parking_sensor')
								{
										$vehicle_features->parking_sensor = 1;	
								}
								else
								{
										$vehicle_features->parking_sensor = 2;
								} 
									
									
							if(isset($_POST['power_mirrors']) &&
								   $_POST['power_mirrors'] == 'power_mirrors')
								{
										$vehicle_features->power_mirrors = 1;	
								}
								else
								{
										$vehicle_features->power_mirrors = 2;
								}
				
						
							if(isset($_POST['radio_cd']) &&
								   $_POST['radio_cd'] == 'radio_cd')
								{
										$vehicle_features->radio_cd = 1;	
								}
								else
								{
										$vehicle_features->radio_cd = 2;
								}
						
						
							if(isset($_POST['retractable_mirrors']) &&
								   $_POST['retractable_mirrors'] == 'retractable_mirrors')
								{
										$vehicle_features->retractable_mirrors = 1;	
								}
								else
								{
										$vehicle_features->retractable_mirrors = 2;
								}


				$vehicle_features->description = $_POST['description'];
		
		
		
		
if($vehicle_features->save()) {
								// Success
	  $session->message("<br/> Your vehicle had been added sucessfully.");
			redirect_to('../admin/add_vehicle_images.php?adid='.$adid);
	} else {
			// Failure
			  $message = join("<br />", $vehicle_features->errors);
				}		
		

	
}
?>
	
<? ob_flush(); ?>