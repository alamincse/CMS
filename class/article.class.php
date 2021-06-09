<?php 
/**
 * Class Name : Article
 * @author    : AL-AMIN
 * @package   : hitCoder
 * @access  private
 */
	defined( '_ADMIN' ) or die( 'Restricted Access!' );
	require_once ( dirname(dirname(__FILE__ )) .'/include/config.php' );

	class Article
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

		public function admin_add_menu($menu_title, $menu_content)
		{
			$stmt = self::conn()->prepare("INSERT INTO menu VALUES('', :menu_title, :menu_content)");
			$stmt->bindParam('menu_title', $menu_title, PDO::PARAM_STR);
			$stmt->bindParam('menu_content', $menu_content, PDO::PARAM_STR);
			$stmt->execute();
		}

		public function admin_show_menu()
		{
			$result = self::conn()->prepare("SELECT * FROM menu");
			$result->execute();
			return $result->fetchAll();
		}


		public function admin_edit_menu()
		{
			if (isset($_GET['id'])) 
			{
				$id   = (int)$_GET['id'];
				$stmt = self::conn()->prepare('SELECT * FROM menu WHERE menu_id = :id');
				$stmt->bindParam('id', $id, PDO::PARAM_INT);
				$stmt->execute();
				return $stmt->fetch();
			}
		}

		public function admin_update_menu($id, $menu_title, $menu_content)
		{
			$stmt = self::conn()->prepare("UPDATE menu SET menu_title = :menu_title, menu_content = :menu_content WHERE menu_id = :id");
			$stmt->bindParam('menu_title', $menu_title, PDO::PARAM_STR);
			$stmt->bindParam('menu_content', $menu_content, PDO::PARAM_STR);
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->execute();
		}


		public function admin_add_post( $admin_id, $admin_username, $post_title, $post_content, $post_cat, $image_name, $image_tmp )
		{
			$stmt = self::conn()->prepare("INSERT INTO admin_post( admin_id, admin_username, post_title, post_content, image_name, post_cat, post_date ) VALUES ( :admin_id, :admin_username, :post_title, :post_content, :image_name, :post_cat, NOW()) ");
			$stmt->bindParam('admin_id', $admin_id, PDO::PARAM_INT);
			$stmt->bindParam('admin_username', $admin_username, PDO::PARAM_STR);
			$stmt->bindParam('post_title', $post_title, PDO::PARAM_STR);
			$stmt->bindParam('post_content', $post_content, PDO::PARAM_STR);
			$stmt->bindParam('post_cat', $post_cat, PDO::PARAM_STR);
			$stmt->bindParam('image_name', $image_name, PDO::PARAM_STR);
			$stmt->execute();


			/** create derectory folder inside uploads folder. */	
			if( !is_dir( '../articles_img/uploads/' .self::article_last_id()) )
			{
				mkdir( '../articles_img/uploads/' .self::article_last_id(), 0744 );	
				move_uploaded_file( $image_tmp, '../articles_img/uploads/' .self::article_last_id() .'/' .$image_name );
			}

			return self::article_last_id();
		}


		/**
		 * @return last id for new post article
		 * @param int()
		 */
		public static function article_last_id()
		{
			
			$stmt = self::conn()->prepare( "SELECT * FROM admin_post" );
			
			$stmt->execute();

			while( $row = $stmt->fetch() )
			{
				$last_id = $row['post_id'];
			}	
			
			/** where search any widgets found, then return widgets last id from DB widget_area. otherwise default 1 */		
			if( isset($last_id) )
				return $last_id;
			else
				return 1;
		}



		/** show total post */
		public function total_post()
		{
			$stmt = self::conn()->prepare("SELECT * FROM admin_post");
			$stmt->execute();
			return $stmt->rowCount();
		}


		/** show all post */
		public function show_all_post()
		{
			$stmt = self::conn()->prepare('SELECT * FROM admin_post ORDER BY post_id DESC');
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function admin_edit_post()
		{			
			if (isset($_GET['id'])) 
			{
				$id   = (int)$_GET['id'];
				$stmt = self::conn()->prepare('SELECT * FROM admin_post WHERE post_id = :id');
				$stmt->bindParam('id', $id, PDO::PARAM_INT);
				$stmt->execute();
				return $stmt->fetch();
			}
		}


		/**
		 * Post Update by site admin
		 * @author     : AL-AMIN
		 * @package    : hitCoder
		 */
		public function AdminPostUpdate( $id, $post_title, $post_content, $image_name, $post_cat, $image_tmp )
		{
			$uStmt = self::conn()->prepare( "SELECT image_name FROM admin_post WHERE post_id = :id" );
			
			$uStmt->bindParam('id', $id, PDO::PARAM_INT);
			
			if( $uStmt->execute() )
			{
				while( $row = $uStmt->fetch() )
				{
					$image = $row['image_name'];
					
					/** Delete previous image name from uploads folder */
					unlink( '../articles_img/uploads/' .$id .'/' .$image );
				}
			}

			$stmt = self::conn()->prepare("UPDATE admin_post SET post_title = :post_title, post_content = :post_content, image_name = :image_name, post_cat = :post_cat, post_date = NOW() WHERE post_id = :id");
			$stmt->bindParam('post_title', $post_title, PDO::PARAM_STR);
			$stmt->bindParam('post_content', $post_content, PDO::PARAM_STR);
			$stmt->bindParam('image_name', $image_name, PDO::PARAM_STR);
			$stmt->bindParam('post_cat', $post_cat, PDO::PARAM_STR);
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->execute();

			/** Through image to the destination folder */
			if( is_dir( '../articles_img/uploads/' .$id) )
			{
				move_uploaded_file( $image_tmp, '../articles_img/uploads/' .$id .'/' .$image_name );
			}

			return true;
		}


		public function author_post_add()
		{
			$stmt = self::conn()->prepare("SELECT * FROM cms_admin");
			$stmt->execute();
			return $stmt->fetch();
		}


		/**
		 * show admin functionality
		 */
		public function admin_user()
		{
			$stmt = self::conn()->prepare("SELECT * FROM  cms_admin");
			$stmt->execute();
			return $stmt->fetchAll();	
		}


		/**
		 * show total admin
		 */
		public function total_admin()
		{
			$stmt = self::conn()->prepare("SELECT * FROM  cms_admin");
			$stmt->execute();
			return $stmt->rowCount();
		}


		/**
		 * Add Category
		 */
		public function add_category( $cat )
		{
			$stmt = self::conn()->prepare( "INSERT INTO category VALUES ( '', '$cat', NOW())" );
			$stmt->bindParam('cat', $cat, PDO::PARAM_STR);
			$stmt->execute();
			return true;
		}

		/**
		 * show category 
		 */
		public function show_category()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM category ORDER BY cat_id DESC" );
			$stmt->execute();
			return $stmt->fetchAll();
		}


		/**
		 * widget delete by admin
		 */
		public static function cat_delete( $cat_id )
		{
			if( $_GET['action'] == 'deletecat' )
			{
				$stmt = self::conn()->prepare( "DELETE FROM category WHERE cat_id = :cat_id" );
				$stmt->bindParam('cat_id', $cat_id, PDO::PARAM_INT);
				$stmt->execute();
				header('location:add_post.php?action=newcategory');
			}
		}


		/**
		 * Edit category by siteadmin
		 */
		public static function CatEdit( $cat_id )
		{
			global $cont;

			if( isset($cat_id) )
			{
				if( $_GET['action'] == 'managecat' )
				{
					/** Only update for category */
					if( isset($_POST['update_cat']) )
					{
						$new_cat_name = $_POST['cat'];
						$stmt = $cont->prepare( "UPDATE category SET cat_name = :new_cat_name WHERE cat_id = $cat_id" );
						$stmt->bindParam( 'new_cat_name', $new_cat_name, PDO::PARAM_STR );
						$stmt->execute();
						header( 'location:add_post.php?action=newcategory' );
					}

					/** show all categories */
					$stmt = $cont->prepare( "SELECT * FROM category WHERE cat_id = $cat_id" );
					$stmt->execute();
					return $stmt->fetchAll();
				}
			}
		}
	}
?>