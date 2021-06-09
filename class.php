<?php 
/**
 * Class Name : Article
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	defined( '_VALID' ) or die( 'Restricted Access!' );
	require_once ( dirname( __FILE__ ) .'/include/config.db.php' );

	class Article
	{
		/**
		 *	CMS
		 *	 Admin section..............
		 */
		public function admin_add_menu($menu_title, $menu_content)
		{
			global $cont;
			$stmt = $cont->prepare("INSERT INTO menu VALUES('', :menu_title, :menu_content)");
			$stmt->bindParam('menu_title', $menu_title, PDO::PARAM_STR);
			$stmt->bindParam('menu_content', $menu_content, PDO::PARAM_STR);
			$stmt->execute();
		}

		public function admin_show_menu()
		{
			global $cont;
			$result = $cont->prepare("SELECT * FROM menu");
			$result->execute();
			return $result->fetchAll();
		}


		public function admin_edit_menu()
		{
			global $cont;
			if (isset($_GET['id'])) 
			{
				$id   = (int)$_GET['id'];
				$stmt = $cont->prepare('SELECT * FROM menu WHERE menu_id = :id');
				$stmt->bindParam('id', $id, PDO::PARAM_INT);
				$stmt->execute();
				return $stmt->fetch();
			}
		}

		public function admin_update_menu($id, $menu_title, $menu_content)
		{
			global $cont;
			$stmt = $cont->prepare("UPDATE menu SET menu_title = :menu_title, menu_content = :menu_content WHERE menu_id = :id");
			$stmt->bindParam('menu_title', $menu_title, PDO::PARAM_STR);
			$stmt->bindParam('menu_content', $menu_content, PDO::PARAM_STR);
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->execute();
		}


		public function admin_add_post( $admin_id, $admin_username, $post_title, $post_content )
		{
			global $cont;
			$stmt = $cont->prepare("INSERT INTO admin_post( admin_id, admin_username, post_title, post_content, post_date ) VALUES ( :admin_id, :admin_username, :post_title, :post_content, NOW()) ");
			$stmt->bindParam('admin_id', $admin_id, PDO::PARAM_INT);
			$stmt->bindParam('admin_username', $admin_username, PDO::PARAM_STR);
			$stmt->bindParam('post_title', $post_title, PDO::PARAM_STR);
			$stmt->bindParam('post_content', $post_content, PDO::PARAM_STR);
			$stmt->execute();
			return $cont->lastInsertId();
		}

		public function admin_show_post()
		{
			global $cont;
			$stmt = $cont->prepare("SELECT * FROM admin_post ORDER BY post_id DESC");
			$stmt->execute();
			echo '<div class="containet content">';
				echo '<div class="row">';
					echo '<div class="span12">';
						echo '<p class="span3 offset11"> <a href="#">Total Post Published : </a>' . $stmt->rowCount() .'</p>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
			return $stmt->fetchAll();
		}

		public function admin_edit_post()
		{
			global $cont;
			
			if (isset($_GET['id'])) 
			{
				$id   = (int)$_GET['id'];
				$stmt = $cont->prepare('SELECT * FROM admin_post WHERE post_id = :id');
				$stmt->bindParam('id', $id, PDO::PARAM_INT);
				$stmt->execute();
				return $stmt->fetch();
			}
		}

		public function admin_update_post($id, $post_title, $post_content)
		{
			global $cont;
			$stmt = $cont->prepare("UPDATE admin_post SET post_title = :post_title, post_content = :post_content, post_date = NOW() WHERE post_id = :id");
			$stmt->bindParam('post_title', $post_title, PDO::PARAM_STR);
			$stmt->bindParam('post_content', $post_content, PDO::PARAM_STR);
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->execute();
		}


		public function author_post_add()
		{
			global $cont;
			$stmt = $cont->prepare("SELECT * FROM cms_admin");
			$stmt->execute();
			return $stmt->fetch();
		}

		public function admin_user()
		{
			global $cont;
			$stmt = $cont->prepare("SELECT * FROM  cms_admin");
			$stmt->execute();
			echo '<div class="containet content">';
				echo '<div class="row">';
					echo '<div class="span12">';
						echo '<p class="span3 offset11"> <a href="#">Total Register User : </a>' . $stmt->rowCount() .'</p>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
			return $stmt->fetchAll();	
		}


		/**
		 * Fetching data with comments count
		 * @return : string<array()>  
		 */
		public function fetch_data( $per_page, $offset )
		{
			global $cont;

			$stmt = $cont->prepare( 
				"SELECT admin_post.post_id, admin_post.admin_id, admin_post.admin_username,
				admin_post.post_title,admin_post.post_content, admin_post.image_name, admin_post.post_view_count,
				admin_post.post_cat, admin_post.post_date, admin_post.total_rating, 
				count(comments.comments_count) as 'comments_count' FROM admin_post 
				LEFT OUTER JOIN comments ON admin_post.post_id = comments.post_id 
				GROUP BY admin_post.post_id DESC LIMIT $per_page OFFSET $offset" 
			);
			
			$stmt->execute();

			return $stmt->fetchAll();
		}

		
		/**
		 * Return total items for pagination
		 */
		public function total_items()
		{
			global $cont;
			$stmt = $cont->prepare( "SELECT * FROM admin_post" );
			$stmt->execute();
			return $stmt->rowCount();
		}


		public function single_data( $post_id, $post_title )
		{
			global $cont;
			$stmt = $cont->prepare( "SELECT * FROM admin_post WHERE post_id = $post_id" );
			$stmt->bindValue( 1, $post_id );
			// $stmt->bindValue(1, $post_title);
			$stmt->execute();
			
			return $stmt->fetch();
		}



		/**
		 * Get previous post
		 * @author : AL-AMIN 
		 * @param  : string [smaple post_id 4<5 ]
		 */
		public function previous_post( $post_id )
		{
			global $cont;
			$stmt = $cont->prepare( "SELECT * FROM admin_post WHERE post_id < $post_id " );
			$stmt->bindParam( 1, $post_id );
			if( $stmt->execute() && $stmt->rowCount() <> 0 )
			{
				while( $row = $stmt->fetch() )
				{
					$post_id = $row['post_id'];
					$post_title = $row['post_title'];
				}				

				return '<a href="single.php?id='.$post_id.'&amp;article='.$post_title.'"><i class="fa fa-arrow-left"></i> '.$post_title.'</a>';
			}

			return false;
		}


		/**
		 * Get Next post
		 * @author : AL-AMIN 
		 * @param  : string [smaple post_id 6>5 ]
		 */
		public function next_post( $post_id )
		{
			global $cont;
			$stmt = $cont->prepare( "SELECT * FROM admin_post WHERE post_id > $post_id " );
			$stmt->bindParam( 1, $post_id );
			if( $stmt->execute() )
			{
				while( $row = $stmt->fetch() )
				{
					$post_id = $row['post_id'];
					$post_title = $row['post_title'];
					return '<a href="single.php?id=' .$post_id .'&amp;article=' .$post_title .'">' .$post_title .' <i class="fa fa-arrow-right"></i></a>';
				}
			}

			return false;
		}



		/**
		 * Single page post preview
		 * @authro : AL-AMIN	
		 * @access public
		 */
		public function user_preview_post( $post_id )
		{
			global $cont;
			
			$initial_count = 1;
			$stmt = $cont->prepare( "SELECT * FROM admin_post WHERE post_id = :post_id" );
			$stmt->bindParam( 'post_id', $post_id, PDO::PARAM_INT );
			if( $stmt->execute() )
			{
				while( $row = $stmt->fetch() )
				{
					/** initial store 0 in DB and nex stap store 1, 2, 3,...n */
					$post_count = $row['post_view_count'];
				}
			}

			/**
			 * when call on-index.php page
			 * @return $count = 0 and $post_count = 0; otherwise return post from BD.
			 */
			if( isset($post_count) )
				$count = $post_count + $initial_count;	
			else
			{
				$count = 0; 
				$post_count = 0; 
			}

			$stmt = $cont->prepare( "UPDATE admin_post SET post_view_count = $count WHERE post_id = :post_id" );
			$stmt->bindParam( 'post_id', $post_id, PDO::PARAM_INT );
			$stmt->execute();

			/** initial check */
			if( $post_count == 0 )
			{
				return $initial_count;
			}
			else
			{
				return $post_count;
			}
		}


		/**
		 * Rating count by user
		 * @author : AL-AMIN
		 * @access public
		 */
		public function u_rate( $id, $article )
		{
			global $cont;

			if( isset($_GET['id']) && isset($_GET['rating']) )
			{
				$id = $_GET['id'];
				$rate = $_GET['rating'];

				if( !empty($id) && !empty($rate) && ( $rate >= 1 && $rate <= 5 ) )
				{
					$stmt = $cont->prepare( "UPDATE admin_post SET total_rating = total_rating + $rate, rating_count = rating_count + 1, rating = total_rating/rating_count WHERE post_id = $id" );
					$stmt->bindParam( 'rate', $rate, PDO::PARAM_INT );
					$stmt->bindParam( 'id', $id, PDO::PARAM_INT );
					$stmt->execute();
					header( 'location:single.php?id=' .$id .'&article=' .$article );
				}
			}
			
			return false;
		}


		/**
		 * Online visitor count by session
		 * @access public 
		 * @author : AL-AMIN
		 */
		public function OnlineVisitor()
		{
			/** when user load the website then autometic store session into the web server */
			$session_path = session_save_path();
			$handle = opendir( $session_path );
			
			/** default visitor 0 */
			$visitor = 0;

			/** remove single dot (.) and double dot (..) from the server */
			while( ($file = readdir( $handle )) <> FALSE )
			{
				if( $file <> "." && $file <> ".." )
				{
					if( ereg("^sess", $file) )
					{
						$visitor++;
					}
				}
			}
			
			return $visitor;
		}
		

		/**
		 * show category
		 * @return string<array()>
		 * @access public 
		 */
		public function show_single_cat( $cat )
		{
			global $cont;
			
			$stmt = $cont->prepare( 
				"SELECT admin_post.post_id, admin_post.admin_id, admin_post.admin_username,
				admin_post.post_title,admin_post.post_content, admin_post.image_name, 
				admin_post.post_view_count, admin_post.post_cat, admin_post.post_date,
				admin_post.total_rating, count(comments.comments_count) as 'comments_count' 
				FROM admin_post LEFT OUTER JOIN comments ON admin_post.post_id = comments.post_id 
				GROUP BY admin_post.post_id HAVING post_cat =:cat 
				ORDER BY admin_post.post_id DESC"
			);

			$stmt->bindParam('cat', $cat, PDO::PARAM_STR);
			$stmt->execute();
			
			return $stmt->fetchAll();
		}

		/**
		 * show all categories
		 * @return string<array()>
		 */
		public static function categoriesAll()
		{
			global $cont; 

			$stmt = $cont->prepare(
				"SELECT category.cat_id, category.cat_name, count(admin_post.post_cat) as 'post_cat' 
				FROM category LEFT OUTER JOIN admin_post ON category.cat_name = admin_post.post_cat 
				GROUP BY admin_post.post_cat HAVING count(admin_post.post_cat) >= 0 ORDER BY category.cat_name" 
			);

			$stmt->execute();
			return $cats = $stmt->fetchAll();
			// $cats = array('1', '2', '3');
			// $commalist = implode( ', ', $cats );
			// return $commalist;
		}

		public static function popularPost()
		{
			global $cont;
			$stmt = $cont->prepare( "SELECT * FROM admin_post  ORDER BY post_view_count DESC LIMIT 8" );
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>