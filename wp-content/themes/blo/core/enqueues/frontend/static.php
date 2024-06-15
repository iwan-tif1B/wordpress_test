<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * enqueue all theme scripts and styles
 */


// stylesheets
// ----------------------------------------------------------------------------------------
if ( !is_admin() ) {
	// 3rd party css
   wp_enqueue_style( 'blo-fonts', blo_google_fonts_url(['Rubik:300,400,500,700,900&display=swap', 'Merriweather:300,300i,400,700,900&display=swap', 'Poppins:100,200,300,400,500,700,800']), null,  BLO_VERSION );
   wp_enqueue_style( 'bootstrap',  BLO_CSS . '/bootstrap.min.css', null,  BLO_VERSION );
   wp_enqueue_style( 'font-awesome',  BLO_CSS . '/font-awesome.css', null,  BLO_VERSION );
   wp_enqueue_style( 'owl-carousel',  BLO_CSS . '/owl.carousel.min.css', null,  BLO_VERSION );
   wp_enqueue_style( 'OverlayScrollbars',  BLO_CSS . '/OverlayScrollbars.min.css', null,  BLO_VERSION );
   wp_enqueue_style( 'owl-theme-default',  BLO_CSS . '/owl.theme.default.min.css', null,  BLO_VERSION );
   wp_enqueue_style( 'blo-wocommerce-custom',  BLO_CSS . '/woocommerce.css', null,  BLO_VERSION );

   // theme css
	wp_enqueue_style( 'blo-blog',  BLO_CSS . '/blog.css', null,  BLO_VERSION );
	wp_enqueue_style( 'blo-gutenberg-custom',  BLO_CSS . '/gutenberg-custom.css', null,  BLO_VERSION );
 	wp_enqueue_style( 'blo-master',  BLO_CSS . '/master.css', null,  BLO_VERSION );
}

// javascripts
// ----------------------------------------------------------------------------------------
if ( !is_admin() ) {

   // 3rd party scripts
	wp_enqueue_script( 'bootstrap',  BLO_JS . '/bootstrap.min.js', array( 'jquery' ),  BLO_VERSION, true );
    wp_enqueue_script( 'popper',  BLO_JS . '/Popper.js', array( 'jquery' ),  BLO_VERSION, true );

	// theme scripts
	wp_enqueue_script( 'owl-carousel',  BLO_JS . '/owl.carousel.min.js', array( 'jquery' ),  BLO_VERSION, true );

    // theme scripts
	wp_enqueue_script( 'blo-overlayScrollbars',  BLO_JS . '/jquery.overlayScrollbars.min.js', array( 'jquery' ),  BLO_VERSION, true );
	// theme scripts
	wp_enqueue_script( 'blo-script',  BLO_JS . '/script.js', array( 'jquery' ),  BLO_VERSION, true );

	// Load WordPress Comment js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}