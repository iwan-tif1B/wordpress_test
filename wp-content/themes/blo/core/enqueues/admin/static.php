<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * enqueue static files: javascript and css for backend
 */




wp_enqueue_style( 'blo-admin',  BLO_CSS . '/xs-admin.css', null,  BLO_VERSION );
if ( defined( 'FW' ) ) {
    wp_enqueue_script('blo-customize', BLO_JS . '/blo-customize.js', array('jquery'), BLO_VERSION, true);
}

wp_localize_script( 'blo-customize', 'admin_url_object',array( 'admin_url' => admin_url( 'post.php?action=elementor&post=' ) ) );
