<?php

class Blo_Modules{

    static function module_url(){
        return plugin_dir_url( __FILE__ );
    }

    public function run(){
        // die('foo');

        add_action('elementskit/loaded', function(){
            if (class_exists('ElementsKit_Lite')) {
                if(\ElementsKit_Lite::package_type() == 'free' && !in_array('elementskit/elementskit.php', apply_filters('active_plugins', get_option('active_plugins')))){
                    $this->include_files();
                    $this->load_classes();
                    add_action( 'wp_enqueue_scripts', [$this, 'scripts'] );
                }
            }
        });

    }

    public function scripts(){
        wp_enqueue_script( 'chart-kit-js', self::module_url() . 'elements/chart/assets/js/chart.js', array( 'jquery' ), \Blo_Essentials_Includes::version(), true );
    }

    public function load_classes(){
        new ElementsKit\Modules\Parallax\Init();
        new ElementsKit\Modules\Sticky_Content\Init();
    }

    public function include_files(){

        include 'parallax/init.php';
        include 'sticky-content/init.php';
        include 'custom-css/init.php';


        include 'elements/hotspot/hotspot.php';
        include 'elements/chart/chart.php';
    }

    public static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {

            // Fire the class instance
            self::$instance = new self();
            self::$instance;
        }

        return self::$instance;
    }

}

Blo_Modules::instance()->run();