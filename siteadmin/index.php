<?php 
/**
 * Description : Siteadmin main page
 * @author     : AL-AMIN
 * @package    : My personal website
 */
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ ) ). '/include/config.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/functions/admin.function.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/class/auth.class.php' );
	
	define( 'ABSPATH', dirname( __FILE__ ). '/' );
	// var_dump(ABSPATH);
	Auth::checkAdmin();
	
	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Home page');
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('index.tpl');
	$smarty->display('footer.tpl');
?>
	