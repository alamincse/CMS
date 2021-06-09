<?php /* Smarty version Smarty-3.1.16, created on 2014-07-27 19:11:38
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\add_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2048553d4e84d5029a6-16187881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '712c6673817894e6c2c0a9e020af5cc6673b6914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\add_user.tpl',
      1 => 1406481090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2048553d4e84d5029a6-16187881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d4e84d556786_11623921',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4e84d556786_11623921')) {function content_53d4e84d556786_11623921($_smarty_tpl) {?><div class="container content">
	<div class="row">
		<div class="span12">
			<h2 class="page-header alert alert-info">
				<span>Add User... </span>
				<a href="admin.php" class="pull-right btn btn-info">Back</a>
			</h2> <!--  .page-header alert alert-info  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->

	<div class="row">
		<div class="span12 thumbnail">
			<h2 class="page-header admin">Registration Form</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
				<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
						</div> <!--  .alert alert-error  -->
					<?php } ?>
							
				<?php } else { ?>
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>Thank you for registering. Your information has been added to our mailing list.</p>
					</div> <!--  .alert alert-success  -->
				<?php }?>
			<?php }?>
	
			<form action="" method="post" class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Fullname</label>
					<div class="controls">
						<input type="text" name="fullname" placeholder="Full name"  onfocus="if(this.placeholder=='Full name'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Full name'}"  />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Username</label>
					<div class="controls">
						<input type="text" name="username" placeholder="Username"  onfocus="if(this.placeholder=='Username'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Username'}"  />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Email:</label>
					<div class="controls">
						<input type="text" name="email" placeholder="E-mail"  onfocus="if(this.placeholder=='E-mail'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='E-mail'}"  />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Password:</label>
					<div class="controls">
						<input type="password" name="password" placeholder="Password"  onfocus="if(this.placeholder=='Password'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Password'}"  />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Confirm password:</label>
					<div class="controls">
						<input type="password" name="c-pw" placeholder="Confirm password"  onfocus="if(this.placeholder=='Confirm password'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Confirm password'}"  /><br><br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->
			</form> <!--  .form-horizontal  -->
		</div> <!--  .span8 offset2  -->
	</div> <!--  .row  -->
</div> <!--  .container  --><?php }} ?>
