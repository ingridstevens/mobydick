<?php
/**
 * Custom functions
 */
add_filter( 'widget_text', 'do_shortcode' );

add_action( 'wp_enqueue_scripts', 'my_stylesheet', 222 );
function my_stylesheet () {
	wp_dequeue_style( 'roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, '9880649384aea9f1ee166331c0a30daa');
	wp_enqueue_style( 'child_app', get_stylesheet_directory_uri() . '/assets/css/app.css', false, null);
}

define( 'img_dir', get_stylesheet_directory_uri().'/assets/img/' );

add_action( 'wp_enqueue_scripts', 'my_font_scripts', 2 );
function my_font_scripts () {
	// load webfonts script
	wp_enqueue_style( 'custom-fonts', 'http://fonts.googleapis.com/css?family=Titillium+Web:300' );
}
