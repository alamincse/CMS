<?php 
/**
 * Class Name : Comment
 * @author    : AL-AMIN
 * @package   : hitCoder
 */
	require_once ( dirname(dirname( __FILE__ ) ) .'/include/config.php' );

	class Comment
	{
		private static $_connection;

		/**
		 * check DB connection
		 * @return string with DB
		 */
		public static function conn()
		{
			global $cont;

			if( isset($cont) )
			{
				return self::$_connection = $cont;
			}
			
			trigger_error( 'Failed to database connection' .mysql_error(), E_USER_ERROR );
			
			return self::$_connection;
		}	


		/**
		 * Store comments by user
		 * @param string <array()>
		 * @return true
		 */
		public static function StoreComment( $replytocom_id, $replytocom_sub_id, $replytocom_sub_last_id, $post_id, $u_id, $comments_count, $u_name, $comments )
		{
			if( !empty($comments) )
			{
				$stmt = self::conn()->prepare( "INSERT INTO comments VALUES( '', '$replytocom_id', '$replytocom_sub_id', '$replytocom_sub_last_id', '$post_id', '$u_id', '$comments_count', NOW(), '$u_name', '$comments' )" );
				$stmt->bindParam('replytocom_id', $replytocom_id, PDO::PARAM_INT);
				$stmt->bindParam('replytocom_sub_id', $replytocom_sub_id, PDO::PARAM_INT);
				$stmt->bindParam('replytocom_sub_last_id', $replytocom_sub_last_id, PDO::PARAM_INT);
				$stmt->bindParam('post_id', $post_id, PDO::PARAM_INT);
				$stmt->bindParam('u_id', $u_id, PDO::PARAM_INT);
				$stmt->bindParam('comments_count', $comments_count, PDO::PARAM_INT);
				$stmt->bindParam('u_name', $u_name, PDO::PARAM_STR);
				$stmt->bindParam('comments', $comments, PDO::PARAM_STR);
				$stmt->execute();
			}
		}


		/**
		 * show comments from 'comments' table
		 * @param Threat comment
		 * @return string<array()>
		 */
		public static function getComments( $post_id )
		{
			global $config;

			$stmt = self::conn()->prepare( "SELECT * FROM comments, subscribers WHERE ( comments.post_id = $post_id) AND (comments.userId = subscribers.userId) AND (comments.comments_sub_id = 0) ORDER BY comments.comments_id DESC" );
		
			$test = array();

			if( $stmt->execute() )
			{
				while( $row = $stmt->fetch() )
				{
					/** when comments are deleted */
					self::comments_delete();

					/** when comments are update or edit */
					self::comments_update();

					/** when you will print the column, you just call column array[if you want to print comments_id column, you just call array[0], simillary array[1], array[2]...] */
					$test[]  = '<ul class="comments-holder-ul">';
					$test[] .= '<li class="comment-holder" id="_' .$row['comments_id'] .'">';
					$test[] .= '<div class="user-img"><img src="' .$config['BASE_URL'] .'/subscribers/' .$row['userId'] .'/' .$row['profile_img'] .'" class="user-img-pic"></div>';

					$test[] .= '<div class="comment-body">';
					$test[] .= '<h3 class="username-field">';
					$test[] .= $row['comments_name'];

					$date = strtotime( $row['comments_date'] );
					$time = strftime( "%B %d, %Y at %I:%M %p", $date );
							
					$test[] .= '<span class="cmt-time"><i>On ' .$time .'</i></span>';
					
					if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) || (isset($_COOKIE['uname']) && isset($_COOKIE['u_id'])) ) :
						if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) )
						{
							$u_id = $_SESSION['u_id'];
						}
						elseif( isset($_COOKIE['uname']) && isset($_COOKIE['u_id']) )
						{
							$u_id = $_COOKIE['u_id'];
						}
						
						if( $u_id == $row['userId'] )
							$test[] .= ' <span class="cmt-edit" id="' .$row['comments_id'] .'">&nbsp;|&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_edit=' .$row['comments_id'] .'#respond"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&raquo;&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_delete=' .$row['comments_id'] .'#respond">&nbsp;<span class="btn-delete"><i class="fa fa-close"></i></span></a></span>';
						
						if( $u_id )
							$test[] .= '<span class="cmt-reply" id="' .$row['comments_id'] .'"><a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&replytocom=' .$row['comments_id'] .'#respond">Reply</a></span>';
					endif;

					$test[] .= '</h3><!-- .username-field  -->';
					$test[] .= '<div class="comment-text">';
					$test[] .= $row['comments_content'];
					$test[] .= '</div><!-- .comment-text  -->';
					$test[] .= '</div><!-- .comment-body  -->';

					$sub_id = $row['comments_id'];


					/** 1st threat */
					$new_stmt = self::conn()->prepare( "SELECT * FROM comments, subscribers WHERE (comments.comments_sub_id = $sub_id) AND(comments.comments_sub_new_id = 0) AND (comments.userId = subscribers.userId)" );

					if( $new_stmt->execute() )
					{
						while( $new_row = $new_stmt->fetch() )
						{
							$test[] .= '<ul style="margin-left:70px;">';
							$test[] .= '<li class="comment-holder" id="_' .$new_row['comments_id'] .'">';
							$test[] .= '<div class="user-img"><img src="' .$config['BASE_URL'] .'/subscribers/' .$new_row['userId'] .'/' .$new_row['profile_img'] .'" class="user-img-pic"></div>';
							$test[] .= '<div class="comment-body">';
							$test[] .= '<h3 class="username-field">';
							$test[] .= $new_row['comments_name'];
							$test[] .= '<span class="cmt-time"><i>On ' .$time .'</i></span>';
							
							$date = strtotime( $new_row['comments_date'] );
							$time = strftime( "%B %d, %Y at %I:%M %p", $date );
							
							if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) || (isset($_COOKIE['uname']) && isset($_COOKIE['u_id'])) ) :
								if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) )
								{
									$u_id = $_SESSION['u_id'];
								}
								elseif( isset($_COOKIE['uname']) && isset($_COOKIE['u_id']) )
								{
									$u_id = $_COOKIE['u_id'];
								}

								if( $u_id == $new_row['userId'] )
									$test[] .= ' <span class="cmt-edit" id="' .$new_row['comments_id'] .'">&nbsp;|&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_edit=' .$new_row['comments_id'] .'#respond"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&raquo;&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_delete=' .$new_row['comments_id'] .'#respond">&nbsp;<span class="btn-delete"><i class="fa fa-close"></i></span></a></span>';
								
								if( $u_id )
									$test[] .= '<span class="cmt-reply" id="' .$new_row['comments_id'] .'"><a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&replytocoms=' .$new_row['comments_id'] .'#respond">Reply</a></span>';
							endif;

							$test[] .= '</h3><!-- .username-field  -->';
							$test[] .= '<div class="comment-text">';
							$test[] .= $new_row['comments_content'];
							$test[] .= '</div><!-- .comment-text  -->';
							$test[] .= '</div><!-- .comment-body  -->';

							$last_sub_id = $new_row['comments_id'];

							/** 2nd threat */
							$last_stmt = self::conn()->prepare( "SELECT * FROM comments, subscribers WHERE (comments.comments_sub_new_id = $last_sub_id) AND(comments.comments_sub_new_id <> 0) AND (comments.userId = subscribers.userId)" );

							if( $last_stmt->execute() )
							{
								while( $last_row = $last_stmt->fetch() )
								{
									$test[] .= '<ul style="margin-left:70px;">';
									$test[] .= '<li class="comment-holder" id="_' .$last_row['comments_id'] .'">';
									$test[] .= '<div class="user-img"><img src="' .$config['BASE_URL'] .'/subscribers/' .$last_row['userId'] .'/' .$last_row['profile_img'] .'" class="user-img-pic"></div>';
									$test[] .= '<div class="comment-body">';
									$test[] .= '<h3 class="username-field">';
									$test[] .= $last_row['comments_name'];

									$date = strtotime( $last_row['comments_date'] );
									$time = strftime( "%B %d, %Y at %I:%M %p", $date );
							
									$test[] .= '<span class="cmt-time"><i>On ' .$time .'</i></span>';
									
									if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) || (isset($_COOKIE['uname']) && isset($_COOKIE['u_id'])) ) :
										if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) )
										{
											$u_id = $_SESSION['u_id'];
										}
										elseif( isset($_COOKIE['uname']) && isset($_COOKIE['u_id']) )
										{
											$u_id = $_COOKIE['u_id'];
										}

										if( $u_id == $last_row['userId'] )
											$test[] .= ' <span class="cmt-edit" id="' .$last_row['comments_id'] .'">&nbsp;|&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_edit=' .$last_row['comments_id'] .'#respond"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&raquo;&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_delete=' .$last_row['comments_id'] .'#respond">&nbsp;<span class="btn-delete"><i class="fa fa-close"></i></span></a></span>';
										if( $u_id )
											$test[] .= '<span class="cmt-reply" id="' .$last_row['comments_id'] .'"><a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&replytoscom=' .$last_row['comments_id'] .'#respond">Reply</a></span>';
									endif;

									$test[] .= '</h3><!-- .username-field  -->';
									$test[] .= '<div class="comment-text">';
									$test[] .= $last_row['comments_content'];
									$test[] .= '</div><!-- .comment-text  -->';
									$test[] .= '</div><!-- .comment-body  -->';
									

									$last_cmt_id = $last_row['comments_id'];

									/** 3rd comment */
									$lasts_stmt = self::conn()->prepare( "SELECT * FROM comments, subscribers WHERE (comments.comments_sub_last_id = $last_cmt_id)  AND (comments.userId = subscribers.userId)" );

									if( $lasts_stmt->execute() )
									{
										while( $lasts_row = $lasts_stmt->fetch() )
										{
											$test[] .= '<ul style="margin-left:70px;">';
											$test[] .= '<li class="comment-holder" id="_' .$lasts_row['comments_id'] .'">';
											$test[] .= '<div class="user-img"><img src="' .$config['BASE_URL'] .'/subscribers/' .$lasts_row['userId'] .'/' .$lasts_row['profile_img'] .'" class="user-img-pic"></div>';
											$test[] .= '<div class="comment-body">';
											$test[] .= '<h3 class="username-field">';
											$test[] .= $lasts_row['comments_name'];

											$date = strtotime( $lasts_row['comments_date'] );
											$time = strftime( "%B %d, %Y at %I:%M %p", $date );
							
											$test[] .= '<span class="cmt-time"><i>On ' .$time .'</i></span>';
											
											if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) || (isset($_COOKIE['uname']) && isset($_COOKIE['u_id'])) ) :
												if( isset($_SESSION['uname']) && isset($_SESSION['u_id']) )
												{
													$u_id = $_SESSION['u_id'];
												}
												elseif( isset($_COOKIE['uname']) && isset($_COOKIE['u_id']) )
												{
													$u_id = $_COOKIE['u_id'];
												}

												if( $u_id == $lasts_row['userId'] )
													$test[] .= ' <span class="cmt-edit" id="' .$lasts_row['comments_id'] .'">&nbsp;|&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_edit=' .$lasts_row['comments_id'] .'#respond"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&raquo;&nbsp;<a href="' .$config['BASE_URL'] .'/single.php?id=' .$_GET['id'] .'&amp;article=' .$_GET['article'] .'&amp;comments_delete=' .$lasts_row['comments_id'] .'#respond">&nbsp;<span class="btn-delete"><i class="fa fa-close"></i></span></a></span>';
												endif;

											$test[] .= '</h3><!-- .username-field  -->';
											$test[] .= '<div class="comment-text">';
											$test[] .= $lasts_row['comments_content'];
											$test[] .= '</div><!-- .comment-text  -->';
											$test[] .= '</div><!-- .comment-body  -->';
											$test[] .= '</li></ul>';
										}
									}

									$test[] .= '</li></ul>';
								}
							}

							$test[] .= '</li></ul>';
						}
					}

					$test[] .= '</li></ul>';
				}
			}

			return $test;
		}


		/**
		 * Description : Comments delete by user
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 */
		public static function comments_delete()
		{
			if( isset($_GET['id']) && isset($_GET['comments_delete']) )
			{
				$id = $_GET['id'];

				$cmt_id = $_GET['comments_delete'];

				$stmt = self::conn()->prepare( "DELETE FROM comments WHERE (comments.post_id = $id) AND (comments.comments_id = $cmt_id) " );
				
				if( $stmt->execute() )
					return header( 'location:single.php?id=' .$_GET['id'] .'&article=' .$_GET['article'] );
				else
					return false;
			}
		}


		/**
		 * Description : Comments Edit by user
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 */
		public static function comments_edit()
		{
			if( isset($_GET['id']) && isset($_GET['comments_edit']) )
			{
				$id = $_GET['id'];

				$cmt_id = $_GET['comments_edit'];

				$stmt = self::conn()->prepare( "SELECT * FROM comments WHERE comments.comments_id = $cmt_id " );
				
				if( $stmt->execute() )
				{
					while( $row = $stmt->fetch() )
					{
						return $row['comments_content'];
					}
				}
			}
			else
			{
				return false;
			}
		}


		/**
		 * Description : Update Comments by user
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 */
		public static function comments_update()
		{
			if( isset($_POST['cmt_update']) )
			{
				$comments_content = $_POST['cmt_content'];
				$cmt_id = $_GET['comments_edit'];

				$stmt = self::conn()->prepare( "UPDATE comments SET comments_date = NOW(), comments_content = :comments_content WHERE comments_id = :cmt_id" );
				$stmt->bindParam('comments_content', $comments_content, PDO::PARAM_STR);
				$stmt->bindParam('cmt_id', $cmt_id, PDO::PARAM_INT);
			
				if( $stmt->execute() )
					return true;
				else
					return false;
			}
			else
			{
				return false;
			}
		}


		/**
		 * Description : UserName, UserId and Comments condition tester.
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 * @return     : boolean(true or false)
		 */
		public static function commentsCondition()
		{
			global $smarty;

			/** If user login then see comment box or see reply area */
			if( (isset($_SESSION['uname']) && isset($_SESSION['u_id'])) || (isset($_COOKIE['uname']) && isset($_COOKIE['u_id'])) ) :
			
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

				/** show comments */
				if( isset($_POST['cmt_submit']) )
				{
					// echo 'ok';
					$u_name = $u_name;
					$u_id = $u_id;
					$comments = $_POST['cmt_content'];
					$post_id = $_GET['id'];
					$comments_count = 1;

					/** only store when allow threat comment */
					if( isset($_GET['replytocom']) )
					{
						$replytocom_id = $_GET['replytocom'];
						$replytocom_sub_id = 0;
						$replytocom_sub_last_id = 0;
					}
					elseif( isset($_GET['replytocoms']) )
					{
						$replytocom_sub_id = $_GET['replytocoms'];
						$replytocom_id = 1;
						$replytocom_sub_last_id = 0;
					}
					elseif( isset($_GET['replytoscom']) )
					{
						$replytocom_sub_last_id = $_GET['replytoscom'];
						$replytocom_id = 1;
						$replytocom_sub_id = 1;
					}
					else
					{
						$replytocom_id = 0;
						$replytocom_sub_id = 0;
						$replytocom_sub_last_id = 0;
					}

					if( empty($comments) )
					{
						$smarty->assign( 'msg', 'Oops! You cann\'t type your comment.' );
					}
					else
					{
						self::StoreComment( $replytocom_id, $replytocom_sub_id, $replytocom_sub_last_id, $post_id, $u_id, $comments_count, $u_name, $comments );
					}

				}

				$smarty->assign( 'u_id', $u_id );
				$smarty->assign( 'u_name', $u_name );
			else :
				/** If don't login, then you can see only comments content not others option */
				$smarty->assign( 'u_id', '' );
				$smarty->assign( 'u_name', '' );
			endif;

			return true;
		}


		/**
		 * Description : Total Comments
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 */
		// public static function TotalComments()
		// {
		// 	$stmt = self::conn()->prepare( 
		// 		"SELECT admin_post.post_id, count(*) as 'comments_count' FROM admin_post JOIN
		// 		comments ON admin_post.post_id = comments.post_id GROUP BY admin_post.post_id" 
		// 	);
			
		// 	$stmt->execute();

		// 	return $stmt->fetchAll();
		// }


		/**
		 * Description : Recent comment
		 * @param      : string<array()>
		 * @return     : array()
		 * @package    : hitCoder
		 */
		public static function recentComment()
		{
			$stmt = self::conn()->prepare( 
				"SELECT MAX(comments.comments_id), comments.post_id, comments.comments_name, 
				comments.comments_date, admin_post.post_title FROM comments 
				INNER JOIN admin_post WHERE admin_post.post_id = comments.post_id 
				GROUP BY comments.comments_date HAVING count(comments.post_id) >= 1 
				ORDER BY MAX(comments.comments_date) DESC LIMIT 7"
			);
			
			$stmt->execute();

			return $stmt->fetchAll();		
		}
	}
?>