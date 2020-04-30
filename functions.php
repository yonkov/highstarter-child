<?php

function highstarter_child_enqueue_theme_styles() {
    //Register parent theme's styles
   wp_enqueue_style( 'highstarter-style', get_template_directory_uri().'/style.css' );
   //Register child theme's styles
   wp_enqueue_style('highstarter-child', get_stylesheet_directory_uri() .'/style.css');
}
add_action( 'wp_enqueue_scripts', 'highstarter_child_enqueue_theme_styles' );

/* Add your child theme's code snippets below */