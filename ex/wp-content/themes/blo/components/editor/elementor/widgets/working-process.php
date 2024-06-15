<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;


class Blo_Working_Process_Widget extends Widget_Base {


    public $base;

    public function get_name() {
        return 'blo-working-process';
    }

    public function get_title() {
        return esc_html__( 'Blo working process', 'blo' );
    }

    public function get_icon() { 
        return 'eicon-arrow-right';
    }

    public function get_categories() {
        return [ 'blo-elements' ];
    }

    protected function _register_controls() {

      $this->start_controls_section(
         'section_tab',
         [
             'label' => esc_html__('Working process settings', 'blo'),
         ]
      );
    
      $this->add_control(
			'working_process_title',
			[
				'label' => esc_html__( 'Title', 'blo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Design Build', 'blo' ),
				'placeholder' => esc_html__( 'Type your title here', 'blo' ),
			]
       );

      
      $this->add_control(
			'working_process_image',
			[
				'label' => esc_html__( 'Choose Image', 'blo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => '#',
				],
			]
		);
    
      $this->add_control(
         'show_title',
         [
             'label'     => esc_html__('Show title', 'blo'),
             'type' => \Elementor\Controls_Manager::SELECT,
             'default' => 'block',
             'options' => [
                'block'  => esc_html__( 'Show', 'blo' ),
                'none' => esc_html__( 'Hide', 'blo' ),
             ],
            'selectors' => [
                '{{WRAPPER}} .ts-single-working-process-title' => 'display: {{VALUE}};',
             ],
            
         ]
      );

      $this->add_responsive_control(
			'show_working_arrow',
			[
				'label' => esc_html__( 'Working arrow', 'blo' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'block',
				'options' => [
					'block'  => esc_html__( 'Show', 'blo' ),
					'none'   => esc_html__( 'Hide', 'blo' ),
				],
           'selectors' => [
               '{{WRAPPER}} .application-process-img:after' => 'display: {{VALUE}};',
            ],
			]
		);

      $this->end_controls_section();

          //Title Style Section
		$this->start_controls_section(
			'section_style', [
				'label'	 => esc_html__( 'Title Style', 'blo' ),
				'tab'	    => Controls_Manager::TAB_STYLE,
			  ]
      );

      
      $this->add_control(
			'title_color', [

				'label'		 => esc_html__( 'Title color', 'blo' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
               '{{WRAPPER}} .ts-single-working-process-title' => 'color: {{VALUE}};',
               
				],
			]
      );

      $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => esc_html__( 'Typography', 'blo' ),
            'selector' => '{{WRAPPER}} .ts-single-working-process-title',
			]
      );

      $this->add_control(
			'title_margin',
			[
				'label' => __( 'Title margin', 'blo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ts-single-working-process-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
      
      $this->end_controls_section();

      $this->start_controls_section(
			'section_advaneced_style', [
				'label'	 => esc_html__( 'Advanced ', 'blo' ),
				'tab'	    => Controls_Manager::TAB_STYLE,
			  ]
      );
     
      $this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'step_background',
				'label' => esc_html__( 'Background', 'blo' ),
            'types' => [ 'classic', 'gradient' ],
            'label_block' => true,
            'show_label' =>true,
				'selector' => '{{WRAPPER}} .application-process-img',
			]
		);

      $this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'working_process_border',
				'label' => esc_html__( 'Border', 'blo' ),
				'selector' => '{{WRAPPER}} .application-process-img',
			]
      );
      
      $this->add_responsive_control(
			'arrow_width',
			[
				'label' =>esc_html__( 'Arrow Width', 'blo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
            ],
            'size_units' => [ 'px', '%', 'em' ],
            'size' => '',

				'selectors' => [
					'{{WRAPPER}} .application-process-img:after' => 'background-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
      $this->add_responsive_control(
			'working_process_arrow_position',
			[
				'label' => esc_html__( 'Arrow position', 'blo' ),
				'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
           	'selectors' => [
					'{{WRAPPER}} .application-process-img:after' => 'right: {{RIGHT}}{{UNIT}}; left: {{LEFT}}{{UNIT}}; top: {{TOP}}{{UNIT}}; bottom: {{BOTTOM}}{{UNIT}};',
				],
			]
      );
     
      $this->end_controls_section();

      $this->start_controls_section(
			'section_icon_dimension', [
				'label'	 => esc_html__( 'Icon Dimension ', 'blo' ),
				'tab'	    => Controls_Manager::TAB_STYLE,
			  ]
      );
  
      $this->add_responsive_control(
			'icon_width',
			[
				'label' =>esc_html__( 'Icon Width', 'blo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
            ],
            'size_units' => [ 'px', '%', 'em' ],
            'size' => '',

				'selectors' => [
					'{{WRAPPER}} .application-process-img img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
      $this->add_responsive_control(
			'icon_height',
			[
				'label' =>esc_html__( 'Icon Height', 'blo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
            'size_units' => [ 'px', '%', 'em' ],
            'size' => '',

				'selectors' => [
					'{{WRAPPER}} .application-process-img img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

      $this->end_controls_section();
      $this->start_controls_section(
			'section_box_dimension', [
				'label'	 => esc_html__( 'Circle Dimension ', 'blo' ),
				'tab'	    => Controls_Manager::TAB_STYLE,
			  ]
		);
		$this->add_control(
			'circle_bg_color', [

				'label'		 => esc_html__( 'Circle BG color', 'blo' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
               '{{WRAPPER}} .application-process-img' => 'background: {{VALUE}};',
               
				],
			]
      );
  
      $this->add_responsive_control(
			'box_width',
			[
				'label' =>esc_html__( 'Box Width', 'blo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
            ],
            'size_units' => [ 'px', '%', 'em' ],
            'size' => 195,

				'selectors' => [
					'{{WRAPPER}} .application-process-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
      $this->add_responsive_control(
			'box_height',
			[
				'label' =>esc_html__( 'Box Height', 'blo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
            'size_units' => [ 'px', '%', 'em' ],
            'size' => 195,

				'selectors' => [
					'{{WRAPPER}} .application-process-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

      $this->end_controls_section();

    }

    protected function render( ) { 

      $settings               = $this->get_settings();
      $working_process_title  = $settings['working_process_title'];
      $working_process_image  = $settings['working_process_image'];
  
       
      ?>   

     <div class="ts-application-process">
         <div class="application-process-img">
            <?php if(isset($working_process_image["url"])): 
			echo wp_get_attachment_image($working_process_image['id'], 'full', false, array(
				   'class'  => 'img-fluid',
				   'alt'    => esc_attr($working_process_title)
			   )); 
			 endif; ?>   
         </div>
         <h3 class="ts-single-working-process-title"><?php echo esc_html($working_process_title); ?></h3>
      </div>

      <?php
     
    }
    
    protected function _content_template() { }

   
}