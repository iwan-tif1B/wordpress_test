<?php
/**
 * Theme functions and definitions
 *
 * @author     ManeshTimilsina
 * @copyright  (c) Copyright by ManeshTimilsina
 * @link       https://maneshtimilsina.com/
 * @package    Taza
 */

if ( !defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'TAZA_VERSION', '1.0.1' );
define( 'TAZA_DIR', rtrim( get_template_directory(), '/' ) );
define( 'TAZA_URI', rtrim( get_template_directory_uri(), '/' ) );

// Load autoload.
if ( file_exists( TAZA_DIR . '/vendor/autoload.php' ) ) {
	require_once TAZA_DIR . '/vendor/autoload.php';
}

/*--------------------------------------------------------------
# Theme Supports
--------------------------------------------------------------*/

if ( !function_exists( 'taza_setup' ) ) {
  function taza_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'customize-selective-refresh-widgets' );
  }
}

add_action( 'after_setup_theme', 'taza_setup' );

/*--------------------------------------------------------------
# Enqueue Styles
--------------------------------------------------------------*/

if ( !function_exists( 'taza_styles' ) ) {
  function taza_styles() {
    wp_enqueue_style( 'taza-style', get_stylesheet_uri(), array(), TAZA_VERSION );

  }
}

add_action( 'wp_enqueue_scripts', 'taza_styles' );

/**
 * Add admin notice.
 *
 * @since 1.0.2
 */
function taza_add_admin_notice() {
	\Nilambar\AdminNotice\Notice::init(
		array(
			'slug' => 'taza',
			'type' => 'theme',
			'name' => esc_html__( 'Taza', 'taza' ),
		)
	);
}

add_action( 'admin_init', 'taza_add_admin_notice' );

function taza_add_donate_link() {
	echo '<span style="font-weight: bold;"><a href="https://www.buymeacoffee.com/maneshtimilsina" target="_blank">Buy Me a Coffee</a></span>';
}

add_action( 'taza_after_admin_notice_link_items', 'taza_add_donate_link' );
