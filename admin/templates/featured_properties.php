		
		

 <div class="carousel">
    <h2 class="page-header">Featured properties</h2>
    
    
<?php 
$sql4 = "SELECT * FROM property WHERE verified=2 AND ad_type=3 ORDER BY id DESC LIMIT 6";
$featured_property = property::find_by_sql($sql4);
?>      
    

    <div class="content">
        <a class="carousel-prev" href="detail.html">Previous</a>
        <a class="carousel-next" href="detail.html">Next</a>
        <ul>
        
        
        	<?php foreach ($featured_property as $featu_pro) :?>
            <li>
                            <div class="image">
                                <a href="View_single_property.php?id=<?php echo $featu_pro->id;?>&title=<?php echo $featu_pro->title;?>"></a>
                                
                                            <?php 
                                            $sql4 = "SELECT * FROM property_images WHERE property_id= ".$featu_pro->id." AND img_no=1";
                                            $feature_pro_imge = property_images::find_by_sql($sql4);
                                            ?>
                                            
                                            
                                            <?php foreach ($feature_pro_imge as $fpm) :?>
                                                 <img  width="270" height="200" src="../property_imasg/<?php echo $fpm->name;?>" alt="<?php echo $fpm->name;?>">
                                            <?php endforeach; ?>
                                            
                            </div><!-- /.image -->
                            
                            
                            <div class="title">
                                <?php $result3 = substr($featu_pro->title, 0, 21);?>
                                <h3><a href="View_single_property.php?id=<?php echo $featu_pro->id;?>&title=<?php echo $featu_pro->title;?>"><?php echo $result3;?>...</a></h3>
                            </div><!-- /.title -->
                
                
                <div class="location"><?php echo $featu_pro->city;?>, <?php echo $featu_pro->district;?></div><!-- /.location-->
                <div class="price"><?php echo $featu_pro->price;?></div><!-- .price -->
                <div class="area">
                    <span class="key">Size:</span>
                    <span class="value"><?php echo $featu_pro->size;?></span>
                </div><!-- /.area -->
                <div class="bathrooms"><div class="inner"><?php echo $featu_pro->bath;?></div></div><!-- /.bathrooms -->
                <div class="bedrooms"><div class="inner"><?php echo $featu_pro->bed;?></div></div><!-- /.bedrooms -->
            </li>
			<?php endforeach; ?>



        </ul>
    </div><!-- /.content -->
</div><!-- /.carousel -->        