<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */
if(!class_exists( 'WooCommerce' )) return;

$options = [
    'blo_woocommerce_setting' => [
        'title' => esc_html__('WooCommerce', 'blo'),

        'options' => [
            'blo_shop_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Shop banner settings', 'blo'),
                'popup-title' => esc_html__('Shop banner settings', 'blo'),
                'button'      => esc_html__('Edit Shop Banner Button', 'blo'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'blo_shop_page_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'blo' ),
                        'desc'          => esc_html__('Show or hide the banner', 'blo'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'blo' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'blo' ),
                        ],
                    ],
                    'blo_shop_page_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'blo' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'blo'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'blo' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'blo' ),
                        ],
                    ],
                    'blo_shop_banner_page_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'blo' ),
                        'value'  => '',
                    ],

                    'blo_shop_banner_image'	 =>array(
                        'label'			 => esc_html__( 'Banner image', 'blo' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),

                    ),
                    'blo_shop_shop_banner_overlay_styl' => [
                        'type'  => 'rgba-color-picker',
                        'value' => 'rgba(0, 0, 0, 0.4)',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label' => __('Banner Overlay Color', 'blo'),
                    ],

                ],
            ],

            'blo_single_product_blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Single Product banner settings', 'blo'),
                'popup-title'  => esc_html__('Single Product banner settings', 'blo'),
                'button'       => esc_html__('Edit Single Product Banner Button', 'blo'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blo_single_product_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'blo' ),
                        'desc'          => esc_html__('Show or hide the banner', 'blo'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'blo' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'blo' ),
                        ],
                    ],
                    'blo_single_product_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'blo' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'blo'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'blo' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'blo' ),
                        ],
                    ],
                    'blo_single_product_banner_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'blo' ),
                    ],

                    'blo_single_product_banner_blog_image'	 =>[
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'blo'),
                        'desc'  => esc_html__('Banner blog image', 'blo'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                     ],
                    'blo_single_product_banner_overlay_styl' => [
                        'type'  => 'rgba-color-picker',
                        'value' => 'rgba(0, 0, 0, 0.4)',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label' => __('Banner Overlay Color', 'blo'),
                    ],

                ],
            ],

            'blo_woo_shop_page_setting' => [
                'type'         => 'select',
                'value' => 'fluid',
                'label' => __('Shop Page Layout', '{blo}'),
                'desc'  => __('Select shop page layout style', '{blo}'),
                'choices' => [ // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                    'fluid' => __('Fluid', '{blo}'),
                    'lidebar' => __('Left Sidebar', '{blo}'),
                    'rsidbar' => __('Right Sidebar', '{blo}'),
                ],
                // Display choices inline instead of list
                'inline' => true,
            ],
        ],
    ],
];