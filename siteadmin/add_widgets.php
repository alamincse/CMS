<?php 
/**
 * Admin Widgets Area
 * @param string < array() >
 * @return string < array() >
 * @author  : AL-AMIN
 * @package : My Personal Website
 */
	define('_VALID', true);
	define('_ADMIN', true);
	require_once ( dirname(dirname( __FILE__ ) ). '/functions/admin.function.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/functions/widgets.function.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/class/auth.class.php' );
	
	Auth::checkAdmin();

	$errors = null;

	if( isset( $_POST['widget-submit'] ) )
	{
		global $cont;

		$widget_name = $_POST['widget-name'];
		$widget_sub = $_POST['w-sub'];
		$widget_msg  = $_POST['widget-msg'];
		$media = '';
		if( empty($widget_name) || empty($widget_sub) || empty($widget_msg) )
		{
			$errors = 'Please select all fields.';
		}
		else
		{
			/** always get new id when admin create new widgets, otherwise default 1  */
			if( isset($_GET['new_id']) )
				$new_id = $_GET['new_id'];
			else
				$new_id = 1;

			$stmt = $cont->prepare( "INSERT INTO widget_area VALUES('$new_id', '$widget_name', '$widget_sub', '$widget_msg', '$media')" );
			$stmt->bindParam('new_id', $new_id, PDO::PARAM_INT);
			$stmt->bindParam('widget_name', $widget_name, PDO::PARAM_STR);
			$stmt->bindParam('widget_sub', $widget_sub, PDO::PARAM_STR);
			$stmt->bindParam('widget_msg', $widget_msg, PDO::PARAM_STR);
			$stmt->bindParam('media', $media, PDO::PARAM_STR);
			$stmt->execute();
			header( 'location:widgets.php' );

		}

	}
	
	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Widgets');
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');

	$smarty->assign('widget_books', books());
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->assign('errors', $errors);
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('add_widgets.tpl');
	$smarty->display('footer.tpl');
?>