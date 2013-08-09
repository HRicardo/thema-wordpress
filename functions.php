<?php

	// definir la carpeta raiz del tema y la carpeta de imagenes del tema
	
	define('TEMPATH', get_bloginfo('stylesheet_directory'));
	define('IMAGE', TEMPATH. "/image");

	add_theme_support('nav-menu');

	// añadir soporte para menus

	if(function_exists('register_nav_menus'))
	{
		register_nav_menus(array('main' => ''));
	} 

	// añadir soporte para widgets

	if(function_exists('register_sidebar'))
	{
		$propiedades = array('name' => __('Primary Sidebar', 'primary-sidebar'),
					'id' => 'Primary-widget-area',
					'description' => __('The primary widget area', 'dir'),
					'brefore_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>', );
		register_sidebar($propiedades);

		register_sidebar(array('name' => __('Secundary Sidebar', 'secundary-sidebar'),
					'id' => 'Secundary-widget-area',
					'description' => __('segunda area para widgets', 'dir'),
					'brefore_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>', ));

		register_sidebar(array('name' => __('Tercer Sidebar', 'tercer-sidebar'),
					'id' => 'Tercer-widget-area',
					'description' => __('tercera area para widgets', 'dir'),
					'brefore_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>', ));

	}
?>
