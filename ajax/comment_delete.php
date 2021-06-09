<?php 
	defined('_VALID') or die('Restricted Access!');
	if(isset($_POST['task']) && $_POST['task'] == 'comment_delete')
	{
		require_once '../mysql/db_connect.php';
		require_once '../mysql/models/comments.php';

		if(class_exists('Comments'))
		{
			if(Comments::delete($_POST['comment_id']))
			{
				echo 'true';
			}
		}
		echo 'false';
	}
?>