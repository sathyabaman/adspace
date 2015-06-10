<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
 	<title>Search by city - adspace.lk</title>
    <meta name="Description" content="search properties by cities in sri lanka." />  
    <meta name="Keywords" content="search, city, filter, properties, adspace, adspace.lk, real estate, search, sri lanka" />

	<?php include('../templates/call_css_jvscrpt_files.php'); ?>


    
<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("../login.php"); } ?>



<?php	 
  $total_count =$_GET['value'];
  $city =$_GET['city'];
  $val = $_GET['value'];

	 
	 
	 ?>

     
</head>






<body>
<div id="wrapper-outer" >
    <div id="wrapper">
        <div id="wrapper-inner">


		
		
		
				<!-- BREADCRUMB -->
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <ul class="breadcrumb pull-left">
                                <li><a href="user_profile.php">Home</a></li>
                            </ul><!-- /.breadcrumb -->

                            <div class="account pull-right">
                                <ul class="nav nav-pills">
								
<?php 
$user=$_SESSION['user_id'];
$sql3 = "SELECT * FROM user WHERE id= ".$user;
$user_name = User::find_by_sql($sql3);
?>
								<?php foreach ($user_name as $usr_nam) :?>
									<li><a href="../user_profile.php">Welcome <?php echo $usr_nam->full_name;?></a></li>
									<?php endforeach; ?>
									<li><a href="../user_profile.php">Profile</a></li>
                                    <li><a href="../../function/logout.php">Logout</a></li>
                                    
                                </ul>
                            </div>
                        </div><!-- /.span12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-wrapper -->
		
		
		
		
		
		
            <!-- HEADER -->
            <div id="header-wrapper">
                <div id="header">
                    <div id="header-inner">
                        <div class="container">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="row">
                                        <div class="logo-wrapper span4">
                                            <a href="#nav" class="hidden-desktop" id="btn-nav">Toggle navigation</a>

                                            <div class="logo">
                                                <a href="../index.php" title="Home">
                                                    <img src="../assets/img/logo.png" alt="Home">
                                                </a>
                                            </div><!-- /.logo -->

                                            <div class="site-name">
                                                <a href="../index.php" title="Home" class="brand">adspace.lk</a>
                                            </div><!-- /.site-name -->

                                            <div class="site-slogan">
                                                <span>We made Real estate<br>made easy</span>
                                            </div><!-- /.site-slogan -->
                                        </div><!-- /.logo-wrapper -->

                                        <div class="info">
                                            <div class="site-email">
                                                <a href="mailto:info@byaviators.com">info@adspace.lk</a>
                                            </div><!-- /.site-email -->

                                            <div class="site-phone">
                                                <span>075-859-3869</span>
                                            </div><!-- /.site-phone -->
                                        </div><!-- /.info -->

                                        <a class="btn btn-primary btn-large list-your-property arrow-right" href="../../list-your-property.php">List your property</a>
                                    </div><!-- /.row -->
                                </div><!-- /.navbar-inner -->
                            </div><!-- /.navbar -->
                        </div><!-- /.container -->
                    </div><!-- /#header-inner -->
                </div><!-- /#header -->
            </div><!-- /#header-wrapper -->

            <!-- NAVIGATION -->
            <div id="navigation">
                <div class="container">
                    <div class="navigation-wrapper">
                        <div class="navigation clearfix-normal">

                            <ul class="nav">
                            
                            <a href="../index.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Homepage</span>
                                    <ul> </ul>
                                </li>
                             </a>
                             
                                <a href="../house.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Houses</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
                                <a href="../land.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Lands</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
                                <a href="../building.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Buildings</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
                                <a href="../appartment.php">
								<li class="menuparent">
                                    <span class="menuparent nolink">Apartments</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
								<a href="../resort.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Resorts</span>
                                    <ul> </ul>
                                </li>
                                </a>
								
								
								<li><a href="../room.php">Rooms</a></li>
                                
                            </ul><!-- /.nav -->

                            <div class="language-switcher">
                                <div class="current en"><a href="../index.php" lang="en">English</a></div><!-- /.current -->
                                <div class="options">
                                    <ul>

                                    </ul>
                                </div><!-- /.options -->
                            </div><!-- /.language-switcher -->

                            <form  method="post" class="site-search" action="before_city_search.php">
                                <div class="input-append">
                                    <input title="Enter the terms you wish to search for." class="search-query span2 form-text" placeholder="Search by City" type="text" name="city_search">
                                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                                </div><!-- /.input-append -->
                            </form><!-- /.site-search -->
                        </div><!-- /.navigation -->
                    </div><!-- /.navigation-wrapper -->
                </div><!-- /.container -->
            </div><!-- /.navigation -->







            <!-- CONTENT -->
            <div id="content">
