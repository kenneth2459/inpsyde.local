<!DOCTYPE html>
<html lang="en">
<head>
	<?php if ( is_home() ) {?>
		<title><?php bloginfo('name') ?></title>
	<?php } else { ?>	
		<title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name') ?> </title>
	<?php }	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name=”title” content=”<?php wp_title('|',true,'right'); ?>  <?php bloginfo('name') ?> ” />
	<meta name="description" content= "Progrentis ejemplo"
	<meta name="robots" content="Index,Follow">
	<meta name="Author" content="">
	<meta name="Generator" content="Wordpress">
	<meta name="Lenguage" content="Es">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head() ?>
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->

	<!-- [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<header class="header">
		<div class="bk-orange padding-top-sm padding-bottom-sm">
			<div class="container">
					<div class="row">
						<div class="col-md-4 font-white">CALL US! 385.154.11.28.35</div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="pull-right">
								<a href="#" class="login">Login</a> <span class="font-white">|</span> <a href="#" class="logout">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bk-gray padding-top-sm padding-bottom-sm">
			<div class="container">
			 	<div class="row">
				    <div class="col-md-12">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<?php 
				    		  	$custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								//echo $image[0];
							?>
							<a class="navbar-brand" href="#">
				    		  	<img class="logo-site" src="<?php echo $image[0]; ?>" />
				    		</a>
							<?php
							wp_nav_menu( array(
							    'menu'              => 'primary_menu',
							    'theme_location'    => 'primary_menu',
							    'depth'             => 2,
							    'container_id'      => 'navbarNav',
							    'container_class'   => 'collapse navbar-collapse',
							    'menu_class'        => 'navbar-nav ml-auto',
							    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							    'walker'            => new WP_Bootstrap_Navwalker())
							);
							?>
						</nav>	
				    </div>
			 	</div>
	    	</div>
	    </div>
	</header>

