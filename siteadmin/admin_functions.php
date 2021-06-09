<?php 
	
	require_once '../init.php';

	/**
	 *
	 * CMS Category 
	 *
	 */

	function add_categories(){
		global $cont;

		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$cat = $_POST['category'];

			$errors = array();
			if (empty($cat)) {
				$errors[] = 'Please enter your category name.';
			}else{
				$stmt = $cont->prepare("INSERT INTO category VALUES('', :cat)");
				$stmt->bindParam('cat', $cat, PDO::PARAM_STR);
				$stmt->execute();
			}
		}
	}

	function show_categories(){
		global $cont;
		$stmt = $cont->prepare("SELECT * FROM category");
		$stmt->execute();
		return $stmt->fetchAll();
	}

?>