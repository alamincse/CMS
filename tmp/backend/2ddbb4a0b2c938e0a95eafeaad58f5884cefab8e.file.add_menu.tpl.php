<?php /* Smarty version Smarty-3.1.16, created on 2014-07-25 23:08:57
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\add_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2948653d2c1a0482785-92257810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ddbb4a0b2c938e0a95eafeaad58f5884cefab8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\add_menu.tpl',
      1 => 1406322532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2948653d2c1a0482785-92257810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d2c1a04c63a5_63211660',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d2c1a04c63a5_63211660')) {function content_53d2c1a04c63a5_63211660($_smarty_tpl) {?><div class="container content well">
	<div class="row">
		<div class="span12">
			<h2 class="page-header">
				<span>Add Menu</span>
				<p><a href="site_menu.php" class="pull-right btn btn-normal">Back menu item</a></p>
			</h2>

			<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
				<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

						</div> <!--  .alert alert-error  -->
					<?php } ?>
				<?php } else { ?>
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>Well done! You have successfully added menu.<a href="site_menu.php">View menu</a></p>
					</div> <!--  .alert alert-success  -->
				<?php }?>
			<?php }?>

			<form action="" class="form-horizontal" method="post">
				<div class="control-group">
					<label >Menu Title</label>
					<input type="text" name="menu-title" placeholder="Menu title" class="span12"  onfocus="if(this.placeholder=='Menu title'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Menu title'}"  />
				</div> <!--  .control  -->

				<div class="control-group">
					<label >Menu Content</label>
					<textarea name="menu-content" class="span8" rows="10"  placeholder="Content"></textarea>
				</div> <!--  .control  -->

				<div class="control-group">
					<input type="submit" name="submit" value="Add menu" class="btn btn-inverse">
				</div> <!--  .control  -->
			</form> <!--  .form-horizontal  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container  --><?php }} ?>
