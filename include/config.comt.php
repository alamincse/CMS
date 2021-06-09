<?php 	
	try{
		// $cont = new PDO("mysql:host=localhost; dbname=". $config['db_name'], $config['db_user'], $config['db_pass']);	
		$cont = new PDO("mysql:host=localhost; dbname=cms", 'root', 'cse');	//Normal connection
	}catch(PDOException $e){
		echo 'Error : ' . $e->getMessage();
	}
?>