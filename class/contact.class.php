<?php 
/**
 * Class Name  : Contact
 * @author     : AL-AMIN
 * @package    : hitCoder
 */
	require_once ( dirname(dirname( __FILE__ ) ) . '/include/config.php' );

	class Contact
	{
		private static $_connection;

		/**
		 * check DB connection
		 * @return string with DB
		 */
		public static function conn()
		{
			global $cont;

			if( isset($cont) )
			{
				return self::$_connection = $cont;
			}
			
			trigger_error( 'Failed to database connection'. mysql_error(), E_USER_ERROR );
			
			return self::$_connection;
		}	


		/**
		 * Contact form validation
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 */
		public static function contactMe()
		{
			$errors = array();
		
			if( isset($_POST['send-msg']) )
			{
				$f_name  = ucfirst(htmlentities(htmlspecialchars(trim($_POST['f_name']))));
				$email   = htmlentities(htmlspecialchars(trim($_POST['email'])));
				$loc	 = htmlentities(htmlspecialchars(trim($_POST['loc'])));
				$subject = ucfirst(htmlentities(htmlspecialchars(trim($_POST['subject']))));
				$msg 	 = ucfirst($_POST['msg']);


				if( !empty($f_name) && !empty($email) && !empty($loc) && !empty($subject) && !empty($msg) )
				{
					if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
					{
						$errors [] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>Oops! Your email is\'t valid.</p>
							</div><!--  .alert .alert-error -->';
					}
					else
					{
						$token = token( 50, 5 );
						$stmt = self::conn()->prepare( "INSERT INTO message VALUES('', '', '$f_name', '$email', '$loc', '$subject', '$msg', NOW(), '$token')" );

						if( $stmt->execute() )
						{
							$errors [] = '<div class="alert alert-success">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>Well done! You have successfully sent your message.</p>
							</div><!--  .alert .alert-error -->';
						}
						else
						{
							$errors [] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>Invalid database connectin.</p>
							</div><!--  .alert .alert-error -->';
						}
					}
				}
				else
				{
					$errors [] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>Some fields are required!</p>
							</div><!--  .alert .alert-error -->';
				}
			}

			return $errors;
		}
	}
?>