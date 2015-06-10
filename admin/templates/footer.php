<?php require_once("../includes/initialize.php"); ?>
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
                              <a href="View_single_property.php?id=<?php echo $featu_pro->id;?>&title=<?php echo $featu_pro->title;?>"></a>
                                
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
                                <h3><a href="View_single_property.php?id=<?php echo $featu_pro->id;?>&title=<?php echo $featu_pro->title;?>"><?php echo $result3;?>...</a></h3>
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
                         	<li class="leaf"><a href="index.php">Home Page</a></li>
                            <li class="leaf"><a href="sitemap.php">Site map</a></li>
                            <li class="leaf"><a href="our-agents.php">Our agents</a></li>
                            <li class="leaf"><a href="faq.php">FAQ</a></li>
                            <li class="leaf"><a href="contact-us.php">Contact us</a></li>
                            <li class="leaf"><a href="about-us.php">About us</a></li>
                            <li class="last leaf"><a href="termsandconditions.php">Terms & Conditions</a></li>
                        </ul>
                    </div><!-- /.content -->
                </div><!-- /.widget -->

                <div class="widget span3">
                    <div class="title">
                        <h2 class="block-title">Say hello!</h2>
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
