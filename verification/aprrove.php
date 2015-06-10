<?php


require_once("../includes/initialize.php");


$temp1=new property;
	
$sql="SELECT * FROM `property` WHERE verified='1' ORDER BY id DESC";
	
$ad_approval = property::find_by_sql($sql);
 
 $photo = new property_images;
 

 
?>

<a href="">messages</a>




<table border="3">
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Details</th>
    <th>Description</th>
    <th>Images</th>
    <th>Date</th>
    <th>Approve</th>
    <th>Delete</th>
  </tr>



<?php foreach($ad_approval as $temp1): ?>

  <tr>
    <td><center><?php echo $temp1->id; ?></center></td>
    <td><?php echo $temp1->title; ?></td>
	
	<td>
	
    Category:<?php echo $temp1->category; ?><br/>
    Type:<?php echo $temp1->propert_typ; ?>
    City:<?php echo $temp1->city; ?>
    Name:<?php echo $temp1->contact_name; ?>
    TEl:<?php echo $temp1->tel_home; ?>
		
	</td>
	
    <td><?php echo $temp1->description; ?></td>
 		
   
					<?php
                     $sql2="SELECT * FROM property_images WHERE property_id='".$temp1->id."'";
                     $img_approval = property_images::find_by_sql($sql2);
                    ?>
                    <td> 
					<?php foreach($img_approval as $photo): ?>
                           <img src="../property_imasg/<?php echo $photo->name;?>"  alt="<?php echo $photo->name;?>" width="50" height="50" /><br/>
                    <?php endforeach; ?>
					</td>
            
    <td><?php echo $temp1->date; ?></td>
    <td><center><a href="verifyed.php?id=<?php echo $temp1->id; ?>">Approve_ad</a></center></td>
    <th></th>
  </tr>
<?php endforeach; ?>

</table>

