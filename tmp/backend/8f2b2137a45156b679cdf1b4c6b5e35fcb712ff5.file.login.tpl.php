<?php /* Smarty version Smarty-3.1.16, created on 2015-08-03 07:24:37
         compiled from "C:\xampp\htdocs\cms_project\template\backend\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:447855befb158490b7-94068329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2b2137a45156b679cdf1b4c6b5e35fcb712ff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\backend\\login.tpl',
      1 => 1416546390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '447855befb158490b7-94068329',
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
  'unifunc' => 'content_55befb159b33e4_45557450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55befb159b33e4_45557450')) {function content_55befb159b33e4_45557450($_smarty_tpl) {?><div class="container login">
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
