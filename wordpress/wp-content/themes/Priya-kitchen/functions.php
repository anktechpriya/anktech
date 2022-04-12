<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

add_theme_support( 'post-thumbnails' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function custom_style()
{
	 wp_enqueue_style('custom-style', get_stylesheet_uri() , array(), _S_VERSION);
	 wp_enqueue_style('custom-css-style', get_stylesheet_directory_uri() . '/css/custom.css', array(), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'custom_style');


