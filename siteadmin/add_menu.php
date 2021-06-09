<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname(__FILE__)). '/class/article.class.php' );
	require_once( dirname(dirname(__FILE__)). '/class/auth.class.php' );
	require_once( dirname(dirname(__FILE__)). '/functions/admin.function.php' );

	Auth::checkAdmin();
	
	$errors = null;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$menu_title   = $_POST['menu-title'];
		$menu_content = $_POST['menu-content'];

		if (empty($menu_title) && empty($menu_content)) 
		{
			$errors = 'Please select title and content.';
		}
		else
		{
			$add_menu = new Article();
			$add_menu->admin_add_menu($menu_title, $menu_content);
		}
	}

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Add Menu');
	$smarty->assign('errors', $errors);
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('header.tpl');
	$smarty->display('add_menu.tpl');
	$smarty->display('footer.tpl');
?>