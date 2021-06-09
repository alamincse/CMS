<?php 
/**
 * Template Name: About us
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	define( '_VALID', true );
	require_once ( dirname( __FILE__ ) .'/class.php' );
	require_once ( dirname( __FILE__ ) .'/class/widgets.class.php' );
	require_once ( dirname( __FILE__ ) .'/class/comment.class.php' );
	require_once ( dirname( __FILE__ ) .'/functions.php' );

	/** sidebar fn call */
	$recent_post = Show_recent_post();
	$recent_comments = comments();
	$smarty->assign('site_name', $seo['site_name']);
	$smarty->assign('site_title', $seo['site_title']);
	$smarty->assign('page_name', $seo['page_name']['about']);
	$smarty->assign('article_title', '');
	$smarty->assign('self_description', $seo['index_desc']);
	$smarty->assign('self_keywords', $seo['index_keywords']);
	$smarty->assign('meta_keywords', $seo['index_meta']);
	$smarty->assign('meta_desc', $seo['meta_desc']);
	$smarty->assign('author', $seo['author']);
	$smarty->assign('recent_post', $recent_post);
	$smarty->assign('recent_comments', $recent_comments);
	$smarty->assign( 'total_download', download_count() );
	$smarty->assign('recent_comments', Comment::recentComment());
	$smarty->assign('widget_books', Widgets::books());
	$smarty->assign('copyright_left', Widgets::copyrightLeft());
	$smarty->assign('about_me', Widgets::about_me());
	$smarty->assign('social_contact', Widgets::social_contact());
	$smarty->assign('news', Widgets::news());
	$smarty->assign('sidesCat', Article::categoriesAll());
	$smarty->assign('popularposts', Article::popularPost());
	$smarty->assign('archive', Archive());
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');	
	$smarty->display('about.tpl');	
	$smarty->display('footer.tpl');	
?>