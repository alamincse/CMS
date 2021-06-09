<?php 
	// header('Content-type: application/rar');
	// header('Content-Disposition: attachment; filename="mySQL SERVER.rar"');
	// readfile($_GET['file']);

	define('_VALID', true);
	error_reporting(E_ALL^E_NOTICE);
	require_once('include/config.db.php');
	
	header('Content-type: application/rar');
	header('Content-Disposition: attachment; filename="mySQL SERVER.rar"');
	readfile($_GET['file']);

	if(file_exists($_GET['file']))
	{
		/* If the visitor is not a search engine, count the downoad: */
		$stmt = $cont->prepare( "UPDATE download_manager SET downloads = downloads+1 " );
		$stmt->execute();
	}
	else
	{
		header( 'location:./' );
	}
?>