<?php 
	require_once 'db_connect.php';
	
	class Subscribers
	{
		public static function getSubscriber($userId)
		{

			$query = mysql_query("SELECT * FROM subscribers WHERE userId = $userId");

			if($query)
			{
				if(mysql_num_rows($query) == 1)
				{
					return mysql_fetch_object($query);
				}
			}

			return null;
		}
	}
?>