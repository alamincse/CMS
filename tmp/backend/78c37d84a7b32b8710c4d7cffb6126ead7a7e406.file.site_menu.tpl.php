<?php /* Smarty version Smarty-3.1.16, created on 2014-08-24 18:56:47
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\site_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1180753d2c25dc65112-90514991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78c37d84a7b32b8710c4d7cffb6126ead7a7e406' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\site_menu.tpl',
      1 => 1408899300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1180753d2c25dc65112-90514991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d2c25dca01f5_04360767',
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d2c25dca01f5_04360767')) {function content_53d2c25dca01f5_04360767($_smarty_tpl) {?><div class="container content">
	<div class="row">
		<div class="span4">
			<ul class="nav nav-list">
				<li>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<a href="edit_menu.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
&menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_title'];?>
</a> 
						<a href="delete_menu.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
&menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_title'];?>
" class="pull-right">| &nbsp;&nbsp; Delete</a> 
							
						<a href="edit_menu.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
&menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_title'];?>
" class="pull-right"> Edit &nbsp; &nbsp; </a> 
					<?php } ?>
				</li>
			</ul> <!--  .nav .nav-list  -->

			<h3><a href="add_menu.php">Add menu</a></h3>	
		</div> <!--  .span4  -->
	</div> <!--  .row  -->
</div> <!--  .container content  -->
<?php }} ?>
