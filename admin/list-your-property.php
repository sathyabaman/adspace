<? ob_start(); ?>



<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title>List your property - adspace.lk </title>
    <meta name="Description" content="real estate, list your property,submit your property for free in sri lanka" />  
        <meta name="Keywords" content="adspace, list your property, submit a free ad, sri lanka" />
<?php include('templates/call_css_jvscrpt_files.php'); ?>
 
    
 <?php require_once("../includes/initialize.php"); ?><?php if (!$session->is_logged_in()) { redirect_to("../login.php"); } ?>
     
     <?php 	$max_file_size = 30485760;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB?>
                                
    
     
</head>



<?php include('templates/header.php'); ?>




            <!-- CONTENT -->
            <div id="content">
<div class="container">
    <div>
        <div id="main">
            <div class="list-your-property-form">
    <h2 class="page-header">List your property</h2>

    <div class="content">
        <div class="row">
            <div class="span8">
                <p>
                    Now its very easy to list your property on adspace.lk. Just fill the form below and clik on "submit my property" button.
                </p>
            </div><!-- /.span8 -->
        </div><!-- /.row -->

        <form method="post" enctype="multipart/form-data" action="actions/submit_property.php">
            <div class="row">
                <div class="span4">
                    <h3><strong>1.</strong> <span>Property Details</span></h3>

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyFirstName">
                            Title
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text"  name="Title" id="inputPropertyFirstName">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    


					
					
					<div class="property-type control-group">
                        <label class="control-label" for="inputPropertyPropertyType">
                            Property type
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="inputPropertyPropertyType" name="category">
                                
                                                 <option value="House">Houses</option>
                                                  <option value="Land">Lands</option>
                                                  <option value="Building">Buildings</option>
                                                  <option value="Appartment">Appartments</option>
                                                  <option value="Holiday Resorts">Resorts</option>
                                                  <option value="Rooms">Rooms</option>
                            
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="contract-type control-group">
                        <label class="control-label" for="inputPropertyContractType">
                            Contract type
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="inputPropertyContractType" name="pro_type">
                            
                                				  <option value="Sale">Sale</option>
                                                  <option value="Rent">Rent</option>
                                                  <option value="Lease">Lease</option>
                                                  <option value="Other">Other</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					
					<div class="bedrooms control-group">
                        <label class="control-label" for="inputPropertyBedrooms">
                            No of Bedrooms
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="bed" id="inputPropertyBedrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="bathrooms control-group">
                        <label class="control-label" for="inputPropertyBathrooms">
                            No of Bathrooms
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="bath" id="inputPropertyBathrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

					
					
					<div class="area control-group">
                        <label class="control-label" for="inputPropertyArea">
                            Size
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="no_perches" id="inputPropertyArea">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="price control-group">
                        <label class="control-label" for="inputPropertyPrice">
                            Price
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text"  name="price" id="inputPropertyPrice">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					<div class="control-group">
                        <label class="control-label" for="Address">
                            Address
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="address" id="Address">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					
					<div class="area control-group">
                        <label class="control-label" for="inputPropertyArea">
                            City
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text"  name="city" id="inputPropertyArea">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					
					<div class="contract-type control-group">
                        <label class="control-label" for="fordistrict">
                            District
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="fordistrict" name="district">
                                <?php include('templates/district_selection.php'); ?>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
 

                </div><!-- /.span4 -->

				
				
				
				
				
				
                <div class="span4">
                    <h3><strong>2.</strong> <span>Contact Details</span></h3>
					
					
					<div class="control-group">
                        <label class="control-label" for="inputPropertySurname">
                            Contact Name
                            
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="contact_name" id="inputPropertySurname">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					<div class="control-group">
                        <label class="control-label" for="inputPropertyEmail">
                            Email Address
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="email" id="inputPropertyEmail">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					<div class="control-group">
                        <label class="control-label" for="inputPropertyEmail">
                            Skype Id
                            
                        </label>
                        <div class="controls">
                            <input type="text" name="skype" id="inputPropertyEmail">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
		
					
					
					
					
					<div class="control-group">
                        <label class="control-label" for="inputPropertyPhone">
                            Phone Home
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="telephone1" id="inputPropertyPhone">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					<div class="control-group">
                        <label class="control-label" for="inputPropertyPhone">
                            Phone 2
                            
                        </label>
                        <div class="controls">
                            <input type="text" name="telephone2" id="inputPropertyPhone">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
					<div class="control-group">
                        <label class="control-label" for="inputPropertyPhone">
                            Website                            
                        </label>
                        <div class="controls">
                            <input type="text" name="web" id="inputPropertyPhone">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
                </div><!-- /.span4 -->

                <div class="span4">
                    <h3><strong>3.</strong> <span>Image upload</span></h3>

                    <div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image 1
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>				
                            					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="img1"/>
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->

                  
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image 2
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            
                            					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="img2" />
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					
					
					
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image 3
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            
                            					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="img3"/>
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					
					
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image 4
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            
                            					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="img4"/>
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					
					
					
					
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image 5
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            
                            					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="img5"/>
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					
					
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image 6
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            
                            					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="img6"/>
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					
					
					
					
				
					
                </div><!-- /.span4 -->
				
			
            </div><!-- /.row -->
			
			
			<div class="control-group">
                        <label class="control-label" for="inputPropertyNotes">
                            Property Discription
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls"  style="margin-right:15%;">
                            <textarea  name="description" required="required" value="" id="inputPropertyNotes"></textarea>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
					
			<input class="btn btn-primary btn-large list-your-property arrow-right" type="submit" name="submit" value="Submit My Property" style="float:right; margin-right:15%;"/>
            
        </form>
        
    </div><!-- /.content -->
</div><!-- /.list-your-property-form -->        
</div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->







<?php include('templates/footer.php'); ?>



<? ob_flush(); ?>