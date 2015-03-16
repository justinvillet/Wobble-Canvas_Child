<?php
/**
 * Proper way to enqueue scripts and styles
 */
function wobble_frontend_scripts() {
	wp_enqueue_style( 'skeleton', get_stylesheet_directory_uri() . '/css/skeleton.css' );
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wobble_frontend_scripts' );