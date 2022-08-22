<?php
//hide updation of plugin
remove_action( 'load-update-core.php', 'wp_update_plugins' );



//deactivation of plugin
function deactivate_plugin_conditional() {
    if ( is_plugin_active('advanced-custom-fields-pro/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro/acf.php');    
    }
}
add_action( 'admin_init', 'deactivate_plugin_conditional' );