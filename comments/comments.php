<?php 
	
	require_once 'subscribers.php';

	class Comments
	{
		/**
		 * show comments from your comments table
		 */
		public static function getComments($post_id)
		{
			global $cont;

			$stmt = $cont->prepare("SELECT * FROM user_comments WHERE post_id = $post_id ORDER BY comments_id DESC");
			$stmt->execute();
			return $stmt->fetchAll();
		}

		/**
		 * @param return a stdClass Object from the database
		 */
		public static function insert( $comment, $userId, $un, $img )
		{
			global $cont;                                     //cid,pid,uid,      ptit,cc,time, cname,ce,ccontetn, profile
			$stmt = $cont->prepare("INSERT INTO user_comments VALUES('', '', '$userId', '', '', NOW(), '$un', '', '$comment', '$img')");
			$stmt->bindParam('userId', $userId, PDO::PARAM_INT);
			$stmt->bindParam('comment', $comment, PDO::PARAM_STR);
			$stmt->bindParam('un', $un, PDO::PARAM_STR);
			$stmt->bindParam('img', $img, PDO::PARAM_STR);
			$stmt->execute();
			// return $stmt->fetchAll();

			if($stmt)
			{
				$insert_id = $cont->lastInsertId();

				$insert_id = $insert_id++;
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