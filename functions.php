<?php

function highstarter_child_enqueue_theme_styles() {
	// Register child theme's styles
	wp_enqueue_style( 'highstarter-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'highstarter_child_enqueue_theme_styles', 999 );

/* Add your child theme's code snippets below */
