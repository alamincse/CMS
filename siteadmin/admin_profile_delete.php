<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ )). '/class/auth.class.php' );
	require_once ( dirname(dirname( __FILE__ )). '/functions/admin.function.php' );

	Auth::checkAdmin();

	if (isset($_GET['id'])) 
	{
		$id = (int)$_GET['id'];
		$stmt = $cont->prepare("DELETE FROM cms_admin WHERE admin_id = :id");
		$stmt->bindParam('id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Admin Delete &raquo; '.$_GET['author']);
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('admin_profile_delete.tpl');
	$smarty->display('footer.tpl');
?>