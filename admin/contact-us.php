<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title>Contact Us - adspace.lk</title>
	<meta name="Description" content="contact adspace.lk, adspace.lk is the best way to sell and buy property, online realestate in sri lanka" />  
    <meta name="Keywords" content="contact us, contact company, contact adspace.lk, buildings, rooms, appartments, resort, submit a free ad, sri lanka" />

<?php include('templates/call_css_jvscrpt_files.php'); ?>
    
        
	<?php require_once("../includes/initialize.php"); ?>
	<?php if (!$session->is_logged_in()) { redirect_to("../login.php"); } ?>
</head>




<?php include('templates/header.php'); ?>





            <!-- CONTENT -->
            <div id="content">    <div class="container">
        <div id="main">
            <div class="row">
                <div class="span9">
                    <h1 class="page-header">Contact us</h1>
                    
                    <iframe class="map" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.lk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=adspace.lk,+Dehiwala-Mount+Lavinia&amp;aq=0&amp;oq=adspace.lk&amp;sll=6.829237,80.099398&amp;sspn=2.707755,3.348083&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=adspace.lk,+Dehiwala-Mount+Lavinia,+Colombo,+Western+Province&amp;ll=6.834951,79.864941&amp;spn=0.010578,0.013078&amp;z=14&amp;output=embed"></iframe>
                    
        

                        <p>
                            We welcome your complains, sugessions and Feedbacks, which will help us to grow better even better in feature. so please say Hello! to us..
                        </p>

                        <div class="row">
                            <div class="span3">
                                <h3 class="address">Address</h3>
                                <p class="content-icon-spacing">
                                    533 Galle road<br>
                                    Mount Lavinia, Sri Lanka
                                </p>
                            </div>
                            <div class="span3">
                                <h3 class="call-us">Call us</h3>
                                <p class="content-icon-spacing">
                                    1900-CO-WORKER<br>
                                    075-859-38569
                                </p>
                            </div>
                            <div class="span3">
                                <h3 class="email">Email</h3>
                                <p class="content-icon-spacing">
                                    <a href="mailto:info@adspace.lk">contact management</a><br>
                                    <a href="mailto:support@adspace.lk">contact support</a>
                                </p>
                            </div>
                        </div>

                        <h2>We'd love to hear from you. Say us hello!</h2>

                        <form method="post" class="contact-form" action=" ">
                            <div class="name control-group">
                                <label class="control-label" for="inputContactName">
                                    Name
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" id="inputContactName">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="email control-group">
                                <label class="control-label" for="inputContactEmail">
                                    Email
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" id="inputContactEmail">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="control-group">
                                <label class="control-label" for="inputContactMessage">
                                    Message
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>

                                <div class="controls">
                                    <textarea id="inputContactMessage"></textarea>
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary arrow-right" value="Send">
                            </div><!-- /.form-actions -->
                        </form>
                </div>

                <div class="sidebar span3">
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
                                                <img src="../property_imasg/<?php echo $pr_imge->name;?>" >
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


<div class="ad widget">
    <h2>Advertisements</h2>
    <div class="content">
        <a href="#"><img src="assets/img/banner/1.gif" alt="Banner"></a>
        <a href="#"><img src="assets/img/banner/2.gif" alt="Banner"></a>
        <a href="#"><img src="assets/img/banner/3.gif" alt="Banner"></a>
        <a href="#"><img src="assets/img/banner/4.gif" alt="Banner"></a>
    </div><!-- /.content -->
</div><!-- /.ad -->
                </div>
            </div>
        </div>
    </div>
    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->




<?php include('templates/footer.php'); ?>