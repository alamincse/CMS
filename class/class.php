<?php 
 	var_dump(__FILE__);
 	var_dump(dirname(__FILE__));
 	$time = strtotime(time());
 	echo strftime("%B %d, %Y at %I:%M %p", $time);
?>