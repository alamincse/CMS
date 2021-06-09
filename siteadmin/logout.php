<?php 
/**
 * Description : Logout by admin
 * @author     : AL-AMIN
 * @package    : My Personal website
 */
	define('_VALID', true);
	define('_ADMIN', true);

	require_once( dirname(dirname(__FILE__)). '/include/config.php' );
	session_start();
	session_destroy();
	session_write_close();
	header('location:login.php?action=logout&' .rawurlencode($config['BASE_URL']));
	die();
?>