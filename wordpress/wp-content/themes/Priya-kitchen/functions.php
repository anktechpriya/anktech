<?php

add_theme_support( 'post-thumbnails' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function custom_style()
{
	 wp_enqueue_style('custom-style', get_stylesheet_uri());
	 wp_enqueue_style('custom-css-style', get_stylesheet_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'custom_style');

function slider() {
	?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<?php
}
add_action('wp_enqueue_scripts', 'slider');

require get_template_directory().'/inc/categoryimage/categoryimage.php';