<div class="container">

    <div id="main">
        <div class="row">
            <div class="span9">
      


<?php 

	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
	$per_page = 20;

	
	// counting total no of ads in category room...

	$pagination = new Pagination($page, $per_page, $total_count);
	
	
	$sql="SELECT * FROM property WHERE district='".$city."' OR city='".$city."' AND verified='2' ORDER BY id DESC ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";


$house_list = property::find_by_sql($sql);
?>


<h1 class="page-header">We have filtered <?php echo $total_count ;?> results for your search.</h1>






<div class="properties-rows">
    <div class="row">
    
<?php foreach ($house_list as $hou_li) :?>
        <div class="property span9">
            <div class="row">
                <div class="image span3">
                
                
						<?php 
                        $sql2 = "SELECT * FROM property_images WHERE property_id= ".$hou_li->id." AND img_no=1";
                        $house_imge = property_images::find_by_sql($sql2);
                        ?>
                
                    <div class="content">
                        <a href="../View_single_property.php?id=<?php echo $hou_li->id;?>&title=<?php echo $hou_li->title;?>"></a>
                        <?php foreach ($house_imge as $hou_imge) :?>
                        <img src="../../property_imasg/<?php echo $hou_imge->name;?>" alt="<?php echo $hou_imge->name;?>">
                        <?php endforeach; ?>
                    </div><!-- /.content -->
                </div><!-- /.image -->

                <div class="body span6">
                    <div class="title-price row">
                    
                    	<?php $result2 = substr($hou_li->title, 0, 30);?>
                        <div class="title span4">
                            <h2><a href="../View_single_property.php?id=<?php echo $hou_li->id;?>&title=<?php echo $hou_li->title;?>"><?php echo $result2;?>..</a></h2>
                        </div><!-- /.title -->

                        <div class="price">
                            <?php echo $hou_li->price;?>
                        </div><!-- /.price -->
                    </div><!-- /.title -->

                    <div class="location"><?php echo $hou_li->city;?>, <?php echo $hou_li->district;?></div><!-- /.location -->
                    <?php $description = substr($hou_li->description, 0, 120);?>
                    <p><?php echo $description;?>...</p>
                    <div class="area">
                        <span class="key">Size:</span><!-- /.key -->
                        <span class="value"><?php echo $hou_li->size;?></span><!-- /.value -->
                    </div><!-- /.area -->
                    <div class="bedrooms"><div class="content">4</div></div><!-- /.bedrooms -->
                    <div class="bathrooms"><div class="content">3</div></div><!-- /.bathrooms -->
                </div><!-- /.body -->
            </div><!-- /.property -->
        </div><!-- /.row -->

<?php endforeach; ?>
		
		

    </div><!-- /.row -->
</div><!-- /.properties-rows -->
              
              
              
                
                
<div class="pagination pagination-centered">
    <ul>
			   <?php
            
                if($pagination->total_pages() > 1) {
                    
                                        if($pagination->has_previous_page()) { 
                                        
                                        echo "<li><a href=\"city_search.php?page=".$pagination->previous_page()."&value=".$val."&city=".$city."\">Back</a> </li>";
                                         }
            
                        for($i=1; $i <= $pagination->total_pages(); $i++) {
                                    if($i == $page) {
                                            
                                        echo "<li class=\"active\"><a href=\"#\">{$i}</a></li>";
                                            } else {
                                        echo " <li><a href=\"city_search.php?page={$i}&value=".$val."&city=".$city."\">{$i}</a></li>";
                                    }
			
                        }
                        
                        
                                        if($pagination->has_next_page()) { 
                                        
                                                echo "<li><a href=\"city_search.php?page=".$pagination->next_page()."&value=".$val."&city=".$city."\">next</a> </li>";
                                         
                                         }
                        
                }
            
            ?> 
    </ul>
    
