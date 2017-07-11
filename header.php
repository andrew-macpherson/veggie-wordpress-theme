<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<link href="<?php echo get_stylesheet_directory_uri() ?>/src/css/main.css" rel="stylesheet">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<!-- header -->
<header class="header clear jumbotron" role="banner">
	<div class="container">
			<div class="logo d-flex">
				<div class="col-12">
					
				</div>
			</div>

			<nav class="navbar navbar-toggleable-md navbar-light bg-faded" role="navigation">

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			
			<a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" /></a>

				<div class="collapse navbar-collapse">
					<?php 
					wp_nav_menu( 
						array(
							'theme_location'    => 'main',
							'container'         => 'false',
							'menu_class'        => 'navbar-nav mr-auto',
							'walker'			=> new bootstrap_Walker()
						)
					);
					?>
				</div>
		    </nav>
	</div>
</header>
<!-- /header -->
