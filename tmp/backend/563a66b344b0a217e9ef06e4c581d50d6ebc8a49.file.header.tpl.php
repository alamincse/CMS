<?php /* Smarty version Smarty-3.1.16, created on 2015-08-13 21:06:17
         compiled from "C:\xampp\htdocs\cms_project\template\backend\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518155befb150b5b21-77614317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '563a66b344b0a217e9ef06e4c581d50d6ebc8a49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\backend\\header.tpl',
      1 => 1439492776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518155befb150b5b21-77614317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55befb152fbf95_05053358',
  'variables' => 
  array (
    'dashboard_name' => 0,
    'site_name' => 0,
    'menu_name' => 0,
    'add_css' => 0,
    'css' => 0,
    'add_js' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55befb152fbf95_05053358')) {function content_55befb152fbf95_05053358($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	
	<title><?php echo $_smarty_tpl->tpl_vars['dashboard_name']->value;?>
 &raquo; <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_tmp1)) {?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['menu_name']->value;?>
<?php }?></title>

	
	<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['add_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/>
	<?php } ?>

	
	<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['add_js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
	<?php } ?>
	
	
	<script type="text/javascript">

		// tinyMCE.init({
		// 	selector : "textarea",
		// 	theme    : "modern",

	

		// 	/** delete p tag or new line */
		// 	forced_root_block : "", 
		//     force_br_newlines : false,
		//     force_p_newlines : false,

		// 	plugins  : [
		//         "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		//         "searchreplace wordcount visualblocks visualchars code fullscreen",
		//         "insertdatetime media nonbreaking save table contextmenu directionality",
		//         "emoticons template paste textcolor"
		//     ],

		//     relative_urls: false,
  // 			remove_script_host : false,
  			
		//     toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | link image jbimages",
		//     toolbar2: "print preview media | forecolor backcolor emoticons",
		//     image_advtab: true,
		//     templates: [
		//         {title: 'Test template 1', content: 'Test 1'},
		//         {title: 'Test template 2', content: 'Test 2'}
		//     ],

		//     file_browser_callback: function(field, url, type, win) {
		//         tinyMCE.activeEditor.windowManager.open({
		//             file: '../assets/js/tinymce/plugins/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
		//             title: 'Our Group Project',
		//             width: 800,
		//             height: 500,
		//             inline: true,
		//             close_previous: false
		//         }, {
		//             window: win,
		//             input: field
		//         });

		//         return false;
		//     }
		// });

		$(document).ready(function(){
			$("#photoimg").change(function(){
				var file = document.getElementById("photoimg").files[0];
				var readImg = new FileReader();
				readImg.readAsDataURL(file);
				readImg.onload = function(e) {
					$('.prevImg').attr('src',e.target.result).fadeIn();
				}		
			})	
		})
		

		// for left menu
		$(function() {

		    var menu_ul = $('.menu > li > ul'),
		        menu_a  = $('.menu > li > a');
		    
		    menu_ul.hide();

		    menu_a.click(function(e) {
		        e.preventDefault();
		        if(!$(this).hasClass('active')) {
		            menu_a.removeClass('active');
		            menu_ul.filter(':visible').slideUp('normal');
		            $(this).addClass('active').next().stop(true,true).slideDown('normal');
		        } else {
		            $(this).removeClass('active');
		            $(this).next().stop(true,true).slideUp('normal');
		        }
		    });

		});
	</script>
	

</head>
<body><?php }} ?>
