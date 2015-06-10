<?php ob_start();?>



<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
        <title>Home - adspace.lk </title>
        <meta name="Description" content="real estate, adspace.lk is the best way to sell and buy property, homes, lands, buildings, appartments, resort, online realestate in sri lanka" />  
        <meta name="Keywords" content="adspace, adspace.lk, real estate, property, houses, lands, buildings, rooms, appartments, resort, submit a free ad, sri lanka" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/chosen/chosen.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/realia-blue.css" type="text/css" id="color-variant-default">
    <link rel="stylesheet" href="#" type="text/css" id="color-variant">
    
     <?php require_once("includes/initialize.php"); ?>
     <?php if ($session->is_logged_in()) { redirect_to("admin/user_profile.php"); } ?>
     
     
</head>


<?php include('templates/header.php'); ?>



            <!-- CONTENT -->
            <div id="content">
<div class="container">
        
		
		
		
		
<br/>
	
<?php if ($message ==""): ?>

<?php else : ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php  echo  $message;  ?></strong>
    </div>

<?php endif; ?>




		
		
		
		
		
		
		
		
	<div id="main">
        <div class="slider-wrapper">
    <div class="slider">
        <div class="slider-inner">
            <div class="row">
                <div class="images span9">
                    <div class='iosSlider'>
                        <div class='slider-content'>
                                                       

                            <div class="slide">
                                <img src="assets/img/tmp/banner2.jpg" alt="">

                                <div class="slider-info">
                                    <div class="price">
                                        <h2>Find your dream home.</h2>
                                        
                                    </div><!-- /.price -->
                                    <h2><a href="#">Best online realestate.</a></h2>
                                    
                                </div><!-- /.slider-info -->
                            </div><!-- /.slide -->
                            
                            
                            <div class="slide">
                                <img src="assets/img/tmp/banner3.jpg" alt="">

                                <div class="slider-info">
                                    <div class="price">
                                        <h2>Sell ur properties online.</h2>
                                        
                                    </div><!-- /.price -->
                                    <h2><a href="#">With adspace.lk</a></h2>
                                    
                                </div><!-- /.slider-info -->
                            </div><!-- /.slide -->
                            
                            
                        </div><!-- /.slider-content -->
                    </div><!-- .iosSlider -->

                    <ul class="navigation">
                        <li class="active"><a>1</a></li>
                        	     <li><a>2</a></li>
                    	
                    </ul><!-- /.navigation-->
                </div><!-- /.images -->
                
                
                <?php include('templates/search_filter.php'); ?>
                

            </div><!-- /.row -->
        </div><!-- /.slider-inner -->
    </div><!-- /.slider -->
</div><!-- /.slider-wrapper -->




<?php include('templates/featured_properties.php'); ?>

		





<?php 
$sql = "SELECT * FROM property WHERE verified=2 ORDER BY id DESC LIMIT 9";
$latest_properties = property::find_by_sql($sql);
?>




   <div class="row">
     <div class="span9">
      <h1 class="page-header">Latest properties</h1>
       <div class="properties-grid">
         <div class="row">
         
   					<?php foreach ($latest_properties as $lat_pro) :?>
        
                            <div class="property span3">
                            
                                <div class="image">
                                
                                				<?php 
												$sql2 = "SELECT * FROM property_images WHERE property_id= ".$lat_pro->id." AND img_no=1";
												$property_img = property_images::find_by_sql($sql2);
												?>
                                                
                                                
                                                    <div class="content">
                                                        <a href="View_single_property.php?id=<?php echo $lat_pro->id;?>&title=<?php echo $lat_pro->title;?>"></a>
                                                        <?php foreach ($property_img as $pro_img) :?>
                                                       <img src="property_imasg/<?php echo $pro_img->name;?>" alt="<?php echo $pro_img->name;?>" >
                                                        <?php endforeach; ?>
                                                    </div><!-- /.content -->
                                                                           
                    
                                    <div class="price"><?php echo $lat_pro->price;?></div><!-- /.price -->
                                    <div class="reduced">Price </div><!-- /.reduced -->
                                </div><!-- /.image -->
                    
                                <div class="title">
                                
                                <?php $result = substr($lat_pro->title, 0, 21);?>
                             
                                    <h2><a href="View_single_property.php?id=<?php echo $lat_pro->id;?>&title=<?php echo $lat_pro->title;?>"><?php echo $result;?>...</a></h2>
                                </div><!-- /.title -->
                    
                                <div class="location"><?php echo $lat_pro->city;?>, <?php echo $lat_pro->district;?></div><!-- /.location -->
                                <div class="area">
                                    <span class="key">Size:</span><!-- /.key -->
                                    <span class="value"><?php echo $lat_pro->size;?></span><!-- /.value -->
                                </div><!-- /.area -->
                                <div class="bedrooms"><div class="content"><?php echo $lat_pro->bed;?></div></div><!-- /.bedrooms -->
                                <div class="bathrooms"><div class="content"><?php echo $lat_pro->bath;?></div></div><!-- /.bathrooms -->
                            </div><!-- /.property -->
                            
   		 			<?php endforeach; ?>
        
    </div><!-- /.row -->
  </div><!-- /.properties-grid -->
</div>
            
            
            
            
            
            
            
<div class="sidebar span3">
    
    
    <div class="widget our-agents">


		<?php include('templates/agents.php'); ?>




<div class="hidden-tablet">
  <div class="widget properties last">
    <div class="title">
        <h2>Popular Properties</h2>
    </div><!-- /.title -->

    <div class="content">
    
    
<?php 
$sql3 = "SELECT * FROM property WHERE verified=2 AND ad_type=2 ORDER BY id DESC LIMIT 7";
$popular_property = property::find_by_sql($sql3);
?>    
    <?php foreach ($popular_property as $pop_pro) :?>
        <div class="property">
        

											<?php 
                                            $sql3 = "SELECT * FROM property_images WHERE property_id= ".$pop_pro->id." AND img_no=1";
                                            $property_imge = property_images::find_by_sql($sql3);
                                            ?>
                                                            
                                    <div class="image">
                                        <a href="View_single_property.php?id=<?php echo $pop_pro->id;?>&title=<?php echo $pop_pro->title;?>"></a>
                                        <?php foreach ($property_imge as $pro_imge) :?>
                                        <img src="property_imasg/<?php echo $pro_imge->name;?>" alt="<?php echo $pro_img->name;?>">
                                        <?php endforeach; ?>
                                    </div><!-- /.image -->
                                    
                                    

            <div class="wrapper">
            	<?php $result2 = substr($pop_pro->title, 0, 16);?>
                <div class="title">
                    <h3>
                        <a href="View_single_property.php?id=<?php echo $pop_pro->id;?>&title=<?php echo $pop_pro->title;?>"><?php echo $result2;?>..</a>
                    </h3>
                </div><!-- /.title -->
                <div class="location"><?php echo $pop_pro->city;?>, <?php echo $pop_pro->district;?></div><!-- /.location -->
                <div class="price"><?php echo $pop_pro->price;?></div><!-- /.price -->
            </div><!-- /.wrapper -->
        </div><!-- /.property -->
	<?php endforeach; ?>

    </div><!-- /.content -->
</div><!-- /.properties -->
                </div>
            </div>
        </div>
	
 </div> 
</div>

  </div><!-- /#content -->
</div><!-- /#wrapper-inner -->




<?php include('templates/footer.php'); ?>

<?php ob_flush(); ?>