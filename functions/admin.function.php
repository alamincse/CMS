<?php 
/**
 * All functionality for admin section
 * @author  : AL-AMIN
 * @package : My Personal website
 * @access private
 */
	require_once( dirname(dirname( __FILE__ )). '/include/config.php' );

	/**
	 * Edit admin
	 * @return true
	 */
	function edit_admin( $id )
	{
		global $cont;
		$stmt = $cont->prepare("SELECT * FROM cms_admin WHERE admin_id = :id");
		$stmt->bindParam('id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	/**
	 * Show admin post
	 * @param string< array() >
	 */
	function showPost( $id )
	{
		global $cont;
		$stmt = $cont->prepare("SELECT * FROM admin_post WHERE admin_id = :id");
		$stmt->bindParam('id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}



	/**
	 * show all new msg on message tab
	 */
	function new_msg()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM message WHERE msg_read = 0" );
		if( $stmt->execute() )
		{
			$total = $stmt->rowCount();
		}

		return $total;
	}


	/**
	 * when siteadmin click on message tab, 
	 * then autometicaly disable new msg on the message tab
	 */
	function check_msg_menu_complete( $check_msg_menu )
	{
		if( isset($check_msg_menu) )
		{
			global $cont;
			$stmt = $cont->prepare("UPDATE message SET msg_read = -1 WHERE msg_read = 0");
			if( $stmt->execute() )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}


	/**
	 * show all un-read message
	 */
	function new_msg_complete()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM message WHERE msg_read = -1" );
		if( $stmt->execute() )
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	/**
	 * show all msg by inbox item
	 */
	function inbox_msg_count()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM message" );
		$stmt->execute();
		// return $stmt->rowCount() ? true : false;
		return $stmt->rowCount();
	}


	/**
	 * If msg_id = 0 or -1, you are not read this msg.
	 * and you can see read option in this message.
	 */
	function read_all_msg()
	{
		global $cont;
		$stmt = $cont->prepare( "SELECT * FROM message  ORDER BY msg_id DESC" );
		$stmt->execute();
		return $stmt->fetchAll();
	}



	/**
	 * when msg is read, then autometicaly update this function
	 */
	function msg_read_update()
	{
		global $cont;

		if( isset($_GET['reads']))
		{
			$msg = $_GET['reads'];

			$stmt = $cont->prepare("UPDATE message SET msg_read = 1 WHERE msg_id = $msg");
			$stmt->bindValue(1, $msg);
			$stmt->execute();

			$stmt = $cont->prepare( "SELECT * FROM message WHERE msg_id = $msg" );
			$stmt->bindValue(1, $msg);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}


	/**
	 * about widgets area
	 */
	function widgets_about()
	{
		global $cont;
		
	}

	/**
	 * Add Style
	 */
	function add_css()
	{
		global $config;
		$css = array();
		$css[] = $config['BASE_URL']. '/assets/css/bootstrap.min.css';
		$css[] = $config['BASE_URL']. '/assets/css/bootstrap-responsive.min.css';
		$css[] = $config['BASE_URL']. '/assets/font-awesome/css/font-awesome.min.css';
		$css[] = $config['BASE_URL']. '/assets/css/style_admin.css';
		$css[] = $config['BASE_URL']. '/assets/css/left-menu.css';
		return $css;
	}


	/**
	 * Add Script
	 */
	function add_js()
	{
		global $config;
		$js = array();
		$js[] = $config['BASE_URL']. '/assets/js/jquery-1.7.2.min.js';
		$js[] = $config['BASE_URL']. '/assets/js/bootstrap.min.js';
		$js[] = $config['BASE_URL']. '/assets/js/tinymce/tinymce.min.js';
		$js[] = $config['BASE_URL']. '/assets/js/admin.script.js';
		return $js;
	}
?>