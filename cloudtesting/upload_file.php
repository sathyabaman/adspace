<?php


require 'include/Cloudinary.php';
require 'include/Uploader.php';
require 'include/Api.php';

\Cloudinary::config(array( 
  "cloud_name" => "adspace-lk", 
  "api_key" => "523245457581592", 
  "api_secret" => "-hVYZDmrddyO5rJQRrYfHxuwxaE" 
));



if(isset($_POST['submit'])){


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	
    

	$name = "sathya new image";
	
	\Cloudinary\Uploader::upload($_FILES["file"]["tmp_name"], array("public_id" => "upload_testing/".$name.""));

	
	
	
	//upload by giving the file location
	// $filepat =realpath(dirname(__FILE__).'/sathya.jpg');
	// $name = "sathyaimage2";
	// $result2 = \Cloudinary\Uploader::upload($filepat, array("public_id" => "upload_testing/".$name.""));
	
	
 
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    
  }
} else {
  echo "Invalid file";
}





}





?> 