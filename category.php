<?php 
/**
 * Template: Category
 * @param string < array() >
 * @return string < array() >
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	define( '_VALID', true );
	require_once ( __DIR__ .'/class/url.class.php' );
	require_once ( __DIR__ .'/class/pagination.class.php' );
	require_once ( __DIR__ .'/class/category.class.php' );
	require_once ( __DIR__ .'/class/widgets.class.php' );
	require_once ( __DIR__ .'/class/comment.class.php' );
	require_once ( __DIR__ .'/class.php' );
	require_once ( __DIR__ .'/functions.php' );
	// dirname(__FILE__) or __DIR__ same method.
	
	$category = new Article();

	/** through '$category' variable to Category Class */
	$cats = Category::categories( $category );
	$sideCat = Article::categoriesAll();

	$smarty->assign( 'single_cat', $cats['single_cat'] );
	$smarty->assign( 'page_name', 'Category &raquo; ' .$cats['cat'] );

	$smarty->assign('site_name', $seo['site_name']);
	$smarty->assign('site_title', $seo['site_title']);
	$smarty->assign('article_title', '');
	$smarty->assign('self_description', $seo['index_desc']);
	$smarty->assign('self_keywords', $seo['index_keywords']);
	$smarty->assign('meta_keywords', $seo['index_meta']);
	$smarty->assign('meta_desc', $seo['meta_desc']);
	$smarty->assign('author', $seo['author']);
	$smarty->assign('recent_post', Show_recent_post());
	$smarty->assign('recent_comments', Comment::recentComment());
	$smarty->assign('total_download', download_count());
	$smarty->assign('widget_books', Widgets::books());
	$smarty->assign('copyright_left', Widgets::copyrightLeft());
	$smarty->assign('social_contact', Widgets::social_contact());
	$smarty->assign('popularposts', Article::popularPost());
	$smarty->assign('news', Widgets::news());
	$smarty->assign('sidesCat', $sideCat);
	$smarty->assign('archive', Archive());
	$smarty->assign('clock', '<i class="fa fa-clock-o"></i>');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');	
	$smarty->display('category.tpl');	
	$smarty->display('footer.tpl');	
?>