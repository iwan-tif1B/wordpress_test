<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Blo_Career_block_Widget extends Widget_Base {

    public function get_name() {
        return 'blo-carrer-block';
    }


    public function get_title() {
        return esc_html__( 'BLO Carrer Block', 'blo' );
    }

    public function get_icon() {
        return 'eicon-tabs';
    }

    public function get_categories() {
        return ['blo-elements'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'carrer_block',
            [
                'label' => __( 'Carrer Block', 'blo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'carrer_title',
            [
                'label' => __( 'Carrer Title', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('Account Management Team Leader', 'blo')


            ]
        );
        $this->add_control(
            'carrer_tag',
            [
                'label' => __( 'Carrer Tag', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Ongoing', 'blo')


            ]
        );
        $this->add_control(
            'carrer_tag_url',
            [
                'label' => __( 'Url', 'blo' ),
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
        $this->add_control(
            'carrer_location',
            [
                'label' => __( 'Location', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('New York, USA', 'blo')


            ]
        );
        $this->add_control(
            'carrer_job_type',
            [
                'label' => __( 'Job Type', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__(' Full Time', 'blo')


            ]
        );
        $this->end_controls_section();


        // Read More Button
        $this->start_controls_section(
            'blo_carrer_block_apply_section',
            [
                'label' => esc_html__( 'Button', 'blo' ),

            ]
        );

        $this->add_control(
            'blo_carrer_block_btn_text',
            [
                'label' =>esc_html__( 'Label', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'default' =>esc_html__( 'APPLY NOW', 'blo' ),
                'dynamic'     => array( 'active' => true ),
            ]
        );
        $this->add_control(
            'carrer_button_url',
            [
                'label' => __( 'Url', 'blo' ),
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




        $this->end_controls_section();

        $this->start_controls_section(
            'carrer_block_setting',
            [
                'label' => __( 'Setting', 'blo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'carrer_location_parent',
            [
                'label' => __( 'Location', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Location', 'blo')


            ]
        );
        $this->add_control(
            'carrer_type_parent',
            [
                'label' => __( 'Type', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Type', 'blo')


            ]
        );

        $this->end_controls_section();




        $this->start_controls_section(
            'blo_carrrer_title_style', [
                'label'	 => esc_html__( 'Title', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'carrer_title_color',
            [
                'label' => __( 'Title Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box .career-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'carrer_title_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-career-box .career-title',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'blo_carrrer_tag_style', [
                'label'	 => esc_html__( 'Tag', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'carrer_tag_color',
            [
                'label' => __( 'Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box .career-meta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'carrer_tag_color_bg',
            [
                'label' => __( 'Background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box .career-meta a' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'tga_shadow',
                'label' => __( 'Box Shadow', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-career-box .career-meta a',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'carrer_tag_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-career-box .career-meta a',
            ]
        );
        $this->add_responsive_control(
            'carrer_tag_padding',
            [
                'label' => esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,

                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box .career-meta a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();







        $this->start_controls_section(
            'blo_carrrer_location_style', [
                'label'	 => esc_html__( 'Location', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'carrer_location_color',
            [
                'label' => __( 'Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box p span:nth-child(1) > span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'carrer_location_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-career-box p span:nth-child(1) > span',
            ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
            'blo_carrrer_type_style', [
                'label'	 => esc_html__( 'Type', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'carrer_type_color',
            [
                'label' => __( 'Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box p span:nth-child(2) > span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'carrer_type_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-career-box p span:nth-child(2) > span',
            ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
            'blo_carrrer_button_style', [
                'label'	 => esc_html__( 'Button', 'blo' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->start_controls_tabs(
            'button_hover_tabs'
        );

        $this->start_controls_tab(
            'carrerbutton_style_normal_tab',
            [
                'label' => __( 'Normal', 'blo' ),
            ]
        );

        $this->add_control(
            'carrer_Button_color_text',
            [
                'label' => __( 'Text Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .career-footer a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'carrer_Button_color_background',
            [
                'label' => __( 'Background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .career-footer a' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'blo' ),
                'selector' => '{{WRAPPER}} .career-footer a',
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'carrer_button_style_hover_tab',
            [
                'label' => __( 'Hover', 'blo' ),
            ]
        );
        $this->add_control(
            'carrer_Button_color_text_2',
            [
                'label' => __( 'Text Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .career-footer a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'carrer_Button_color_background_2',
            [
                'label' => __( 'Background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .career-footer a:hover' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'blo' ),
                'selector' => '{{WRAPPER}} .career-footer a:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'blo_carrrer_button__padding',
            [
                'label' => esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .career-footer a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'carrer_button_typography',
                'label' => __( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .career-footer a',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section('carrerbox_style',
            [
                'label'    => esc_html__( 'Container Box', 'blo' ),
                'tab'      => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'blo_carrrer_container_padding',
            [
                'label' => esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'carrer_container_background_color',
            [
                'label' => __( 'Background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-career-box' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'container_box_shadow',
                'label' => __( 'Box Shadow', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-career-box',
            ]
        );

        $this->end_controls_section();














    }

    protected function render( ) {
        $settings = $this->get_settings_for_display();
        $target = $settings['carrer_button_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['carrer_button_url']['nofollow'] ? ' rel="nofollow"' : '';
        $target2 = $settings['carrer_tag_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow2 = $settings['carrer_tag_url']['nofollow'] ? ' rel="nofollow"' : '';
    ?>
        <div class="xs-career-box">
            <div class="career-meta">
                <?php if($settings['carrer_tag']) :?>
                <a href="<?php echo esc_url($settings['carrer_tag_url']['url'])?>" <?php  echo esc_attr($target2) . esc_attr($nofollow2); ?>><?php echo esc_html($settings['carrer_tag']);?></a>
                <?php endif;?>
            </div>
            <?php if($settings['carrer_title']):?>
            <h3 class="career-title">
                <?php echo esc_html($settings['carrer_title']);?>

            </h3>
        <?php endif;?>
            <?php if($settings['carrer_location'] ||$settings['carrer_job_type'] ) :?>
            <p>
                <?php  if($settings['carrer_location']):?>
                <span class="d-block"><?php echo esc_html($settings['carrer_location_parent']);?>: <span><?php echo esc_html($settings['carrer_location']);?></span></span>
                <?php endif;?>
            <?php  if($settings['carrer_job_type']):?>
                <span class="d-block"><?php echo esc_html($settings['carrer_type_parent']);?>: <span><?php echo esc_html($settings['carrer_job_type']);?></span></span>
            <?php endif;?>
            </p>
        <?php endif;?>

            <div class="career-footer">
                <a href="<?php echo esc_url($settings['carrer_button_url']['url']);?>" <?php  echo esc_attr($target) . esc_attr($nofollow); ?>><?php echo esc_html($settings['blo_carrer_block_btn_text']);?></a>
            </div>
        </div>

    <?php

    }

    protected function _content_template() { }
}