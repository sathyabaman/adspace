<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title>Our Agents - adspace.lk</title>
	<meta name="Description" content="list of all our agents in sri lanka" />  
    <meta name="Keywords" content="agents, agents list, company agents, sri lanka" />

<?php include('templates/call_css_jvscrpt_files.php'); ?>
    
        
	<?php require_once("../includes/initialize.php"); ?>
	<?php if (!$session->is_logged_in()) { redirect_to("../login.php"); } ?>

</head>




<?php include('templates/header.php'); ?>





            <!-- CONTENT -->
            <div id="content">
<div class="container">
    <div>
        <div id="main">
            <div class="our-agents-large">
    <h2 class="page-header">Our agents</h2>

    <div class="content">
        <div class="agent">
            <div class="row">
                <div class="image span2">
                    <img src="assets/img/photos/jeri_large.png" alt="Emma">
                </div><!-- /.image -->

                <div class="body span6">
                    <h3>Jerishan Arc</h3>
                    <p>Property and Bussiness Research.</p>
                </div><!-- /.body -->

                <div class="info span4">
                    <div class="box">
                        <div class="phone">077-958-5267 </div>
                        <div class="office">(021) 237-4540 </div>
                        <div class="email">jerishan@adspace.lk </div>
                    </div>
                </div><!-- /.info -->
            </div><!-- /.row -->
        </div><!-- /.agent -->




        <div class="agent">
            <div class="row">
                <div class="image span2">
                    <img src="assets/img/photos/satha_large.png" alt="Emma">
                </div><!-- /.image -->

                <div class="body span6">
                    <h3>K.sathapalan</h3>
                    <p>Property Research and Developement.</p>
                </div><!-- /.body -->

                <div class="info span4">
                    <div class="box">
                        <div class="phone">078-452-7816 </div>
                        <div class="office">(011) 452-5840 </div>
                        <div class="email">sathapalan@adspace.lk </div>
                    </div>
                </div><!-- /.info -->
            </div><!-- /.row -->
        </div><!-- /.agent -->




    </div><!-- /.content -->
</div><!-- /.our-agents -->        </div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->



<?php include('templates/footer.php'); ?>