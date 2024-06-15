<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */

$options = array(
	'settings-page' => array(
		'title'		 => esc_html__( 'Page settings', 'blo' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'header_title'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Banner title', 'blo' ),
				'desc'	 => esc_html__( 'Add your Page hero title', 'blo' ),
			),
			'header_image'	 => array(
                'label'	 => esc_html__( 'Banner image', 'blo' ),
				'desc'	 => esc_html__( 'Upload a page header image', 'blo' ),
				'help'	 => esc_html__( "This default header image will be used for all your service.", 'blo' ),
				'type'	 => 'upload'
           ),
            'sub_header_menu'	 => array(
                'type'  => 'switch',
                'value' => 'no',
                'label' => esc_html__('Display sub header menu?', 'blo'),
                'desc'  => esc_html__('Display sub menu', 'blo'),
                'help'  => esc_html__('A menu will be displayed under Banner', 'blo'),
                'left-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'blo'),
                ),
                'right-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'blo'),
                ),
            )


        ),
	),
);
