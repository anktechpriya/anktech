<?php
/*
Plugin Name: CPT Creator
Description: This is my first attempt on writing a custom Plugin.
Author: Priya
*/

defined( 'ABSPATH' ) or die();

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

function activate_cptcreator_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_cptcreator_plugin' );

function deactivate_cptcreator_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_cptcreator_plugin' );

if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services(); 
}
