<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname(__FILE__)). '/class/article.class.php' );
	require_once( dirname(dirname(__FILE__)). '/class/auth.class.php' );
	require_once( dirname(dirname(__FILE__)). '/functions/admin.function.php' );

	Auth::checkAdmin();
	
	$author = new Article();
	$authors = $author->admin_user();
	$total_admin = $author->total_admin();

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Site Admin');
	$smarty->assign('authors', $authors);
	$smarty->assign('total_admin', $total_admin);
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('admin.tpl');
	$smarty->display('footer.tpl');

?>