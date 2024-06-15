<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Blo_Feature_box_Widget extends Widget_Base {

    public function get_name() {
        return 'blo-feature-box';
    }


    public function get_title() {
        return esc_html__( 'BLO Feature', 'blo' );
    }

    public function get_icon() {
        return 'eicon-tabs';
    }

    public function get_categories() {
        return ['blo-elements'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'blo_feature_content_block',
            [
                'label' => __( 'Feature Content', 'blo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'blo_featurer_title',
            [
                'label' => __( 'Title', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('Authorise Company', 'blo')


            ]
        );

        $this->add_control(
            'blo_featurer_hover_text',
            [
                'label' => __( 'Hover Title', 'blo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('Successfully servicing since 1995', 'blo')


            ]
        );
        $this->add_control(
            'blo_featurer_icon', [
                'label' => esc_html__( 'Icon', 'blo' ),
                'type' => Controls_Manager::ICON,
                'label_block' => true,
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'blo_feature_content_style',
            [
                'label' => __( 'Content', 'blo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'label_block' => true,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_feature_title_typography',
                'label' => __( 'Title Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .single-featurebox h4',
            ]
        );

        $this->add_control(
            'blo_feature_title_color',
            [
                'label' => __( 'Feature Title color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => "#fff",
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox h4' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blo_feature_hover_title_typography',
                'label' => __( 'Hover Title Typography', 'blo' ),
                'selector' => '{{WRAPPER}} .single-featurebox h4',
            ]
        );

        $this->add_control(
            'blo_feature_hover_title_color',
            [
                'label' => __( 'Hover Title  color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => "#ff7d2a",
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox .box-badge' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'blo_feature_box_style',
            [
                'label' => __( 'Box', 'blo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'blo_enable_active_badeg',
            [
                'label' => __( 'Active Box', 'blo' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'blo' ),
                'label_off' => __( 'off', 'blo' ),
                'default' => 'no',
            ]
        );

        $this->add_responsive_control(
            'blo_feature_box_padding',
            [
                'label' => esc_html__( 'Padding', 'blo' ),
                'type' => Controls_Manager::DIMENSIONS,

                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'blo_feature_box_bg',
            [
                'label' => __( 'box background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => "#4046a1",
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'blo_feature_hover_box_bg',
            [
                'label' => __( 'Badge Background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => "#fff",
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox .box-badge' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'blo_feature_shape_color',
            [
                'label' => __( 'Shape Background', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => "#393f91",
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox:after' => 'background: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'blo_feature_icon_style',
            [
                'label' => __( 'Icon', 'blo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'label_block' => true,
            ]
        );
        $this->add_responsive_control(
            'blo_icon_icon_size',
            [
                'label' => esc_html__( 'Size', 'blo' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'default' => [
                    'size' => 60,
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox .icon-box' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'separator' => 'before',

            ]
        );
        $this->add_responsive_control(
            'blo_icon_icon_shpe_width',
            [
                'label' => esc_html__( 'Shape Width', 'blo' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'default' => [
                    'size' => 130,
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox:after' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'separator' => 'before',

            ]
        );


        $this->add_control(
            'blo_feature_icon_color',
            [
                'label' => __( 'Color', 'blo' ),
                'type' => Controls_Manager::COLOR,
                'default' => "#fff",
                'selectors' => [
                    '{{WRAPPER}} .single-featurebox .icon-box' => 'color: {{VALUE}}',
                ],
            ]
        );

    }

    protected function render( ) {
        $settings = $this->get_settings_for_display();

        ?>

        <div class="single-featurebox <?php if($settings['blo_enable_active_badeg']== 'yes'){echo esc_attr('active');}?>">
            <?php if($settings['blo_featurer_hover_text']):?>
            <div class="box-badge">
                <?php echo esc_html($settings['blo_featurer_hover_text']);?>
            </div><!-- end badge -->
        <?php endif;?>
            <?php if($settings['blo_featurer_icon']):?>
            <div class="icon-box ekit-wid-con">

                <i class="<?php echo esc_attr($settings['blo_featurer_icon']);?>"></i>
            </div><!-- end icon box -->
        <?php endif;?>
            <?php if($settings['blo_featurer_title']):?>
            <h4>
                <?php echo esc_html($settings['blo_featurer_title']);?>
            </h4>
            <?php endif;?>
        </div>
        <?php

    }

    protected function _content_template() { }
}