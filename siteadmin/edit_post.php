<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ )) .'/class/article.class.php' );
	require_once ( dirname(dirname( __FILE__ )) .'/class/auth.class.php' );
	require_once ( dirname(dirname( __FILE__ )) .'/class/AdminUpdatePost.class.php' );
	require_once ( dirname(dirname( __FILE__ )) .'/functions/admin.function.php' );

	Auth::checkAdmin();
	// Auth::checkId();

	$edit_posts = new Article;
	
	$postUpdateCon = new Article;

	$edit_post = $edit_posts->admin_edit_post();
	
	$errors = AdminUpdatePost::UpdatePostCondition( $postUpdateCon );

	$smarty->assign( 'dashboard_name', $seo['dashboard_name'] );
	$smarty->assign( 'site_name', 'Edit Post &raquo; ' .$_GET['article'] );
	$smarty->assign( 'edit_post', $edit_post );
	$smarty->assign( 'errors', $errors );
	$smarty->assign( 'categories', $edit_posts->show_category() );
	$smarty->assign( 'add_css', add_css() );
	$smarty->assign( 'add_js', add_js() );
	$smarty->display( 'header.tpl' );
	$smarty->display( 'menu.tpl');
	$smarty->display( 'edit_post.tpl' );
	$smarty->display( 'footer.tpl' );
?>