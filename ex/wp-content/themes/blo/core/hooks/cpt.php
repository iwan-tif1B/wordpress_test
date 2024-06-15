<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
//die('cpt found');
/**
 * hooks for wp blog part
 */

// if there is no excerpt, sets a defult placeholder
// ----------------------------------------------------------------------------------------

if ( class_exists( 'BloCustomPost\Blo_CustomPost' ) ) {
    //project 
   $project = new BloCustomPost\Blo_CustomPost( 'blo' );
   
	$project->xs_init( 'blo-case-study', 'Case', 'Case Study', array( 'menu_icon' => 'dashicons-grid-view',
		'supports'	 => array( 'title','editor','excerpt','thumbnail'),
		'rewrite'	 => array( 'slug' => 'case-study' ),
		'exclude_from_search' => true,
	));
      
	$project_tax = new  BloCustomPost\Blo_Taxonomies('blo');
    $project_tax->xs_init('blo-case-study', 'Case Category', 'Case Categories', 'blo-case-study');
}
