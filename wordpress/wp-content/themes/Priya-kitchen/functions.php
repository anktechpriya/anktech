<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 400,400 );
}

add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

