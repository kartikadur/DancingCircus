<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- fill this with relevant metadata for the website -->
		<meta name="description" content=""/>
		<meta name="author" content="Kartik Adur" />
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
		<title>The Dance Circus</title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/img/header.png" alt="<?php echo get_bloginfo('name') ?>" />
		</header>
		<nav id="navigation" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs" href="#address">Location &amp; Hours</a>
				</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
					<?php get_search_form(); ?>
					<?php wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary', 'depth' => 1, 'container' => '', 'menu_class' => 'nav navbar-nav navbar-left', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker())); ?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>