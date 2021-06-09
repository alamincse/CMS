<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname( __FILE__ )) .'/class/article.class.php' );
	require_once( dirname(dirname( __FILE__ )) .'/class/auth.class.php' );
	require_once( dirname(dirname( __FILE__ )) .'/class/AdminWritePost.class.php' );
	require_once( dirname(dirname( __FILE__ )) .'/functions/admin.function.php' );

	Auth::checkAdmin();
	
	$add_new = new Article;

	$errors = AdminWeitePost::WritePostCon( $postCon = new Article );
	

	/** For add new category */
	if( isset($_GET['action']) == 'newcategory' )
	{
		if( isset($_POST['category']) )
		{
			$cat = $_POST['cat'];

			if( !empty($cat) )
				$add_new->add_category( $cat );
		}

		/** default variable store */
		$newcategory = 'category';
	}
	else
		$newcategory = '';

	/** call for cat delete */
	if( isset($_GET['cat_id']) )
		Article::cat_delete( $_GET['cat_id'] );
	
	/** Category edit by siteadmin */
	if( isset($_GET['cat_id']) )	
		$edit_cat = Article::CatEdit( $_GET['cat_id'] );
	else
		$edit_cat = null;
	// echo $edit_cat;

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Add post');
	$smarty->assign('errors', $errors);
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('newcategory', $newcategory);
	$smarty->assign('edit_cat', $edit_cat);
	$smarty->assign('categories', $add_new->show_category());
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('add_post.tpl');
	$smarty->display('footer.tpl');
?>