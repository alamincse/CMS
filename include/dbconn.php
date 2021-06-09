<?php 
/**
 * Database configuration
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	defined('_VALID') or die('Restricted Access!');

	/*-------------------------------------------------------------------
	| 
	| Description : Set your host name. 
	| Example: localhost
	| Default set - localhost
	| 
	| -------------------------------------------------------------------*/
	
	$config['db_host'] = 'localhost';

	/*-------------------------------------------------------------------
	| 
	| Description : Call Database Name where you store your all data or content
	| Default mySQL connection
	| 
	| -------------------------------------------------------------------*/

	$config['db_name'] = 'cms';


	/*-------------------------------------------------------------------
	| 
	| Description : Call Database username
	| 
	| -------------------------------------------------------------------*/

	$config['db_user'] = 'root';

	/*-------------------------------------------------------------------
	| 
	| Description : Select database password
	| Default password: 'cse'
	| 
	| -------------------------------------------------------------------*/

	$config['db_pass'] = '';

	/** End of the database connection */
?>