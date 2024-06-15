<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 * section name format: blo_section_{section name}
 */
$options = [
	'blo_section_theme_settings' => [
		'title'				 => esc_html__( 'Theme settings', 'blo' ),
		'options'			 => Blo_Theme_Includes::_customizer_options(),
		'wp-customizer-args' => [
			'priority' => 1,
		],
	],
];
