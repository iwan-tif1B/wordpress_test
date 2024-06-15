<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$options =[
    'style_settings' => [
            'title'		 => esc_html__( 'Style settings', 'blo' ),
            'options'	 => [
                'style_body_bg' => [
                    'label'	        => esc_html__( 'Body background', 'blo' ),
                    'desc'	           => esc_html__( 'Site\'s main background color.', 'blo' ),
                    'type'	           => 'color-picker',
                 ],

                'style_primary' => [
                    'label'	        => esc_html__( 'Primary color', 'blo' ),
                    'desc'	           => esc_html__( 'Site\'s main color.', 'blo' ),
                    'type'	           => 'color-picker',
                ],

                'secondary_color' => [
                    'label'	        => esc_html__( 'Secondary color', 'blo' ),
                    'desc'	           => esc_html__( 'Secondary color.', 'blo' ),
                    'type'	           => 'color-picker',
                ],
                
                'title_color' => [
                'label'	        => esc_html__( 'Title color', 'blo' ),
                'desc'	        => esc_html__( 'Blog title color.', 'blo' ),
                'type'	        => 'color-picker',
                ],

                'body_font'    => array(
                    'type' => 'typography-v2',
                    'label' => esc_html__('Body Font', 'blo'),
                    'desc'  => esc_html__('Choose the typography for the title', 'blo'),
                    'value' => array(
                        'family' => 'Rubik',
                        'size'  => '15',
                        'font-weight' => '400',
                    ),
                    'components' => array(
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ),
                ),
                
                'heading_font_one'	 => [
                    'type'		 => 'typography-v2',
                    'value'		 => [
                        'family'		 => 'Merriweather',
                        'size'  => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H1 and H2 Fonts', 'blo' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'blo' ),
                ],

                'heading_font_two'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H3 Fonts', 'blo' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'blo' ),
                ],

                'heading_font_three'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H4 Fonts', 'blo' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'blo' ),
                ],

            
            
            ],
        ],
    ];