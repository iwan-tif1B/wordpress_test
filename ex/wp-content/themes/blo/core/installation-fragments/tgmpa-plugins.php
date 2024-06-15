<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * register required plugins
 */

function blo_register_required_plugins() {
	$plugins	 = array(
		array(
			'name'		 => esc_html__( 'Unyson', 'blo' ),
			'slug'		 => 'unyson',
			'required'	 => true,
		),
		array(
			'name'		 => esc_html__( 'Elementor', 'blo' ),
			'slug'		 => 'elementor',
			'required'	 => true,
		),
        array(
            'name'		 => esc_html__( 'Elementskit Lite', 'blo' ),
            'slug'		 => 'elementskit-lite',
            'required'	 => true,
        ),
		array(
			'name'		 => esc_html__( 'Metform', 'blo' ),
			'slug'		 => 'metform',
			'required'	 => true,
		),
		array(
			'name'		 => esc_html__( 'BLO Essentials', 'blo' ),
			'slug'		 => 'blo-essential',
			'required'	 => true,
			'version'	 => '2.2',
            'source'	 =>  esc_url(BLO_REMOTE_CONTENT . '/plugins/blo-essential.zip')
		),
        array(
            'name'		 => esc_html__( 'Slider Revolution', 'blo' ),
            'slug'		 => 'revslider',
			'required'	 => true,
			'version'	 => '6.3.1',
            'source'	 =>  esc_url(BLO_REMOTE_CONTENT . '/plugins/revslider.zip')
        ),
        array(
            'name'		 => esc_html__( 'WooCommerce', 'blo' ),
            'slug'		 => 'woocommerce',
			'required'	 => false,
        ),
	);


	$config = array(
		'id'			 => 'blo', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'blo-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => false, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'blo_register_required_plugins' );