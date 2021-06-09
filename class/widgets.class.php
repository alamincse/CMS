<?php
/**
 * Class Name : Widgets
 * @author 	  : AL-AMIN
 * @package   : hitCoder
 * @access private
 */
	require_once( dirname(dirname( __FILE__ ) ) .'/include/config.php' );
	
	class Widgets
	{
		/** store $cont variable by $_connection variable */
		private static $_connection;

		public static $widget_name;
		public static $widget_sub;
		public static $widget_msg;
		public static $media;

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
			
			trigger_error( 'Failed to database connection'. mysql_error(), E_USER_ERROR );
			
			return self::$_connection;
		}


		public static function WidgetName()
		{
			if( is_null(self::$widget_name) )
			{
				return self::$widget_name  = $_POST['widget-name'];
			}
			return self::$widget_name;
		}

		public static function WidgetSub()
		{
			if( is_null(self::$widget_sub) )
			{
				return self::$widget_sub  = $_POST['w-sub'];
			}
			return self::$widget_sub;
		}

		public static function WidgetMsg()
		{
			if( is_null(self::$widget_msg) )
			{
				return self::$widget_msg  = $_POST['widget-msg'];
			}
			return self::$widget_msg;
		}

		public static function WidgetMedia()
		{
			if( is_null(self::$media) )
			{
				return self::$media  = $_POST['widget-media'];
			}
			return self::$media;
		}



		/**
		 * add new widgets
		 * @access private
		 * @author AL-AMIN
		 */
		public static function widgets_add()
		{
			if( isset( $_POST['widget-submit'] ) )
			{
				$widget_name = self::WidgetName();
				$widget_sub  = self::WidgetSub();
				$widget_msg  = self::WidgetMsg();
				$errors = array();

				if( empty($widget_name) || empty($widget_sub) || empty($widget_msg) )
				{
					$errors[] = 'Please select all fields.';
				}
				else
				{
					$image_name  = $_FILES['image']['name'];
					$image_size  = $_FILES['image']['size'];
					$image_type  = $_FILES['image']['type'];
					$image_tmp   = $_FILES['image']['tmp_name'];

					$allowed_ext = array( 'image/jpg', 'image/jpeg','image/bmp','image/gif','image/png' );

					if( empty($image_name) )
					{
						$errors[] = 'Something is missing';
					}
					else
					{
						if( in_array($image_type, $allowed_ext) === false )
						{
							$errors[] = 'File type not allowed.';
						}
						if( $image_size > 1048576 ) // 1024 * 50 = 50KB
						{
							$errors[] = 'Maximum file size is 1MB';
						}
					}
				}
				if( !empty($errors) )
				{
					return $errors;
				}
				else
				{
					$stmt = self::conn()->prepare( "INSERT INTO widget_area VALUES('', '$widget_name', '$widget_sub', '$widget_msg', '$image_name' )" );
					$stmt->bindParam('widget_name', $widget_name, PDO::PARAM_STR);
					$stmt->bindParam('widget_sub', $widget_sub, PDO::PARAM_STR);
					$stmt->bindParam('widget_msg', $widget_msg, PDO::PARAM_STR);
					$stmt->bindParam('image_name', $image_name, PDO::PARAM_STR);
					$stmt->execute();
				
					/** create derectory folder inside uploads folder. */	
					if( !is_dir( '../uploads/' .self::conn()->lastInsertId()) )
					{
						mkdir( '../uploads/' .self::conn()->lastInsertId(), 0744 );	
						move_uploaded_file( $image_tmp, '../uploads/' .self::conn()->lastInsertId(). '/'. $image_name );
					}
					// if( !is_dir('../uploads/thumbs/' .self::conn()->lastInsertId()) )
					// {
					// 	mkdir( '../uploads/thumbs/' .self::conn()->lastInsertId(), 0744 );	
					// 	move_uploaded_file( $image_tmp, '../uploads/thumbs/' .self::conn()->lastInsertId(). '/'. $image_name );
					// }

					header( 'location:widgets.php' );
				}
			}
		}


		public static function total_widgets()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area" );
			$stmt->execute();
			return $stmt->fetchAll();
		}


		/**
		 * Call for edit widgets 
		 * @return string <array()> 
		 */
		public static function widgets_edit( $id )
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_id = :id" );
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();		
		}


		/**
		 * update widgets
		 * @return true
		 */
		public static function widgets_update( $id )
		{
			if( isset($_POST['widget-edit']) )
			{

				$widget_sub  = $_POST['w-sub'];
				$widget_msg  = $_POST['widget-msg'];

				if( empty($widget_sub) || empty($widget_msg) )
				{
					$errors = 'Please select all fields.';
				}
				else
				{
					$image_name  = $_FILES['image']['name'];
					$image_size  = $_FILES['image']['size'];
					$image_type  = $_FILES['image']['type'];
					$image_tmp   = $_FILES['image']['tmp_name'];

					$allowed_ext = array( 'image/jpg', 'image/jpeg','image/bmp','image/gif','image/png' );

					if( empty($image_name) )
					{
						$errors[] = 'Missing your widgets media!';
					}
					else
					{
						if( in_array($image_type, $allowed_ext) === false )
						{
							$errors[] = 'File type not allowed.';
						}
						if( $image_size > 1048576 ) // 1024 * 50 = 50KB
						{
							$errors[] = 'Maximum file size is 1MB';
						}
					}
				}

				if( !empty($errors) )
				{
					return $errors;
				}
				else
				{
					/** remove old file from the uploads folder location */
					$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_id = :id" );
					$stmt->bindParam('id', $id, PDO::PARAM_INT);
					if( $stmt->execute() )
					{
						while( $row = $stmt->fetch() )
						{
							$widget_name = $row['widget_name'];
							$widget_id = $row['widget_id'];
							$w_image = $row['widget_media'];

							/** Delete previous image from uploads folder */
							unlink( '../uploads/' .$widget_id .'/' .$w_image );
						}
					}

					/** create derectory folder inside uploads folder. */	
					if( is_dir( '../uploads/'. $widget_id) )
					{
						move_uploaded_file( $image_tmp, '../uploads/'. $widget_id. '/'. $image_name );
					}

					$stmt = self::conn()->prepare( "UPDATE widget_area SET widget_name = :widget_name, widget_sub = :widget_sub, widget_content = :widget_msg, widget_media = :image_name WHERE widget_id = :id" );
					$stmt->bindParam('widget_name', $widget_name, PDO::PARAM_STR);
					$stmt->bindParam('widget_sub', $widget_sub, PDO::PARAM_STR);
					$stmt->bindParam('widget_msg', $widget_msg, PDO::PARAM_STR);
					$stmt->bindParam('image_name', $image_name, PDO::PARAM_STR);
					$stmt->bindParam('id', $id, PDO::PARAM_INT);
					$stmt->execute();
					header( 'location:widgets.php' );
				}
			}
		}


		/**
		 * @return last id for new create widgets
		 * @param int;
		 */
		public static function widgets_last_id()
		{
			
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area" );
			
			$stmt->execute();

			while( $row = $stmt->fetch() )
			{
				$last_id = $row['widget_id'];
			}	
			
			/** where search any widgets found, then return widgets last id from DB widget_area. otherwise default 1 */		
			if( isset($last_id) )
				return $last_id;
			else
				return 1;
		}


		/**
		 * widget delete by admin
		 * @access public 
		 */
		public static function widget_delete( $widget_id )
		{
			$stmt = self::conn()->prepare( "SELECT widget_media FROM widget_area WHERE widget_id = $widget_id" );
			$stmt->bindParam( 'widget_id', $widget_id, PDO::PARAM_INT );
			if( $stmt->execute() )
			{
				while( $row = $stmt->fetch() )
				{
					$image = $row['widget_media'];

					/** Delete image name and folder id from uploads folder */
					unlink( '../uploads/' .$widget_id .'/' .$image );
					rmdir( '../uploads/' .$widget_id );
				}
					
				$nStmt = self::conn()->prepare( "DELETE FROM widget_area WHERE widget_id = :widget_id" );
				$nStmt->bindParam('widget_id', $widget_id, PDO::PARAM_INT);
				$nStmt->execute();
				header('location:widgets.php');
			}	
		}


		/**
		 * show Books with right sidebar
		 * @access public
		 */
		public static function books()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_name = 'e-book'" );
			$stmt->execute();
			return $stmt->fetchAll();
		}


		public static function copyrightLeft()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_name = 'copyright-left'" );
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public static function social_contact()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_name = 'social-contact'" );
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public static function news()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_name = 'news'" );
			$stmt->execute();
			return $stmt->fetchAll();
		}

		/**
		 * Template About
		 * @access public
		 */
		public static function about_me()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_name = 'about'" );
			$stmt->execute();
			return $stmt->fetchAll();
		}


		/**
		 * PHP Project
		 * @access public
		 */
		public static function php_project()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM widget_area WHERE widget_name = 'php-project'" );
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>