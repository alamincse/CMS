<?php 
	define( '_VALID', true );
    require_once ( dirname( __FILE__ ) .'/class/widgets.class.php' ); 
    require_once ( dirname( __FILE__ ) .'/class/comment.class.php' ); 
    require_once ( dirname( __FILE__ ) .'/class.php' ); 
    require_once ( dirname( __FILE__ ) .'/functions.php' );
    // echo __DIR__;
    // echo dirname(__FILE__); __DIR__ OR dirname(__FILE__) are same method.

	$article = new Article();

	if( isset($_GET['article']) || isset($_GET['id']) ) : // or simply if(isset($_GET)){}
		if( isset($_GET['article']) ) :
		
			$post_title = $_GET['article'];

			if( isset($_GET['id']) ) 
				$post_id = $_GET['id'];
			else $post_id = '';
		elseif( isset($_GET['id']) ) :
			$post_id = $_GET['id'];
			$post_title = 'Oops! Page Not Found!';
		else :
			$post_title = 'Oops! It\'s wrong way.';
			$post_id = '';
		endif;

		$data = $article->single_data( $post_id, $post_title );
		$previous_post = $article->previous_post( $post_id );
		$next_post = $article->next_post( $post_id );
		$u_post_preview = $article->user_preview_post( $post_id );
		$ragint = $article->u_rate( $post_id, $post_title );

		/** autometic add 1 when single page load */
		$up_preview = $u_post_preview + 1;

		// /** url settings */
		// $url  = rawurlencode( 'cms/single.php' );
		// $url .= "?id=". $post_id;
		// $url .= "&article=". rawurlencode( $post_title ); 

		Comment::commentsCondition();
		$comments = Comment::getComments( $post_id );

		// printf("%.1f", $data['rating']);

		$smarty->assign( 'data', $data );
		$smarty->assign( 'previous_post', $previous_post );
		$smarty->assign( 'next_post', $next_post);
		$smarty->assign( 'recent_post', Show_recent_post() );
		$smarty->assign('recent_comments', Comment::recentComment());
		$smarty->assign( 'total_comments', total_comments($post_id) );
		$smarty->assign( 'comments', $comments );
		$smarty->assign( 'up_preview', $up_preview );
		$smarty->assign( 'total_download', download_count() );
		$smarty->assign( 'logins', do_login() );
		$smarty->assign( 'u_register', u_register() );
		$smarty->assign( 'options', array( 'select-item' => 'Select Country', 'bangladesh' => 'Bangladesh', 'others' => 'Others' ) );
		$smarty->assign( 'registers', register() );
		$smarty->assign( 'page_name', 'single page' );
		$smarty->assign( 'article_title', $post_title );
		$smarty->assign( 'site_name', $seo['site_name'] );
		$smarty->assign('site_title', $seo['site_title']);
		$smarty->assign( 'self_description', $seo['index_desc'] );
		$smarty->assign( 'self_keywords', $seo['index_keywords'] );
		$smarty->assign( 'meta_keywords', $seo['index_meta'] );
		$smarty->assign( 'meta_desc', $seo['meta_desc'] );
		$smarty->assign( 'author', $seo['author'] );
		$smarty->assign( 'u_login', u_login() );
		$smarty->assign( 'clock', '<i class="fa fa-clock-o"></i>');
		$smarty->assign( 'widget_books', Widgets::books());
		$smarty->assign( 'copyright_left', Widgets::copyrightLeft());
		$smarty->assign( 'social_contact', Widgets::social_contact());
		$smarty->assign( 'news', Widgets::news());
		$smarty->assign( 'cmt_edit', Comment::comments_edit());
		$smarty->assign( 'sidesCat', Article::categoriesAll());
		$smarty->assign( 'popularposts', Article::popularPost());
		$smarty->assign( 'archive', Archive());
		$smarty->assign( 'add_css', add_css() );
		$smarty->assign( 'add_js', add_js() );
		$smarty->display( 'header.tpl' );
		$smarty->display( 'single.tpl' );
		$smarty->display( 'footer.tpl' );
	else : require_once 'no-index.php'; endif;
?>