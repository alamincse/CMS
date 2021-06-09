<?php 
/**
 * Template: Forum
 * @param string < array() >
 * @return string < array() >
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	define( '_VALID', true );
	require_once ( dirname( __FILE__ ) .'/class/widgets.class.php' );
	require_once ( dirname( __FILE__ ) .'/class/forum.class.php' );
	require_once ( dirname( __FILE__ ) .'/class/comment.class.php' );
	require_once ( dirname( __FILE__ ) .'/class.php' );
	require_once ( dirname( __FILE__ ) .'/functions.php' );

	/** control forum login page and forum register page */
	if( isset($_GET['action']) == 'register' )
		$register = 'register';
	else
		$register = '';

	/** Store error or success msg from forum page register  */
	$register_complete = register();
	
	/** when logout then show msg */
	if( isset($_GET['logout']) && $_GET['logout'] == 'true' )
	$smarty->assign( 'logout', 'You have successfully logged out!' );

	if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) || (isset($_COOKIE['uname']) && isset($_COOKIE['u_id'])) ) :
		if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) )
		{
			$u_name = $_SESSION['uname'];
			$u_id = $_SESSION['u_id'];
		}
		elseif( isset($_COOKIE['uname']) && isset($_COOKIE['u_id']) )
		{
			$u_name = $_COOKIE['uname'];
			$u_id = $_COOKIE['u_id'];
		}
		
		$smarty->assign( 'u_name', $u_name );
		$smarty->assign( 'u_id', $u_id );
	
		$smarty->assign( 'user_info', Forum::user_info( $u_name ) );
		$smarty->assign( 'find_people', Forum::find_people() );

		/** people search option */
		if( isset($_GET['search']) )
			$smarty->assign( 'keyword', Forum::find_people( $_GET['search'] ) );
		else $smarty->assign( 'keyword', '' );
		
		/** ask question */
		
		Forum::ask_question( $u_id );

		/** show question */
		$smarty->assign( 'questions', Forum::show_questions() );
		$smarty->assign( 'show_time', Forum::show_time( $u_id ) );

		/** my profile */
		if( isset($_GET['action']) == 'myprofile' ) :
			$smarty->assign( 'profile', Forum::user_info( $u_name ) );
			$smarty->assign( 'join_date', Forum::join_date( $u_name ) );
		else : $smarty->assign( 'profile', '' ); endif;

		/** given ans by user */
		if( isset($_POST['q_id']) && isset($_POST['give-ans']) && isset($_POST['userId']) ) :
			$q_id = $_POST['q_id'];
			$ans = $_POST['give-ans'];
			$u_Id = $_POST['userId'];
			$smarty->assign( 'ans', Forum::given_ans( $q_id, $u_id, $ans ) );
		endif;

		/** Delete question by user */
		if( isset($_GET['question']) )
			Forum::detele_question( $_GET['question'] );

		/** Delete ans by user */	
		if( isset($_GET['answer']) )
			Forum::delete_answer( $_GET['answer'] );

		/** show other profile when user want */
		if( isset($_GET['uname']) )
			$smarty->assign( 'show_o_profile', Forum::show_other_user( $_GET['uname'] ) );
		else
			$smarty->assign( 'show_o_profile', '' );

		/** show answer */
		$smarty->assign( 'answer', Forum::show_ans() );
		$smarty->assign( 'sidebar_ans_show', Forum::sidebar_ans_show() );

	else : $smarty->assign('u_name', ''); endif;
	
	$smarty->assign( 'site_name', $seo['site_name'] );
	$smarty->assign( 'site_title', $seo['site_title'] );
	$smarty->assign( 'page_name', $seo['page_name']['forum'] );
	$smarty->assign( 'article_title', '' );
	$smarty->assign( 'self_description', $seo['index_desc'] );
	$smarty->assign( 'self_keywords', $seo['index_keywords'] );
	$smarty->assign( 'meta_keywords', $seo['index_meta'] );
	$smarty->assign( 'meta_desc', $seo['meta_desc'] );
	$smarty->assign( 'author', $seo['author'] );
	$smarty->assign( 'recent_post', Show_recent_post() );
	$smarty->assign( 'total_download', download_count() );
	$smarty->assign( 'options', array( 'select-item' => 'Select Country', 'bangladesh' => 'Bangladesh', 'others' => 'Others' ) );
	$smarty->assign('recent_comments', Comment::recentComment());
	$smarty->assign( 'widget_books', Widgets::books());
	$smarty->assign( 'copyright_left', Widgets::copyrightLeft() );
	$smarty->assign( 'social_contact', Widgets::social_contact() );
	$smarty->assign( 'news', Widgets::news() );
	$smarty->assign( 'register', $register );
	$smarty->assign( 'login', Forum::member_login() );
	$smarty->assign( 'register_complete', $register_complete );
	$smarty->assign( 'rand', rand() );
	$smarty->assign('sidesCat', Article::categoriesAll());
	$smarty->assign('popularposts', Article::popularPost());
	$smarty->assign('archive', Archive());
	$smarty->assign( 'add_css', add_css() );
	$smarty->assign( 'add_js', add_js() );
	$smarty->display( 'header.tpl' );	
	$smarty->display( 'forum.tpl' );	
	$smarty->display( 'footer.tpl' );	
?>