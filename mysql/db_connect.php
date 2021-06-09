<?php 
	$connt = mysql_connect('localhost', 'root', 'cse');
	$db = mysql_select_db('db_youtube_tutorials');

	if(!$connt)
	{
		echo 'k';
	}
?>