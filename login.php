<?php ob_start();?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    
    <meta charset="UTF-8"/>
<meta charset="UTF-8"/>        <title>Login - adspace.lk </title>		        
<meta name="Description" content="Login to the best online Real estate in Sri Lanka." />          
<meta name="Keywords" content="adspace, adspace.lk, login, register, join, team, submit a free ad, sri lanka" />


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/chosen/chosen.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/realia-blue.css" type="text/css" id="color-variant-default">
    <link rel="stylesheet" href="#" type="text/css" id="color-variant">
 	 
 	 
 	 
 	 
 	 
 	 
 	 <?php require_once('includes/initialize.php');
 	 if($session->is_logged_in()) {  redirect_to("admin/user_profile.php");}?>	 
 	 	 	      
</head>






<?php include('templates/header.php'); ?>
            <!-- CONTENT --> <div id="content">         
<div class="container">
    <div>
        <div id="main">								<br/>				
        
        
        
        
        
        <?php if ($message ==""): ?>

<?php elseif ($message =="Your registration was sucessfull. Please login."): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php  echo  $message;  ?></strong>
    </div>
<?php elseif ($message =="You have sucessfully Logged out!!. Thank you."): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php  echo  $message;  ?></strong>
    </div>
<?php else: ?>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php  echo  $message;  ?></strong>
    </div>
<?php endif; ?>

		
        
        
        
        
        
        
        
        
        
        
        
        
        
        						
            <h1 class="page-header"></h1>
            <div class="login-register">
<div class="row">
<div class="span4">
    <ul class="tabs nav nav-tabs">
        <li class="active"><a href="#login">Login</a></li>
        <li><a href="#register">Register</a></li>
    </ul>
    <!-- /.nav -->

    <div class="tab-content">
        <div class="tab-pane active" id="login">
            <form method="post" action="actions/login_action.php">
                <div class="control-group">
                    <label class="control-label" for="inputLoginLogin">
                        Email
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="text" id="inputLoginLogin" name="login_email" required="required">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="control-group">
                    <label class="control-label" for="inputLoginPassword">
                        Password
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="password" id="inputLoginPassword" name="login_password" required="required">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="form-actions">
                    <input type="submit" value="Login" name="login" class="btn btn-primary arrow-right">
                </div>
                <!-- /.form-actions -->
            </form>
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="register">
            <form method="post" action="actions/login_action.php">

                <!-- /.control-group -->

                <div class="control-group">
                    <label class="control-label" for="inputRegisterSurname">
                        Full Name
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="text" id="inputRegisterSurname" name="full_name" required="required">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="control-group">
                    <label class="control-label" for="inputRegisterEmail">
                        E-mail
                        <span class="form-required" title="This field is required." >*</span>
                    </label>

                    <div class="controls">
                        <input type="text" id="inputRegisterEmail" name="email" required="required">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="control-group">
                    <label class="control-label" for="inputRegisterPassword">
                        Password
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="password" id="inputRegisterPassword" name="password" required="required">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="control-group">
                    <label class="control-label" for="inputRegisterRetype">
                        Conform Password
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="password" id="inputRegisterRetype" name="conform_password" required="required">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="form-actions">
                    <input type="submit" value="Register" name="register" class="btn btn-primary arrow-right">
                </div>
                <!-- /.form-actions -->
            </form>
        </div>				
        <!-- /.tab-pane -->
    </div><br/> 
    
    <a class="btn btn-primary btn-large list-your-property arrow-right" href="list-your-property.php">I don't want to Register. Submit My Property as a Guest</a>
    
    <!-- /.tab-content -->
</div>
<!-- /.span4-->

<div class="span8">
    <h2 class="page-header">Why advertise on adspace?</h2>

    <div class="images row">
        <div class="item span2">
            <img src="assets/img/icons/circle-dollar.png" alt="">

            <h3>Free services</h3>
        </div>
        <!-- /.item -->
        <div class="item span2">
            <img src="assets/img/icons/circle-search.png" alt="">

            <h3>Easy to find you</h3>
        </div>
        <!-- /.item -->
        <div class="item span2">
            <img src="assets/img/icons/circle-global.png" alt="">

            <h3>Act global or local</h3>
        </div>
        <!-- /.item -->
        <div class="item span2">
            <img src="assets/img/icons/circle-package.png" alt="">

            <h3>All in one package</h3>
        </div>
        <!-- /.item -->
    </div>
    <!-- /.row -->

    <hr class="dotted">

    <p>
        Adspace.lk is the fastest growing onlne real estate in Sri Lanka. We are helping  users to find a property for their  respective needs. We exist to make sure that property management for our clients is high quality, hassle free, efficient and affordable.Our in-house professionals work with a network of tried and trusted experts who are experienced in their field and focused		on meeting your needs. Register today and enjoy unlimited benifits, its totally free!..
    </p>


</div>
</div>
<!-- /.row -->
</div><!-- /.login-register -->        </div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
<?php include('templates/footer.php'); ?>

<?php ob_flush(); ?>