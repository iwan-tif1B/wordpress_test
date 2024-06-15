<?php

function blo_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = BLO_REMOTE_CONTENT;
	$demos_array			 = array(
		'default'			 => array(
			'title'			 => esc_html__( 'All Demo', 'blo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/default/screenshot.png',
			'preview_link'	 => esc_url( 'https://demo.xpeedstudio.com/blo/' ),
		),
		'home-tax'			 => array(
			'title'			 => esc_html__( 'Home Tax', 'blo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/home-tax/screenshort.jpg',
			'preview_link'	 => esc_url( 'https://demo.xpeedstudio.com/blo/home-tax/' ),
		),
		'rtl'			 => array(
			'title'			 => esc_html__( 'RTL Version', 'blo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/rtl/screenshot.png',
			'preview_link'	 => esc_url( 'https://demo.xpeedstudio.com/blo/rtl/' ),
		),
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', 'blo_fw_ext_backups_demos' );