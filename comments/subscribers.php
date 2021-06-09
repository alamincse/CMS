<?php 
	
	require_once ( dirname(dirname(__FILE__)). '/include/config.comt.php' );
	
	class Subscribers
	{
		public static function getSubscriber( $userId )
		{
			global $cont;
			$stmt = $cont->prepare( "SELECT * FROM subscribers WHERE userId = $userId" );
			$stmt->execute();
			$comments_num = $stmt->rowCount();
			if( $stmt )
			{
				if( $comments_num == 1 )
				{
					return true;
				}
			}

			return null;
		}
	}
?>