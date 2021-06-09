<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ )). '/class/auth.class.php' );

	Auth::checkAdmin();
	// Auth::checkId();


	if (isset($_GET['id'])) 
	{
		$id = $_GET['id'];
		
		$stmt = $cont->prepare( "SELECT image_name FROM admin_post WHERE post_id = $id" );
		$stmt->bindParam( 'id', $id, PDO::PARAM_INT );
		if( $stmt->execute() )
		{
			while( $row = $stmt->fetch() )
			{
				$image = $row['image_name'];

				/** Delete image name and folder id from uploads folder */
				unlink( '../articles_img/uploads/' .$id .'/' .$image );
				rmdir( '../articles_img/uploads/' .$id );
			}
				
			$dStmt = $cont->prepare( "DELETE FROM admin_post WHERE post_id = $id" );
			$dStmt->bindParam( 'id', $id, PDO::PARAM_INT );

			if( $dStmt->execute() )
			{
				header( 'location:view_post.php' );
			}
		}		
	}

	// $smarty->assign('dashboard_name', $seo['dashboard_name']);
	// $smarty->assign('site_name', 'Delete post &raquo; '.$_GET['article']);
	// $smarty->assign('add_css', add_css());
	// $smarty->assign('add_js', add_js());
	// $smarty->display('header.tpl');
	// $smarty->display('menu.tpl');
	// $smarty->display('delete_post.tpl');
	// $smarty->display('footer.tpl');
?>