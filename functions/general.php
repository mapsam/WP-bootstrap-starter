<?php

// load bootstrap css and js first, then the site's css from style.css in the root
function wordstrap_queue() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/styles/bootstrap.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_style( 'site',  get_stylesheet_uri() );
}

// use the WP action to hook these into our page build
add_action( 'wp_enqueue_scripts', 'wordstrap_queue' );