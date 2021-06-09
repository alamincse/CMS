<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname(__FILE__)). '/class/auth.class.php' );

	Auth::checkAdmin();
	Auth::checkId();
	
	if (isset($_GET['id'])) 
	{
		$id = $_GET['id'];
		$stmt = $cont->prepare("DELETE FROM menu WHERE menu_id = $id");
		$stmt->bindParam('id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Delete Menu &raquo; '. $_GET['menu']);
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('delete_menu.tpl');
	$smarty->display('footer.tpl');

?>