</div><!-- /.pagination -->    
        </div>
        
        
<div class="sidebar span3">


<div class="widget our-agents">

    <div class="title">
        <h2>Our Agents</h2>
    </div><!-- /.title -->

    <div class="content">
        <div class="agent">
            <div class="image">
                <img src="../assets/img/photos/john-small.png" alt="">
            </div><!-- /.image -->
            <div class="name">Jerishan Arc</div><!-- /.name -->
            <div class="phone">Property Research</div><!-- /.phone -->
            <div class="email"><a href="mailto:jerishan@adspace.lk">jerishan@adspace.lk</a></div><!-- /.email -->
        </div><!-- /.agent -->

        <div class="agent">
            <div class="image">
                <img src="../assets/img/photos/satha.png" alt="">
            </div><!-- /.image -->
            <div class="name">K.sathapalan</div><!-- /.name -->
            <div class="phone">Property Research & Developement</div><!-- /.phone -->
            <div class="email"><a href="mailto:sathapalan@adspace.lk">sathapalan@adspace.lk</a></div><!-- /.email -->
        </div><!-- /.agent -->
    </div><!-- /.content -->
</div><!-- /.our-agents -->
 




<?php include('../templates/facebook_stream.php'); ?>




            </div>
        </div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->

























<?php 
$sql4 = "SELECT * FROM property WHERE verified=2 AND ad_type=3 ORDER BY id DESC LIMIT 3";
$featured_property = property::find_by_sql($sql4);
?> 


