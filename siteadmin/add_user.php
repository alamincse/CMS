<?php 
	define('_VALID', true);
	define('_ADMIN', true);
	require_once( dirname(dirname(__FILE__)). '/class/auth.class.php' );
	require_once( dirname(dirname(__FILE__)). '/functions/admin.function.php' );

	Auth::checkAdmin();
	
	$errors = null;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$fullname = htmlentities(trim($_POST['fullname']));
		$username = htmlentities(trim($_POST['username']));
		$email    = htmlentities(trim($_POST['email']));
		$password = htmlentities(trim($_POST['password']));
		$c_pw 	  = htmlentities(trim($_POST['c-pw']));

		if( empty($fullname) || empty($username) || empty($email) || empty($password) || empty($c_pw) ) 
		{
			$errors = 'Some fields are required!';
		}
		else
		{
			if(strlen($fullname) > 30 || strlen($username) > 50 || strlen($password) > 150 || strlen($email) >255) 
			{
				$errors = 'One or more fields contains too many characters.';
			}
			elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE ) 
			{
				$errors = 'Please enter a vaild email address.';
			}
			elseif($password <> $c_pw)
			{
				$errors = 'Oops! Don\'t match your password! Please try again.';
			}
			else
			{	
				$stmt = $cont->prepare("INSERT INTO cms_admin(admin_fullname, admin_username, admin_email, admin_password, date_time) VALUES( :fullname, :username, :email, :password, NOW() ) ");
				$stmt->bindParam('fullname', $fullname, PDO::PARAM_STR);
				$stmt->bindParam('username', $username, PDO::PARAM_STR);
				$stmt->bindParam('email', $email, PDO::PARAM_STR);
				$stmt->bindParam('password', $password, PDO::PARAM_STR);
				$stmt->execute();
			}
		}
	}


	$smarty->assign('dashboard_name', $seo['dashboard_name']);
	$smarty->assign('site_name', 'New admin create');
	$smarty->assign('errors', $errors);
	$smarty->assign('new_msg', new_msg());
	$smarty->assign('new_msg_complete', '');
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');
	$smarty->display('menu.tpl');
	$smarty->display('add_user.tpl');
	$smarty->display('footer.tpl');
?>