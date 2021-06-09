<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ ) ). '/include/config.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/functions/admin.function.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/class/auth.class.php' );
	
	Auth::checkAdmin();

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Message Read');
	$smarty->assign('u_read', msg_read_update());
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('un_read', inbox_msg_count());
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('read.tpl');
	$smarty->display('footer.tpl');
?>
	