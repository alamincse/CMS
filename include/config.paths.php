<?php
/**
 * Description: Path or Location settings for this website
 * @author  : AL-AMIN
 * @package : hitCoder
 */ 
	defined('_VALID') or die('Restricted Access!');
	
	/*-------------------------------------------------------------------
	| 
	| Description : Store variable on your website requirement.
	| 
	| -------------------------------------------------------------------*/
	
	$config = array();

	/*-------------------------------------------------------------------
	| 
	| Description : Set your site address where you store this website.
	| Example: 'http://localhost/example'
	| 
	| -------------------------------------------------------------------*/

	$config['BASE_URL'] = 'http://localhost/cms_project';

	/*-------------------------------------------------------------------
	| Optional...
	| Description : Locate original directory. It's default settings, you can't change it.
	| 
	| -------------------------------------------------------------------*/

	$config['BASE_DIR'] = dirname( dirname( __FILE__ ) );

	/** End of the website path connection */
?>