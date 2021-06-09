<?php 
/**
 * Class Name : AdminLogin
 * @author    : AL-AMIN
 * @package   : hitCoder
 */
	require_once ( dirname(dirname( __FILE__ ) ) .'/include/config.php' );
	
	class AdminLogin
	{
		/**
		 * Admin login 
		 * @return boolean< true or false >
		 */
		public static function doLogin()
		{
			global $config;

			$errors = null;

			if( $_SERVER['REQUEST_METHOD'] == 'POST' )
			{
				$uname = htmlentities(trim($_POST['username']));
				$pw    = htmlentities(trim($_POST['password']));
				
				if( !empty($uname) && !empty($pw) ) 
				{
					if( $uname <> $config['admin_uname'] )
					{
						$errors = 'That user dosen\'t exist!';
					}
					elseif( $pw <> $config['admin_pw'] )
					{
						$errors = 'Oops! Don\'t match your password.';	
					}
					elseif($uname == $config['admin_uname'] && $pw == $config['admin_pw']) 
					{
						$_SESSION['AUID'] = $config['admin_uname'];
						$_SESSION['admin_id']  = 10;

						header( 'location:' .$config['BASE_URL'] .'/siteadmin/' );	
					}
				}
				else
				{
					$errors = 'Please enter username and password.';
				}
			}
			
			return $errors;
		}
	}
?>