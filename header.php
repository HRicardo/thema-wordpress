<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?> ; charset= <?php bloginfo('charset'); ?>" />
	<head>
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<link rel="Stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="Shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/imagen.ico" type="imagen/x-icon" />
	</head>
	<?php wp_head(); ?>
	<body>
		<div id="wrapper">
			<div id="container" class="group">
				<header class="group">
					<!--<img id="logo" src="<?php print IMAGE; ?>/logo.png" alt="<?php bloginfo('name'); ?>" /><!--<?php bloginfo('name'); ?>-->
					<?php wp_nav_menu(array('menu' => 'Main', 'container' => 'nav')); ?>
					<!--<?php get_search_form(); ?>-->
				</header> <!--fin del header-->
				<?php get_sidebar(); ?>
			</div> <!-- fin del container-->
		</div> <!-- fin del wrapper-->