<div id="footer-wrapper">
    <div id="footer-top">
        <div id="footer-top-inner" class="container">
            <div class="row">
                <div class="widget properties span3">
                    <div class="title">
                        <h2>Most Recent</h2>
                    </div><!-- /.title -->

                    <div class="content">
                    <?php foreach ($featured_property as $featu_pro) :?>
                        <div class="property">
                        
                        
                            <div class="image">
                              <a href="../View_single_property.php?id=<?php echo $featu_pro->id;?>&title=<?php echo $featu_pro->title;?>"></a>
                                
                                            <?php 
                                            $sql4 = "SELECT * FROM property_images WHERE property_id= ".$featu_pro->id." AND img_no=1";
                                            $feature_pro_imge = property_images::find_by_sql($sql4);
                                            ?>
                                            
					    <?php foreach ($feature_pro_imge as $fpm) :?>
                                            <img src="../property_imasg/<?php echo $fpm->name;?>" alt="<?php echo $fpm->name;?>">
                                            <?php endforeach; ?>
                            </div><!-- /.image -->
                            
                            
                            <div class="wrapper">
                                <div class="title">
                                    <h3>
                                        <?php $result3 = substr($featu_pro->title, 0, 16);?>
                                <h3><a href="../View_single_property.php?id=<?php echo $featu_pro->id;?>&title=<?php echo $featu_pro->title;?>"><?php echo $result3;?>...</a></h3>
                                    </h3>
                                </div><!-- /.title -->
                                <div class="location"><?php echo $featu_pro->city;?>, <?php echo $featu_pro->district;?></div><!-- /.location -->
                                <div class="price"><?php echo $featu_pro->price;?></div><!-- /.price -->
                            </div><!-- /.wrapper -->
                        </div><!-- /.property -->
					<?php endforeach; ?>
                    
                    
                      

                    </div><!-- /.content -->
                </div><!-- /.properties-small -->

                <div class="widget span3">
                    <div class="title">
                        <h2>Contact us</h2>
                    </div><!-- /.title -->

                    <div class="content">
                        <table class="contact">
                            <tbody>
                            <tr>
                                <th class="address">Address:</th>
                                <td>533 Galle Road<br>Mount Lavinia, 10370<br>Sri Lanka<br></td>
                            </tr>
                            <tr>
                                <th class="phone">Phone:</th>
                                <td>+75 859 3869</td>
                            </tr>
                            <tr>
                                <th class="email">E-mail:</th>
                                <td><a href="mailto:info@yourcompany.com">info@adspace.lk</a></td>
                            </tr>
                            <tr>
                                <th class="skype">Skype:</th>
                                <td>adspace srilanka</td>
                            </tr>
                            <tr>
                                <th class="gps">GPS:</th>
                                <td>6.834951<br>-79.864941</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /.content -->
                </div><!-- /.widget -->

                <div class="widget span3">
                    <div class="title">
                        <h2 class="block-title">Useful links</h2>
                    </div><!-- /.title -->

                      <div class="content">
                        <ul class="menu nav">
                         	<li class="leaf"><a href="../index.php">Home Page</a></li>
                            <li class="leaf"><a href="../sitemap.php">Site map</a></li>
                            <li class="leaf"><a href="../our-agents.php">Our agents</a></li>
                            <li class="leaf"><a href="../faq.php">FAQ</a></li>
                            <li class="leaf"><a href="../contact-us.php">Contact us</a></li>
                            <li class="leaf"><a href="../about-us.php">About us</a></li>
                            <li class="last leaf"><a href="../termsandconditions.php">Terms & Conditions</a></li>
                        </ul>
                    </div><!-- /.content -->
                </div><!-- /.widget -->

                <div class="widget span3">
                    <div class="title">
                        <h2 class="block-title">Say hello!</h2>
                    </div><!-- /.title -->

                    <div class="content">
                        <form method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputName">
                                    Name
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" id="inputName">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="control-group">
                                <label class="control-label" for="inputEmail">
                                    Email
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" id="inputEmail">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="control-group">
                                <label class="control-label" for="inputMessage">
                                    Message
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>

                                <div class="controls">
                                    <textarea id="inputMessage"></textarea>
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary arrow-right" value="Send">
                            </div><!-- /.form-actions -->
                        </form>
                    </div><!-- /.content -->
                </div><!-- /.widget -->
            </div><!-- /.row -->
        </div><!-- /#footer-top-inner -->
    </div><!-- /#footer-top -->

    <div id="footer" class="footer container">
        <div id="footer-inner">
            <div class="row">
                <div class="span6 copyright">
                    <p>© Copyright 2012 - <?php echo date("Y", time()); ?> by <a href="http://www.adspace.lk">adspace.lk</a>. All rights reserved.</p>
                </div><!-- /.copyright -->

                <div class="span6 share">
                    <div class="content">
                        <ul class="menu nav">
                            <li class="first leaf"><a href="https://www.facebook.com/Adspacelk" class="facebook">Facebook</a></li>
                            <li class="leaf"><a href="#" class="flickr">Flickr</a></li>
                            <li class="leaf"><a href="https://plus.google.com/b/107360239313352835550" class="google">Google+</a></li>
                            <li class="leaf"><a href="http://www.linkedin.com/company/3091282?trk=tyah" class="linkedin">LinkedIn</a></li>
                            <li class="leaf"><a href="https://twitter.com/adspacelk" class="twitter">Twitter</a></li>
                            <li class="last leaf"><a href="#" class="vimeo">Vimeo</a></li>
                        </ul>
                    </div><!-- /.content -->
                </div><!-- /.span6 -->
            </div><!-- /.row -->
        </div><!-- /#footer-inner -->
    </div><!-- /#footer -->
</div><!-- /#footer-wrapper -->
</div><!-- /#wrapper -->
</div><!-- /#wrapper-outer -->


<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.ezmark.js"></script>
<script type="text/javascript" src="assets/js/jquery.currency.js"></script>
<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="assets/js/retina.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/carousel.js"></script>
<script type="text/javascript" src="assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.infobox.min.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"></script>
<script type="text/javascript" src="assets/libraries/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="assets/libraries/iosslider/_src/jquery.iosslider.min.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/js/realia.js"></script>

</body>
</html>
