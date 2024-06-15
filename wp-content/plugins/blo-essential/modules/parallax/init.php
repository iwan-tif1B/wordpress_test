<?php
namespace ElementsKit\Modules\Parallax;

defined( 'ABSPATH' ) || exit;

class Init{
    private $dir;
    private $url;

    public function __construct(){

        // get current directory path
        $this->dir = dirname(__FILE__) . '/';

        // get current module's url
		$this->url = \Blo_Modules::module_url() . 'parallax/';
		
		// enqueue scripts
		add_action('wp_head', [$this, 'inline_script']);
		add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
		add_action('elementor/frontend/before_enqueue_scripts', [$this, 'editor_scripts']);

		// include all necessary files
		$this->include_files();

		// calling the section parallax class
		new \Elementor\ElementsKit_Extend_Parallax();
        
	}
	
	public function include_files(){
		include $this->dir . 'extend-controls.php';
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'elementskit-parallax-style', $this->url . 'assets/css/style.css' , null, \Blo_Essentials_Includes::version() );
		wp_enqueue_script( 'jarallax', $this->url . 'assets/js/jarallax.js', array('jquery'), \Blo_Essentials_Includes::version(), false );
		wp_enqueue_script( 'tweenmax', $this->url . 'assets/js/TweenMax.min.js', array('jquery'), \Blo_Essentials_Includes::version(), true );
		wp_enqueue_script( 'jquery-easing', $this->url . 'assets/js/jquery.easing.1.3.js', array('jquery'), \Blo_Essentials_Includes::version(), true );
		wp_enqueue_script( 'tilt', $this->url . 'assets/js/tilt.jquery.min.js', array('jquery'), \Blo_Essentials_Includes::version(), true );
	
		wp_enqueue_script( 'animejs', $this->url . 'assets/js/anime.js', array('jquery'), \Blo_Essentials_Includes::version(), true );
		wp_enqueue_script( 'magicianjs', $this->url . 'assets/js/magician.js', array('jquery'), \Blo_Essentials_Includes::version(), true );
	}

	public function editor_scripts(){
		wp_enqueue_script( 'elementskit-parallax-script', $this->url . 'assets/js/main.js', array( 'jquery', 'elementor-frontend' ), \Blo_Essentials_Includes::version(), true );
	}

	public function inline_script(){
		echo '
			<script type="text/javascript">
				var elementskit_section_parallax_data = {};
				var elementskit_module_parallax_url = "'.$this->url.'"
			</script>
		';
	}
}