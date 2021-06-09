<?php 
	// require_once 'init.php';
	mysql_connect('localhost', 'root', 'cse');
	mysql_select_db('cms');
	
	if(isset($_GET['search'])){
		$search_item = $_GET['search'];
		// var_dump($search_item);
		
	}

	if(!empty($search_item)){
		$query = mysql_query("SELECT * FROM subscribers WHERE userName LIKE '%$search_item%' ");
		while($row_name = mysql_fetch_assoc($query)){
			echo $rows = $row_name['userName'] . '<br/>';
		}
	}else{
		echo 'wrong';
	}
	

?>