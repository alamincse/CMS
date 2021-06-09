<?php /* Smarty version Smarty-3.1.16, created on 2014-07-27 20:43:29
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\admin_view_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2443553d5348ef2f5f6-22845659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec0927772046e0cb479e53918c66ac4b47bd0ed5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\admin_view_profile.tpl',
      1 => 1406486607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2443553d5348ef2f5f6-22845659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d5348f03fec4_02437468',
  'variables' => 
  array (
    'site_admin' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d5348f03fec4_02437468')) {function content_53d5348f03fec4_02437468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container content">
	<div class="row">
		<div class="span12">
			<h2 class="alert alert-info">
				<span style="font-family:Ubuntu;">User Information Area</span>
				<a href="admin.php" class="pull-right btn btn-info">Back</a>
			</h2>

			<?php if (isset($_smarty_tpl->tpl_vars['site_admin']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site_admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?>				
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Admin Fullname : </div>
									<div class="span4">
										<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_fullname'];?>

									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->
								
							</a> <!--  #collapseOne  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseOne" class="accordion-body collapse">
							<div class="accordion-inner">
									
							
								<form action="" method="post">
									<div class="control-group">
										<label>Fullname </label>
										<div class="controls">
											<input type="text" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_fullname'];?>
">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_fullname" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseOne  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseTwo" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Admin Username : </div>
									<div class="span4">
										<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_username'];?>

									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseTwo  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseTwo" class="accordion-body collapse">
							<div class="accordion-inner">							
								<form action=""  method="post">								
									<div class="control-group">
										<label>Username </label>
										<div class="controls">
											<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_username'];?>
">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_username" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseTwo  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseThree" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">								
							<div class="row">
								<div class="span2">Admin Email : </div>
									<div class="span4">
										<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_email'];?>

									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseThree  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseThree" class="accordion-body collapse">
							<div class="accordion-inner">
							
								<form action=""  method="post">								
									<div class="control-group">
										<label>Email </label>
										<div class="controls">
											<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_email'];?>
">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_email" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>

							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseThree  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseFour" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Admin Password : </div>
									<div class="span4">
										<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_password'];?>

									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseFour  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseFour" class="accordion-body collapse">
							<div class="accordion-inner">							
								<form action="" method="post">
									<div class="control-group">
										<label>Password </label>
										<div class="controls">
											<input type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_password'];?>
">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_password" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseFour  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseFive" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Join date : </div>
									<div class="span4">
										<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['admin']->value['date_time'],'%B %d, %Y at %I: %M %p');?>

									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseFive  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseFive" class="accordion-body collapse">
							<div class="accordion-inner">
								<p><a href="#">Don\'t allow change your join date!</a></p>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseFive  -->
					</div> <!--  .accordion-group  -->
				</div> <!--  .accordion #accordion2  -->
				<p><i class="pull-right"><a href="admin_view_post.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_id'];?>
&author=<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_username'];?>
">Show your post</a></i></p> 	
			<?php } ?>	
			<?php }?>
		</div> <!--  .span12  -->

	</div> <!--  .row  -->
</div> <!--  .container content  --><?php }} ?>
