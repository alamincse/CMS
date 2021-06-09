<?php 
/**
 * site SEO generate
 * @author  : AL-AMIN
 * @package : hitCoder
 */
	defined('_VALID') or die('Restricted Access!');
	$seo = array();
	$seo['site_name']		= $config['site_name'];
	$seo['site_title']		= $config['site_title'];
	$seo['site_desc']		= $config['meta_desc'];
	$seo['page_name']		= array( 'home' => 'Home', 'project' => 'Project', 'about' => 'About us', 'forum' => 'Forum', 'contact' => 'Contact', 'lost' => 'Forgot password' );
	$seo['index_desc']		= '';
	$seo['index_keywords']	= '';
	$seo['index_meta']		= $config['meta_keywords'];
	$seo['meta_desc']		= $config['meta_desc'];
	$seo['author']			= $config['meta_auth'];
	$seo['single_title']    = $config['site_name'];
	$seo['404_title']	    = '404 Page Not Found!';
	$seo['lost_desc'] 		= '';
	$seo['lost_keywords']   = '';
	$seo['dashboard_name']  = $config['dashboard_name'];
?>