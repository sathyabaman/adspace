<? ob_start(); ?>



<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>


<?php include('templates/call_css_jvscrpt_files.php'); ?>

    
	
<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("../login.php"); } ?>
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


			
<?php 
$user=$_SESSION['user_id'];
$sql3 = "SELECT * FROM user WHERE id= ".$user;
$user_details = User::find_by_sql($sql3);
?>



<?php foreach ($user_details as $usr_det) :?>



	<title><?php echo $usr_det->full_name;?> - adspace.lk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aviators - byaviators.com">

    <div id="main">
        <div class="row">
            <div class="span9">
                <h1 class="page-header">Welcome <?php echo $usr_det->full_name;?>!</h1>			
<?php endforeach; ?>			
				
				
				
				
				
				
				
	<?php 
	$user=$_SESSION['user_id'];
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
	$per_page = 25;
	$sql_count="SELECT COUNT(category) FROM  property WHERE user_id='".$user."'";
	
	// counting total no of ads in category room...
	$total_count = property::count_for_user($user);
	$pagination = new Pagination($page, $per_page, $total_count);
	
	
	$sql = "SELECT * FROM property WHERE user_id='".$user."'ORDER BY id DESC ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";


$house_list = property::find_by_sql($sql);
?>			
				
				
				
				
				

                <div class="properties-rows">
<div class="filter">
    <form action="" method="get" class="form-horizontal">
        <div class="control-group">
            <label class="" for="">
                Total Properties : <?php echo $total_count;?>
                <span class="form-required" title="This field is required.">*</span>
            </label>
     
        </div><!-- /.control-group -->


    </form>
</div><!-- /.filter -->
</div><!-- /.properties-rows -->                

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
                        <a href="View_single_property.php?id=<?php echo $hou_li->id;?>&title=<?php echo $hou_li->title;?>l"></a>
                        <?php foreach ($house_imge as $hou_imge) :?>
                        <img src="../property_imasg/<?php echo $hou_imge->name;?>" alt="<?php echo $hou_imge->name;?>">
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
							
							echo "<li><a href=\"user_profile.php?page=".$pagination->previous_page()."\">Back</a> </li>";
							 }

			for($i=1; $i <= $pagination->total_pages(); $i++) {
						if($i == $page) {
								
							echo "<li class=\"active\"><a href=\"#\">{$i}</a></li>";
								} else {
							echo " <li><a href=\"user_profile.php?page={$i}\">{$i}</a></li>";
						}
			}
			
			
							if($pagination->has_next_page()) { 
							
									echo "<li><a href=\"user_profile.php?page=".$pagination->next_page()."\">next</a> </li>";
							 
							 }
			
	}

?> 
    
    </ul>
</div><!-- /.pagination -->             

 </div>
            <div class="sidebar span3">
                <h2>Property filter</h2>

				<?php include('templates/search_filter_inner_pages.php'); ?>


<a class="btn btn-primary btn-large list-your-property arrow-right" href="list-your-property.php">Submit a New Property&nbsp</a>
   
   
   
   
   <div class="ad widget">
 <br/>

	<?php include('templates/facebook_stream.php'); ?>
</div><!-- /.ad -->
            </div>
        </div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->

<?php include('templates/footer.php'); ?>



<? ob_flush(); ?>
