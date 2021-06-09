<?php 
	/**
	 * All functions goes here.
	 * @author AL-AMIN
	 * @package hitCoder
	 * @access public
	 */
	defined( '_VALID' ) or die( 'Restricted Access!' );
	require_once ( dirname( __FILE__ ) .'/include/config.db.php');

	function add_menu( $menu_title, $menu_content )
	{
		global $cont;
		$stmt = $cont->prepare( "INSERT INTO menu VALUES( '', :menu_title, :menu_content )" );
		$stmt->bindParam( 'menu_title', $menu_title, PDO::PARAM_STR );
		$stmt->bindParam( 'menu_content', $menu_content, PDO::PARAM_STR );
		$stmt->execute();
	}

	function show_menu()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM menu" );
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function Show_recent_post()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM admin_post ORDER BY post_id DESC LIMIT 8" );
		$stmt->execute();		
		return $stmt->fetchAll();
	}

	function comments()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM user_comments ORDER BY post_id DESC LIMIT 10" );
		$stmt->execute();
		return $stmt->fetchAll();
	}


	function total_comments( $id )
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM comments WHERE post_id = $id  AND comments_count > 0" );
		$stmt->execute();
		$comments_num = $stmt->rowCount();

		if( $comments_num == 0 )
		{
			return "<span class='pull-right'><i class='fa fa-comment-o'></i>&nbsp;No Comments</span>";	
		}
		elseif( $comments_num == 1 )
		{
			return "<span class='pull-right'><i class='fa fa-comment'></i>&nbsp;One Comment</span>";	
		}
		else
		{
			return "<span class='pull-right'><i class='fa fa-comments'></i>&nbsp;" . $comments_num . " Comments</span>";	
		}
	}


	function get_posts_title( $post_id )
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM admin_post WHERE post_id = ?" );
		$stmt->bindValue( 1, $post_id );
		$stmt->execute();
		return $stmt->fetchAll();
	}
	


	/**
	 * Subscribers/ Members Login by any single.php page
	 * @author : AL-AMIN
	 * @access public
	 */
	function do_login()
	{
		global $cont;

		$errors = array();

		if( isset( $_POST['submit'] ) )
		{
			$userName = htmlentities( htmlspecialchars( trim( $_POST['uname'] ) ) );
			$password = htmlentities( htmlspecialchars( trim( $_POST['pw'] ) ) );
			$rem      = htmlentities( htmlspecialchars( trim( $_POST['remember'] ) ) );

			if( $userName && $password )
			{
				$stmt = $cont->prepare( "SELECT * FROM subscribers WHERE userName= :userName" );
				
				$stmt->bindParam('userName', $userName, PDO::PARAM_STR);
				
				$stmt->execute();
				
				if( $stmt )
				{
					$db_uname = false;
					
					$db_pw = true; // By default it is true, If you don't set it.
					
					while( $row = $stmt->fetch() )
					{
						$db_uname = $row['userName'];
						
						$db_pw = $row['password'];
						
						$db_id = $row['userId'];

						/** when username don't match */
						if( $db_uname <> $userName )
						{
							$db_uname = false;
						}
						elseif( $db_pw <> md5($password) )
						{
							$db_pw = false;
						}
					}

					/** Don't match username or password. */
					if( $db_uname == false )
					{
						$errors[] = 'Oops! username don\'t match.';
					}
					elseif( $db_pw == false )
					{
						$errors[] = 'Oops! Don\'t match your password.';
					}
					elseif( $db_uname == true && $db_pw == true )
					{
						/** Check Remember me button */
						if( !empty($_POST['remember']) )
						{
							setcookie( 'uname', $userName, time() + 43200 );
							setcookie( 'u_id', $db_id, time() + 43200 );
						}
						elseif( $_POST['remember'] == '' )
						{
							$_SESSION['uname'] = $userName;
							$_SESSION['u_id']  = $db_id;
						}

						/** Go Login page */
						header( "location:single.php?id=".$_GET['id']."&article=".$_GET['article'] );
					}
				}
			}
			else
			{
				$errors[] = 'Please enter username and password.';
			}
		}

		return $errors;
	}	


	/**
	 * Subscribers / Members Registration Form
	 * @author : AL-AMIN
	 * @access public
	 */
	function register()
	{
		global $cont;

		$errors = array();

		if( isset( $_POST['submit_reg'] ) )
		{
			$fname 		 = htmlentities( htmlspecialchars( trim( $_POST['f_name'] ) ) );
			$uname 		 = htmlentities( htmlspecialchars( trim( $_POST['username'] ) ) );
			$email 		 = htmlentities( htmlspecialchars( trim( $_POST['email'] ) ) );
			$pw 		 = htmlentities( htmlspecialchars( trim( $_POST['password'] ) ) );
			$c_pw 		 = htmlentities( htmlspecialchars( trim( $_POST['c_pw'] ) ) );
			$select_name = htmlentities( htmlspecialchars( trim( $_POST['select-name'] ) ) );
			$option_name = htmlentities( htmlspecialchars( trim( $_POST['option-name'] ) ) );
			$captcha     = htmlentities( htmlspecialchars( trim( $_POST['captcha'] ) ) );

			/** photo upload... */
			$img_name   = $_FILES["profile_image"]["name"];
			// $upload_dir = 'assets/img/members/';
			$tmp_name   = $_FILES["profile_image"]["tmp_name"];
			// $dest_file  = $upload_dir . $img_name;
			$extension  = strtolower( substr( $img_name, strpos( $img_name, '.' ) + 1 ) );

			/** call $_SESSION['secure'] variable From captcha.php file */
			$captcha_img = $_SESSION['secure'];
			

			if( !empty( $fname ) || !empty( $uname ) || !empty( $email ) || !empty( $pw ) || !empty( $c_pw ) || !empty( $captcha ) || !empty( $img_name ) || $select_name == 'Select Country' || $option_name == 'Please Select Country' )
			{
				if( strlen( $uname ) < 3 || strlen( $uname ) > 20 )
				{
					$errors[] = '<div class="alert alert-error">
								<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Username length between 3 to 20 characters.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( strlen( $pw ) < 4 )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Password length minimum 4 characters.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Your email is\'t valid. Please select a valid email address.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $pw <> $c_pw )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Oops! Don\'t match your password.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $captcha <> $captcha_img )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Oops! Don\'t match your captcha.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $select_name == 'Select Country' || $select_name == 'select-item' )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select location field.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $select_name == 'Bangladesh' || $option_name == 'home district' || $option_name == 'Select your Home district' )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select your home district name.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $select_name == 'Others' || $option_name == 'country' || $option_name == 'Select Country Name' )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select your country name.</p>
						</div><!--  .alert .alert-error -->';
				}
				else
				{

					/** Don't allow same email, before you are registred. */
					$stmt = $cont->prepare( "SELECT * FROM subscribers" );
					$stmt->execute();

					if( $stmt )
					{
						while( $row = $stmt->fetch() )
						{
							$db_uname = $row['userName'];
							$db_email = $row['email'];
				
							/** store value when database username is same */
							if( $db_uname == $uname )
							{
								$db_uname = 1;
							}

							/* store value when database email is same */
							if( $db_email == $email )
							{
								$db_email = 2;
							}
						}

						/** check when database username are same  */
						if( $db_uname == 1 )
						{
							$errors[] = '<div class="alert alert-error">
									<a href="" class="close" data-dismiss="alert">&times;</a>
				        			<p>Username already exits. Please try another username.</p>
								</div><!--  .alert .alert-error -->';
						}

						/** check when database email are same */
						elseif( $db_email == 2 )
						{
							$errors[] = '<div class="alert alert-error">
									<a href="" class="close" data-dismiss="alert">&times;</a>
				        			<p>E-mail already exits. Please try another E-mail.</p>
								</div><!--  .alert .alert-error -->';
						}
						else
						{
							$pw = md5( $pw );
							$time = time();

							$image = addslashes(file_get_contents($_FILES['profile_image']['tmp_name']));
							
							$image_name = addslashes($_FILES['profile_image']['name']);
							
							// move_uploaded_file( $tmp_name, $dest_file. );

							if( $extension == 'jpg' || $extension == 'jpeg' || $extension == 'gif' || $extension == 'png' || $extension == 'bmp' )
							{	
								/** Check it when photo size must be 1048576Kb or 1MB. */
								if( $_FILES['profile_image']['size'] < 1048576 ) 
								{
									$stmt = $cont->prepare( "INSERT INTO subscribers VALUES( '', '$fname', '$uname', '$pw', '$email', '$option_name/$select_name', '$image_name', '$time' )" );
									
									$stmt->execute();
									mkdir('subscribers/'. $cont->lastInsertId(), 0744 );
									
									$test = move_uploaded_file( $tmp_name, 'subscribers/'. $cont->lastInsertId(). '/'. $image_name );
									if( $test )
									{
										$errors[] = '<div class="alert alert-success">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Thank you for registering. Now you can login for aks question or comments any article.</p>
										</div><!--  .alert .alert-success -->';
									}
								}
								else
								{
									$errors[] = '<div class="alert alert-error">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Picture size must be 1MB.</p>
										</div><!--  .alert .alert-error -->';
								}
							}
							else
							{
								$errors[] = '<div class="alert alert-error">
										<a href="" class="close" data-dismiss="alert">&times;</a>
					        			<p>Picture must be a jpg/jpeg/gif/png</p>
									</div><!--  .alert .alert-error -->';
							}
						}
					}
				}
			}
			else
			{
				$errors[] = '<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
	        			<p>Some fields are required. Please try again.</p>
					</div><!--  .alert .alert-error -->';
			}	
		}

		return $errors;
	}


	/**
	 * Pw reovery / lost pw
	 * @author : AL-AMIN
	 */
	function password_lost()
    {
    	$errors = array();
    	
    	global $cont;

    	if( isset( $_POST['submit_lost'] ) )
    	{

    		$email = $_POST['email'];
    	
	    	if( !empty( $email ) )
	    	{
	    		if( filter_var( $email, FILTER_VALIDATE_EMAIL ) == FALSE )
	    		{
	    			$errors[] = '<div class="alert alert-error">
									<a href="" class="close" data-dismiss="alert">&times;</a>
				        			<p>Oops! Your E-mail is\'t valid.</p>
								</div><!--  .alert .alert-error -->';		
	    		}
	    		else
	    		{
					$stmt = $cont->prepare( "SELECT * FROM subscribers WHERE email = :email" );
					$stmt->bindParam( 'email', $email, PDO::PARAM_STR );
					$stmt->execute();
					if( $stmt )
					{
						// var_dump($stmt->fetch())
						$db_email = false;

						while( $row = $stmt->fetch() )
						{
							$db_email = $row['email'];
							$db_fname = $row['Full_name'];

							/* store value when database email are same */
							if( $db_email == $email )
							{
								$db_email = true;
							}
						}

						/** check email, when database email is't same for you want.  */
						if( $db_email == false )
						{
							$errors[] = '<div class="alert alert-error">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Oops! That\'s email is\'t correct for account in this website.</p>
										</div><!--  .alert .alert-error -->';							

						}
	    				elseif( $db_email == true )
	    				{
	    					$password = md5( _random_pw_generate(8) );
	    					$stmt = $cont->prepare( "UPDATE subscribers SET password = :password WHERE email = :email" );
	    					$stmt->bindParam( 'password', $password, PDO::PARAM_STR );
	    					$stmt->bindParam( 'email', $email, PDO::PARAM_STR );
	    					
	    					if( $stmt->execute() )
	    					{
	    						/** Sent request pw by your mail account */
								// $errors[] = 'You have successfully change your password.';
								// $from 	 = 'cseal.amin.09@gmail.com';
								$sitename = strtolower( $_SERVER['SERVER_NAME'] );
								$to 	  = $email;
								$subject  = 'Subject: Password Request For Login.<br>';
								$message  = "Dear ". $db_fname .", <br/>".
								"Your requesting password is = " . $password . "<br/>Now you can go below this link for login.<br/>".
								"<a href='http://localhost/myphpsite/cms_project' target='_blank'>".'http://localhost/myphpsite/cms/'.md5($password)."</a><br><br>".
								"Best Regards,<br/>AL-AMIN<br>Web Application Developer";
 
								// if ( substr( $sitename, 0, 9 ) == 'localhost' ) 
								// {
									// $sitename = substr( $sitename, 9 );
								// }
								$from = 'noreplay@' . $sitename;

								$headers  = 'From: '. $from . "\r\n<br>" .
					            'Reply-To: '. $from . "\r\n<br>" .
					            'MIME-Version: 1.0' . "\r\n<br>" .
					            'Content-type: text/html; charset=utf-8' . "\r\n<br/><br/>" ;
					            
					        	if( mail( $to, $subject, $message, $headers ) )
					        	{
					        		$errors[] = '<div class="alert alert-success">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p><strong>Well done!</strong> I sent a password in your mail account. Now check your email for new password.</p>
										</div><!--  .alert .alert-error -->';
									// header('location:lost.php?p=forgot20%passwotd&token='.time().'&success=true');					        		
					        	}
					        	else
					        	{
					        		$errors[] = '<div class="alert alert-error">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Sorry, the mail server is not active. Please try after sometime.</p>
										</div><!--  .alert .alert-error -->';
					        	}

	    					}
	    				}
	    			}
	    		}
	    	}
	    	else
	    	{
	    		$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select your email address.</p>
						</div><!--  .alert .alert-error -->';
	    	}
	    }
    	
    	return $errors;
	}


	/**
	 * Randomly pw generate
	 * @access private
	 */
	function _random_pw_generate( $length = 10, $type = 'password' )
	{
		$random = NULl;

		$chars  = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		
		if( $type == 'password' )
		{
			$chars .= '`~!@#$%^&*()_-+={}[]|\;":,<>/?';
		}

		$index = 1;
		
		while( $index <= $length )
		{
			$max = strlen( $chars )-1;
		
			$num = rand( 0, $max );
		
			$tmp = substr( $chars, $num, 1 );
		
			$random .= $tmp;
		
			$index++;
		}

		return $random;
	}



	/**
	 * token count
	 */
	function token( $length, $type )
	{
		return _random_pw_generate( $length, $type );
	}


	// function download( $path, $filename )
	// {
	// 	header( 'Content-type:application/force-download' );
	// 	header( 'Content-Disposition: attachment; filename="'.$filename.'"' );
	// 	$fp = fopen( $path . "/". $filename, 'r' );
	// 	fpassthru( $fp );
	// 	fclose( $fp );
	// }

	// $path = $_SERVER['DOCUMENT_ROOT']."/myphpsite/CMS/download/";
	// $filename = 'mySQL SERVER.pdf';
	// download($path, $filename);


	/**
	 * Download counter
	 * @author : AL-AMIN
	 */
	function download_count()
	{
		global $cont;
		
		$stmt = $cont->prepare( "SELECT * FROM download_manager" );
		
		$stmt->execute();

		while( $row = $stmt->fetch() )
		{
			$file_downloads = $row['downloads'];
		}
		
		return $file_downloads;
	}



	/**
	 * Dynamic search, when user search any item on search box
	 * @author : AL-AMIN
	 * @access public
	 */
	function search()
	{
		global $cont;

		$form = search_form();
		
		if( isset($_POST['submit']) )
		{
			$keyword = $_POST['search'];

			if( $keyword == '' )
			{
				$msg  = '<span style="color:red; font-size:16px;">Oops! You do\'t search any item. Please search something what\'s you want.</span><br><br>';

				return array( 'msg' => $msg, 'form' => $form, 'keyword' => 'No keyword search.', 'data' => null );
			}
			
			$stmt = $cont->prepare( 
				"SELECT admin_post.post_id, admin_post.admin_id, admin_post.admin_username,
				admin_post.post_title,admin_post.post_content, admin_post.image_name, admin_post.post_view_count,
				admin_post.post_cat, admin_post.post_date, admin_post.total_rating, 
				count(comments.comments_count) as 'comments_count' FROM admin_post 
				LEFT OUTER JOIN comments ON admin_post.post_id = comments.post_id 
				GROUP BY admin_post.post_id HAVING post_title LIKE '%$keyword%' 
				OR post_content LIKE '%$keyword%' OR post_cat LIKE '%$keyword%'
				ORDER BY admin_post.post_id DESC" 
			);
			
			$stmt->execute();
			
			$row_count = $stmt->rowCount();
		
			if( !$row_count )
			{
				$msg  = '<span style="color:red; font-size:16px;">Oops! Don\'t match your keyword. Please search another keyword again...</span><br/><br/>';	
				
				return array( 'msg' => $msg, 'form' => $form, 'keyword' => $keyword, 'data' => null );
			}
			elseif( $row_count > 0 )
			{
				$total_row = $stmt->rowCount();

				return array( 'msg' => 'Total Article Found : ' .$total_row, 'form' => $form, 'keyword' => $keyword, 'data' => $stmt->fetchAll() );
			}
		}
		else
		{
			/** If user can type only search.php on address bar, then show this msg */
			$msg = "<p style='color:red; font-size:20px;'>Oops! It's wrong way for article search. Please use search box, what are you want...</p>.";
			// return array( $msg, $form, '404 Page Not Found!', null );
			return array( 'msg' => $msg, 'form' => $form, 'keyword' => '404 Page Not Found!', 'data' => null );
		}
	}


	/**
	 * Search form add
	 */
	function search_form()
	{ 
		global $config;

		$form  = '<div class="search-form">';
		$form .= '<form action="' .$config['BASE_URL'] .'/search.php" method="post" class="form-inline">';
		$form .= "<input type=\"text\" name=\"search\" placeholder=\"what are you looking ?\" class=\"span4\" onfocus=\"if(this.placeholder=='what are you looking ?'){this.placeholder=''}\" onblur=\"if(this.placeholder==''){this.placeholder='what are you looking ?'}\" >";
		$form .= '&nbsp;<input type="submit" name="submit" value="Search" class="btn btn-success"> ';
		$form .= '</form>';
		$form .= '</div>';
		return $form;
	}


	/**
	 * Archive search box
	 * @author : AL-AMIN
	 */
	function archiveSearch()
	{
		global $cont;

		$form = archive();

		if( isset($_POST['archive']) )
		{
			$ar_month = $_POST['month_name'];
			
			$ar_year = $_POST['year'];

			if( $ar_year == '' || $ar_month == '' )	
			{
				$msg  = '<span style="color:red; font-size:16px;">Oops! You do\'t search any item. Please search something what\'s you want.</span><br><br>';

				return array( 'msg' => $msg, 'form' => $form, 'archive' => 'No Archive search.', 'data' => null );
			}
			elseif( $ar_month == 'Select Month' )
			{
				$msg  = '<span style="color:red; font-size:16px;">Oops! You do\'t select Month. Please select both item, then search.</span><br><br>';

				return array( 'msg' => $msg, 'form' => $form, 'archive' => 'Don\'t select month.', 'data' => null );
			}
			elseif( $ar_year == 'Year' )
			{
				$msg  = '<span style="color:red; font-size:16px;">Oops! You do\'t select Year. Please select both item, then search.</span><br><br>';

				return array( 'msg' => $msg, 'form' => $form, 'archive' => 'Don\'t select year.', 'data' => null );
			}
			else
			{

				$months = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );

				foreach( $months as $key => $month )
				{
					if( $ar_month == $month )
					{
						if( $month == 'October' || $month == 'November' || $month == 'December' )
						{
							$new_month = $key + 1;
						}
						else
						{
							$new_month = $key + 1;

							$new_month = '0' .$new_month;
						}
					}
				}

				$search = $ar_year .'-' .$new_month;

				$stmt = $cont->prepare( 
					"SELECT admin_post.post_id, admin_post.admin_id, admin_post.admin_username,
					admin_post.post_title,admin_post.post_content, admin_post.image_name, admin_post.post_view_count,
					admin_post.post_cat, admin_post.post_date, admin_post.total_rating, 
					count(comments.comments_count) as 'comments_count' FROM admin_post 
					LEFT OUTER JOIN comments ON admin_post.post_id = comments.post_id 
					GROUP BY admin_post.post_id HAVING post_date LIKE '%$search%' 
					ORDER BY admin_post.post_id DESC"
				);
			
				$stmt->execute();
				
				$row_count = $stmt->rowCount();
			
				if( !$row_count )
				{
					$msg  = '<span style="color:red; font-size:16px;">Oops! Don\'t match your keyword. Please search another keyword again...</span><br/><br/>';	
					
					return array( 'msg' => $msg, 'form' => $form, 'archive' => 'Don\'t match month &raquo; ' .$ar_month .' and year &raquo; ' .$ar_year, 'data' => null );
				}
				elseif( $row_count > 0 )
				{
					$total_row = $stmt->rowCount();

					return array( 'msg' => 'Total Article Found : '. $total_row, 'form' => $form, 'archive' => 'Month &raquo; ' .$ar_month .' and Year &raquo; ' .$ar_year, 'data' => $stmt->fetchAll() );
				}
			}
		}
		else
		{
			$msg = "<p style='color:red; font-size:20px;'>Oops! It's wrong way for article search. Please use search box, what you want.</p>.";
			return array( 'msg' => $msg, 'form' => $form, 'archive' => '404 Page Not Found!', 'data' => null );
		}
	}


	/**
	 * Archive search box
	 * @author     : AL-AMIN
	 * @package    : hitCoder
	 */
	function archive()
	{
		global $config;

		$form  = '<div class="control-group">';
		$form .= '<div class="controls">';
		$form .= '<form action="'.$config['BASE_URL']  .'/archive.php" method="post">';
		$form .= '<select name="month_name" id="input_date" style="width:110px;">';
		$form .= '<option>Select Month'; 
		// $form .= (isset($_POST['month_name'])) ? $_POST['month_name'] : $_POST['month_name'] = 'Select Month'; 
		$form .= '</option>';

		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		foreach( $months as $month ) :
		$form .= '<option value="' .$month .'" name="' .$month .'">' .$month .'</option>';
		endforeach; 
		$form .= '</select>';

		$form .= '<select name="year" id="input_date" style="width:80px;">';
		$form .= '<option>Year'; 
		// $form .= (isset($_POST['year'])) ? $_POST['year'] : $_POST['year'] = 'Year'; 
		$form .= '</option>';
		for( $i = getLastDate(); $i >= getFirstDate(); $i-- ) :
		$form .= '<option value="' .$i .'" name="' .$i .'" value="'. (isset($year) && $year == $i) .'">' .$i .'</option>';
		endfor;
		$form .= '</select>';

		$form .= '<input type="submit" name="archive" style="margin-top: -10px;margin-left: 5px;" value="Search" class="btn btn-info">'; 
		$form .= '</form>';
		$form .= '</div><!-- .controls -->';
		$form .= '</div><!--  .control-group -->';
		return $form;
	}


	/**
	 * Get Last Date from admin_post table
	 * @return date
	 */
	function getLastDate()
	{
		global $cont;
		
		$stmt = $cont->prepare( "SELECT post_date FROM admin_post" );

		if( $stmt->execute() )
		{
			while( $row = $stmt->fetch() )
			{
				$lastDate = $row['post_date'];
			}
		}

		/**
		 * Remove last 15 characters(2014-11-17 01:33:30)
		 * @return only year(2014)
		 */
    	$lastDate = substr( $lastDate, 0, -15 ); 

		return $lastDate;
	}



	/**
	 * Get Last Date from admin_post table
	 * @return date
	 */
	function getFirstDate()
	{
		global $cont;
		
		$stmt = $cont->prepare( "SELECT post_date FROM admin_post" );

		if( $stmt->execute() )
		{
			while( $row = $stmt->fetch() )
			{
				$firstDate = $row['post_date'];
				
				/**
				 * Remove last 15 characters(2013-04-09 21:27:09)
				 * @return only year(2013)
				 */
		    	$firstDate = substr( $firstDate, 0, -15 );
				
				return $firstDate;
			}
		}
	}


	/**
	 * String conversion
	 * @author     : AL-AMIN
	 */
	// function _e( $value = null )
	// {
	// 	return sprintf( '%s', $value );
	// }


	/**
	 * when user use this site by a mobile
	 */
	function is_mobile()
	{
		global $config; ?>
		 <meta name="viewport" content="width=320, initial-scale=0.9, maximum-scale=1.0, user-scalable=0" />
		<?php
		return true;
		// $device = array(  );
		// $a = $_SERVER['HTTP_USER_AGENT'];
		// return version_compare($a, 10);
	}


	/**
	 * Add all css file
	 * @author : AL-AMIN
	 */
	function add_css()
	{
		global $config;
		$css = array();
		
		$css[] = $config['BASE_URL']. '/assets/css/bootstrap.min.css';
		$css[] = $config['BASE_URL']. '/assets/css/bootstrap-responsive.min.css';
		$css[] = $config['BASE_URL']. '/assets/css/default.css';
		// $css[] = $config['BASE_URL']. '/assets/IconHoverEffects/css/default.css';
		$css[] = $config['BASE_URL']. '/assets/IconHoverEffects/css/component.css';
		$css[] = $config['BASE_URL']. '/assets/font-awesome/css/font-awesome.min.css';
		return $css;
	}


	/**
	 * Add all js file
	 * @author : AL-AMIN
	 * @package: My Personal Website
	 */
	function add_js()
	{
		global $config;
		$js = array();

		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>';
		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>';
		$js[] = '<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>';
		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/comment_insert.js" type="text/javascript" charset="utf-8"></script>';
		// $js[] = '<script src="'.$config['BASE_URL']. '/assets/js/masonry.pkgd.min.js" type="text/javascript" charset="utf-8"></script>';

		/** Load Icon Hover Effects Script */
		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/IconHoverEffects/js/modernizr.custom.js"></script>';

		/** <!-- Load the Mootools Framework --> */
		//$js[] = '<script src="http://www.google.com/jsapi" type="text/javascript" charset="utf-8"></script>';
		//$js[] = '<script>google.load("mootools", "1.2.1");</script>';	

		/** <!-- Load the MenuMatic Class --> */
		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/MenuMatic_0.68.3.js" type="text/javascript" charset="utf-8"></script>';
		/**<!-- Create a MenuMatic Instance -->*/
		$js[] = "<script type='text/javascript'>
			window.addEvent('domready', function() {			
				var myMenu = new MenuMatic();
			});	
				
		</script>";
		
		return $js;
	}


	/**
	 * user Logged in Form
	 * @author : AL-AMIN
	 */
	function u_login()
	{
		global $config;

		$token = _random_pw_generate( 100, 5 );

		$u_l  = '<div id="login" class="modal hide fade">';
		$u_l .= '<div class="modal-header">';
		$u_l .= '<a href="" class="close" data-dismiss="modal">&times;</a>';
		$u_l .= '<h3>You Must Login.</h3>';
		$u_l .= '</div><!--  .modal-header  -->';

		$u_l .= '<form action="" method="post" class="form-horizontal">';
		$u_l .= '<div class="modal-body">';
		$u_l .= '<div class="control-group">';
		$u_l .= '<label for="username" class="control-label">Username</label>';
		$u_l .= '<div class="controls">';
		$u_l .= "<input type=\"text\" name=\"uname\" id=\"username\" placeholder=\"Username\" onfocus=\"if(this.placeholder == 'Username'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='Username';}\">";
		$u_l .= '</div><!-- .controls  -->';
		$u_l .= '</div><!--  .control-group  -->';

		$u_l .= '<div class="control-group">';
		$u_l .= '<label for="pw" class="control-label">Password</label>';
		$u_l .= '<div class="controls">';
		$u_l .= "<input type=\"password\" name=\"pw\" id=\"pw\" placeholder=\"password\" onfocus=\"if(this.placeholder == 'password'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='password';}\">";
		$u_l .= '</div><!-- .controls  -->';
		$u_l .= '</div><!--  .control-group  -->';

		$u_l .= '<div class="control-group">';
		$u_l .= '<div class="controls span2">';
		$u_l .= '<label class="checkbox">';
		$u_l .= "<input type=\"checkbox\" name=\"remember\"><span>Remember me.</span>";
		$u_l .= '</label><!-- .checkbox  -->';
		$u_l .= '</div><!--  .controls  -->';
	    $u_l .= '</div><!--  .control-group  -->';

		$u_l .= '<div class="control-group">';
		$u_l .= '<div class="controls">';
		$u_l .= '<a href="'.$config['BASE_URL'] .'/lost.php?p=forgot_password&token='.$token.'">Forgot Password?</a>';
		$u_l .= '</div><!-- .controls  -->';
		$u_l .= '</div><!--  .control-group  -->';
		$u_l .= '</div><!--  .modal-body  -->';

		$u_l .= '<div class="modal-footer">';
		$u_l .= '<input type="submit" name="submit" value="Login" class="btn btn-primary">';
		$u_l .= '</div><!--  .modal-footer  -->';
		$u_l .= '</form><!-- .form-horizontal   -->';
		$u_l .= '</div><!--  #jsc .modal hide fade -->';

		return $u_l;
	}


	/**
	 * user register form
	 */
	function u_register()
	{
		global $config;

		$u_r = '<div id="register" class="modal hide fade">';
		$u_r .= '<div class="modal-header">';
		$u_r .= '<a href="" class="close" data-dismiss="modal">&times;</a>';
		$u_r .= '<h3>Registration Form</h3>';
		$u_r .= '</div><!--  .modal-header  -->';

		$u_r .= '<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">';
		$u_r .= '<div class="modal-body">';
		$u_r .= '<div class="control-group">';
		$u_r .= '<label for="f-name" class="control-label">Full Name</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<input type=\"text\" name=\"f_name\" id=\"f-name\" placeholder=\"Full Name\" onfocus=\"if(this.placeholder == 'Full Name'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='Full Name';}\" >";
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<label for="username" class="control-label">Username</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<input type=\"text\" name=\"username\" id=\"username\" placeholder=\"Username\" onfocus=\"if(this.placeholder == 'Username'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='Username';}\">";
		$u_r .= '<div id="status"></div>';
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<label for="username" class="control-label">Email</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"E-mail\" onfocus=\"if(this.placeholder == 'E-mail'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='E-mail';}\">";
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<label for="password" class="control-label">Password</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<input type=\"password\" name=\"password\" id=\"password\" placeholder=\"password\" onfocus=\"if(this.placeholder == 'password'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='password';}\"/>";
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';
				
		$u_r .= '<div class="control-group">';
		$u_r .= '<label for="password" class="control-label">Confirm Password</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<input type=\"password\" name=\"c_pw\" id=\"password\" placeholder=\"confirm password\" onfocus=\"if(this.placeholder == 'confirm password'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='confirm password';}\"/>";
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';


		$u_r .= '<div class="control-group">';
		$u_r .= '<label class="control-label" for="select">Location</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<select name=\"select-name\" id=\"select\" onchange = \"populate(this.id, 'use')\">";

		$u_r .= '<option value="select-item" >Select Country</option>';
		$u_r .= '<option value="bangladesh" >Bangladesh</option>';
		$u_r .= '<option value="others" >Others</option>';
		$u_r .= '</select>';
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!-- .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<label class="control-label" for="select">Where are you ?</label>';
		$u_r .= '<div class="controls">';
		$u_r .=	"<select name=\"option-name\" id=\"use\"><option value=\"\">Please Select Country</option></select>";
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!-- .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<label class="control-label" for="select">Profile Picture</label>';
		$u_r .= '<div class="controls">';
		$u_r .= '<div id="preview">';
		$u_r .= '<p><img src = "'.$config['BASE_URL']. '/assets/img/noimage.png" name ="user_img" class="img-polaroid prevImg"></p>';
		$u_r .= '</div>';
							
		$u_r .= '<input type="file" name="profile_image" id="photoimg" multiple>';
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!-- .control-group  -->';

		
		$u_r .= '<div class="control-group">';
		$u_r .= '<div class="controls">';
		$u_r .= '<img src="captcha.php?rand=" '.rand(). ' alt="" id="showcaptcha">';
		$u_r .= '<a href="javascript: refreshCaptcha();"><img src="'.$config['BASE_URL']. '/assets/img/captcha_refresh.png"></a>';
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<label for="captcha" class="control-label">Are you human ?</label>';
		$u_r .= '<div class="controls">';
		$u_r .= "<input type=\"text\" name=\"captcha\" id=\"captcha\" placeholder=\"Type Captcha\" onfocus=\"if(this.placeholder == 'Type Captcha'){this.placeholder='';}\" onblur=\"if(this.placeholder==''){this.placeholder='Type Captcha';}\">";
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';

		$u_r .= '<div class="control-group">';
		$u_r .= '<div class="controls">';
		$u_r .= '<input type="submit" name="submit_reg" value="Register" class="btn btn-inverse">';
		$u_r .= '</div><!-- .controls  -->';
		$u_r .= '</div><!--  .control-group  -->';
		$u_r .= '</div><!--  .modal-body  -->';
		$u_r .= '</form><!-- .form-horizontal   -->';
		$u_r .= '</div><!--  #register -->';
		
		return $u_r;
	}
?>