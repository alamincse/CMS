<?php 
/**
 * Class Name : Authentication
 * @author    : AL-AMIN
 * @package   : hitCoder
 */
	require_once ( dirname(dirname( __FILE__ ) ) . '/include/config.php' );

	class Auth
	{
		/**
		 * If you have no logged in
		 * Go back login.php page
		 */
		public static function checkAdmin()
		{
			global $config;

			$access = false;
			
			if( isset($_SESSION['AUID']) )
			{
				// if( $_SESSION['AUID'] == $config['admin_uname'] && $_SESSION['cookie'] == $_COOKIE['show_cookie'] )
				if( $_SESSION['AUID'] == $config['admin_uname'] )
				{
					$access = true;
				}
			}

			if( !$access )
			{
				/** Go Back to Login Form */
				header( 'location:'. $config['BASE_URL']. '/siteadmin/login.php');
			}
		}


		/**
		 * When search any delete.php file
		 * Go back backend main page
		 */
		public function checkId()
		{
			global $config;
			header( 'location:'. $config['BASE_URL']. '/siteadmin/' );
		}
	}
?>