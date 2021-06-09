<?php 
/**
 * Class Name  : AdminWeitePost
 * @author     : AL-AMIN
 * @package    : hitCoder
 */
	class AdminWeitePost
	{
		public static function WritePostCon( $postCon = null )
		{

			$errors = array();

			if( isset($_POST['submit']) ) 
			{
				$post_title = htmlentities(trim(ucfirst($_POST['title'])));
				$post_content = htmlentities(trim(nl2br(ucfirst($_POST['content']))));
				$post_cat = $_POST['category'];

				if( empty($post_title) || empty($post_content) || empty($post_cat) ) 
				{
					$errors[] = 'Please write title, content and select category name.';
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
						$errors[] = 'Oops! missing you article image.';
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
					if (isset($_SESSION['AUID']))
					{
						$admin_username = $_SESSION['AUID'];
						$admin_id  = 10;

						/** Go article.class.php file for admin_add_post() and access this method. */
						$postCon->admin_add_post( $admin_id, $admin_username, $post_title, $post_content, $post_cat, $image_name, $image_tmp );
					}			
				} 
			}
		}
	}
?>