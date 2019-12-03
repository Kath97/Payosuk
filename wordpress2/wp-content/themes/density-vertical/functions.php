<?php 
add_action( 'wp_enqueue_scripts', 'density_vertical_theme_css',20);
function density_vertical_theme_css() {
	wp_enqueue_style( 'density-vertical-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'density-vertical-style',get_stylesheet_directory_uri() . '/css/density-vertical.css');
}