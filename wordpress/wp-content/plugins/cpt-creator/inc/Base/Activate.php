<?php

namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

		$default = array();

		if ( ! get_option( 'cptcreator_plugin' ) ) {
			update_option( 'cptcreator_plugin', $default );
		}

		if ( ! get_option( 'cptcreator_plugin_cpt' ) ) {
			update_option( 'cptcreator_plugin_cpt', $default );
		}

		if ( ! get_option( 'cptcreator_plugin_tax' ) ) {
			update_option( 'cptcreator_plugin_tax', $default );
		}
	}
}