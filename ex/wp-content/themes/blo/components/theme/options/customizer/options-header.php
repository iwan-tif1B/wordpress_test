<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: Header
 */

$header_settings = blo_option('theme_header_default_settings');
$header_id = '';
$header_builder_enable = blo_option('header_builder_enable');
if($header_builder_enable=='yes' && !empty($header_settings)){
    $header_id =   $header_settings['yes']['blo_header_builder_select'];
}

$options =[
    'header_settings' => [
        'title'		 => esc_html__( 'Header settings', 'blo' ),

        'options'	 => [
            'header_builder_enable' => [
                'type'			   => 'switch',
                'label'			   => esc_html__( 'Header builder Enable', 'blo' ),
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

            'theme_header_default_settings' => array(
                'type' => 'multi-picker',
                'picker' => 'header_builder_enable',

                'choices' => array(
                    'yes' => array(
                        'blo_header_builder_select' =>array(
                            'type'  => 'select',

                            'attr'  => array( 'class' => 'blo_header_builder_select', 'data-foo' => 'blo_header_builder_select' ),
                            'label' => __('Header style', 'blo'),

                            'choices' => blo_ekit_headers(),

                            'no-validate' => false,
                        ),
                        'edit_header' => array(
                            'type'  => 'html',
                            'value' => '',

                            'label' => __('edit', 'blo'),
                            'html'  => '<h2 class="header_builder_edit"><a class="blo_header_builder_edit_link" style="text-transform: uppercase; color:green" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$header_id ). '>'. esc_html('Edit header content here.'). '</a><h2>' ,
                        ),
                    ),
                    'no' => array(

                    )
                )
            ),
             'header_nav_sticky' => [
               'type'			   => 'switch',
               'label'			   => esc_html__( 'Sticky header', 'blo' ),
               'desc'			   => esc_html__('Do you want to enable sticky nav?', 'blo' ),
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



             'header_top_info_show' => [
               'type'			    => 'switch',
               'label'			 => esc_html__( 'Show Topbar', 'blo' ),
               'desc'			    => esc_html__( 'Do you want to show topbar?', 'blo' ),
               'value'          => 'no',
               'left-choice'	 => [
                   'value'	 => 'yes',
                   'label'	 => esc_html__('Yes', 'blo'),
               ],

               'right-choice'	 => [
                   'value'	 => 'no',
                   'label'	 => esc_html__('No', 'blo'),
                  ],
               ],

               'header_contact_mail' => [
                  'type'			    => 'text',
                  'label'			    => esc_html__( 'Contact mail', 'blo' ),
                  'desc'			    => esc_html__( 'Give mail.', 'blo' ),
                  'value'            => esc_html__('contact@domain.com','blo'),
               ],

               'header_contact_address' => [
                  'type'			    => 'text',
                  'label'		    	 => esc_html__( 'Contact address title', 'blo' ),
                  'desc'			    => esc_html__( 'Give office address.', 'blo' ),
                  'value'            => esc_html__('105 Roosevelt Street CA','blo'),
               ],

               'header_Contact_number' => [
                  'type'			    => 'text',
                  'label'		    	 => esc_html__( 'Contact number title', 'blo' ),
                  'desc'			    => esc_html__( 'Give Contact Number for header  style 3.', 'blo' ),
                  'value'            => esc_html__('+1 212-554-1515','blo'),
               ],
               'header_nav_search_section' => [
                  'type'			 => 'switch',
                  'label'		    => esc_html__( 'Search button show', 'blo' ),
                  'desc'			 => esc_html__( 'Do you want to show search button in header ?', 'blo' ),
                  'value'         => 'no',
                  'left-choice'	 => [
                     'value'     => 'yes',
                     'label'	   => esc_html__( 'Yes', 'blo' ),
                  ],
                  'right-choice'	 => [
                     'value'	 => 'no',
                     'label'	 => esc_html__( 'No', 'blo' ),
                  ],
                ],


                'header_quota_button' => array(
                  'type'         => 'multi-picker',
                  'label'        => false,
                  'desc'         => false,
                  'picker'       => array(
                      'style' => array(
                          'type'			 => 'switch',
                          'label'		 => esc_html__( 'Show CTA button ', 'blo' ),
                          'value'       => 'no',
                          'left-choice'	 => [
                             'value'   	     => 'yes',
                             'label'	        => esc_html__( 'Yes', 'blo' ),
                          ],
                          'right-choice'	 => [
                             'value'	 => 'no',
                             'label'	 => esc_html__( 'No', 'blo' ),
                          ],

                      )
                  ),
                  'choices'      => array(
                       'yes' => array(
                        'header_quota_text' => [
                           'type'			    => 'text',
                           'label'			    => esc_html__( 'Quote text', 'blo' ),
                           'desc'			    => esc_html__( 'Navigation quote text.', 'blo' ),
                           'value'            => esc_html__('Get a quote','blo'),
                        ],
                       'header_quota_url' => [
                           'type'			    => 'text',
                           'label'			    => esc_html__( 'Quote link', 'blo' ),
                           'desc'			    => esc_html__( 'Navigation quote link.', 'blo' ),
                           'value'            => esc_html__('#','blo'),
                        ],
                       ),



                  ),
                  'show_borders' => false,
              ),




        ], //Options end
    ]
];