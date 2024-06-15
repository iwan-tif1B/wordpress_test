<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: blog
 */

$options =[
    'blog_settings' => [
        'title'		 => esc_html__( 'Blog settings', 'blo' ),

        'options'	 => [
            'blog_sidebar' =>[
                'type'  => 'select',
                              
                'label' => esc_html__('Sidebar', 'blo'),
                'desc'  => esc_html__('Description', 'blo'),
                'help'  => esc_html__('Help tip', 'blo'),
                'choices' => array(
                    '1' => esc_html__('No sidebar','blo'),
                    '2' => esc_html__('Left Sidebar', 'blo'),
                    '3' => esc_html__('Right Sidebar', 'blo'),
                 
                 ),
              
                'no-validate' => false,
            ],   

            'blog_author' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Blog author', 'blo' ),
                'desc'			 => esc_html__( 'Do you want to show blog author?', 'blo' ),
                'value'          => 'no',
                'left-choice' => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'blo' ),
                ],
                'right-choice' => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'blo' ),
                ],
           ],
            'blog_related_post' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Blog related post', 'blo' ),
                'desc'			 => esc_html__( 'Do you want to show single blog related post?', 'blo' ),
                'value'          => 'no',
                'left-choice' => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'blo' ),
                ],
                'right-choice' => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'blo' ),
                ],
           ],

           'blog_related_post_number' => [
            'label'	 => esc_html__( 'Related post count', 'blo' ),
            'type'	 => 'text',
            'value'	 => 3,
           ],
        ],
            
        ]
    ];