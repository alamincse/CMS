<?php /* Smarty version Smarty-3.1.16, created on 2015-08-01 13:31:13
         compiled from "C:\xampp\htdocs\cms_project\template\fontend\project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2610655bcae01e38467-41519750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e59005bfe1b7f83185205d44cf116357b646e7ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\fontend\\project.tpl',
      1 => 1408888976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2610655bcae01e38467-41519750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_project' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55bcae01eb15e5_77637948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bcae01eb15e5_77637948')) {function content_55bcae01eb15e5_77637948($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="span8 single-page">
			<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_project']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
				<div class="span3">
					<h2><?php echo $_smarty_tpl->tpl_vars['project']->value['widget_sub'];?>
</h2>
					<a style="margin-left:-5px;" href="uploads/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_media'];?>
" class="thumbnail span3"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_media'];?>
" alt=""></a>
					<div>
						<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_content'];?>

					</div>
				</div>
			<?php } ?>
		</div><!-- .span8 .single-page -->
		
		<div class="span3 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3 .sidebar -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
