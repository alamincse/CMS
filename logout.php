<?php 
/**
 * Subscribers logout
 * @author : AL-AMIN
 * @package : hitCoder
 */
	define( '_VALID', true );
	require_once( dirname(__FILE__) .'/include/config.php' );

	session_start();
	session_destroy();
	setcookie( 'uname', '', time() - 43200 );
	setcookie( 'u_id', '', time() - 43200 );

	header( 'location:forum.php?logout=true&' .rawurlencode($config['BASE_URL']) );
?>