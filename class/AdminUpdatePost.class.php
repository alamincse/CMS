<?php 
/**
 * Class Name  : AdminUpdatePost
 * @author     : AL-AMIN
 * @package    : hitCoder
 */
	class AdminUpdatePost
	{
		public static function UpdatePostCondition( $postUpdateCon = null )
		{
			$errors = array();

			if( isset($_GET['id']) ) 
			{
				$id  = (int)$_GET['id'];	
				
				if( $id ) 
				{
					if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
					{
						$post_title = htmlentities(trim(ucfirst($_POST['post-title'])));
						$post_content = htmlentities(trim(nl2br(ucfirst($_POST['post-content']))));
						$post_cat = $_POST['category'];

						if( empty($post_title) || empty($post_content) || empty($post_cat) ) 
						{
							$errors[] = 'Please Enter title and content.';
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
								$errors[] = 'Oops! Missing your article post image.';
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

						if( empty($errors) )
						{
							/** Go article.class.php file for AdminPostUpdate() method */
							$update_ok = $postUpdateCon->AdminPostUpdate( $id, $post_title, $post_content, $image_name, $post_cat, $image_tmp );
							
							if( $update_ok == true )
							{
								$errors = '<font style="color:green;">Well done! Your post has been Update. <a href="../single.php?id=' .$id .'&article=' .$post_title .'" target="_blank">View Post</a></font>';
								
								return $errors;
							}
						}
						else
						{
							return $errors;
						}
					}
				}
			}
		}
	}
?>