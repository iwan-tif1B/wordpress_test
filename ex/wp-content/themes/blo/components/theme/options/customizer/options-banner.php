<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */


$options = [
    'banner_setting' => [
        'title' => esc_html__('Banner settings', 'blo'),

        'options' => [
            'sub_page_banner_overlay_style' => [
                'type'  => 'rgba-color-picker',
                'value' => 'rgba(0, 0, 0, 0.4)',
                'label' => __('Banner Overlay Color', 'blo'),
            ],
            'page_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Page banner settings', 'blo'),
                'popup-title' => esc_html__('Page banner settings', 'blo'),
                'button'      => esc_html__('Edit page Banner', 'blo'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'page_show_banner' => [
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
                    'page_show_breadcrumb' => [
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
                    'banner_page_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'blo' ),
                        'value'  => '',
                    ],

                    'banner_page_image'	 =>array(
                        'label'			 => esc_html__( 'Banner image', 'blo' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),

                        )

                ],
            ],

            'blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Blog banner settings', 'blo'),
                'popup-title'  => esc_html__('Blog banner settings', 'blo'),
                'button'       => esc_html__('Edit Blog Banner', 'blo'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blog_show_banner' => [
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
                    'blog_show_breadcrumb' => [
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
                    'banner_blog_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'blo' ),
                    ],

                    'banner_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'blo'),
                        'desc'  => esc_html__('Blog banner image', 'blo'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),


                    ),
                    'banner_blog_single_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Single blo banner image', 'blo'),
                        'desc'  => esc_html__('Single Blog banner image', 'blo'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),


                    )

                ],
            ],
            'four_zero_four_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('404 banner settings', 'blo'),
                'popup-title'  => esc_html__('404 banner settings', 'blo'),
                'button'       => esc_html__('Edit 404 Banner', 'blo'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'four_zero_four_show_banner' => [
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
                    'banner_blog_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'blo' ),
                    ],

                    'banner_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Banner Image', 'blo'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),


                    )

                ],
            ],
        ],
    ],
];