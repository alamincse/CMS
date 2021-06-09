<?php 
/**
 * Class Name  : URL
 * @author     : AL-AMIN
 * @package    : my personal site
 */
	require_once ( dirname(dirname( __FILE__ ) ) . '/include/config.php' );
	
	class Url
	{
		
		public static function getServerURL()
		{
			$serverName = NULL;

			if( isset($_SERVER['HTTP_HOST']) )
			{
				// store localhost:8080 or localhost:80(default)
				$serverName = $_SERVER['HTTP_HOST'];
			}
			
			else if( isset($_SERVER['SERVER_NAME']) )
			{
				// store localhost
				$serverName = $_SERVER['SERVER_NAME'];
			}
			else if ( isset($_SERVER['SERVER_ADDR']) ) 
			{
				// store 127.0.0.1 (IP address)
		        $serverName = $_SERVER['SERVER_ADDR'];
		    } 
		    else 
		    {
		    	// store localhost
		        $serverName = 'localhost';
		    }

		    $serverProtocol = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ) ? 'https' : 'http';
		 
		    return $serverProtocol. '://' .$serverName;
		}


		public static function checkUrl()
		{
			
			global $config;

			// $serverProtocol = 'http';
			// $url = $serverProtocol .'://' .$_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];

			$url = Url::getServerURL() . $_SERVER['REQUEST_URI'];
			
			$site_url = $config['BASE_URL'];


			// $site_url = str_replace( $site_url, $site_url .'/', $site_url );
			$site_url = str_replace( $site_url, $site_url .'/', $site_url );
			
			if( $url == $site_url ) 
				return true;
			else
				return die('<title>Site URL Not Setting &raquo; AL-AMIN</title><font style="color:red;">Oops! Your site address is\'t valid. Please go to your <code style="background:#999;color:white;">include/config.paths.php file</code> then open this file and set your current site address.</font>');
		}

		// public static function checkUrl()
		// {
			
		// 	global $config;

		// 	$serverProtocol = 'http';

		// 	$url = $serverProtocol .'://' .$_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
			
		// 	$new_url = str_replace('/index.php', '', $url);
			
		// 	if( $new_url == $config['BASE_URL'] ) 
		// 		return true;
		// 	else
		// 		return die('<title>Site URL Not Setting &raquo; AL-AMIN</title><font style="color:red;">Oops! Your site address is\'t valid. Please go to your <code style="background:#999;color:white;">include/config.paths.php file</code> then open this file and set your current site address.</font>');
		// }
	}
?>