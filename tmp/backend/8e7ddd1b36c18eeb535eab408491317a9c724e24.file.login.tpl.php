<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 16:22:33
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\backend\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32476548470b9d8b015-84258498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7ddd1b36c18eeb535eab408491317a9c724e24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\backend\\login.tpl',
      1 => 1416546388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32476548470b9d8b015-84258498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548470b9de5b72_26356271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548470b9de5b72_26356271')) {function content_548470b9de5b72_26356271($_smarty_tpl) {?><div class="container login">
	<div class="row">
		<div class="span7 offset2 admin-login-page thumbnail">
			<header>
				<h2 class="page-header admin">Administrator Login</h2>
				
				<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?>
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</p>
					</div><!--  .alert .alert-error -->
				<?php }?>
			</header>
			
			<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
					</div><!--  .alert .alert-error  -->
				<?php } ?>
			<?php }?>

			<form action="login.php" class="form-horizontal" method="post">
				<div class="control-group">
					<label class="control-label">Username</label>
					<div class="controls">
						<input type="text" name="username" placeholder="Username"  onfocus="if(this.placeholder == 'Username'){this.placeholder = '';}" onblur="if(this.placeholder == ''){this.placeholder = 'Username'}"  />
					</div><!--  .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Password</label>
					<div class="controls">
						<input type="password" name="password" placeholder="Password"  onfocus="if(this.placeholder == 'Password'){this.placeholder = '';}" onblur="if(this.placeholder == ''){this.placeholder = 'Password'}"  />
					</div><!--  .controls  -->
				</div><!--  .control-group  -->


				<div class="control-group">
					<div class="controls span2">
						 <label class="checkbox">
							<input type="checkbox" name="rememberme"><span>Remember me.</span>
						</label><!-- .checkbox  -->
					</div><!--  .controls  -->
				</div><!--  .control-group  -->

				<!-- <div class="control-group"> -->
					<!-- <div class="controls"> -->
						<!-- <p><a href="">Forgot Your Password?</a></p> -->
					<!-- </div>  .controls  -->
				<!-- </div>  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit" value="Login" class="btn btn-primary">
					</div><!--  .controls  -->
				</div><!--  .control-group  -->
			</form><!--  .form-horizontal  -->
		</div><!--  .span8 offset2  -->
	</div><!--  .row  -->
</div><!--  .container  --><?php }} ?>
