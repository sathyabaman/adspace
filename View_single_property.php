<?php ob_start();?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
        

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




<?php

  if(empty($_GET['id'])) {
  	$session->message("No ID was provided.");
    redirect_to('index.php');
  }
  
$view_ad=($_GET['id']);
	
$sql="SELECT * FROM property WHERE id='".$view_ad."'";
$single_ad= property::find_by_sql($sql);

?>




<?php foreach($single_ad as $v_s_a): ?>


                            <title><?php echo $v_s_a->title;?></title>
                            <meta name="Description" content="<?php echo $v_s_a->title;?>" />  
                            <meta name="Keywords" content="<?php echo $v_s_a->category;?>, <?php echo $v_s_a->propert_typ;?>, <?php echo $v_s_a->city;?>, <?php echo $v_s_a->district;?>, <?php echo $v_s_a->contact_name;?>" />
                            
                            
                            
                            

            <!-- CONTENT -->
            <div id="content"><div class="container">
    <div id="main">
        <div class="row">
            <div class="span9">
                <h1 class="page-header"><?php echo $v_s_a->title;?></h1>

                <div class="carousel property">
                
                
                				<?php 
                                $sql3 = "SELECT * FROM property_images WHERE property_id= ".$view_ad." AND img_no=1";
                                $img = property_images::find_by_sql($sql3);
                                ?>
                                
            
                
                    <div class="preview">
                    <?php foreach ($img as $imgs) :?> 
                        <img src="property_imasg/<?php echo $imgs->name;?>" alt="">
                        <?php endforeach; ?>
                    </div><!-- /.preview -->

                    <div class="content">

                        <a class="carousel-prev" href="#">Previous</a>
                        <a class="carousel-next" href="#">Next</a>
                        <ul>
                        
                        
                        
                        
								<?php 
                                $sql2 = "SELECT * FROM property_images WHERE property_id= ".$view_ad."";
                                $prop_img = property_images::find_by_sql($sql2);
                                ?>
                                
                                <?php foreach ($prop_img as $pro_imgs) :?>                
                            <li class="active">
                                <img src="property_imasg/<?php echo $pro_imgs->name;?>" alt="">
                            </li><?php endforeach; ?>
                         
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.carousel -->

                <div class="property-detail">
                    <div class="pull-left overview">
                        <div class="row">
                            <div class="span3">
                                <h2>Overview</h2>

                                <table>
                                    <tr>
                                        <th>Property ID:</th>
                                        <td><?php echo "PID".$view_ad;?></td>
                                    </tr>                                
                                    <tr>
                                        <th>Property Type:</th>
                                        <td><?php echo $v_s_a->category;?></td>
                                    </tr>
                                    <tr>
                                        <th>Contract type:</th>
                                        <td><?php echo $v_s_a->propert_typ;?></td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td><?php echo $v_s_a->address;?></td>
                                    </tr>
                                    <tr>
                                        <th>City:</th>
                                        <td><?php echo $v_s_a->city;?></td>
                                    </tr>
                                    <tr>
                                        <th>District:</th>
                                        <td><?php echo $v_s_a->district;?></td>
                                    </tr>
                                    <tr>
                                        <th>Property Size:</th>
                                        <td><?php echo $v_s_a->size;?></td>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td><?php echo $v_s_a->price;?></td>
                                    </tr>
                                    <tr>
                                        <th>Contact Name:</th>
                                        <td><?php echo $v_s_a->contact_name;?></td>
                                    </tr>
                                     <tr>
                                        <th>Tel Home:</th>
                                        <td><?php echo $v_s_a->tel_home;?></td>
                                    </tr>
                                    <tr>
                                        <th>Tel Other:</th>
                                        <td><?php echo $v_s_a->tel_other;?></td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td><?php echo $v_s_a->email;?></td>
                                    </tr>
                                    <tr>
                                        <th>Website:</th>
                                        <td><?php echo $v_s_a->website;?></td>
                                    </tr>
                                    <tr>
                                        <th>Submited Date:</th>
                                        <td><?php echo $v_s_a->date;?></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.span2 -->
                        </div>
                        <!-- /.row -->
                    </div>

                    <p><?php echo nl2br($v_s_a->description);?> </p>


        

                    <h2>Map</h2>
                        <iframe width="610" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?
                                        f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $v_s_a->city." ,+".$v_s_a->district." ,+Sri Lanka";?>&amp;aq=0&amp;oq=chenna&amp;sspn=0.375867,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $v_s_a->city." ,+".$v_s_a->district." ,+Sri Lanka";?>&amp;spn=0.375911,0.676346&amp;t=m&amp;z=11&amp;output=embed"></iframe>
                    
                </div>

            </div>
            
  <?php endforeach; ?>           
            
            
            
            
            <div class="sidebar span3">
                <div class="widget our-agents">
                
                
<?php include('templates/agents.php'); ?>
                
                
                
                
                <div class="widget contact">
    <div class="title">
        <h2 class="block-title">Contact agent</h2>
    </div><!-- /.title -->

    <div class="content">
        <form method="post" action="#">
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





<div class="widget properties last">




    <div class="title">
        <h2>Latest Properties</h2>
    </div><!-- /.title -->



<div class="content">

		<?php 
        $sql3 = "SELECT * FROM property WHERE verified=2 AND ad_type=2 ORDER BY id DESC LIMIT 5";
        $popular_proper = property::find_by_sql($sql3);
        ?>   
        
                <?php foreach ($popular_proper as $po_pro) :?>
                <div class="property">
                
                                            <?php 
                                            $sql3 = "SELECT * FROM property_images WHERE property_id= ".$po_pro->id." AND img_no=1";
                                            $property_imge = property_images::find_by_sql($sql3);
                                            ?>
                                            <div class="image">
                                                <a href="View_single_property.php?id=<?php echo $po_pro->id;?>&title=<?php echo $po_pro->title;?>"></a>
                                                <?php foreach ($property_imge as $pr_imge) :?>
                                                <img src="property_imasg/<?php echo $pr_imge->name;?>" >
                                                <?php endforeach; ?>
                                            </div><!-- /.image -->
        
                    <div class="wrapper">
                        <div class="title">
                        <?php $result3 = substr($po_pro->title, 0, 16);?>
                            <h3>
                                 <a href="View_single_property.php?id=<?php echo $po_pro->id;?>&title=<?php echo $po_pro->title;?>"><?php echo $result3;?>..</a>
                            </h3>
                        </div><!-- /.title -->
                        <div class="location"><?php echo $po_pro->city;?>, <?php echo $po_pro->district;?></div><!-- /.location -->
                        <div class="price"><?php echo $po_pro->price;?></div><!-- /.price -->
                    </div><!-- /.wrapper -->
                </div><!-- /.property -->
                <?php endforeach; ?>

    </div><!-- /.content -->
</div><!-- /.properties -->
           
            </div>
        </div>
    </div>
</div>



    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->




<?php include('templates/footer.php'); ?>

<?php ob_flush(); ?>