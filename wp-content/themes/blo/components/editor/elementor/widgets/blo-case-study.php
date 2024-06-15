<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Blo_Case_Study_Widget extends Widget_Base {

    public function get_name() {
        return 'blo-case-sdudy';
    }

    public function get_title() {
        return esc_html__( 'BLO Case Study', 'blo' );
    }

    public function get_icon() {
        return 'eicon-tabs';
    }

    public function get_categories() {
        return ['blo-elements'];
    }

    protected function _register_controls() {

        $this->start_controls_section('section_tab_style',
            [
                'label' => esc_html__('blo case study', 'blo'),
            ]
        );

        $this->add_control(
            'blo_case_study_style',
            [
                'label' => esc_html__('Choose Style', 'blo'),
                'type' => 'imagechoose',
                'default' => 'blo_case_study_tab',
                'options' => [
                    'blo_case_study_tab' => [
                        'title' => esc_html__( 'Tab', 'blo' ),
                        'imagelarge' => BLO_IMG . '/imagechoose/case-tab.png',
                        'imagesmall' => BLO_IMG . '/imagechoose/case-tab.png',
                        'width' => '100%',
                    ],
                    'blo_case_study_slider' => [
                        'title' => esc_html__( 'Slider', 'blo' ),
                        'imagelarge' => BLO_IMG . '/imagechoose/case-slider.png',
                        'imagesmall' => BLO_IMG . '/imagechoose/case-slider.png',
                        'width' => '100%',
                    ],
                    'blo_case_study_box' => [
                        'title' => esc_html__( 'Grid View', 'blo' ),
                        'imagelarge' => BLO_IMG . '/imagechoose/case-grid.png',
                        'imagesmall' => BLO_IMG . '/imagechoose/case-grid.png',
                        'width' => '100%',
                    ],
                    'blo_case_study_box_2' => [
                        'title' => esc_html__( 'Grid View Style 2', 'blo' ),
                        'imagelarge' => BLO_IMG . '/imagechoose/case-grid2.png',
                        'imagesmall' => BLO_IMG . '/imagechoose/case-grid2.png',
                        'width' => '100%',
                    ],
                ],
            ]
        );

        $this->add_control(
			'tab_read_more_button_click',
			[
				'label' => __( 'Read More Button Link ?', 'blo' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', 'blo' ),
				'label_off' => __( 'No', 'blo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control('blo_case_study_cat',
            [
                'label'     => esc_html__( 'Category', 'blo' ),
                'type'      => \Elementor\Controls_Manager::SELECT2,
                'multiple'  => true,
                'default'   => '',
                'options'   => $this->getCategories(),

            ]
        );
        $this->add_control(
            'blo_case_study_post_count',
            [
                'label'         => esc_html__( 'Case count', 'blo' ),
                'type'          => Controls_Manager::NUMBER,
                'default'       => esc_html__( '4', 'blo' ),
            ]
        );

        $this->add_control(
            'blo_case_study_read_more',
            [
                'label' => esc_html__( 'Button label', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'blo' ),
                'placeholder' => esc_html__( 'Read more', 'blo' ),
                'separator'   => 'before',
            ]
        );

        $this->add_control(
            'blo_case_study_button_icon',
            [
                'label' => esc_html__( 'Button Icons', 'blo' ),
                'type' => Controls_Manager::ICON,
                'default' => 'fa fa-chevron-right',
            ]
        );

        $this->add_control(
            'blo_case_study_tab_icon',
            [
                'label' => esc_html__( 'Tab Background Icon', 'blo' ),
                'type' => Controls_Manager::ICON,
                'default' => 'fa fa-line-chart',
                'separator'   => 'before',
                'condition' => [
                        'blo_case_study_style' => 'blo_case_study_tab'
                ]
            ]
        );

        $this->end_controls_section();

        //style
        $this->start_controls_section('style_section',
            [
                'label'    => esc_html__( 'Content', 'blo' ),
                'tab'      => Controls_Manager::TAB_STYLE,
            ]
        );




        $this->add_control('blo_case_study_title_color',
            [
                'label'     => esc_html__('Title color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box h5' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-title' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .entry-header .entry-title a' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_title_color_typography',
                'label' => esc_html__( 'Title Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box h5,{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content h3, {{WRAPPER}} .xs-case-box .case-content .case-title, {{WRAPPER}} .case-study-grid-view-style-two .entry-header .entry-title a',
            ]
        );
        $this->add_responsive_control(
            'blo_case_study_space_bottom',
            [
                'label' => esc_html__( 'Space Bottom', 'blo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box h5' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content h3' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .entry-header .entry-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control('blo_case_study_description_color',
            [
                'label'     => esc_html__('Description color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .entry-content__ p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_description_typography',
                'label' => esc_html__( 'Description Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box p,{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content p, {{WRAPPER}} .xs-case-box .case-content p, {{WRAPPER}} .case-study-grid-view-style-two .entry-content__ p',
            ]
        );
        $this->add_responsive_control(
            'blo_case_study_content_padding',
            [
                'label' =>esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'condition' => [
                        'blo_case_study_style' => 'blo_case_study_box_2'
                ],
                'selectors' => [
                    '{{WRAPPER}} .case-study-grid-view-style-two .entry-content__' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'blo_case_study_border_padding',
                'label' => esc_html__( 'Border', 'blo' ),
                'condition' => [
                    'blo_case_study_style' => 'blo_case_study_box_2'
                ],
                'selector' => '{{WRAPPER}} .case-study-grid-view-style-two .entry-content__',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'blo_case_study_shadow_padding',
                'label' => esc_html__( 'Hover Box Shadow', 'blo' ),
                'condition' => [
                    'blo_case_study_style' => 'blo_case_study_box_2'
                ],
                'selector' => '{{WRAPPER}} .case-study-grid-view-style-two .entry-content__:hover',
            ]
        );



        $this->add_control(
            'blo_case-study_menu_item_title',
            [
                'label' => esc_html__( 'Menu Item', 'blo' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' =>[
                    'blo_case_study_style' => 'blo_case_study_tab',
                ]
            ]
        );

        $this->start_controls_tabs(
            'blo_case_study_menu_item',
            [
                    'condition' =>[
                            'blo_case_study_style' => 'blo_case_study_tab',
                    ]
            ]
        );

        $this->start_controls_tab(
            'blo_case_study_menu_item_tab',
            [
                'label' => esc_html__( 'Normal', 'blo' ),
            ]
        );
        $this->add_control('blo_case_study_menu_text_color',
            [
                'label'     => esc_html__('Text color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item a span:nth-child(1), {{WRAPPER}} .nav-link-title' => 'color: {{VALUE}};',

                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_menu_normal_typography',
                'label' => esc_html__( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-case-nav-slider .nav-item a span:nth-child(1),{{WRAPPER}} .nav-link-title',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blo_case_study_menu_normal_bg',
                'label' => esc_html__( 'Background', 'blo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .xs-case-nav-slider .nav-item a,{{WRAPPER}} .tab_read_more_button_click_style',
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'blo_case_study_menu_item_tab_active',
            [
                'label' => esc_html__( 'Active', 'blo' ),
            ]
        );

        $this->add_control('blo_case_study_menu_text_color_active',
            [
                'label'     => esc_html__('Text color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider li.nav-item.active a span:nth-child(2),{{WRAPPER}} .xs-case-nav-slider li.nav-item.active a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_menu_hover_typography',
                'label' => esc_html__( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .xs-case-nav-slider li.nav-item.active a span:nth-child(2), {{WRAPPER}} .xs-case-nav-slider li.nav-item.active a',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blo_case_study_menu_active_bg',
                'label' => esc_html__( 'Background', 'blo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .xs-case-nav-slider li.nav-item.active a, {{WRAPPER}} .xs-case-nav-slider li.nav-item.active a',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'blo_case-study_icon_title',
            [
                'label' => esc_html__( 'Icon', 'blo' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' =>[
                    'blo_case_study_style' => 'blo_case_study_tab',
                ]
            ]
        );
        $this->add_control('blo_case_study_icon',
            [
                'label'     => esc_html__('Icon color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'condition' =>[
                    'blo_case_study_style' => 'blo_case_study_tab',
                ],
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box i.fa, .xs-case-nav-slider .nav-item .study-box .icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control('blo_case_study_counter',
            [
                'label'     => esc_html__('Counter color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'separator' => 'before',
                'condition' => [
                        'blo_case_study_style!' => ['blo_case_study_box', 'blo_case_study_box_2']
                ],
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box .count-no' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .counters' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_counter_typography',
                'label' => esc_html__( 'Typography', 'blo' ),
                'condition' => [
                    'blo_case_study_style!' => ['blo_case_study_box', 'blo_case_study_box_2']
                ],
                'selector' => '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box .count-no',
            ]
        );

        $this->add_control('blo_case_study_tag',
            [
                'label'     => esc_html__('Tag color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'separator' => 'before',
                'condition' => [
                    'blo_case_study_style' => 'blo_case_study_box'
                ],
                'selectors' => [
                    '{{WRAPPER}} .case-meta span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_tag_typography',
                'label' => esc_html__( 'Tag Typography', 'blo' ),
                'condition' => [
                    'blo_case_study_style' => 'blo_case_study_box'
                ],
                'selector' => '{{WRAPPER}} .case-meta span',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section('blo_case_study_slider_nav',
            [
                'label'    => esc_html__( 'Navigation ', 'blo' ),
                'tab'      => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'blo_case_study_style' => 'blo_case_study_slider'
                ]
            ]
        );

        $this->add_control('blo_case_study_nav_color',
            [
                'label'     => esc_html__('Nav color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .owl-dot' => 'background: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control('blo_case_study_nav_color_active',
            [
                'label'     => esc_html__('Nav Active color', 'blo'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .owl-dot.active' => 'background: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();
        //  Button
        $this->start_controls_section(
            'blo_case_study_section_style_button',
            [
                'label' =>esc_html__( 'Button Style', 'blo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                        'blo_case_study_style!' => 'blo_case_study_tab'
                ]
            ]
        );

        $this->add_responsive_control(
            'blo_case_study_text_padding',
            [
                'label' =>esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_case_study_btn_typography',
                'label' =>esc_html__( 'Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link, {{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn, {{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2',
            ]
        );

        $this->start_controls_tabs( 'xs_tabs_button_style' );

        $this->start_controls_tab(
            'tab_button_normal',
            [
                'label' =>esc_html__( 'Normal', 'blo' ),
            ]
        );

        $this->add_control(
            'blo_case_study_btn_text_color',
            [
                'label' =>esc_html__( 'Text Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'blo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link, {{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn, {{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2',
            ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab(
            'blo_case_study_btn_tab_button_hover',
            [
                'label' =>esc_html__( 'Hover', 'blo' ),
            ]
        );

        $this->add_control(
            'blo_case_study_btn_hover_color',
            [
                'label' =>esc_html__( 'Text Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blo_case_study_btn_background_hover',
                'label' => esc_html__( 'Background', 'blo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link:hover, {{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn:hover, {{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'blo_case_study_btn_border_style',
            [
                'label' => esc_html__( 'Border Type', 'blo' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__( 'None', 'blo' ),
                    'solid' => esc_html__( 'Solid', 'blo' ),
                    'double' => esc_html__( 'Double', 'blo' ),
                    'dotted' => esc_html__( 'Dotted', 'blo' ),
                    'dashed' => esc_html__( 'Dashed', 'blo' ),
                    'groove' => esc_html__( 'Groove', 'blo' ),
                ],
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link' => 'border-style: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn' => 'border-style: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2' => 'border-style: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'blo_case_study_btn_border_dimensions',
            [
                'label' => esc_html__( 'Width', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                     'blo_case_study_btn_border_style!' => ''
                 ]
            ]
        );
        $this->start_controls_tabs( 'blo_case_study_tabs_button_border_style',[
            'condition' => [
                'blo_case_study_btn_border_style!' => ''
            ]
        ] );
        $this->start_controls_tab(
            'blo_case_study_tab_button_border_normal',
            [
                'label' =>esc_html__( 'Normal', 'blo' ),
            ]
        );

        $this->add_control(
            'blo_case_study_btn_border_color',
            [
                'label' => esc_html__( 'Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'blo_case_study_btn_tab_button_border_hover',
            [
                'label' =>esc_html__( 'Hover', 'blo' ),
            ]
        );
        $this->add_control(
            'blo_case_study_btn_hover_border_color',
            [
                'label' => esc_html__( 'Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link:hover' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn:hover' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'blo_case_study_btn_border_radius',
            [
                'label' =>esc_html__( 'Border Radius', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '' ,
                    'left' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link' =>  'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn' =>  'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2' =>  'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'blo_case_study_btn_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'blo' ),
                'selector' => '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content .text-link, {{WRAPPER}} .xs-case-box .case-content .case-footer .xs-btn, {{WRAPPER}} .case-study-grid-view-style-two .blo-btn-case-study-box-style-2',
            ]
        );


        $this->end_controls_section();


        //  Button End

        $this->start_controls_section('blo_case_study_image',
            [
                'label'    => esc_html__( 'Image ', 'blo' ),
                'tab'      => Controls_Manager::TAB_STYLE,
                'condition' => [
                        'blo_case_study_style' => 'blo_case_study_slider'
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'blo_case_study_image_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'blo' ),
                'selector' => '{{WRAPPER}} .active-project-slider .single-project-slider .right-inner-content, {{WRAPPER}} .case-study-grid-view-style-two .single-home-blog',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section('blo_case_study_description_bg',
            [
                'label'    => esc_html__( 'Content Background ', 'blo' ),
                'tab'      => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'blo_case_study_description_bg_padding',
            [
                'label' => esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .xs-case-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-grid-view-style-two .single-home-blog' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blo_case_study_description_bg',
                'label' => esc_html__( 'Background', 'blo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .xs-case-nav-slider .nav-item .study-box, {{WRAPPER}} .active-project-slider .single-project-slider .left-inner-content, {{WRAPPER}} .xs-case-box, {{WRAPPER}} .case-study-grid-view-style-two .single-home-blog',
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'blo_case_study_content_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'blo' ),
                'condition' => [
                  'blo_case_study_style' => 'blo_case_study_box'
                ],
                'selector' => '{{WRAPPER}} .xs-case-box:hover',
            ]
        );

        $this->end_controls_section();

    }

    protected function render( ) {

        $settings =  $this->get_settings();

        extract($settings);


        $paged = 1;
        if ( get_query_var('paged') ) $paged = get_query_var('paged');
        if ( get_query_var('page') ) $paged = get_query_var('page');


        $query = array(
            'post_type'      => 'blo-case-study',
            'post_status'    => 'publish',
            'posts_per_page' => $blo_case_study_post_count,
            'paged' => $paged,
        );


         if($blo_case_study_cat != '' && !empty($blo_case_study_cat)){
             $query['tax_query'] = array(
                array(
                    'taxonomy' => 'blo-case-study',
                    'terms' => $blo_case_study_cat,
                    'field' => 'id',
                )
            );
         }

        $blo_case_study = new \WP_Query($query);

         $case_study_parent_class = 'row';

         if($blo_case_study_style == 'blo_case_study_slider'){

             $case_study_parent_class = 'active-project-slider owl-carousel';
         }

        if($blo_case_study_style == 'blo_case_study_tab'){

            $case_study_parent_class = 'xs-main-case-slider';
        }

        if($blo_case_study_style == 'blo_case_study_box_2'){
            $case_study_parent_class = 'row case-study-grid-view-style-two';
        }

         ?>
            <div class="<?php echo esc_attr($case_study_parent_class); ?>">
      <?php

       if($blo_case_study_style == 'blo_case_study_tab') :

           include BLO_SHORTCODE_DIR_STYLE.'/case-study/'.$blo_case_study_style.'.php';

       else:

          while ($blo_case_study->have_posts()) : $blo_case_study->the_post();

           include BLO_SHORTCODE_DIR_STYLE.'/case-study/'.$blo_case_study_style.'.php';

          endwhile;

        endif;
                ?>
            </div>
                <?php
    }

    protected function _content_template() { }

    public function getCategories(){
        $terms = get_terms( array(
            'taxonomy'    => 'blo-case-study',
            'hide_empty'  => false,
            'posts_per_page' => -1,
        ) );


        $cat_list = [];
        if(is_array($terms) && '' != $terms) :
        foreach($terms as $post) {

            $cat_list[$post->term_id]  = [$post->name];
        }
       endif;
        return $cat_list;
    }
}