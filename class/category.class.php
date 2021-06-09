<?php 
/**
 * Class Name : Category
 * @author    : AL-AMIN
 * @package   : hitCoder
 */
	class Category
	{
		public static function categories( $category = null )
		{
			if( isset($_GET['cat']) )
			{
				$cat = $_GET['cat'];
				
				if( $cat <> '' ) :
					$single_cat = $category->show_single_cat( $cat );  // here show_single_cat() is define from Article class.
				else :
					$single_cat = '';
					$cat = 'No item search';
				endif;
			}
			else
			{
				$single_cat = '';

				$cat = '404 Category Not Found.';
			}

			return array( 'single_cat' => $single_cat, 'cat' => $cat );
		}
	}
?>