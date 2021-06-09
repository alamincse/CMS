<?php /* Smarty version Smarty-3.1.16, created on 2014-07-28 10:48:35
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\edit_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309153d3d01ddfeb07-64590155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e573a10c08e126c5a3fd1bec7ee3bb5a2a07f94f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\edit_menu.tpl',
      1 => 1406537313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309153d3d01ddfeb07-64590155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d3d01de55e63_64270629',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'edit_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d3d01de55e63_64270629')) {function content_53d3d01de55e63_64270629($_smarty_tpl) {?><div class="container content well">
	<div class="row">
		<div class="span12">
			<h2 class="page-header">Edit menu in your site. <a href="site_menu.php" class="pull-right btn btn-inverse">Back</a></h2>
			
			<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
				<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['error']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['error']->value]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['error']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['error']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['error']->value]->_loop = true;
?>
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

						</div> <!--  .alert alert-error  -->
					<?php } ?>
				<?php }?>
			<?php }?>

			<form action="" class="form-horizontal" method="post">

				<div class="control-group">
					<label >Menu Title</label>
					<input type="text" name="menu-title" class="span12" value="<?php echo $_smarty_tpl->tpl_vars['edit_menu']->value['menu_title'];?>
">
				</div> <!--  .control  -->

				<div class="control-group">
					<label >Menu Content</label>
					<textarea name="menu-content" class="span8" rows="10"><?php echo $_smarty_tpl->tpl_vars['edit_menu']->value['menu_content'];?>
</textarea>
				</div> <!--  .control  -->

				<div class="control-group">
					<input type="submit" name="submit" value="Change menu" class="btn btn-inverse">
				</div> <!--  .control  -->
			</form> <!--  .form-horizontal  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container  --><?php }} ?>
