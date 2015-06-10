<?php ob_start();?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title>Apartment - adspace.lk</title>
    <meta name="Description" content="real estate, adspace.lk is the best way to sell and buy appartments, online realestate in sri lanka" />  
    <meta name="Keywords" content="adspace, adspace.lk, real estate, apartments for rent, apartments for sale, apartments for lease, submit a free ad, sri lanka" /> 

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
     <?php if ($session->is_logged_in()) { redirect_to("login.php"); } ?>
     
</head>





<?php include('templates/header.php'); ?>


            <!-- CONTENT -->
            <div id="content">
<div class="container">

    <div id="main">
        <div class="row">
            <div class="span9">


<?php 

	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
	$per_page = 12;
	$sql_count="SELECT COUNT(category) FROM  property WHERE category='Appartment'";
	
	// counting total no of ads in category room...
	$total_count = property::count_for_pagination("Appartment");
	$pagination = new Pagination($page, $per_page, $total_count);
	
	
	$sql = "SELECT * FROM property WHERE verified=2 AND category='Appartment' ORDER BY id DESC ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";


$house_list = property::find_by_sql($sql);
?>


<h1 class="page-header">Listing all Apartments..  (<?php echo $total_count ;?>)</h1>



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
                        <a href="View_single_property.php?id=<?php echo $hou_li->id;?>&title=<?php echo $hou_li->title;?>"></a>
                        <?php foreach ($house_imge as $hou_imge) :?>
                        <img src="property_imasg/<?php echo $hou_imge->name;?>" alt="<?php echo $hou_imge->name;?>">
                        <?php endforeach; ?>
                    </div><!-- /.content -->
                </div><!-- /.image -->

                <div class="body span6">
                    <div class="title-price row">
                    
                    	<?php $result2 = substr($hou_li->title, 0, 30);?>
                        <div class="title span4">
                            <h2><a href="View_single_property.php?id=<?php echo $hou_li->id;?>&title=<?php echo $hou_li->title;?>"><?php echo $result2;?>..</a></h2>
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
                    <div class="bedrooms"><div class="content"><?php echo $hou_li->bed;?></div></div><!-- /.bedrooms -->
                    <div class="bathrooms"><div class="content"><?php echo $hou_li->bath;?></div></div><!-- /.bathrooms -->
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
                                        
                                        echo "<li><a href=\"appartment.php?page=".$pagination->previous_page()."\">Back</a> </li>";
                                         }
            
                        for($i=1; $i <= $pagination->total_pages(); $i++) {
                                    if($i == $page) {
                                            
                                        echo "<li class=\"active\"><a href=\"#\">{$i}</a></li>";
                                            } else {
                                        echo " <li><a href=\"appartment.php?page={$i}\">{$i}</a></li>";
                                    }
			
                        }
                        
                        
                                        if($pagination->has_next_page()) { 
                                        
                                                echo "<li><a href=\"appartment.php?page=".$pagination->next_page()."\">next</a> </li>";
                                         
                                         }
                        
                }
            
            ?> 
    </ul>
</div><!-- /.pagination -->            
</div>
            
            
            
<div class="sidebar span3">


                <h2>Property filter</h2>
                
                
<?php include('templates/search_filter_inner_pages.php'); ?>




<div class="widget our-agents">


<?php include('templates/agents.php'); ?>



<div class="ad widget">

<!-- add advertisements later-->

</div><!-- /.ad -->



<?php include('templates/facebook_stream.php'); ?>


            </div>
        </div>
    </div>
    

</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->







<?php include('templates/footer.php'); ?>


<?php ob_flush(); ?>