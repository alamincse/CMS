<?php 
/** 
 * Description: Widgets
 * @param string < array() >
 * @return string < array() >
 * @author  : AL-AMIN
 * @package : My Personal Website
 */
	define( '_VALID', true );
	define( '_ADMIN', true );
	require_once ( dirname(dirname( __FILE__ ) ). '/functions/admin.function.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/class/auth.class.php' );
	require_once ( dirname(dirname( __FILE__ ) ). '/class/widgets.class.php' );
	
	Auth::checkAdmin();

	/** If admin don't add or edit widget then auto store $error = '' */
	$errors = '';

	$widgets_last_id = Widgets::widgets_last_id();

	if( isset($_GET['action']) == 'add' && isset($widgets_last_id) ) :
		$new_id = $widgets_last_id;
		$errors = Widgets::widgets_add();
	else : $new_id = ''; endif;

	/** If user edit any section then active it, otherwise it's not active. here 2nd edit is id Name. */
	if( isset($_GET['action']) == 'edit' && isset($_GET['edit']) ) :
		$id = $_GET['edit'];
		$widgets_edit = Widgets::widgets_edit( $id );
		$errors = Widgets::widgets_update( $id );
	else : $widgets_edit = ''; endif;


	/** Only for widgets delete command */
	if( isset($_GET['widgets_id']) )
	Widgets::widget_delete( $_GET['widgets_id'] );

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'Widgets');
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('widgets', Widgets::total_widgets());
	$smarty->assign('widgets_edit', $widgets_edit);
	$smarty->assign('errors', $errors);
	$smarty->assign('new_id', $new_id);
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->assign('widgets_last_id', $widgets_last_id + 1 );
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('widgets.tpl');
	$smarty->display('footer.tpl');
?>