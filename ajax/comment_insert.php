<?php 
	// defined('_VALID') or die('Restricted Access!');

	// print_r($_REQUEST);
	if(isset($_POST['task']) && $_POST['task'] == 'comment_insert')
	{
		require_once '../include/config.comt.php';

		$userId = (int)$_POST['userId'];
		$comment = addslashes(str_replace("\n", "<br/>", $_POST['comment']));

		/** Default store information by user comments */
		$std = new stdClass();
		$std->user    = null;
		$std->comment = null;
		$std->error   = false;
		echo $std->user;

		require_once '../comments/comments.php';

		if(class_exists('Comments'))
		{
			$stmt = $cont->prepare( "SELECT * FROM subscribers WHERE userId = $userId" );
			$stmt->bindParam('userId', $userId, PDO::PARAM_INT);
			$stmt->execute();
			while( $row = $stmt->fetch() )
			{
				$un = $row['userName'];
				$img = $row['profile_img'];
			}

			$userInfo = Subscribers::getSubscriber($userId);

			if($userId == null)
			{
				/** problem */ 
				$std->error = true;
			}

			$commentInfo = Comments::insert( $comment, $userId, $un, $img );
			
			if($commentInfo == null)
			{
				/** problem */
				$std->error = true;
			}

			$std = new stdClass();
			$std->user = $userInfo;
			$std->comment = $commentInfo;
			// $std->error = false;
			// echo json_encode($std);
		}

		echo json_encode($std);
	}
	else
	{
		/** If user search this page. you will see the main page(index.php) */
		header('location:../');
	}
?>