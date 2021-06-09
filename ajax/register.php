<?php 
	defined('_VALID') or die('Restricted Access!');
	if(isset($_POST['username']))
	{
		$usernames = array('john','michael','terry', 'steve', 'donald');

		$username = $_POST['username'];

		if(in_array($username, $usernames))
		{
			echo '<font color="red">The nickname <STRONG>'.$username.'</STRONG> is already in use.</font>';
		}
		else
		{
			echo 'OK';
		}
	}

?>