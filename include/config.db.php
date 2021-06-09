<?php 
/**
 * Database Configuration
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	defined('_VALID') or die('Restricted Access!');
	session_start();
	require_once 'dbconn.php';
	try{
		$cont = new PDO("mysql:host=". $config['db_host'] ."; dbname=". $config['db_name'], $config['db_user'], $config['db_pass']);	
		// $cont = new PDO("mysql:host=localhost; dbname=cms", 'root', 'cse');	//Normal connection
	}catch(PDOException $e){
		echo 'Error : ' . $e->getMessage();
	}
	
	
?>