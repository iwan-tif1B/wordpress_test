<?php if (!defined('ABSPATH')) die('Direct access forbidden.');

$manifest = array();

$manifest[ 'name' ]			 = 'blo';
$manifest[ 'uri' ]			 = esc_url( 'https://themeforest.net/user/xpeedstudio' );
$manifest[ 'description' ]	 = esc_html__( 'Corporate Business WordPress Theme', 'blo' );
$manifest[ 'version' ]		 = '1.0';
$manifest[ 'author' ]			 = 'XpeedStudio';
$manifest[ 'author_uri' ]		 = esc_url( 'https://themeforest.net/user/xpeedstudio' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => BLO_MINWP_VERSION,
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);


?>
