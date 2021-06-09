<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname( __FILE__ )). '/include/config.php' );
	require_once( dirname(dirname( __FILE__ )). '/functions/admin.function.php' );
	require_once( dirname(dirname( __FILE__ )). '/class/auth.class.php' );

	Auth::checkAdmin();

	if (isset($_GET['id'])) 
	$id = (int)$_GET['id'];

	if (isset($_POST['submit_fullname'])) 
	{
		$fullname = $_POST['fullname'];

		if ($fullname) 
		{
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_fullname = :fullname WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('fullname', $fullname, PDO::PARAM_STR);
			$stmt->execute();	
		}
		else
		{
			$fullname = 'Please select your fullname.';
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_fullname = :fullname WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('fullname', $fullname, PDO::PARAM_STR);
			$stmt->execute();	
		}
	}
	elseif (isset($_POST['submit_username'])) 
	{ 
		
		$username = $_POST['username'];

		if ($username) 
		{
			$username = $_POST['username'];
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_username = :username WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('username', $username, PDO::PARAM_STR);
			$stmt->execute();		
		}
		else
		{
			$username = 'Please select your username.';
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_username = :username WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('username', $username, PDO::PARAM_STR);
			$stmt->execute();	
		}
		
	}
	elseif (isset($_POST['submit_email'])) 
	{
		$email = $_POST['email'];

		if ($email) 
		{
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_email = :email WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('email', $email, PDO::PARAM_STR);
			$stmt->execute();	
		}
		else
		{
			$email = 'Please select your email.';
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_email = :email WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('email', $email, PDO::PARAM_STR);
			$stmt->execute();	
		}
		
	}
	elseif (isset($_POST['submit_password'])) 
	{

		$password = $_POST['password'];

		if ($password) 
		{
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_password = :password WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('password', $password, PDO::PARAM_STR);
			$stmt->execute();	
		}
		else
		{
			$password = 'Please select yout password.';
			$stmt = $cont->prepare("UPDATE cms_admin SET admin_password = :password WHERE admin_id = :id");
			$stmt->bindParam('id', $id, PDO::PARAM_INT);
			$stmt->bindParam('password', $password, PDO::PARAM_STR);
			$stmt->execute();	
		}
	}

	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'admin &raquo; '.$_GET['author']);
	$smarty->assign('site_admin', edit_admin($id));
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('admin_view_profile.tpl');
	$smarty->display('footer.tpl');
?>