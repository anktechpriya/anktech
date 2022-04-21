<?php

/**
 * Enqueue scripts and styles.
 */
function custom_style()
{
	 wp_enqueue_style('custom-style', get_stylesheet_uri());
	 wp_enqueue_style('style-css-style', get_stylesheet_directory_uri() . '/css/style.css');
     wp_enqueue_style('custom-css-style', get_stylesheet_directory_uri() . '/css/custom.css');
	 wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js' );
}
add_action('wp_enqueue_scripts', 'custom_style');

/**
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

/**
 * Implement the Category Image.
 */
require get_template_directory().'/inc/catimage/catimage.php';

/**
 * Functions which enhance the theme by breadcrumb.
 */
require get_template_directory().'/inc/breadcrumb/breadcrumb.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/excerpt/hide.php';

require get_template_directory().'/inc/excerpt/headerurl.php';

require get_template_directory().'/inc/excerpt/excerpt.php';

require get_template_directory().'/inc/widget/widget.php';

/**
 * Custom css and js for this theme.
 */
require get_template_directory().'/inc/widget/wphead.php';