<?php 
	defined('_VALID') or die('Restricted Access!');
	require_once '../init.php';

	if($_POST)
	{
		$uname = htmlentities( htmlspecialchars( trim( $_POST['username'] ) ) );
		$pw    = htmlentities( htmlspecialchars( trim( $_POST['password'] ) ) );

		$data = array();

		if( $uname && $pw )
		{
			$stmt = $cont->prepare( "SELECT * FROM subscribers" );
			$stmt->execute();

				if( $stmt )
				{
					$u_errors = array();

					while($row = $stmt->fetch())
					{

						/* select username & password from database */
						$db_uname = $row['userName'];
						$db_pw = $row['password'];
						$db_id = $row['userId'];

						/** when username don't match */
						if( $db_uname != $uname )
							$u_errors[] = 1;

						/** when password don't match */
						if( $db_pw != $pw )
							$u_errors[] = 2;


						/** username and password is ok */
						if ($db_uname == $uname && $db_pw == $pw) 
						{
							$_SESSION['uname'] = $uname;
							$_SESSION['u_id'] = $db_id;

							/** Go Login page */
							// header( "location:single.php?id=".$_GET['id']."&article=".$_GET['article'] );
							$data['success'] = true;
							$data['redirect'] = "./";
						}
					}

					/** Don't match username or password. */
					if( isset( $u_errors ) ) :

						if( !empty( $u_errors ) ) :

							foreach( $u_errors as $u_error ) :

								switch ( $u_error ) :

									case '1':
										$data[] = 'Oops! username don\'t match.';
										break;
									
									case '2':
										$data[] = 'Oops! password don\'t match.';
										break;

									default:
										$data[] = 'username or password don\'t match.';
										break;
								endswitch;
								/** or you can solve it by if condition. but i use switch loooop.
									if( $u_error == 1 )
								 		$errors[] = 'Oops! username don\'t match.';
									if( $u_error == 2 )
								 		$errors[] = 'Oops! password don\'t match.';
								*/
							endforeach;
						endif;
					endif;
				}
			// $data['success'] = true;
			// $data['redirect'] = './';
			// $
		}
		else
		{
			$data['success'] = false;
			$data['message'] = 'Please enter username and password.';
		}

		echo json_encode($data);
	}	
?>