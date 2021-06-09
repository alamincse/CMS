<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ )). '/class/auth.class.php' );
	require_once ( dirname(dirname( __FILE__ )). '/functions/admin.function.php' );

	Auth::checkAdmin();

	if (isset($_GET['id']))
	$id = (int)$_GET['id'];
	
	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'admin &raquo; '.$_GET['author']);
	$smarty->assign('showPosts', showPost( $id ));
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('admin_view_post.tpl');
	$smarty->display('footer.tpl');
?>