<?php

function highstarter_child_webpack_scripts_and_styles() {
	$script_asset = include_once( get_stylesheet_directory() . '/build/app.asset.php' );
	$style_asset = include_once( get_stylesheet_directory() . '/build/main.asset.php' );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri()  . '/build/app.js', $script_asset['dependencies'], $script_asset['version'], true );
	wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri()  . '/build/main.css', $script_asset['dependencies'], $style_asset['version'] );
}
add_action( 'wp_enqueue_scripts', 'highstarter_child_webpack_scripts_and_styles', 100 );

// Add support for align-wide
function hightstarter_child_theme_supported_features() {
	add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'hightstarter_child_theme_supported_features' );