<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ ) ). '/include/config.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/functions/admin.function.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/class/auth.class.php' );
	
	Auth::checkAdmin();
	
	$check_msg_menu = 'Message';
	if( isset($check_msg_menu) )
	check_msg_menu_complete( $check_msg_menu );

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', $check_msg_menu);
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', new_msg_complete());
	$smarty->assign('read_msg', read_all_msg());
	$smarty->assign('read', msg_read_update());
	$smarty->assign('un_read', inbox_msg_count());
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('message.tpl');
	$smarty->display('footer.tpl');
?>
	