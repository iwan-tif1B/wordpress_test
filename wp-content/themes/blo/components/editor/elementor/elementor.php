<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class blo_Shortcode{

	/**
     * Holds the class object.
     *
     * @since 1.0
     *
     */
    public static $_instance;


    /**
     * Localize data array
     *
     * @var array
     */
    public $localize_data = array();

	/**
     * Load Construct
     *
     * @since 1.0
     */

	public function __construct(){
        add_action('elementskit/loaded', [$this, 'init']);
    }


	public function init(){

		add_action('elementor/init', array($this, 'blo_elementor_init'));
        add_action('elementor/widgets/widgets_registered', array($this, 'blo_shortcode_elements'));
        add_action( 'elementor/editor/after_enqueue_styles', array( $this, 'editor_enqueue_styles' ) );
        add_action( 'elementor/frontend/before_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_action( 'elementor/preview/enqueue_styles', array( $this, 'preview_enqueue_scripts' ) );
	}


    /**
     * Enqueue Scripts
     *
     * @return void
     */

    public function enqueue_scripts() {
        wp_enqueue_script( 'blo-main-elementor', BLO_JS  . '/elementor.js',array( 'jquery', 'elementor-frontend' ), BLO_VERSION, true );

        // ekit pro script and style
        if (class_exists('ElementsKit_Lite')) {
            if(\ElementsKit_Lite::package_type() == 'free' && !in_array('elementskit/elementskit.php', apply_filters('active_plugins', get_option('active_plugins')))){
                wp_enqueue_style( 'blo-widget-styles-pro', BLO_CSS . '/widget-styles-pro.css', null, BLO_VERSION );
                wp_enqueue_script( 'blo-widget-scripts-pro', BLO_JS . '/widget-scripts-pro.js', array( 'jquery', 'elementor-frontend' ), BLO_VERSION, true );
            }
        }
    }

    /**
     * Enqueue editor styles
     *
     * @return void
     */

    public function editor_enqueue_styles() {
//        wp_enqueue_style( 'blo-panel', BLO_CSS.'/panel.css',null, BLO_VERSION );
//        wp_enqueue_style( 'blo-icon-elementor', BLO_CSS.'/icofonts.css',null, BLO_VERSION );

    }

    /**
     * Preview Enqueue Scripts
     *
     * @return void
     */

    public function preview_enqueue_scripts() {}
	/**
     * Elementor Initialization
     *
     * @since 1.0
     *
     */

    public function blo_elementor_init(){

        \Elementor\Plugin::$instance->elements_manager->add_category(
            'blo-elements',
            [
                'title' =>esc_html__( 'blo', 'blo' ),
                'icon' => 'fa fa-plug',
            ],
            1
        );
    }

    /**
     * Extend Icon pack core controls.
     *
     * @param  object $controls_manager Controls manager instance.
     * @return void
     */

    public function blo_icon_pack( $controls_manager ) {

        require_once BLO_EDITOR_ELEMENTOR. '/controls/icon.php';

        $controls = array(
            $controls_manager::ICON => 'BLO_Icon_Controler',
        );

        foreach ( $controls as $control_id => $class_name ) {
            $controls_manager->unregister_control( $control_id );
            $controls_manager->register_control( $control_id, new $class_name() );
        }

    }

    public function blo_shortcode_elements($widgets_manager){

        require_once BLO_EDITOR_ELEMENTOR.'/widgets/blo-case-study.php';
        $widgets_manager->register_widget_type(new Elementor\Blo_Case_Study_Widget());

        require_once BLO_EDITOR_ELEMENTOR.'/widgets/blo-career-block.php';
        $widgets_manager->register_widget_type(new Elementor\Blo_Career_block_Widget());

        require_once BLO_EDITOR_ELEMENTOR.'/widgets/blo-feature-box.php';
        $widgets_manager->register_widget_type(new Elementor\Blo_Feature_box_Widget());


        require_once BLO_EDITOR_ELEMENTOR.'/widgets/blo-team.php';
        $widgets_manager->register_widget_type(new Elementor\Blo_Team_Widget());


        if(class_exists('\Elementor\ElementsKit_Widget_hotspot')){
            $widgets_manager->register_widget_type(new Elementor\ElementsKit_Widget_hotspot());
        }
        if(class_exists('\Elementor\Elementskit_Widget_Chart')){
            $widgets_manager->register_widget_type(new Elementor\Elementskit_Widget_Chart());
        }
    }

	public static function blo_get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new blo_Shortcode();
        }
        return self::$_instance;
    }

}
blo_Shortcode::blo_get_instance();

if(!defined('ELEMENTOR_PRO_VERSION')){
    add_action( 'elementor/editor/after_enqueue_styles', function() {
        wp_enqueue_style( 'xs-elementor-editor-panel',  BLO_CSS . '/elementor-editor-panel.css', null,  BLO_VERSION );
    });
}