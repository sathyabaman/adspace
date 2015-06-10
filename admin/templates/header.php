<body>
<div id="wrapper-outer" >
    <div id="wrapper">
        <div id="wrapper-inner">

		
		<!-- BREADCRUMB -->
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <ul class="breadcrumb pull-left">
                                <li><a href="user_profile.php">Home</a></li>
                            </ul><!-- /.breadcrumb -->

                            <div class="account pull-right">
                                <ul class="nav nav-pills">
								
<?php 
$user=$_SESSION['user_id'];
$sql3 = "SELECT * FROM user WHERE id= ".$user;
$user_name = User::find_by_sql($sql3);
?>
								<?php foreach ($user_name as $usr_nam) :?>
									<li><a href="user_profile.php">Welcome : <?php echo $usr_nam->full_name;?></a></li>
									<?php endforeach; ?>
									<li><a href="user_profile.php">Profile</a></li>
                                    <li><a href="../function/logout.php">Logout</a></li>
                                    
                                </ul>
                            </div>
                        </div><!-- /.span12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-wrapper -->
           

            <!-- HEADER -->
            <div id="header-wrapper">
                <div id="header">
                    <div id="header-inner">
                        <div class="container">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="row">
                                        <div class="logo-wrapper span4">
                                            <a href="#nav" class="hidden-desktop" id="btn-nav">Toggle navigation</a>

                                            <div class="logo">
                                                <a href="index.php" title="Home">
                                                    <img src="../assets/img/logo.png" alt="Home">
                                                </a>
                                            </div><!-- /.logo -->

                                            <div class="site-name">
                                                <a href="index.php" title="Home" class="brand">adspace.lk</a>
                                            </div><!-- /.site-name -->

                                            <div class="site-slogan">
                                                <span>We made Real estate<br>made easy</span>
                                            </div><!-- /.site-slogan -->
                                        </div><!-- /.logo-wrapper -->

                                        <div class="info">
                                            <div class="site-email">
                                                <a href="mailto:info@byaviators.com">info@adspace.lk</a>
                                            </div><!-- /.site-email -->

                                            <div class="site-phone">
                                                <span>075-859-3869</span>
                                            </div><!-- /.site-phone -->
                                        </div><!-- /.info -->

                                        <a class="btn btn-primary btn-large list-your-property arrow-right" href="list-your-property.php">Submit a new property</a>
                                    </div><!-- /.row -->
                                </div><!-- /.navbar-inner -->
                            </div><!-- /.navbar -->
                        </div><!-- /.container -->
                    </div><!-- /#header-inner -->
                </div><!-- /#header -->
            </div><!-- /#header-wrapper -->

            <!-- NAVIGATION -->
            <div id="navigation">
                <div class="container">
                    <div class="navigation-wrapper">
                        <div class="navigation clearfix-normal">

                            <ul class="nav">
                            
                            <a href="index.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Homepage</span>
                                    <ul> </ul>
                                </li>
                             </a>
                             
                                <a href="house.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Houses</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
                                <a href="land.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Lands</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
                                <a href="building.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Buildings</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
                                <a href="appartment.php">
								<li class="menuparent">
                                    <span class="menuparent nolink">Apartments</span>
                                    <ul> </ul>
                                </li>
                                </a>
                                
								<a href="resort.php">
                                <li class="menuparent">
                                    <span class="menuparent nolink">Resorts</span>
                                    <ul> </ul>
                                </li>
                                </a>
								
								
								<li><a href="room.php">Rooms</a></li>
                                
                            </ul><!-- /.nav -->

                            <div class="language-switcher">
                                <div class="current en"><a href="index.php" lang="en">English</a></div><!-- /.current -->
                                <div class="options">
                                    <ul>
                                       
                                    </ul>
                                </div><!-- /.options -->
                            </div><!-- /.language-switcher -->

                            <form  method="post" class="site-search" action="actions/before_city_search.php">
                                <div class="input-append">
                                    <input title="Enter the terms you wish to search for." class="search-query span2 form-text" placeholder="Search by City" type="text" name="city_search">
                                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                                </div><!-- /.input-append -->
                            </form><!-- /.site-search -->
                        </div><!-- /.navigation -->
                    </div><!-- /.navigation-wrapper -->
                </div><!-- /.container -->
            </div><!-- /.navigation -->
