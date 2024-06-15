<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Blo_Team_Widget extends Widget_Base {

    public function get_name() {
        return 'blo-team';
    }


    public function get_title() {
        return esc_html__( 'BLO Team', 'blo' );
    }

    public function get_icon() {
        return 'icon icon-team';
    }

    public function get_categories() {
        return ['blo-elements'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'blo_team_content',
            [
                'label' => __( 'Content', 'blo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );

        $this->add_control(
			'team_member_image',
			[
				'label' => __( 'Choose Image', 'blo' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
        );

        $this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
                'label' => __( 'Image Size', 'blo' ),
                'name' => 'team_image_size',
				'default' => 'large',
			]
		);

        $this->add_control(
			'team_memeber_name',
			[
				'label' => __( 'Name', 'blo' ),
				'type' => Controls_Manager::TEXT,
                'default' => __( 'Richard Branson', 'blo' ),
                'label_block' => true,
			]
        );
        $this->add_control(
			'team_memeber_position',
			[
				'label' => __( 'Position', 'blo' ),
				'type' => Controls_Manager::TEXT,
                'default' => __( 'Manager', 'blo' ),
                'label_block' => true,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'blo_team_social',
            [
                'label' => __( 'Social', 'blo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );

        $blo_social_repeater = new Repeater();

        $blo_social_repeater->add_control(
            'blo_social_icon',
            [
                'label' => esc_html__( 'Icon', 'blo' ),
                'label_block' => true,
                'type' => Controls_Manager::ICON,
                'default' => 'icon icon-facebook',
            ]
        );

        $blo_social_repeater->add_control(
			'blo_social_linbk',
			[
				'label' => __( 'Link', 'blo' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( '#', 'blo' ),
				'show_external' => true,
				'default' => [
                    'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
        );



        $blo_social_repeater->start_controls_tabs(
            'blo_social_hover_tab_parent'
        );

        $blo_social_repeater->start_controls_tab(
            'blo_social_normal_tab',
            [
                'label' => __( 'Normal', 'blo' ),
            ]
        );

        $blo_social_repeater->add_control(
            'blo_social_icon_color',
            [
                'label' => __( 'Icon Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}}  {{CURRENT_ITEM}} a i' => 'color: {{VALUE}}'
				],
            ]
        );
        $blo_social_repeater->add_control(
            'blo_social_icon_background',
            [
                'label' => __( 'Background Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a i' => 'background: {{VALUE}}'
				],
            ]
        );
        $blo_social_repeater->end_controls_tab();
        $blo_social_repeater->start_controls_tab(
            'blo_social_hover_tab',
            [
                'label' => __( 'Hover', 'blo' ),
            ]
        );

        $blo_social_repeater->add_control(
            'blo_social_icon_hover_color',
            [
                'label' => __( 'Icon Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}}  {{CURRENT_ITEM}} a i:hover' => 'color: {{VALUE}}'
				],

            ]
        );
        $blo_social_repeater->add_control(
            'blo_social_icon_hover_background',
            [
                'label' => __( 'Background Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a i:hover' => 'background: {{VALUE}}'
				],
            ]
        );

        $blo_social_repeater->end_controls_tab();
        $blo_social_repeater->end_controls_tabs();

        $this->add_control(
			'blo_soclis_icon_list',
			[
				'label' => __( 'Social Icon List', 'blo' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $blo_social_repeater->get_controls(),
				'default' => [
					[
						'blo_social_icon' =>  'fa fa-facebook',
					],
					[
						'blo_social_icon' =>  'fa fa-twitter',
					],
					[
						'blo_social_icon' =>  'fa fa-google-plus',
                    ],
                    [
						'blo_social_icon' =>  'fa fa-instagram',
					],

				],
				'title_field' => '<i class="{{ blo_social_icon }}"></i> {{{ blo_social_icon.replace( \'fa fa-\', \'\' ).replace( \'-\', \' \' ).replace( /\b\w/g, function( letter ){ return letter.toUpperCase() } ) }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'blo_team_style', [
                'label'	 => esc_html__( 'Title', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'team_title_color',
            [
                'label' => __( 'Title Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .single-team-member .inner-content h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team_title_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .single-team-member .inner-content h4',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'blo_team_style2', [
                'label'	 => esc_html__( 'Position', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'team_position_color',
            [
                'label' => __( 'Position Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .single-team-member .inner-content h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'position_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .single-team-member .inner-content h6',
            ]
        );
        $this->end_controls_section();




    }

    protected function render( ) {
        $settings = $this->get_settings_for_display();



        ?>
        <div class="single-team-member text-center">
                    <div class="team-thumbnail">
                        <?php echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'team_image_size', 'team_member_image' );?>
                    </div><!-- wend team thumbnail -->
                    <div class="inner-content">
                        <div class="top-info">
                        <?php if($settings['team_memeber_name']):?>
                            <h4>
                                <?php echo esc_html($settings['team_memeber_name']);?>
                            </h4>
                        <?php endif;?>
                            <?php if($settings['team_memeber_position']):?>
                            <h6>
                                <?php echo esc_html($settings['team_memeber_position']);?>
                            </h6>
                        <?php endif;?>
                        </div><!-- end  top info -->
                        <ul class="footer-social2 ekit-wid-con">
                        <?php

                        if ( $settings['blo_soclis_icon_list'] ){
                        foreach (  $settings['blo_soclis_icon_list'] as $item ){

                        $target = $item['blo_social_linbk']['is_external'] ? ' target=_blank' : '';
                        ?>

                        <li class="elementor-repeater-item-<?php echo esc_attr( $item[ '_id' ] ); ?>"><a href="<?php echo esc_url($item['blo_social_linbk']['url']);?>" <?php echo esc_attr($target);?> nofollow="<?php echo esc_attr($item['blo_social_linbk']['nofollow'] ? "nofollow": "");?>"><i class="<?php echo esc_attr( $item['blo_social_icon'] );?>"></i></a></li>
                        <?php
                        }
                         }

                    ?>

                        </ul>
                    </div><!-- end inner content -->
        </div><!-- end single team member -->
        <?php

    }

    protected function _content_template() { }
}