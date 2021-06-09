<?php 
/**
 * Description : Administrator Login 
 * @author     : AL-AMIN
 * @package    : hitCoder
 */
	define( '_VALID', true );
	define( '_ADMIN', true );
	require_once ( dirname( dirname( __FILE__ ) ) . '/class/admin.login.class.php' );
	require_once ( dirname( dirname( __FILE__ ) ) . '/functions/admin.function.php' );

	$errors = AdminLogin::doLogin();

	if( isset($_GET['action']) && $_GET['action'] == 'logout' )
	$smarty->assign( 'action', 'You have successfully logged out!' );

	$smarty->assign('site_name', $seo['site_name']);
	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('errors', $errors);
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('login.tpl');
	$smarty->display('login-footer/footer.tpl');
?>