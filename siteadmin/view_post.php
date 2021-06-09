<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname(__FILE__)) .'/class/article.class.php' );
	require_once( dirname(dirname(__FILE__)) .'/class/auth.class.php' );
	require_once( dirname(dirname(__FILE__)) .'/functions/admin.function.php' );
	
	$post = new Article();

	Auth::checkAdmin();

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'View Post');
	$smarty->assign('total_post', $post->total_post());
	$smarty->assign('posts', $post->show_all_post());
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('view_post.tpl');
	$smarty->display('footer.tpl');
?>