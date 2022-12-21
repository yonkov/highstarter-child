<?php

if ( ! defined( 'HIGHSTARTER_CHILD_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'HIGHSTARTER_CHILD_VERSION', '1.0.0' );
}

function highstarter_child_webpack_scripts_and_styles() {
	$script_asset = include_once( get_stylesheet_directory() . '/build/app.asset.php' );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri()  . '/build/app.js', $script_asset['dependencies'], $script_asset['version'], true );
	wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri()  . '/build/main.css', array(), HIGHSTARTER_CHILD_VERSION );
}
add_action( 'wp_enqueue_scripts', 'highstarter_child_webpack_scripts_and_styles', 100 );