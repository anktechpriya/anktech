<?php
function custom_style()
{
	 wp_enqueue_style('custom-style', get_stylesheet_uri());
	 wp_enqueue_style('style-css-style', get_stylesheet_directory_uri() . '/css/style.css');
     wp_enqueue_style('custom-css-style', get_stylesheet_directory_uri() . '/css/custom.css');
	 wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js' );
}
add_action('wp_enqueue_scripts', 'custom_style');

add_theme_support( 'post-thumbnails' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

require get_template_directory().'/inc/catimage/catimage.php';

require get_template_directory().'/inc/breadcrumb/breadcrumb.php';

require get_template_directory().'/inc/excerpt/hide.php';

require get_template_directory().'/inc/excerpt/headerurl.php';

require get_template_directory().'/inc/excerpt/excerpt.php';

require get_template_directory().'/inc/widget/widget.php';