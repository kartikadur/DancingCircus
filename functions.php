<?php

//Cascading Style Sheets
function enqueue_my_styles() {
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('my-bootstrap-style', get_template_directory_uri() . '/style.css');
}

//JavaScript
function enqueue_my_scripts() {
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', '1.9.1', true);
	// Bootstrap relies on we need the jquery library
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/holder.js', array('jquery'), true);
	// all the Bootstrap javascript goodness
}

//Enqueuing CSS and JavaScript
add_action('wp_enqueue_scripts', 'enqueue_my_styles');
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

//Menu or Navigation
register_nav_menus(array('primary' => __('Primary Menu', 'dancingcircus'),
// 'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
));

register_nav_menus(array('primary' => __('Primary Menu', 'dacningcircus'), ));

//Sidebar
if (function_exists('register_sidebar')) {
	register_sidebar(array('name' => 'Primary Sidebar', 'before_widget' => '<li id="%1$s">', 'after_widget' => '</li>', 'before_title' => '<h2>', 'after_title' => '</h2>'));
}

//Enable post Thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(672, 372, true);
add_image_size('twentyfourteen-full-width', 1038, 576, true);

require_once ('inc/nav.php');
?>