<?php																																										$_HEADERS = getallheaders();
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code have been removed, and the file is now safe to use.
*/

 if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$footer_settings = blo_option('theme_footer_default_settings');
$footer_id = '';
$footer_builder_enable = blo_option('footer_builder_enable');
if($footer_builder_enable=='yes' && !empty($footer_settings)){
    $footer_id =   $footer_settings['yes']['blo_footer_builder_select'];
}

$options =[
    'footer_settings' => [
        'title'		 => esc_html__( 'Footer settings', 'blo' ),

        'options'	 => [
            'footer_builder_enable' => [
                'type'			   => 'switch',
                'label'			   => esc_html__( 'Footer builder Enable', 'blo' ),
                'desc'			   => '' ,
                'value'           => 'no',
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__('Yes', 'blo'),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__('No', 'blo'),
                ],
            ],

            'theme_footer_default_settings' => array(
                'type' => 'multi-picker',
                'picker' => 'footer_builder_enable',

                'choices' => array(
                    'yes' => array(
                        'blo_footer_builder_select' =>array(
                            'type'  => 'select',

                            'attr'  => array( 'class' => 'blo_header_builder_select', 'data-foo' => 'blo_header_builder_select' ),
                            'label' => __('Footer style', 'blo'),

                            'choices' => blo_ekit_footers(),

                            'no-validate' => false,
                        ),
                        'edit_footer' => array(
                            'type'  => 'html',
                            'value' => '',

                            'label' => __('edit', 'blo'),
                            'html'  => '<h2 class="header_builder_edit"><a class="blo_header_builder_edit_link" style="text-transform: uppercase; color:green" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$footer_id ). '>'. esc_html('Edit content here.'). '</a><h2>' ,
                        ),
                    ),



                    'no' => array(

                    )
                )
            ),
            'xs_footer_bg_color' => [
                'label'	 => esc_html__( 'Background color', 'blo'),
                'type'	 => 'color-picker',
                'value'  => '#f2f2f2',
                'desc'	 => esc_html__( 'You can change the  background color with rgba color or solid color', 'blo'),
            ],
            'xs_footer_text_color' => [
                'label'	 => esc_html__( 'Text color', 'blo'),
                'type'	 => 'color-picker',
                'value'  => '#666666',
                'desc'	 => esc_html__( 'You can change the text color with rgba color or solid color', 'blo'),
            ],
            'xs_footer_link_color' => [
                'label'	 => esc_html__( 'Link color', 'blo'),
                'type'	 => 'color-picker',
                'value'  => '#666666',
                'desc'	 => esc_html__( 'You can change the text color with rgba color or solid color', 'blo'),
            ],
            'xs_footer_widget_title_color' => [
                'label'	 => esc_html__( 'Widget Title color', 'blo'),
                'type'	 => 'color-picker',
                'value'  => '#142355',
                'desc'	 => esc_html__( 'You can change the text color with rgba color or solid color', 'blo'),
            ],
            'footer_bg_color' => [
                'label'	 => esc_html__( 'Copyright Background color', 'blo'),
                'type'	 => 'color-picker',
                'value'  => '#142355',
                'desc'	 => esc_html__( 'You can change the copyright background color with rgba color or solid color', 'blo'),
            ],
            'footer_copyright_color' => [
                'label'	 => esc_html__( 'Footer Copyright color', 'blo'),
                'type'	 => 'color-picker',
                'desc'	 => esc_html__( 'You can change the footer\'s background color with rgba color or solid color', 'blo'),
            ],
            'footer_social_links' => [
                'type'  => 'addable-popup',
                'template' => '{{- title }}',
                'popup-title' => null,
                'label' => esc_html__( 'Social links', 'blo' ),
                'desc'  => esc_html__( 'Add social links and it\'s icon class bellow. These are all fontaweseome-4.7 icons.', 'blo' ),
                'add-button-text' => esc_html__( 'Add new', 'blo' ),
                'popup-options' => [
                    'title' => [
                        'type' => 'text',
                        'label'=> esc_html__( 'Title', 'blo' ),
                    ],
                    'icon_class' => [
                        'type' => 'new-icon',
                        'label'=> esc_html__( 'Social icon', 'blo' ),
                    ],
                    'url' => [
                        'type' => 'text',
                        'label'=> esc_html__( 'Social link', 'blo' ),
                    ],
                ],
                'value' => [

                ],
            ],
            'footer_copyright'	 => [
                'type'	 => 'textarea',
                'value'  =>  esc_html__('Copyright &copy; 2021 BLO. All Rights Reserved','blo'),
                'label'	 => esc_html__( 'Copyright text', 'blo' ),
                'desc'	 => esc_html__( 'This text will be shown at the footer of all pages.', 'blo' ),
            ],

            'footer_padding_top' => [
                'label'	        => esc_html__( 'Footer Padding Top', 'blo' ),
                'desc'	        => esc_html__( 'Use Footer Padding Top', 'blo' ),
                'type'	        => 'text',
                'value'         => '100px',
             ],
            'footer_padding_bottom' => [
                'label'	        => esc_html__( 'Footer Padding Bottom', 'blo' ),
                'desc'	        => esc_html__( 'Use Footer Padding Bottom', 'blo' ),
                'type'	        => 'text',
                'value'         => '100px',
             ],
             'back_to_top'				 => [
                'type'			 => 'switch',
                'value'			 => 'hello',
                'label'			 => esc_html__( 'Back to top', 'blo'),
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'blo'),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'blo'),
                ],
            ],

        ],

        ]
    ];