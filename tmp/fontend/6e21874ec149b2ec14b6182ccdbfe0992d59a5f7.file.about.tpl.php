<?php /* Smarty version Smarty-3.1.16, created on 2015-08-01 13:31:15
         compiled from "C:\xampp\htdocs\cms_project\template\fontend\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834755bcae033ca3c2-51379549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e21874ec149b2ec14b6182ccdbfe0992d59a5f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\fontend\\about.tpl',
      1 => 1417620768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834755bcae033ca3c2-51379549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about_me' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55bcae0343b810_82785601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bcae0343b810_82785601')) {function content_55bcae0343b810_82785601($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="single-page span8">
			<?php  $_smarty_tpl->tpl_vars['about'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['about']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about_me']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['about']->key => $_smarty_tpl->tpl_vars['about']->value) {
$_smarty_tpl->tpl_vars['about']->_loop = true;
?>
				<h2 class="page-header about-header"><?php echo $_smarty_tpl->tpl_vars['about']->value['widget_sub'];?>
</h2>
				<span class="pull-right">
					<div id="slider">
					<a href="uploads/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_media'];?>
" target="_blank">
					<img src="uploads/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_media'];?>
" alt="" class="thumbnail span3"></a>
					</div>
				</span><!--  .pull-right -->
				<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_content'];?>

			<?php } ?>
		</div><!-- .span8  -->
		
		<div class="span3 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3 .sidebar -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
