<?php 
/**
 * Description: Home page
 * @param string < array() >
 * @return string < array() >
 * @author  : AL-AMIN
 * @package : hitCoder 
 */
	define( '_VALID', true );
	require_once ( dirname( __FILE__ ) .'/class/pagination.class.php' );
	require_once ( dirname( __FILE__ ) .'/class/widgets.class.php' );
	require_once ( dirname( __FILE__ ) .'/class/url.class.php' );
	require_once ( dirname( __FILE__ ) .'/class/comment.class.php' );
	require_once ( dirname( __FILE__ ) .'/class.php' );
	require_once ( dirname( __FILE__ ) .'/functions.php' );
	
	Url::checkUrl();

	$page = !empty( $_GET['page'] ) ? (int)$_GET['page'] : 1;
	$per_page = 20;
	$count_items = new Article();
	$total_count = $count_items->total_items();
	$pagination = new Pagination( $page, $per_page, $total_count );
	$offset = $pagination->offset();
	$article = new Article();
	$articles = $article->fetch_data( $per_page, $offset );

	$smarty->assign('site_name', $seo['site_name']);
	$smarty->assign('site_title', $seo['site_title']);
	$smarty->assign('page_name', $seo['page_name']['home']);
	$smarty->assign('article_title', '');
	$smarty->assign('self_description', $seo['index_desc']);
	$smarty->assign('self_keywords', $seo['index_keywords']);
	$smarty->assign('meta_keywords', $seo['index_meta']);
	$smarty->assign('meta_desc', $seo['meta_desc']);
	$smarty->assign('author', $seo['author']);
	$smarty->assign('articles', $articles);
	$smarty->assign('recent_post', Show_recent_post());
	$smarty->assign('recent_comments', Comment::recentComment());
	$smarty->assign('total_download', download_count());
	$smarty->assign('page', $page);
	$smarty->assign('total_pages', $pagination->total_pages());
	$smarty->assign('has_pre_page', $pagination->has_previous_page());
	$smarty->assign('has_next_page', $pagination->has_next_page());
	$smarty->assign('next_page', $pagination->next_page());
	$smarty->assign('previous_page', $pagination->previous_page());
	$smarty->assign('widget_books', Widgets::books());
	$smarty->assign('copyright_left', Widgets::copyrightLeft());
	$smarty->assign('social_contact', Widgets::social_contact());
	$smarty->assign('news', Widgets::news());
	$smarty->assign('sidesCat', Article::categoriesAll());
	$smarty->assign('popularposts', Article::popularPost());
	$smarty->assign('archive', Archive());
	$smarty->assign('clock', '<i class="fa fa-clock-o"></i>');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');	
	$smarty->display('index.tpl');	
	$smarty->display('footer.tpl');	
?>