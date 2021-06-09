<?php 

	require_once 'subscribers.php';

	class Comments
	{
		/**
		 * show comments from your comments table
		 */
		public static function getComments()
		{
			$output = array();

			$query = mysql_query("SELECT * FROM comments ORDER BY comment_id DESC");
			
			if($query)
			{

				if(mysql_num_rows($query) > 0 )
				{
					while($row = mysql_fetch_object($query))
					{
						$output[] = $row;
					}
				}
			}

			return $output;
		}

		/**
		 * @param return a stdClass Object from the database
		 */
		public static function insert($comment, $userId)
		{
			/* insert data into the database */
			$query = mysql_query("INSERT INTO comments VALUES('', '$comment', '$userId', NOW())");
			
			if($query)
			{
				$insert_id = mysql_insert_id();

				$std = new stdClass();
				$std->comment_id = $insert_id;
				$std->comment = $comment;
				$std->userId = (int)$userId;

				return $std;	
			}
			
			return null;
		}

		public static function update($data)
		{
			/** delete the comment from the comments database using the id of comment_id */
		}



		public static function delete($commentId)
		{
			$query = mysql_query("DELETE FROM comments WHERE comment_id = $commentId");
			if($query)
			{
				return true;
			}

			return null;
		}
	}
?>